@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">'s Dashboard</div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-4 col-md-offset-2">
                      <button type="button" name="button">View Timings</button>
                    </div>
                    <div class="col-md-3">
                      <button type="button" name="button">History</button>
                    </div>
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
