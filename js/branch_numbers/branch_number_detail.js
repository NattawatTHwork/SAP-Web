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
    const branch_numberId = getQueryParam('branch_number_id');
    return fetch(apiUrl + 'branch_numbers/get_branch_number.php?branch_number_id=' + branch_numberId, {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${token}`
            }
        })
        .then(response => response.json());
}

function showData(data) {
    if (data.status === 'success') {
        const branch_number = data.data;
        document.getElementById('branch_number_code').value = branch_number.branch_number_code;
    } else {
        handleError(data.message);
    }
}
