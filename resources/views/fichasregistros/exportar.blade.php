<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Kardex</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">


    <link href="https://datatables.yajrabox.com/css/app.css" rel="stylesheet">

    <link href="https://datatables.yajrabox.com/css/datatables.bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" href="https://datatables.yajrabox.com/highlight/styles/zenburn.css">



    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css">


</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{ url('crear_ficha') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini" style="font-size: 70%;">kardex</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Kardex</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">


          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset('dist/img/avatar3.png') }}" class="user-image" alt="User Image">
              <span class="hidden-xs"> {{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ asset('dist/img/avatar3.png') }}" class="img-circle" alt="User Image">

                <p>
                   {{ Auth::user()->name }}
                </p>
              </li>

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>
          </li>

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('dist/img/avatar3.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> {{ Auth::user()->name }}</p>
          <a href="#"> Online</a>
        </div>
      </div>

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
       

        </br>
        @if(Auth::user()->tipo =="Admin")
          <li><a href="{{ url('administradores') }}"><i class="fa fa-user"></i><span> Administradores</span></a>
        @endif
        <li><a href="{{ url('usuarios') }}"><i class="fa fa-users"></i><span> Usuarios</span></a>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text-o"></i>
            <span>Ficha de registro</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('crear_ficha') }}"><i class="fa fa-list"></i>Ficha Nueva</a></li>
            <li><a href="{{ url('filtrar') }}"><i class="fa fa-list"></i>Listar Fichas</a></li>
            <li><a href="{{ url('exportar') }}"><i class="fa fa-list"></i>Exportar Fichas</a></li>
     
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bar-chart"></i>
            <span>Informes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('reportes_admin') }}"><i class="fa-list"></i> Ingresos Administrador</a></li>
            <li><a href="{{ url('reportes_user') }}"><i class="fa-list"></i> Ingresos Usuarios</a></li>

          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Formulario Kardex
        <small>Exportar fichas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="@yield('linkmenu')"><i class="fa fa-dashboard"></i>Lista</a></li>
        <li class="active">Fischa Registros</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">


<table id="userss-table" class="table">
    <thead>
        <tr>
             <td>Form. ID</td>
			 <td>Suc. Nombre</td>
			 <td>Suc. Rut</td>
			 <td>Suc. Razón Social</td>
			 <td>Suc. Comuna</td>
			 <td>Suc. Ciudad</td>
			 <td>Establ. Nombre</td>
			 <td>Establ. Codigo RBD </td>
        </tr>
    </thead>
</table>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.3.8
    </div>
    <strong>Copyright &copy; 2017 <a href="#">Jirafa Digital SPA</a>.</strong>
  </footer>


  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{ asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('dist/js/app.min.js') }}"></script>



<script>
 $('#passwordsNoMatchRegister').show('slow').delay(1000).hide('slow');
</script>



<script src="https://datatables.yajrabox.com/js/bootstrap.min.js"></script>
<script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
<script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>




	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/1.3.1/js/buttons.flash.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js">
	</script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/1.3.1/js/buttons.print.min.js">
	</script>

<script type="text/javascript">
    $(function() {
        $('#userss-table').DataTable({
            
            processing: true,
            serverSide: true,
            ajax: 'http://localhost/kardex2/public/exportar/get_datatable',
            columns: [
                {data: 'id', name: 'f.id'},
                {data: 'nombre_rs',name: 'e.nombre_es'},
                {data: 'rut_rs' , name: 'r.rut_rs'},
                {data: 'sucursal_rs', name: 'r.sucursal_rs'},
                {data: 'comuna_rs', name: 'r.comuna_rs'},
                {data: 'ciudad_rs', name: 'r.ciudad_rs'},
                {data: 'nombre_es', name: 'e.nombre_es'},
                {data: 'codigo_rbd', name: 'e.codigo_rbd'},
            ],
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todo"]],
            pageLength: 30,
            dom: 'lBfrtip',
            
                    select: {
            style:    'os',
            selector: 'td:first-child'
        },
        
            buttons: [
            'excel', 'pdf', 'print'
            ],
            
            
        });

        


    });
</script>


</body>
</html>