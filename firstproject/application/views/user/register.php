<!-- register-box -->
<div class="register-box" style="margin-left:40%; margin-top:50px;">
    <?php
    if ($this->session->flashdata('success')) { ?>
        <div class="success-div float-right">
            <p class="alert alert-success" role="alert">
                <i class="fa fa-check" aria-hidden="true"></i> Sign-in successfully!!
            </p>
        </div>
    <?php }
    ?>
    <?php
    if ($this->session->flashdata('error')) { ?>
        <div id="mywish" class="danger-div">
            <p class="alert alert-danger" role="alert">
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Invalid Email or Password!!
            </p>
        </div>
    <?php }
    ?>
    <div class="register-logo">
        <a href="<?php echo base_url(); ?>assets/index2.html"><b>Register</b></a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Register as new membership</p>

            <form action="<?php echo base_url(); ?>Register/index" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="fullname" placeholder="Full name">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" id="email" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" id="password" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" id="cpass" placeholder="Confirm password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <!-- <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">
                                I agree to the <a href="#">terms</a>
                            </label>
                        </div> -->
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <a href="login.html" class="text-center">Already have an account<b> Login</b></a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->