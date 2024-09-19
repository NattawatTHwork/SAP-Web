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
    <?php include_once '../php/general_ledgers/general_ledger_transaction_update.php' ?>

    <?php include_once '../components/header.php' ?>

    <?php include_once '../components/sidebar.php' ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>General Ledgers Transaction Update</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">General Ledgers</li>
                    <li class="breadcrumb-item active">General Ledgers Transaction Update</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body m-4">
                            <form id="InputForm">
                                <h6 class="fw-bold fs-4">แก้ไขรายการบัญชีแยกประเภททั่วไป</h6>
                                <div class="row pb-4">
                                    <input type="hidden" class="form-control" id="gl_transaction_id" name="gl_transaction_id" required>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="central_general_ledger_id" class="form-label">บัญชี G/L</label>
                                            <select class="form-control" id="central_general_ledger_id" name="central_general_ledger_id" required>
                                                <!-- Dynamic options will be populated here -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="dc_type" class="form-label">D/C</label>
                                            <input type="text" class="form-control" id="dc_type" name="dc_type" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="amount" class="form-label">จำนวนเงิน</label>
                                            <input type="text" class="form-control" id="amount" name="amount" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="calculate_tax" name="calculate_tax">
                                                <label class="form-check-label" for="calculate_tax">คำนวณภาษี</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="business_stablishment" class="form-label">ที่ประกอบธุรกิจ</label>
                                            <input type="text" class="form-control" id="business_stablishment" name="business_stablishment">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="business_type_id" class="form-label">ประเภทธุรกิจ</label>
                                            <select class="form-control" id="business_type_id" name="business_type_id" required>
                                                <!-- Dynamic options will be populated here -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="determination" class="form-label">การกำหนด</label>
                                            <input type="text" class="form-control" id="determination" name="determination">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="description" class="form-label">ข้อความ</label>
                                            <input type="text" class="form-control" id="description" name="description">
                                        </div>
                                    </div>
                                </div>

                                <div class="row pb-4">
                                    <div class="col-12">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary w-100" id="submitBtn"><?= $texts['save'] ?></button>
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

    <script src="<?= $path ?>js/general_ledgers/general_ledger_transaction_update.js"></script>
    <script src="<?= $path ?>js/common/get_query_param.js"></script>
    <script src="<?= $path ?>js/common/convert_form_data_to_json.js"></script>
    <script src="<?= $path ?>js/common/handle_error.js"></script>

</body>

</html>