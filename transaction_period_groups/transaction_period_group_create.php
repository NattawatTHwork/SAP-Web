<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Transaction Period Group Create</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include_once '../components/header_link.php' ?>
</head>

<body>
    <?php include_once '../php/transaction_period_groups/transaction_period_group_create.php' ?>

    <?php include_once '../components/header.php' ?>

    <?php include_once '../components/sidebar.php' ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Transaction Period Group Create</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">Transaction Period Group</li>
                    <li class="breadcrumb-item active">Transaction Period Group Create</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body m-4">
                            <!-- Form for transaction_period_group details -->
                            <form id="InputForm">
                                <h6 class="fw-bold fs-4"><?= $texts['transaction_period_group_create'] ?></h6>
                                <div class="row pb-4">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="transaction_period_group_code" class="form-label"><?= $texts['transaction_period_group_code'] ?></label>
                                            <input type="text" class="form-control" id="transaction_period_group_code" name="transaction_period_group_code" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="description" class="form-label"><?= $texts['description'] ?></label>
                                            <input type="text" class="form-control" id="description" name="description" required>
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

    <script src="<?= $path ?>js/transaction_period_groups/transaction_period_group_create.js"></script>
    <script src="<?= $path ?>js/common/convert_form_data_to_json.js"></script>
    <script src="<?= $path ?>js/common/handle_error.js"></script>

</body>

</html>