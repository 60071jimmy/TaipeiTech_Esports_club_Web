@extends('layout.master')

@section('content')

<body id="page-top" class="index">
    
    @include('layout.partials.navigation')

    @include('layout.partials.header')
    
    @include('layout.partials.about')
    
    @include('layout.partials.team')

    @include('layout.partials.schedule')

    @include('layout.partials.contact')

    @include('layout.partials.join')

    @include('layout.partials.footer')
  
</body>

@endsection