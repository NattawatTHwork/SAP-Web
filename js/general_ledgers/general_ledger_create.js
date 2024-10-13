document.addEventListener("DOMContentLoaded", async function () {
    try {
        const sessionToken = await getSessionToken();

        await handleGetCompanyIds(sessionToken.token);
        await handleGetCentralGeneralLedgers(sessionToken.token);
        await handleGetBusinessTypes(sessionToken.token);
        await handleGetDocumentTypes(sessionToken.token); // Fetch document types
        await handleGetBranchNumbers(sessionToken.token); // Fetch branch numbers
        await handleGetCurrencies(sessionToken.token);    // Fetch currencies
        await handleGetTransactionPeriods(sessionToken.token);
    } catch (error) {
        handleError(error);
    }
});

// Fetch and populate company IDs
async function handleGetCompanyIds(token) {
    try {
        const data = await fetchCompanyIds(token);
        populateCompanyIdOptions(data);
    } catch (error) {
        handleError(error);
    }
}

function fetchCompanyIds(token) {
    return fetch(apiUrl + 'companies/get_company_all.php', {
        method: 'GET',
        headers: {
            'Authorization': `Bearer ${token}`
        }
    }).then(response => response.json());
}

let companies = [];
document.getElementById('company_id').addEventListener('change', updateCompanyCode);

function populateCompanyIdOptions(data) {
    const companyIdSelect = document.getElementById('company_id');
    if (!companyIdSelect) return;

    companyIdSelect.innerHTML = '';

    if (data.status === 'success') {
        data.data.forEach(company => {
            const option = document.createElement('option');
            option.value = company.company_id;
            option.textContent = company.company_code;
            companyIdSelect.appendChild(option);
            companies.push({
                id: company.company_id,
                code: company.company_code
            });
        });

        if (data.data.length > 0) {
            companyIdSelect.value = data.data[0].company_id;
            updateCompanyCode();
        }
    } else {
        handleError(data.message);
    }
}

function updateCompanyCode() {
    const companySelect = document.getElementById('company_id');
    const selectedCompanyId = companySelect.value;
    const selectedCompany = companies.find(company => company.id === selectedCompanyId);
    const companyCodeInput = document.getElementById('company_code');

    if (selectedCompany) {
        companyCodeInput.value = selectedCompany.code;
    } else {
        companyCodeInput.value = '';
    }
}

// Fetch and populate document types
async function handleGetDocumentTypes(token) {
    try {
        const data = await fetchDocumentTypes(token);
        populateDocumentTypeOptions(data);
    } catch (error) {
        handleError(error);
    }
}

function fetchDocumentTypes(token) {
    return fetch(apiUrl + 'document_types/get_document_type_all.php', {
        method: 'GET',
        headers: {
            'Authorization': `Bearer ${token}`
        }
    }).then(response => response.json());
}

function populateDocumentTypeOptions(data) {
    const documentTypeSelect = document.getElementById('document_type_id');
    if (!documentTypeSelect) return;

    documentTypeSelect.innerHTML = '<option value="">เลือกประเภทเอกสาร</option>';

    if (data.status === 'success') {
        data.data.forEach(documentType => {
            const option = document.createElement('option');
            option.value = documentType.document_type_id;
            option.textContent = documentType.document_type_code;
            documentTypeSelect.appendChild(option);
        });
    } else {
        handleError(data.message);
    }
}

// Fetch and populate branch numbers
async function handleGetBranchNumbers(token) {
    try {
        const data = await fetchBranchNumbers(token);
        populateBranchNumberOptions(data);
    } catch (error) {
        handleError(error);
    }
}

function fetchBranchNumbers(token) {
    return fetch(apiUrl + 'branch_numbers/get_branch_number_all.php', {
        method: 'GET',
        headers: {
            'Authorization': `Bearer ${token}`
        }
    }).then(response => response.json());
}

