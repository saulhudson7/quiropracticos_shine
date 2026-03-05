@extends('layouts.app')

@section('title','Quiropracticos "SHINE"')

@section('content')
    @include('partials.banner', ['carrucelImg' => $carrucelImg])
    @include('partials.about')
    @include('partials.services')
    @include('partials.appointment')
    @include('partials.gallery')
    @include('partials.team')
    @include('partials.blog')
    @include('partials.contact')
    @include('partials.subscribe')
@endsection
