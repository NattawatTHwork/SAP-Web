<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Periods Update</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include_once '../components/header_link.php' ?>
</head>

<body>
    <?php include_once '../php/periods/period_update.php' ?>

    <?php include_once '../components/header.php' ?>

    <?php include_once '../components/sidebar.php' ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Periods Update</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">Periods</li>
                    <li class="breadcrumb-item active">Periods Update</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body m-4">
                            <!-- Form for period update details -->
                            <form id="InputForm">
                                <h6 class="fw-bold fs-4"><?= $texts['period_create'] ?></h6>
                                <div class="row pb-4">
                                    <input type="hidden" id="period_id" name="period_id" value="">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="period_code" class="form-label"><?= $texts['period_code'] ?></label>
                                            <input type="text" class="form-control" id="period_code" name="period_code" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="number_month" class="form-label"><?= $texts['month'] ?></label>
                                            <input type="text" class="form-control" id="number_month" name="number_month" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="number_day" class="form-label"><?= $texts['day'] ?></label>
                                            <input type="number" class="form-control" id="number_day" name="number_day" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="change_year" class="form-label"><?= $texts['change_year'] ?></label>
                                            <input type="number" class="form-control" id="change_year" name="change_year" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="text_period_en" class="form-label"><?= $texts['text_period_en'] ?></label>
                                            <input type="text" class="form-control" id="text_period_en" name="text_period_en">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="text_period_th" class="form-label"><?= $texts['text_period_th'] ?></label>
                                            <input type="text" class="form-control" id="text_period_th" name="text_period_th">
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

    <script src="<?= $path ?>js/periods/period_update.js"></script>
    <script src="<?= $path ?>js/common/get_query_param.js"></script>
    <script src="<?= $path ?>js/common/convert_form_data_to_json.js"></script>
    <script src="<?= $path ?>js/common/handle_error.js"></script>

</body>

</html>