<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>แก้ไขประเภทเอกสาร</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include_once '../components/header_link.php' ?>
</head>

<body>
    <?php include_once '../php/document_types/document_type_update.php' ?>

    <?php include_once '../components/header.php' ?>

    <?php include_once '../components/sidebar.php' ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>แก้ไขประเภทเอกสาร</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">หน้าหลัก</a></li>
                    <li class="breadcrumb-item">ประเภทเอกสาร</li>
                    <li class="breadcrumb-item active">แก้ไขประเภทเอกสาร</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body m-4">
                            <!-- Form for document_type details -->
                            <form id="InputForm">
                                <input type="hidden" id="document_type_id" name="document_type_id" value="" required>

                                <div class="row pb-4">
                                    <div class="col-12 mb-2">
                                        <div class="row align-items-center">
                                            <div class="col-3 mb-2 text-center">
                                                <label for="dt_year" class="form-label">ปี</label>
                                            </div>
                                            <div class="col-9 mb-2">
                                                <input type="text" class="form-control" id="dt_year" name="dt_year" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <div class="row align-items-center">
                                            <div class="col-3 mb-2 text-center">
                                                <label for="document_type_code" class="form-label">ประเภทเอกสาร</label>
                                            </div>
                                            <div class="col-9 mb-2">
                                                <input type="text" class="form-control" id="document_type_code" name="document_type_code" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <div class="row align-items-center">
                                            <div class="col-3 mb-2 text-center">
                                                <label for="dt_from" class="form-label">จาก</label>
                                            </div>
                                            <div class="col-9 mb-2">
                                                <input type="text" class="form-control" id="dt_from" name="dt_from" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <div class="row align-items-center">
                                            <div class="col-3 mb-2 text-center">
                                                <label for="dt_to" class="form-label">ถึง</label>
                                            </div>
                                            <div class="col-9 mb-2">
                                                <input type="text" class="form-control" id="dt_to" name="dt_to" required>
                                            </div>
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
            </div>
        </section>

    </main><!-- End #main -->

    <?php include_once '../components/footer.php' ?>

    <script src="<?= $path ?>js/document_types/document_type_update.js"></script>
    <script src="<?= $path ?>js/common/get_query_param.js"></script>
    <script src="<?= $path ?>js/common/convert_form_data_to_json.js"></script>
    <script src="<?= $path ?>js/common/handle_error.js"></script>

</body>

</html>