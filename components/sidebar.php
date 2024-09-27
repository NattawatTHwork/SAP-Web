<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $path ?>index.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#define-accounting-parameters" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>กำหนดพารามิเตอร์ทางบัญชี</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="define-accounting-parameters" class="nav-content collapse " data-bs-parent="#sidebar-nav">
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
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#set-general-parameters" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>กำหนดพารามิเตอร์ทั่วไป</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="set-general-parameters" class="nav-content collapse " data-bs-parent="#sidebar-nav">
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
        </li>


        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#user-management" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>ระบบบริหารผู้ใช้ระบบงาน</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="user-management" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= $path ?>roles/role_all.php">
                        <i class="bi bi-circle"></i><span>สิทธิ์</span>
                    </a>
                </li>
                <li>
                    <a href="<?= $path ?>users/user_all.php">
                        <i class="bi bi-circle"></i><span>ผู้ใช้</span>
                    </a>
                </li>
            </ul>
        </li>

    </ul>

</aside><!-- End Sidebar-->