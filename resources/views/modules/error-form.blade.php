{{-- Error Form Module--}}
{{-- Integrated Code from Foobooks  --}}
{{-- Created By: Marc-Eli Faldas --}}
{{-- Last Modified: 5/8/2018  --}}

@if(count($errors) > 0)
    <ul class='alert alert-danger'>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif