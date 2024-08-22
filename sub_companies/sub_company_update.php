<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Subdivision Company Update</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include_once '../components/header_link.php' ?>
</head>

<body>
    <?php include_once '../php/sub_companies/sub_company_update.php' ?>

    <?php include_once '../components/header.php' ?>

    <?php include_once '../components/sidebar.php' ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Subdivision Company Update</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">Subdivision Company</li>
                    <li class="breadcrumb-item active">Subdivision Company Update</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body m-4">
                            <!-- Form for sub company details -->
                            <form id="subCompanyForm">
                                <div class="row pb-4">
                                    <input type="hidden" id="sub_company_id" name="sub_company_id" value="">

                                    <div class="col-12">
                                        <div class="mb-3 row">
                                            <div class="col-4">
                                                <label for="company_code" class="form-label"><?= $texts['company_code'] ?></label>
                                                <input type="text" class="form-control" id="company_code" name="company_code" disabled>
                                            </div>
                                            <div class="col-8">
                                                <label for="name_th_h" class="form-label"><?= $texts['name_th'] ?></label>
                                                <input type="text" class="form-control" id="name_th_h" name="name_th_h" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3 row">
                                            <div class="col-4">
                                                <label for="sub_company_code" class="form-label"><?= $texts['sub_company_code'] ?></label>
                                                <input type="text" class="form-control" id="sub_company_code" name="sub_company_code" required>
                                            </div>
                                            <div class="col-8">
                                                <label for="sub_company_name" class="form-label"><?= $texts['sub_company_name'] ?></label>
                                                <input type="text" class="form-control" id="sub_company_name" name="sub_company_name" required>
                                            </div>
                                        </div>
                                    </div>

                                    <h6 class="fw-bold fs-4">Nota Fiscal</h6>
                                    <div class="row pb-4">
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="cnpj_bus_place" class="form-label">CNPJ Bus. Place</label>
                                                <input type="text" class="form-control" id="cnpj_bus_place" name="cnpj_bus_place">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="state_tax" class="form-label">State Tax No.</label>
                                                <input type="text" class="form-control" id="state_tax" name="state_tax">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="munic_tax" class="form-label">Munic. Tax No.</label>
                                                <input type="text" class="form-control" id="munic_tax" name="munic_tax">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="bp_cfop_cat" class="form-label">BP CFOP Cat.</label>
                                                <input type="text" class="form-control" id="bp_cfop_cat" name="bp_cfop_cat">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row pb-4">
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="representative_name" class="form-label"><?= $texts['representative_name'] ?></label>
                                                <input type="text" class="form-control" id="representative_name" name="representative_name">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="business_type_id" class="form-label"><?= $texts['business_type'] ?></label>
                                                <select class="form-control" id="business_type_id" name="business_type_id">
                                                    <!-- Dynamic options will be populated here -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="industry_type" class="form-label"><?= $texts['industry_type'] ?></label>
                                                <input type="text" class="form-control" id="industry_type" name="industry_type">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="tax_number1" class="form-label"><?= $texts['tax_number1'] ?></label>
                                                <input type="text" class="form-control" id="tax_number1" name="tax_number1">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="tax_number2" class="form-label"><?= $texts['tax_number2'] ?></label>
                                                <input type="text" class="form-control" id="tax_number2" name="tax_number2">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="tax_office" class="form-label"><?= $texts['tax_office'] ?></label>
                                                <input type="text" class="form-control" id="tax_office" name="tax_office">
                                            </div>
                                        </div>
                                    </div>


                                    <h6 class="fw-bold fs-4"><?= $texts['name'] ?></h6>
                                    <div class="row pb-4">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="sub_name_th" class="form-label"><?= $texts['sub_name_th'] ?></label>
                                                <input type="text" class="form-control" id="sub_name_th" name="sub_name_th">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="name_th" class="form-label"><?= $texts['name_th'] ?></label>
                                                <input type="text" class="form-control" id="name_th" name="name_th" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="sub_name_en" class="form-label"><?= $texts['sub_name_en'] ?></label>
                                                <input type="text" class="form-control" id="sub_name_en" name="sub_name_en">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="name_en" class="form-label"><?= $texts['name_en'] ?></label>
                                                <input type="text" class="form-control" id="name_en" name="name_en" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <h6 class="fw-bold fs-4"><?= $texts['search_term'] ?></h6>
                                    <div class="row pb-4">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="search_first" class="form-label"><?= $texts['search_term'] ?> 1</label>
                                                <input type="text" class="form-control" id="search_first" name="search_first">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="search_second" class="form-label"><?= $texts['search_term'] ?> 2</label>
                                                <input type="text" class="form-control" id="search_second" name="search_second">
                                            </div>
                                        </div>
                                    </div>

                                    <h6 class="fw-bold fs-4"><?= $texts['address'] ?></h6>
                                    <div class="row pb-4">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="a_road" class="form-label"><?= $texts['road'] ?></label>
                                                <input type="text" class="form-control" id="a_road" name="a_road">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="mb-3">
                                                <label for="a_number" class="form-label"><?= $texts['house_number'] ?></label>
                                                <input type="text" class="form-control" id="a_number" name="a_number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="a_address" class="form-label"><?= $texts['address'] ?></label>
                                                <input type="text" class="form-control" id="a_address" name="a_address">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="mb-3">
                                                <label for="a_province" class="form-label"><?= $texts['province'] ?></label>
                                                <input type="text" class="form-control" id="a_province" name="a_province">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="mb-3">
                                                <label for="a_zip_code" class="form-label"><?= $texts['a_zip_code'] ?></label>
                                                <input type="text" class="form-control" id="a_zip_code" name="a_zip_code">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="zone" class="form-label"><?= $texts['zone'] ?></label>
                                                <input type="text" class="form-control" id="zone" name="zone">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="timezone" class="form-label"><?= $texts['timezone'] ?></label>
                                                <input type="text" class="form-control" id="timezone" name="timezone">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="country_name" class="form-label"><?= $texts['country'] ?></label>
                                                <select class="form-control" id="country_id" name="country_id">
                                                    <!-- Dynamic options will be populated here -->
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <h6 class="fw-bold fs-4"><?= $texts['post_address'] ?></h6>
                                    <div class="row pb-4">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="postbox" class="form-label"><?= $texts['postbox'] ?></label>
                                                <input type="text" class="form-control" id="postbox" name="postbox">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="zip_code" class="form-label"><?= $texts['zip_code'] ?></label>
                                                <input type="text" class="form-control" id="zip_code" name="zip_code">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="company_zip_code" class="form-label"><?= $texts['company_zip_code'] ?></label>
                                                <input type="text" class="form-control" id="company_zip_code" name="company_zip_code">
                                            </div>
                                        </div>
                                    </div>

                                    <h6 class="fw-bold fs-4"><?= $texts['communication'] ?></h6>
                                    <div class="row pb-4">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="language" class="form-label"><?= $texts['language'] ?></label>
                                                <input type="text" class="form-control" id="language" name="language">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="mobile_phone" class="form-label"><?= $texts['mobile_phone'] ?></label>
                                                <input type="text" class="form-control" id="mobile_phone" name="mobile_phone">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3 row">
                                                <div class="col-8">
                                                    <label for="phone" class="form-label"><?= $texts['phone'] ?></label>
                                                    <input type="text" class="form-control" id="phone" name="phone">
                                                </div>
                                                <div class="col-4">
                                                    <label for="phone_ex" class="form-label"><?= $texts['phone_ex'] ?></label>
                                                    <input type="text" class="form-control" id="phone_ex" name="phone_ex">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3 row">
                                                <div class="col-8">
                                                    <label for="fax" class="form-label"><?= $texts['fax'] ?></label>
                                                    <input type="text" class="form-control" id="fax" name="fax">
                                                </div>
                                                <div class="col-4">
                                                    <label for="fax_ex" class="form-label"><?= $texts['fax_ex'] ?></label>
                                                    <input type="text" class="form-control" id="fax_ex" name="fax_ex">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="email" class="form-label"><?= $texts['email'] ?></label>
                                                <input type="text" class="form-control" id="email" name="email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="standard_communication" class="form-label"><?= $texts['standard_communication'] ?></label>
                                                <input type="text" class="form-control" id="standard_communication" name="standard_communication">
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

    <script src="<?= $path ?>js/sub_companies/sub_company_update.js"></script>
    <script src="<?= $path ?>js/common/get_query_param.js"></script>
    <script src="<?= $path ?>js/common/convert_form_data_to_json.js"></script>
    <script src="<?= $path ?>js/common/handle_error.js"></script>

</body>

</html>