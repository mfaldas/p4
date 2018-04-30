<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\Verb;
use App\Favorite;

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

        return redirect('/verbs/' . $request->toUpdate);
    }

    public function edit(Request $request)
    {
        $toEditId = (int)($request->toEdit);
        $toEditVObject = Verb::find($toEditId);

        return view('verbs.edit')->with([
            'toUpdate' => $toEditVObject->id,
            'englishTranslation' => $toEditVObject->englishTranslation,
            'filipinoRootTranslation' => $toEditVObject->filipinoRootTranslation,
            'filipinoPastTenseTranslation' => $toEditVObject->filipinoPastTenseTranslation,
            'filipinoPresentTenseTranslation' => $toEditVObject->filipinoPresentTenseTranslation,
            'filipinoFutureTenseTranslation' => $toEditVObject->filipinoFutureTenseTranslation,
            'japaneseRootTranslation' => $toEditVObject->japaneseRootTranslation,
        ]);
    }

    public function delete(Request $request)
    {
        $toDelete = $request->checked;

        foreach ($toDelete as $key) {
            Vsave::destroy($key);
        }

        $list = Vsave::all();

        return redirect('/saved')->with([
            'list' => $list
        ]);
    }

    public function saved()
    {
        $list = Favorite::all();

        return view('verbs.saved')->with([
            'list' => $list
        ]);
    }

    public function add(Request $request)
    {
        #Convert data from String to Int
        $toAddId = (int)($request->toAdd);
        $toAdd = Verb::find($toAddId);

        $favorite = new Favorite();
        $favorite->faveWord = $toAdd->englishTranslation;
        $favorite->save();
        $faveToAdd = Favorite::find($favorite->id);


        $toAdd->favorites()->save($faveToAdd);

        $list = Favorite::all();



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
