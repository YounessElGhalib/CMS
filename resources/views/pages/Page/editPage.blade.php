@extends('layouts.app')

@section('content')
<div class="m-grid m-grid--hor m-grid--root m-page">
    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
    <!-- BEGIN: Left Aside -->
        <button class="m-aside-left-close  m-aside-left-close--skin-dark" id="m_aside_left_close_btn">
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
                                <li class="m-menu__item " aria-haspopup="true" >
                                    <a  href="{{ url('/backend/articles') }}" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
                                            Article
                                        </span>
                                    </a>
                                </li>
                                <li class="m-menu__item m-menu__item--active" aria-haspopup="true" >
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
                        <div class="m-portlet m-portlet--full-height ">
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
                                            Modification de page
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
                                        <div class="m-widget2">
                                            <div style="padding-left:80%;" class="col-xl-12">
                                                {{--  {!! Form::label('langue', 'Langue') !!}  --}}
                                                <div class="select">
                                                    <select id="selectCat" name="lang" class="form-control m-bootstrap-select--solid">
                                                        @isset($langs)
                                                            @foreach($langs as $lang)
                                                                <option value="{{ $lang->reference }}" data-content='<table><tr><td><div class="img-thumbnail flag flag-icon-background flag-icon-{{ $lang->reference }}"></div></td><td>{{ $lang->lang }}</td></tr></table>'></option>
                                                            @endforeach
                                                        @endisset
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            {!! Form::open(array('route'=>['pages.update',$id],'method'=>'PUT')) !!}
                                                @foreach($array as $arry)
                                                <div id="{{$arry['lang']}}" class="div-lang">
                                                    <div class="div-lang">
                                                        <div class="form-group">
                                                            {!! Form::label('langue', 'Titre') !!}
                                                            {!! Form::text('id[]', $arry['id'], ['class'=>'form-control']) !!}
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('langue', 'Titre') !!}
                                                        {!! Form::text('titre[]', $arry['titre'], ['class'=>'form-control input']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('url', 'Url') !!}
                                                        {!! Form::text('url[]', $arry['url'], ['class'=>'form-control input']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('statu', 'Statu') !!}
                                                        {!! Form::text('statu[]', $arry['Statu'], ['class'=>'form-control input']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('seo_titre', 'SEO titre') !!}
                                                        {!! Form::text('seo_titre[]', $arry['SEO_titre'], ['class'=>'form-control input']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('seo_description', 'SEO Description') !!}
                                                        {!! Form::text('seo_description[]', $arry['SEO_Description'], ['class'=>'form-control input']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('content', 'Contenu') !!}
                                                        {!! Form::textarea('content[]',  $arry['contenu'], ['class'=>'summernote']) !!}
                                                    </div>
                                                </div>
                                                @endforeach
                                                <div class="form-group" align="right">
                                                    {!! Form::button('Modifier', ['type'=>'submit', 'class'=>'btn m-btn--pill btn-brand']) !!}
                                                </div>
                                            {!! Form::close() !!}
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
        $('#selectCat').selectpicker();
    });

    $(document).ready(function(){

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
    })
</script>  
@endsection