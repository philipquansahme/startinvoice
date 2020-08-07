<!-- 
<style>
	.card-title{color: #1E88E5;
		text-align: right;
		
	}
	
	.card{border: solid 1px #EEF5F9;}
</style> -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Material inputs</h4>
                <h6 class="card-subtitle">Just add <code>form-material</code> class to the form that's
                    it.</h6>
                <form class="form-material mt-4">
                    <div class="form-group">
                        <label>Default Text <span class="help"> e.g. "George deo"</span></label>
                        <input type="text" class="form-control form-control-line"
                            value="Some text value..."> </div>
                    <div class="form-group">
                        <label for="example-email">Email <span class="help"> e.g.
                                "example@gmail.com"</span></label>
                        <input type="email" id="example-email2" name="example-email"
                            class="form-control" placeholder="Email"> </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" value="password"> </div>
                    <div class="form-group">
                        <label>Placeholder</label>
                        <input type="text" class="form-control" placeholder="placeholder"> </div>
                    <div class="form-group">
                        <label>Text area</label>
                        <textarea class="form-control" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Input Select</label>
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>File upload</label>
                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                            <div class="form-control" data-trigger="fileinput"> <i
                                    class="glyphicon glyphicon-file fileinput-exists"></i> <span
                                    class="fileinput-filename"></span></div> <span
                                class="input-group-addon btn btn-default btn-file"> <span
                                    class="fileinput-new">Select file</span> <span
                                    class="fileinput-exists">Change</span>
                                <input type="hidden">
                                <input type="file" name="..."> </span> <a href="#"
                                class="input-group-addon btn btn-default fileinput-exists"
                                data-dismiss="fileinput">Remove</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Helping text</label>
                        <input type="text" class="form-control form-control-line"> <span
                            class="help-block text-muted"><small>A block of help text that breaks onto a
                                new line and may extend beyond one line.</small></span> </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Different Widths</h4>
                <h6 class="card-subtitle">Just add <code>col*</code> class to form-group</h6>
                <form class="form-material mt-4 row">
                    <div class="form-group col-md-6 mt-3">
                        <input type="text" class="form-control form-control-line" value="col-md-6">
                    </div>
                    <div class="form-group col-md-6 mt-3">
                        <input type="email" id="example-email2" name="example-email"
                            class="form-control" placeholder="col-md-6"> </div>
                    <div class="form-group col-md-4 mt-3">
                        <input type="text" class="form-control form-control-line" value="col-md-4">
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        <input type="email" id="example-email2" name="example-email"
                            class="form-control" placeholder="col-md-4"> </div>
                    <div class="form-group col-md-4 mt-3">
                        <input type="text" class="form-control" value="col-md-4"> </div>
                    <div class="form-group col-md-3 mt-3">
                        <input type="text" class="form-control" placeholder="col-md-3"> </div>
                    <div class="form-group col-md-3 mt-3">
                        <select class="form-control">
                            <option>col-md-3</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3 mt-3">
                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                            <div class="form-control" data-trigger="fileinput"> <i
                                    class="glyphicon glyphicon-file fileinput-exists"></i> <span
                                    class="fileinput-filename"></span></div> <span
                                class="input-group-addon btn btn-default btn-file"> <span
                                    class="fileinput-new">Select file</span> <span
                                    class="fileinput-exists">Change</span>
                                <input type="file" name="..."> </span> <a href="#"
                                class="input-group-addon btn btn-default fileinput-exists"
                                data-dismiss="fileinput">Remove</a>
                        </div>
                    </div>
                    <div class="form-group col-md-3 mt-3">
                        <input type="text" placeholder="col-md-3"
                            class="form-control form-control-line"> </div>
                    <div class="form-group col-md-12 mt-3">
                        <label>Text area</label>
                        <textarea class="form-control" rows="5"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <!-- Column -->
    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex flex-wrap">
                            <div>
                                <h3 class="card-title">Sales Overview</h3>
                                <h6 class="card-subtitle">Ample Admin Vs Pixel Admin</h6>
                            </div>
                            <div class="ml-auto">
                                <ul class="list-inline">
                                    <li class="list-inline-item px-2">
                                        <h6 class="text-success"><i
                                                class="fa fa-circle font-10 mr-2 "></i>Ample</h6>
                                    </li>
                                    <li class="list-inline-item px-2">
                                        <h6 class="text-info"><i
                                                class="fa fa-circle font-10 mr-2"></i>Pixel</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="amp-pxl" style="height: 360px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Our Visitors </h3>
                <h6 class="card-subtitle">Different Devices Used to Visit</h6>
                <div id="visitor" style="height:290px; width:100%;"></div>
            </div>
            <div class="card-body text-center border-top">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item px-2">
                        <h6 class="text-info"><i class="fa fa-circle font-10 mr-2 "></i>Mobile</h6>
                    </li>
                    <li class="list-inline-item px-2">
                        <h6 class=" text-primary"><i class="fa fa-circle font-10 mr-2"></i>Desktop</h6>
                    </li>
                    <li class="list-inline-item px-2">
                        <h6 class=" text-success"><i class="fa fa-circle font-10 mr-2"></i>Tablet</h6>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Column -->
<div class="col-lg-12 col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex flex-wrap">
                        <div>
                            <h3 class="card-title">Dashboard</h3>
                            <h6 class="card-subtitle">Welcome To Admin Panel</h6>
			
                        </div>
                    </div>
									        <!-- Start Page Content -->
                <!-- ============================================================== -->
						
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title">Total Products</h4>
                                <div class="row align-items-center mt-3">
                                    <div class="col-6">
                                        <div id="sparklinedash">
											<i class="fa fa-product-hunt" style="font-size:36px;"></i>
										</div>
                                    </div>
                                    <div class="col-6 text-right">
                                        <i class="ti-arrow-up text-success"></i> <span class="counter text-success">3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title">Total Customers</h4>
                                <div class="row align-items-center mt-3">
                                    <div class="col-6">
                                        <div id="sparklinedash2">
											<i class="fa fa-area-chart" style="font-size:36px;"></i>
										</div>
                                    </div>
                                    <div class="col-6 text-right">
                                        <i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">5</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title">Total Proposals</h4>
                                <div class="row align-items-center mt-3">
                                    <div class="col-6">
                                        <div id="sparklinedash3">
											<i class="fa fa-paper-plane" style="font-size:36px;"></i>
										</div>
                                    </div>
                                    <div class="col-6 text-right">
                                        <i class="  ti-arrow-up text-info"></i> <span class="counter text-info">6</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title">Total Invoices</h4>
                                <div class="row align-items-center mt-3">
                                    <div class="col-6">
                                        <div id="sparklinedash4">
											<i class='fa fa-files-o' style='font-size:36px'></i>
										</div>
                                    </div>
                                    <div class="col-6 text-right">
                                        <i class="ti-arrow-down text-danger"></i> <span class="text-danger">2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
                </div>
            </div>
			
			    
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12">
    <div class="row">
                    <div class="col-lg-4">
                        <!-- Column -->
                        <div class="card earning-widget">
                            <div class="card-header">
                                <div class="card-actions">
                                    <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                                    <a class="btn-minimize" data-action="expand"><i
                                            class="mdi mdi-arrow-expand"></i></a>
                                    <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                                </div>
                                <h4 class="card-title mb-0">Earning</h4>
                            </div>
                            <div class="card-body border-top collapse show table-responsive no-wrap">
                                <table class="table v-middle table-borderless">
                                    <tbody>
                                        <tr>
                                            <td style="width:40px"><img src="assets/images/users/1.jpg" width="50"
                                                    class="rounded-circle" alt="logo"></td>
                                            <td>Andrew</td>
                                            <td align="right"><span
                                                    class="badge px-2 py-1 badge-light-info text-info">$2300</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/users/2.jpg" width="50"
                                                    class="rounded-circle" alt="logo"></td>
                                            <td>Kristeen</td>
                                            <td align="right"><span
                                                    class="badge px-2 py-1 badge-light-success text-success">$3300</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/users/3.jpg" width="50"
                                                    class="rounded-circle" alt="logo"></td>
                                            <td>Dany John</td>
                                            <td align="right"><span
                                                    class="badge px-2 py-1 badge-light-primary text-primary">$4300</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/users/4.jpg" width="50"
                                                    class="rounded-circle" alt="logo"></td>
                                            <td>Chris gyle</td>
                                            <td align="right"><span
                                                    class="badge px-2 py-1 badge-light-warning text-warning">$5300</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/users/5.jpg" width="50"
                                                    class="rounded-circle" alt="logo"></td>
                                            <td>Prabhas</td>
                                            <td align="right"><span
                                                    class="badge px-2 py-1 badge-light-danger text-danger">$4567</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/users/6.jpg" width="50"
                                                    class="rounded-circle" alt="logo"></td>
                                            <td>Bahubali</td>
                                            <td align="right"><span
                                                    class="badge px-2 py-1 badge-light-megna text-megna">$7889</span></td>
                                        </tr>
										
										<tr>
                                            <td><img src="assets/images/users/6.jpg" width="50"
                                                    class="rounded-circle" alt="logo"></td>
                                            <td>Bahubali</td>
                                            <td align="right"><span
                                                    class="badge px-2 py-1 badge-light-megna text-megna">$7889</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Column -->
                    </div>
                    <div class="col-lg-8">
                        <!-- Column -->
                            
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-actions">
                                            <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                                            <a class="btn-minimize" data-action="expand"><i
                                                    class="mdi mdi-arrow-expand"></i></a>
                                            <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                                        </div>
                                        <h4 class="card-title mb-0">Product Overview</h4>
                                    </div>
                                    <div class="card-body collapse show">
                                        <div class="table-responsive no-wrap">
                                            <table class="table product-overview v-middle">
                                                <thead>
                                                    <tr>
                                                        <th class="border-0">Customer</th>
                                                        <th class="border-0">Photo</th>
                                                        <th class="border-0">Quantity</th>
                                                        <th class="border-0">Date</th>
                                                        <th class="border-0">Status</th>
                                                        <th class="border-0">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Steave Jobs</td>
                                                        <td>
                                                            <img src="assets/images/gallery/chair.jpg" alt="iMac"
                                                                width="80">
                                                        </td>
                                                        <td>20</td>
                                                        <td>10-7-2020</td>
                                                        <td>
                                                            <span
                                                                class="px-2 py-1 badge badge-success font-weight-100">Paid</span>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="text-inverse pr-2"
                                                                data-toggle="tooltip" title=""
                                                                data-original-title="Edit"><i
                                                                    class="ti-marker-alt"></i></a> <a
                                                                href="javascript:void(0)" class="text-inverse" title=""
                                                                data-toggle="tooltip" data-original-title="Delete"><i
                                                                    class="ti-trash"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Varun Dhavan</td>
                                                        <td>
                                                            <img src="assets/images/gallery/chair2.jpg" alt="iPhone"
                                                                width="80">
                                                        </td>
                                                        <td>25</td>
                                                        <td>09-7-2020</td>
                                                        <td>
                                                            <span
                                                                class="px-2 py-1 badge badge-warning font-weight-100">Pending</span>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="text-inverse pr-2"
                                                                data-toggle="tooltip" title=""
                                                                data-original-title="Edit"><i
                                                                    class="ti-marker-alt"></i></a> <a
                                                                href="javascript:void(0)" class="text-inverse" title=""
                                                                data-toggle="tooltip" data-original-title="Delete"><i
                                                                    class="ti-trash"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ritesh Desh</td>
                                                        <td>
                                                            <img src="assets/images/gallery/chair3.jpg"
                                                                alt="apple_watch" width="80">
                                                        </td>
                                                        <td>12</td>
                                                        <td>08-7-2020</td>
                                                        <td>
                                                            <span
                                                                class="px-2 py-1 badge badge-success font-weight-100">Paid</span>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="text-inverse pr-2"
                                                                data-toggle="tooltip" title=""
                                                                data-original-title="Edit"><i
                                                                    class="ti-marker-alt"></i></a> <a
                                                                href="javascript:void(0)" class="text-inverse" title=""
                                                                data-toggle="tooltip" data-original-title="Delete"><i
                                                                    class="ti-trash"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hrithik</td>
                                                        <td>
                                                            <img src="assets/images/gallery/chair4.jpg"
                                                                alt="mac_mouse" width="80">
                                                        </td>
                                                        <td>18</td>
                                                        <td>02-7-2020</td>
                                                        <td>
                                                            <span
                                                                class="px-2 py-1 badge badge-danger font-weight-100">Failed</span>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="text-inverse pr-2"
                                                                data-toggle="tooltip" title=""
                                                                data-original-title="Edit"><i
                                                                    class="ti-marker-alt"></i></a> <a
                                                                href="javascript:void(0)" class="text-inverse" title=""
                                                                data-toggle="tooltip" data-original-title="Delete"><i
                                                                    class="ti-trash"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
						
                           
                            <!-- Column -->
                    </div>
                    
                </div>
		 </div>

	