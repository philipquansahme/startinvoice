<form class="form-horizontal">
        <div class="card-body">
            <h3 class="card-title">Billing Officer</h3>
            <div class="form-group row">
                <label for="fname" class="col-sm-3 text-right control-label col-form-label">First Name</label>
                <div class="col-sm-9">
                    <input type="text" name="first_name" class="form-control" id="fname" placeholder="First Name Here">
                </div>
            </div>
            <div class="form-group row">
                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Last Name</label>
                <div class="col-sm-9">
                    <input type="text" name="last_name" class="form-control" id="fname" placeholder="Last Name Here">
                </div>
            </div>
            <div class="form-group row">
                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" name="email" class="form-control" id="email1" placeholder="Email Here">
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Phone Number</label>
                <div class="col-sm-9">
                    <input type="tel" name="phone_number" class="form-control" id="lname" placeholder="Phone Number Here">
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Password</label>
                <div class="col-sm-9">
                    <input type="password" name="password" class="form-control" id="lname" placeholder="Password Here">
                </div>
            </div>               
            <div class="form-group row">
                <label class="col-sm-3 text-right control-label col-form-label">Profile Picture</label>
                <div class="col-sm-9">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="profile_pic" class="custom-file-input" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Number of login</label>
                <div class="col-sm-9">
                    <input type="text" name="num_of_login" class="form-control" id="lname" placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Last Login</label>
                <div class="col-sm-9">
                    <input type="text" name="last_login" class="form-control" id="lname" placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Created at</label>
                <div class="col-sm-9">
                    <input type="text" name="created_at" class="form-control" id="lname" placeholder="">
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