@extends('layouts.user')

@section('title')
    Profile
@endsection

@section('content')
    @livewire('user-profile', ['lazy' => true])
@endsection
