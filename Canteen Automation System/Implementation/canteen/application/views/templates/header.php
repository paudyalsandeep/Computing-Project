<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Canteen Management System</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>">Canteen Automation System</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>canteens">Canteens</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>forum">Forum</a>
            </li>

        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#loginModal">Log in</a>
            </li>
            <li>
                <button class="btn btn-outline-success" type="button" id="btn_home" data-toggle="modal" data-target="#registerModal">Create an account</button>
            </li>
        </ul>


    </nav>


    <!-- Modal for login -->
    <div class="modal" id="loginModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Login</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-group" method="post" action="<?php echo base_url(); ?>canteen">
                                    <label for="email">Enter email or Institute ID</label>
                                    <input type="email" class="form-control" id="email">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password">
                                    <div class="form-group form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox"> Remember me
                                        </label>
                                    </div>
                                    <button type="button" class="btn btn-success btn-block">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <div class="col-md-12">
                        Looks like you're new here. Register now.
                    </div>

                </div>

            </div>
        </div>
    </div>


    <!-- Modal for login -->
    <div class="modal fade" id="registerModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Create new account</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <form class="form-group" method="post" action="<?php echo base_url(); ?>Registration/register">
                                    <label for="fname">First Name</label>
                                    <input type="text" class="form-control" id="fname" name="fname">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                    <label for="sel1">Choose College</label>
                                    <select class="form-control" id="selectCollege" name="selectCollege">
                                        <option>1</option>
                                        <option>Islington College</option>
                                        <option>The British College</option>
                                        <option>ISMT</option>
                                    </select>

                            </div>
                            <div class="col-md-6">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control" id="lname" name="lname">
                                <label for="phone">Phone Number</label>
                                <input type="text" class="form-control" id="phone">
                                <label for="selectCollege">Choose Role</label>
                                <select class="form-control" id="selectRole" name="selectRole">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="insID">Institute ID <sup>*Contact your institute for the ID</sup></label>
                                <input type="text" class="form-control" id="insID" name="insID">
                            </div>
                            <div class="col-md-6">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="col-md-6">
                                <label for="confPassword">Confirm Password</label>
                                <input type="password" class="form-control" id="confPassword" name="confPassword">
                            </div>
                            <div class="col-md-12">
                                <br>
                                <input type="submit" class="btn btn-primary btn-block" value="Register">
                            </div>
                        </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>