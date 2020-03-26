@extends('layouts.contents.dashboard')
@section('content')
              <!-- Page Heading -->
              <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">@lang('dashboard.Dashboard')</h1>
              </div>
    
              <div class="col-md-12">
              <a href="{{route('contacts.index')}}" class="btn btn-primary {{ (request()->is('dashboard/contacts')) ? 'active' : '' }}">@lang('dashboard.Add Contacts')</a>
              </div>
@endsection