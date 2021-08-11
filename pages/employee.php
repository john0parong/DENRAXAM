<?php
    /* session_start();
    if(!isset($_SESSION['logger_id'])){
        header('Location: ../index.php');
    } */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <?php include('../pages/menu/links.php'); ?>
    </head>
    <body class="sb-nav-fixed">
        <div id="layoutSidenav">
            <?php include('../pages/menu/sidebar.php'); ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">EMPLOYEE</h1>
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between">
                                <h6 class="header-title mt-2 fw-bold">EMPLOYEE LIST</h6>
                                <button type="button" class="btn btn-primary btn-sm pull-right btn-insert" data-toggle='tooltip' data-placement='bottom' title='Add Inventory'>Add Employee</button>
                                <div class="modal fade crud-modal">
                                    <form id="crud-form">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-row">
                                                        <div class="col-md-12 mb-1">
                                                            <label for="firstname" class="col-form-label">First Name: <span class="text-danger">*</span></label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="firstname" autocomplete="off">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 mb-1">
                                                            <label for="lastnmae" class="col-form-label">Last Name: <span class="text-danger">*</span></label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="lastname" autocomplete="off">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary btn-submit" form="crud-form">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="dataTable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <?php include('../pages/menu/scripts.php'); ?>
    </body>
    <script src="../process/employee/crud.js"></script>
</html>
