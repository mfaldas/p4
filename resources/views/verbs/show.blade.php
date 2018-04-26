@extends('layouts.master')

@section('title')
    {{ $verb->filipinoRootTranslation }}
@endsection

@push('head')
    <link href='/css/books/show.css' type='text/css' rel='stylesheet'>
@endpush

@section('content')

    <form method='GET' action='/verbs/search'>

        <fieldset>
            <label for='searchTerm'>Find a verb:</label>
            <input type='text' name='searchTerm' id='searchTerm' value='{{ $verb->englishTranslation  }}'>

        </fieldset>

        <input type='submit' value='Search' class='btn btn-primary btn-small'>

    </form>


    <div class='parent' id='verbDiv'>

        <h1>{{ $verb->filipinoRootTranslation }}</h1>

        <h5 id='englishSubHeading'>
            {{ $verb->englishTranslation }}

        </h5>

        <h6>Root Translation: {{$verb->filipinoRootTranslation}}</h6>
        <h6>Past Tense Translation: {{$verb->filipinoPastTenseTranslation}}</h6>
        <h6>Present Tense Translation: {{$verb->filipinoPresentTenseTranslation}}</h6>
        <h6>Future Tense Translation: {{$verb->filipinoutureTenseTranslation}}</h6>
        <h6>JapaneseTranslation: {{$verb->japaneseRootTranslation}}</h6>

        <form method='POST' action='/add'>

            {{ csrf_field() }}
            <input type='hidden' name='toAdd' value='{{$verb->id}}'>

            <input type='submit' value='Add' class='btn btn-primary btn-small'>
        </form>

        <form method='GET' action='/edit'>
            <input type='hidden' name='toEdit' value='{{$verb->id}}'>
            <input type='submit' value='Edit' class='btn btn-primary btn-small'>
        </form>

    </div>



@endsection
