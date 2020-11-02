<?php include "../_module/cache/cache.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Superadmin</title>
  <link rel="shortcut icon" href="../template/img/logo.png">
  <link rel="stylesheet" href="../template/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../template/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="../template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script type = "text/javascript" >
	function preventBack(){window.history.forward();}
	setTimeout("preventBack()", 1);
	window.onunload=function(){null};
  </script>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="#" class="navbar-brand">
        <img src="../template/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Superadmin</span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="dashboard" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="data-admin" class="nav-link">Data Admin</a>
          </li>
		  <li class="nav-item">
            <a href="data-user" class="nav-link">Data User</a>
          </li>
          </li>
        </ul>
      </div>

      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" href="logout">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge"></span>Logout
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Dashboard Superadmin</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>

                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  
<?php
	include "../_controller/super-admin/foot.php";
	include "../_controller/super-admin//footer.php";
?>