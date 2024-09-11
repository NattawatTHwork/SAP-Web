<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Chart Account Create</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include_once '../components/header_link.php' ?>
</head>

<body>
    <?php include_once '../php/chart_accounts/chart_account_create.php' ?>

    <?php include_once '../components/header.php' ?>

    <?php include_once '../components/sidebar.php' ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Chart Account Create</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">Chart Account</li>
                    <li class="breadcrumb-item active">Chart Account Create</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body m-4">
                            <!-- Form for chart_account addition -->
                            <form id="InputForm">
                                <div class="row pb-4">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="chart_account_code" class="form-label"><?= $texts['chart_account_code'] ?></label>
                                            <input type="text" class="form-control" id="chart_account_code" name="chart_account_code" required>
                                        </div>
                                    </div>
                                </div>

                                <h6 class="fw-bold fs-4"><?= $texts['general_information'] ?></h6>
                                <div class="row pb-4">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="language" class="form-label"><?= $texts['language'] ?></label>
                                            <input type="text" class="form-control" id="language" name="language" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="account_length" class="form-label"><?= $texts['account_length'] ?></label>
                                            <input type="number" class="form-control" id="account_length" name="account_length" required>
                                        </div>
                                    </div>
                                </div>

                                <h6 class="fw-bold fs-4"><?= $texts['collection'] ?></h6>
                                <div class="row pb-4">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="collection_control" class="form-label"><?= $texts['collection_control'] ?></label>
                                            <input type="text" class="form-control" id="collection_control" name="collection_control" required>
                                        </div>
                                    </div>
                                </div>

                                <h6 class="fw-bold fs-4"><?= $texts['address_format'] ?></h6>
                                <div class="row pb-4">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="chart_account_group" class="form-label"><?= $texts['chart_account_group'] ?></label>
                                            <input type="text" class="form-control" id="chart_account_group" name="chart_account_group" required>
                                        </div>
                                    </div>
                                </div>

                                <h6 class="fw-bold fs-4"><?= $texts['status'] ?></h6>
                                <div class="row pb-4">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="suspend" class="form-label"><?= $texts['suspend'] ?></label>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="suspend" name="suspend">
                                                <label class="form-check-label" for="suspend"><?= $texts['suspend'] ?></label>
                                            </div>
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

    <script src="<?= $path ?>js/chart_accounts/chart_account_create.js"></script>
    <script src="<?= $path ?>js/common/convert_form_data_to_json.js"></script>
    <script src="<?= $path ?>js/common/get_query_param.js"></script>
    <script src="<?= $path ?>js/common/handle_error.js"></script>

</body>

</html>