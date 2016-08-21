

<!DOCTYPE html>
<html>
<head>

<?php include LAYOUT_DIR . 'css.ctp'; ?>
 


<style type="text/css">
  #alignright
  {
    margin-left:90%;
  }
</style>
</head>

<body ng-app="admin" ng-controller="ItemListController" class="hold-transition skin-black-light sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="/img/hanger.gif" style="height:25px"></span>
      <!-- logo for regular state and mobile devices -->
       <span class="logo-lg"><img src="/img/logo-wstroke.png" style="height:40px;"></span>
    </a>

    <!-- Header Navbar--> 
    <nav class="navbar navbar-static-top" role="navigation">
     <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only"></span>
      </a>
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
      
                <span class="hidden-xs">Admin</span>
              </a>
            </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left info">
        <br>
          <br>
        </div>
      </div>
      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
<!-- Sidebar Menu -->
<?php include LAYOUT_DIR . 'navbar.ctp'; ?>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Items 
       <!--  <small>Optional description</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin/dashboard"><i class="fa fa-tag"></i> Admin</a></li>
        <li><a href="">Catalog</a></li>
        <li><a href="/admin/catalog/items"><i class="#"></i> Items</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <div class="row">
              <div class="col-xs-4">
       
              <h3 class="box-title">Item List</h3>
      
              </div>
              
              <div class="col-xs-4">
                  <div class="form-group row" ng-app='admin'>
                      <label for="category" class="col-xs-3 col-form-label">Sort By Category</label><br>
                           <div class="input-group col-xs-9">
                            <select class="form-control" ng-model="selected" ng-options="category as category.category_name for category in categories track by category.category_id" ng-change="getcategory()"  aria-describedby="category">
                            </select>

                            </div>
                    </div>
              </div>
              <div class="col-xs-4">
                <form name="actionButtons" method="post" action= "product.php" enctype="multipart/form-data">
                  <div class="btn-group" id="alignright">  
                   <a href="/admin/catalog/item_form"> <button type="button" class="btn btn-flat"><i class="fa fa-plus"></i></button></a>
                  </div>
                </form>
              </div>
              </div>
            </div>
            

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Item Code</th>
                  <th>Item Name</th>
                  <th>Brand</th>
                  <th>Quantity</th>
                  <th>Status</th>
                  <th>SRP</th>
                  <th>Thumbnail</th>
                  <th colspan="2">Actions</th>
                </tr>
                </thead>
                <tbody>
                  <tr ng-repeat="item in items">
                    <td>{{item.item_code}}</td>
                    <td>{{item.item_name}}</td>
                    <td>{{item.brand.brand_name}}</td>  
                    <td>{{item.item_quantity}}</td>
                    <td>{{item.item_status}}</td>
                    <td>{{item.item_srp}}.00</td>
                    <td>No Image Available</td>
                    <td><a href="/admin/catalog/edit_item?item_id={{item.item_id}}"><button type="submit" class= "btn bg-primary btn-flat" name=""><i class="fa fa-pencil"> </i></button></a></td>
                    <td><a href="/admin/catalog/edit_item?item_id={{item.item_id}}"><button type="submit" ng-click="deleteItem(item.item_id)" class= "btn bg-red btn-flat" name=""><i class="fa fa-trash"> </i></button></a></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
     
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 | Fashionology </strong> <br>All rights reserved.
  </footer>

 
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 2.2.3 -->
<?php include LAYOUT_DIR . 'script.ctp'; ?>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
