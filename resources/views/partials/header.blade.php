
<div id="page-top" data-spy="scroll" data-target=".navbar-custom">


<nav class="navbar navbar-custom " role="navigation">
<div class="top-area">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-6">
      <p class="bold text-left">Monday - Saturday, 8am to 10pm </p>
      </div>
      <div class="col-sm-6 col-md-6">
      <p class="bold text-right">Call us now +62 008 65 001</p>
      </div>
    </div>
  </div>
</div>
    <div class="container navigation">

        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/">
                <img src="{{asset('img/logo.png')}}" alt="" width="150" height="40" />
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="/">Home</a></li>
      @if (Auth::guest())
        <li><a href="{{URL::to('/login')}}">Log in</a></li>
        <li><a href="{{URL::to('/register')}}">Register</a></li>

      @else
        <li>
            <a href="{{ url('/logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
                    <input type="hidden" name="_token" value="{{Session::token()}}"/>
            </form>
        </li>
      @endif
    </ul>
    </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
</div>
