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
                    <h4 class="card-title" style="color:#ffffff;">Manage Business Details</h4>
                </div>
                <div class="card-body">
                    <form class="form-material mt-1" enctype="multipart/form-data" action="actions/admin/edit_business.php" method="POST">
                        <div class="form-group">
                            <label><b>Business Name</b></label>
                            <input type="text" class="form-control form-control-line" name="business_name" placeholder="Enter your business name" value="<?php echo $business_name;?>"> 
                        </div>
                        <div class="form-group">
                            <label><b>Business Email</b></label>
                            <input class="form-control" type="email"  name="business_email"  placeholder="Enter your business email" value="<?php echo $business_email;?>"> 
                        </div>
                        <div class="form-group">
                            <label><b>Business Address</b></label>
                            <input class="form-control" type="text"  name="business_address"  placeholder="Enter your business address" value="<?php echo $business_address;?>"> 
                        </div>
                        <div class="form-group">
                            <label><b>Business Phone</b></label>
                            <input class="form-control" type="text"  name="business_phone"  placeholder="Enter your business phone" value="<?php echo $business_phone;?>"> 
                        </div>
                        <div class="form-group">
                            <label><b>Business Logo</b></label>
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput"> <i
                                        class="glyphicon glyphicon-file fileinput-exists"></i> <span
                                        class="fileinput-filename"></span></div> <span
                                    class="input-group-addon btn btn-default btn-file"> <span
                                        class="fileinput-new">Select file</span> <span
                                        class="fileinput-exists">Change</span>
                                    <input type="hidden">
                                    <input type="file" name="business_logo" value="<?php echo $business_logo;?>"> </span> <a href="#"
                                    class="input-group-addon btn btn-default fileinput-exists"
                                    data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label><b>Select Currency</b></label>
                            <select class="form-control" name="currency">
                                <option value="Cedis"><i class="flag-icon flag-icon-gh" title="gh" id="gh"></i>  Cedis</option> 
                                <option value="Dollar">Dollar</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-info waves-effect waves-light mt-2 text-center" name="edit_business">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>