{{-- Login Page --}}
{{-- Integrated some Code from Lecture  --}}
{{-- Created By: Marc-Eli Faldas --}}
{{-- Last Modified: 5/8/2018  --}}

@extends('layouts.master')

@section('content')

    <h1>LOGIN</h1>

    <h5 class='guestSubheading'>Don't have an account? <a href='/register'>Register here...</a></h5>

    <div class='guestDiv'>

        <form method='POST' action='{{ route('login') }}'>

            {{ csrf_field() }}

            <label for='email'>E-Mail Address</label>
            <input id='email' type='email' name='email' value='{{ old('email') }}' required autofocus>
            @include('modules.error-field', ['field' => 'email'])

            <label for='password'>Password</label>
            <input id='password' type='password' name='password' required>
            @include('modules.error-field', ['field' => 'password'])

            <label>
                <input type='checkbox' name='remember' {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>

            <button type='submit' class='btn btn-primary'>Login</button>
        </form>

    </div>


@endsection