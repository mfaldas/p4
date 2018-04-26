@extends('layouts.master')

@section('title')
    {{ $searchTerm }}
@endsection

@section('content')
    <h1>Search</h1>

    <form method='GET' action='/verbs/search'>

        <fieldset>
            <label for='searchTerm'>Find a verb:</label>
            <input type='text' name='searchTerm' id='searchTerm' value='{{ $searchTerm }}'>

        </fieldset>

        <input type='submit' value='Search' class='btn btn-primary btn-small'>

    </form>

    @if($searchTerm)
        <h2>Results for query: <em>{{ $searchTerm }}</em></h2>

        @if(count($searchResults) == 0)
            No matches found.
        @else

            <table id="t01">
                <tr>
                    <th>English</th>
                    <th>Filipino Root</th>
                    <th>Filipino Past Tense</th>
                    <th>Filipino Present Tense</th>
                    <th>Filipino Future Tense</th>
                    <th>Japanese Root</th>
                </tr>

                @foreach($searchResults as $verb)
                    <tr>
                        <th> <a href='/verbs/{{ $verb->id }}'>{{ $verb->englishTranslation }}</a> </th>
                        <th> {{ $verb->filipinoRootTranslation}} </th>
                        <th> {{ $verb->filipinoPastTenseTranslation }}</th>
                        <th> {{ $verb->filipinoPresentTenseTranslation }} </th>
                        <th> {{ $verb->filipinoFutureTenseTranslation }} </th>
                        <th> {{ $verb->japaneseRootTranslation }} </th>
                    </tr>

                @endforeach

            </table>
        @endif
    @endif
@endsection