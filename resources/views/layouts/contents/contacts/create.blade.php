@extends('layouts.contents.dashboard')

@section('content')
<form method="POST" action="{{ route('contacts.store') }}">
    @csrf
    <div class="form-group">
      <input type="text" name="name" class="form-control form-control-user @error('name') is-invalid @enderror" value="{{old('name',@$item->name)}}" placeholder="@lang('auth.Name')">
 
      @error('name')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
    <div class="form-group">
      <input type="text"  name="number" value="{{old('number',@$item->number)}}" class="form-control form-control-user @error('number') is-invalid @enderror" placeholder="@lang('auth.Number')">
      @error('number')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>

    <div class="form-group">
        <input type="email" value="{{old('email',@$item->email)}}"  name="email" class="form-control form-control-user @error('email') is-invalid @enderror" placeholder="@lang('auth.Email')">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <div class="form-group">
          <select class="form-control @error('gender') is-invalid @enderror" name="gender">
              <option value="">@lang('dashboard.Select contact gender')</option>
              <option value="0">@lang('dashboard.Male')</option>
              <option value="1">@lang('dashboard.Female')</option>
          </select>
          @error('gender')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>
    <button type="submit" class="btn btn-primary btn-user btn-block">
      @lang('dashboard.Add Contact')
    </button>
    <hr>
  </form>
@endsection