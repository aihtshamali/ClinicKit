@extends('layouts.app')
@section('content')

<div class="container">
  <form class="form" method="POST" action="{{ url('register') }}">
    <div class="form-group row">
      <label class="col-md-2" class="col-md-2" class="col-md-2" for="example-text-input" class="col-2 col-form-label">Name</label>
      <div class="col-md-3">
        <input class="form-control" type="text" name="name" id="example-text-input">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-md-2" for="example-search-input" class="col-2 col-form-label">Email</label>
      <div class="col-md-3">
      <input class="form-control" type="search" name="email" id="example-search-input">
      </div>
    </div>
    <div class="row form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="col-md-2 control-label">Password</label>

        <div class="col-md-3">
            <input id="password" type="password" class="form-control" name="password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="password-confirm" class="col-md-2 control-label">Confirm Password</label>

        <div class="col-md-3">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>
    </div>
    <div class="form-group row">
      <label class="col-md-2" for="example-tel-input" class="col-2 col-form-label">Ph.No</label>
      <div class="col-md-3">
        <input class="form-control" type="tel" name="phone" id="example-tel-input">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-md-2"  class="col-2 col-form-label">Address</label>
      <div class="col-md-3">
        <input class="form-control" type="text" name="address" id="example-password-input">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-md-2" for="example-number-input" class="col-2 col-form-label">CNIC</label>
      <div class="col-md-3">
        <input class="form-control" type="number" name="cnic" id="example-number-input">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-offset-4">
        <button type="Submit" class="btn btn-success btn-md" name="submit">Submit</button>
      </div>
    </div>

    <input type="hidden" name="_token" value="{{Session::token()}}"/>
  </form>
</div>

@endsection
