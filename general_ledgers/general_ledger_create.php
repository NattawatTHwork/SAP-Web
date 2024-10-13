<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>เพิ่มบัญชีแยกประเภททั่วไป</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include_once '../components/header_link.php' ?>
</head>

<body>
    <?php include_once '../php/general_ledgers/general_ledger_create.php' ?>

    <?php include_once '../components/header.php' ?>

    <?php include_once '../components/sidebar.php' ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>เพิ่มบัญชีแยกประเภททั่วไป</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">หน้าหลัก</a></li>
                <li class="breadcrumb-item">บัญชีแยกประเภททั่วไป</li>
                <li class="breadcrumb-item active">เพิ่มบัญชีแยกประเภททั่วไป</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="d-sm-flex justify-content-end mb-2 row">
            <div class="col-sm-12 col-md-4">
                <button type="button" class="btn btn-primary w-100 btn-block" id="submitBtn" onclick="saveGeneralLedger()">
                    บันทึก
                </button>
            </div>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <section class="section profile">
                        <div class="row">

                            <div class="col-12">

                                <div class="card">
                                    <div class="card-body pt-3">
                                        <!-- Bordered Tabs -->
                                        <ul class="nav nav-tabs nav-tabs-bordered">

                                            <li class="nav-item">
                                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#basic-data">ข้อมูลพื้นฐาน</button>
                                            </li>

                                            <li class="nav-item">
                                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#detail">รายละเอียด</button>
                                            </li>

                                        </ul>
                                        <div class="tab-content pt-2">
                                            <div class="tab-pane fade show active basic-data" id="basic-data">
                                                <div class="row pb-2">
                                                    <div class="col-md-9"> <!-- Left Form -->
                                                        <form id="basic_data">
                                                            <div class="row">
                                                                <input type="hidden" id="created_by" name="created_by" value="<?= $_SESSION['user_id'] ?>" required>
                                                                <div class="col-md-6 mb-2">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-4 mb-2">
                                                                            <label for="document_date" class="form-label">วันที่เอกสาร</label>
                                                                        </div>
                                                                        <div class="col-8 mb-2">
                                                                            <input type="date" class="form-control" id="document_date" name="document_date" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-4 mb-2">
                                                                            <label for="posting_date" class="form-label">วันผ่านรายการ</label>
                                                                        </div>
                                                                        <div class="col-8 mb-2">
                                                                            <input type="date" class="form-control" id="posting_date" name="posting_date">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 mb-2">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-4 mb-2">
                                                                            <label for="reference" class="form-label">การอ้างอิง</label>
                                                                        </div>
                                                                        <div class="col-8 mb-2">
                                                                            <input type="text" class="form-control" id="reference" name="reference">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 mb-2">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-4 mb-2">
                                                                            <label for="company_id" class="form-label">รหัสบริษัท</label>
                                                                        </div>
                                                                        <div class="col-8 mb-2">
                                                                            <select class="form-control" id="company_id" name="company_id" required>
                                                                                <!-- Dynamic options will be populated here -->
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 mb-2">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-4 mb-2">
                                                                            <label for="currency_id" class="form-label">สกุลเงิน</label>
                                                                        </div>
                                                                        <div class="col-8 mb-2">
                                                                            <select class="form-control" id="currency_id" name="currency_id">
                                                                                <!-- Dynamic options will be populated here -->
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 mb-2">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-md-2 col-4 mb-2">
                                                                            <label for="document_header_text" class="form-label">Doc.Header Text</label>
                                                                        </div>
                                                                        <div class="col-md-10 col-8 mb-2">
                                                                            <input type="text" class="form-control" id="document_header_text" name="document_header_text">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-4 mb-2">
                                                                            <label for="document_type_id" class="form-label">ประเภทเอกสาร</label>
                                                                        </div>
                                                                        <div class="col-8 mb-2">
                                                                            <select class="form-control" id="document_type_id" name="document_type_id" required>
                                                                                <!-- Dynamic options will be populated here -->
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-4 mb-2">
                                                                            <label for="branch_number_id" class="form-label">เลขที่สาขา</label>
                                                                        </div>
                                                                        <div class="col-8 mb-2">
                                                                            <select class="form-control" id="branch_number_id" name="branch_number_id">
                                                                                <!-- Dynamic options will be populated here -->
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="col-md-3"> <!-- Right Form -->
                                                        <div class="border-start border-2 ps-3" style="height: 100%;">
                                                            <h5>ข้อมูลจำนวนเงิน</h5>

                                                            <form id="additional_data">
                                                                <div class="mb-2">
                                                                    <label for="debit_total" class="form-label">เดบิตรวม</label>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="debit_total" name="debit_total" disabled>
                                                                        <span class="input-group-text">บาท</span>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-2">
                                                                    <label for="credit_total" class="form-label">เครดิตรวม</label>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="credit_total" name="credit_total" disabled>
                                                                        <span class="input-group-text">บาท</span>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade detail pt-3" id="detail">

                                                <form id="detail_data">
                                                    <div class="row pb-2">
                                                        <div class="col-md-6 mb-2">
                                                            <div class="row align-items-center">
                                                                <div class="col-4 mb-2">
                                                                    <label for="company_code" class="form-label">รหัสบริษัท</label>
                                                                </div>
                                                                <div class="col-8 mb-2">
                                                                    <input type="text" class="form-control" id="company_code" name="company_code" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-2">
                                                            <div class="row align-items-center">
                                                                <div class="col-4 mb-2">
                                                                    <label for="exchange_rate" class="form-label">อัตราแลกเปลี่ยน</label>
                                                                </div>
                                                                <div class="col-8 mb-2">
                                                                    <input type="text" class="form-control" id="exchange_rate" name="exchange_rate">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-2">
                                                            <div class="row align-items-center">
                                                                <div class="col-4 mb-2">
                                                                    <label for="translatn_date" class="form-label">วันที่ทำธุรกรรม</label>
                                                                </div>
                                                                <div class="col-8 mb-2">
                                                                    <input type="date" class="form-control" id="translatn_date" name="translatn_date">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-2">
                                                            <div class="row align-items-center">
                                                                <div class="col-4 mb-2">
                                                                    <label for="trading_part_ba" class="form-label">คู่ค้าทางการค้าบัญชีธุรกิจ</label>
                                                                </div>
                                                                <div class="col-8 mb-2">
                                                                    <input type="text" class="form-control" id="trading_part_ba" name="trading_part_ba">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form>

                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>

                </div>

                <div class="col-xl-12">

                    <div class="card">
                        <div class="card-body">
                            <!-- Table with stripped rows -->
                            <table id="datatables" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>บัญชี G/L</th>
                                        <th>D/C</th>
                                        <th>จำนวนสกุลเงินเอกสาร</th>
                                        <th>ตัวเลือก</th>
                                    </tr>
                                </thead>
                                <tbody id="tableBody">
                                    <!-- Default row -->

                                </tbody>
                            </table>
                            <button class="btn btn-primary" onclick="addRow()">เพิ่มแถว</button>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="dataModal" tabindex="-1" aria-labelledby="dataModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="dataModalLabel">ข้อมูลเพิ่มเติม</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="additionalDataForm">
                                        <div class="col-12 mb-2">
                                            <div class="row align-items-center">
                                                <div class="col-3 mb-2">
                                                    <label for="calculate_tax" class="form-label">คำนวณภาษี</label>
                                                </div>
                                                <div class="col-9 mb-2">
                                                    <input type="checkbox" class="form-check-input" id="calculate_tax" name="calculate_tax" onchange="updateAdditionalData(this)">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 mb-2">
                                            <div class="row align-items-center">
                                                <div class="col-3 mb-2">
                                                    <label for="business_stablishment" class="form-label">ที่ประกอบธุรกิจ</label>
                                                </div>
                                                <div class="col-9 mb-2">
                                                    <input type="text" class="form-control" id="business_stablishment" name="business_stablishment" oninput="updateAdditionalData(this)">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 mb-2">
                                            <div class="row align-items-center">
                                                <div class="col-3 mb-2">
                                                    <label for="business_type_id" class="form-label">ประเภทธุรกิจ</label>
                                                </div>
                                                <div class="col-9 mb-2">
                                                    <select class="form-control" id="business_type_id" name="business_type_id" onchange="updateAdditionalData(this)">
                                                        <!-- Dynamic options will be populated here -->
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 mb-2">
                                            <div class="row align-items-center">
                                                <div class="col-3 mb-2">
                                                    <label for="determination" class="form-label">การกำหนด</label>
                                                </div>
                                                <div class="col-9 mb-2">
                                                    <input type="text" class="form-control" id="determination" name="determination" oninput="updateAdditionalData(this)">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 mb-2">
                                            <div class="row align-items-center">
                                                <div class="col-3 mb-2">
                                                    <label for="description" class="form-label">ข้อความ</label>
                                                </div>
                                                <div class="col-9 mb-2">
                                                    <input type="text" class="form-control" id="description" name="description" oninput="updateAdditionalData(this)">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main><!-- End #main -->

    <?php include_once '../components/footer.php' ?>

    <script src="<?= $path ?>js/general_ledgers/general_ledger_create.js"></script>
    <script src="<?= $path ?>js/common/convert_form_data_to_json.js"></script>
    <script src="<?= $path ?>js/common/get_query_param.js"></script>
    <script src="<?= $path ?>js/common/handle_error.js"></script>

</body>

</html>