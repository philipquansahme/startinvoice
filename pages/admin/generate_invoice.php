<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div  class="card-header" style="background-color: #1E88E5; color:#ffffff;">
                    <h4 class="card-title" style="color:#ffffff;">Generate Invoice</h4>
                </div>
                <div class="card-body">
                    <?php
                        $msg = (isset($_GET['msg'])) ? $_GET['msg'] : 'default';
                        if ($msg == "edit-fail") {
                            echo '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Error - </strong> Problem saving your request. Kindly try again!
                            </div>';
                        } elseif ($msg == "filesizeerror") {
                            echo '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Error - </strong> File size exceeds 2MB. Kindly try again!
                            </div>';
                        } elseif ($msg == "uploaderror") {
                            echo '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Error - </strong> Problem iploading your file. Kindly try again!
                            </div>';
                        } elseif ($msg == "filetypeerror") {
                            echo '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Error - </strong> File type not allowed. Must be JPG, JPEG or PNG!
                            </div>';
                        }
                    ?>
                        <p class="lead text-center">Generating Invoice Form & Logic Goes Here</p>
                    <!-- <form class="form-material mt-1">
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
                            <textarea class="form-control" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label><b>Shipping Address</b></label>
                            <textarea class="form-control" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-info waves-effect waves-light mt-2 text-center">Submit</button>
                    </form> -->
                </div>
            </div>
        </div>
    </div>
</div>