<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin 2 - Dashboard</title>

        <!-- Custom fonts for this template-->
        <link href="{{asset('/')}}admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/') }}admin/css/all.css">

        <!-- Custom styles for this template-->
        <link href="{{asset('/')}}admin/css/sb-admin-2.min.css" rel="stylesheet">

        {{--<link rel="stylesheet" href="{{asset('/')}}admin/invoice/style.css">--}}
        <script src="{{asset('/')}}admin/invoice/script.js"></script>

        <script src="{{ asset('/') }}admin/ckeditor/ckeditor.js"></script>
        <script src="{{ asset('/') }}admin/ckeditor/samples/js/sample.js"></script>
        <link rel="stylesheet" href="{{ asset('/') }}admin/ckeditor/samples/css/samples.css">
        <link rel="stylesheet" href="{{ asset('/') }}admin/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            @include('admin.includes.menu')

            @include('admin.includes.header')

                    @yield('body')

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Rokeya Rahman Website 2019</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="{{asset('/')}}admin/vendor/jquery/jquery.min.js"></script>
        <script src="{{asset('/')}}admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{asset('/')}}admin/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{asset('/')}}admin/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="{{asset('/')}}admin/vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="{{asset('/')}}admin/js/demo/chart-area-demo.js"></script>
        <script src="{{asset('/')}}admin/js/demo/chart-pie-demo.js"></script>

        <script>
            $(document).ready(function () {
                $('#textCut').click(function () {
                    $this.text(' ');
                });
            });
        </script>

        <script>
            initSample();
        </script>

    </body>

</html>
