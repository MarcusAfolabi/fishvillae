<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title>Fishvillae - Admin - Your nearby Restaurant </title>
    <meta name="description" content="Responsive, Bootstrap, BS4">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"> 
    <link rel="stylesheet" href="{{ asset('admin/css/site.min.css') }}">
</head>

<body class="layout-row"> 
   @include('partials._aside')
    @yield('main')
    <div id="footer" class="page-footer hide">
            <div class="d-flex p-3"><span class="text-sm text-muted flex">&copy; 2023. Fishvillae.org All right reserved</span>
            </div>
        </div>
    <script src="{{ asset('admin/js/site.min.js') }}"></script>
</body>
</html>