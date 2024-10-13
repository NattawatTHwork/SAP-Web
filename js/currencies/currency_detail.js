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
    const currencyId = getQueryParam('currency_id');
    return fetch(apiUrl + 'currencies/get_currency.php?currency_id=' + currencyId, {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${token}`
            }
        })
        .then(response => response.json());
}

function showData(data) {
    if (data.status === 'success') {
        const currency = data.data;
        document.getElementById('currency_code').value = currency.currency_code;
    } else {
        handleError(data.message);
    }
}
