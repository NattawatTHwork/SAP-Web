// ดึงข้อมูล
document.addEventListener("DOMContentLoaded", async function () {
    try {
        const sessionToken = await getSessionToken();

        await handleGetCompanyIds(sessionToken.token);
    } catch (error) {
        handleError(error);
    }
});

function handleGetCompanyIds(token) {
    fetchCompanyIds(token)
        .then(data => populateCompanyIdOptions(data))
        .catch(error => handleError(error));
}

function fetchCompanyIds(token) {
    return fetch(apiUrl + 'companies/get_company_all.php', {
        method: 'GET',
        headers: {
            'Authorization': `Bearer ${token}`
        }
    })
        .then(response => response.json());
}

let companies = [];
document.getElementById('company_id').addEventListener('change', updateCompanyCode);

function populateCompanyIdOptions(data) {
    const CompanyIdSelect = document.getElementById('company_id');
    CompanyIdSelect.innerHTML = '';

    if (data.status === 'success') {
        data.data.forEach(company => {
            const option = document.createElement('option');
            option.value = company.company_id;
            option.textContent = company.company_code;
            CompanyIdSelect.appendChild(option);
            companies.push({
                id: company.company_id,
                code: company.company_code
            });
        });

        if (data.data.length > 0) {
            CompanyIdSelect.value = data.data[0].company_id;
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

// สร้างตารางด้านล่าง


// เพิ่มข้อมูลทั่วไป
document.getElementById('basic_data').addEventListener('submit', function handleFormSubmit(event) {
    event.preventDefault();

    const submitButton = document.getElementById('submitBtn');
    submitButton.disabled = true;

    const formData = new FormData(event.target);
    const jsonData = convertFormDataToJson(formData);

    getSessionToken()
        .then(mySession => createData(mySession.token, jsonData))
        .then(response => handleCreateResponse(response))
        .catch(error => handleError(error))
        .finally(() => {
            submitButton.disabled = false;
        });
});

function createData(token, jsonData) {
    return fetch(apiUrl + 'general_ledgers/create_general_ledger.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': `Bearer ${token}`
        },
        body: JSON.stringify(jsonData)
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