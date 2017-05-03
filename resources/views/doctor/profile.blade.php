@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">

                <div class="span3 well">
                    <center>
                    <a href="#" data-toggle="modal" data-target="#myModal"><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="40" height="40" class="img-circle">
                    <h6>{{$admin->name}}</h6>
                    </a>
                    <em>click my face for more</em>
                </center>
                </div>

                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title" id="myModalLabel">More About Joe</h4>
                                </div>
                            <div class="modal-body">
                                <center>
                                <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                                <h3 class="media-heading">Joe Sixpack <small>USA</small></h3>
                                <span><strong>Skills: </strong></span>
                                    <span class="label label-warning">HTML5/CSS</span>
                                    <span class="label label-info">Adobe CS 5.5</span>
                                    <span class="label label-info">Microsoft Office</span>
                                    <span class="label label-success">Windows XP, Vista, 7</span>
                                </center>
                                <hr>
                                <center>
                                <p class="text-left"><strong>Bio: </strong><br>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
                                <br>
                                </center>
                            </div>
                            <div class="modal-footer">
                                <center>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Edit</button>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>

            <ul class="nav" id="side-menu">
                <li>
                    <a href="{{route('/')}}"><i class="glyphicon glyphicon-home"></i> Clinic Home </a>
                </li>
                <li>
                    <a href="#"><i class="glyphicon glyphicon-time"></i> Setup Clinic Hours</a>
                    </li>
                <li>
                    <a href=" "><i class="glyphicon glyphicon-pencil"></i> Change Staff<span class="fa arrow"></span></a>
                </li>
                <li>
                    <a href="forms.html"><i class="glyphicon glyphicon-stats"></i> Stats</a>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <!-- /.row -->
    <!-- /.row -->
</div>

  </div>
@endsection
