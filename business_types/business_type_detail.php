<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>รายละเอียดเขตธุรกิจ</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include_once '../components/header_link.php' ?>
</head>

<body>
    <?php include_once '../php/business_types/business_type_detail.php' ?>

    <?php include_once '../components/header.php' ?>

    <?php include_once '../components/sidebar.php' ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>รายละเอียดเขตธุรกิจ</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">หน้าหลัก</a></li>
                    <li class="breadcrumb-item">เขตธุรกิจ</li>
                    <li class="breadcrumb-item active">รายละเอียดเขตธุรกิจ</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body m-4">
                            <!-- Form for business_type details -->
                            <form id="InputForm">
                                <h6 class="fw-bold fs-4">รายละเอียดเขตธุรกิจ</h6>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="business_type_code" class="form-label">รหัสเขตธุรกิจ</label>
                                            <input type="text" class="form-control" id="business_type_code" name="business_type_code" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="description" class="form-label">คำอธิบาย</label>
                                            <input type="text" class="form-control" id="description" name="description" disabled>
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

    <script src="<?= $path ?>js/business_types/business_type_detail.js"></script>
    <script src="<?= $path ?>js/common/get_query_param.js"></script>
    <script src="<?= $path ?>js/common/handle_error.js"></script>

</body>

</html>