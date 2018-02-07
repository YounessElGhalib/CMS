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
                                {{ __('messages.menuUser') }}
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
                            Article
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
                                            <strong>Langue</strong>  : Liste des langues
                                        </h3>
                                    </div>
                                </div>
                                {{--  <div class="m-portlet__head-tools">
                                    <div class="m-portlet__head-title">
                                        <div class=" m-badge--wide" align="right">
                                            {{ __('messages.compter') }}
                                        </div>
                                    </div>
                                </div>  --}}
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
                                                {{--  <div class="col-md-8">
                                                    <div class="select">
                                                        <select id="selectCate"  class="form-control m-bootstrap-select--solid">
                                                                <option value="all">Tout</option>
                                                            @foreach ($cats as $cat)
                                                                <option value="{{ $cat->nom }}">
                                                                    {{ $cat->nom }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>  --}}
                                            </th>
                                            <th style="width:8%;">
                                                {{--  <strong style="color:gray;">Catégorie : </strong>  --}}
                                            </th>
                                            <th  style="width:20%;">
                                                <a href="{{ url('/backend/language/newLangue') }}" class="btn m-btn--pill btn-brand">Nouveau</a>
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
                                                        <th>Langue</th>
                                                        <th>Reference</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @isset($langs)
                                                        @foreach($langs as $lang)
                                                        <tr class="tr">
                                                            <td id="tabTd">{{ $lang->lang }}</td>
                                                            <td id="tabTd" class="tabCat">{{ $lang->reference }}</td>          
                                                            <td align="right">
                                                                {!! Form::open(array('route'=>['language.destroy',$lang->id],'method'=>'DELETE', 'id'=>$lang->id)) !!}
                                                                    {{ link_to_route('language.edit',' ',[$lang->id],['class'=>'la la-edit btnEdit']) }} |
                                                                    {!! Form::button('',['id'=>'delete_id','value'=>$lang->id, 'class'=>'la la-trash btnDelete', 'type'=>'button', 'onclick'=>'JSalert(value)']) !!}                                                                
                                                                {!! Form::close() !!}
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    @endisset
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                        <div class="pagination-container">
                                            {{--  <table style="width:100%">
                                                <tr>
                                                    <td style="width:65%">
                                                        <nav>
                                                            <ul class="pagination"></ul>
                                                        </nav>
                                                    </td>
                                                    <td style="width:10%">
                                                        <div class="form-group">
                                                            <select name="state" id="maxRows" class="selectPagination" style="width:72px;">
                                                                <option value="5000">{{ __('messages.tout') }}</option>
                                                                <option value="5">5</option>
                                                                <option value="10">10</option>
                                                                <option value="20">20</option>
                                                                <option value="50">50</option>
                                                                <option value="100">100</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td class="afficher" style="width:25%">
                                                    </td>
                                                </tr>
                                            </table>  --}}
                                        </div>
                                        {{--  <div class="col-md-4">
                                            <div class="btn-group" role="group">
                                                <span class="m--font-bolder" style="margin:auto; padding-right: 10px; font-size:1.2em;">
                                                    {{__('messages.changerLang')}}
                                                </span>
                                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    {{$lang}}
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" style="position: absolute; transform: translate3d(0px, 37px, 0px); top: 0px; left: 0px; will-change: transform;" x-placement="bottom-start">
                                                    <a class="dropdown-item" href="{{ url('/backend/articles/fr') }}">
                                                        {{ __('messages.francais') }}
                                                    </a>
                                                    <a class="dropdown-item" href="{{ url('/backend/articles/en') }}">
                                                        {{ __('messages.anglais') }}
                                                    </a>
                                                </div>
                                            </div>    
                                        </div>                                   --}}
                                        {{--  <div class="col-md-4">
                                            <div class="select">
                                                <ul>
                                                    <li><a href="{{ url('/backend/articles/fr') }}">{{ __('messages.francais') }}</a></li>
                                                    <li><a href="{{ url('/backend/articles/en') }}">{{ __('messages.anglais') }}</a></li>
                                                </ul>
                                            </div>
                                        </div>  --}}
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

        $('#selectCate').on('change', function(){
            $('.pagination').html('')
            $('.afficher').html('')
            tr=0;
            $('.tabCat').each(function(){
                if('all' != $('#selectCate').val()){
                    if($(this).text() != $('#selectCate').val()){
                        $(".tr:eq("+tr+")").hide();
                    }else{
                        $(".tr:eq("+tr+")").show();
                    }
                }else{
                    $(".tr:eq("+tr+")").show();
                }
                tr++
            })
        });
    
        $('#maxRows').on('change', function(){
            $('.pagination').html('')
            $('.afficher').html('')
            var trnum = 0
            var maxRows = parseInt($(this).val())
            var totalRows = $(table+' tbody tr').length
            
            $(table+' tr:gt(0)').each(function(){
                trnum++;
                if(trnum > maxRows){
                    $(this).hide()
                }
                if(trnum <= maxRows){
                    $(this).show()
                }
            })
            if(totalRows > maxRows){
                var pagenum = Math.ceil(totalRows/maxRows)
                for(var i=1;i<=pagenum;){
                    $('.pagination').append('<li data-page="'+i+'">\<span>'+ i++ +'<span class="sr-only">(current)</span></span>\</li>').show()
                }
            }
            $('.pagination li:first-child').addClass('active')
            $('.pagination li').on('click',function(){
                $('.afficher').html('')
                var pageNum = $(this).attr('data-page')
                $('.afficher').append('<p>Afficher '+((pageNum*maxRows)-(maxRows-1))+' à '+pageNum*maxRows+' de '+totalRows+' enregistrements</p>').show()
                var trIndex = 0
                $('.pagination li').removeClass('active')
                $(this).addClass('active')
                $(table+' tr:gt(0)').each(function(){
                    trIndex++
                    if(trIndex > (maxRows*pageNum) || trIndex <= ((maxRows*pageNum)-maxRows)){
                        $(this).hide()
                    }else{
                        $(this).show()
                    }
                })
            })
        })
    });
</script>
@endsection