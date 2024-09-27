<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Transaction Period All</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include_once '../components/header_link.php' ?>
</head>

<body>
    <?php include_once '../php/transaction_periods/transaction_period_all.php' ?>

    <?php include_once '../components/header.php' ?>

    <?php include_once '../components/sidebar.php' ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Transaction Period All</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">Transaction Period</li>
                    <li class="breadcrumb-item active">Transaction Period All</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="d-sm-flex justify-content-end mb-2 row">
            <div class="col-sm-12 col-md-4">
                <a href="transaction_period_create.php" class="btn btn-primary w-100 btn-block">
                    เพิ่มงวดการผ่านบัญชี
                </a>
            </div>
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
                                        <th>รหัสกลุ่มงวดการผ่านรายการ</th>
                                        <th>ประเภทบัญชี</th>
                                        <th>จากบัญชี</th>
                                        <th>ถึงบัญชี</th>
                                        <th>จากงวด 1</th>
                                        <th>ปี</th>
                                        <th>ถึงงวด 1</th>
                                        <th>ปี</th>
                                        <th>จากงวด 2</th>
                                        <th>ปี</th>
                                        <th>ถึงงวด 2</th>
                                        <th>ปี</th>
                                        <th>AuGr</th>
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

    <script src="<?= $path ?>js/transaction_periods/transaction_period_all.js"></script>
    <script src="<?= $path ?>js/common/get_query_param.js"></script>
    <script src="<?= $path ?>js/common/handle_error.js"></script>

</body>

</html>