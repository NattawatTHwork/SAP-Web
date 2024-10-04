<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>General Ledger Create</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include_once '../components/header_link.php' ?>
</head>

<body>
    <?php include_once '../php/general_ledgers/general_ledger_create.php' ?>

    <?php include_once '../components/header.php' ?>

    <?php include_once '../components/sidebar.php' ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>General Ledger Create</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">General Ledger</li>
                    <li class="breadcrumb-item active">General Ledger Create</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <section class="section profile">
                        <div class="row">

                            <div class="col-12">

                                <div class="card">
                                    <div class="card-body pt-3">
                                        <!-- Bordered Tabs -->
                                        <ul class="nav nav-tabs nav-tabs-bordered">

                                            <li class="nav-item">
                                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#basic-data">ข้อมูลพื้นฐาน</button>
                                            </li>

                                            <li class="nav-item">
                                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#detail">รายละเอียด</button>
                                            </li>

                                        </ul>
                                        <div class="tab-content pt-2">

                                            <div class="tab-pane fade show active basic-data" id="basic-data">

                                                <form id="basic_data">
                                                    <input type="hidden" class="form-control" id="general_ledger_id" name="general_ledger_id" required>

                                                    <div class="row pb-4">
                                                        <div class="col-md-6 mb-3">
                                                            <div class="row align-items-center">
                                                                <div class="col-4 mb-3">
                                                                    <label for="document_date" class="form-label">วันที่เอกสาร</label>
                                                                </div>
                                                                <div class="col-8 mb-3">
                                                                    <input type="date" class="form-control" id="document_date" name="document_date">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <div class="row align-items-center">
                                                                <div class="col-4 mb-3">
                                                                    <label for="posting_date" class="form-label">วันผ่านรายการ</label>
                                                                </div>
                                                                <div class="col-8 mb-3">
                                                                    <input type="date" class="form-control" id="posting_date" name="posting_date">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <div class="row align-items-center">
                                                                <div class="col-md-2 col-4 mb-3">
                                                                    <label for="reference" class="form-label">การอ้างอิง</label>
                                                                </div>
                                                                <div class="col-md-10 col-8 mb-3">
                                                                    <input type="text" class="form-control" id="reference" name="reference">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <div class="row align-items-center">
                                                                <div class="col-md-2 col-4 mb-3">
                                                                    <label for="document_header_text" class="form-label">Doc.Header Text</label>
                                                                </div>
                                                                <div class="col-md-10 col-8 mb-3">
                                                                    <input type="text" class="form-control" id="document_header_text" name="document_header_text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <div class="row align-items-center">
                                                                <div class="col-4 mb-3">
                                                                    <label for="document_type" class="form-label">ประเภทเอกสาร</label>
                                                                </div>
                                                                <div class="col-8 mb-3">
                                                                    <input type="text" class="form-control" id="document_type" name="document_type">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <div class="row align-items-center">
                                                                <div class="col-4 mb-3">
                                                                    <label for="branch_number" class="form-label">เลขที่สาขา</label>
                                                                </div>
                                                                <div class="col-8 mb-3">
                                                                    <input type="text" class="form-control" id="branch_number" name="branch_number">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <div class="row align-items-center">
                                                                <div class="col-md-2 col-4 mb-3">
                                                                    <label for="intercompany_number" class="form-label">เลขที่ระหว่างบ.</label>
                                                                </div>
                                                                <div class="col-md-10 col-8 mb-3">
                                                                    <input type="text" class="form-control" id="intercompany_number" name="intercompany_number">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <div class="row align-items-center">
                                                                <div class="col-4 mb-3">
                                                                    <label for="company_id" class="form-label">รหัสบริษัท</label>
                                                                </div>
                                                                <div class="col-8 mb-3">
                                                                    <select class="form-control" id="company_id" name="company_id" required>
                                                                        <!-- Dynamic options will be populated here -->
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <div class="row align-items-center">
                                                                <div class="col-4 mb-3">
                                                                    <label for="currency" class="form-label">สกุลเงิน</label>
                                                                </div>
                                                                <div class="col-8 mb-3">
                                                                    <input type="text" class="form-control" id="currency" name="currency">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form>

                                            </div>

                                            <div class="tab-pane fade detail pt-3" id="detail">

                                                <form id="detail">
                                                    <input type="hidden" class="form-control" id="general_ledger_detail_id" name="general_ledger_detail_id" required>

                                                    <div class="row pb-4">
                                                        <div class="col-md-6 mb-3">
                                                            <div class="row align-items-center">
                                                                <div class="col-4 mb-3">
                                                                    <label for="company_code" class="form-label">รหัสบริษัท</label>
                                                                </div>
                                                                <div class="col-8 mb-3">
                                                                    <input type="text" class="form-control" id="company_code" name="company_code" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <div class="row align-items-center">
                                                                <div class="col-4 mb-3">
                                                                    <label for="exchange_rate" class="form-label">อัตราแลกเปลี่ยน</label>
                                                                </div>
                                                                <div class="col-8 mb-3">
                                                                    <input type="text" class="form-control" id="exchange_rate" name="exchange_rate">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <div class="row align-items-center">
                                                                <div class="col-4 mb-3">
                                                                    <label for="translatn_date" class="form-label">วันที่ทำธุรกรรม</label>
                                                                </div>
                                                                <div class="col-8 mb-3">
                                                                    <input type="date" class="form-control" id="translatn_date" name="translatn_date">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <div class="row align-items-center">
                                                                <div class="col-4 mb-3">
                                                                    <label for="trading_part_ba" class="form-label">คู่ค้าทางการค้าบัญชีธุรกิจ</label>
                                                                </div>
                                                                <div class="col-8 mb-3">
                                                                    <input type="text" class="form-control" id="trading_part_ba" name="trading_part_ba">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form>

                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>

                </div>

                <div class="col-xl-12">

                    <div class="card">
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
                                <tbody id="tableBody">
                                    <!-- Default row -->
                                    <tr>
                                        <td><input type="text" class="form-control" placeholder="บัญชี G/L"></td>
                                        <td>
                                            <select class="form-control">
                                                <option value="D">D</option>
                                                <option value="C">C</option>
                                            </select>
                                        </td>
                                        <td><input type="number" class="form-control" placeholder="จำนวนสกุลเงินเอกสาร"></td>
                                        <td>
                                            <button class="btn btn-info" onclick="showModal(this)">เพิ่มเติม</button>
                                            <button class="btn btn-danger" onclick="deleteRow(this)">ลบ</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <button class="btn btn-primary" onclick="addRow()">เพิ่มแถว</button>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="dataModal" tabindex="-1" aria-labelledby="dataModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="dataModalLabel">ข้อมูลเพิ่มเติม</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span>&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="additionalDataForm">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="calculate_tax" name="calculate_tax">
                                            <label class="form-check-label" for="calculate_tax">คำนวณภาษี</label>
                                        </div>
                                        <div class="mb-3">
                                            <label for="business_stablishment" class="form-label">ที่ประกอบธุรกิจ</label>
                                            <input type="text" class="form-control" id="business_stablishment" name="business_stablishment">
                                        </div>
                                        <div class="mb-3">
                                            <label for="business_type_id" class="form-label">ประเภทธุรกิจ</label>
                                            <select class="form-control" id="business_type_id" name="business_type_id" required>
                                                <!-- Dynamic options will be populated here -->
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="determination" class="form-label">การกำหนด</label>
                                            <input type="text" class="form-control" id="determination" name="determination">
                                        </div>
                                        <div class="mb-3">
                                            <label for="description" class="form-label">ข้อความ</label>
                                            <input type="text" class="form-control" id="description" name="description">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                                    <button type="button" class="btn btn-primary" onclick="saveAdditionalData()">บันทึกข้อมูล</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        let dataRows = [];

                        // Function to add a new row
                        function addRow() {
                            const tableBody = document.getElementById('tableBody');
                            const row = document.createElement('tr');
                            row.innerHTML = `
            <td><input type="text" class="form-control" placeholder="บัญชี G/L"></td>
            <td>
                <select class="form-control">
                    <option value="D">D</option>
                    <option value="C">C</option>
                </select>
            </td>
            <td><input type="number" class="form-control" placeholder="จำนวนสกุลเงินเอกสาร"></td>
            <td>
                <button class="btn btn-info" onclick="showModal(this)">เพิ่มเติม</button>
                <button class="btn btn-danger" onclick="deleteRow(this)">ลบ</button>
            </td>
        `;
                            tableBody.appendChild(row);
                            dataRows.push({}); // Add an empty object for the new row
                        }

                        // Function to delete a row
                        function deleteRow(button) {
                            const rowIndex = button.parentNode.parentNode.rowIndex - 1;
                            document.getElementById('datatables').deleteRow(rowIndex + 1); // Delete the row from the table
                            dataRows.splice(rowIndex, 1); // Remove the corresponding data
                        }

                        let currentRowIndex;
                        // Function to show modal and edit additional data
                        function showModal(button) {
                            currentRowIndex = button.parentNode.parentNode.rowIndex - 1;
                            $('#dataModal').modal('show');
                        }

                        // Function to save the additional data from the modal
                        function saveAdditionalData() {
                            const form = document.getElementById('additionalDataForm');
                            const formData = new FormData(form);
                            let additionalData = {};
                            formData.forEach((value, key) => {
                                additionalData[key] = value;
                            });
                            additionalData['calculate_tax'] = document.getElementById('calculate_tax').checked ? 1 : 0;

                            // Merge additional data with the existing row data
                            const row = document.getElementById('datatables').rows[currentRowIndex + 1];
                            const glAccount = row.cells[0].querySelector('input').value;
                            const dcType = row.cells[1].querySelector('select').value;
                            const amount = row.cells[2].querySelector('input').value;

                            // Flatten the data into a single object
                            dataRows[currentRowIndex] = {
                                gl_account: glAccount,
                                dc_type: dcType,
                                amount: amount,
                                calculate_tax: additionalData.calculate_tax,
                                business_stablishment: additionalData.business_stablishment,
                                business_type_id: additionalData.business_type_id,
                                determination: additionalData.determination,
                                description: additionalData.description
                            };
                            console.log(dataRows); // For debugging, you can remove this later
                            $('#dataModal').modal('hide');
                        }
                    </script>

                </div>

            </div>
        </section>

    </main><!-- End #main -->

    <?php include_once '../components/footer.php' ?>

    <script src="<?= $path ?>js/general_ledgers/general_ledger_create.js"></script>
    <script src="<?= $path ?>js/common/convert_form_data_to_json.js"></script>
    <script src="<?= $path ?>js/common/get_query_param.js"></script>
    <script src="<?= $path ?>js/common/handle_error.js"></script>

</body>

</html>