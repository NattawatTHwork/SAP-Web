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
    return fetch(apiUrl + 'fiscal_years/get_fiscal_year_all.php', {
        method: 'GET',
        headers: {
            'Authorization': `Bearer ${token}`
        }
    })
        .then(response => response.json());
}

function displayTables(datas) {
    let html = '';
    const noDataHtml = '<tr><td></td><td>' + texts.no_data + '</td><td></td></tr>';
    if (datas.status === 'success') {
        if (datas.data.length > 0) {
            datas.data.forEach(data => {
                html += '<tr>';
                html += `<td>${data.fiscal_year_code}</td>
                    <td>${data.description}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ${texts.option}
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="${pathUrl}periods/period_all.php?fiscal_year_id=${data.fiscal_year_id}">${texts.period}</a></li>
                                <li><a class="dropdown-item" href="${pathUrl}transaction_periods/transaction_period_all.php?fiscal_year_id=${data.fiscal_year_id}">${texts.transaction_period}</a></li>
                                <li><a class="dropdown-item" href="fiscal_year_detail.php?fiscal_year_id=${data.fiscal_year_id}">${texts.view_data}</a></li>
                                <li><a class="dropdown-item" href="fiscal_year_update.php?fiscal_year_id=${data.fiscal_year_id}">${texts.edit}</a></li>
                                <li><a class="dropdown-item" href="#" onclick="delete_data('${data.fiscal_year_id}', '${data.fiscal_year_code}'); return false;">${texts.delete}</a></li>
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

function delete_data(fiscal_yearId, fiscal_year_code) {
    Swal.fire({
        title: fiscal_year_code,
        text: texts.want_delete,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: texts.delete,
        cancelButtonText: texts.cancel
    }).then((result) => {
        if (result.isConfirmed) {
            getSessionToken()
                .then(mySession => fetchDelete(fiscal_yearId, mySession.token))
                .then(response => handleDeleteResponse(response))
                .catch(error => handleError(error));
        }
    });
}

function fetchDelete(fiscal_yearId, token) {
    return fetch(apiUrl + 'fiscal_years/delete_fiscal_year.php', {
        method: 'POST',
        headers: {
            'Authorization': `Bearer ${token}`,
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ fiscal_year_id: fiscal_yearId })
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