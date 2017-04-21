<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{config('app.name','My Little Baby')}}</title>


    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald|Source+Sans+Pro" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <style>

    .navbar{
      font-size:16px;
      height: 5em;
      padding:1em;
      background-color: #f1f3f5;
    }
    .navbar-right{
      padding-right: 1.5em;
    }

    .nav #nav_btn{
      font-size:1em;
      margin:auto 0;
      margin-right:2.5em;
      font-family: 'Source Sans Pro', sans-serif;
    }
    .modal-title{
      text-align: center;
      font-family: 'Source Sans Pro', sans-serif;
    }
    .container-fluid{
      background-color: pink;
    }


    /*----------navbar title config---------*/
    .navbar-brand{
      padding-left: 2.2em;
      font-size:1.8em;
      font-family: 'Montserrat', sans-serif;
    }

    .hover-title span{
      display:inline-block; animation:float .2s ease-in-out infinite;
    }

    .hover-title:hover span { animation:bounce .6s; }
    @keyframes bounce {
      0%,100%{ transform:translate(0); }
      25%{ transform:rotateX(20deg) translateY(2px) rotate(-3deg); }
      50%{ transform:translateY(-20px) rotate(3deg) scale(1.1);  }
    }

    span:nth-child(4n) { color:hsl(50, 75%, 55%); text-shadow:1px 1px hsl(50, 75%, 45%), 2px 2px hsl(50, 45%, 45%), 3px 3px hsl(50, 45%, 45%), 4px 4px hsl(50, 75%, 45%); }
    span:nth-child(4n-1) { color:hsl(135, 35%, 55%); text-shadow:1px 1px hsl(135, 35%, 45%), 2px 2px hsl(135, 35%, 45%), 3px 3px hsl(135, 35%, 45%), 4px 4px hsl(135, 35%, 45%); }
    span:nth-child(4n-2) { color:hsl(155, 35%, 60%); text-shadow:1px 1px hsl(155, 25%, 50%), 2px 2px hsl(155, 25%, 50%), 3px 3px hsl(155, 25%, 50%), 4px 4px hsl(140, 25%, 50%); }
    span:nth-child(4n-3) { color:hsl(30, 65%, 60%); text-shadow:1px 1px hsl(30, 45%, 50%), 2px 2px hsl(30, 45%, 50%), 3px 3px hsl(30, 45%, 50%), 4px 4px hsl(30, 45%, 50%); }
    /*----------navbar title config end---------*/


  </style>
  </head>
  <body id="app-layout">
    @include('layouts.partial.navigation')
    <div class="container-fluid">

      ddffd
      @yield('content')
    </div>
    @include('layouts.partial.footer')

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script>

    </script>
    @yield('script')
</body>
</html>
