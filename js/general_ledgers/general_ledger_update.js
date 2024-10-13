document.addEventListener("DOMContentLoaded", async function () {
    try {
        const sessionToken = await getSessionToken();
        const general_ledger_id = getQueryParam('general_ledger_id');

        await handleGetCompanyIds(sessionToken.token);
        await handleGetDocumentTypes(sessionToken.token); // Fetch document types
        await handleGetBranchNumbers(sessionToken.token); // Fetch branch numbers
        await handleGetCurrencies(sessionToken.token);    // Fetch currencies
        await handleGetGeneralLedger(sessionToken.token, general_ledger_id);
        await handleGetGLTransactionAll(sessionToken.token, general_ledger_id);
        await handleGetTransactionPeriods(sessionToken.token);

    } catch (error) {
        handleError(error);
    }
});

// ฟังก์ชันดึงข้อมูลบริษัท ----------------------------------------------------------------
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

// แสดงข้อมูลพื้นฐาน
function handleGetGeneralLedger(token, general_ledger_id) {
    fetchGeneralLedgerData(token, general_ledger_id)
        .then(data => showGeneralLedgerData(data))
        .catch(error => handleError(error));
}

function fetchGeneralLedgerData(token, general_ledger_id) {
    return fetch(apiUrl + 'general_ledgers/get_general_ledger.php?general_ledger_id=' + general_ledger_id, {
        method: 'GET',
        headers: {
            'Authorization': `Bearer ${token}`
        }
    })
        .then(response => response.json());
}

function showGeneralLedgerData(data) {
    if (data.status === 'success') {
        const general_ledger = data.data;

        document.getElementById('general_ledger_id').value = general_ledger.general_ledger_id;
        document.getElementById('document_date').value = general_ledger.document_date;
        document.getElementById('posting_date').value = general_ledger.posting_date;
        document.getElementById('reference').value = general_ledger.reference;
        document.getElementById('document_header_text').value = general_ledger.document_header_text;
        document.getElementById('document_type_id').value = general_ledger.document_type_id;
        document.getElementById('branch_number_id').value = general_ledger.branch_number_id;
        document.getElementById('currency_id').value = general_ledger.currency_id;
        document.getElementById('company_id').value = general_ledger.company_id;
        document.getElementById('company_code').value = general_ledger.company_code;
        document.getElementById('exchange_rate').value = general_ledger.exchange_rate;
        document.getElementById('translatn_date').value = general_ledger.translatn_date;
        document.getElementById('trading_part_ba').value = general_ledger.trading_part_ba;
    } else {
        handleError(data.message);
    }
}

// แสดงข้อมูล General Ledger Transactions
function handleGetGLTransactionAll(token, general_ledger_id) {
    fetchGLTransactionData(token, general_ledger_id)
        .then(data => displayTables(data))
        .catch(error => handleError(error));
}

function fetchGLTransactionData(token, general_ledger_id) {
    return fetch(apiUrl + 'gl_transactions/get_gl_transaction_all.php?general_ledger_id=' + general_ledger_id, {
        method: 'GET',
        headers: {
            'Authorization': `Bearer ${token}`
        }
    })
        .then(response => response.json());
}

// ฟังก์ชันสร้างแถวในตาราง
let dataRows = [];

function displayTables(data) {
    if (data.status === 'success') {
        const tableBody = document.getElementById('tableBody');
        tableBody.innerHTML = ''; // Clear existing rows

        dataRows = []; // Reset dataRows to store new data

        data.data.forEach(item => {
            const row = document.createElement('tr');

            row.innerHTML = ` 
                <td>
                    <input type="number" class="form-control" placeholder="จำนวนสกุลเงินเอกสาร" value="${item.gl_account}" disabled>
                </td>
                <td>
                    <select class="form-control" disabled>
                        <option value="">เลือก</option>
                        <option value="S" ${item.dc_type === 'S' ? 'selected' : ''}>S เดบิต</option>
                        <option value="H" ${item.dc_type === 'H' ? 'selected' : ''}>H เครดิต</option>
                    </select>
                </td>
                <td>
                    <input type="number" class="form-control" placeholder="จำนวนสกุลเงินเอกสาร" value="${item.amount}" disabled>
                </td>
                <td>
                    <button class="btn btn-info" onclick="showModal(this)">เพิ่มเติม</button>
                </td>
            `;

            tableBody.appendChild(row);

            dataRows.push({
                gl_transaction_id: item.gl_transaction_id,
                central_general_ledger_id: item.central_general_ledger_id,
                dc_type: item.dc_type,
                amount: item.amount,
                calculate_tax: item.calculate_tax || "false",
                business_stablishment: item.business_stablishment || "",
                business_type_id: item.business_type_code + ' - ' + item.bus_description || "",
                determination: item.determination || "",
                description: item.gl_description || ""
            });
        });

        updateTotals();
    } else {
        handleError(data.message);
    }
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

    getSessionToken()
        .then(mySession => updateData(mySession.token, generalLedgerData))
        .then(response => handleUpdateResponse(response))
        .catch(error => handleError(error))
        .finally(() => {
            submitButton.disabled = false;
        });
}

function updateData(token, generalLedgerData) {
    return fetch(apiUrl + 'general_ledgers/update_general_ledger.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': `Bearer ${token}`
        },
        body: JSON.stringify(generalLedgerData)
    })
        .then(response => response.json());
}

function handleUpdateResponse(data) {
    if (data.status === 'success') {
        Swal.fire({
            icon: 'success',
            title: 'สำเร็จ',
        })
            .then(() => {
                const sessionToken = getSessionToken();
                const general_ledger_id = document.getElementById('general_ledger_id').value;

                sessionToken.then(token => handleGetGeneralLedger(token.token, general_ledger_id));
            });
    } else {
        Swal.fire({
            icon: 'error',
            title: 'เกิดข้อผิดพลาด',
        });
    }
}