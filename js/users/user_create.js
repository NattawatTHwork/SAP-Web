document.addEventListener("DOMContentLoaded", async function () {
    handleGetRoles();
});

function handleGetRoles(event) {
    if (event) {
        event.preventDefault();
    }

    getSessionToken()
        .then(mySession => fetchRoles(mySession.token))
        .then(data => populateRoleOptions(data))
        .catch(error => handleError(error));
}

function fetchRoles(token) {
    return fetch(apiUrl + 'roles/get_role_all.php', {
        method: 'GET',
        headers: {
            'Authorization': `Bearer ${token}`
        }
    })
        .then(response => response.json());
}

function populateRoleOptions(data) {
    const roleSelect = document.getElementById('role_id');
    if (data.status === 'success') {
        data.data.forEach(role => {
            const option = document.createElement('option');
            option.value = role.role_id;
            option.textContent = role.role;
            roleSelect.appendChild(option);
        });
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

    if (jsonData.user_password.length < 6) {
        Swal.fire({
            icon: 'warning',
            title: texts.error,
            text: texts.password_too_short
        });
        submitButton.disabled = false;
        return;
    }

    if (jsonData.user_password !== jsonData.confirm_user_password) {
        Swal.fire({
            icon: 'warning',
            title: texts.error,
            text: texts.not_match
        });
        submitButton.disabled = false;
        return;
    }

    getSessionToken()
        .then(mySession => createData(mySession.token, jsonData))
        .then(response => handleCreateResponse(response))
        .catch(error => handleError(error))
        .finally(() => {
            submitButton.disabled = false;
        });
});

function createData(token, jsonData) {
    return fetch(apiUrl + 'users/create_user.php', {
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
            window.location.href = 'user_all.php';
        });
    } else if (data.status === 'exists') {
        Swal.fire({
            icon: 'warning',
            title: texts.success,
            text: texts.exists
        })
    } else {
        Swal.fire({
            icon: 'error',
            title: texts.error,
        });
    }
}