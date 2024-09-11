<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Company Manage</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include_once '../components/header_link.php' ?>
</head>

<body>
    <?php include_once '../php/companies/company_manage.php' ?>

    <?php include_once '../components/header.php' ?>

    <?php include_once '../components/sidebar.php' ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Company Manage</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">Company</li>
                    <li class="breadcrumb-item active">Company Manage</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body m-4">
                            <!-- Form for company details -->
                            <form id="InputForm">
                                <input type="hidden" id="company_id" name="company_id" value="<?= $_GET['company_id'] ?>">

                                <h6 class="fw-bold fs-4"><?= $texts['manage_account_structure'] ?></h6>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="chart_account_id" class="form-label"><?= $texts['chart_of_accounts'] ?></label>
                                            <select class="form-control" id="chart_account_id" name="chart_account_id">
                                                <!-- Dynamic options will be populated here -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="chart_account_country" class="form-label"><?= $texts['chart_of_accounts_country'] ?></label>
                                            <input type="text" class="form-control" id="chart_account_country" name="chart_account_country">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="company_second" class="form-label"><?= $texts['company'] ?></label>
                                            <input type="text" class="form-control" id="company_second" name="company_second">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="fm_zone" class="form-label"><?= $texts['fm_zone'] ?></label>
                                            <input type="text" class="form-control" id="fm_zone" name="fm_zone">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="credit_control_zone" class="form-label"><?= $texts['credit_control_zone'] ?></label>
                                            <input type="text" class="form-control" id="credit_control_zone" name="credit_control_zone">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="fiscal_year_id" class="form-label"><?= $texts['fiscal_year_options'] ?></label>
                                            <select class="form-control" id="fiscal_year_id" name="fiscal_year_id">
                                                <!-- Dynamic options will be populated here -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="non_system_company_code" class="form-label"><?= $texts['non_system_company_code'] ?></label>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="non_system_company_code" name="non_system_company_code">
                                                <label class="form-check-label" for="non_system_company_code"><?= $texts['non_system_company_code'] ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="company_all_code" class="form-label"><?= $texts['company_all_code'] ?></label>
                                            <input type="text" class="form-control" id="company_all_code" name="company_all_code">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="actual_company_code" class="form-label"><?= $texts['actual_company_code'] ?></label>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="actual_company_code" name="actual_company_code">
                                                <label class="form-check-label" for="actual_company_code"><?= $texts['actual_company_code'] ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="registration_number_vat" class="form-label"><?= $texts['vat_registration_number'] ?></label>
                                            <input type="text" class="form-control" id="registration_number_vat" name="registration_number_vat">
                                        </div>
                                    </div>
                                </div>

                                <h6 class="fw-bold fs-4"><?= $texts['processing_parameters'] ?></h6>
                                <div class="row pb-4">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="doc_record_view" class="form-label"><?= $texts['doc_record_view'] ?></label>
                                            <input type="text" class="form-control" id="doc_record_view" name="doc_record_view">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="biz_fin_stmt" class="form-label"><?= $texts['biz_fin_stmt'] ?></label>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="biz_fin_stmt" name="biz_fin_stmt">
                                                <label class="form-check-label" for="biz_fin_stmt"><?= $texts['biz_fin_stmt'] ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="field_status_set" class="form-label"><?= $texts['field_status_set'] ?></label>
                                            <input type="text" class="form-control" id="field_status_set" name="field_status_set">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="fiscal_year_prop" class="form-label"><?= $texts['fiscal_year_prop'] ?></label>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="fiscal_year_prop" name="fiscal_year_prop">
                                                <label class="form-check-label" for="fiscal_year_prop"><?= $texts['fiscal_year_prop'] ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="transaction_period_group_id" class="form-label"><?= $texts['entry_period_set'] ?></label>
                                            <select class="form-control" id="transaction_period_group_id" name="transaction_period_group_id">
                                                <!-- Dynamic options will be populated here -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="init_val_date" class="form-label"><?= $texts['init_val_date'] ?></label>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="init_val_date" name="init_val_date">
                                                <label class="form-check-label" for="init_val_date"><?= $texts['init_val_date'] ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="max_ex_rate_diff" class="form-label"><?= $texts['max_ex_rate_diff'] ?></label>
                                            <input type="text" class="form-control" id="max_ex_rate_diff" name="max_ex_rate_diff">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="no_forex_diff_lc_clear" class="form-label"><?= $texts['no_forex_diff_lc_clear'] ?></label>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="no_forex_diff_lc_clear" name="no_forex_diff_lc_clear">
                                                <label class="form-check-label" for="no_forex_diff_lc_clear"><?= $texts['no_forex_diff_lc_clear'] ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="sample_acc_rule_set" class="form-label"><?= $texts['sample_acc_rule_set'] ?></label>
                                            <input type="text" class="form-control" id="sample_acc_rule_set" name="sample_acc_rule_set">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="tax_base_net_val" class="form-label"><?= $texts['tax_base_net_val'] ?></label>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="tax_base_net_val" name="tax_base_net_val">
                                                <label class="form-check-label" for="tax_base_net_val"><?= $texts['tax_base_net_val'] ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="workflow_select" class="form-label"><?= $texts['workflow_select'] ?></label>
                                            <input type="text" class="form-control" id="workflow_select" name="workflow_select">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="net_discount_base" class="form-label"><?= $texts['net_discount_base'] ?></label>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="net_discount_base" name="net_discount_base">
                                                <label class="form-check-label" for="net_discount_base"><?= $texts['net_discount_base'] ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="inflation_method" class="form-label"><?= $texts['inflation_method'] ?></label>
                                            <input type="text" class="form-control" id="inflation_method" name="inflation_method">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="fin_asset_mgmt" class="form-label"><?= $texts['fin_asset_mgmt'] ?></label>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="fin_asset_mgmt" name="fin_asset_mgmt">
                                                <label class="form-check-label" for="fin_asset_mgmt"><?= $texts['fin_asset_mgmt'] ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="tax_currency_conv" class="form-label"><?= $texts['tax_currency_conv'] ?></label>
                                            <input type="text" class="form-control" id="tax_currency_conv" name="tax_currency_conv">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="proc_acc_proc" class="form-label"><?= $texts['proc_acc_proc'] ?></label>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="proc_acc_proc" name="proc_acc_proc">
                                                <label class="form-check-label" for="proc_acc_proc"><?= $texts['proc_acc_proc'] ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="co_area" class="form-label"><?= $texts['co_area'] ?></label>
                                            <input type="text" class="form-control" id="co_area" name="co_area">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="allow_neg_entry" class="form-label"><?= $texts['allow_neg_entry'] ?></label>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="allow_neg_entry" name="allow_neg_entry">
                                                <label class="form-check-label" for="allow_neg_entry"><?= $texts['allow_neg_entry'] ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="current_cogs" class="form-label"><?= $texts['current_cogs'] ?></label>
                                            <input type="text" class="form-control" id="current_cogs" name="current_cogs">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="split_quantity" class="form-label"><?= $texts['split_quantity'] ?></label>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="split_quantity" name="split_quantity">
                                                <label class="form-check-label" for="split_quantity"><?= $texts['split_quantity'] ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="cash_mgmt_enabled" class="form-label"><?= $texts['cash_mgmt_enabled'] ?></label>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="cash_mgmt_enabled" name="cash_mgmt_enabled">
                                                <label class="form-check-label" for="cash_mgmt_enabled"><?= $texts['cash_mgmt_enabled'] ?></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row pb-4">
                                    <div class="col-12">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary w-100" id="submitBtn"><?= $texts['save'] ?></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <?php include_once '../components/footer.php' ?>

    <script src="<?= $path ?>js/companies/company_manage.js"></script>
    <script src="<?= $path ?>js/common/get_query_param.js"></script>
    <script src="<?= $path ?>js/common/convert_form_data_to_json.js"></script>
    <script src="<?= $path ?>js/common/handle_error.js"></script>

</body>

</html>