<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Transaction Period Detail</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include_once '../components/header_link.php' ?>
</head>

<body>
    <?php include_once '../php/transaction_periods/transaction_period_detail.php' ?>

    <?php include_once '../components/header.php' ?>

    <?php include_once '../components/sidebar.php' ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Transaction Period Detail</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">Transaction Period</li>
                    <li class="breadcrumb-item active">Transaction Period Detail</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body m-4">
                            <!-- Form for transaction_period details -->
                            <form id="InputForm">
                                <h6 class="fw-bold fs-4">รายละเอียดงวดการผ่านบัญชี</h6>
                                <div class="row pb-4">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="transaction_period_group_code" class="form-label">รหัสกลุ่มงวดการผ่านรายการ</label>
                                            <input type="text" class="form-control" id="transaction_period_group_code" name="transaction_period_group_code" disabled>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="transaction_period_type_code" class="form-label">ประเภทบัญชี</label>
                                            <input type="text" class="form-control" id="transaction_period_type_code" name="transaction_period_type_code" disabled>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="account_from" class="form-label">จากบัญชี</label>
                                            <input type="text" class="form-control" id="account_from" name="account_from" disabled>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="account_to" class="form-label">ถึงบัญชี</label>
                                            <input type="text" class="form-control" id="account_to" name="account_to" disabled>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="period_from_first" class="form-label">ประเภทบัญชี</label>
                                            <input type="text" class="form-control" id="period_from_first" name="period_from_first" disabled>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="period_from_first_year" class="form-label">ปี</label>
                                            <input type="text" class="form-control" id="period_from_first_year" name="period_from_first_year" disabled>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="period_to_first" class="form-label">ถึงงวด 1</label>
                                            <input type="text" class="form-control" id="period_to_first" name="period_to_first" disabled>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="period_to_first_year" class="form-label">ปี</label>
                                            <input type="text" class="form-control" id="period_to_first_year" name="period_to_first_year" disabled>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="period_from_second" class="form-label">จากงวด 2</label>
                                            <input type="text" class="form-control" id="period_from_second" name="period_from_second" disabled>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="period_from_second_year" class="form-label">ปี</label>
                                            <input type="text" class="form-control" id="period_from_second_year" name="period_from_second_year" disabled>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="period_to_second" class="form-label">ถึงงวด 2</label>
                                            <input type="text" class="form-control" id="period_to_second" name="period_to_second" disabled>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="period_to_second_year" class="form-label">ปี</label>
                                            <input type="text" class="form-control" id="period_to_second_year" name="period_to_second_year" disabled>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="augr" class="form-label">AuGr</label>
                                            <input type="text" class="form-control" id="augr" name="augr" disabled>
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

    <script src="<?= $path ?>js/transaction_periods/transaction_period_detail.js"></script>
    <script src="<?= $path ?>js/common/get_query_param.js"></script>
    <script src="<?= $path ?>js/common/handle_error.js"></script>

</body>

</html>