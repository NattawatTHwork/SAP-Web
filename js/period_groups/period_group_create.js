document.getElementById('InputForm').addEventListener('submit', function handleFormSubmit(event) {
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
    return fetch(apiUrl + 'period_groups/create_period_group.php', {
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
            title: texts.success,
        })
        .then(() => {
            window.location.href = 'period_group_all.php';
        });
    } else {
        Swal.fire({
            icon: 'error',
            title: texts.error,
        });
    }
}