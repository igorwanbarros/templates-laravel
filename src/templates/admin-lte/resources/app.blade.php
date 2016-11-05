@extends('templates.admin-lte.base')

@section('meta')
    @include('templates.admin-lte.meta')
@stop

@section('styles')
    @include('templates.admin-lte.styles')
@stop

@section('body-class')
    hold-transition skin-yellow sidebar-mini sidebar-collapse
@stop

@section('template-content')
    <div class="wrapper">
        <header class="main-header">
            <a href="{{ url('/home') }}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini" title="{!! env('APP_NAME') !!}">{!! env('APP_NAME_MIN', 'Adm') !!}</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>{!! env('APP_NAME', 'Admin-LTE') !!}</b></span>
            </a>

            <nav class="navbar navbar-static-top" role="navigation">
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        @yield('navbar')
                    </ul>
                </div>
                <!--fim do custom-nav-bar-->
            </nav>
            <!--fim do nav-->

        </header>
        <!--fim do header-->

        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel"></div>
                <!--fim do user-painel-->

                <ul class="sidebar-menu">
                    @yield('sidebar')
                </ul>
                <!--fim da sidebar-menu - lista do menu inicial-->

            </section>
            <!--fim do menu principal-->
        </aside>
        <!--fim do main-sidebar-->

        <div class="content-wrapper">
            <section class="content">
                @yield('content')
            </section>
            <!--fim do content-->
        </div>
        <!--fim do content-wrapper-->

        <footer class="main-footer">
            @yield('footer')
        </footer>
        <!--fim do main-footer-->

    </div>
    <!-- fim do wrapper-->

    @yield('modal')
@stop

@section('scripts')
    @include('templates.admin-lte.scripts')
@stop
