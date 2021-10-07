<?php include "./template/header.php"; ?>

<!-- content starts -->
<div class="row ">

<div class="col-12 col-md-6 col-lg-6 col-xl-3">
    <div class="card status-card card1 mb-4" onclick="go('https://google.com')">
        <div class="card-body">
            <div class="row align-items-center">
                    <div class="col-3">
                        <i class="feather-shopping-bag h1 text-primary"></i>
                    </div>
                    <div class="col-9">
                        <p class="mb-1 fw-bolder h4">
                            <span class="counter-up text-black">123</span>
                        </p>
                        <p class="mb-0 text-black-50">Today Orders</p>
                    </div>
            </div>
        </div>
    </div>
</div>
<div class="col-12 col-md-6 col-lg-6 col-xl-3">
    <div class="card status-card card2 mb-4 "  onclick="go('https://google.com')">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-3">
                    <i class="feather-user h1 text-primary"></i>
                </div>
                <div class="col-9">
                    <p class="mb-1 fw-bolder h4">
                        <span class="counter-up text-black">879</span>
                    </p>
                    <p class="mb-0 text-black-50">Users</p>
                </div>
            </div>
        </div>
    </div>
</div> 
<div class="col-12 col-md-6 col-lg-6 col-xl-3">
    <div class="card status-card card3 mb-4 " onclick="go('itemList.html')">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-3">
                    <i class="feather-package h1 text-primary"></i>
                </div>
                <div class="col-9">
                    <p class="mb-1 fw-bolder h4">
                        <span class="counter-up text-black">233</span>
                    </p>
                    <p class="mb-0 text-black-50">Total Items</p>
                </div>
            </div>
        </div>
    </div>
</div> 
<div class="col-12 col-md-6 col-lg-6 col-xl-3">
    <div class="card status-card card4 mb-4 " onclick="go('https://google.com')">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-3">
                    <i class="feather-map-pin h1 text-primary"></i>
                </div>
                <div class="col-9">
                    <p class="mb-1 fw-bolder h4">
                        <span class="counter-up text-black">14</span>
                    </p>
                    <p class="mb-0 text-black-50">Location</p>
                </div>
            </div>
        </div>
    </div>
</div>
                    
</div>

<div class="row align-items-end">

    <div class="col-12 col-xl-7">
        <div class="card overflow-hidden shadow mb-4">
            <div class="">
                <div class="d-flex justify-content-between align-items-center p-4">
                    <h4 class="mb-0">Orders and Viewers</h4>
                    <div class="">
                        <img src="./img/user/avatar1.jpg" alt="" class="ov-img rounded-circle">
                        <img src="./img/user/avatar2.jpg" alt="" class="ov-img rounded-circle">
                        <img src="./img/user/avatar3.jpg" alt="" class="ov-img rounded-circle">
                        <img src="./img/user/avatar4.jpg" alt="" class="ov-img rounded-circle">
                        <img src="./img/user/avatar5.jpg" alt="" class="ov-img rounded-circle">
                    </div>
                </div>
                
                <canvas id="myChart" width="400" height="150"></canvas>
            </div>
        </div>
        
    </div>

    <div class="col-12 col-md-6 col-xl-5">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="splide item-card" id="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="splide__slide__container">
                                    <div class="">
                                        <div class="d-flex justify-content-between align-items-end">
                                            <div class="flex-grow-1">
                                                <h4 class="fw-bolder mb-0">Coffee Cup</h4>
                                                <p class="fw-bolder text-black-50 m-1">500 MMK</p>
                                                <div class="progress mb-4">
                                                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <img src="./img/item/item1.png" alt="" class="item-card-img">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="splide__slide__container">
                                    <div class="">
                                        <div class="d-flex justify-content-between align-items-end">
                                            <div class="flex-grow-1">
                                                <h4 class="fw-bolder mb-0">Stick</h4>
                                                <p class="fw-bolder text-black-50 m-1">1500 MMK</p>
                                                <div class="progress mb-4">
                                                    <div class="progress-bar w-50" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <img src="./img/item/item2.png" alt="" class="item-card-img">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="splide__slide__container">
                                    <div class="">
                                        <div class="d-flex justify-content-between align-items-end">
                                            <div class="flex-grow-1">
                                                <h4 class="fw-bolder mb-0">Book</h4>
                                                <p class="fw-bolder text-black-50 m-1">2300 MMK</p>
                                                <div class="progress mb-4">
                                                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <img src="./img/item/item3.png" alt="" class="item-card-img">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="splide__slide__container">
                                    <div class="">
                                        <div class="d-flex justify-content-between align-items-end">
                                            <div class="flex-grow-1">
                                                <h4 class="fw-bolder mb-0">MockUp</h4>
                                                <p class="fw-bolder text-black-50 m-1">2100 MMK</p>
                                                <div class="progress mb-4">
                                                    <div class="progress-bar w-25" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <img src="./img/item/item4.png" alt="" class="item-card-img">
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6 col-xl-5">
        <div class="card shadow mb-4">
            <div class="card-body p-0">
                <div class="">
                    <div class="d-flex justify-content-between align-items-center p-4">
                        <h4 class="mb-0">Orders and Places</h4>
                        <div class="">
                            <i class="feather-pie-chart h4 text-primary"></i>
                        </div>
                    </div>
                    <canvas id="op" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-12 col-xl-7">
        <div class="card mb-4 shadow overflow-hidden">
            <div class="">
                <div class="d-flex justify-content-center align-items-center p-4 ">
                    <h4 class="mb-0">Subscriber List</h4>
                    <div class="">
                        <!-- <i class="feather-more-vertical h4 text-primary"></i> -->
                    </div>
                </div>
                <table class="table mb-0 ms-1 table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Company</th>
                            <th>Start Date</th>
                            <th>Status</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Michael Austin</td>
                            <td>ABC Fintech LTD.</td>
                            <td>Jan 1,2019</td>
                            
                            <td><span class="text-white badge bg-danger">Close</span></td>
                            <td>$ 1000.00</td>
                            <td class="text-center"><a href="#"><i class="feather-trash-2 h4 pink-text"></i></a></td>
                        </tr>
                        <tr>
                            <td>Aldin Rakić</td>
                            <td>ACME Pvt LTD.</td>
                            <td>Jan 10,2019</td>
                            
                            <td><span class="text-white badge bg-success">Open</span></td>
                            <td>$ 3000.00</td>
                            <td class="text-center"><a href="#"><i class="feather-trash-2 h4 pink-text"></i></a></td>
                        </tr>
                        <tr>
                            <td>İris Yılmaz</td>
                            <td>Collboy Tech LTD.</td>
                            <td>Jan 12,2019</td>
                            
                            <td><span class="text-white badge bg-success">Open</span></td>
                            <td>$ 2000.00</td>
                            <td class="text-center"><a href="#"><i class="feather-trash-2 h4 pink-text"></i></a></td>
                        </tr>
                        <tr>
                            <td>Lidia Livescu</td>
                            <td>My Fintech LTD.</td>
                            <td>Jan 14,2019</td>
                            
                            <td><span class="text-white badge bg-danger">Close</span></td>
                            <td>$ 1100.00</td>
                            <td class="text-center"><a href="#"><i class="feather-trash-2 h4 pink-text"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
</div>
<!-- content ends -->  


<?php include "./template/footer.php";?>