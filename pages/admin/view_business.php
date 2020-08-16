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
                    <h3 class="card-title"><?php echo $business_name; ?></h3>
                    <h6 class="card-subtitle"><?php echo $business_address; ?></h6>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="white-box text-center"> <img src="<?php echo $business_logo; ?>" class="img-fluid"> </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-6">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td width="390">Business Email</td>
                                            <td> <?php echo $business_email ?> </td>
                                        </tr>
                                        <tr>
                                            <td>Business Contact Number</td>
                                            <td> <?php echo $business_phone ?> </td>
                                        </tr>
                                        <tr>
                                            <td>Current Currency</td>
                                            <td> <?php if ($currency == "Cedis") {
                                                echo '<i class="flag-icon flag-icon-gh" title="gh" id="gh"></i> Ghana Cedi';
                                            } elseif ($currency == "Dollar") {
                                                echo '<i class="flag-icon flag-icon-us" title="us" id="us"></i> US Dollar';
                                            } ?> </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <a class="btn btn-info text-white mt-3" href="?p=edit-business"> Edit Business Details </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>