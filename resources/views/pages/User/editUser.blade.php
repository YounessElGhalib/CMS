@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li>
                    <a href="{{ url('/backend/home') }}">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/backend/pages') }}">
                        <i class="ti-panel"></i>
                        <p>Pages</p>
                    </a>
                </li>
                <li>
                        <a href="{{ url('/backend/menu') }}">
                            <i class="ti-panel"></i>
                            <p>Menu</p>
                        </a>
                </li>
                    <li>
                        <a href="{{ url('/backend/categories') }}">
                            <i class="ti-panel"></i>
                            <p>Categories</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/backend/articles') }}">
                            <i class="ti-panel"></i>
                            <p>Articles</p>
                        </a>
                    </li>
                    <hr>
                    <li class="active">
                        <a href="{{ url('/backend/user_profile') }}">
                            <i class="ti-panel"></i>
                            <p>User profile</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-defaul">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                        </button>
                        <a class="navbar-brand" href="#">update your account</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                
                            </li>
                            <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="ti-bell"></i>
                                        <p class="notification">5</p>
                                        <p>Notifications</p>
                                        <b class="caret"></b>
                                  </a>
                                  <ul class="dropdown-menu">
                                    <li><a href="#">Notification 1</a></li>
                                  </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-settings"></i>
                                    <p>Settings</p>
                                </a>
                            </li>
                        </ul>
    
                    </div>
                </div>
            </nav>
    
    
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Change password : user({{ Auth::user()->name }})</h4>
                                </div>
                                <div class="content">
                                    @if(Session::has('message'))
                                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                                    @endif
                                    {!! Form::model($user,array('route'=>['user_profile.update',$user->id],'method'=>'PUT')) !!}
                                        <div class="form-group" align="right">
                                            {!! Form::button('Update',['type'=>'submit','class'=>'btn btn-primary']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('name', 'New username') !!}
                                            {!! Form::text('name', null, ['class'=>'form-control']) !!}
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                   
                                </div>
                                <div class="content">
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
    
    
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
    
                            <li>
                                <a href="http://www.creative-tim.com">
                                    Creative Tim
                                </a>
                            </li>
                            <li>
                                <a href="http://blog.creative-tim.com">
                                   Blog
                                </a>
                            </li>
                            <li>
                                <a href="http://www.creative-tim.com/license">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright pull-right">
                        &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
                    </div>
                </div>
            </footer>
    
        </div>
    </div>
    </div>
</div>
@endsection