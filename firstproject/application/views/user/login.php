<!--login-box -->
<div class="login-box" style="margin-left:40%; margin-top:50px;">
    <div class="login-logo">
        <a href="<?php echo base_url(); ?>assets/index2.html"><b>Login</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Login to start your session</p>

            <form action="<?php echo base_url(); ?>login/login_info" method="post">
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email">

                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <small><?php echo form_error('email'); ?></small>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <small><?php echo form_error('password'); ?></small>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>



            <p class="mb-1">
                <a href="forgot-password.html">Forgot password?</a>
            </p>
            <p class="mb-0">
                <a href="register.html" class="text-center">Register here!!</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->
<script>
    $(".danger-div").delay(2000).slideUp(200, function () {
        $(this).alert('close');
    });
</script>