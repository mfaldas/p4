{{-- Error Field Module--}}
{{-- Integrated Code from Foobooks  --}}
{{-- Created By: Marc-Eli Faldas --}}
{{-- Last Modified: 5/8/2018  --}}

@if($errors->get($field))
    <ul class='error'>
        @foreach($errors->get($field) as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif