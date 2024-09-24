<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="index.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#manage-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>เพิ่มข้อมูลทั่วไป</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="manage-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= $path ?>countries/country_all.php">
                        <i class="bi bi-circle"></i><span>ประเทศ</span>
                    </a>
                </li>
                <li>
                    <a href="<?= $path ?>business_types/business_type_all.php">
                        <i class="bi bi-circle"></i><span>ประเภทธุรกิจ</span>
                    </a>
                </li>
                <li>
                    <a href="<?= $path ?>companies/company_all.php">
                        <i class="bi bi-circle"></i><span>บริษัท</span>
                    </a>
                </li>
                <li>
                    <a href="<?= $path ?>chart_accounts/chart_account_all.php">
                        <i class="bi bi-circle"></i><span>ผังบัญชี</span>
                    </a>
                </li>
                <li>
                    <a href="<?= $path ?>group_accounts/group_account_all.php">
                        <i class="bi bi-circle"></i><span>กลุ่มบัญชี</span>
                    </a>
                </li>
                <li>
                    <a href="<?= $path ?>fiscal_years/fiscal_year_all.php">
                        <i class="bi bi-circle"></i><span>ชุดการเลือกปีบัญชี</span>
                    </a>
                </li>
                <li>
                    <a href="<?= $path ?>period_groups/period_group_all.php">
                        <i class="bi bi-circle"></i><span>กลุ่มงวด</span>
                    </a>
                </li>
                <li>
                    <a href="<?= $path ?>transaction_period_groups/transaction_period_group_all.php">
                        <i class="bi bi-circle"></i><span>ชุดงวดการผ่านรายการ</span>
                    </a>
                </li>
                <li>
                    <a href="<?= $path ?>transaction_periods/transaction_period_all.php">
                        <i class="bi bi-circle"></i><span>งวดการผ่านรายการ</span>
                    </a>
                </li>
                <li>
                    <a href="<?= $path ?>central_general_ledgers/central_general_ledger_all.php">
                        <i class="bi bi-circle"></i><span>บัญชีแยกประเภททั่วไปส่วนกลาง</span>
                    </a>
                </li>
                <li>
                    <a href="<?= $path ?>general_ledgers/general_ledger_all.php">
                        <i class="bi bi-circle"></i><span>บัญชีแยกประเภททั่วไป</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $path ?>users/user_all.php">
                <i class="bi bi-person"></i>
                <span>User Management</span>
            </a>
        </li>
    </ul>

</aside><!-- End Sidebar-->