document.addEventListener("DOMContentLoaded", async function () {
    try {
        const sessionToken = await getSessionToken(); // เรียก sessionToken ครั้งเดียว

        await handleGetTransactionPeriodTypes(sessionToken.token);
        await handleGetPeriods(sessionToken.token);
        await handleGetDetail(sessionToken.token); // ส่ง token ไปใน handleGetDetail
    } catch (error) {
        handleError(error);
    }
});

function handleGetTransactionPeriodTypes(token) {
    fetchTransactionPeriodTypes(token)
        .then(data => populateTransactionPeriodTypeOptions(data))
        .catch(error => handleError(error));
}

function fetchTransactionPeriodTypes(token) {
    return fetch(apiUrl + 'transaction_period_types/get_transaction_period_type_all.php', {
        method: 'GET',
        headers: {
            'Authorization': `Bearer ${token}`
        }
    })
    .then(response => response.json());
}

function populateTransactionPeriodTypeOptions(data) {
    const TransactionPeriodTypeSelect = document.getElementById('transaction_period_type_id');
    if (data.status === 'success') {
        data.data.forEach(transaction_period_type => {
            const option = document.createElement('option');
            option.value = transaction_period_type.transaction_period_type_id;
            option.textContent = transaction_period_type.transaction_period_type_code;
            TransactionPeriodTypeSelect.appendChild(option);
        });
    } else {
        handleError(data.message);
    }
}

function handleGetPeriods(token) {
    fetchPeriods(token)
        .then(data => populatePeriodOptions(data))
        .catch(error => handleError(error));
}

function fetchPeriods(token) {
    const FiscalYearId = getQueryParam('fiscal_year_id');
    return fetch(apiUrl + 'periods/get_period_all.php?fiscal_year_id=' + FiscalYearId, {
        method: 'GET',
        headers: {
            'Authorization': `Bearer ${token}`
        }
    })
    .then(response => response.json());
}

function populatePeriodOptions(data) {
    const period_from_firstSelect = document.getElementById('period_from_first');
    const period_to_firstSelect = document.getElementById('period_to_first');
    const period_from_secondSelect = document.getElementById('period_from_second');
    const period_to_secondSelect = document.getElementById('period_to_second');

    if (data.status === 'success') {
        data.data.forEach(period => {
            const optionFromFirst = document.createElement('option');
            optionFromFirst.value = period.period_id;
            optionFromFirst.textContent = period.period_code;

            const optionToFirst = document.createElement('option');
            optionToFirst.value = period.period_id;
            optionToFirst.textContent = period.period_code;

            const optionFromSecond = document.createElement('option');
            optionFromSecond.value = period.period_id;
            optionFromSecond.textContent = period.period_code;

            const optionToSecond = document.createElement('option');
            optionToSecond.value = period.period_id;
            optionToSecond.textContent = period.period_code;

            period_from_firstSelect.appendChild(optionFromFirst);
            period_to_firstSelect.appendChild(optionToFirst);
            period_from_secondSelect.appendChild(optionFromSecond);
            period_to_secondSelect.appendChild(optionToSecond);
        });
    } else {
        handleError(data.message);
    }
}

function handleGetDetail(token) {
    fetchData(token)
        .then(data => showData(data))
        .catch(error => handleError(error));
}

function fetchData(token) {
    const TransactionPeriodId = getQueryParam('transaction_period_id');
    return fetch(apiUrl + 'transaction_periods/get_transaction_period.php?transaction_period_id=' + TransactionPeriodId, {
        method: 'GET',
        headers: {
            'Authorization': `Bearer ${token}`
        }
    })
    .then(response => response.json());
}

function showData(data) {
    if (data.status === 'success') {
        const period = data.data;

        document.getElementById('transaction_period_id').value = period.transaction_period_id;
        document.getElementById('transaction_period_type_id').value = period.transaction_period_type_id;
        document.getElementById('account_from').value = period.account_from;
        document.getElementById('account_to').value = period.account_to;
        document.getElementById('period_from_first').value = period.period_from_first;
        document.getElementById('period_from_first_year').value = period.period_from_first_year;
        document.getElementById('period_to_first').value = period.period_to_first;
        document.getElementById('period_to_first_year').value = period.period_to_first_year;
        document.getElementById('period_from_second').value = period.period_from_second;
        document.getElementById('period_from_second_year').value = period.period_from_second_year;
        document.getElementById('period_to_second').value = period.period_to_second;
        document.getElementById('period_to_second_year').value = period.period_to_second_year;
        document.getElementById('augr').value = period.augr;

    } else {
        handleError(data.message);
    }
}

document.getElementById('transaction_periodForm').addEventListener('submit', function handleFormSubmit(event) {
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
    return fetch(apiUrl + 'transaction_periods/update_transaction_period.php', {
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
    if (data.status === 'success') {
        Swal.fire({
            icon: 'success',
            title: texts.success,
        })
            .then(() => {
                location.reload();
            });
    } else {
        Swal.fire({
            icon: 'error',
            title: texts.error,
        });
    }
}