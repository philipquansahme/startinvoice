
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
                                    echo '
                                    <div class="card-body pb-0 mb-5">
                                        <h4 class="card-title" style="text-align:left">Dashboard</h4>
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <!-- Column -->
                                        <div class="col-lg-3 col-md-6">
                                            <div class="card">
                                                <div class="card-body" style="border: 2px solid #1e88e5; border-radius: 5px">
                                                    <div class="d-flex flex-row">
                                                        <div class="mr-1 align-self-left">
                                                            <h2 class="mb-0 font-weight-bold" style="text-align:left">3</h2>
                                                            <h5 class="text-muted mb-0" style="text-align:left">Total Products</h5>
                                                        </div>
                                                        <div
                                                            class="round round-lg text-white d-inline-block text-center rounded-circle bg-info">
                                                            <i class="ti-wallet"></i>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Column -->
                                        <!-- Column -->
                                        <div class="col-lg-3 col-md-6">
                                            <div class="card">
                                                <div class="card-body" style="border: 2px solid #1e88e5; border-radius: 5px">
                                                    <div class="d-flex flex-row">
                                                        <div class="mr-0 align-self-left">
                                                            <h2 class="mb-0 font-weight-bold" style="text-align:left">4</h2>
                                                            <h5 class="text-muted mb-0" style="text-align:left">Total Customers</h5>
                                                        </div>
                                                        <div
                                                            class="round round-lg text-white d-inline-block text-center rounded-circle bg-success">
                                                            <i class="ti-user"></i>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Column -->
                                        <!-- Column -->
                                        <div class="col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body" style="border: 2px solid #1e88e5; border-radius: 5px">
                                                <div class="d-flex flex-row">
                                                    <div class="mr-1 align-self-left">
                                                        <h2 class="mb-0 font-weight-bold" style="text-align:left">5</h2>
                                                        <h5 class="text-muted mb-0" style="text-align:left">Total Proposals</h5>
                                                    </div>
                                                    <div
                                                        class="round round-lg text-white d-inline-block text-center rounded-circle bg-warning">
                                                        <i class="ti-folder"></i>
                                                    </div>
                                                </div>
                                             </div>
                                        </div>
                                        </div>
                                        <!-- Column -->
                                        <!-- Column -->
                                        <div class="col-lg-3 col-md-6">
                                            <div class="card">
                                                <div class="card-body" style="border: 2px solid #1e88e5; border-radius: 5px">
                                                    <div class="d-flex flex-row">
                                                        <div class="mr-1 align-self-left">
                                                            <h2 class="mb-0 font-weight-bold" style="text-align:left">1</h2>
                                                            <h5 class="text-muted mb-0" style="text-align:left">Total Invoices</h5>
                                                        </div>
                                                        <div
                                                            class="round round-lg text-white d-inline-block text-center rounded-circle bg-primary">
                                                            <i class="ti-file"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Column -->
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body pb-0">
                                                    <h4 class="card-title" style="text-align:left">Customers</h4>
                                                    <hr>
                                                </div>
                                                <!-- ============================================================== -->
                                                <!-- Customers -->
                                                <!-- ============================================================== -->
                                                <div class="comment-widgets scrollable mb-2 common-widget" style="height: 450px;">
                                                    <!-- Customers Row -->
                                                    <div class="d-flex flex-row comment-row p-3">
                                                        <div class="p-2"><span
                                                            class="round round-lg text-white d-inline-block text-center rounded-circle bg-success">
                                                            <i class="ti-user"></i></span></div>
                                                        <div class="comment-text w-100" style="text-align: left">
                                                            <h5 class="text-nowrap">Person</h5>
                                                            <p class="mb-1 overflow-hidden">Phone: 02445678341</p>
                                                            <p class="mb-1 overflow-hidden">Email: admin@startinvoice.com</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body pb-0">
                                                    <h4 class="card-title" style="text-align:left">Invoices</h4>
                                                    <hr>
                                                </div>
                                                <!-- ============================================================== -->
                                                <!-- Invoices -->
                                                <!-- ============================================================== -->
                                                <div class="comment-widgets scrollable mb-2 common-widget" style="height: 450px;">
                                                    <!-- Customers Row -->
                                                    <div class="d-flex flex-row comment-row p-3">
                                                        <div class="p-2"><span
                                                        class="round round-lg text-white d-inline-block text-center rounded-circle bg-success">
                                                        <i class="ti-file"></i></span></div>
                                                        <div class="comment-text w-100" style="text-align: left">
                                                            <h5 class="text-nowrap">IMDB</h5>
                                                            <p class="mb-1 overflow-hidden">Date: 10-12-2020</p>
                                                            <p class="mb-1 overflow-hidden">Status: draft</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body pb-0">
                                                    <h4 class="card-title" style="text-align:left">Proposals</h4>
                                                    <hr>
                                                </div>
                                                <!-- ============================================================== -->
                                                <!-- Proposals -->
                                                <!-- ============================================================== -->
                                                <div class="comment-widgets scrollable mb-2 common-widget" style="height: 450px;">
                                                    <!-- Proposals Row -->
                                                    <div class="d-flex flex-row comment-row p-3">
                                                        <div class="p-2"><span
                                                            class="round round-lg text-white d-inline-block text-center rounded-circle bg-success">
                                                            <i class="ti-folder"></i></span></div>
                                                        <div class="comment-text w-100" style="text-align: left">
                                                            <h5 class="text-nowrap">Person</h5>
                                                            <p class="mb-1 overflow-hidden">Date: 10-02-2020</p>
                                                            <p class="mb-1 overflow-hidden">Status: Accepted</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    ';
                                }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
