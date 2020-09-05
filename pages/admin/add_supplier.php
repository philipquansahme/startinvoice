<?php
    $user_id = $_SESSION['user_id'];
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div  class="card-header" style="background-color: #1E88E5; color:#ffffff;">
                    <h4 class="card-title" style="color:#ffffff;">Add New Supplier</h4>
                </div>
                <div class="card-body">
                    <?php
                        $error = (isset($_GET['error'])) ? $_GET['error'] : 'default';
                        if ($error == "sqlerror") {
                            echo '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Error - </strong> Problem adding the record. Kindly try again!
                            </div>';
                        } 
                    ?>
                    <form class="form-material mt-1" method="POST" action="actions/admin/add_supplier.php">
                        <div class="form-group">
                            <label><b>Company / Business Name</b></label>
                            <input class="form-control" type="text"  name="supplier_com_name"  placeholder="Enter supplier's company or business name"> 
                        </div>
                        <div class="form-group">
                            <label><b>Company / Business Email</b></label>
                            <input class="form-control" type="email"  name="supplier_email"  placeholder="Enter supplier's company or business email"> 
                        </div>
                        <div class="form-group">
                            <label><b>Company / Business Contact Number</b></label>
                            <input class="form-control" type="text"  name="supplier_com_phone"  placeholder="eg 024xxxxxxx"> 
                        </div>
                        <div class="form-group">
                            <label><b>Supply Item(s)</b></label>
                            <textarea class="form-control" rows="5" name="supplier_major_item" placeholder="If more seperate by comma"></textarea>
                        </div>
                        <!-- <div class="form-group">
                            <label><b>Shipping Address</b></label>
                            <textarea class="form-control" rows="5"></textarea>
                        </div> -->
                        <input type="hidden" name="owned_by" value="<?php echo $user_id; ?>">
                        <button type="submit" class="btn btn-info waves-effect waves-light mt-2 text-center">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>