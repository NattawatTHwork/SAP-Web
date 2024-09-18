document.addEventListener("DOMContentLoaded", async function () {
    try {
        const sessionToken = await getSessionToken();
        // await Promise.all([
        //     await handleGetCompanyIds(sessionToken.token)
        // ]);

        await handleGetDetail(sessionToken.token);
    } catch (error) {
        handleError(error);
    }
});

// function handleGetCompanyIds(token) {
//     fetchCompanyIds(token)
//         .then(data => populateCompanyIdOptions(data))
//         .catch(error => handleError(error));
// }

// function fetchCompanyIds(token) {
//     return fetch(apiUrl + 'companies/get_company_all.php', {
//         method: 'GET',
//         headers: {
//             'Authorization': `Bearer ${token}`
//         }
//     })
//         .then(response => response.json());
// }

// function populateCompanyIdOptions(data) {
//     const CompanyIdSelect = document.getElementById('company_id');
//     if (data.status === 'success') {
//         data.data.forEach(company => {
//             const option = document.createElement('option');
//             option.value = company.company_id;
//             option.textContent = company.company_code;
//             CompanyIdSelect.appendChild(option);
//         });
//     } else {
//         handleError(data.message);
//     }
// }

function handleGetDetail(token) {
    fetchData(token)
        .then(data => showData(data))
        .catch(error => handleError(error));
}

function fetchData(token) {
    const general_ledgerId = getQueryParam('general_ledger_id');
    return fetch(apiUrl + 'general_ledgers/get_general_ledger.php?general_ledger_id=' + general_ledgerId, {
        method: 'GET',
        headers: {
            'Authorization': `Bearer ${token}`
        }
    })
        .then(response => response.json());
}

function showData(data) {
    if (data.status === 'success') {
        const general_ledger = data.data;

        document.getElementById('general_ledger_id').value = general_ledger.general_ledger_id;
        document.getElementById('document_date').value = general_ledger.document_date;
        document.getElementById('posting_date').value = general_ledger.posting_date;
        document.getElementById('reference').value = general_ledger.reference;
        document.getElementById('document_header_text').value = general_ledger.document_header_text;
        document.getElementById('document_type').value = general_ledger.document_type;
        document.getElementById('intercompany_number').value = general_ledger.intercompany_number;
        document.getElementById('branch_number').value = general_ledger.branch_number;
        document.getElementById('currency').value = general_ledger.currency;
        document.getElementById('company_code').value = general_ledger.company_code;
    } else {
        handleError(data.message);
    }
}

document.getElementById('InputForm').addEventListener('submit', function handleFormSubmit(event) {
    event.preventDefault();

    const submitButton = document.getElementById('submitBtn');
    submitButton.disabled = true;

    const formData = new FormData(event.target);
    const jsonData = convertFormDataToJson(formData);

    getSessionToken()
        .then(mySession => updateData(mySession.token, jsonData))
        .then(response => handleUpdateResponse(response))
        .catch(error => handleError(error))
        .finally(() => {
            submitButton.disabled = false;
        });
});

function updateData(token, jsonData) {
    return fetch(apiUrl + 'general_ledgers/update_general_ledger.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': `Bearer ${token}`
        },
        body: JSON.stringify(jsonData)
    })
        .then(response => response.json());
}

function handleUpdateResponse(data) {
    const CentralGeneralLedgerId = getQueryParam('general_ledger_id');

    if (data.status === 'success') {
        Swal.fire({
            icon: 'success',
            title: texts.success,
        })
            .then(() => {
                window.location.href = 'general_ledger_update.php?general_ledger_id=' + CentralGeneralLedgerId;
            });
    } else {
        Swal.fire({
            icon: 'error',
            title: texts.error,
        });
    }
}