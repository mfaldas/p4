{{-- Contact Page --}}
{{-- Created By: Marc-Eli Faldas --}}
{{-- Last Modified: 5/8/2018  --}}

@extends('layouts.master')

@section('title')
   Contact
@endsection

@section('content')
    <h1>Contact</h1>
    <p>
        Questions? Email us at {{ $email }}
    </p>
@endsection