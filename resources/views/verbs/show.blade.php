@extends('layouts.master')

@section('title')
    {{ $verb->filipinoRootTranslation }}
@endsection

@push('head')
    <link href='/css/books/show.css' type='text/css' rel='stylesheet'>
@endpush

@section('content')

    <div class='row'>

        @include('modules.searchBar')

    </div>

    <div class='row'>

        <div class='parent' id='verbDiv'>


            <div class='col-sm-4'>

                <div class='row'>

                    <h1>{{ $verb->filipinoRootTranslation }}</h1>

                    <h5 id='englishSubHeading'>
                        {{ $verb->englishTranslation }}
                    </h5>
                </div>

                <div class='row'>

                    <div class='col-sm-6'>

                        <span class="pull-right">
                            <form method='POST' action='/add'>

                                {{ csrf_field() }}
                                <input type='hidden' name='toAdd' value='{{$verb->id}}'>
                                <input type='submit' value='Add' class='btn btn-primary btn-small'>
                            </form>
                        </span>
                    </div>

                    <div class='col-sm-6' id='abColumn'>
                        <span class="pull-left">
                            <form method='GET' action='/edit'>
                                <input type='hidden' name='toEdit' value='{{$verb->id}}'>
                                <input type='submit' value='Edit' class='btn btn-primary btn-small'>
                            </form>
                        </span>
                    </div>

                </div>

            </div>

            <div class='col-sm-8'>
                <table class="table table-bordered">
                    <tr>
                        <th><h6>Root Translation: </h6></th>
                        <th><h6>{{$verb->filipinoRootTranslation}}</h6></th>
                    </tr>
                    <tr>
                        <th><h6>Present Tense Translation: </h6></th>
                        <th><h6>{{$verb->filipinoPresentTenseTranslation}}</h6>
                    </tr>
                    <tr>
                        <th><h6>Past Tense Translation: </h6></th>
                        <th><h6>{{$verb->filipinoPastTenseTranslation}}</h6>
                    </tr>
                    <tr>
                        <th><h6>Future Tense Translation: </h6></th>
                        <th><h6>{{$verb->filipinoFutureTenseTranslation}}</h6>
                    </tr>
                    <tr>
                        <th><h6>Japanese Root Translation: </h6></th>
                        <th><h6>{{$verb->japaneseRootTranslation}}</h6></th>
                    </tr>
                </table>

            </div>

        </div>

    </div>




@endsection
