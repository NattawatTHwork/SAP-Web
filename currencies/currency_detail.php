<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>รายละเอียดสกุลเงิน</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include_once '../components/header_link.php' ?>
</head>

<body>
    <?php include_once '../php/currencies/currency_detail.php' ?>

    <?php include_once '../components/header.php' ?>

    <?php include_once '../components/sidebar.php' ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>รายละเอียดสกุลเงิน</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">หน้าหลัก</a></li>
                    <li class="breadcrumb-item">สกุลเงิน</li>
                    <li class="breadcrumb-item active">รายละเอียดสกุลเงิน</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body m-4">
                            <!-- Form for currency details -->
                            <form id="InputForm">
                                <div class="row pb-4">
                                    <div class="col-12 mb-2">
                                        <div class="row align-items-center">
                                            <div class="col-3 mb-2 text-center">
                                                <label for="currency_code" class="form-label">สกุลเงิน</label>
                                            </div>
                                            <div class="col-9 mb-2">
                                                <input type="text" class="form-control" id="currency_code" name="currency_code" disabled>
                                            </div>
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

    <script src="<?= $path ?>js/currencies/currency_detail.js"></script>
    <script src="<?= $path ?>js/common/get_query_param.js"></script>
    <script src="<?= $path ?>js/common/handle_error.js"></script>

</body>

</html>