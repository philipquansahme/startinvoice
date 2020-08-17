<?php 
    include_once ('config/db_con.php');
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM users WHERE owned_by = $user_id";
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
                            <input type="text" class="form-control product-search" id="input-search" placeholder="Search Users...">
                        </form>
                    </div>
                    <div class="col-md-8 text-right d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                            <a href="javascript:void(0)" id="btn-add-contact" class="btn btn-info"><i class="mdi mdi-account-multiple-plus font-16 mr-1"></i> Add User</a>
                    </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="addContactModal" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="add-contact-box">
                            <div class="add-contact-content">
                                <form class="form-material mt-1" id="addContactModalTitle" method="POST" action="actions/admin/manage_users.php">
                                    <div class="form-group">
                                        <label><b>Position</b></label>
                                        <select class="form-control" name="position_id" required>
                                            <option value="">Kindly Select User Role</option>
                                            <option value="2">Manager</option> 
                                            <option value="3">Billing Officer</option>
                                        </select> 
                                    </div>
                                    <div class="form-group">
                                        <label><b>First Name</b></label>
                                        <input class="form-control" type="text"  name="first_name" required> 
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
                                        <input class="form-control" type="text"  name="phone_number"  placeholder="eg 024xxxxxxx" required> 
                                    </div>
                                    <div class="form-group">
                                        <label><b>Assign Password</b></label>
                                        <input class="form-control" type="text"  name="password" required> 
                                    </div>
                                    <div class="form-group form-check form-check-inline">
                                        <!-- <label class="form-check-label" for="inlineCheckbox1">Gododo</label> -->
                                        <input class="form-check-input " type="checkbox" id="inlineCheckbox1" name="force_password" value="true"> Force user to change password upon login
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button  type="submit" id="btn-add" class="btn btn-success">Add</button>
                        <!-- <button id="btn-edit" class="btn btn-success">Save</button> -->
                        <button class="btn btn-danger" data-dismiss="modal"> Discard</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-body">
            <?php
                if ($row == null) {
                    echo '<p class="lead mx-auto">No User Added Yet</p><br>';
                } else{
                    include 'inc_manage_users.php';
                }
            ?>
            
        </div>
    </div>
</div>