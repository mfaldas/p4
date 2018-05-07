@extends('layouts.master')

@section('title')
    Saved Verbs
@endsection

@section('content')

    @if(count($list) == 0)
        <h1>There are No Words in Your List</h1>

    @else

        <form method='GET' action='/delete'>

            <h1>Your List of Verbs</h1>

            <table class='verbTable' id='savedVerbTable'>
                <tr>
                    <th class='Heading' id='eHeading'>English</th>
                    <th class='Heading' id='frtHeading'>Filipino Root</th>
                    <th class='Heading' id='fprtHeading'>Past Tense</th>
                    <th class='Heading' id='fpatheading'>Present Tense</th>
                    <th class='Heading' id='fftHeading'>Future Tense</th>
                    <th class='Heading' id='jrtHeading'>Japanese Root</th>
                    <th class='Heading' id='removeHeading'>Remove</th>
                </tr>

                @foreach($list as $verb)
                    <tr>
                    <tr id='searchTr'>
                        <th class = 'Th' id='eTh'> <a href='/verbs/{{ $verb->id }}'>{{ $verb->englishTranslation }}</a> </th>
                        <th class = 'Th' id='frtTh'> {{ $verb->filipinoRootTranslation}} </th>
                        <th class = 'Th' id='fprtTh'> {{ $verb->filipinoPastTenseTranslation }}</th>
                        <th class = 'Th' id='fpatTh'> {{ $verb->filipinoPresentTenseTranslation }} </th>
                        <th class = 'Th' id='fftTh'> {{ $verb->filipinoFutureTenseTranslation }} </th>
                        <th class = 'Th' id='jrtTh'> {{ $verb->japaneseRootTranslation }} </th>
                        <th id='removeCheck'><input type='checkbox' value='{{$verb->id}}' name='checked[]'></th>
                    </tr>

                @endforeach

            </table>

            <input type='submit' value='Delete' class='btn btn-primary btn-small'>

        </form>

    @endif

@endsection