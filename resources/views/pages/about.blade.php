{{-- About Page --}}
{{-- Created By: Marc-Eli Faldas --}}
{{-- Last Modified: 5/8/2018  --}}

@extends('layouts.master')

@section('title')
    About Filipino Dictionary
@endsection

@section('content')
    <h1>About</h1>

    <table class='aboutTable'>

        <tr>
            <th class='languageHeading' id='englishHeading'>
                English
            </th>
            <th class='languageHeading' id='filipinoHeading'>
                Pilipino
            </th>

        </tr>

        <tr>
            <th class='description' id='englishDescription'>
                The Conjugation of Filipino Verbs is a little bit hard. That is why we have this useful dictionary! Find verbs, add them to your list, and start practicing!
            </th>
            <th class='description' id='filipinoDescription'>
                Ang conjugation na mga Pilipino pandiwa ay mahirap. Kaya nga mayroon diksyunaryo kami para sa inyo! Hanapin mo mga pandiwa, lagyan niyo sa listahan ninyo, atsaka praktisin niyo!
            </th>
        </tr>

        <tr>
            <th class='languageHeading' id='japaneseHeading'>
                日本語
            </th>
            <th class='languageHeading' id='spanishHeading'>
                Español
            </th>
        </tr>
        <tr>
            <th class='description' id='japaneseDescription'>
                フィリピン語のバーブのコンジュゲーションは難しいです。それは、私たちはこの辞書があります。バーブを拾ったりリストに付けたり練習したりします！
            </th>
            <th class='description' id='spanishDescription'>
                La conjugación de los verbos filipinos es difícil. Por eso, tenemos este diccionario para usted. Busca verbos, agregalos a su lista y practica!
            </th>
        </tr>


    </table>

@endsection