function populateBranchNumberOptions(data) {
    const branchNumberSelect = document.getElementById('branch_number_id');
    if (!branchNumberSelect) return;

    branchNumberSelect.innerHTML = '<option value="">เลือกเลขที่สาขา</option>';

    if (data.status === 'success') {
        data.data.forEach(branchNumber => {
            const option = document.createElement('option');
            option.value = branchNumber.branch_number_id;
            option.textContent = branchNumber.branch_number_code;
            branchNumberSelect.appendChild(option);
        });
    } else {
        handleError(data.message);
    }
}

// Fetch and populate currencies
async function handleGetCurrencies(token) {
    try {
        const data = await fetchCurrencies(token);
        populateCurrencyOptions(data);
    } catch (error) {
        handleError(error);
    }
}

function fetchCurrencies(token) {
    return fetch(apiUrl + 'currencies/get_currency_all.php', {
        method: 'GET',
        headers: {
            'Authorization': `Bearer ${token}`
        }
    }).then(response => response.json());
}

function populateCurrencyOptions(data) {
    const currencySelect = document.getElementById('currency_id');
    if (!currencySelect) return;

    currencySelect.innerHTML = '<option value="">เลือกสกุลเงิน</option>';

    if (data.status === 'success') {
        data.data.forEach(currency => {
            const option = document.createElement('option');
            option.value = currency.currency_id;
            option.textContent = currency.currency_code;
            currencySelect.appendChild(option);
        });
    } else {
        handleError(data.message);
    }
}

// Fetch and populate Transaction Periods
let TransactionPeriod = '';

async function handleGetTransactionPeriods(token) {
    try {
        const data = await fetchTransactionPeriods(token);
        TransactionPeriod = data.data[0];
    } catch (error) {
        handleError(error);
    }
}

function fetchTransactionPeriods(token) {
    return fetch(apiUrl + 'transaction_periods/get_transaction_period_all.php', {
        method: 'GET',
        headers: {
            'Authorization': `Bearer ${token}`
        }
    }).then(response => response.json());
}

// ฟังก์ชันดึงข้อมูลบัญชี G/L ---------------------------------------------------------------------------
let centralGeneralLedgers = [];
let businessTypes = [];

async function handleGetCentralGeneralLedgers(token) {
    try {
        const data = await fetchCentralGeneralLedgers(token);
        centralGeneralLedgers = data.data;
        populateCentralGeneralLedgerOptions(data);
    } catch (error) {
        handleError(error);
    }
}

function fetchCentralGeneralLedgers(token) {
    return fetch(apiUrl + 'central_general_ledgers/get_central_general_ledger_all.php', {
        method: 'GET',
        headers: {
            'Authorization': `Bearer ${token}`
        }
    }).then(response => response.json());
}

function populateCentralGeneralLedgerOptions(data) {
    const centralGeneralLedgerSelect = document.getElementById('central_general_ledger_id');
    if (!centralGeneralLedgerSelect) return;

    centralGeneralLedgerSelect.innerHTML = '';

    if (data.status === 'success') {
        data.data.forEach(ledger => {
            const option = document.createElement('option');
            option.value = ledger.central_general_ledger_id;
            option.textContent = ledger.gl_account;
            centralGeneralLedgerSelect.appendChild(option);
        });
    } else {
        handleError(data.message);
    }
}

// ฟังก์ชันดึงข้อมูลประเภทธุรกิจ -----------------------------------------------------------------------
async function handleGetBusinessTypes(token) {
    try {
        const data = await fetchBusinessTypes(token);
        businessTypes = data.data;
        const businessTypeSelect = document.getElementById('business_type_id');
        businessTypeSelect.innerHTML = generateBusinessTypeOptions();
    } catch (error) {
        handleError(error);
    }
}

function fetchBusinessTypes(token) {
    return fetch(apiUrl + 'business_types/get_business_type_all.php', {
        method: 'GET',
        headers: {
            'Authorization': `Bearer ${token}`
        }
    }).then(response => response.json());
}

