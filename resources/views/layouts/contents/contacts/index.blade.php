@extends('layouts.contents.dashboard')

@section('content')
<style>
    .onhover:hover{
        cursor: pointer;
    }
</style>

<div class="row">
@foreach ($contacts as $item)
<div class="col-xl-3 col-md-6 mb-4 onhover" onclick="location.href='{{route('contacts.show',$item->id)}}';">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">{{$item->name}}</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">{{$item->number}}</div>
          <div class="h6 mb-0 font-weight-bold text-gray-800">{{$item->email}}</div>
          </div>
          <div class="col-auto">
            @if($item->gender == 0)
            <i class="fas fa-venus fa-2x text-gray-300"></i>
            @else
            <i class="fas fa-mars fa-2x text-gray-300"></i>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
@endforeach
</div>
@endsection