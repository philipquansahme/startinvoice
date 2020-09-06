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
            <div class="row">
                <div class="col-md-4">
                    <form>
                        <input type="text" class="form-control product-search" id="input-search" placeholder="Search Users...">
                    </form>
                </div>
                <div class="col-md-8 text-right d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                        <a href="?p=add-user" id="btn-add-contact" class="btn btn-info"><i class="mdi mdi-account-multiple-plus font-16 mr-1"></i> Add User</a>
                </div>
            </div>
        </div>
        
        

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
                } elseif ($msg == "useredited") {
                    echo '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
                        role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Success - </strong> User record edited successfully!
                    </div>';
                } elseif ($msg == "userdeleted") {
                    echo '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
                        role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Success - </strong> User deleted successfully!
                    </div>';
                }
            ?>
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
                        $id = $data['user_id'];
                        // $own = $data['owned_by'];
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
                                    <a href='?p=edit-user&id=".$id."' class='text-info'><i class='mdi mdi-account-edit font-20'></i></a>
                                    <a href='javascript:void(0)' data-id='".$id."' data-toggle='modal' data-target='#danger-header-modal".$id."' class='text-danger ml-2'><i class='mdi mdi-delete font-20'></i></a>
                                </div>
                            </td>
                        </tr> <div id='danger-header-modal".$id."' class='modal fade' tabindex='-1' role='dialog'
                            aria-labelledby='danger-header-modalLabel' aria-hidden='true'>
                            <div class='modal-dialog'>
                                <div class='modal-content'>
                                    <div class='modal-header modal-colored-header bg-danger'>
                                        <h4 class='modal-title text-white' id='danger-header-modalLabel'>Delete User</h4>
                                        <button type='button' class='close' data-dismiss='modal'
                                            aria-hidden='true'>×</button>
                                    </div>
                                    <div class='modal-body'>
                                        <h4 class='mt-0 text-center'>Are you sure you want to delete this user?</h4>
                                        <p class='mt-1 text-center lead'>The action is irreversible</p>
                                        <form class='form-material mt-1' method='POST' action='actions/admin/delete_manage_users.php'>
                                            <input type='hidden' name='delete_id' value='".$id."'>
                                            <div class='row'>
                                                <div class='col-md-6'>
                                                    <button type='submit' class='btn btn-danger float-md-right'>Delete</button>
                                                </div>
                                                <div class='col-md-6'>
                                                    <button type='button' class='btn btn-info float-md-left' data-dismiss='modal'
                                                    aria-hidden='true'>Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                </div>
                            </div>
                        </div>";

                        
                    }

                    echo '</tbody>
                            </table>
                        </div>';
                }
            ?>
        </div>
    </div>
</div>