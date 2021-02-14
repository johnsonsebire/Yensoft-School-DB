@extends('layouts.dashboard')

@section('page-title', 'School Management System')
@section('current-page-title', 'Accounts Dashboard')
@section('name-of-school', 'Yensoft')
@section('navigation')

@can('superadmin')

<li><a href="/dashboard"><i class="fa fa-black-tie"></i><span>Teachers</span></a></li>

@endcan

<li><a href="/dashboard"><i class="fa fa-users"></i><span>Students</span></a></li>


@endsection

@section('user-navigation')
{{-- <li><a href="/dashboard"><i class="fa fa-black-tie"></i><span>Teachers</span></a></li> --}}
@endsection

@section('content')

{{-- <div class="section-body mt-4">
    <div class="container-fluid">
        <h4>@yield('current-page-title')</h4>
        
    </div>
</div> --}}

@endsection