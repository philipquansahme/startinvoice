<?php 
    include_once ('config/db_con.php');
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM users WHERE owned_by = $user_id";
    $result = mysqli_query($con, $sql);
    $row = (mysqli_num_rows($result) <= 0) ? null : "default";
?>
<div class="col-md-10 mx-auto">
    <div class="widget-content searchable-container list">
        <div class="card card-body">
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
                                
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="owned_by" value="<?php echo $user_id; ?>">
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
                } else {
                    echo '<div class="table-responsive">
                        <table class="table table-striped search-table v-middle">
                            <thead class="header-item">
                                <th class="text-dark font-weight-bold">User</th>
                                <th class="text-dark font-weight-bold">Email</th>
                                <th class="text-dark font-weight-bold">Phone Number</th>
                                <th class="text-dark font-weight-bold">Actions</th>
                            </thead>
                        <tbody>';
                    while ($data = mysqli_fetch_assoc($result)) {
                        $position = ($data['position_id'] == 2) ? "Manager" : "Billing Officer";
                        echo "<tr class='search-items'>
                            <td>
                                <div class='d-flex align-items-center'>
                                    <img src='".$data['profile_pic']."' alt='avatar' class='rounded-circle' width='35'>
                                    <div class='ml-2'>
                                            <div class='user-meta-info'>
                                                <h5 class='user-name mb-0' data-name='".$data['first_name'].' '.$data['last_name']."'>".$data['first_name'].' '.$data['last_name']."</h5>
                                                <span class='user-work text-muted' data-occupation='".$position."'>".$position."</span>
                                            </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class='usr-email-addr' data-email='".$data['email']."'>".$data['email']."</span>
                            </td>
                            <td>
                                <span class='usr-ph-no' data-phone='".$data['phone_number']."'>".$data['phone_number']."</span>
                            </td>
                            <td class='text-center'>
                                <div class='action-btn'>
                                    <a href='javascript:void(0)' class='text-info edit'><i class='mdi mdi-account-edit font-20'></i></a>
                                    <a href='javascript:void(0)' class='text-danger delete ml-2'><i class='mdi mdi-delete font-20'></i></a>
                                </div>
                            </td>
                        </tr>";
                    
                    }

                    echo '</tbody>
                            </table>
                        </div>';
                }
            ?>
        </div>
    </div>
</div>