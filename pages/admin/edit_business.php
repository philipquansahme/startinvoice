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
    }
    if (isset($row['business_address'])) {
        $business_address = $row['business_address'];
    }
    if (isset($row['business_phone'])) {
        $business_phone = $row['business_phone'];
    }
    if (isset($row['business_email'])) {
        $business_email = $row['business_email'];
    }
    if (isset($row['business_logo'])) {
        $business_logo = $row['business_logo'];
    }
    if (isset($row['currency'])) {
        $currency = $row['currency'];
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
                    <form class="form-material mt-1">
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
                            <label><b>Currency</b></label>
                            <select class="form-control" name="currency">
                                <option value="Cedis">Cedis</option> 
                                <option value="Dollar">Dollar</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>