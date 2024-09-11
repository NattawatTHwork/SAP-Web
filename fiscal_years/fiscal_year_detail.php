<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Fiscal Year Detail</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include_once '../components/header_link.php' ?>
</head>

<body>
    <?php include_once '../php/fiscal_years/fiscal_year_detail.php' ?>

    <?php include_once '../components/header.php' ?>

    <?php include_once '../components/sidebar.php' ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Fiscal Year Detail</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">Fiscal Year</li>
                    <li class="breadcrumb-item active">Fiscal Year Detail</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body m-4">
                            <!-- Form for fiscal_year details -->
                            <form id="InputForm">
                                <h6 class="fw-bold fs-4"><?= $texts['fiscal_year'] ?></h6>
                                <div class="row pb-4">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="fiscal_year_code" class="form-label"><?= $texts['fiscal_year_code'] ?></label>
                                            <input type="text" class="form-control" id="fiscal_year_code" name="fiscal_year_code" disabled>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="description" class="form-label"><?= $texts['description'] ?></label>
                                            <input type="text" class="form-control" id="description" name="description" disabled>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="fiscal_year_check" class="form-label"><?= $texts['based_on_the_fiscal_year'] ?></label>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="fiscal_year_check" name="fiscal_year_check" disabled>
                                                <label class="form-check-label" for="fiscal_year_check"><?= $texts['based_on_the_fiscal_year'] ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="calendar_year_check" class="form-label"><?= $texts['calendar_year'] ?></label>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="calendar_year_check" name="calendar_year_check" disabled>
                                                <label class="form-check-label" for="calendar_year_check"><?= $texts['calendar_year'] ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="posting_period_count" class="form-label"><?= $texts['posting_period_count'] ?></label>
                                            <input type="number" class="form-control" id="posting_period_count" name="posting_period_count" disabled>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="special_period_count" class="form-label"><?= $texts['special_period_count'] ?></label>
                                            <input type="number" class="form-control" id="special_period_count" name="special_period_count" disabled>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="period_group_code" class="form-label"><?= $texts['period_group_code'] ?></label>
                                            <input type="text" class="form-control" id="period_group_code" name="period_group_code" disabled>
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

    <script src="<?= $path ?>js/fiscal_years/fiscal_year_detail.js"></script>
    <script src="<?= $path ?>js/common/get_query_param.js"></script>
    <script src="<?= $path ?>js/common/handle_error.js"></script>

</body>

</html>