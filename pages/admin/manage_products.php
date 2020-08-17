<?php 
    include_once ('config/db_con.php');
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM customers WHERE user_id = $user_id";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
    } else {
        $row = null;
    }
?>
<div class="col-md-10 mx-auto">
    <div class="widget-content searchable-container list">
        <div class="card card-body">
            <div class="row">
                    <div class="col-md-4">
                        <form>
                            <input type="text" class="form-control product-search" id="input-search" placeholder="Search Products...">
                        </form>
                    </div>
                    <div class="col-md-8 text-right d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                            <a href="?p=add-product" id="btn-add-contact" class="btn btn-info"><i class="mdi mdi-account-multiple-plus font-16 mr-1"></i> Add New Product</a>
                    </div>
            </div>
        </div>
        <!-- Modal -->
        <!-- Modal Supposed to be Here -->
        <div class="card card-body">
            <?php
                if ($row == null) {
                    echo '<p class="lead mx-auto">No Product Added Yet</p><br>';
                } else{
                    include 'inc_manage_users.php';
                }
            ?>
            
        </div>
    </div>
</div>