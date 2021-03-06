@extends('layouts.app')

@section('content')

<div class="m-grid m-grid--hor m-grid--root m-page">
    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
    <!-- BEGIN: Left Aside -->
        <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
            <i class="la la-close"></i>
        </button>
        <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
            <!-- BEGIN: Aside Menu -->
            <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " data-menu-vertical="true" data-menu-scrollable="false" data-menu-dropdown-timeout="500">
                <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                    <li class="m-menu__item" aria-haspopup="true" >
                        <a  href="{{ url('/backend/home') }}" class="m-menu__link ">
                            <i class="m-menu__link-icon flaticon-line-graph"></i>
                            <span class="m-menu__link-title">
                                <span class="m-menu__link-wrap">
                                    <span class="m-menu__link-text">
                                        Tableau de bord
                                    </span>
                                </span>
                            </span>
                        </a>
                    </li>
                    <li class="m-menu__section">
                        <h4 class="m-menu__section-text">
                            Components
                        </h4>
                        <i class="m-menu__section-icon flaticon-more-v3"></i>
                    </li>
                    <li class="m-menu__item m-menu__item--submenu m-menu__item--expanded m-menu__item--open" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                        <a  href="#" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-icon flaticon-layers"></i>
                            <span class="m-menu__link-text">
                                CMS
                            </span>
                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                        </a>
                        <div class="m-menu__submenu">
                            <span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                    <a  href="#" class="m-menu__link ">
                                        <span class="m-menu__link-text">
                                            CMS
                                        </span>
                                    </a>
                                </li>
                                <li class="m-menu__item" aria-haspopup="true" >
                                    <a  href="{{ url('/backend/articles') }}" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
                                            Articles
                                        </span>
                                    </a>
                                </li>
                                <li class="m-menu__item" aria-haspopup="true" >
                                    <a  href="{{ url('/backend/pages') }}" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
                                            Pages
                                        </span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" >
                                    <a  href="{{ url('/backend/categories') }}" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
                                            Categories
                                        </span>
                                    </a>
                                </li>
                                <li class="m-menu__item m-menu__item--active " aria-haspopup="true" >
                                    <a  href="{{ url('/backend/menu') }}" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
                                            Menu
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__section">
                        <h4 class="m-menu__section-text">
                            Snippets
                        </h4>
                        <i class="m-menu__section-icon flaticon-more-v3"></i>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                        <a  href="{{ url('/backend/user_profile') }}" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-icon flaticon-user"></i>
                            <span class="m-menu__link-text">
                                Profile Utilisateur
                            </span>
                        </a>
                    </li>
                    <li class="m-menu__item m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                        <a  href="#" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-icon flaticon-settings"></i>
                            <span class="m-menu__link-text">
                                Réglage
                            </span>
                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                        </a>
                        <div class="m-menu__submenu">
                            <span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                    <a  href="#" class="m-menu__link ">
                                        <span class="m-menu__link-text">
                                            Réglage
                                        </span>
                                    </a>
                                </li>
                                <li class="m-menu__item" aria-haspopup="true" >
                                    <a  href="{{ url('/backend/language') }}" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
                                            Langues
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- END: Aside Menu -->
        </div>
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                </div>
            </div>
            <!-- END: Subheader -->
            <div class="m-content">
                <!--Begin::Main Portlet-->
                <div class="row">
                    <div class="col-xl-12">
                        <!--begin:: Widgets/Tasks -->
                        @if(Session::has('message'))
                        <div id="message" class="m-alert m-alert--icon m-alert--air alert alert-success alert-dismissible fade show" role="alert">
                            <div class="m-alert__icon">
                                <i class="la la-warning"></i>
                            </div>
                            <div class="m-alert__text">
                                <strong>
                                    Bien !
                                </strong>
                                {{ Session::get('message') }}
                            </div>
                            <div class="m-alert__close">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                        @endif
                        <div class="m-portlet m-portlet--full-height ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            <storng>Menu : </strong>
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <div class="m-portlet__head-title">
                                        <div class=" m-badge--wide" align="right">
                                            <strong>{{ $countMenu }}</strong> Menu Crée
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <br>
                                <table style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th style="width:60%">
                                                <div class="col-md-6">
                                                    <div class="m-input-icon m-input-icon--left">
                                                        <input class="form-control m-input m-input--solid" placeholder="chercher..." id="form_search" type="text">
                                                        <span class="m-input-icon__icon m-input-icon__icon--left">
                                                            <span>
                                                                <i class="la la-search"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="messg"></div>
                                            </th>
                                            <th style="width:20%;">
                                                
                                            </th>
                                            <th style="width:8%;">
                                                
                                            </th>
                                            <th  style="width:20%;">
                                                <a href="{{ url('/backend/menu/newMenu') }}" class="btn m-btn--pill btn-brand">Nouveau</a>
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="m-portlet__body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="m_widget2_tab1_content">
                                        <div class="m-widget2">
                                            <table id="mytable" class="table">
                                                <thead class="thead-default">
                                                    <tr>
                                                        <th>Titre</th>
                                                        <th>URL</th>
                                                        <th>Langues</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody> 
                                                    @isset($array)
                                                    @foreach($array as $arry)
                                                    <tr class="tr">
                                                        <td id="tabTd">{{$arry['titre']}}</td>
                                                        <td id="tabTd">{{$arry['url']}}</td>
                                                        <td>
                                                            <table>
                                                                <tr>
                                                                @foreach($langs as $lang)
                                                                    @if($arry['languages'][$lang->reference] == 'true')
                                                                        <td><div class="img-thumbnail flag flag-icon-background flag-icon-{{ $lang->reference }}"></div></td>
                                                                    @else
                                                                        <td style="filter: grayscale(100%);"><div class="img-thumbnail flag flag-icon-background flag-icon-{{ $lang->reference }}"></div></td>
                                                                    @endif
                                                                @endforeach
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td align="right">
                                                            {!! Form::open(array('route'=>['pages.destroy',$arry['id']],'method'=>'DELETE', 'id'=>$arry['id'])) !!}
                                                                {{ link_to_route('pages.edit',' ',[$arry['id']],['class'=>'la la-edit btnEdit']) }} |
                                                                {!! Form::button('',['id'=>'delete_id','value'=>$arry['id'], 'class'=>'la la-trash btnDelete', 'type'=>'button', 'onclick'=>'JSalert(value)']) !!}                                                                
                                                            {!! Form::close() !!}
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                @endisset
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="m_widget2_tab2_content"></div>
                                    <div class="tab-pane" id="m_widget2_tab3_content"></div>
                                </div>
                            </div>
                        </div>
                        <!--end:: Widgets/Tasks -->
                    </div>
                </div>
                <!--End::Main Portlet-->
                
            </div>
        </div>
        <!-- END: Left Aside -->
    </div>    
    <!-- end:: Body -->
    @include('pages.footer')
