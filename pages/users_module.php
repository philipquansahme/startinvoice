<?php include('includes/header.php'); ?>
<div class="col-lg-12 col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex flex-wrap">
                        <div>
                            <h3 class="card-title">Business </h3>
                            <h6 class="card-subtitle">User Module</h6>
							<form class="mt-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="prenametext" value="Business Name">
                                    </div>
								    <div class="form-group">
                                        <input type="text" class="form-control" id="prenametext" value="Business Address">
                                    </div>
								    <div class="form-group">
                                        <input type="tel" class="form-control" id="prenametext" value="Business Phone">
                                    </div>
								    <div class="form-group">
                                        <input type="email" class="form-control" id="prenametext" value="Business Email">
                                    </div>
								    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload Business Logo</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
								    <div class="form-group mb-4">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Select Currency</label>
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                            <option selected>Choose...</option>
                                            <option value="1">Ghana Cedis</option>
                                            <option value="2">US Dollar</option>
                                            <option value="3">Euro</option>
                                        </select>
                                   </div>
                            </form>
                        </div>
						
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>