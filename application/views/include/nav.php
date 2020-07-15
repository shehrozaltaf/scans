<!-- main sidebar -->
<aside id="sidebar_main">
    <div class="sidebar_main_header">
        <div class="sidebar_logo">
            <a href="<?= base_url() ?>" class="sSidebar_hide sidebar_logo_large">
                <h3>LHW MIS</h3>
            </a>
            <a href="<?= base_url() ?>" class="sSidebar_show sidebar_logo_small">
                <h3>LHW MIS</h3>
            </a>
        </div>
    </div>
    <div class="menu_section">
        <ul id="sideBarMenu">
            <li title="Form">
                <a href="<?php echo base_url('index.php/dashboard') ?>">
                    <span class="menu_title">Dashboard</span>
                </a>
            </li>
            <li title="Users">
                <a href="<?php echo base_url('index.php/Reviewed') ?>">
                    <span class="menu_title">Reviewed</span>
                </a>
            </li>
            <li title="Clusters">
                <a href="<?php echo base_url('index.php/dashboard/Clusters') ?>">
                    <span class="menu_title">Clusters</span>
                </a>
            </li>
            <li title="Household">
                <a href="<?php echo base_url('index.php/dashboard/household') ?>">
                    <span class="menu_title">Household</span>
                </a>
            </li>

            <li title="Users">
                <a href="<?php echo base_url('index.php/Users') ?>">
                    <span class="menu_title">Users</span>
                </a>
            </li>

            <li title="Logout">
                <a href="javascript:void(0)" onclick="logout()">
                    <span class="menu_title">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
<!-- main sidebar end -->

