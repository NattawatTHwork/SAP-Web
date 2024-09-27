<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Group Account Detail</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include_once '../components/header_link.php' ?>
</head>

<body>
    <?php include_once '../php/group_accounts/group_account_detail.php' ?>

    <?php include_once '../components/header.php' ?>

    <?php include_once '../components/sidebar.php' ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Group Account Detail</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">Group Account</li>
                    <li class="breadcrumb-item active">Group Account Detail</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body m-4">
                            <!-- Form for Group Account details -->
                            <form id="InputForm">
                                <h6 class="fw-bold fs-4">สร้างกลุ่มบัญชี</h6>
                                <div class="row pb-4">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="chart_account_code" class="form-label">รหัสผังบัญชี</label>
                                            <input type="text" class="form-control" id="chart_account_code" name="chart_account_code" disabled>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="group_account_code" class="form-label">รหัสกลุ่มบัญชี</label>
                                            <input type="text" class="form-control" id="group_account_code" name="group_account_code" disabled>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="name_account" class="form-label">ชื่อ</label>
                                            <input type="text" class="form-control" id="name_account" name="name_account" disabled>
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

    <script src="<?= $path ?>js/group_accounts/group_account_detail.js"></script>
    <script src="<?= $path ?>js/common/get_query_param.js"></script>
    <script src="<?= $path ?>js/common/handle_error.js"></script>

</body>

</html>