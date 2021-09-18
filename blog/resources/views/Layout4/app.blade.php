<!DOCTYPE html>
<html lang="en">

<head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ADMIN</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="css2/bootstrap.min.css">
    <link rel="stylesheet" href="css2/mdb.min.css">
    <link rel="stylesheet" href="css2/sidenav.css">
    <link rel="stylesheet" href="css2/style.css">
    <link rel="stylesheet" href="css2/responsive.css">
    <link rel="stylesheet" href="css2/datatables.min.css">
    <link rel="stylesheet" href="css2/datatables-select.min.css">
    <link rel="stylesheet" href="css2/panel.css">
</head>

<body class="fix-header fix-sidebar">

    @include('Layout4.menu4')
    @yield('content4')
</div>
</div>
<script type="text/javascript" src="{{asset('js2/jquery-3.4.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js2/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js2/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('js2/mdb.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js2/jquery.slimscroll.js')}}"></script>
<script type="text/javascript" src="{{asset('js2/sidebarmenu.js')}}"></script>
<script type="text/javascript" src="{{asset('js2/sticky-kit.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js2/custom.min-2.js')}}"></script>
<script type="text/javascript" src="{{asset('js2/datatables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js2/datatables-select.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js2/axios.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js2/custom.js')}}"></script>
@yield('script')

</body>

</html>
