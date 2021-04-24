@extends('layouts.dashboard')

@section('page-title', 'School Management System')
@section('current-page-title', 'Super Admin Dashboard')
@section('name-of-school', 'Yensoft')
@section('navigation')

@can('superadmin')
<li><a href="/dashboard"><i class="fa fa-dashboard"></i><span>Admin</span></a></li>

<li><a href="/teachers"><i class="fa fa-black-tie"></i><span>Teachers</span></a></li>

<li><a href="/dashboard"><i class="fa fa-users"></i><span>Students</span></a></li>

<li><a href="/dashboard"><i class="fa fa-money"></i><span>Accounts</span></a></li>


@endcan

@endsection

@section('user-navigation')
{{-- <li><a href="/dashboard"><i class="fa fa-black-tie"></i><span>Teachers</span></a></li> --}}
@endsection

@section('content')

<div class="section-body mt-4">
    <div class="container-fluid">
        
        <!-- Notice board & Calendar --> 
        <div class="row clearfix row-deck"> 
            @livewire('calendar')
            </div> 
    


        <div class="row col-md-12 col-lg-12">
            
                <div class="row col-lg-6 col-md-6 pr-4">
                    <div class="card">
                    @livewire('enrollment-summaries-table')
                    </div> 
                </div> 
                <div class="row col-lg-6 col-md-6">
                    <div class="card">
                    @livewire('student-list-table')
                    </div>
                </div> 
            
        
        </div>
        
         <div class="col-lg-12 col-md-12"> 
             
         @livewire('payments-table-widget')
              
        </div>
     
    
</div> 

        
</div>

@endsection