<!DOCTYPE html>
<html>
<head>
    <title>guestbook</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

    <link rel="stylesheet" href="{{ URL::asset('/css/styles.css') }}"  type="text/css">
    <script src="{{ URL::asset('/js/javascript.js') }}"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <a href="/">home</a> &nbsp;
                {{ link_to_route('guests.create', 'sign guest book') }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            @if (Session::has('flash_message'))
                <div class="flash-message">{{ Session::get('flash_message') }}</div>
            @endif
            @yield('content')
            </div>
        </div>
    </div>
</body>
</html>