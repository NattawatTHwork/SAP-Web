document.addEventListener("DOMContentLoaded", async function () {
    handleGetAll();
});

function handleGetAll(event) {
    if (event) {
        event.preventDefault();
    }

    getSessionToken()
        .then(mySession => fetchData(mySession.token))
        .then(data => displayTables(data))
        .catch(error => handleError(error));
}

function fetchData(token) {
    const FiscalYearId = getQueryParam('fiscal_year_id');
    return fetch(apiUrl + 'transaction_periods/get_transaction_period_all.php?fiscal_year_id=' + FiscalYearId, {
        method: 'GET',
        headers: {
            'Authorization': `Bearer ${token}`
        }
    })
        .then(response => response.json());
}

function displayTables(datas) {
    let html = '';
    const noDataHtml = '<tr><td></td><td></td><td></td><td></td><td></td><td></td><td>' + texts.no_data + '</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
    if (datas.status === 'success') {
        if (datas.data.length > 0) {
            datas.data.forEach(data => {
                html += '<tr>';
                html += `<td>${data.transaction_period_type_code}</td>
                    <td>${data.account_from}</td>
                    <td>${data.account_to}</td>
                    <td>${data.period_from_first_code}</td>
                    <td>${data.period_from_first_year}</td>
                    <td>${data.period_to_first_code}</td>
                    <td>${data.period_to_first_year}</td>
                    <td>${data.period_from_second_code}</td>
                    <td>${data.period_from_second_year}</td>
                    <td>${data.period_to_second_code}</td>
                    <td>${data.period_to_second_year}</td>
                    <td>${data.augr}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ${texts.option}
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="transaction_period_detail.php?transaction_period_id=${data.transaction_period_id}">${texts.view_data}</a></li>
                                <li><a class="dropdown-item" href="transaction_period_update.php?transaction_period_id=${data.transaction_period_id}&fiscal_year_id=${data.fiscal_year_id}">${texts.edit}</a></li>
                                <li><a class="dropdown-item" href="#" onclick="delete_data('${data.transaction_period_id}', '${data.transaction_period_type_code}'); return false;">${texts.delete}</a></li>
                            </ul>
                        </div>
                    </td>`;
                html += '</tr>';
            });
        } else {
            html = noDataHtml;
        }
    } else {
        html = noDataHtml;
    }
    document.querySelector('tbody').innerHTML = html;
    $(document).ready(function () {
        $('#datatables').DataTable({
            "order": []
            // "scrollX": true
        });
    });
}

function delete_data(TransactionPeriodId, transaction_period_type_code) {
    Swal.fire({
        title: transaction_period_type_code,
        text: texts.want_delete,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: texts.delete,
        cancelButtonText: texts.cancel
    }).then((result) => {
        if (result.isConfirmed) {
            getSessionToken()
                .then(mySession => fetchDelete(TransactionPeriodId, mySession.token))
                .then(response => handleDeleteResponse(response))
                .catch(error => handleError(error));
        }
    });
}

function fetchDelete(TransactionPeriodId, token) {
    return fetch(apiUrl + 'transaction_periods/delete_transaction_period.php', {
        method: 'POST',
        headers: {
            'Authorization': `Bearer ${token}`,
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ transaction_period_id: TransactionPeriodId })
    })
    .then(response => response.json());
}

function handleDeleteResponse(response) {
    if (response.status === 'success') {
        Swal.fire({
            title: texts.success,
            icon: 'success'
        }).then(() => {
            location.reload();
        });
    } else {
        Swal.fire({
            title: texts.error,
            icon: 'error'
        });
    }
}