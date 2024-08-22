<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Country Update</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include_once '../components/header_link.php' ?>
</head>

<body>
    <?php include_once '../php/countries/country_update.php' ?>

    <?php include_once '../components/header.php' ?>

    <?php include_once '../components/sidebar.php' ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Country Update</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">Country</li>
                    <li class="breadcrumb-item active">Country Update</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body m-4">
                            <!-- Form for country update -->
                            <form id="countryForm">
                                <input type="hidden" id="country_id" name="country_id" value="">
                                
                                <div class="row pb-4">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="country_code" class="form-label"><?= $texts['country'] ?></label>
                                            <input type="text" class="form-control" id="country_code" name="country_code" required>
                                        </div>
                                    </div>
                                </div>

                                <h6 class="fw-bold fs-4"><?= $texts['general_information'] ?></h6>
                                <div class="row pb-4">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="other_country_key" class="form-label"><?= $texts['other_key'] ?></label>
                                            <input type="text" class="form-control" id="other_country_key" name="other_country_key">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="name" class="form-label"><?= $texts['name'] ?></label>
                                            <input type="text" class="form-control" id="country_name" name="country_name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="full_name" class="form-label"><?= $texts['long_name'] ?></label>
                                            <input type="text" class="form-control" id="full_name" name="full_name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="nationality" class="form-label"><?= $texts['nationality'] ?></label>
                                            <input type="text" class="form-control" id="nationality" name="nationality">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="full_nationality" class="form-label"><?= $texts['long_nationality'] ?></label>
                                            <input type="text" class="form-control" id="full_nationality" name="full_nationality">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="country_vehicle_key" class="form-label"><?= $texts['vehicle_key'] ?></label>
                                            <input type="text" class="form-control" id="country_vehicle_key" name="country_vehicle_key">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="language_key" class="form-label"><?= $texts['language_key'] ?></label>
                                            <input type="text" class="form-control" id="language_key" name="language_key">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="major_currency_index" class="form-label"><?= $texts['currency_index'] ?></label>
                                            <input type="text" class="form-control" id="major_currency_index" name="major_currency_index">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="major_currency" class="form-label"><?= $texts['currency'] ?></label>
                                            <input type="text" class="form-control" id="major_currency" name="major_currency">
                                        </div>
                                    </div>
                                </div>

                                <h6 class="fw-bold fs-4"><?= $texts['features'] ?></h6>
                                <div class="row pb-4">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="trade_statistic_abbreviation" class="form-label"><?= $texts['trade_statistics_abbreviation'] ?></label>
                                            <input type="text" class="form-control" id="trade_statistic_abbreviation" name="trade_statistic_abbreviation">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="step" class="form-label"><?= $texts['steps'] ?></label>
                                            <input type="text" class="form-control" id="step" name="step">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="iso_key" class="form-label"><?= $texts['iso_code'] ?></label>
                                            <input type="text" class="form-control" id="iso_key" name="iso_key">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="three_iso_key" class="form-label"><?= $texts['iso_code_3'] ?></label>
                                            <input type="text" class="form-control" id="three_iso_key" name="three_iso_key">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="intrastat_key" class="form-label"><?= $texts['intrastat_code'] ?></label>
                                            <input type="text" class="form-control" id="intrastat_key" name="intrastat_key">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="member_euro" class="form-label"><?= $texts['european_member'] ?></label>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="member_euro" name="member_euro">
                                                <label class="form-check-label" for="member_euro"><?= $texts['european_member'] ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="capital_goods_indicator" class="form-label"><?= $texts['commodity_indicator'] ?></label>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="capital_goods_indicator" name="capital_goods_indicator">
                                                <label class="form-check-label" for="capital_goods_indicator"><?= $texts['commodity_indicator'] ?></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h6 class="fw-bold fs-4"><?= $texts['address_format'] ?></h6>
                                <div class="row pb-4">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="address_outline_key" class="form-label"><?= $texts['address_template_key'] ?></label>
                                            <input type="text" class="form-control" id="address_outline_key" name="address_outline_key">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="standard_name_format" class="form-label"><?= $texts['standard_name_format'] ?></label>
                                            <input type="text" class="form-control" id="standard_name_format" name="standard_name_format">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="type_country_name" class="form-label"><?= $texts['country_name_print'] ?></label>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="type_country_name" name="type_country_name">
                                                <label class="form-check-label" for="type_country_name"><?= $texts['country_name_print'] ?></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h6 class="fw-bold fs-4"><?= $texts['date_and_decimal_format'] ?></h6>
                                <div class="row pb-4">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="date_format" class="form-label"><?= $texts['date_format'] ?></label>
                                            <input type="text" class="form-control" id="date_format" name="date_format">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="decimal_format" class="form-label"><?= $texts['decimal_point_format'] ?></label>
                                            <input type="text" class="form-control" id="decimal_format" name="decimal_format">
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

    <script src="<?= $path ?>js/countries/country_update.js"></script>
    <script src="<?= $path ?>js/common/get_query_param.js"></script>
    <script src="<?= $path ?>js/common/convert_form_data_to_json.js"></script>
    <script src="<?= $path ?>js/common/handle_error.js"></script>

</body>

</html>