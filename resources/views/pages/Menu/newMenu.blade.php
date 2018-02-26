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
                                            Article
                                        </span>
                                    </a>
                                </li>
                                <li class="m-menu__item" aria-haspopup="true" >
                                    <a  href="{{ url('/backend/pages') }}" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
                                            Page
                                        </span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" >
                                    <a  href="{{ url('/backend/categories') }}" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
                                            Categorie
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
                    {{--  <div class="mr-auto">
                        <h3 class="m-subheader__title ">
                            Page
                        </h3>
                    </div>
                    <div>
                        <span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
                            <span class="m-subheader__daterange-label">
                                <span class="m-subheader__daterange-title"></span>
                                <span class="m-subheader__daterange-date m--font-brand"></span>
                            </span>
                            <a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
                                <i class="la la-angle-down"></i>
                            </a>
                        </span>
                    </div>  --}}
                </div>
            </div>
            <!-- END: Subheader -->
            <div class="m-content">
                <!--Begin::Main Portlet-->
                <div class="row">
                    <div class="col-xl-4">
                        <div class="m-portlet m-portlet--full-height">
                            {{--  <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a href="#collpaseone" data-toggle="collapse" data-parent="accordion">
                                            Pages</a>
                                        </h5>
                                    </div>
                                    <div id="collpaseone" class="panel-collapse collapse in">
                                        <div class="m-portlet__body panel-body">
                                            {!! Form::open(array('route'=>'menu.store')) !!}
                                                @foreach($langs as $lang)
                                                <div id="{{$lang->reference}}" class="div-lang">
                                                    <div class="form-group">
                                                        {!! Form::label('langue', 'Titre') !!}
                                                        {!! Form::text('titre[]', null, ['class'=>'form-control input']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('statu', 'Url') !!}
                                                        {!! Form::text('url[]', null, ['class'=>'form-control input']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('type', 'Type') !!}
                                                        {!! Form::text('type[]', null, ['class'=>'form-control input']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('description', 'Description') !!}
                                                        {!! Form::textarea('description[]', null, [ 'class'=>'form-control', 'id'=>'m_maxlength_5', 'maxlength'=>"8", 'placeholder'=>"", 'rows'=>"6"]) !!}
                                                    </div>
                                                </div>
                                                @endforeach
                                                <div class="form-group" align="right">
                                                    {!! Form::button('Ajouter', ['type'=>'submit', 'class'=>'btn m-btn--pill btn-brand']) !!}
                                                </div>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>  --}}
                        <div class="portlet-body" style="display: block;">
                            <div class="panel-group accordion" id="accordion">
                                <div class="panel" id="page">
                                    <div class="panel-title" id="page">
                                        <table style="width:100%">
                                            <tr><td style="width:90%"><strong>Pages</strong></td><td><i id="flaich" class="la la-angle-down"></i></td></tr>
                                        </table>
                                    </div>
                                    <div id="collapse_3_1" class="panel-collapse">
                                        <div class="panel-body">
                                            <br>
                                            <div class="select">
                                                <table style="width:98%; margin: 0px 5px 0px 5px;">
                                                    <tr>
                                                        <td style="width:80%;">
                                                            <select id="selectPage" class="form-control m-bootstrap-select--solid">
                                                                @isset($pages)
                                                                <option value=""></option>
                                                                    @foreach($pages as $page)
                                                                        <option value="{{ $page->url }}">{{ $page->titre }}</option>
                                                                    @endforeach
                                                                @endisset
                                                            </select>
                                                        </td>
                                                        <td style="width:20%;">
                                                            <select id="selectCat" class="form-control m-bootstrap-select--solid">
                                                                @isset($langs)
                                                                    @foreach($langs as $lang)
                                                                    <option value="{{ $lang->reference }}" data-content='<table><tr><td><div class="img-thumbnail flag flag-icon-background flag-icon-{{ $lang->reference }}"></div></td><td></td></tr></table>'></option>
                                                                    @endforeach
                                                                @endisset
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="m-portlet__body panel-body">
                                                {!! Form::open(array('route'=>'menu.store')) !!}
                                                @foreach($langs as $lang)
                                                <div id="{{$lang->reference}}" class="div-lang">
                                                    <div class="form-group">
                                                        {!! Form::label('langue', 'Titre') !!}
                                                        {!! Form::text('p_titre[]', null, ['class'=>'form-control input','id'=>'titre']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('statu', 'Url') !!}
                                                        {!! Form::text('p_url[]', null, ['class'=>'form-control m-input','readonly'=>"",'id'=>'urlPage']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('type', 'Type') !!}
                                                        {!! Form::text('p_type[]', null, ['class'=>'form-control input']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('description', 'Description') !!}
                                                        {!! Form::textarea('p_description[]', null, [ 'class'=>'form-control', 'id'=>'m_maxlength_5', 'maxlength'=>"8", 'placeholder'=>"", 'rows'=>"6"]) !!}
                                                    </div>
                                                </div>
                                                @endforeach
                                                    <div class="form-group" align="right">
                                                        {!! Form::button('Ajouter', ['type'=>'submit', 'class'=>'btn m-btn--pill btn-brand']) !!}
                                                    </div>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel" id="categorie">
                                    <div class="panel-title" id="categorie">
                                        <table style="width:100%">
                                            <tr><td style="width:90%"><strong>Categories</strong></td><td><i id="flaich" class="la la-angle-down"></i></td></tr>
                                        </table>
                                    </div>
                                    <div id="collapse_3_2" class="panel-collapse">
                                        <div class="panel-body">
                                            <br>
                                            <div class="select">
                                                <table style="width:98%; margin: 0px 5px 0px 5px;">
                                                    <tr>
                                                        <td style="width:80%;">
                                                            <select id="selectCate" class="form-control m-bootstrap-select--solid">
                                                                @isset($cats)
                                                                <option value=""></option>
                                                                    @foreach($cats as $cat)
                                                                        <option value="{{ $cat->url }}">{{ $cat->nom }}</option>
                                                                    @endforeach
                                                                @endisset
                                                            </select>
                                                        </td>
                                                        <td style="width:20%;">
                                                            <select id="selectCatLang" class="form-control m-bootstrap-select--solid">
                                                                @isset($langs)
                                                                    @foreach($langs as $lang)
                                                                    <option value="{{ $lang->reference }}" data-content='<table><tr><td><div class="img-thumbnail flag flag-icon-background flag-icon-{{ $lang->reference }}"></div></td><td></td></tr></table>'></option>
                                                                    @endforeach
                                                                @endisset
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="m-portlet__body panel-body">
                                                {!! Form::open(array('route'=>'menu.store')) !!}
                                                @foreach($langs as $lang)
                                                <div id="cat_{{$lang->reference}}" class="div-lang">
                                                    <div class="form-group">
                                                        {!! Form::label('langue', 'Titre') !!}
                                                        {!! Form::text('c_titre[]', null, ['class'=>'form-control input','id'=>'titre']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('statu', 'Url') !!}
                                                        {!! Form::text('c_url[]', null, ['class'=>'form-control input','readonly'=>"",'id'=>'urlCat']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('type', 'Type') !!}
                                                        {!! Form::text('c_type[]', null, ['class'=>'form-control input']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('description', 'Description') !!}
                                                        {!! Form::textarea('c_description[]', null, [ 'class'=>'form-control', 'id'=>'m_maxlength_5', 'maxlength'=>"8", 'placeholder'=>"", 'rows'=>"6"]) !!}
                                                    </div>
                                                </div>
                                                @endforeach
                                                    <div class="form-group" align="right">
                                                        {!! Form::button('Ajouter', ['type'=>'submit', 'class'=>'btn m-btn--pill btn-brand']) !!}
                                                    </div>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-xl-8">
                        <!--begin:: Widgets/Tasks -->
                        <div class="m-portlet m-portlet--full-height">
                            <div class="row">
                                <div class="col-md-12">
                                    @if(Session::has('message'))
                                        <div class="content">
                                            <div class="alert alert-success">
                                                {{ Session::get('message') }}
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Nouveau Menu
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <div class="m-portlet__head-title">
                                        <div class="m-badge--wide" align="right">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="m_widget2_tab1_content">
                                        <div class="m-widget2" id="sortable">
                                            {{--  <div style="padding-left:70%;" class="col-xl-12">
                                                <div class="select">
                                                    <select id="selectCat" name="lang" class="form-control m-bootstrap-select--solid">
                                                        @isset($langs)
                                                            @foreach($langs as $lang)
                                                                <option value="{{ $lang->reference }}" data-content='<table><tr><td><div class="img-thumbnail flag flag-icon-background flag-icon-{{ $lang->reference }}"></div></td><td>{{ $lang->lang }}</td></tr></table>'></option>
                                                            @endforeach
                                                        @endisset
                                                    </select>
                                                </div>
                                            </div>  --}}
                                            <br>
                                            <table style="width:100%; margin-bottom:10px">
                                                <thead><tr><th style="width:50%">Titre</th><th style="width:50%">url</th></tr></thead>
                                            </table>
                                            <div class="column">
                                                @foreach($menus as $menu)
                                               <div class="portlet">
                                                    <div class="portlet-header"><table style="width:100%"><tr><td style="width:50%">{{$menu->titre}}</td><td style="width:50%">{{$menu->url}}</td></tr></table></div>
                                                </div>
                                                @endforeach
                                            </div>
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

<script>
    $(function(){        
        $("#sortable .column").sortable({
            connectWith: ".column",
            handle: ".portlet-header",
            cancel: ".portlet-toggle",
            placeholder: "portlet-placeholder ui-corner-all"
        });
        
        $("#sortable .portlet")
        .addClass( "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" )
        .find( ".portlet-header" )
        .addClass( "ui-widget-header ui-corner-all" )
        .prepend( "<span class='ui-icon ui-icon-minusthick portlet-toggle'></span>");
        
        $(".portlet-toggle").on("click", function(){
            alert('test');
            var icon = $(this);
            icon.toggleClass( "ui-icon-minusthick ui-icon-plusthick" );
            icon.closest( ".portlet" ).find( ".portlet-content" ).toggle();
        });
    });

    $(function(){
        $('#selectCat').selectpicker();
    });
    $(function(){
        $('#selectCatLang').selectpicker();
    });
    

    $(document).ready(function(){

        $('.panel-title').on('click', function(){
            var res = $(this).attr('id')
            $('#accordion .panel').each(function(){
                if(res == $(this).attr('id')){
                    if($('#'+res+' .panel-collapse').attr('class') == 'panel-collapse active'){
                        $('#'+res+' .panel-collapse').removeClass('active')
                        $('#'+res+' #flaich').removeClass('la la-angle-up')
                        $('#'+res+' #flaich').addClass('la la-angle-down')
                    }else{
                        $('#'+res+' .panel-collapse').addClass('active')
                        $('#'+res+' #flaich').removeClass('la la-angle-down')
                        $('#'+res+' #flaich').addClass('la la-angle-up')
                        $('#'+res+' #titre').prop('value',"")
                    }
                }else{
                    var res2 = $(this).attr('id')
                    $('#'+res2+' .panel-collapse').removeClass('active')
                    $('#'+res2+' #flaich').removeClass('la la-angle-up')
                    $('#'+res2+' #flaich').addClass('la la-angle-down')
                    $('#'+res2+' #titre').prop('value',"test")
                }
            })
        })

        $('#selectPage').on('change', function(){
            $('.div-lang').each(function(){
                var varid = $(this).attr('id');
                $('#'+varid+' #urlPage').prop('value',$('#selectPage').val());
            })
        })

        $('#selectCate').on('change', function(){
            $('.div-lang').each(function(){
                var varid = $(this).attr('id');
                $('#'+varid+' #urlCat').prop('value',$('#selectCate').val());
            })
        })

        $("#fr").css("visibility", "visible")
        $("#fr").css("height", "auto")
        $("#fr").css("padding-bottom", "10px")
        $('#fr .input').each(function(){
            $(this).prop('required',true);
        })

        $('#selectCat').on('change', function(){
            $('.div-lang').each(function(){
                if($('#selectCat').val() == $(this).attr('id')){
                    $(this).css("visibility", "visible")
                    $(this).css("height", "auto")
                    $(this).css("padding-bottom", "10px")
                    $('#'+$(this).attr('id')+' .input').each(function(){
                        $(this).prop('required',true);
                    })
                }else{
                    $(this).css("visibility", "hidden")
                    $(this).css("height", "0")
                    $(this).css("padding-bottom", "0px")
                    if($(this).attr('id') != "fr"){
                        $('#'+$(this).attr('id')+' .input').each(function(){
                            $(this).removeAttr('required');
                        })
                    }
                }
            })
        })

        $("#cat_fr").css("visibility", "visible")
        $("#cat_fr").css("height", "auto")
        $("#cat_fr").css("padding-bottom", "10px")
        $('#cat_fr .input').each(function(){
            $(this).prop('required',true);
        })

        $('#selectCatLang').on('change', function(){
            $('.div-lang').each(function(){
                if("cat_"+$('#selectCatLang').val() == $(this).attr('id')){
                    $(this).css("visibility", "visible")
                    $(this).css("height", "auto")
                    $(this).css("padding-bottom", "10px")
                    $('#'+$(this).attr('id')+' .input').each(function(){
                        $(this).prop('required',true);
                    })
                }else{
                    $(this).css("visibility", "hidden")
                    $(this).css("height", "0")
                    $(this).css("padding-bottom", "0px")
                    if($(this).attr('id') != "fr"){
                        $('#'+$(this).attr('id')+' .input').each(function(){
                            $(this).removeAttr('required');
                        })
                    }
                }
            })
        })
    })
</script>
@endsection