function populateBusinessTypeOptions(data) {
    const businessTypeSelect = document.getElementById('business_type_id');
    if (!businessTypeSelect) return;

    businessTypeSelect.innerHTML = '';

    if (data.status === 'success') {
        data.data.forEach(businessType => {
            const option = document.createElement('option');
            option.value = businessType.business_type_id;
            option.textContent = `${businessType.business_type_code} - ${businessType.description}`;
            businessTypeSelect.appendChild(option);
        });
    } else {
        handleError(data.message);
    }
}

// ฟังก์ชันสร้างแถวในตาราง
let dataRows = [];

function addRow() {
    const tableBody = document.getElementById('tableBody');
    const row = document.createElement('tr');

    row.innerHTML = ` 
        <td>
            <select class="form-control" onchange="updateRowData(this, 0)">
                ${generateCentralGeneralLedgerOptions()}
            </select>
        </td>
        <td>
            <select class="form-control" onchange="updateRowData(this, 1)">
                <option value="">เลือก</option>
                <option value="S">S เดบิต</option>
                <option value="H">H เครดิต</option>
            </select>
        </td>
        <td><input type="number" class="form-control" placeholder="จำนวนสกุลเงินเอกสาร" oninput="updateRowData(this, 2)"></td>
        <td>
            <button class="btn btn-info" onclick="showModal(this)">เพิ่มเติม</button>
            <button class="btn btn-danger" onclick="deleteRow(this)">ลบ</button>
        </td>
    `;

    tableBody.appendChild(row);

    dataRows.push({
        central_general_ledger_id: "",
        dc_type: "",
        amount: "",
        calculate_tax: "f",
        business_stablishment: "",
        business_type_id: "",
        determination: "",
        description: ""
    });

    updateTotals();
}

// สร้าง option สำหรับบัญชี G/L ในแถวใหม่
function generateCentralGeneralLedgerOptions() {
    const emptyOption = `<option value="">เลือกบัญชีทั่วไป</option>`;

    return emptyOption + centralGeneralLedgers
        .map(ledger => `<option value="${ledger.central_general_ledger_id}">${ledger.gl_account}</option>`)
        .join('');
}

function generateBusinessTypeOptions() {
    const emptyOption = `<option value="">เลือกประเภทธุรกิจ</option>`;

    return emptyOption + businessTypes
        .map(type => `<option value="${type.business_type_id}">${type.business_type_code} - ${type.description}</option>`)
        .join('');
}

// ฟังก์ชันอัปเดตข้อมูลแถว
function updateRowData(input, fieldIndex) {
    const rowIndex = input.parentNode.parentNode.rowIndex - 1;

    if (rowIndex >= 0 && rowIndex < dataRows.length) {
        const value = input.value;

        switch (fieldIndex) {
            case 0:
                dataRows[rowIndex].central_general_ledger_id = value;
                break;
            case 1:
                dataRows[rowIndex].dc_type = value;
                break;
            case 2:
                dataRows[rowIndex].amount = value;
                break;
        }

        updateTotals();
    }
}

function updateAdditionalData(input) {
    let value;

    if (input.type === 'checkbox') {
        value = input.checked ? "t" : "f";
    } else {
        value = input.value;
    }

    const fieldName = input.name;

    if (currentRowIndex >= 0 && currentRowIndex < dataRows.length) {
        dataRows[currentRowIndex][fieldName] = value;
        console.log(dataRows);
    } else {
        console.error("Invalid currentRowIndex: ", currentRowIndex);
    }
}

// ฟังก์ชันลบแถว
function deleteRow(button) {
    const row = button.parentNode.parentNode;
    const rowIndex = row.rowIndex - 1;

    document.getElementById('datatables').deleteRow(row.rowIndex);

    if (rowIndex >= 0 && rowIndex < dataRows.length) {
        dataRows.splice(rowIndex, 1);
    }

    updateTotals();
}

