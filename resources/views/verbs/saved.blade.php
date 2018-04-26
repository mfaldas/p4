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

    <table id="t02">
        <tr>
            <th>English</th>
            <th>Filipino Root</th>
            <th>Filipino Past Tense</th>
            <th>Filipino Present Tense</th>
            <th>Filipino Future Tense</th>
            <th>Japanese Root</th>
            <th>Remove</th>
        </tr>

        @foreach($list as $verb)
            <tr>
                <th><a href='/verbs/{{ $verb->id }}'>{{ $verb->englishTranslation }}</a></th>
                <th> {{ $verb->filipinoRootTranslation}} </th>
                <th> {{ $verb->filipinoPastTenseTranslation }}</th>
                <th> {{ $verb->filipinoPresentTenseTranslation }} </th>
                <th> {{ $verb->filipinoFutureTenseTranslation }} </th>
                <th> {{ $verb->japaneseRootTranslation }} </th>
                <th><input type='checkbox' value='{{$verb->id}}' name='checked[]'></th>
            </tr>

        @endforeach

    </table>

        <input type='submit' value='Delete' class='btn btn-primary btn-small'>

    </form>

@endif

@endsection