@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-inline" action="{{ url('/login') }}" method="Post">
                      {{ csrf_field() }}
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                          <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Sign in</button>
                      <input type="hidden" name="_token" value="{{Session::token()}}"/>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection
