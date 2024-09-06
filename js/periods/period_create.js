document.getElementById('periodForm').addEventListener('submit', function handleFormSubmit(event) {
    event.preventDefault();

    const submitButton = document.getElementById('submitBtn');
    submitButton.disabled = true;

    const formData = new FormData(event.target);
    const jsonData = convertFormDataToJson(formData);
    console.log(jsonData)

    getSessionToken()
        .then(mySession => createData(mySession.token, jsonData))
        // .then(res => console.log(res))
        .then(response => handleCreateResponse(response))
        .catch(error => handleError(error))
        .finally(() => {
            submitButton.disabled = false;
        });
});

function createData(token, jsonData) {
    return fetch(apiUrl + 'periods/create_period.php', {
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
    const FiscalYearId = getQueryParam('fiscal_year_id');
    if (data.status === 'success') {
        Swal.fire({
            icon: 'success',
            title: texts.success,
        })
        .then(() => {
            window.location.href = 'period_all.php?fiscal_year_id=' + FiscalYearId;
        });
    } else {
        Swal.fire({
            icon: 'error',
            title: texts.error,
        });
    }
}