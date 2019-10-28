
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Admin panel')</title>
    <link rel="stylesheet" href="{{asset('Cpanel/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Cpanel/css/icon.css')}}">
    <link rel="stylesheet" href="{{asset('Cpanel/css/style.css')}}">
    <link rel="stylesheet" class="lang_css arabic" href="{{asset('Cpanel/css/en.css')}}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container-fluid">
    <!--Start header-->
    <div class="row header_section">
        <div class="col-sm-3 col-xs-12 logo_area bring_right">
            <h1 class="inline-block"><img src="{{asset('Cpanel/img/logo.png')}}"alt="">Laravel And Vue.js </h1>
            <span class="glyphicon glyphicon-align-justify bring_left open_close_menu" data-toggle="tooltip"
                  data-placement="right" title="Tooltip on left"></span>
        </div>
        <div class="col-sm-3 col-xs-12 head_buttons_area bring_right hidden-xs">
            <div class="inline-block full_screen bring_right hidden-xs">
                <span class="glyphicon glyphicon-fullscreen" data-toggle="tooltip" data-placement="left"
                      title="fullscreen"></span>
            </div>
        </div>
        <div class=" col-sm-4 col-xs-12 user_header_area bring_left left_text" style="margin-left: 220px">

            <div class="user_info inline-block">
                <img src="{{asset('Cpanel/img/manar.PNG')}}" alt="" class="img-circle">
                <span class="h4 nomargin user_name">Eng.Manar Omar</span>
                <span class="glyphicon glyphicon-cog"></span>
            </div>
        </div>
    </div>
    <!--/End header-->

    <!--Start body container section-->
    <div class="row container_section">

        <!--Start left sidebar-->
        <!--/End left sidebar-->

        <!--Start Side bar main menu-->
        <div class="main_sidebar bring_right">
            <div class="main_sidebar_wrapper" style="align-content: center">
                <ul>


                    <li><span class="glyphicon glyphicon-user"></span><a href="">Mange Users</a>
                        <ul class="drop_main_menu">
                            <li><a href="/users/create">Add new user</a></li>
                            <li><a href="/">View all users</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>

<div class="content">
    @yield('content')

</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
@yield('footer')

<script type="text/javascript" src="{{asset('Cpanel/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('Cpanel/js/bootstrap.min.js')}}"></script>
<script src="{{asset('Cpanel/js/js.js')}}"></script>
</body>

{{--</html>--}}

