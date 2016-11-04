<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="_token" content="{{ csrf_token() }}" /> 
        <title>Laravel</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="{!! asset('css/style.css') !!}" media="all">   
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                  {!! Html::link('home','Home',array('class'=>'navbar-brand')) !!}
                </div>
                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::user())
                        <li>{!! HTML::link('auth/logout','Logout')!!}</li>
                    @else
                        <li>{!! HTML::link('auth/login','Login')!!}</li>
                    @endif
                </ul>
            </div>
          </nav>
        <div class="container">
          
            @yield('content')
        </div>
        <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="{!! asset('js/main.js') !!}"></script>

    </body>
</html>

