<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Company Update</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include_once '../components/header_link.php' ?>
</head>

<body>
    <?php include_once '../php/companies/company_update.php' ?>

    <?php include_once '../components/header.php' ?>

    <?php include_once '../components/sidebar.php' ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Company Update</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">Company</li>
                    <li class="breadcrumb-item active">Company Update</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body m-4">
                            <!-- Form for company details -->
                            <form id="companyForm">
                                <input type="hidden" id="company_id" name="company_id" value="">

                                <div class="row pb-4">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="company_code" class="form-label"><?= $texts['company_code'] ?></label>
                                            <input type="text" class="form-control" id="company_code" name="company_code" required>
                                        </div>
                                    </div>
                                </div>

                                <h6 class="fw-bold fs-4"><?= $texts['name'] ?></h6>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="name_th" class="form-label"><?= $texts['name_th'] ?></label>
                                            <input type="text" class="form-control" id="name_th" name="name_th" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="name_en" class="form-label"><?= $texts['name_en'] ?></label>
                                            <input type="text" class="form-control" id="name_en" name="name_en">
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
                                            <label for="country_id" class="form-label"><?= $texts['country'] ?></label>
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

                                <div class="row pb-4">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="comment" class="form-label"><?= $texts['comment'] ?></label>
                                            <textarea class="form-control" id="comment" name="comment" rows="4"></textarea>
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

    <script src="<?= $path ?>js/companies/company_update.js"></script>
    <script src="<?= $path ?>js/common/get_query_param.js"></script>
    <script src="<?= $path ?>js/common/convert_form_data_to_json.js"></script>
    <script src="<?= $path ?>js/common/handle_error.js"></script>

</body>

</html>