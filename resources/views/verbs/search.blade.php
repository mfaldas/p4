{{-- Search for a Page--}}
{{-- Search for Verb and Present Results --}}
{{-- Created By: Marc-Eli Faldas --}}
{{-- Last Modified: 5/8/2018  --}}

@extends('layouts.master')

@section('title')
    {{ $searchTerm }}
@endsection

@section('content')
    <h1>Search</h1>

    <div class='row'>

    @include('modules.search-bar')

    </div>

    <div class='row'>

    @if($searchTerm)
        <hr id='separator'>
        <h2>Results For: <em>{{ $searchTerm }}</em></h2>

        @if(count($searchResults) == 0)
            No Matches Found.
        @else

            <table class='verbTable' id="masterVerbTable">
                <tr>
                    <th class='Heading' id='eHeading'>English</th>
                    <th class='Heading' id='frtHeading'>Filipino Root</th>
                    <th class='Heading' id='fprtHeading'>Past Tense</th>
                    <th class='Heading' id='fpatheading'>Present Tense</th>
                    <th class='Heading' id='fftHeading'>Future Tense</th>
                    <th class='Heading' id='jrtHeading'>Japanese Root</th>
                </tr>

                @foreach($searchResults as $verb)
                    <tr id='searchTr'>
                        <th class='Th' id='eTh'><a href='/verbs/{{ $verb->id }}'>{{ $verb->englishTranslation }}</a>
                        </th>
                        <th class='Th' id='frtTh'> {{ $verb->filipinoRootTranslation}} </th>
                        <th class='Th' id='fprtTh'> {{ $verb->filipinoPastTenseTranslation }}</th>
                        <th class='Th' id='fpatTh'> {{ $verb->filipinoPresentTenseTranslation }} </th>
                        <th class='Th' id='fftTh'> {{ $verb->filipinoFutureTenseTranslation }} </th>
                        <th class='Th' id='jrtTh'> {{ $verb->japaneseRootTranslation }} </th>
                    </tr>

                @endforeach

            </table>
        @endif
    @endif

    </div>

@endsection