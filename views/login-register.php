<?php    
    if(!empty($_SESSION['user_active']))  //if usse is not login redirected baack to login page
    {
        header('Location: /');
    }
    else
    {
    // load up your config file
    require_once("resources/config.php");
    require_once(TEMPLATES_PATH . "/header.php");
?>

        <!-- Begin Munoz's Breadcrumb Area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Shop Related Page</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Login & Register</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Munoz's Breadcrumb Area End Here -->
        <!-- Begin Munoz's Login Register Area -->
        <div class="munoz-login-register_area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6">
                        <form method="POST" action="/login-user">
                            <div class="login-form">
                                <h4 class="login-title">Login</h4>
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <label>Email Address*</label>
                                        <input name="email" type="email" placeholder="Email Address">
                                    </div>
                                    <div class="col-12 mb--20">
                                        <label>Password</label>
                                        <input name="password" type="password" placeholder="Password">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="check-box">
                                            <input type="checkbox" id="remember_me">
                                            <label for="remember_me">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="forgotton-password_info">
                                            <a href="#"> Forgotten pasward?</a>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="munoz-login_btn">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                        <form method="POST" action="/register-user">
                            <div class="login-form">
                                <h4 class="login-title">Register</h4>
                                <div class="row">
                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Name</label>
                                        <input name="name" type="text" placeholder="First Name">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Email Address*</label>
                                        <input name="email" type="email" placeholder="Email Address">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Password</label>
                                        <input name="password" type="password" placeholder="Password">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Confirm Password</label>
                                        <input name="confirmed_password" type="password" placeholder="Confirm Password">
                                    </div>
                                    <div class="col-12">
                                        <button class="munoz-register_btn">Register</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Munoz's Login Register Area  End Here -->

<?php    
    require_once(TEMPLATES_PATH . "/footer.php");
    }
?>