</div>
<script type="text/javascript">
    setTimeout(function() {
        document.getElementById('message').innerHTML = "";
    },15000);

    function JSalert(value)
    {
        swal({
            title: "Are you sure?",
            text: "You want delete this Article!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            closeOnConfirm: false,
            closeOnCancel: false
          },
          function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Dalated!',
                    text: 'The article will be deleted successfully!',
                    type: 'success'
                }, function() {
                    document.getElementById(value).submit();
                });
            } else {
              swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
          });
    }

    $(document).ready(function(){
            var table = '#mytable'
        
            $('#form_search').on('keyup', function(){
                //$('.messg').html('')
                var valu = document.getElementById('form_search').value;
                //if(valu != ""){
                    $('.pagination').html('')
                    $('.afficher').html('')
                    tr=0;
                    td=0;
                    var res = false;
                    $(table+' #tabTd').each(function(){
                        var index = $(this).text().indexOf(valu);
                        if(td%2==0){
                            res = false;
                        }
                        if(index == 0){
                            //$(this).css("color", "blue");
                            res = true;
                            td++;
                        }else{
                            //$(this).css("color", "black");
                            td++;
                        }
        
                        if(td%2==0 && res == true){
                            $(".tr:eq("+tr+")").show();
                            tr++;
                        }else if(td%2==0 && res == false){
                            $(".tr:eq("+tr+")").hide();
                            tr++;
                        }
                    })
                //}
            });
    });
</script>

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