<?php
    include_once ('config/db_con.php');
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM business WHERE user_id = $user_id";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
    } else {
        $row = null;
    }
    if (isset($row['user_id'])) {
        $user_id = $row['user_id'];
    } else {
        $user_id = null;
    }
    if (isset($row['business_name'])) {
        $business_name = $row['business_name'];
    } else {
        $business_name = null;
    }
    if (isset($row['business_address'])) {
        $business_address = $row['business_address'];
    } else {
        $business_address = null;
    }
    if (isset($row['business_phone'])) {
        $business_phone = $row['business_phone'];
    } else {
        $business_phone = null;
    }
    if (isset($row['business_email'])) {
        $business_email = $row['business_email'];
    } else {
        $business_email = null;
    }
    if (isset($row['business_logo'])) {
        $business_logo = $row['business_logo'];
    } else {
        $business_logo = null;
    }
    if (isset($row['currency'])) {
        $currency = $row['currency'];
    } else {
        $currency = null;
    }
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div  class="card-header" style="background-color: #1E88E5; color:#ffffff;">
                    <h4 class="card-title" style="color:#ffffff;">View Business Details</h4>
                </div>
                <div class="card-body">
                    <?php
                        $msg = (isset($_GET['msg'])) ? $_GET['msg'] : 'default';
                        if ($msg == "edit-success") {
                            echo '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
                                role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Success - </strong> Business detail updated successfully!
                            </div>';
                        }
                    ?>
                    <h3 class="card-title">Rounded Chair</h3>
                    <h6 class="card-subtitle">globe type chair for rest</h6>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="white-box text-center"> <img src="assets/images/gallery/chair.jpg" class="img-fluid"> </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-6">
                            <h4 class="box-title mt-5">Product description</h4>
                            <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. but the majority have suffered alteration in some form, by injected humour</p>
                            <h2 class="mt-5">$153 <small class="text-success">(36% off)</small></h2>
                            <button class="btn btn-dark btn-rounded mr-1" data-toggle="tooltip" title="" data-original-title="Add to cart"><i class="ti-shopping-cart"></i> </button>
                            <button class="btn btn-primary btn-rounded"> Buy Now </button>
                            <!-- <h3 class="box-title mt-5">Key Highlights</h3>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-check text-success"></i> Sturdy structure</li>
                                <li><i class="fa fa-check text-success"></i> Designed to foster easy portability</li>
                                <li><i class="fa fa-check text-success"></i> Perfect furniture to flaunt your wonderful collectibles</li>
                            </ul> -->
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h3 class="box-title mt-5">General Info</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td width="390">Brand</td>
                                            <td> Stellar </td>
                                        </tr>
                                        <tr>
                                            <td>Delivery Condition</td>
                                            <td> Knock Down </td>
                                        </tr>
                                        <tr>
                                            <td>Seat Lock Included</td>
                                            <td> Yes </td>
                                        </tr>
                                        <tr>
                                            <td>Type</td>
                                            <td> Office Chair </td>
                                        </tr>
                                        <tr>
                                            <td>Style</td>
                                            <td> Contemporary &amp; Modern </td>
                                        </tr>
                                        <tr>
                                            <td>Wheels Included</td>
                                            <td> Yes </td>
                                        </tr>
                                        <tr>
                                            <td>Upholstery Included</td>
                                            <td> Yes </td>
                                        </tr>
                                        <tr>
                                            <td>Upholstery Type</td>
                                            <td> Cushion </td>
                                        </tr>
                                        <tr>
                                            <td>Head Support</td>
                                            <td> No </td>
                                        </tr>
                                        <tr>
                                            <td>Suitable For</td>
                                            <td> Study &amp; Home Office </td>
                                        </tr>
                                        <tr>
                                            <td>Adjustable Height</td>
                                            <td> Yes </td>
                                        </tr>
                                        <tr>
                                            <td>Model Number</td>
                                            <td> F01020701-00HT744A06 </td>
                                        </tr>
                                        <tr>
                                            <td>Armrest Included</td>
                                            <td> Yes </td>
                                        </tr>
                                        <tr>
                                            <td>Care Instructions</td>
                                            <td> Handle With Care, Keep In Dry Place, Do Not Apply Any Chemical For Cleaning. </td>
                                        </tr>
                                        <tr>
                                            <td>Finish Type</td>
                                            <td> Matte </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>