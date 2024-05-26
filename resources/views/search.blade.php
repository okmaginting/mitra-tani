<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Search')

@section('content')
    @include('partials.search')
    
    @include('partials.categories')
@endsection

