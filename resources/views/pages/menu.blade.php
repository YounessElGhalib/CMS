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
                <li class="active">
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
                    <li>
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
                        <a class="navbar-brand" href="{{ url('/backend/menu') }}">Menu</a>
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
                            @if(Session::has('message'))
                            <div class="card">
                                <div class="content">
                                    <div class="alert alert-success">
                                        {{ Session::get('message') }}
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    
                    <div align="right">
                    {{ link_to_route('newMenu', 'Add new menu', null, ['type'=>'button', 'class'=>'btn btn-primary']) }}
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">List the menu</h4>
                                </div>
                                <div class="content">
                                    <table class="table">
                                        <tr>
                                            <th>Title</th>
                                            <th>Url</th>
                                        </tr>
                                        @foreach($menus as $menu)
                                        <tr>
                                            <td>{{ $menu->titre }}</td>
                                            <td>{{ $menu->url }}</td>
                                            <td align="right">
                                                {!! Form::open(array('route'=>['menu.destroy',$menu->id],'method'=>'DELETE')) !!}
                                                    {{ link_to_route('menu.edit','Edit',[$menu->id],['class'=>'btn btn-primary']) }}
                                                    |
                                                    {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
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