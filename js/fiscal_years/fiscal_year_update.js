document.addEventListener("DOMContentLoaded", async function() {
    handleGetDetail();
});

function handleGetDetail(event) {
    if (event) {
        event.preventDefault();
    }

    getSessionToken()
        .then(mySession => fetchData(mySession.token))
        .then(data => showData(data))
        .catch(error => handleError(error));
}

function fetchData(token) {
    const fiscal_yearId = getQueryParam('fiscal_year_id');
    return fetch(apiUrl + 'fiscal_years/get_fiscal_year.php?fiscal_year_id=' + fiscal_yearId, {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${token}`
            }
        })
        .then(response => response.json());
}

function showData(data) {
    if (data.status === 'success') {
        const fiscal_year = data.data;
        document.getElementById('fiscal_year_id').value = fiscal_year.fiscal_year_id;
        document.getElementById('fiscal_year_code').value = fiscal_year.fiscal_year_code;
        document.getElementById('description').value = fiscal_year.description;
        document.getElementById('fiscal_year_check').checked = fiscal_year.fiscal_year_check === 't';
        document.getElementById('calendar_year_check').checked = fiscal_year.calendar_year_check === 't';
    } else {
        handleError(data.message);
    }
}

document.getElementById('fiscal_yearForm').addEventListener('submit', function handleFormSubmit(event) {
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
    jsonData.fiscal_year_check = document.getElementById('fiscal_year_check').checked ? "true" : "false";
    jsonData.calendar_year_check = document.getElementById('calendar_year_check').checked ? "true" : "false";

    return fetch(apiUrl + 'fiscal_years/update_fiscal_year.php', {
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