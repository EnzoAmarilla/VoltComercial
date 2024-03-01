@extends('layouts.master')

@section('title') Volt Comercial - Home @endsection

@section('content')

@include('components.sections.banner',
[
    'img' => 'images/Main/landing-img-1.png', 
])

@endsection

@section('script')
    @if(session('status'))
    <script>
        $(document).ready(function () {
            $('#modal-form-result').modal('show');
        });
    </script>
    @endif
@endsection