<?php include "./template/header.php"; ?>

<!-- content starts -->
<div class="row  p-1">
        <div class="col-12">
            <div class="">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Item</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-xl-8">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">
                            <i class="feather-plus-circle text-primary "></i>Add Item
                        </h4>
                        <a href="itemList.html" class="btn btn-outline-primary">
                            <i class="feather-list"></i>
                        </a>
                    </div>

                    <hr>

                    <form action="#">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="photo" class="form-label">Photo Upload</label>
                                    <i class="feather-info" type="right" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Only support jpg and png">
                                    </i> 
                                    <input type="file" id="photo" name="photo" class="form-control p-1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Item Name </label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="type" class="form-label">Type</label>
                                    <select name="type" id="type" class="form-select">
                                        <option value="0">Dry Food</option>
                                        <option value="1">Food</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="cat" class="form-label">Category</label>
                                    <select name="cat" id="cat" class="form-select">
                                        <option value="" selected disabled>Select Main Category</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="subCat" class="form-label">Sub Category</label>
                                    <select name="subCat" id="subCat" class="form-select">
                                        <option value="" selected disabled>Select Sub Category</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <label for="quantity" class="form-label">Item Quantity</label>
                                        <input type="number" name="quantity" id="quantity" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <div class="">
                                            <label for="unit" class=" form-label">Unit</label>
                                            <select name="unit" id="unit" class=" form-select">
                                                <option value="0">khu</option>
                                                <option value="1">boo</option>
                                                <option value="2">kwt</option>
                                                <option value="3">tone</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                        <label for="price" class="form-label">Price</label>
                                        <input type="number" name="price" id="price" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="des" class="form-label">Description</label>
                                    <textarea type="text" name="des" id="des" rows="8" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <button class="btn btn-primary">Add Item</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- content ends -->




<?php include "./template/footer.php"; ?>




