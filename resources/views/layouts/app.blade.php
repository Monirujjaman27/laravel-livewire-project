<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name')}} / Admin / @yield('title') </title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('public/Assets/backend') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->

    <!--  summernote css -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <!-- alertify -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- alertify themes/default.min -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <!-- toastr css  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    {{-- data table --}}


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('public/Assets/backend') }}/css/adminlte.min.css">
    @livewireStyles

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- navebar -->
        @livewire('livewire.inc.nav')
        <!-- sidebar -->
        @livewire('livewire.inc.sidebar')
        <!-- page content  -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- footer  -->
    </div>
    <!-- ./wrapper -->
    <!-- stack('modals') -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('public/Assets/backend') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/f47930ccc9.js " crossorigin="anonymous "></script>
    <!-- AdminLTE App -->
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('public/Assets/backend') }}/js/adminlte.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <!-- toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- summernote -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        // session 
        // @if(Session::get('success'))
        // toastr.success("{!! Session::get('success') !!}");
        // @endif
    </script>

    <script>
        // tooltip
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        //  summernote
        $('#textarea').summernote({
            placeholder: 'Write a Description here...',
            tabsize: 2,
            height: 100
        });
    </script>

    <script>
        // data DataTable
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

    @livewireScripts
</body>

</html>