
<body>
<!-- Column -->
<div class="col-lg-12 col-md-12">
    <div class="card">
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
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex flex-wrap">
                        <div>
                            <h3 class="card-title">Dashboard</h3>
                            <h6 class="card-subtitle">Start Invoice</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
