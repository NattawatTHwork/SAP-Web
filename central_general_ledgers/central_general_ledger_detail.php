<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>รายละเอียกบัญชีแยกประเภททั่วไปส่วนกลาง</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include_once '../components/header_link.php' ?>
</head>

<body>
    <?php include_once '../php/central_general_ledgers/central_general_ledger_detail.php' ?>

    <?php include_once '../components/header.php' ?>

    <?php include_once '../components/sidebar.php' ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>รายละเอียกบัญชีแยกประเภททั่วไปส่วนกลาง</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">หน้าหลัก</a></li>
                    <li class="breadcrumb-item">บัญชีแยกประเภททั่วไปส่วนกลาง</li>
                    <li class="breadcrumb-item active">รายละเอียกบัญชีแยกประเภททั่วไปส่วนกลาง</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body m-4">
                            <!-- Form for central_general_ledger detail details -->
                            <form id="InputForm">
                                <h6 class="fw-bold fs-4">รายละเอียดบัญชีแยกประเภททั่วไปส่วนกลาง</h6>
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
                            </form> <!-- End Form -->
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <?php include_once '../components/footer.php' ?>

    <script src="<?= $path ?>js/central_general_ledgers/central_general_ledger_detail.js"></script>
    <script src="<?= $path ?>js/common/get_query_param.js"></script>
    <script src="<?= $path ?>js/common/handle_error.js"></script>

</body>

</html>