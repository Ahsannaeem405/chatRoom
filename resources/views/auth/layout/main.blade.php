<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Chat Room</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('gem/ore/grupo/global/favicon.png')}}"/>
    <link rel="apple-touch-icon" href="{{asset('gem/ore/grupo/global/icon192.png')}}"/>
    <link href="{{asset('riches/kit/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('gem/tone/gr-sign.css')}}" rel="stylesheet">
    <link href="{{asset('riches/fonts/open-sans/font.css')}}" rel="stylesheet">
    <link href="{{asset('riches/fonts/grupo/css/icons.css')}}" rel="stylesheet">
</head>


@yield('content')



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('gem/mine/gr-sign.js')}}"></script>
<script type="module">
    import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwainstall';

    const el = document.createElement('pwa-update');document.body.appendChild(el);
</script>

</html>
