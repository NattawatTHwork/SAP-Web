<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Country Create</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include_once '../components/header_link.php' ?>
</head>

<body>
    <?php include_once '../php/countries/country_create.php' ?>

    <?php include_once '../components/header.php' ?>

    <?php include_once '../components/sidebar.php' ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Country Create</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">Country</li>
                    <li class="breadcrumb-item active">Country Create</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body m-4">
                            <!-- Form for country addition -->
                            <form id="InputForm">
                                <div class="row pb-4">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="country_code" class="form-label">ประเทศ</label>
                                            <input type="text" class="form-control" id="country_code" name="country_code" required>
                                        </div>
                                    </div>
                                </div>

                                <h6 class="fw-bold fs-4">ข้อมูลทั่วไป</h6>
                                <div class="row pb-4">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="other_country_key" class="form-label">คีย์ประเทศอื่น</label>
                                            <input type="text" class="form-control" id="other_country_key" name="other_country_key">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">ชื่อ</label>
                                            <input type="text" class="form-control" id="country_name" name="country_name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="full_name" class="form-label">ชื่อแบบยาว</label>
                                            <input type="text" class="form-control" id="full_name" name="full_name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="nationality" class="form-label">สัญชาติ</label>
                                            <input type="text" class="form-control" id="nationality" name="nationality">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="full_nationality" class="form-label">สัญชาติ (แบบยาว)</label>
                                            <input type="text" class="form-control" id="full_nationality" name="full_nationality">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="country_vehicle_key" class="form-label">คีย์พาหนะประเทศ</label>
                                            <input type="text" class="form-control" id="country_vehicle_key" name="country_vehicle_key">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="language_key" class="form-label">คีย์ภาษา</label>
                                            <input type="text" class="form-control" id="language_key" name="language_key">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="major_currency_index" class="form-label">ดัชนีสกุลเงินหลัก</label>
                                            <input type="text" class="form-control" id="major_currency_index" name="major_currency_index">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="major_currency" class="form-label">สกุลเงินหลัก</label>
                                            <input type="text" class="form-control" id="major_currency" name="major_currency">
                                        </div>
                                    </div>
                                </div>

                                <h6 class="fw-bold fs-4">คุณสมบัติ</h6>
                                <div class="row pb-4">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="trade_statistic_abbreviation" class="form-label">ชื่อย่อสถิติการค้า</label>
                                            <input type="text" class="form-control" id="trade_statistic_abbreviation" name="trade_statistic_abbreviation">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="step" class="form-label">ขั้นตอน</label>
                                            <input type="text" class="form-control" id="step" name="step">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="iso_key" class="form-label">รหัส ISO</label>
                                            <input type="text" class="form-control" id="iso_key" name="iso_key">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="three_iso_key" class="form-label">รหัส ISO 3 ตัวอักษร</label>
                                            <input type="text" class="form-control" id="three_iso_key" name="three_iso_key">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="intrastat_key" class="form-label">รหัส Intrastat</label>
                                            <input type="text" class="form-control" id="intrastat_key" name="intrastat_key">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="member_euro" class="form-label">สมาชิกสภาพยุโรป</label>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="member_euro" name="member_euro">
                                                <label class="form-check-label" for="member_euro">สมาชิกสภาพยุโรป</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="capital_goods_indicator" class="form-label">ตัวบ่งชี้สินค้าทุน</label>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="capital_goods_indicator" name="capital_goods_indicator">
                                                <label class="form-check-label" for="capital_goods_indicator">ตัวบ่งชี้สินค้าทุน</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h6 class="fw-bold fs-4">รูปแบบที่อยู่</h6>
                                <div class="row pb-4">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="address_outline_key" class="form-label">คีย์โครงร่างที่อยู่</label>
                                            <input type="text" class="form-control" id="address_outline_key" name="address_outline_key">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="standard_name_format" class="form-label">รูปแบบชื่อมาตรฐาน</label>
                                            <input type="text" class="form-control" id="standard_name_format" name="standard_name_format">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="type_country_name" class="form-label">พิมพ์ชื่อประเทศ</label>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="type_country_name" name="type_country_name">
                                                <label class="form-check-label" for="type_country_name">พิมพ์ชื่อประเทศ</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h6 class="fw-bold fs-4">รูปแบบวันที่และจุดทศนิยม</h6>
                                <div class="row pb-4">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="date_format" class="form-label">รูปแบบวันที่</label>
                                            <input type="text" class="form-control" id="date_format" name="date_format">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="decimal_format" class="form-label">รูปแบบจุดทศนิยม</label>
                                            <input type="text" class="form-control" id="decimal_format" name="decimal_format">
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

    <script src="<?= $path ?>js/countries/country_create.js"></script>
    <script src="<?= $path ?>js/common/convert_form_data_to_json.js"></script>
    <script src="<?= $path ?>js/common/handle_error.js"></script>

</body>

</html>