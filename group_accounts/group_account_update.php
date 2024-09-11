<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Group Account Update</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include_once '../components/header_link.php' ?>
</head>

<body>
    <?php include_once '../php/group_accounts/group_account_update.php' ?>

    <?php include_once '../components/header.php' ?>

    <?php include_once '../components/sidebar.php' ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Group Account Update</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">Group Account</li>
                    <li class="breadcrumb-item active">Group Account Update</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body m-4">
                            <!-- Form for group_account update details -->
                            <form id="InputForm">
                                <h6 class="fw-bold fs-4"><?= $texts['group_account_create'] ?></h6>
                                <div class="row pb-4">
                                    <input type="hidden" id="group_account_id" name="group_account_id" value="<?= $_GET['group_account_id'] ?>">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="chart_account_id" class="form-label"><?= $texts['chart_account_code'] ?></label>
                                            <select class="form-control" id="chart_account_id" name="chart_account_id" required>
                                                <!-- Dynamic options will be populated here -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="group_account_code" class="form-label"><?= $texts['group_account_code'] ?></label>
                                            <input type="text" class="form-control" id="group_account_code" name="group_account_code" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="name_account" class="form-label"><?= $texts['name_account'] ?></label>
                                            <input type="text" class="form-control" id="name_account" name="name_account" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="account_from" class="form-label"><?= $texts['account_from'] ?></label>
                                            <input type="text" class="form-control" id="account_from" name="account_from" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="account_to" class="form-label"><?= $texts['account_to'] ?></label>
                                            <input type="text" class="form-control" id="account_to" name="account_to" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row pb-4">
                                    <div class="col-12">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary w-100" id="submitBtn"><?= $texts['save'] ?></button>
                                        </div>
                                    </div>
                                </div>
                            </form> <!-- End Form -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <?php include_once '../components/footer.php' ?>

    <script src="<?= $path ?>js/group_accounts/group_account_update.js"></script>
    <script src="<?= $path ?>js/common/get_query_param.js"></script>
    <script src="<?= $path ?>js/common/convert_form_data_to_json.js"></script>
    <script src="<?= $path ?>js/common/handle_error.js"></script>

</body>

</html>