<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>User Detail</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include_once '../components/header_link.php' ?>
</head>

<body>
    <?php include_once '../php/users/user_detail.php' ?>

    <?php include_once '../components/header.php' ?>

    <?php include_once '../components/sidebar.php' ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>User Detail</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">User</li>
                    <li class="breadcrumb-item active">User Detail</li>
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
                                <h6 class="fw-bold fs-4 mb-3"><?= $texts['user_detail'] ?></h6>
                                <div class="row pb-4">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="username" class="form-label"><?= $texts['username'] ?></label>
                                            <input type="text" class="form-control" id="username" name="username" disabled>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label"><?= $texts['firstname'] ?></label>
                                            <input type="text" class="form-control" id="firstname" name="firstname" disabled>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label"><?= $texts['lastname'] ?></label>
                                            <input type="text" class="form-control" id="lastname" name="lastname" disabled>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="role" class="form-label"><?= $texts['role'] ?></label>
                                            <input type="text" class="form-control" id="role" name="role" disabled>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="statusflag" class="form-label"><?= $texts['status'] ?></label>
                                            <input type="text" class="form-control" id="statusflag" name="statusflag" disabled>
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

    <script src="<?= $path ?>js/users/user_detail.js"></script>
    <script src="<?= $path ?>js/common/get_query_param.js"></script>
    <script src="<?= $path ?>js/common/handle_error.js"></script>

</body>

</html>