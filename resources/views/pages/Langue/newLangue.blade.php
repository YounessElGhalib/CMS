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
                    <li class="m-menu__item m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
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
                                <li class="m-menu__item " aria-haspopup="true" >
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
                                            Catégorie
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
                                Profile utilisateur
                            </span>
                        </a>
                    </li>
                    <li class="m-menu__item m-menu__item--submenu m-menu__item--expanded m-menu__item--open" aria-haspopup="true"  data-menu-submenu-toggle="hover">
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
                                <li class="m-menu__item m-menu__item--active" aria-haspopup="true" >
                                    <a  href="{{ url('/backend/language') }}" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
                                                Language
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
                    </div>  --}}
                    {{--  <div>
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
                                            <strong>Langue : </strong>Nouvelle Langue
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
                                            @if(Session::has('message'))
                                                <div class="alert alert-success">{{ Session::get('message') }}</div>
                                            @endif
                                            {!! Form::open(array('route'=>'language.store')) !!}
                                                {!! Form::label('nom', 'Langue') !!}
                                                <div class="select">
                                                    <select id="selectCate" name="lang"  class="form-control m-bootstrap-select--solid">
                                                        <option value="en-Anglais" data-content='<table><tr><td><div class="img-thumbnail flag flag-icon-background flag-icon-en"></div></td><td>Anglais</td></tr></table>'></option>
                                                        <option value="fr-Français" data-content='<table><tr><td><div class="img-thumbnail flag flag-icon-background flag-icon-fr"></div></td><td>Français</td></tr></table>'></option>
                                                        <option value="sa-Arabe" data-content='<table><tr><td><div class="img-thumbnail flag flag-icon-background flag-icon-sa"></div></td><td>Arabe</td></tr></table>'></option>
                                                        <option value="es-Espagnol" data-content='<table><tr><td><div class="img-thumbnail flag flag-icon-background flag-icon-es"></div></td><td>Espagnol</td></tr></table>'></option>
                                                        <option value="ru-Russe" data-content='<table><tr><td><div class="img-thumbnail flag flag-icon-background flag-icon-ru"></div></td><td>Russe</td></tr></table>'></option>
                                                    </select>
                                                </div>
                                                <br><br><br>
                                                <h4>Traduire les mots suivant pour la nouvelle langue</h4>
                                                <br>
                                                <table style="width:100%">
                                                    <tr>
                                                        <td style="margin:auto; padding-bottom: 20px; padding-left:20px; width:20%">{!! Form::label('tit', 'Titre') !!}</td>
                                                        <td style="padding-bottom: 20px; width:80%">{!! Form::text('titre', null, ['class'=>'form-control']) !!}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin:auto;  padding-bottom: 20px; padding-left:20px; width:20%">{!! Form::label('cat', 'Catégorie') !!}</td>
                                                        <td style="padding-bottom: 20px; width:80%">{!! Form::text('categorie', null, ['class'=>'form-control']) !!}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin:auto;  padding-bottom: 20px; padding-left:20px; width:20%">{!! Form::label('statuL', 'Statu') !!}</td>
                                                        <td style="padding-bottom: 20px; width:80%">{!! Form::text('statu', null, ['class'=>'form-control']) !!}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin:auto;  padding-bottom: 20px; padding-left:20px; width:20%">{!! Form::label('seoT', 'SEO Titre') !!}</td>
                                                        <td style="padding-bottom: 20px; width:80%">{!! Form::text('seoT', null, ['class'=>'form-control']) !!}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin:auto;  padding-bottom: 20px; padding-left:20px; width:20%">{!! Form::label('seoD', 'SEO Description') !!}</td>
                                                        <td style="padding-bottom: 20px; width:80%">{!! Form::text('seoD', null, ['class'=>'form-control']) !!}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin:auto;  padding-bottom: 20px; padding-left:20px; width:20%">{!! Form::label('cont', 'Contenu') !!}</td>
                                                        <td style="padding-bottom: 20px; width:80%">{!! Form::text('contenu', null, ['class'=>'form-control']) !!}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin:auto;  padding-bottom: 20px; padding-left:20px; width:20%">{!! Form::label('no', 'Nom') !!}</td>
                                                        <td style="padding-bottom: 20px; width:80%">{!! Form::text('nom', null, ['class'=>'form-control']) !!}</td>
                                                    </tr>
                                                </table>
                                                <div class="form-group" align="right">
                                                    {!! Form::button('Ajouter', ['type'=>'submit', 'class'=>'btn m-btn--pill btn-brand']) !!}
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
        $('#selectCate').selectpicker();
    });

</script>   
@endsection