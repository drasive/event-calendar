@extends('site.master-layout')

@section('master-content')
    <div id="wrapper">
        <!-- Navigation -->
        @include('site.navigation')
    
        <div id="page-wrapper">
            <!-- Notifications -->
            @include('site.notifications')
            
            <!-- Content -->
            @yield('default-content')
        </div>
    </div>
@stop
