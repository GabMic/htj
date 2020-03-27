@extends('layouts.app')

@section('content')
<div class="container">

@guest
    @include('welcome')
@endguest

@student
    <h1 class="title is-1">Hi, student</h1>
@endstudent

    @employer
    <h1 class="title is-1">Hi, employer</h1>
    @endemployer

    @placement
    <h1 class="title is-1">hi, placement</h1>
    @endplacement
</div>
@endsection
