<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Central General Ledger Create</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include_once '../components/header_link.php' ?>
</head>

<body>
    <?php include_once '../php/central_general_ledgers/central_general_ledger_create.php' ?>

    <?php include_once '../components/header.php' ?>

    <?php include_once '../components/sidebar.php' ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Central General Ledger Create</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">Central General Ledger</li>
                    <li class="breadcrumb-item active">Central General Ledger Create</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body m-4">
                            <!-- Form for central_general_ledger create details -->
                            <form id="InputForm">
                                <h6 class="fw-bold fs-4"><?= $texts['central_general_ledger_create'] ?></h6>
                                <div class="row pb-4">
                                    <input type="hidden" class="form-control" id="user_id" name="user_id" value="<?= $_SESSION['user_id'] ?>" required>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="gl_account" class="form-label"><?= $texts['gl_account'] ?></label>
                                            <input type="text" class="form-control" id="gl_account" name="gl_account" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="company_id" class="form-label"><?= $texts['company_code'] ?></label>
                                            <select class="form-control" id="company_id" name="company_id" required>
                                                <!-- Dynamic options will be populated here -->
                                            </select>
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

    <script src="<?= $path ?>js/central_general_ledgers/central_general_ledger_create.js"></script>
    <script src="<?= $path ?>js/common/convert_form_data_to_json.js"></script>
    <script src="<?= $path ?>js/common/get_query_param.js"></script>
    <script src="<?= $path ?>js/common/handle_error.js"></script>

</body>

</html>