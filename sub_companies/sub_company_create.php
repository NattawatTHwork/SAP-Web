<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>เพิ่มบริษัทย่อย</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include_once '../components/header_link.php' ?>
</head>

<body>
    <?php include_once '../php/sub_companies/sub_company_create.php' ?>

    <?php include_once '../components/header.php' ?>

    <?php include_once '../components/sidebar.php' ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>เพิ่มบริษัทย่อย</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">หน้าหลัก</a></li>
                    <li class="breadcrumb-item">บริษัทย่อย</li>
                    <li class="breadcrumb-item active">เพิ่มบริษัทย่อย</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body m-4">
                            <!-- Form for sub company details -->
                            <form id="InputForm">
                                <input type="hidden" id="company_id" name="company_id" value="<?= $_GET['company_id'] ?? '' ?>">

                                <div class="row pb-4">
                                    <!-- <div class="col-12">
                                            <div class="mb-3 row">
                                                <div class="col-4">
                                                    <label for="company_code" class="form-label">รหัสบริษัท</label>
                                                    <input type="text" class="form-control" id="company_code" name="company_code" disabled>
                                                </div>
                                                <div class="col-8">
                                                    <label for="name_th_h" class="form-label">ชื่อบริษัทภาษาไทย</label>
                                                    <input type="text" class="form-control" id="name_th_h" name="name_th_h" disabled>
                                                </div>
                                            </div>
                                        </div> -->
                                    <div class="col-12">
                                        <div class="mb-3 row">
                                            <div class="col-4">
                                                <label for="sub_company_code" class="form-label">รหัสสถานที่บริษัท</label>
                                                <input type="text" class="form-control" id="sub_company_code" name="sub_company_code" required>
                                            </div>
                                            <div class="col-8">
                                                <label for="sub_company_name" class="form-label">ชื่อสถานที่บริษัท</label>
                                                <input type="text" class="form-control" id="sub_company_name" name="sub_company_name" required>
                                            </div>
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
                                            <label for="representative_name" class="form-label">ชื่อตัวแทน</label>
                                            <input type="text" class="form-control" id="representative_name" name="representative_name">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="business_type_id" class="form-label">ประเภทของธุรกิจ</label>
                                            <select class="form-control" id="business_type_id" name="business_type_id">
                                                <!-- Dynamic options will be populated here -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="industry_type" class="form-label">ประเภทของอุตสาหกรรม</label>
                                            <input type="text" class="form-control" id="industry_type" name="industry_type">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="tax_number1" class="form-label">เลขที่ภาษี 1</label>
                                            <input type="text" class="form-control" id="tax_number1" name="tax_number1">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="tax_number2" class="form-label">เลขที่ภาษี 2</label>
                                            <input type="text" class="form-control" id="tax_number2" name="tax_number2">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="tax_office" class="form-label">สำนักงานเขตภาษี</label>
                                            <input type="text" class="form-control" id="tax_office" name="tax_office">
                                        </div>
                                    </div>
                                </div>


                                <h6 class="fw-bold fs-4">ชื่อ</h6>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="sub_name_th" class="form-label">ชื่อย่อยสถานที่บริษัทภาษาไทย</label>
                                            <input type="text" class="form-control" id="sub_name_th" name="sub_name_th">
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="name_th" class="form-label">ชื่อบริษัทภาษาไทย</label>
                                                <input type="text" class="form-control" id="name_th" name="name_th">
                                            </div>
                                        </div> -->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="sub_name_en" class="form-label">ชื่อย่อยสถานที่บริษัทภาษาอังกฤษ</label>
                                            <input type="text" class="form-control" id="sub_name_en" name="sub_name_en">
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="name_en" class="form-label">ชื่อบริษัทภาษาอังกฤษ</label>
                                                <input type="text" class="form-control" id="name_en" name="name_en">
                                            </div>
                                        </div> -->
                                </div>

                                <h6 class="fw-bold fs-4">คำค้นหา</h6>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="search_first" class="form-label">คำค้นหา 1</label>
                                            <input type="text" class="form-control" id="search_first" name="search_first">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="search_second" class="form-label">คำค้นหา 2</label>
                                            <input type="text" class="form-control" id="search_second" name="search_second">
                                        </div>
                                    </div>
                                </div>

                                <h6 class="fw-bold fs-4">ที่อยู่</h6>
                                <div class="row pb-4">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="a_road" class="form-label">ถนน</label>
                                            <input type="text" class="form-control" id="a_road" name="a_road">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mb-3">
                                            <label for="a_number" class="form-label">บ้านเลขที่</label>
                                            <input type="text" class="form-control" id="a_number" name="a_number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="a_address" class="form-label">ที่อยู่</label>
                                            <input type="text" class="form-control" id="a_address" name="a_address">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mb-3">
                                            <label for="a_province" class="form-label">จังหวัดเลขที่</label>
                                            <input type="text" class="form-control" id="a_province" name="a_province">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mb-3">
                                            <label for="a_zip_code" class="form-label">รหัสไปรษณีย์</label>
                                            <input type="text" class="form-control" id="a_zip_code" name="a_zip_code">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="zone" class="form-label">ภาค</label>
                                            <input type="text" class="form-control" id="zone" name="zone">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="timezone" class="form-label">เขตเวลา</label>
                                            <input type="text" class="form-control" id="timezone" name="timezone">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="country_name" class="form-label">ประเทศ</label>
                                            <select class="form-control" id="country_id" name="country_id">
                                                <!-- Dynamic options will be populated here -->
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <h6 class="fw-bold fs-4">ที่อยู่ตู้ ปณ.</h6>
                                <div class="row pb-4">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="postbox" class="form-label">ตู้ไปรษณีย์</label>
                                            <input type="text" class="form-control" id="postbox" name="postbox">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="zip_code" class="form-label">รหัสไปรษณีย์</label>
                                            <input type="text" class="form-control" id="zip_code" name="zip_code">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="company_zip_code" class="form-label">รหัสไปรษณีย์บริษัท</label>
                                            <input type="text" class="form-control" id="company_zip_code" name="company_zip_code">
                                        </div>
                                    </div>
                                </div>

                                <h6 class="fw-bold fs-4">การติดต่อสื่อสาร</h6>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="language" class="form-label">ภาษา</label>
                                            <input type="text" class="form-control" id="language" name="language">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="mobile_phone" class="form-label">โทรศัพท์มือถือ</label>
                                            <input type="text" class="form-control" id="mobile_phone" name="mobile_phone">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3 row">
                                            <div class="col-8">
                                                <label for="phone" class="form-label">โทรศัพท์</label>
                                                <input type="text" class="form-control" id="phone" name="phone">
                                            </div>
                                            <div class="col-4">
                                                <label for="phone_ex" class="form-label">ส่วนขยาย</label>
                                                <input type="text" class="form-control" id="phone_ex" name="phone_ex">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3 row">
                                            <div class="col-8">
                                                <label for="fax" class="form-label">โทรสาร</label>
                                                <input type="text" class="form-control" id="fax" name="fax">
                                            </div>
                                            <div class="col-4">
                                                <label for="fax_ex" class="form-label">ส่วนขยาย</label>
                                                <input type="text" class="form-control" id="fax_ex" name="fax_ex">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">อีเมล</label>
                                            <input type="text" class="form-control" id="email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="standard_communication" class="form-label">วิธีสื่อสารมาตรฐาน</label>
                                            <input type="text" class="form-control" id="standard_communication" name="standard_communication">
                                        </div>
                                    </div>
                                </div>

                                <div class="row pb-4">
                                    <div class="col-12">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary w-100" id="submitBtn">บันทึก</button>
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

    <script src="<?= $path ?>js/sub_companies/sub_company_create.js"></script>
    <script src="<?= $path ?>js/common/convert_form_data_to_json.js"></script>
    <script src="<?= $path ?>js/common/get_query_param.js"></script>
    <script src="<?= $path ?>js/common/handle_error.js"></script>

</body>

</html>