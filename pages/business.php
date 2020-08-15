<form class="form-horizontal">
        <div class="card-body">
            <h3 class="card-title">Business Details</h3>
            <div class="form-group row">
                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Business Name</label>
                <div class="col-sm-9">
                    <input type="text" name="business_name" class="form-control" id="fname" placeholder="Business Name Here">
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Business Address</label>
                <div class="col-sm-9">
                    <input type="text" name="business_address" class="form-control" id="lname" placeholder="Address Here">
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Business Phone</label>
                <div class="col-sm-9">
                    <input type="tel" name="business_phone" class="form-control" id="lname" placeholder="Phone Number Here">
                </div>
            </div>
            <div class="form-group row">
                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Business Email</label>
                <div class="col-sm-9">
                    <input type="email" name="business_email" class="form-control" id="email1" placeholder="Email Here">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 text-right control-label col-form-label">Business Logo</label>
                <div class="col-sm-9">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="business_logo" class="custom-file-input" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 text-right control-label col-form-label">Currency</label>
                <div class="col-sm-9">
                    <select class="form-control">
                        <option>Choose Your Currency</option>
                        <option  name="currency">Cedis</option>
                        <option  name="currency">$ Dollor</option>
                        <option  name="currency">$ Euro</option>
                    </select>
                </div>
            </div>
        <hr>
        <div class="card-body">
            <div class="form-group mb-0 text-right">
                <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                <!--button type="submit" class="btn btn-dark waves-effect waves-light">Cancel</button-->
            </div>
        </div>
</form>