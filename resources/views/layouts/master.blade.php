
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WirelessTV | Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{asset('css/app.css')}}">


</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper" id="app">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>W</b>TV</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Welcome</b></span>
        </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <h1>WirelessTV</h1>
      <!-- User Account: style can be found in dropdown.less -->
      <!-- User Account: style can be found in dropdown.less -->
       <li class="dropdown user user-menu">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown">
           <img src="" class="user-image" alt="User Image">
           <span class="hidden-xs">Alexander Pierce</span>
         </a>
         <ul class="dropdown-menu">
           <!-- User image -->
           <li class="user-header">
             <img src="{{asset('images/avatar3.png')}}" class="img-circle" alt="User Image">

             <p>
               Alexander Pierce - Web Developer
               <small>Member since Nov. 2012</small>
             </p>
           </li>
           <!-- Menu Body -->
           <li class="user-body">
             <div class="row">
               <div class="col-xs-4 text-center">
                 <a href="#">Followers</a>
               </div>
               <div class="col-xs-4 text-center">
                 <a href="#">Sales</a>
               </div>
               <div class="col-xs-4 text-center">
                 <a href="#">Friends</a>
               </div>
             </div>
             <!-- /.row -->
           </li>
           <!-- Menu Footer-->
           <li class="user-footer">
             <div class="pull-left">
               <a href="#" class="btn btn-default btn-flat">Profile</a>
             </div>
             <div class="pull-right">
               <a href="#" class="btn btn-default btn-flat">Sign out</a>
             </div>
           </li>
         </ul>
       </li>
    </nav>

  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('images/avatar3.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{auth::user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>

        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span><b>Dashboard</b></span>
            <span class="pull-right-container">

            </span>
          </a>

        </li>
        <li class="treeview">
          <a href="#">

            <span>Wireless Slides</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Upload Slides</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Approved Slides</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>  Pending Slides</a></li>

          </ul>
        </li>
        <li class="treeview">
          <a href="#">

            <span>Video Promotions</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Upload Videos</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Approved Videos</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Pending Videos</a></li>

          </ul>
        </li>
        <li class="treeview">
          <a href="#">

            <span>Category</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Distributors</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>Dealers </a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Retails</a></li>

          </ul>
        </li>
        <li class="treeview">
          <a href="#">

            <span>User Groups</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> All Users</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>Disabled Users </a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Deleted Users</a></li>

          </ul>
        </li>
        <li class="treeview">
          <a href="#">

            <span>Devices</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> All Devices</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>Search Devices</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Device Location</a></li>
              <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Device Status</a></li>

          </ul>
        </li>
        <li class="treeview">
          <a href="#">

            <span>News</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Upload News</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Approved News</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Pending News</a></li>

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
        Dashboard

      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <?php $N=0; ?>
              @foreach($user as $users)
                  <?php $N++; ?>
              @endforeach
              <h3>{{$N}}</h3>
              <p>Number Of Users</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="pull-left image">

          </div>
            <div class="inner">
              <?php $M=0; ?>
              @foreach($image as $images)
                  <?php $M++; ?>
              @endforeach
              <h3>{{$M}}</h3>
              <p>Number Of images</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3></h3>

              <p></p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3></h3>

              <p></p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->

            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->

            </div>
          </div>
          <!-- /.nav-tabs-custom -->

          <!-- Chat box -->
          <div class="col-md-6">
                        <!-- USERS LIST -->

                            <!-- /.users-list -->
                          </div>
                          <!-- /.box-body -->

                          <!-- /.box-footer -->
                        </div>
                        <!--/.box -->
                      </div>
                      <!-- /.col -->
                    </div>
          <!-- /.box (chat box) -->

          <!-- TO DO List -->

          <!-- Map box -->

          <!-- /.box -->

          <!-- solid sales graph -->

          <!-- /.box -->

          <!-- Calendar -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->

        <!-- /.control-sidebar-menu -->


      <!-- /.tab-pane -->
      <!-- Stats tab content -->


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->


<script src="{{asset('js/app.js')}}">

</script>
</body>
</html>
