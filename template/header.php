<?php include_once "./core/base.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo $url; ?>vendor/feather-icons-web/feather.css">
    <link rel="stylesheet" href="<?php echo $url; ?>node_modules/@splidejs/splide/dist/css/themes/splide-skyblue.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>css/app.css">
    <link rel="stylesheet" href="<?php echo $url; ?>css/style.css">
</head>
<body>
    
    <section class="main container-fluid">
        <div class="row">
            <!-- sidebar starts -->
            <div class="col-12 col-lg-2 vh-100 sidebar">
                <div class="d-flex align-items-center justify-content-between mt-4 py-2 menuSticky">
                    <div class="">
                        <span><i class="feather-shopping-bag text-light bg-primary rounded-2 p-2 me-2"></i></span>
                        <span class="fw-bolder text-uppercase text-primary">My shop</span>
                    </div>
                    <button class="hide-sidebar-btn btn btn-light d-block d-lg-none">
                        <i class="feather-x text-primary" style="font-size: 2rem;"></i>
                    </button>
                </div>
                <div class="navMenu">
                    <ul>
                        <li class="menuItem mt-3">
                            <a href="../index.php" class="menuItemLink active" >
                                <span>
                                    <i class=" feather-home"></i>
                                    Dashboard
                                </span>
                            </a>
                        <li class="menuSpacer"></li>
                        
                        <li class="menuTitle">
                            <span>Test</span>
                        </li>
                        <li class="menuItem">
                            <a href="#" class="menuItemLink">
                                <span>
                                    <i class=" feather-plus-circle"></i>
                                    Add Test
                                </span>
                            </a>
                        </li><li class="menuItem">
                            <a href="itemList.html" class="menuItemLink">
                                <span>
                                    <i class="feather-list"></i>
                                    Item Test
                                </span>
                                <span class="badge bg-white shadow-sm text-primary p-2 rounded-pill">23</span>
                            </a>
                        </li>
                        <li class="menuSpacer"></li>

                        <li class="menuTitle">
                            <span>Test</span>
                        </li>
                        <li class="menuItem">
                            <a href="#" class="menuItemLink">
                                <span>
                                    <i class=" feather-plus-circle"></i>
                                    Add Test
                                </span>
                            </a>
                        </li><li class="menuItem">
                            <a href="itemList.html" class="menuItemLink">
                                <span>
                                    <i class="feather-list"></i>
                                    Item Test
                                </span>
                                <span class="badge bg-white shadow-sm text-primary p-2 rounded-pill">23</span>
                            </a>
                        </li>
                        <li class="menuSpacer"></li>
                        <li class="menuTitle">
                            <span>Test</span>
                        </li>
                        <li class="menuItem">
                            <a href="#" class="menuItemLink">
                                <span>
                                    <i class=" feather-plus-circle"></i>
                                    Add Test
                                </span>
                            </a>
                        </li><li class="menuItem">
                            <a href="itemList.html" class="menuItemLink">
                                <span>
                                    <i class="feather-list"></i>
                                    Item Test
                                </span>
                                <span class="badge bg-white shadow-sm text-primary p-2 rounded-pill">23</span>
                            </a>
                        </li>
                        <li class="menuSpacer"></li>
                        
                        <li class="menuTitle">
                            <span>Test</span>
                        </li>
                        <li class="menuItem">
                            <a href="#" class="menuItemLink">
                                <span>
                                    <i class=" feather-plus-circle"></i>
                                    Add Test
                                </span>
                            </a>
                        </li><li class="menuItem">
                            <a href="itemList.html" class="menuItemLink">
                                <span>
                                    <i class="feather-list"></i>
                                    Item Test
                                </span>
                                <span class="badge bg-white shadow-sm text-primary p-2 rounded-pill">23</span>
                            </a>
                        </li>
                        <li class="menuSpacer"></li>

                        <li class="menuTitle">
                            <span>Test</span>
                        </li>
                        <li class="menuItem">
                            <a href="#" class="menuItemLink">
                                <span>
                                    <i class=" feather-plus-circle"></i>
                                    Add Test
                                </span>
                            </a>
                        </li><li class="menuItem">
                            <a href="itemList.html" class="menuItemLink">
                                <span>
                                    <i class="feather-list"></i>
                                    Item Test
                                </span>
                                <span class="badge bg-white shadow-sm text-primary p-2 rounded-pill">23</span>
                            </a>
                        </li>
                        <li class="menuSpacer"></li>

                        <li class="menuTitle">
                            <span>Manage</span>
                        </li>
                        <li class="menuItem">
                            <a href="../about.php" class="menuItemLink">
                                <span>
                                    <i class=" feather-plus-circle"></i>
                                    Add Item
                                </span>
                            </a>
                        </li><li class="menuItem">
                            <a href="../contact.php" class="menuItemLink">
                                <span>
                                    <i class="feather-list"></i>
                                    Item List
                                </span>
                                <span class="badge bg-white shadow-sm text-primary p-2 rounded-pill">23</span>
                            </a>
                        </li>
                        <li class="menuSpacer"></li>
                    </ul>
                    
                </div>
            </div>
            <!-- sidebar ends -->
            
            <div class="col-12 col-lg-10 vh-100 py-3 content">
                
                <!-- header starts -->
                <div class="row header mb-4">
                    <div class="col-12">
                        <div class="p-2 bg-primary rounded d-flex justify-content-between align-items-center">
                            <button class="show-sidebar-btn btn btn-primary d-block d-lg-none">
                                <i class="feather-menu text-light" style="font-size: 2rem;"></i>
                            </button>
                            <form action="#" class="d-flex align-content-center form-check-inline">
                                <input type="text" class="form-control me-2 d-none d-lg-block">
                                <button class="btn btn-light d-none d-lg-block">
                                    <i class="feather-search text-primary"></i>
                                </button>
                            </form>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="./img/user/avatar1.jpg" alt="" class="mr-2 shadow">
                                    Hsu Win Lat
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- header ends -->
