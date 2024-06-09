<!DOCTYPE>
<html>

<!-- Mirrored from ework.e-gov.kg/?lng=en by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jun 2024 08:52:04 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <script src="{{asset('frontendAsset')}}/scripts/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="{{asset('frontendAsset')}}/scripts/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
    <script src="{{asset('frontendAsset')}}/scripts/js/generalb6f5.js?v=10" type="text/javascript"></script>
    <link href="{{asset('frontendAsset')}}/scripts/css/generalb6f5.css?v=10" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontendAsset')}}/scripts/css/flick/jquery-ui-1.10.3.custom.min.css" rel="stylesheet"
        type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

</head>

<body>



    @yield('content')




    <script>
        $('#langSel').on('change', function () {
            val = $('#langSel').val();

            window.location = val;
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

<!-- Mirrored from ework.e-gov.kg/?lng=en by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jun 2024 08:52:04 GMT -->

</html>