document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector('form');

    form.addEventListener('submit', handleFormSubmit);
});

function handleFormSubmit(event) {
    event.preventDefault();
    const buttonLogin = document.getElementById('button_login');
    buttonLogin.disabled = true;

    const formData = new FormData(event.target);
    const jsonData = convertFormDataToJson(formData);

    fetchData(jsonData)
        .then(data => handleFetchResponse(data))
        .then(data => handleSessionResponse(data))
        .catch(error => handleError(error))
        .finally(() => {
            buttonLogin.disabled = false;
        });
}

function fetchData(jsonData) {
    return fetch(apiUrl + 'users/user_login.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(jsonData)
    })
        .then(response => response.json());
}

function handleFetchResponse(data) {
    if (data.status === 'success') {
        const payloadBase64 = data.token.split('.')[1];
        const data_token = JSON.parse(atob(payloadBase64));

        const postData = {
            token: data.token,
            ...data_token
        };

        return fetch(pathUrl + 'php/session/set_session_token.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(postData)
        }).then(response => response.json());
    } else if (data.status === 'disable') {
        Swal.fire({
            icon: 'error',
            title: texts.error,
            text: texts.disable_login
        });
        return Promise.reject('User disabled');
    } else if (data.status === 'unauthorized') {
        Swal.fire({
            icon: 'error',
            title: texts.error,
            text: texts.unauthorized
        });
        return Promise.reject('Unauthorized access');
    } else {
        Swal.fire({
            icon: 'error',
            title: texts.error,
        });
        return Promise.reject('Unknown error');
    }
}

function handleSessionResponse(data) {
    if (data.status === 'session_set') {
        Swal.fire({
            position: "center",
            icon: "success",
            title: texts.success,
            showConfirmButton: false,
            timer: 1500
        }).then(() => {
            window.location.href = 'index.php';
        });
    } else {
        console.error('Session could not be set:', data.message);
        Swal.fire({
            icon: 'error',
            title: texts.error,
            text: 'Session could not be set.'
        });
    }
}
