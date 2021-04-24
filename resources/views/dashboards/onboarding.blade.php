@extends('layouts.dashboard')

@section('page-title', 'School Management System')
@section('current-page-title', 'Complete Account Setup')
@section('name-of-school', 'Yensoft')
@section('navigation')

@can('superadmin')

<li><a href="/dashboard"><i class="fa fa-black-tie"></i><span>Teachers</span></a></li>

@endcan

<li><a href="/dashboard"><i class="fa fa-users"></i><span>Account Setup</span></a></li>


@endsection

@section('user-navigation')
{{-- <li><a href="/dashboard"><i class="fa fa-black-tie"></i><span>Teachers</span></a></li> --}}
<li><a> Account Setup</a> </li> 
@endsection

@section('content')

{{-- <div class="section-body mt-4">
    <div class="container-fluid">
        <h4>@yield('current-page-title')</h4>
        
    </div>
</div> --}}
<div class="row col-12" style="padding:50px !important;">
<div class="card" style="padding:auto; margin:auto;">
    <div class="card-header">
        <h3 class="card-title">@yield('current-page-title')</h3>
        <div class="card-options">
            <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
            {{-- <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a> --}}
            {{-- <div class="item-action dropdown ml-2">
                <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>                                            
                    <div class="dropdown-divider"></div>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="card-body form-horizontal">
        <form action="" method="post">
            @csrf 
        <div class="form-group row">
            <label class="col-md-3 col-form-label">Name of School <span class="text-danger">*</span></label>
            <div class="col-md-7">
                <input type="text" class="form-control">
            </div>
        </div>

        <fieldset disabled>


        <div class="form-group row">
            <label class="col-md-3 col-form-label">Role <span class="text-danger">*</span></label>
            <div class="col-md-7">
                <input type="text" class="form-control" value="Admin">
            </div>
        </div>
        
        <div class="form-group row">
            <label class="col-md-3 col-form-label">Email address <span class="text-danger">*</span></label>
            <div class="col-md-7">
                <input type="text" class="form-control" value="{{Auth::user()->email}}">
            </div>
        </div>
    </fieldset>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">First Name <span class="text-danger">*</span></label>
            <div class="col-md-7">
                <input type="text" class="form-control" value="{{getFirstWord(Auth::user()->name)}}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">Last Name <span class="text-danger">*</span></label>
            <div class="col-md-7">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">Postal Address <span class="text-danger">*</span></label>
            <div class="col-md-7">
                <input type="text" class="form-control" placeholder="" value="">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">City <span class="text-danger">*</span></label>
            <div class="col-md-7">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">Postal Code <span class="text-danger">*</span></label>
            <div class="col-md-7">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">GPS Address <span class="text-danger">*</span></label>
            <div class="col-md-7">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">Country <span class="text-danger">*</span></label>
            <div class="col-md-7">
                <select class="form-control custom-select">
                    <option value="Ghana" selected> Ghana</option>
                    @if($countries->count())

                    @foreach ($countries as $country)
                    
                        <option value="{{$country->name->common}}">{{$country->name->common}}</option>
                        
                    @endforeach
                        
                    @endif
                </select>
            </div>
        </div>
         <div class="form-group row">
            <label class="col-md-3 col-form-label">Additional Information<span class="text-danger">*</span></label>
            <div class="col-md-7">
                <textarea rows="5" class="form-control" placeholder=""></textarea>
            </div>
        </div>
    </div>
    <div class="card-footer text-right">
        <button type="submit" class="btn btn-primary">Complete</button>
    </div>
</div>
</div>
@endsection