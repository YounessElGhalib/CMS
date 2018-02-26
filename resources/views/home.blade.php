@extends('layouts.app')

@section('content')


<!-- begin:: Page -->
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
                    <li class="m-menu__item  m-menu__item--active" aria-haspopup="true" >
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
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                        <a class="m-menu__link m-menu__toggle">
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
                                            Categorie
                                        </span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" >
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
        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">
                            Dashboard
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
                    </div>
                </div>
            </div>
            <!-- END: Subheader -->
            <div class="m-content">
                <!--Begin::Main Portlet-->
                <div class="row">
                    <div class="col-xl-6">
                        <!--begin:: Widgets/Tasks -->
                        <div class="m-portlet m-portlet--full-height ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Categories
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <div class="m-portlet__head-title">
                                        <div class="m-badge  m-badge--info m-badge--wide" align="right">
                                            Categorie Crated
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="m_widget2_tab1_content">
                                        <div class="m-widget2">
                                            {{--  @foreach ($categories as $categorie)  --}}
                                                <div class="m-widget2__item m-widget2__item--primary">
                                                    <div class="m-widget2__checkbox">
                                                    </div>
                                                    <div class="m-widget2__desc">
                                                        <span class="m-widget2__text">
                                                            <strong>Le nom de la categorie : </strong>
                                                        </span>
                                                        <br>
                                                        <span class="m-widget2__user-name">
                                                            <span href="#" class="m-widget2__link">
                                                                <strong>date : </strong>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="m-widget2__actions">
                                                        <div class="m-widget2__actions-nav">
                                                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover">
                                                                <a href="#" class="m-dropdown__toggle">
                                                                    <i class="la la-ellipsis-h"></i>
                                                                </a>
                                                                <div class="m-dropdown__wrapper">
                                                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                    <div class="m-dropdown__inner">
                                                                        <div class="m-dropdown__body">
                                                                            <div class="m-dropdown__content">
                                                                                <ul class="m-nav">
                                                                                    <li class="m-nav__item">
                                                                                        <a href="{{ url('/backend/categorie/newCategorie') }}" class="m-nav__link">
                                                                                            <i class="m-nav__link-icon flaticon-file"></i>
                                                                                            <span class="m-nav__link-text">
                                                                                                Create New Categorie
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-nav__item">
                                                                                        <a href="{{ url('/backend/categories')}}" class="m-nav__link">
                                                                                            <i class="m-nav__link-icon flaticon-interface-9"></i>
                                                                                            <span class="m-nav__link-text">
                                                                                                Update Categorie
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            {{--  @endforeach  --}}
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="m_widget2_tab2_content"></div>
                                    <div class="tab-pane" id="m_widget2_tab3_content"></div>
                                </div>
                            </div>
                        </div>
                        <!--end:: Widgets/Tasks -->
                    </div>
                    <div class="col-xl-6">
                        <!--begin:: Widgets/Support Tickets -->
                        <div class="m-portlet m-portlet--full-height ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Articles
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <ul class="m-portlet__nav">
                                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                                            <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
                                                <i class="la la-ellipsis-h m--font-brand"></i>
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                <div class="m-dropdown__inner">
                                                    <div class="m-dropdown__body">
                                                        <div class="m-dropdown__content">
                                                            <ul class="m-nav">
                                                                <li class="m-nav__item">
                                                                    <a href="{{ url('/backend/article/newCategorie') }}" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-file"></i>
                                                                        <span class="m-nav__link-text">
                                                                            Create New Article
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="{{ url('/backend/articles') }}" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-interface-9 "></i>
                                                                        <span class="m-nav__link-text">
                                                                            Update Article
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="m-widget3">
                                    {{--  @foreach ($articles as $article)  --}}
                                        <div class="m-widget3__item">
                                            <div class="m-widget3__header">
                                                <div class="m-widget3__user-img">
                                                    <img class="m-widget3__img" src="assets/app/media/img/users/user1.jpg" alt="">
                                                </div>
                                                <div class="m-widget3__info">
                                                    <span class="m-widget3__username">
                                                        Title : 
                                                    </span>
                                                    <br>
                                                    <span class="m-widget3__time">
                                                        Created : 
                                                    </span>
                                                </div>
                                                <span class="m-widget3__status m--font-success">
                                                    {{--  @foreach ($pages as $page)
                                                        @if ($page->id == $article->id_page)
                                                            {{ $page->titre }}
                                                        @endif
                                                    @endforeach  --}}
                                                </span>
                                            </div>
                                            <div class="m-widget3__body">
                                                <p class="m-widget3__text">
                                                    {{--  {{ $article->contenu }}  --}}
                                                </p>
                                            </div>
                                        </div>
                                    {{--  @endforeach  --}}
                                </div>
                            </div>
                        </div>
                        <!--end:: Widgets/Support Tickets -->
                    </div>
                </div>
                <!--End::Main Portlet-->
                <!--Begin::Main Portlet-->
                <div class="row">
                    <div class="col-xl-8">
                        <div class="m-portlet m-portlet--mobile ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Exclusive Datatable Plugin
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <ul class="m-portlet__nav">
                                        <li class="m-portlet__nav-item">
                                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                                                <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
                                                    <i class="la la-plus m--hide"></i>
                                                    <i class="la la-ellipsis-h m--font-brand"></i>
                                                </a>
                                                <div class="m-dropdown__wrapper">
                                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                    <div class="m-dropdown__inner">
                                                        <div class="m-dropdown__body">
                                                            <div class="m-dropdown__content">
                                                                <ul class="m-nav">
                                                                    <li class="m-nav__item">
                                                                        <a href="{{ url('/backend/pages/newPage') }}" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-file"></i>
                                                                            <span class="m-nav__link-text">
                                                                                Create New Page
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="{{ url('/backend/pages') }}" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-interface-9 "></i>
                                                                            <span class="m-nav__link-text">
                                                                                Update Page
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <table class="table table-sm m-table m-table--head-bg-brand">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>Title</th>
                                            <th>URL</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{--  @foreach ($pages as $page)
                                            <tr>
                                                <td>{{$page->titre}}</td>
                                                <td>{{$page->url}}</td>
                                                <td>{{$page->date}}</td>
                                            </tr>
                                        @endforeach  --}}
                                    </tbody>
                                </table>
                                <!--begin: Datatable -->
                                {{--  <div class="m_datatable" id="m_datatable_latest_orders"></div>  --}}
                                <!--end: Datatable -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <!--begin:: Widgets/Audit Log-->
                        <div class="m-portlet m-portlet--full-height ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Audit Log
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget4_tab1_content" role="tab">
                                                Today
                                            </a>
                                        </li>
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab2_content" role="tab">
                                                Week
                                            </a>
                                        </li>
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab3_content" role="tab">
                                                Month
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="m_widget4_tab1_content">
                                        <div class="m-scrollable" data-scrollable="true" data-max-height="400" style="height: 400px; overflow: hidden;">
                                            <div class="m-list-timeline m-list-timeline--skin-light">
                                                <div class="m-list-timeline__items">
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
                                                        <span class="m-list-timeline__text">
                                                            12 new users registered
                                                        </span>
                                                        <span class="m-list-timeline__time">
                                                            Just now
                                                        </span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
                                                        <span class="m-list-timeline__text">
                                                            System shutdown
                                                            <span class="m-badge m-badge--success m-badge--wide">
                                                                pending
                                                            </span>
                                                        </span>
                                                        <span class="m-list-timeline__time">
                                                            14 mins
                                                        </span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
                                                        <span class="m-list-timeline__text">
                                                            New invoice received
                                                        </span>
                                                        <span class="m-list-timeline__time">
                                                            20 mins
                                                        </span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
                                                        <span class="m-list-timeline__text">
                                                            DB overloaded 80%
                                                            <span class="m-badge m-badge--info m-badge--wide">
                                                                settled
                                                            </span>
                                                        </span>
                                                        <span class="m-list-timeline__time">
                                                            1 hr
                                                        </span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--warning"></span>
                                                        <span class="m-list-timeline__text">
                                                            System error -
                                                            <a href="#" class="m-link">
                                                                Check
                                                            </a>
                                                        </span>
                                                        <span class="m-list-timeline__time">
                                                            2 hrs
                                                        </span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--brand"></span>
                                                        <span class="m-list-timeline__text">
                                                            Production server down
                                                        </span>
                                                        <span class="m-list-timeline__time">
                                                            3 hrs
                                                        </span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
                                                        <span class="m-list-timeline__text">
                                                            Production server up
                                                        </span>
                                                        <span class="m-list-timeline__time">
                                                            5 hrs
                                                        </span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
                                                        <span href="" class="m-list-timeline__text">
                                                            New order received
                                                            <span class="m-badge m-badge--danger m-badge--wide">
                                                                urgent
                                                            </span>
                                                        </span>
                                                        <span class="m-list-timeline__time">
                                                            7 hrs
                                                        </span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
                                                        <span class="m-list-timeline__text">
                                                            12 new users registered
                                                        </span>
                                                        <span class="m-list-timeline__time">
                                                            Just now
                                                        </span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
                                                        <span class="m-list-timeline__text">
                                                            System shutdown
                                                            <span class="m-badge m-badge--success m-badge--wide">
                                                                pending
                                                            </span>
                                                        </span>
                                                        <span class="m-list-timeline__time">
                                                            14 mins
                                                        </span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
                                                        <span class="m-list-timeline__text">
                                                            New invoice received
                                                        </span>
                                                        <span class="m-list-timeline__time">
                                                            20 mins
                                                        </span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
                                                        <span class="m-list-timeline__text">
                                                            DB overloaded 80%
                                                            <span class="m-badge m-badge--info m-badge--wide">
                                                                settled
                                                            </span>
                                                        </span>
                                                        <span class="m-list-timeline__time">
                                                            1 hr
                                                        </span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
                                                        <span class="m-list-timeline__text">
                                                            New invoice received
                                                        </span>
                                                        <span class="m-list-timeline__time">
                                                            20 mins
                                                        </span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
                                                        <span class="m-list-timeline__text">
                                                            DB overloaded 80%
                                                            <span class="m-badge m-badge--info m-badge--wide">
                                                                settled
                                                            </span>
                                                        </span>
                                                        <span class="m-list-timeline__time">
                                                            1 hr
                                                        </span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--warning"></span>
                                                        <span class="m-list-timeline__text">
                                                            System error -
                                                            <a href="#" class="m-link">
                                                                Check
                                                            </a>
                                                        </span>
                                                        <span class="m-list-timeline__time">
                                                            2 hrs
                                                        </span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--brand"></span>
                                                        <span class="m-list-timeline__text">
                                                            Production server down
                                                        </span>
                                                        <span class="m-list-timeline__time">
                                                            3 hrs
                                                        </span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
                                                        <span class="m-list-timeline__text">
                                                            Production server up
                                                        </span>
                                                        <span class="m-list-timeline__time">
                                                            5 hrs
                                                        </span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
                                                        <span href="" class="m-list-timeline__text">
                                                            New order received
                                                            <span class="m-badge m-badge--danger m-badge--wide">
                                                                urgent
                                                            </span>
                                                        </span>
                                                        <span class="m-list-timeline__time">
                                                            7 hrs
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="m_widget4_tab2_content"></div>
                                    <div class="tab-pane" id="m_widget4_tab3_content"></div>
                                </div>
                            </div>
                        </div>
                        <!--end:: Widgets/Audit Log-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end:: Body -->
    @include('pages.footer')
</div>
    <!-- end:: Page -->
    <!-- begin::Scroll Top -->
    <div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
        <i class="la la-arrow-up"></i>
    </div>
    <!-- end::Scroll Top -->
    <!-- begin::Quick Nav -->
    <ul class="m-nav-sticky" style="margin-top: 30px;">
        <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Purchase" data-placement="left">
            <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank">
                <i class="la la-cart-arrow-down"></i>
            </a>
        </li>
        <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Documentation" data-placement="left">
            <a href="http://keenthemes.com/metronic/documentation.html" target="_blank">
                <i class="la la-code-fork"></i>
            </a>
        </li>
        <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">
            <a href="http://keenthemes.com/forums/forum/support/metronic5/" target="_blank">
                <i class="la la-life-ring"></i>
            </a>
        </li>
    </ul>
    
@endsection
