{{-- Register Page --}}
{{-- Integrated some Code from Lecture  --}}
{{-- Created By: Marc-Eli Faldas --}}
{{-- Last Modified: 5/8/2018  --}}

@extends('layouts.master')

@section('content')
    <h1>Register</h1>

    <h5 class='guestSubheading'>Already have an account? <a href='/login'>Login here...</a></h5>

    <div class='guestDiv'>
        <form method='POST' action='{{ route('register') }}'>
            {{ csrf_field() }}

            <label for='name'>Name</label>
            <input id='name' type='text' name='name' value='{{ old('name') }}' required autofocus>
            @include('modules.error-field', ['field' => 'name'])

            <label for='email'>E-Mail Address</label>
            <input id='email' type='email' name='email' value='{{ old('email') }}' required>
            @include('modules.error-field', ['field' => 'email'])

            <label for='password'>Password (min: 6)</label>
            <input id='password' type='password' name='password' required>
            @include('modules.error-field', ['field' => 'password'])

            <label for='password-confirm'>Confirm Password</label>
            <input id='password-confirm' type='password' name='password_confirmation' required>

            <button type='submit' class='btn btn-primary'>Register</button>
        </form>

    </div>
@endsection