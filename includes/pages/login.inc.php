<div class="spacer"></div>
<div class="spacer"></div>
<div class="spacer"></div>
<div class="container">
    <div class="user col-md-10 mx-auto">
    <!-- Success register Message -->
    <?php
    // if(in_array('signup success',$error)){
    if(isset($successSignUp)){
       echo '<div>
            <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
                <h4 class="alert-heading">SignUp Success !</h4>
                <p>Now login to your account</p>
            </div>
        </div>';
    }
    ?>
        <div class="row">
        <!-- login -->
        <div class="col-md-6 loginDiv">
            <h3 class="text-center pb-2">login</h3>
                <form class="needs-validation loginForm" action="index.php?page=contact" novalidate>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom03">Email</label>
                            <input type="email" class="form-control" id="validationCustomEmail" placeholder="user@mail.com"
                            required>
                            <div class="invalid-feedback">
                                Please provide correct email.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom03">Password</label>
                            <input type="password" class="form-control" id="" placeholder="********"
                            required>
                            <div class="invalid-feedback">
                                Please enter password.
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-block btn-pr" type="submit">Login <i class="fas fa-sign-in-alt"></i></button>
                </form>
                <div class="resetPassword py-3 text-right">
                <a href="#">ForgotPassword ?</a>
            </div>
            </div>

        <!-- register -->
            <div class="col-md-6 signupDiv">
                <h3 class="text-center pb-2">sign up</h3>
                <form class="needs-validation registerForm" action="index.php?page=login" method="POST" novalidate>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">First name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" 
                            value="<?php
                                if(isset($_SESSION['first_name'])){
                                echo $_SESSION['first_name'];
                            } 
                            ?>"
                            placeholder="First Name"
                            required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Last name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" 
                            value="<?php
                                if(isset($_SESSION['last_name'])){
                                echo $_SESSION['last_name'];
                            } 
                            ?>"
                            placeholder="Last Name"
                            required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom03">Email</label>
                            <input type="email" class="form-control" id="r_email" name="r_email" placeholder="user@mail.com"
                            value="<?php
                                if(isset($_SESSION['r_email'])){
                                echo $_SESSION['r_email'];
                            } 
                            ?>"
                            required>
                            <div class="invalid-feedback">
                                Please provide correct email.
                            </div>
                            <span class="userFormError text-danger">
                                <?php
                                if(in_array("Email already in use", $error))
                                echo 'Email already in use';
                                ?>
                            </span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom03">Password</label>
                            <input type="password" class="form-control" id="r_pass" name="r_pass" placeholder="********"
                            required>
                            <div class="invalid-feedback">
                                Please set password.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom03">Confirm Password</label>
                            <input type="password" class="form-control" id="cr_pass" name="cr_pass" placeholder="********"
                            required>
                            <div class="invalid-feedback">
                            Please confirm password.
                            </div>
                            <span class="userFormError text-danger">
                                <?php
                                if(in_array("Password does not match", $error))
                                echo 'Password does not match';
                                ?>
                            </span>
                        </div>
                    </div>
                    <button class="btn btn-block btn-pr" name="register" type="submit">register <i class="fas fa-user-plus"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="spacer"></div>
 