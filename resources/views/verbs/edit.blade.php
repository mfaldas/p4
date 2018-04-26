@extends('layouts.master')

@section('title')
    Saved Verbs
@endsection

@section('content')

    <form method='POST' action='/update'>

        {{csrf_field()}}

        <h1>Edit for {{$englishTranslation}}</h1>

        <label for='filipinoRootTranslation'>* Filipino Root Translation</label>
        <input type='text'
               name='filipinoRootTranslation'
               id='filipinoRootTranlsation'
               value='{{ old('filipinoRootTranslation', $filipinoRootTranslation) }}'>
        @include('modules.error-field', ['field' => 'filipinoRootTranslation'])

        <label for='filipinoPastTenseTranslation'>* Filipino Past Tense Translation</label>
        <input type='text'
               name='filipinoPastTenseTranslation'
               id='filipinoPastTenseTranslation'
               value='{{ old('filipinoPastTenseTranslation', $filipinoPastTenseTranslation) }}'>
        @include('modules.error-field', ['field' => 'filipinoPastTenseTranslati'])

        <label for='filipinoPresentTenseTranslation'>* Filipino Present Tense Translation</label>
        <input type='text'
               name='filipinoPresentTenseTranslation'
               id='filipinoPresentTenseTranslation'
               value='{{ old('filipinoPresentTenseTranslation', $filipinoPresentTenseTranslation) }}'>
        @include('modules.error-field', ['field' => 'filipinoPresentTenseTranslation'])

        <label for='filipinoFutureTenseTranslation'>* Filipino Future Tense Translation</label>
        <input type='text'
               name='filipinoFutureTenseTranslation'
               id='filipinoFutureTenseTranslation'
               value='{{ old('filipinoFutureTenseTranslation', $filipinoFutureTenseTranslation) }}'>
        @include('modules.error-field', ['field' => 'filipinoFutureTenseTranslation'])

        <label for='japaneseRootTranslation'>* Japanese Root Translation</label>
        <input type='text'
               name='japaneseRootTranslation'
               id='japaneseRootTranslation'
               value='{{ old('japaneseRootTranslation', $japaneseRootTranslation) }}'>
        @include('modules.error-field', ['field' => 'japaneseRootTranslation'])

        <input type='hidden' name='toUpdate' value={{$toUpdate}}>
        <input type='submit' value='Update' class='btn btn-primary btn-small'>

    </form>

@endsection

