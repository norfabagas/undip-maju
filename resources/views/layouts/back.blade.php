<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('backend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('backend/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('backend/css/sb-admin.css') }}" rel="stylesheet">

  </head>

  <body class="fixed-nav sticky-footer bg-dark" id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="#">Admin Dashboard</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="{{ url('/admin') }}">
              <i class="fa fa-fw fa-dashboard"></i>
              <span class="nav-link-text">
                Dashboard</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
            <a class="nav-link" href="{{ url('/admin/general') }}">
              <i class="fa fa-fw fa-area-chart"></i>
              <span class="nav-link-text">
                General Information</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="{{ url('/admin/unit') }}">
              <i class="fa fa-fw fa-table"></i>
              <span class="nav-link-text">
                Kelola Unit Bisnis</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
            <a class="nav-link" href="{{ url('/admin/contact') }}">
              <i class="fa fa-fw fa-phone"></i>
              <span class="nav-link-text">
                Contacts</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-file"></i>
              <span class="nav-link-text">
                Kelola Blog</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseExamplePages">
              <li>
                <a href="{{ url('/admin/blog/category') }}">Blog Category</a>
              </li>
              <li>
                <a href="{{ url('/admin/blog/tag') }}">Blog Tags</a>
              </li>
              <li>
                <a href="{{ url('/admin/blog') }}">Blog Post</a>
              </li>
            </ul>
          </li>

          @if(Auth::user()->level === 'admin')
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
            <a class="nav-link" href="{{ url('/admin/user') }}">
              <i class="fa fa-fw fa-user"></i>
              <span class="nav-link-text">
                Kelola User</span>
            </a>
          </li>
          @endif


        </ul>
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">


          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-fw fa-sign-out"></i>
              Logout</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
            @yield('breadcrumbs')

        </ol>

        @yield('content')

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright &copy; Your Website 2017</small>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('backend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('backend/js/sb-admin.min.js') }}"></script>

    <!-- tinymce -->
    <script src="{{ asset('tinymce/js/tinymce/tinymce.min.js') }}"></script>

    <script>
    tinymce.init({
selector: 'textarea',
height: 500,
menubar: false,
plugins: [
'advlist autolink lists link image charmap print preview anchor textcolor',
'searchreplace visualblocks code fullscreen',
'insertdatetime media table contextmenu paste code help'
],
toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
content_css: [
'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
'//www.tinymce.com/css/codepen.min.css']
});
    </script>
  </body>

</html>
