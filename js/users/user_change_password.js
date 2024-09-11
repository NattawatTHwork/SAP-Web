document.getElementById('InputForm').addEventListener('submit', function handleFormSubmit(event) {
    event.preventDefault();

    const submitButton = document.getElementById('submitBtn');
    submitButton.disabled = true;

    const formData = new FormData(event.target);
    const jsonData = convertFormDataToJson(formData);

    if (jsonData.new_password.length < 6) {
        Swal.fire({
            icon: 'warning',
            title: texts.error,
            text: texts.password_too_short
        });
        submitButton.disabled = false;
        return;
    }

    if (jsonData.new_password !== jsonData.repeat_new_password) {
        Swal.fire({
            icon: 'warning',
            title: texts.error,
            text: texts.not_match
        });
        submitButton.disabled = false;
        return;
    }

    getSessionToken()
        .then(mySession => updateData(mySession.token, jsonData))
        .then(response => handleUpdateResponse(response))
        .catch(error => handleError(error))
        .finally(() => {
            submitButton.disabled = false;
        });
});

function updateData(token, jsonData) {
    return fetch(apiUrl + 'users/update_password.php', {
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
            window.location.href = 'user_all.php';
        });
    } else {
        Swal.fire({
            icon: 'error',
            title: texts.error,
        });
    }
}