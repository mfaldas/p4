<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\Verb;
use App\User;
use Auth;

class VerbController extends Controller
{
    public function update(Request $request)
    {
        $this->validate($request, [
            'filipinoRootTranslation' => 'required',
            'filipinoPastTenseTranslation' => 'required',
            'filipinoPresentTenseTranslation' => 'required',
            'filipinoFutureTenseTranslation' => 'required',
            'japaneseRootTranslation' => 'required'
        ]);

        $toUpdateVObject = Verb::find($request->toUpdate);

        $toUpdateVObject->filipinoRootTranslation = $request->filipinoRootTranslation;
        $toUpdateVObject->filipinoPastTenseTranslation = $request->filipinoPastTenseTranslation;
        $toUpdateVObject->filipinoPresentTenseTranslation = $request->filipinoPresentTenseTranslation;
        $toUpdateVObject->filipinoFutureTenseTranslation = $request->filipinoFutureTenseTranslation;
        $toUpdateVObject->japaneseRootTranslation = $request->japaneseRootTranslation;

        $toUpdateVObject->save();

        return redirect('/verbs/' . $request->toUpdate)->with([
            'alertEditsSaved' => 'Edits Saved.'
        ]);
    }

    public function edit(Request $request)
    {
        $user = Auth::user();
        $toEditId = (int)($request->toEdit);
        $toEditVObject = Verb::find($toEditId);

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

    public function delete(Request $request)
    {
        $toDelete = $request->checked;
        $user = Auth::user();

        if (!($toDelete == null)) {
            foreach ($toDelete as $key) {
                $user->verbs()->detach($key);
            }
        }

        $list = $user->verbs;

        return redirect('/saved')->with([
            'list' => $list
        ]);
    }

    public function saved()
    {
        $user = Auth::user();
        $list = $user->verbs;

        return view('verbs.saved')->with([
            'list' => $list
        ]);
    }

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

    public function search(Request $request)
    {
        # Start with an empty array of search results; books that
        # match our search query will get added to this array
        $searchResults = null;

        # Store the searchTerm in a variable for easy access
        # The second parameter (null) is what the variable
        # will be set to *if* searchTerm is not in the request.
        $searchTerm = $request->input('searchTerm', null);

        # Placeholder

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

    /*
     * GET /verbs/{id}
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
