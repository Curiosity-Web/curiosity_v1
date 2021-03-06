<!-- Prefix "msad" -->

@extends('templates.user-master')

@section('css')
<link rel="stylesheet" href="/packages/assets/css/admins/main.css?{{rand();}}">
@yield('css-plus')
@stop

@section('menu-photo')
<div id="msad-profileContainer" class="text-center">
   <img src="/packages/assets/media/images/administers/adminDefProfile.png?{{rand();}}" class="img-fluid" id="msad-imgProfile"
   style="background:white;">
</div>
@stop

@section('menu-links')
<div data-url="/view-administer.admin-levels" class="linkMenu waves-effect">
   <span class="fa fa-cube"></span></span>&nbsp;
   Niveles (Grados)
</div>
<div data-url="/view-administer.admin-intelligences" class="linkMenu waves-effect">
   <span class="fa fa-cube"></span></span>&nbsp;
   Inteligencias (Materias)
</div>
<div data-url="/view-administer.admin-blocks" class="linkMenu waves-effect">
   <span class="fa fa-cube"></span></span>&nbsp;
   Bloques
</div>
<div data-url="/view-administer.admin-topics" class="linkMenu waves-effect">
   <span class="fa fa-cube"></span></span>&nbsp;
   Temas
</div>
<div data-url="/view-administer.admin-activities" class="linkMenu waves-effect">
   <span class="fa fa-cube"></span></span>&nbsp;
   Actividades (Juegos)
</div>
<div data-url="/view-administer.asociateSchool" class="linkMenu waves-effect">
   <span class="fa fa-institution" id="msad-icon-institution"></span>&nbsp;
   Escuelas de apoyo
</div>
<div data-url="/view-administer.admin-teachers" class="linkMenu waves-effect">
   <span class="fa fa-users" id="msad-icon-"></span>&nbsp;
   Profesores de apoyo
</div>
<div data-url="/view-administer.admin-libraryPdfs" class="linkMenu waves-effect">
   <span class="fa fa-book" id="msad-icon-book"></span>&nbsp;
   Biblioteca de Pdfs
</div>
<div data-url="/view-administer.admin-libraryVideos" class="linkMenu waves-effect">
   <span class="fa fa-youtube-play" id="msad-icon-play"></span>&nbsp;
   Biblioteca de Videos
</div>
<div data-url="/view-administer.admin-plans" class="linkMenu waves-effect">
   <span class="fa fa-credit-card-alt" id="msad-icon-credit-card-alt"></span>&nbsp;
   Planes
</div>
<div data-url="/view-administer.admin-employees" class="linkMenu waves-effect">
   <span class="fa fa-address-book" id="msad-icon-fa-address-book"></span>&nbsp;
   Empleados
</div>
<div data-url="/view-administer.admin-salescode" class="linkMenu waves-effect">
   <span class="fa fa-address-book" id="msad-icon-fa-address-book"></span>&nbsp;
   Códigos de vendedor
</div>
<div data-url="/view-dadNews/get/view-administer.admin-news" class="linkMenu waves-effect">
   <span class="fa fa-star"></span>&nbsp;
   Novedades para padres
</div>
<div data-url="/view-administer.adm-institutions" class="linkMenu waves-effect">
   <span class="fa fa-address-book" id="msad-icon-fa-address-book"></span>&nbsp;
   Instituciones
</div>
<div data-url="/padrino" class="linkMenu waves-effect">
   <span class="fa fa-heart"></span>&nbsp;
   Padrino Curiosity
</div>
@stop

@section('menu-links-aside')
<div data-url="/view-administer.admin-levels" class="linkMenu linkMenuAside waves-effect">
   <span class="fa fa-cube"></span></span>&nbsp;
   Niveles (Grados)
</div>
<div data-url="/view-administer.admin-intelligences" class="linkMenu linkMenuAside waves-effect">
   <span class="fa fa-cube"></span></span>&nbsp;
   Inteligencias (Materias)
</div>
<div data-url="/view-administer.admin-blocks" class="linkMenu linkMenuAside waves-effect">
   <span class="fa fa-cube"></span></span>&nbsp;
   Bloques
</div>
<div data-url="/view-administer.admin-topics" class="linkMenu linkMenuAside waves-effect">
   <span class="fa fa-cube"></span></span>&nbsp;
   Temas
</div>
<div data-url="/view-administer.admin-activities" class="linkMenu linkMenuAside waves-effect">
   <span class="fa fa-cube"></span></span>&nbsp;
   Actividades (Juegos)
</div>
<div data-url="/view-administer.asociateSchool" class="linkMenu linkMenuAside waves-effect">
   <span class="fa fa-institution" id="msad-icon-institution"></span>&nbsp;
   Escuelas de apoyo
</div>
<div data-url="/view-administer.admin-teachers" class="linkMenu linkMenuAside waves-effect">
   <span class="fa fa-users" id="msad-icon-"></span>&nbsp;
   Profesores de apoyo
</div>
<div data-url="/view-administer.admin-libraryPdfs" class="linkMenu linkMenuAside waves-effect">
   <span class="fa fa-book" id="msad-icon-book"></span>&nbsp;
   Biblioteca de Pdfs
</div>
<div data-url="/view-administer.admin-libraryVideos" class="linkMenu linkMenuAside waves-effect">
   <span class="fa fa-youtube-play" id="msad-icon-play"></span>&nbsp;
   Biblioteca de Videos
</div>
<div data-url="/view-administer.admin-plans" class="linkMenu linkMenuAside waves-effect">
   <span class="fa fa-credit-card-alt" id="msad-icon-credit-card-alt"></span>&nbsp;
   Planes
</div>
<div data-url="/view-administer.admin-employees" class="linkMenu linkMenuAside waves-effect">
   <span class="fa fa-address-book" id="msad-icon-fa-address-book"></span>&nbsp;
   Empleados
</div>
<div data-url="/view-administer.admin-salescode" class="linkMenu linkMenuAside waves-effect">
   <span class="fa fa-address-book" id="msad-icon-fa-address-book"></span>&nbsp;
   Códigos de vendedor
</div>
<div data-url="/view-dadNews/get/view-administer.admin-news" class="linkMenu linkMenuAside waves-effect">
   <span class="fa fa-star"></span>&nbsp;
   Novedades para padres
</div>
<div data-url="/view-administer.adm-institutions" class="linkMenu linkMenuAside waves-effect">
   <span class="fa fa-address-book" id="msad-icon-fa-address-book"></span>&nbsp;
   Instituciones
</div>
<div data-url="/padrino" class="linkMenu waves-effect">
   <span class="fa fa-heart"></span>&nbsp;
   Padrino Curiosity
</div>
<div data-url="#" class="linkMenu linkMenuAside waves-effect logOutBtn">
   <span class="fa fa-caret-right msad-icon-exit" id="msad-icon-exit"></span>&nbsp;
   Salir
</div>
@stop

@section('content')
<div class="view hm-black-strong z-depth-1 col-xs-12" id="msad-banner" >
   <div class="mask flex-center">
      <p class="white-text">@yield('baner-tittle')</p>
   </div>
</div>
@yield('content-administer')
@stop

@section('js')
   <script src="/packages/libs/validation/jquery.validate.min.js?{{rand();}}" charset="utf-8"></script>
   <script src="/packages/libs/validation/localization/messages_es.min.js?{{rand();}}" charset="utf-8"></script>
@yield('js-plus')
@stop
