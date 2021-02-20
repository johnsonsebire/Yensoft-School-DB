@extends('layouts.dashboard')

@section('page-title', 'School Management System')
@section('current-page-title', 'Super Admin Dashboard')
@section('name-of-school', 'Yensoft')
@section('navigation')

@can('superadmin')
<li><a href="/teachers"><i class="fa fa-black-tie"></i><span>Teachers</span></a></li>

<li><a href="/dashboard"><i class="fa fa-users"></i><span>Students</span></a></li>

@endcan

@endsection

@section('user-navigation')
{{-- <li><a href="/dashboard"><i class="fa fa-black-tie"></i><span>Teachers</span></a></li> --}}
@endsection

@section('content')

<div class="section-body mt-4">
    <div class="container-fluid">
        <div class="row col-md-12">
         <div class="row col-md-6" style="padding-right:20px">
         @livewire('student-list-table')
         </div> 
        
         <div class="row col-md-6">
             @livewire('student-list-table')
             </div> 
         </div>
         @livewire('payments-table-widget')
        </div>
</div>

@endsection