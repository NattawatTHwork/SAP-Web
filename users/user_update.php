<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>User Update</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include_once '../components/header_link.php' ?>
</head>

<body>
    <?php include_once '../php/users/user_update.php' ?>

    <?php include_once '../components/header.php' ?>

    <?php include_once '../components/sidebar.php' ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>User Update</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">User</li>
                    <li class="breadcrumb-item active">User Update</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body m-4">
                            <!-- Form for user details -->
                            <form id="userForm">
                                <input type="hidden" id="user_id" name="user_id" value="">

                                <h6 class="fw-bold fs-4 mb-3"><?= $texts['user_update'] ?></h6>
                                <div class="row pb-4">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label"><?= $texts['firstname'] ?></label>
                                            <input type="text" class="form-control" id="firstname" name="firstname">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label"><?= $texts['lastname'] ?></label>
                                            <input type="text" class="form-control" id="lastname" name="lastname">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="role_id" class="form-label"><?= $texts['role'] ?></label>
                                            <select class="form-control" id="role_id" name="role_id">
                                                <!-- Dynamic options will be populated here -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="statusflag" class="form-label"><?= $texts['status'] ?></label>
                                            <select class="form-control" id="statusflag" name="statusflag">
                                                <option value="t"><?= $texts['enable'] ?></option>
                                                <option value="f"><?= $texts['disable'] ?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row pb-4 text-center">
                                    <button type="submit" class="btn btn-primary" id="submitBtn"><?= $texts['save'] ?></button>
                                </div>
                            </form> <!-- End Form -->
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <?php include_once '../components/footer.php' ?>

    <script src="<?= $path ?>js/users/user_update.js"></script>
    <script src="<?= $path ?>js/common/get_query_param.js"></script>
    <script src="<?= $path ?>js/common/convert_form_data_to_json.js"></script>
    <script src="<?= $path ?>js/common/handle_error.js"></script>

</body>

</html>