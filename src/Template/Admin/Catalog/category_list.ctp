
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
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

<body ng-app="admin" ng-controller="CategoryController" class="hold-transition skin-black-light sidebar-mini">
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
        Categories
       <!--  <small>Optional description</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin/dashboard"><i class="fa fa-tag"></i> Admin</a></li>
        <li><a href="">Catalog</a></li>
        <li><a href="/admin/catalog/categories"><i class="#"></i> Categories</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <div class="row">
              <div class="col-xs-3">
       
              <h2 class="box-title">Category List</h2>
      
              </div>
              
              <div class="col-xs-6">
 
              </div>
              <div class="col-xs-3">
                <form name="actionButtons" method="post" action= "product.php" enctype="multipart/form-data">
                  <div class="btn-group" id="alignright">  
                   <button type="button" class="btn btn-flat" data-toggle="modal" data-target="#addcategory"><i class="fa fa-plus"></i></button>  
                  </div>
                </form>
              </div>
              </div>
              <div class="row col-xs-10">
                   <fieldset class="form-group">
                        
                        <div class="col-xs-2">
                        <label for="category" class="form-label">Group By</label></div>
                           <div class="col-xs-3">
                            <select id="group1" class="form-control" ng-model="selectedGroup1" ng-options="parent as parent.category_name for parent in parents track by parent.category_id" ng-change="firstGroup()"  aria-describedby="category">
                            </select>

                           </div>

                            <div class="col-xs-3">
                            <select id="group2" class="form-control" ng-model="selectedGroup2" ng-options="secondGroup as secondGroup.category_name for secondGroup in secondGroups track by secondGroup.category_id" ng-change="secondGroup()"  aria-describedby="category">
                            </select>
                            </div>
                             <button type="button" class="btn btn-primary" ng-click="display()" style="border-radius:0px;"> Display All</button>
                            <div class="col-xs-3">
                              
                            </div>
                    </fieldset>
                </div>
            </div>
            

            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Category Name </th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr ng-repeat="category in categories">
                <td>{{category.category_name}}</td>
                <td></td>
                <td></td>
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
  <!-- Modal -->
<div class="modal fade" id="addcategory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Add Category</h4>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          
            <label for="brand" class="col-xs-3 col-form-label">Parent</label>
             <div class="col-xs-9">
                  <input type="hidden" name="categoryid1" id="category_parent">
                  <select id="category" type="text" class="form-control" placeholder="Parent" aria-describedby="parent" ng-model="firstSelected" ng-options="parent as parent.category_name for parent in parents track by parent.category_id" ng-change="getparent()"></select>


                  <select id="category2" type="text" class="form-control" placeholder="Parent" aria-describedby="parent" ng-model="secondSelected" ng-options="secondcategory as secondcategory.category_name for secondcategory in secondcategories track by secondcategory.category_id" ng-change="secondparent()"></select>    
              </div>
        </div>
            <div class="form-group row">
                <label for="brand" class="col-xs-3 col-form-label">Category Name</label>
                 <div class="col-xs-9">
                      <input type="text" id="name" class="form-control" placeholder="Category Name" aria-describedby="item-code">
                  </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" style="border-radius:0px;" data-dismiss="modal" id="modal-close" >Cancel</button>
          <button type="button" class="btn btn-primary" ng-click="addCategory()" style="border-radius:0px;"> Add</button>
        </div>
      </div>

    </div>
  </div>


  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
     
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 | Fashionology </strong> <br>All rights reserved.
  </footer>

 
  <div class="control-sidebar-bg"></div>

<!-- jQuery 2.2.3 -->

<!-- page script -->

<?php include LAYOUT_DIR . 'script.ctp'; ?>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
