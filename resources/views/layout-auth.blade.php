<!DOCTYPE html>
<html>

<head>
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>
    @section('title')
      Ruler Admin
    @show
  </title>
  <meta name="keywords" content="Ruler Dashboard" />
  <meta name="author" content="Nikolas Ethore">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font CSS (Via CDN) -->
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

  @section('css')
  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/perso.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/skin/default_skin/css/theme.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin-tools/admin-forms/css/admin-forms.css') }}">

  @show

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->

</head>

<body class="external-page external-alt sb-l-c sb-r-c">

  <!-- Start: Main -->
  <div id="main">

      @section('content')
      @show

  </div>
  <!-- End: Main -->

  <!-- BEGIN: PAGE SCRIPTS -->

  @section('js')
  <!-- jQuery -->
  <script src="{{ asset('vendor/jquery/jquery-1.11.1.min.js') }}"></script>
  <script src="{{ asset('vendor/jquery/jquery_ui/jquery-ui.min.js') }}"></script>

  <!-- Theme Javascript -->
  <script src="{{ asset('assets/js/utility/utility.js') }}"></script>
  <script src="{{ asset('assets/js/demo/demo.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";

    // Init Theme Core
    Core.init();


  });
  </script>
  <!-- END: PAGE SCRIPTS -->
  @show

</body>

</html>
