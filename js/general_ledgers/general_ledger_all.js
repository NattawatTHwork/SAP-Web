document.addEventListener("DOMContentLoaded", async function () {
    handleGetAll();

    const sessionToken = await getSessionToken();

    await handleGetCompanyIds(sessionToken.token);
    await handleGetDocumentTypes(sessionToken.token); // Fetch document types
    await handleGetBranchNumbers(sessionToken.token); // Fetch branch numbers
    await handleGetCurrencies(sessionToken.token);    // Fetch currencies

    // เพิ่ม event listener เมื่อฟอร์มค้นหาถูก submit
    document.getElementById('searchForm').addEventListener('submit', function (event) {
        event.preventDefault(); // ป้องกันการ reload หน้า
        handleGetAll(event); // เรียก handleGetAll เพื่อทำการค้นหา
    });
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

function populateCompanyIdOptions(data) {
    const companyIdSelect = document.getElementById('company_id_search');
    if (!companyIdSelect) return;

    companyIdSelect.innerHTML = '<option value="">เลือกบริษัท</option>';

    if (data.status === 'success') {
        data.data.forEach(company => {
            const option = document.createElement('option');
            option.value = company.company_id;
            option.textContent = company.company_code;
            companyIdSelect.appendChild(option);
        });
    } else {
        handleError(data.message);
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

function handleGetAll(event) {
    if (event) {
        event.preventDefault();
    }

    const formData = {
        company_id: document.getElementById('company_id_search').value,
        document_date: document.getElementById('document_date').value,
        posting_date: document.getElementById('posting_date').value,
        document_type_id: document.getElementById('document_type_id').value,
        reference: document.getElementById('reference').value,
        document_header_text: document.getElementById('document_header_text').value,
        currency_id: document.getElementById('currency_id').value,
        branch_number_id: document.getElementById('branch_number_id').value
    };

    getSessionToken()
        .then(mySession => fetchData(mySession.token, formData))
        .then(data => displayTables(data))
        .catch(error => handleError(error));
}

function fetchData(token, formData) {
    // ใช้ POST ในการส่งข้อมูลการค้นหาไปยัง API
    return fetch(apiUrl + 'general_ledgers/get_general_ledger_all.php', {
        method: 'POST',
        headers: {
            'Authorization': `Bearer ${token}`,
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(formData) // ส่งข้อมูลการค้นหาจากฟอร์มไปใน body ของ request
    })
        .then(response => response.json());
}

function displayTables(datas) {
    let html = '';
    const noDataHtml = '<tr><td></td><td></td><td></td><td></td><td>ไม่มีข้อมูล</td><td></td><td></td><td></td><td></td></tr>';
    if ($.fn.DataTable.isDataTable('#datatables')) {
        $('#datatables').DataTable().clear().destroy();
    }
    if (datas.status === 'success') {
        if (datas.data.length > 0) {
            datas.data.forEach(data => {
                const documentDateThai = formatDateToThai(data.document_date);
                const postingDateThai = formatDateToThai(data.posting_date);

                html += '<tr>';
                html += `<td>${data.company_code}</td>
                    <td>${documentDateThai}</td>
                    <td>${postingDateThai}</td>
                    <td>${data.document_type_code}</td>
                    <td>${data.document_sequence ?? ''}</td>
                    <td>${data.year ?? ''}</td>
                    <td>${data.reference}</td>
                    <td>${data.document_header_text}</td>
                    <td>${data.currency_code ?? ''}</td>
                    <td>${data.branch_number_code ?? ''}</td>

                    <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ตัวเลือก
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="general_ledger_update.php?general_ledger_id=${data.general_ledger_id}">แก้ไข</a></li>
                                <li><a class="dropdown-item" href="#" onclick="delete_data('${data.general_ledger_id}', '${data.document_date}'); return false;">ลบ</a></li>
                            </ul>
                        </div>
                    </td>`;
                html += '</tr>';
            });
        } else {
            html = noDataHtml;
        }
    } else {
        html = noDataHtml;
    }
    document.querySelector('tbody').innerHTML = html;
    $(document).ready(function () {
        $('#datatables').DataTable({
            "order": []
        });
    });
}

function delete_data(general_ledgerId, gl_account) {
    Swal.fire({
        title: gl_account,
        text: 'คุณต้องการลบใช่ไหม',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'ลบ',
        cancelButtonText: 'ยกเลิก'
    }).then((result) => {
        if (result.isConfirmed) {
            getSessionToken()
                .then(mySession => fetchDelete(general_ledgerId, mySession.token))
                .then(response => handleDeleteResponse(response))
                .catch(error => handleError(error));
        }
    });
}

function fetchDelete(general_ledgerId, token) {
    return fetch(apiUrl + 'general_ledgers/delete_general_ledger.php', {
        method: 'POST',
        headers: {
            'Authorization': `Bearer ${token}`,
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ general_ledger_id: general_ledgerId })
    })
        .then(response => response.json());
}

function handleDeleteResponse(response) {
    if (response.status === 'success') {
        Swal.fire({
            title: 'สำเร็จ',
            icon: 'success'
        }).then(() => {
            handleGetAll();
        });
    } else {
        Swal.fire({
            title: 'เกิดข้อผิดพลาด',
            icon: 'error'
        });
    }
}