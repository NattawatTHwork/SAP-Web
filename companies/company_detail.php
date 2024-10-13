<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>รายละเอียดบริษัท</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include_once '../components/header_link.php' ?>
</head>

<body>
    <?php include_once '../php/companies/company_detail.php' ?>

    <?php include_once '../components/header.php' ?>

    <?php include_once '../components/sidebar.php' ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>รายละเอียดบริษัท</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">หน้าหลัก</a></li>
                    <li class="breadcrumb-item">ธุรกิจ</li>
                    <li class="breadcrumb-item active">รายละเอียดบริษัท</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body m-4">
                            <!-- Form for company details -->
                            <form id="InputForm">
                                <div class="row pb-4">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="company_code" class="form-label">รหัสบริษัท</label>
                                            <input type="text" class="form-control" id="company_code" name="company_code" disabled>
                                        </div>
                                    </div>
                                </div>

                                <h6 class="fw-bold fs-4">ชื่อ</h6>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="name_th" class="form-label">ชื่อบริษัทภาษาไทย</label>
                                            <input type="text" class="form-control" id="name_th" name="name_th" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="name_en" class="form-label">ชื่อบริษัทภาษาอังกฤษ</label>
                                            <input type="text" class="form-control" id="name_en" name="name_en" disabled>
                                        </div>
                                    </div>
                                </div>

                                <h6 class="fw-bold fs-4">คำค้นหา</h6>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="search_first" class="form-label">คำค้นหา 1</label>
                                            <input type="text" class="form-control" id="search_first" name="search_first" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="search_second" class="form-label">คำค้นหา 2</label>
                                            <input type="text" class="form-control" id="search_second" name="search_second" disabled>
                                        </div>
                                    </div>
                                </div>

                                <h6 class="fw-bold fs-4">ที่อยู่</h6>
                                <div class="row pb-4">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="a_road" class="form-label">ถนน</label>
                                            <input type="text" class="form-control" id="a_road" name="a_road" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mb-3">
                                            <label for="a_number" class="form-label">บ้านเลขที่</label>
                                            <input type="text" class="form-control" id="a_number" name="a_number" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="a_address" class="form-label">ที่อยู่</label>
                                            <input type="text" class="form-control" id="a_address" name="a_address" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mb-3">
                                            <label for="a_province" class="form-label">จังหวัดเลขที่</label>
                                            <input type="text" class="form-control" id="a_province" name="a_province" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mb-3">
                                            <label for="a_zip_code" class="form-label">รหัสไปรษณีย์</label>
                                            <input type="text" class="form-control" id="a_zip_code" name="a_zip_code" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="zone" class="form-label">ภาค</label>
                                            <input type="text" class="form-control" id="zone" name="zone" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="timezone" class="form-label">เขตเวลา</label>
                                            <input type="text" class="form-control" id="timezone" name="timezone" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="country_name" class="form-label">ประเทศ</label>
                                            <input type="text" class="form-control" id="country_name" name="country_name" disabled>
                                        </div>
                                    </div>
                                </div>

                                <h6 class="fw-bold fs-4">ที่อยู่ตู้ ปณ.</h6>
                                <div class="row pb-4">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="postbox" class="form-label">ตู้ไปรษณีย์</label>
                                            <input type="text" class="form-control" id="postbox" name="postbox" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="zip_code" class="form-label">รหัสไปรษณีย์</label>
                                            <input type="text" class="form-control" id="zip_code" name="zip_code" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="company_zip_code" class="form-label">รหัสไปรษณีย์บริษัท</label>
                                            <input type="text" class="form-control" id="company_zip_code" name="company_zip_code" disabled>
                                        </div>
                                    </div>
                                </div>

                                <h6 class="fw-bold fs-4">การติดต่อสื่อสาร</h6>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="language" class="form-label">ภาษา</label>
                                            <input type="text" class="form-control" id="language" name="language" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="mobile_phone" class="form-label">โทรศัพท์มือถือ</label>
                                            <input type="text" class="form-control" id="mobile_phone" name="mobile_phone" disabled>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3 row">
                                            <div class="col-8">
                                                <label for="phone" class="form-label">โทรศัพท์</label>
                                                <input type="text" class="form-control" id="phone" name="phone" disabled>
                                            </div>
                                            <div class="col-4">
                                                <label for="phone_ex" class="form-label">ส่วนขยาย</label>
                                                <input type="text" class="form-control" id="phone_ex" name="phone_ex" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3 row">
                                            <div class="col-8">
                                                <label for="fax" class="form-label">โทรสาร</label>
                                                <input type="text" class="form-control" id="fax" name="fax" disabled>
                                            </div>
                                            <div class="col-4">
                                                <label for="fax_ex" class="form-label">ส่วนขยาย</label>
                                                <input type="text" class="form-control" id="fax_ex" name="fax_ex" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">อีเมล</label>
                                            <input type="text" class="form-control" id="email" name="email" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="standard_communication" class="form-label">วิธีสื่อสารมาตรฐาน</label>
                                            <input type="text" class="form-control" id="standard_communication" name="standard_communication" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row pb-4">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="comment" class="form-label">ข้อคิดเห็น</label>
                                            <textarea class="form-control" id="comment" name="comment" rows="4" disabled></textarea>
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

    <script src="<?= $path ?>js/companies/company_detail.js"></script>
    <script src="<?= $path ?>js/common/get_query_param.js"></script>
    <script src="<?= $path ?>js/common/handle_error.js"></script>

</body>

</html>