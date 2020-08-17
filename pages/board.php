
<body>
<!-- Column -->
<div class="col-lg-12 col-md-12">
    <div class="card">
        <div class="card-body text-center">
            <?php
                $login = (isset($_GET['login'])) ? $_GET['login'] : 'login-default';
                if ($login == "activationsuccess") {
                    echo '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
                        role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Success - </strong> Account activation successful. Congratulations.
                    </div>';
                }
            ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="">
                        <div>
                            <?php
                                if ($login == "activationsuccess") {
                                    echo '<h4 class="card-title">Hello there!</h4>
                                    <p class="card-text">Thanks for choosing Start Invoice.</p>
                                    <p class="card-text">We advise you set up your business details</p>
                                    <a href="?p=edit-business" class="btn btn-info text-white">Set up Business Details</a>';
                                } else{
                                    echo '<h3 class="card-title">Dashboard</h3>
                                    <h6 class="card-subtitle">Start Invoice Dashboard Content Goes Here</h6>';
                                }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
