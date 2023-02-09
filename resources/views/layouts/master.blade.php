<!--
*
*  INSPINIA - Responsive inspinia Theme
*  version 2.7
*
-->

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Student Management System | Dashboard</title>

    <link href="{{ asset('inspinia/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('inspinia/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('inspinia/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('inspinia/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('inspinia/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('inspinia/css/plugins/jasny/jasny-bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('inspinia/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('inspinia/css/plugins/chosen/bootstrap-chosen.css') }}" rel="stylesheet">
    <link href="{{ asset('inspinia/css/plugins/datapicker/datepicker3.css') }}" rel="stylesheet">
    <link href="{{ asset('inspinia/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}" rel="stylesheet">

    <link href="{{ asset('inspinia/css/custom_style.css') }}" rel="stylesheet">

    <script type="text/javascript">var home_url="{{ url('/') }}"</script>
    <script src="{{ asset('inspinia/js/jquery-3.1.1.min.js') }} "></script>

    {{--Chosen--}}
    <script src="{{ asset('inspinia/js/plugins/chosen/chosen.jquery.js') }} "></script>

    {{--Date Picker--}}
    <script src="{{ asset('inspinia/js/plugins/datapicker/bootstrap-datepicker.js') }}"></script>

</head>

<body>

<div id="wrapper">

    @include('elements.sidebar')

    <div id="page-wrapper" class="gray-bg dashbard-1">

        @include('elements.header')

        @yield('content')

        @include('elements.footer')

    </div>

</div>

<!-- Mainly scripts -->
<script src="{{ asset('inspinia/js/bootstrap.min.js') }} "></script>

<script src="{{ asset('inspinia/js/plugins/metisMenu/jquery.metisMenu.js') }} "></script>
<script src="{{ asset('inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js') }} "></script>
<script src="{{ asset('inspinia/js/plugins/dataTables/datatables.min.js') }}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset('inspinia/js/inspinia.js') }} "></script>
<script src="{{ asset('inspinia/js/plugins/pace/pace.min.js') }} "></script>
<script src="{{ asset('inspinia/js/plugins/jasny/jasny-bootstrap.min.js') }} "></script>

{{--i-check--}}
<script src="{{ asset('inspinia/js/plugins/iCheck/icheck.min.js') }}"></script>

<script>

    $(document).ready(function(){

        //data table...........
        $('.dataTables-example').DataTable({
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                { extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'ExampleFile'},
                {extend: 'pdf', title: 'ExampleFile'},

                {extend: 'print',
                    customize: function (win){
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                }
            ]

        });

        //checkbox........
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });

    });

</script>

</body>

</html>

