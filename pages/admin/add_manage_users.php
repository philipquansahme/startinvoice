<?php
    $user_id = $_SESSION['user_id'];
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div  class="card-header" style="background-color: #1E88E5; color:#ffffff;">
                    <h4 class="card-title" style="color:#ffffff;">Add New User</h4>
                </div>
                <div class="card-body">
                    <?php
                        $error = (isset($_GET['error'])) ? $_GET['error'] : 'default';
                        if ($error == "acctexist") {
                            echo '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Error - </strong> Email or Phone Number assigned to another user!
                            </div>';
                        } elseif ($error == "sqlerror") {
                            echo '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Error - </strong> Problem saving your request. Kindly try again!
                            </div>';
                        }
                        $msg = (isset($_GET['msg'])) ? $_GET['msg'] : 'default';
                        if ($msg == "useradded") {
                            echo '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
                                role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Success - </strong> User added successfully!
                            </div>';
                        }
                    ?>
                    <form class="form-material mt-1" method="POST" action="actions/admin/add_manage_users.php">
                        <div class="form-group">
                            <div class="d-flex">
                                <div class="pt-0 ">
                                    <label><b>Kindly Select Position</b></label><br>
                                    <input name="position_id" type="radio" id="customControlValidation2" value="2" class="radio-col-blue material-inputs"  required>
                                    <label for="customControlValidation2" class="mt-3" data-toggle="tooltip" data-placement="top" title="Manage sub-users, products, customers and invoices">Manager</label>
                                    <input name="position_id" type="radio" id="customControlValidation3" value="3" class="radio-col-blue material-inputs" required>
                                    <label for="customControlValidation3" class="mt-3" data-toggle="tooltip" data-placement="top" title="Create invoices mostly">Billing Officer</label>
                                </div> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label><b>First Name</b></label>
                            <input class="form-control" type="text" id="c-name" name="first_name">
                            <span class="validation-text text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label><b>Last Name</b></label>
                            <input class="form-control" type="text"  name="last_name"  required> 
                        </div>
                        <div class="form-group">
                            <label><b>Email</b></label>
                            <input class="form-control" type="email" name="email"  required> 
                        </div>
                        <div class="form-group">
                            <label><b>Phone</b></label>
                            <input class="form-control" type="text"  name="phone_number"  placeholder="eg 024xxxxxxx" maxlength="10" required> 
                        </div>
                        <div class="form-group">
                            <label><b>Assign Password</b></label>
                            <input class="form-control" type="text"  name="password" required> 
                        </div>
                        <div class="form-group form-check form-check-inline">
                            <!-- <label class="form-check-label" for="inlineCheckbox1">Gododo</label> -->
                            <input class="form-check-input " type="checkbox" id="inlineCheckbox1" name="force_password" value="true"> Force user to change password upon login
                        </div>
                        <br>
                        <input type="hidden" name="owned_by" value="<?php echo $user_id; ?>">
                        <button type="submit" class="btn btn-info waves-effect waves-light mt-2 text-center">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>