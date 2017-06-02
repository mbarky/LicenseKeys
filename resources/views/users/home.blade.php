@extends('layouts.app')
@section('content')
<div class="container">
  <nav class="navbar navbar-user">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="{{route('user.home')}}">Home</a></li>
          <li><a href="{{route('user.services')}}">Services</a></li>
          <li><a href="{{route('user.tickets')}}">Tickets</a></li>
          <li><a href="{{route('user.invoices')}}">Invoices</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello, {{Auth::user()->fname}}! <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('user.useredit') }}">Edit Account Details</a></li>
              <li><a href="{{ route('user.passedit') }}">Change Password</a></li>
              <li><a href="{{ route('user.security') }}">Security Settings</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<div class="container">
  @yield('dashboardcontent')
</div>
@endsection