function showModal(button) {
    currentRowIndex = button.parentNode.parentNode.rowIndex - 1;

    if (currentRowIndex >= 0 && currentRowIndex < dataRows.length) {
        const rowData = dataRows[currentRowIndex];

        document.getElementById('calculate_tax').checked = rowData.calculate_tax === "t";
        document.getElementById('business_stablishment').value = rowData.business_stablishment || "";

        const businessTypeSelect = document.getElementById('business_type_id');
        if (rowData.business_type_id) {
            businessTypeSelect.value = rowData.business_type_id;
        } else {
            if (businessTypeSelect.options.length > 0) {
                businessTypeSelect.value = businessTypeSelect.options[0].value;
            }
        }

        document.getElementById('determination').value = rowData.determination || "";
        document.getElementById('description').value = rowData.description || "";
    }

    $('#dataModal').modal('show');
}

function updateTotals() {
    const debitTotal = dataRows.reduce((sum, row) => {
        return row.dc_type === 'S' ? sum + parseFloat(row.amount) || 0 : sum;
    }, 0);

    const creditTotal = dataRows.reduce((sum, row) => {
        return row.dc_type === 'H' ? sum + parseFloat(row.amount) || 0 : sum;
    }, 0);

    document.getElementById('debit_total').value = debitTotal.toFixed(2);
    document.getElementById('credit_total').value = creditTotal.toFixed(2);
}

function calculateTotals() {
    let debitTotal = 0;
    let creditTotal = 0;

    dataRows.forEach(row => {
        if (row.dc_type === 'S') {
            debitTotal += Number(row.amount);
        } else if (row.dc_type === 'H') {
            creditTotal += Number(row.amount);
        }
    });

    return { debitTotal, creditTotal };
}

function isPostingDateInPeriod(postingDate, periodFromFirst, periodFromFirstYear, periodToFirst, periodToFirstYear) {
    const postingDateObj = new Date(postingDate);
    const periodFromDate = new Date(`${periodFromFirstYear}-${padZero(periodFromFirst)}-01`);
    const periodToDate = new Date(`${periodToFirstYear}-${padZero(periodToFirst)}-01`);
    periodToDate.setMonth(periodToDate.getMonth() + 1);

    return postingDateObj >= periodFromDate && postingDateObj < periodToDate;
}

function padZero(number) {
    return number < 10 ? '0' + number : number;
}

