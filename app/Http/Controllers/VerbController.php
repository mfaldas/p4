<?php

/**
 * VerbController.php
 * Provides functionality for CRUD Operations.
 * Created by: Marc-Eli Faldas
 * Last Modified: 5/8/2018
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\Verb;
use App\User;
use Auth;

class VerbController extends Controller
{
    /**
     * U in CRUD
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        //Validates the request.  Make sure everything is required.
        $this->validate($request, [
            'filipinoRootTranslation' => 'required',
            'filipinoPastTenseTranslation' => 'required',
            'filipinoPresentTenseTranslation' => 'required',
            'filipinoFutureTenseTranslation' => 'required',
            'japaneseRootTranslation' => 'required'
        ]);

        //Finds Verb object in Verb Table
        $toUpdateVObject = Verb::find($request->toUpdate);

        //Updates
        $toUpdateVObject->filipinoRootTranslation = $request->filipinoRootTranslation;
        $toUpdateVObject->filipinoPastTenseTranslation = $request->filipinoPastTenseTranslation;
        $toUpdateVObject->filipinoPresentTenseTranslation = $request->filipinoPresentTenseTranslation;
        $toUpdateVObject->filipinoFutureTenseTranslation = $request->filipinoFutureTenseTranslation;
        $toUpdateVObject->japaneseRootTranslation = $request->japaneseRootTranslation;

        //Saves
        $toUpdateVObject->save();

        //Redirects back to the page where the verb that was edited.  Provides alert message.
        return redirect('/verbs/' . $request->toUpdate)->with([
            'alertEditsSaved' => 'Edits Saved.'
        ]);
    }

    /**
     * Checks if the user can edit.  If user has access, directs to the edit page.
     * If not, returns user back to page with alert.
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function edit(Request $request)
    {
        $user = Auth::user();
        $toEditId = (int)($request->toEdit);
        $toEditVObject = Verb::find($toEditId);

        //If user has access, takes them to the edit page.
        //If user has no access, redirect back to the page with alert.
        if ($user->editAccess) {
            return view('verbs.edit')->with([
                'toUpdate' => $toEditVObject->id,
                'englishTranslation' => $toEditVObject->englishTranslation,
                'filipinoRootTranslation' => $toEditVObject->filipinoRootTranslation,
                'filipinoPastTenseTranslation' => $toEditVObject->filipinoPastTenseTranslation,
                'filipinoPresentTenseTranslation' => $toEditVObject->filipinoPresentTenseTranslation,
                'filipinoFutureTenseTranslation' => $toEditVObject->filipinoFutureTenseTranslation,
                'japaneseRootTranslation' => $toEditVObject->japaneseRootTranslation,
            ]);
        } else {
            return redirect('verbs/' . $toEditId)->with([
                'verb' => $toEditVObject,
                'alertNoAuth' => 'You do not have authorization to edit.'
            ]);
        }
    }

    /**
     * D in CRUD
     * Deletes rows in the pivot table
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(Request $request)
    {
        $toDelete = $request->checked;
        $user = Auth::user();

        //Checks if the user has anything to delete
        if (!($toDelete == null)) {
            foreach ($toDelete as $key) {
                $user->verbs()->detach($key);
            }
        }

        //Saves the new list
        $list = $user->verbs;

        //Redirects back to the saved page
        return redirect('/saved')->with([
            'list' => $list
        ]);
    }

    /**
     * Returns the list of verbs associated with the user.
     * @return $list
     */
    public function saved()
    {
        $user = Auth::user();
        $list = $user->verbs;

        return view('verbs.saved')->with([
            'list' => $list
        ]);
    }

    /**
     * C in CRUD
     * Associates verb to user.  Creates rows in the pivot table.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add(Request $request)
    {
        #Convert data from String to Int
        $toAddId = (int)($request->toAdd);
        $toAdd = Verb::find($toAddId);
        $user = Auth::user();

        # The user's list
        $list = $user->verbs;

        # Check if verb exits
        $hasVerb = $list->contains($toAdd);

        if (!$hasVerb) {
            $user->verbs()->save($toAdd);
        }

        $list = $user->verbs;

        return redirect('/saved')->with([
            'list' => $list
        ]);
    }

    /**
     * R in CRUD
     * Finds the searchterm in the whole table
     * @param Request $request
     * @return view->with $searchterm and $searchresults
     */
    public function search(Request $request)
    {
        //Empty Array
        $searchResults = null;

        //Search term to find
        $searchTerm = $request->input('searchTerm', null);

        if ($searchTerm) {
            $searchResults = Verb::where('englishTranslation', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('filipinoRootTranslation', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('filipinoPastTenseTranslation', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('filipinoPresentTenseTranslation', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('filipinoFutureTenseTranslation', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('japaneseRootTranslation', 'LIKE', '%' . $searchTerm . '%')
                ->get();
        }

        return view('verbs.search')->with([
            'searchTerm' => $searchTerm,
            'searchResults' => $searchResults
        ]);
    }

    /**
     * Shows the verb of interest.
     * @param $id
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function show($id)
    {
        $verb = Verb::find($id);

        if (!$verb) {
            return redirect('/verb')->with(
                ['alert' => 'Verb ' . $id . ' not found.']
            );
        }

        return view('verbs.show')->with([
            'verb' => $verb
        ]);
    }
}
