@extends('layout.app') @section('pageTitle', '')
@section('content')

<section id="main">

    @include ('partials.big-cover')

    @include ('partials.vous-aider')

    @include ('partials.mes-services')

    @include ('partials.about')
</section>
@endsection