// เพิ่มข้อมูลทั่วไป
function saveGeneralLedger() {
    const submitButton = document.getElementById('submitBtn');
    submitButton.disabled = true;

    const basicData = convertFormDataToJson(new FormData(document.getElementById('basic_data')));
    const detailData = convertFormDataToJson(new FormData(document.getElementById('detail_data')));

    const generalLedgerData = { ...basicData, ...detailData };

    if (!generalLedgerData.document_date) {
        Swal.fire({
            icon: 'error',
            title: 'วันที่เอกสารห้ามเป็นค่าว่าง!',
            text: 'กรุณากรอกวันที่เอกสารก่อนดำเนินการต่อ',
        }).then(() => {
            submitButton.disabled = false;
        });
        return;
    }

    // ตรวจสอบว่ามี TransactionPeriod และ posting_date หรือไม่
    if (TransactionPeriod && generalLedgerData.posting_date) {
        const periodFromFirst = TransactionPeriod.period_from_first;
        const periodFromFirstYear = TransactionPeriod.period_from_first_year;
        const periodToFirst = TransactionPeriod.period_to_first;
        const periodToFirstYear = TransactionPeriod.period_to_first_year;

        // ตรวจสอบว่า posting_date อยู่ในช่วงเวลาที่กำหนดหรือไม่
        if (!isPostingDateInPeriod(generalLedgerData.posting_date, periodFromFirst, periodFromFirstYear, periodToFirst, periodToFirstYear)) {
            Swal.fire({
                icon: 'error',
                title: 'วันที่ผ่านรายการไม่อยู่ในช่วงเวลาที่กำหนด!',
                text: `กรุณากรอกวันที่ที่อยู่ในช่วง ${periodFromFirst}/${periodFromFirstYear} ถึง ${periodToFirst}/${periodToFirstYear}`,
            }).then(() => {
                submitButton.disabled = false;
            });
            return;
        }
    } else {
        Swal.fire({
            icon: 'error',
            title: 'ไม่พบข้อมูลช่วงเวลา!',
            text: 'กรุณาตรวจสอบข้อมูลช่วงเวลาหรือวันที่ผ่านรายการ',
        }).then(() => {
            submitButton.disabled = false;
        });
        return;
    }

    if (!generalLedgerData.document_type_id) {
        Swal.fire({
            icon: 'error',
            title: 'ประเภทเอกสารห้ามเป็นค่าว่าง!',
            text: 'กรุณาเลือกประเภทเอกสารก่อนดำเนินการต่อ',
        }).then(() => {
            submitButton.disabled = false;
        });
        return;
    }

    if (!generalLedgerData.company_id) {
        Swal.fire({
            icon: 'error',
            title: 'รหัสบริษัทห้ามเป็นค่าว่าง!',
            text: 'กรุณาเลือกรหัสบริษัทก่อนดำเนินการต่อ',
        }).then(() => {
            submitButton.disabled = false;
        });
        return;
    }

    for (let i = 0; i < dataRows.length; i++) {
        const row = dataRows[i];

        if (!row.central_general_ledger_id) {
            Swal.fire({
                icon: 'error',
                title: 'บัญชี G/L ห้ามเป็นค่าว่าง!',
                text: `กรุณาเลือกรายการบัญชี G/L สำหรับแถวที่ ${i + 1}`,
            }).then(() => {
                submitButton.disabled = false;
            });
            return;
        }

        if (!row.dc_type) {
            Swal.fire({
                icon: 'error',
                title: 'ประเภทเดบิต/เครดิต ห้ามเป็นค่าว่าง!',
                text: `กรุณาเลือกประเภทเดบิตหรือเครดิตสำหรับแถวที่ ${i + 1}`,
            }).then(() => {
                submitButton.disabled = false;
            });
            return;
        }

        if (!row.amount || parseFloat(row.amount) === 0) {
            Swal.fire({
                icon: 'error',
                title: 'จำนวนเงินห้ามเป็นค่าว่างหรือศูนย์!',
                text: `กรุณากรอกจำนวนเงินสำหรับแถวที่ ${i + 1}`,
            }).then(() => {
                submitButton.disabled = false;
            });
            return;
        }
    }

    const { debitTotal, creditTotal } = calculateTotals();

    if (debitTotal !== creditTotal) {
        Swal.fire({
            icon: 'warning',
            title: 'ยอดรวมเดบิตและเครดิตไม่เท่ากัน!',
            text: `ยอดรวมเดบิต: ${debitTotal}, ยอดรวมเครดิต: ${creditTotal}`,
        }).then(() => {
            submitButton.disabled = false;
        });
        return;
    }

    const filteredDataRows = dataRows.filter(row => !isEmptyRow(row));

    getSessionToken()
        .then(mySession => createData(mySession.token, generalLedgerData, filteredDataRows))
        // .then(res => console.log(res))
        .then(response => handleCreateResponse(response))
        .catch(error => handleError(error))
        .finally(() => {
            submitButton.disabled = false;
        });
}

function isEmptyRow(row) {
    return (
        row.central_general_ledger_id === "" &&
        row.dc_type === "" &&
        row.amount === "" &&
        row.calculate_tax === "false" &&
        row.business_stablishment === "" &&
        row.business_type_id === "" &&
        row.determination === "" &&
        row.description === ""
    );
}

function createData(token, generalLedgerData, dataRows) {
    return fetch(apiUrl + 'general_ledgers/create_general_ledger.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': `Bearer ${token}`
        },
        body: JSON.stringify({
            ...generalLedgerData,
            transactions: dataRows
        })
    })
        .then(response => response.json());
}

function handleCreateResponse(data) {
    if (data.status === 'success') {
        Swal.fire({
            icon: 'success',
            title: 'สำเร็จ',
        })
            .then(() => {
                window.location.href = 'general_ledger_all.php';
            });
    } else {
        Swal.fire({
            icon: 'error',
            title: 'เกิดข้อผิดพลาด',
        });
    }
}