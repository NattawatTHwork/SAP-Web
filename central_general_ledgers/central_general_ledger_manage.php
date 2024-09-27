<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Central General Ledgers Manage</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include_once '../components/header_link.php' ?>
</head>

<body>
    <?php include_once '../php/central_general_ledgers/central_general_ledger_manage.php' ?>

    <?php include_once '../components/header.php' ?>

    <?php include_once '../components/sidebar.php' ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <div class="pagetitle">
                <h1>Central General Ledgers Manage</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item">Central General Ledgers</li>
                        <li class="breadcrumb-item active">Central General Ledgers Manage</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->

            <section class="section profile">
                <div class="row">
                    <div class="col-xl-4">

                        <div class="card">
                            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                                <div class="row pb-4">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="gl_account" class="form-label">บัญชี G/L</label>
                                            <input type="text" class="form-control" id="gl_account" name="gl_account" disabled>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="company_code" class="form-label">รหัสบริษัท</label>
                                            <input type="text" class="form-control" id="company_code" name="company_code" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-8">

                        <div class="card">
                            <div class="card-body pt-3">
                                <!-- Bordered Tabs -->
                                <ul class="nav nav-tabs nav-tabs-bordered">

                                    <li class="nav-item">
                                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#type-description">ประเภท/คำอธิบาย</button>
                                    </li>

                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#control-data">ข้อมูลควบคุม</button>
                                    </li>

                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#interest-bank-creation">สร้าง/ธ./ดอกเบี้ย</button>
                                    </li>

                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#ca-data">ข้อมูล (C/A)</button>
                                    </li>

                                </ul>
                                <div class="tab-content pt-2">

                                    <div class="tab-pane fade show active type-description" id="type-description">

                                        <!-- Type Description Form -->
                                        <form id="type_description">
                                            <input type="hidden" class="form-control" id="gl_type_id" name="gl_type_id" required>
                                            <input type="hidden" class="form-control" id="central_general_ledger_id" name="central_general_ledger_id" required>
                                            <h6 class="fw-bold fs-4">ควบคุมในผังบัญชี</h6>
                                            <div class="row pb-4">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="group_account_id" class="form-label">กลุ่มบัญชี</label>
                                                        <select class="form-control" id="group_account_id" name="group_account_id">
                                                            <!-- Dynamic options will be populated here -->
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="type_account" id="pl_account" value="PL" required>
                                                            <label class="form-check-label" for="pl_account">
                                                                บัญชีแสดงงบกำไรขาดทุน
                                                            </label>
                                                        </div>
                                                        <label for="type_account_description" class="form-label"><strong>การควบคุมรายละเอียดสำหรับบัญชีงบกำไรขาดทุน</strong></label>
                                                        <br>
                                                        <label for="type_account_description" class="form-label">เขตตามหน้าที่</label>
                                                        <input type="text" class="form-control mb-4" id="type_account_description" name="type_account_description">

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="type_account" id="bs_account" value="BS" required>
                                                            <label class="form-check-label" for="bs_account">
                                                                บัญชีงบดุล
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <h6 class="fw-bold fs-4">คำอธิบาย</h6>
                                            <div class="row pb-4">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="short_text" class="form-label">ข้อความแบบสั้น</label>
                                                        <input type="text" class="form-control" id="short_text" name="short_text">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="long_text" class="form-label">ข้อความแบบยาว</label>
                                                        <input type="text" class="form-control" id="long_text" name="long_text">
                                                    </div>
                                                </div>
                                            </div>

                                            <h6 class="fw-bold fs-4">ข้อมูลงบการเงินในผังบัญชี</h6>
                                            <div class="row pb-4">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="tradg_part" class="form-label">Tradg part</label>
                                                        <input type="text" class="form-control" id="tradg_part" name="tradg_part">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row pb-4">
                                                <div class="col-12">
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary w-100" id="submitBtnTypeDescription">บันทึก</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form><!-- End Type Description Form -->

                                    </div>

                                    <div class="tab-pane fade control-data pt-3" id="control-data">

                                        <!-- Control Data Form -->
                                        <form id="control_data">
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
                                        </form><!-- End Control Data Form -->

                                    </div>

                                    <div class="tab-pane fade interest-bank-creation pt-3" id="interest-bank-creation">

                                        <!-- Interest Bank Creation Form -->
                                        <form id="interest_bank_creation">
                                            <input type="hidden" class="form-control" id="gl_interest_bank_creation_id" name="gl_interest_bank_creation_id" required>
                                            <h6 class="fw-bold fs-4">การควบคุมการสร้างเอกสารในรหัสบริษัท</h6>
                                            <div class="row pb-4">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="field_status_group" class="form-label">กลุ่มสถานะฟิลด์</label>
                                                        <input type="text" class="form-control" id="field_status_group" name="field_status_group">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="automatic_posting_only" name="automatic_posting_only">
                                                            <label class="form-check-label" for="automatic_posting_only">ผ่านรายการอัตโนมัติเท่านั้น</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="automatic_incremental_posting" name="automatic_incremental_posting">
                                                            <label class="form-check-label" for="automatic_incremental_posting">ผ่านรายการส่วนเพิ่มอัตโนมัติ</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="reconciliation_account_input" name="reconciliation_account_input">
                                                            <label class="form-check-label" for="reconciliation_account_input">บ/ชกระทบยอดพร้อมสำหรับป้อนขม</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <h6 class="fw-bold fs-4">รายละเอียดธนาคาร/ทางการเงินในรหัสบริษัท</h6>
                                            <div class="row pb-4">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="planning_level" class="form-label">ระดับการวางแผน</label>
                                                        <input type="text" class="form-control" id="planning_level" name="planning_level">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="cash_flow_related" name="cash_flow_related">
                                                            <label class="form-check-label" for="cash_flow_related">เกี่ยวกับกระแสเงินสด</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="commitment_item" class="form-label">รายการภาระผูกพัน</label>
                                                        <input type="text" class="form-control" id="commitment_item" name="commitment_item">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="correspondent_bank" class="form-label">ธนาคารตัวแทน</label>
                                                        <input type="text" class="form-control" id="correspondent_bank" name="correspondent_bank">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="account_number" class="form-label">รหัสบัญชี</label>
                                                        <input type="text" class="form-control" id="account_number" name="account_number">
                                                    </div>
                                                </div>
                                            </div>

                                            <h6 class="fw-bold fs-4">ข้อมูลการคำนวณดอกเบี้ยในรหัสบริษัท</h6>
                                            <div class="row pb-4">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="interest_indicator" class="form-label">ตัวบ่งชี้ดอกเบี้ย</label>
                                                        <input type="text" class="form-control" id="interest_indicator" name="interest_indicator">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="interest_calculation_frequency" class="form-label">ความถี่ในการคำนวณดอกเบี้ย</label>
                                                        <input type="text" class="form-control" id="interest_calculation_frequency" name="interest_calculation_frequency">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="last_interest_calculation_date_key" class="form-label">คีย์วันที่การคิดด/บสุดท้าย</label>
                                                        <input type="text" class="form-control" id="last_interest_calculation_date_key" name="last_interest_calculation_date_key">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="last_interest_calculation_date" class="form-label">วันที่ประมวณผลด/บสุดท้าย</label>
                                                        <input type="text" class="form-control" id="last_interest_calculation_date" name="last_interest_calculation_date">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row pb-4">
                                                <div class="col-12">
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary w-100" id="submitBtnInterestBankCreation">บันทึก</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form><!-- End Interest Bank Creation Form -->

                                    </div>

                                    <div class="tab-pane fade ca-data pt-3" id="ca-data">

                                        <!-- Interest Bank Creation Form -->
                                        <form id="ca_data">
                                            <input type="hidden" class="form-control" id="gl_ca_data_id" name="gl_ca_data_id" required>
                                            <h6 class="fw-bold fs-4">ข้อมูลในผังบัญชี</h6>
                                            <div class="row pb-4">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="created_at" class="form-label">สร้างเมื่อ</label>
                                                        <input type="text" class="form-control" id="created_at" name="created_at" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="username" class="form-label">สร้างโดย</label>
                                                        <input type="text" class="form-control" id="username" name="username" disabled>
                                                    </div>
                                                </div>
                                            </div>

                                            <h6 class="fw-bold fs-4">ข้อความบัญชีแยกประเภททั่วไปในผังบัญชี</h6>
                                            <div class="row pb-4">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="account_assignment_info" class="form-label">ข้อมูลการกำหนดเลขที่บัญชี</label>
                                                        <input type="text" class="form-control" id="account_assignment_info" name="account_assignment_info">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="accounting_note" class="form-label">หมายเหตุการบัญชี</label>
                                                        <input type="text" class="form-control" id="accounting_note" name="accounting_note">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="account_assignment_info_9" class="form-label">ข้อมูลการกำหนดเลขที่บัญชี 9</label>
                                                        <input type="text" class="form-control" id="account_assignment_info_9" name="account_assignment_info_9">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row pb-4">
                                                <div class="col-12">
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary w-100" id="submitBtnCAData">บันทึก</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form><!-- End Interest Bank Creation Form -->

                                    </div>

                                </div><!-- End Bordered Tabs -->

                            </div>
                        </div>

                    </div>
                </div>
            </section>

    </main><!-- End #main -->

    <?php include_once '../components/footer.php' ?>

    <script src="<?= $path ?>js/central_general_ledgers/central_general_ledger_manage.js"></script>
    <script src="<?= $path ?>js/common/get_query_param.js"></script>
    <script src="<?= $path ?>js/common/convert_form_data_to_json.js"></script>
    <script src="<?= $path ?>js/common/handle_error.js"></script>

</body>

</html>