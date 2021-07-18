<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php if(@$setting[0]->value){ echo @$setting[0]->value.' | '.config('site.title') ; }else{ echo config('site.title'); } ?></title>
  <meta name="keywords" content="<?php if(@$setting[1]->value){ echo @$setting[1]->value ; }else{ echo config('site.meta_keyword'); } ?>">
  <meta name="description" content="<?php if(@$setting[2]->value){ echo @$setting[2]->value ; }else{ echo config('site.meta_description'); } ?>">
    @if(config('site.logo2') && File::exists(public_path('uploads/'.config('site.logo2'))))
    <link rel="shortcut icon" href="{!! ( config('site.logo2') && File::exists(public_path('uploads/'.config('site.logo2'))) ) ? asset('/uploads/'.config('site.logo2')) : '' !!}" type="image/x-icon" />
    @endif

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" type="text/css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

    <!-- Bootstrap -->
    <link href="{{ asset("/frontend/css/bootstrap.min.css") }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset("/frontend/css/validationEngine.jquery.min.css") }}">
    <!--<link href="{{ asset("/frontend/css/jquery.popup.min.css") }}" rel="stylesheet" type="text/css">-->
    <link href="{{ asset("/frontend/css/style.css") }}" rel="stylesheet">
    <link href="{{ asset("/frontend/css/map-style.min.css") }}" rel="stylesheet">
    <link href="{{ asset("/frontend/css/responsive.css") }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/frontend/custom-style.css") }}">

</head>

<body class="host_version">
@php
$header_menu = get_fields_value_where('pages',"(display_in='1' or display_in='3') and posttype='page' and parent_id='0'",'menu_order','asc');
@endphp

<header class="header_area {!! (Request::is('/') || Request::is('home')?'':'innerhead') !!} clearfix">
 <div class="container clearfix">
   <div class="logo">
     <a href="{{ url('/') }}"><img class="logoone" src="{!! ( config('site.logo') && File::exists(public_path('uploads/'.config('site.logo'))) ) ? asset('/uploads/'.config('site.logo')) : asset('/frontend/images/logo.png') !!}"></a>
     <a href="{{ url('/') }}"><img class="logotwo" src="{!! ( config('site.inner_logo') && File::exists(public_path('uploads/'.config('site.inner_logo'))) ) ? asset('/uploads/'.config('site.inner_logo')) : asset('/frontend/images/final-logo.png') !!}"></a>
   </div>
   <div class="header_right">
     <div class="menu">
      <div class="menuButton">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <ul>
        <?php          
        $counter = 0;
        ?>
        @foreach($header_menu as $menu)
        <?php
        $counter++;
        $slug = $menu->slug;
        if ($menu->menu_link>0) {
          $slug = get_field_value('pages',"slug",'id',$menu->menu_link);
        }
        $slug = ($menu->id==1) ? '' : $slug ;
        $active_menu = '';
        if (@$page) {
          $active_menu = ($page && ($page->parent_id==$menu->id || $page->id==$menu->id || $menu->menu_link==$page->id)) ? 'active' : '' ;
        }
        $header_sub_menu = get_fields_value_where('pages',"(display_in='1' or display_in='3') and parent_id='".$menu->id."'",'menu_order','asc');
        ?>
        <li class="{!!$active_menu!!}"><a href="{{url('/'.$slug)}}">{!!$menu->page_name!!} @if($header_sub_menu->count() > 0)<span><i class="fas fa-chevron-down"></i></span>@endif</a>
          @if($header_sub_menu->count() > 0)
          <ul>
          @foreach($header_sub_menu as $sub_menu)
          <?php
          $sub_slug = $sub_menu->slug;
          if ($sub_menu->menu_link>0) {
            $sub_slug = get_field_value('pages',"slug",'id',$sub_menu->menu_link);
          }
          $sub_slug = ($menu->id==1) ? '' : $sub_slug ;
          $active_sub_menu = '';
          if (@$page) {
            $active_sub_menu = ($page && ($page->parent_id==$sub_menu->id || $page->id==$sub_menu->id || $sub_menu->menu_link==$page->id)) ? 'active' : '' ;
          }
          ?>
          <li class="{!!$active_sub_menu!!}"><a href="{{url('/'.$sub_slug)}}"><i class="fas fa-angle-double-right"></i>{{$sub_menu->page_name}}</a></li>
          @endforeach
          </ul>
          @endif
        </li>
        @endforeach
    </ul>
  </div>
  <div class="phbox">
   <a href="tel:{!!preg_replace('/\D+/', '', config('site.phone'))!!}"><img src="{!! asset('/frontend/images/ph.png') !!}">{!!config('site.phone')!!}</a>
 </div>
</div>
</div>
</header> 





