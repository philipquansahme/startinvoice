<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div  class="card-header" style="background-color: #1E88E5; color:#ffffff;">
                    <h4 class="card-title" style="color:#ffffff;">Add New Customer</h4>
                </div>
                <div class="card-body">
                    <?php
                        $error = (isset($_GET['error'])) ? $_GET['error'] : 'default';
                        if ($error == "sqlerror") {
                            echo '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Error - </strong> Problem saving your request. Kindly try again!
                            </div>';
                        } 
                    ?>
                    <form class="form-material mt-1" method="POST" action="actions/admin/add_customers.php">
                        <div class="form-group">
                            <label><b>Customer Name</b></label>
                            <input class="form-control" type="text"  name="customer_name"  placeholder="Enter customer's name "> 
                        </div>
                        <div class="form-group">
                            <label><b>Customer Email</b></label>
                            <input class="form-control" type="email"  name="customer_email"  placeholder="Enter customer's email"> 
                        </div>
                        <div class="form-group">
                            <label><b>Customer Phone Number</b></label>
                            <input class="form-control" type="text"  name="customer_phone"  placeholder="eg 024xxxxxxx"> 
                        </div>
                        <div class="form-group">
                            <label><b>Billing Address</b></label>
                            <textarea class="form-control" rows="5" name="billing_address"></textarea>
                        </div>
                        <div class="form-group">
                            <label><b>Shipping Address</b></label>
                            <textarea class="form-control" rows="5" name="shipping_address"></textarea>
                        </div>
                        <input type="hidden"  name="user_id" value="<?php echo $_SESSION['user_id'];?>">
                        <button type="submit" class="btn btn-info waves-effect waves-light mt-2 text-center">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>