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
    const document_typeId = getQueryParam('document_type_id');
    return fetch(apiUrl + 'document_types/get_document_type.php?document_type_id=' + document_typeId, {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${token}`
            }
        })
        .then(response => response.json());
}

function showData(data) {
    if (data.status === 'success') {
        const document_type = data.data;
        document.getElementById('dt_year').value = document_type.dt_year;
        document.getElementById('document_type_code').value = document_type.document_type_code;
        document.getElementById('dt_from').value = document_type.dt_from;
        document.getElementById('dt_to').value = document_type.dt_to;
        document.getElementById('sequence').value = document_type.sequence;
    } else {
        handleError(data.message);
    }
}
