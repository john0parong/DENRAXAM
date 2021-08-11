<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sign Up</title>
        <link href="../style/css/bootstrap.css" rel="stylesheet" />
        <link href="../style/css/styles.css" rel="stylesheet" />
        <script src="../style/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center mt-5">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Sign Up</h3></div>
                                    <div class="card-body">
                                        <form id="signup-form">
                                            <div class="form-floating mb-3">
                                                <input required class="form-control" id="username" type="text"/>
                                                <label for="username">Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input required class="form-control" id="password" type="password"/>
                                                <label for="password">Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                                <input type="submit" form="signup-form" id="btn-submit" class="btn btn-primary" value="Sign Up">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        Already have an account? <a href="../index.php">Sign In!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="../style/js/jquery-3.3.1.js"></script>
        <script src="../style/js/bootstrap.bundle.js" crossorigin="anonymous"></script>
        <script src="../style/js/scripts.js"></script>
        <script src="../style/js/toast.js"></script>
    </body>
    <script src="../process/signup/crud.js"></script>
</html>
