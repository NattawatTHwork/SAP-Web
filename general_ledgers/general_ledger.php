<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>General Ledgers</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include_once '../components/header_link.php' ?>
</head>

<body>
    <?php include_once '../php/general_ledgers/general_ledger.php' ?>

    <?php include_once '../components/header.php' ?>

    <?php include_once '../components/sidebar.php' ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <div class="pagetitle">
                <h1>General Ledger</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item">General Ledgers</li>
                        <li class="breadcrumb-item active">General Ledger</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->

            <section class="section profile">
                <div class="row">

                    <div class="col-xl-12">

                        <div class="card">
                            <div class="card-body pt-3">
                                <!-- Bordered Tabs -->
                                <ul class="nav nav-tabs nav-tabs-bordered">

                                    <li class="nav-item">
                                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#general-data">ข้อมูลพื้นฐาน</button>
                                    </li>

                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#control-data">รายละเอียด</button>
                                    </li>

                                </ul>
                                <div class="tab-content pt-2">

                                    <div class="tab-pane fade show active general-data" id="general-data">

                                        <!-- Type Description Form -->
                                        <form id="general_data">
                                            <input type="hidden" class="form-control" id="general_ledger_id" name="general_ledger_id" required>

                                            <div class="row pb-4">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="document_date" class="form-label">วันที่เอกสาร</label>
                                                        <input type="date" class="form-control" id="document_date" name="document_date">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="posting_date" class="form-label">วันผ่านรายการ</label>
                                                        <input type="date" class="form-control" id="posting_date" name="posting_date">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="reference" class="form-label">การอ้างอิง</label>
                                                        <input type="text" class="form-control" id="reference" name="reference">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="document_header_text" class="form-label">Doc.Header Text</label>
                                                        <input type="text" class="form-control" id="document_header_text" name="document_header_text">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="document_type" class="form-label">ประเภทเอกสาร</label>
                                                        <input type="text" class="form-control" id="document_type" name="document_type">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="intercompany_number" class="form-label">เลขที่ระหว่างบ.</label>
                                                        <input type="text" class="form-control" id="intercompany_number" name="intercompany_number">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="branch_number" class="form-label">เลขที่สาขา</label>
                                                        <input type="text" class="form-control" id="branch_number" name="branch_number">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="currency" class="form-label">สกุลเงิน</label>
                                                        <input type="text" class="form-control" id="currency" name="currency">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="company_code" class="form-label">รหัสบริษัท</label>
                                                        <input type="text" class="form-control" id="company_code" name="company_code" disabled>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <h6 class="fw-bold fs-4">ข้อมูลงบการเงินในผังบัญชี</h6>
                                            <div class="row pb-4">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="tradg_part" class="form-label">Tradg part</label>
                                                        <input type="text" class="form-control" id="tradg_part" name="tradg_part">
                                                    </div>
                                                </div>
                                            </div> -->

                                            <div class="row pb-4">
                                                <div class="col-12">
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary w-100" id="submitBtnGeneralData">บันทึก</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form><!-- End Type Description Form -->

                                    </div>

                                    <div class="tab-pane fade control-data pt-3" id="control-data">

                                        <!-- Control Data Form -->
                                        <!-- <form id="control_data">
                                            <input type="hidden" class="form-control" id="gl_control_data_id" name="gl_control_data_id" required>
                                            <h6 class="fw-bold fs-4">การควบคุมบัญชีในรหัสบริษัท</h6>
                                            <div class="row pb-4">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="account_currency" class="form-label">สกุลเงินของบัญชี</label>
                                                        <input type="text" class="form-control" id="account_currency" name="account_currency">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="domestic_currency_balance" name="domestic_currency_balance">
                                                            <label class="form-check-label" for="domestic_currency_balance">เฉพาะยอดคงเหลือสกุลเงินในปท.</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="exchange_rate_difference_key" class="form-label">คีย์ผลต่างจากอัตราแลกเปลี่ยน</label>
                                                        <input type="text" class="form-control" id="exchange_rate_difference_key" name="exchange_rate_difference_key">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="valuation_group" class="form-label">กลุ่มการประเมินค่า</label>
                                                        <input type="text" class="form-control" id="valuation_group" name="valuation_group">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="tax_category" class="form-label">หมวดภาษี</label>
                                                        <input type="text" class="form-control" id="tax_category" name="tax_category">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="post_without_tax" name="post_without_tax">
                                                            <label class="form-check-label" for="post_without_tax">ผ่านรายการโดยไม่ต้องมีภาษี</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="reconciliation_account_type" class="form-label">บัญชีกระทบยอดสำหรับประเภทบ/ช</label>
                                                        <select class="form-control" id="reconciliation_account_type" name="reconciliation_account_type">
                                                            <option value="A">A สินทรัพย์</option>
                                                            <option value="D">D ลูกค้า</option>
                                                            <option value="K">K ผู้ขาย</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="alternate_account_number" class="form-label">เลขที่บัญชีสำรอง</label>
                                                        <input type="text" class="form-control" id="alternate_account_number" name="alternate_account_number">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="externally_managed_account" name="externally_managed_account">
                                                            <label class="form-check-label" for="externally_managed_account">บัญชีถูกจัดการในระบบภายนอก</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="inflation_key" class="form-label">Infl. key</label>
                                                        <input type="text" class="form-control" id="inflation_key" name="inflation_key">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="acceptance_range_group" class="form-label">กลุ่มช่วงการยอมรับ</label>
                                                        <input type="text" class="form-control" id="acceptance_range_group" name="acceptance_range_group">
                                                    </div>
                                                </div>
                                            </div>

                                            <h6 class="fw-bold fs-4">การจัดการบัญชีในรหัสบริษัท</h6>
                                            <div class="row pb-4">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="open_item_management" name="open_item_management">
                                                            <label class="form-check-label" for="open_item_management">การจัดการรายการเปิด</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="display_line_items" name="display_line_items">
                                                            <label class="form-check-label" for="display_line_items">แสดงบรรทัดรายการ</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="sorting_key" class="form-label">คีย์การจัดเรียง</label>
                                                        <input type="text" class="form-control" id="sorting_key" name="sorting_key">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="authorization_group" class="form-label">กลุ่มสิทธิ</label>
                                                        <input type="text" class="form-control" id="authorization_group" name="authorization_group">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row pb-4">
                                                <div class="col-12">
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary w-100" id="submitBtnControlData">บันทึก</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form> -->

                                    </div>

                                </div><!-- End Bordered Tabs -->

                            </div>
                        </div>

                    </div>

                    <div class="col-xl-12">

                        <div class="card">
                            <div class="card-body">
                                <!-- Table with stripped rows -->
                                <table id="datatables" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>บัญชี G/L</th>
                                            <th>รหัสบริษัท</th>
                                            <th>ตัวเลือก</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                                <!-- End Table with stripped rows -->
                            </div>
                        </div>

                    </div>
                </div>
            </section>

    </main><!-- End #main -->

    <?php include_once '../components/footer.php' ?>

    <script src="<?= $path ?>js/general_ledgers/general_ledger.js"></script>
    <script src="<?= $path ?>js/common/get_query_param.js"></script>
    <script src="<?= $path ?>js/common/convert_form_data_to_json.js"></script>
    <script src="<?= $path ?>js/common/handle_error.js"></script>

</body>

</html>