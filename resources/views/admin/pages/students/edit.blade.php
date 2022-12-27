@extends('admin.layouts.master')

@push('title')
Student Create Page
@endpush

@section('breadCrumb')
<div class="page-header">
    <div class="page-title">
        <h3>Student</h3>
    </div>
    <div class="dropdown filter custom-dropdown-icon">
        <a class="dropdown-toggle btn" href="#" role="button" id="filterDropdown" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false"><span class="text"><span>Show</span> : Packges </span> <svg
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-chevron-down">
                <polyline points="6 9 12 15 18 9"></polyline>
            </svg></a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="filterDropdown">
            <a class="dropdown-item" data-value="<span>Show</span> : Home Dashboard" href="{{route('home')}}">Home
                Dashboard</a>
            <a class="dropdown-item" data-value="<span>Show</span> : Home Dashboard"
                href="{{route('admin.student.index')}}">{{ trans('student.students') }}</a>
            <a class="dropdown-item" data-value="<span>Show</span> : Home Dashboard"
                href="{{URL::current()}}">{{ trans('student.edit_st') }}</a>
        </div>
    </div>
</div>
@endsection



@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom:24px;">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>{{ trans('student.edit_st') }} <span class="badge badge-success"></span></h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <form method="POST" action="{{route('admin.student.update',$student->id)}}">
                @csrf
                {{ method_field('PUT') }}

                @include('admin.pages.students._form')            
            </form>
        </div>
    </div>
</div>
@endsection