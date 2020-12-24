@extends('layouts.dashboard')

@section('header')
    @include('inc.header')
@endsection

@section('topbar')
    @include('inc.topbar')
@endsection

@section('mainsidebar')
    @include('inc.sidebars.mainsidebar') 
@endsection

@section('maincontent')   
   @include('inc.content')
@endsection

@section('footer')
    @include('inc.footer')
@endsection