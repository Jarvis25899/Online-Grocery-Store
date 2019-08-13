<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.8
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Admin Portal</title>
    <!-- Icons-->
    <link href="node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <link href="vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
   
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="img/brand/logo.svg" width="89" height="25" alt="CoreUI Logo">
        <img class="navbar-brand-minimized" src="img/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
      </a>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Dashboard</a>
        </li>
        
      </ul>
      <ul class="nav navbar-nav ml-auto">
        <li></li>
        <li></li>
        <li></li>
        <li><a class="nav-link" href="adminlogout.php" style="margin-right:30px;">Log out</a></li>
        
      </ul>
      
      
    </header>
    <div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <i class="nav-icon icon-speedometer"></i> Dashboard
                <span class="badge badge-primary">NEW</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="insert_item.php">Insert</a>
            </li>
            

            <li class="nav-item">
              <a class="nav-link" href="delete_item.php">Delete</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="update_item.php">Update</a>
            </li>
          </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div>
      <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Dashboard</li>
          
        </ol>
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="card">
            <div class="col-md-14" id="insert_msg1">
            </div>
              <div class="card-header">
                <i class="icon-drop"></i> Insert Item</div>
              <div class="card-body">
              <form method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="pcat">Product_category</label>
                                <input type="text" id="pcat" name="pcat" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="pbrand">Product_brand</label>
                                <input type="text" id="pbrand" name="pbrand" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="ptitle">Product_title</label>
                                <input type="text" id="ptitle" name="ptitle" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="pprice">Product_price</label>
                                <input type="text" id="pprice" name="pprice" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="pdesc">Product_desc</label>
                                <input type="text" id="pdesc" name="pdesc" class="form-control">
                            </div>
                        </div>
                                
                        <div class="row">
                            <div class="col-md-12">
                                <label for="pkeyword">Product_keywords</label>
                                <input type="text" id="pkeyword" name="pkeyword" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="pimage">Product_image</label>
                                <input type="text" id="pimage" name="pimage" class="form-control">
                            </div>
                        </div>
                        
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <input style="float:right;" value="Insert" type="button" id="insert_button" name="insert_button" class="btn btn-success btn-lg">
                            </div>
                        </div>
                    
                    </form>
              </div>
            </div>

            <div class="card">
            <div class="col-md-14" id="insert_msg2">
            </div>
              <div class="card-header">
                <i class="icon-drop"></i> Insert Category</div>
              <div class="card-body">
              <form method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="cname">Category_name</label>
                                <input type="text" id="cname" name="cname" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <input style="float:right;" value="Insert" type="button" id="insert_cat" name="insert_cat" class="btn btn-success btn-lg">
                            </div>
                        </div>
                    
                </form>
              </div>
            </div>

            <div class="card">
            <div class="col-md-14" id="insert_msg3">
            </div>
              <div class="card-header">
                <i class="icon-drop"></i> Insert Brand</div>
              <div class="card-body">
              <form method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="bname">Brand_name</label>
                                <input type="text" id="bname" name="bname" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <input style="float:right;" value="Insert" type="button" id="insert_brand" name="insert_brand" class="btn btn-success btn-lg">
                            </div>
                        </div>
                    
                </form>
              </div>
            </div>

        </div>
        </div>
      </main>
      
        <!-- Tab panes-->
        

    <!-- Plugins and scripts required by this view-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="main.js"></script>
  </body>
</html>
