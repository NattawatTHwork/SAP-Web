<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>บัญชีแยกประเภททั่วไปทั้งหมด</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include_once '../components/header_link.php' ?>
</head>

<body>
    <?php include_once '../php/general_ledgers/general_ledger_all.php' ?>

    <?php include_once '../components/header.php' ?>

    <?php include_once '../components/sidebar.php' ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>บัญชีแยกประเภททั่วไปทั้งหมด</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">หน้าหลัก</a></li>
                    <li class="breadcrumb-item">บัญชีแยกประเภททั่วไป</li>
                    <li class="breadcrumb-item active">บัญชีแยกประเภททั่วไปทั้งหมด</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="d-sm-flex justify-content-end mb-2 row">
            <div class="col-sm-12 col-md-4">
                <a href="general_ledger_create.php" class="btn btn-primary w-100 btn-block">
                    เพิ่มบัญชีแยกประเภททั่วไป
                </a>
            </div>
        </div>

        <div class="mt-4 mb-4">
        <form id="searchForm">
            <div class="row mb-3">
                <!-- รหัสบริษัท -->
                <div class="col-md-3 d-flex align-items-center">
                    <label for="company_id" class="form-label me-2">รหัสบริษัท</label>
                    <select class="form-select" id="company_id_search" name="company_id">
                        <option value="">เลือกบริษัท</option>
                    </select>
                </div>
                <!-- วันที่เอกสาร -->
                <div class="col-md-3 d-flex align-items-center">
                    <label for="document_date" class="form-label me-2">วันที่เอกสาร</label>
                    <input type="date" class="form-control" id="document_date" name="document_date">
                </div>
                <!-- วันผ่านรายการ -->
                <div class="col-md-3 d-flex align-items-center">
                    <label for="posting_date" class="form-label me-2">วันผ่านรายการ</label>
                    <input type="date" class="form-control" id="posting_date" name="posting_date">
                </div>
                <!-- ประเภทเอกสาร -->
                <div class="col-md-3 d-flex align-items-center">
                    <label for="document_type_id" class="form-label me-2">ประเภทเอกสาร</label>
                    <select class="form-select" id="document_type_id" name="document_type_id">
                        <option value="">เลือกประเภทเอกสาร</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <!-- การอ้างอิง -->
                <div class="col-md-3 d-flex align-items-center">
                    <label for="reference" class="form-label me-2">การอ้างอิง</label>
                    <input type="text" class="form-control" id="reference" name="reference" placeholder="การอ้างอิง">
                </div>
                <!-- Doc.Header Text -->
                <div class="col-md-3 d-flex align-items-center">
                    <label for="document_header_text" class="form-label me-2">Doc.Header Text</label>
                    <input type="text" class="form-control" id="document_header_text" name="document_header_text" placeholder="Header Text">
                </div>
                <!-- สกุลเงิน -->
                <div class="col-md-3 d-flex align-items-center">
                    <label for="currency_id" class="form-label me-2">สกุลเงิน</label>
                    <select class="form-select" id="currency_id" name="currency_id">
                        <option value="">เลือกสกุลเงิน</option>
                    </select>
                </div>
                <!-- เลขที่สาขา -->
                <div class="col-md-3 d-flex align-items-center">
                    <label for="branch_number_id" class="form-label me-2">เลขที่สาขา</label>
                    <select class="form-select" id="branch_number_id" name="branch_number_id">
                        <option value="">เลือกเลขที่สาขา</option>
                    </select>
                </div>
            </div>

            <!-- ปุ่มค้นหา -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary w-100" id="submitBtn">ค้นหา</button>
            </div>
        </form>
    </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <!-- Table with stripped rows -->
                            <table id="datatables" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>รหัสบริษัท</th>
                                        <th>วันที่เอกสาร</th>
                                        <th>วันผ่านรายการ</th>
                                        <th>ประเภทเอกสาร</th>
                                        <th>เลขที่เอกสาร</th>
                                        <th>ปี</th>
                                        <th>การอ้างอิง</th>
                                        <th>Doc.Header Text</th>
                                        <th>สกุลเงิน</th>
                                        <th>เลขที่สาขา</th>
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

    <script src="<?= $path ?>js/general_ledgers/general_ledger_all.js"></script>
    <script src="<?= $path ?>js/common/get_query_param.js"></script>
    <script src="<?= $path ?>js/common/date_to_thai.js"></script>
    <script src="<?= $path ?>js/common/handle_error.js"></script>

</body>

</html>