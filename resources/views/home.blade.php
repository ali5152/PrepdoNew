{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Dashboard</div>--}}

                {{--<div class="panel-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--You are logged in!--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
        <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->

    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
</head>
<body>




<!-- Scripts -->


<script>


    @if(Session::has('alert'))
    toastr.success("{{ Session::get('alert') }}");
    @endif


    @if(Session::has('message'))
    toastr.error("{{ Session::get('message') }}");
    @endif
    @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}");
    @endif


    @if(Session::has('warning'))
    toastr.error("{{ Session::get('warning') }}");
    @endif


    @if(Session::has('error'))
    toastr.error("{{ Session::get('error') }}");
    @endif

    @if(Session::has('error_2'))
    toastr.error("{{ Session::get('error_2') }}");
    @endif

    @if(Session::has('error_3'))
    toastr.error("{{ Session::get('error_3') }}");
    @endif


    @if($errors->count() > 0)
    @foreach($errors->all() as $error)
    toastr.error("{!! $error !!}");
    @endforeach
    @endif


</script>
<script>

    var popupSize = {
        width: 780,
        height: 550
    };

    $(document).on('click', '.social-buttons > a', function (e) {

        var
            verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
            horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);

        var popup = window.open($(this).prop('href'), 'social',
            'width=' + popupSize.width + ',height=' + popupSize.height +
            ',left=' + verticalPos + ',top=' + horisontalPos +
            ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

        if (popup) {
            popup.focus();
            e.preventDefault();
        }

    });

</script>

</body>

</html>
