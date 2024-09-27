<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>General Ledgers Update</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include_once '../components/header_link.php' ?>
</head>

<body>
    <?php include_once '../php/general_ledgers/general_ledger_update.php' ?>

    <?php include_once '../components/header.php' ?>

    <?php include_once '../components/sidebar.php' ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>General Ledgers Update</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">General Ledgers</li>
                    <li class="breadcrumb-item active">General Ledgers Update</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body m-4">
                            <!-- Form for general_ledger update details -->
                            <form id="InputForm">
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

                <div class="col-xl-12">

                    <div class="card">
                        <div class="d-sm-flex justify-content-end mb-2 row p-4">
                            <div class="col-sm-12 col-md-4">
                                <a href="general_ledger_transaction_create.php?general_ledger_id=<?= $_GET['general_ledger_id'] ?>" class="btn btn-primary w-100 btn-block">
                                    เพิ่มรายการบัญชีแยกประเภททั่วไป
                                </a>
                            </div>
                        </div>

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

    <script src="<?= $path ?>js/general_ledgers/general_ledger_update.js"></script>
    <script src="<?= $path ?>js/common/get_query_param.js"></script>
    <script src="<?= $path ?>js/common/convert_form_data_to_json.js"></script>
    <script src="<?= $path ?>js/common/handle_error.js"></script>

</body>

</html>