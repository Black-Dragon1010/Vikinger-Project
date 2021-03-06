<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    {{--    App CSS--}}
    <link href="{!! asset('css/app.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('css/custom.css') !!}" rel="stylesheet" type="text/css" />
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{!! asset('fonts/fa-pro/css/all.css') !!}" rel="stylesheet" type="text/css" />
    <!-- bootstrap 4.3.1 -->
    <link rel="stylesheet" href="{!! asset('theme/css/vendor/bootstrap.min.css') !!}" />
    <!-- styles -->
    <link rel="stylesheet" href="{!! asset('theme/css/styles.min.css') !!}" />
    <!-- simplebar styles -->
    <link rel="stylesheet" href="{!! asset('theme/css/vendor/simplebar.css') !!}">
    <!-- tiny-slider styles -->
    <link rel="stylesheet" href="{!! asset('theme/css/vendor/tiny-slider.css') !!}">
    <!-- favicon -->
    <link rel="icon" href="{!! asset('theme/img/favicon.ico') !!}">
    <title>@yield('title') | {!! env('APP_NAME') !!}</title>
    <meta name="description" content="{!! env('APP_NAME') !!}" />
    <meta name="csrf-token" content="{{csrf_token()}}" />
    <script type="text/javascript">
        //window._asset = '{!! asset("theme/") !!}';
        window._route = '{!! url('/') !!}'
    </script>
    @section('after_styles')
    @show
</head>
<body>
<div id="vik">
@include('_partials.loader')

@include('_partials.lnav')

@include('_partials.lnav_expanded')

@include('_partials.xs_nav')

@if($showChatBar)
<chat-bar :user='@json($user)' :members='@json($members)'></chat-bar>
@endif
@include('_partials.header')

@include('_partials.floaty_bar')

<!-- CONTENT GRID -->

@yield('content')

<!-- /CONTENT GRID -->
@include('authentication._partials.notification')
</div>
@yield('after_content')


{{--App Scripts--}}
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
<!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>  -->
<script src="https://netdna.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="{!! asset('js/app.js') !!}"></script>
<!-- app -->
<script src="{!! asset('theme/js/utils/app.js') !!}"></script>
<!-- page loader -->
<script src="{!! asset('theme/js/utils/page-loader.js') !!}"></script>
<!-- simplebar -->
<script src="{!! asset('theme/js/vendor/simplebar.min.js') !!}"></script>
<!-- liquidify -->
<script src="{!! asset('theme/js/utils/liquidify.js') !!}"></script>
<!-- XM_Plugins -->
<script src="{!! asset('theme/js/vendor/xm_plugins.min.js') !!}"></script>
<!-- tiny-slider -->
<script src="{!! asset('theme/js/vendor/tiny-slider.min.js') !!}"></script>
<!-- global.hexagons -->
<script src="{!! asset('theme/js/global/global.hexagons.js') !!}"></script>
<!-- global.tooltips -->
<script src="{!! asset('theme/js/global/global.tooltips.js') !!}"></script>
<!-- global.popups -->
<script src="{!! asset('theme/js/global/global.popups.js') !!}"></script>
<!-- header -->
<script src="{!! asset('theme/js/header/header.js') !!}"></script>
<!-- sidebar -->
<script src="{!! asset('theme/js/sidebar/sidebar.js') !!}"></script>
<!-- content -->
<script src="{!! asset('theme/js/content/content.js') !!}"></script>
<!-- form.utils -->
<script src="{!! asset('theme/js/form/form.utils.js') !!}"></script>
<!-- twitter widget -->
<script src="{!! asset('theme/js/widget/twitter.js') !!}"></script>
<!-- SVG icons -->
<script src="{!! asset('theme/js/utils/svg-loader.js') !!}"></script>
@section('after_scripts')
@show
</body>
</html>
