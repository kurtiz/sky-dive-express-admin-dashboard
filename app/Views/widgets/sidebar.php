<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">


    <div class="app-brand demo ">
        <a href="javascript:void(0);" class="app-brand-link">
                    <span class="app-brand-logo demo">
                    </span>
            <span class="app-brand-text demo menu-text fw-bolder text-uppercase ms-2">C-Panel</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>



    <ul class="menu-inner py-1">
        <!-- dashboard -->
        <li class="menu-item <?=session()->getTempdata("dashboard")?>">
            <a href="<?=base_url()?>/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div>Dashboard</div>
            </a>
        </li>

        <!-- warehouse -->
        <li class="menu-item <?=session()->getTempdata("warehouse")?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div>Warehouses</div>
            </a>

            <ul class="menu-sub">

                <li class="menu-item <?=session()->getTempdata("add_warehouse")?>">
                    <a href="<?=base_url()?>/warehouse/add" class="menu-link">
                        <div>Add Warehouse</div>
                    </a>
                </li>
                <li class="menu-item <?=session()->getTempdata("warehouses")?>">
                    <a href="<?=base_url()?>/warehouse" class="menu-link">
                        <div>Manage Warehouses</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- inventory -->
        <li class="menu-item <?=session()->getTempdata("inventory")?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div>Inventory</div>
            </a>

            <ul class="menu-sub">

                <li class="menu-item <?=session()->getTempdata("add_inventory")?>">
                    <a href="<?=base_url()?>/inventory/add" class="menu-link">
                        <div>Add Inventory</div>
                    </a>
                </li>
                <li class="menu-item <?=session()->getTempdata("inventories")?>">
                    <a href="<?=base_url()?>/inventory" class="menu-link">
                        <div>Manage Inventory</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- delivery -->
        <li class="menu-item <?=session()->getTempdata("delivery")?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-truck"></i>
                <div>Delivery</div>
            </a>

            <ul class="menu-sub">

                <li class="menu-item <?=session()->getTempdata("add_delivery")?>">
                    <a href="<?=base_url()?>/delivery/add" class="menu-link">
                        <div>Add Delivery</div>
                    </a>
                </li>
                <li class="menu-item <?=session()->getTempdata("deliveries")?>">
                    <a href="<?=base_url()?>/delivery" class="menu-link">
                        <div>Manage Delivery</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- quote Request -->
        <li class="menu-item <?=session()->getTempdata("quote")?>">
            <a href="javascript:void(0);" class="menu-link">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div>Quote Requests</div>
            </a>
        </li>

        <!-- contact messages -->
        <li class="menu-item <?=session()->getTempdata("contact")?>">
            <a href="javascript:void(0);" class="menu-link">
                <i class="menu-icon tf-icons bx bx-chat"></i>
                <div>Contact Messages</div>
            </a>
        </li>

        <!-- file manager -->
        <li class="menu-item <?=session()->getTempdata("files")?>">
            <a href="javascript:void(0);" class="menu-link">
                <i class="menu-icon tf-icons bx bx-folder"></i>
                <div>File Manager</div>
            </a>
        </li>

        <!-- Administration -->
        <li class="menu-item <?=session()->getTempdata("administration")?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <div>Administration</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item <?=session()->getTempdata("add_delivery")?>">
                    <a href="<?=base_url()?>/user/add" class="menu-link">
                        <div>Add User</div>
                    </a>
                </li>
                <li class="menu-item <?=session()->getTempdata("inventories")?>">
                    <a href="<?=base_url()?>/user" class="menu-link">
                        <div>Manage Users</div>
                    </a>
                </li>
                <li class="menu-item <?=session()->getTempdata("add_delivery")?>">
                    <a href="<?=base_url()?>/role/add" class="menu-link">
                        <div>Add Role</div>
                    </a>
                </li>
                <li class="menu-item <?=session()->getTempdata("inventories")?>">
                    <a href="<?=base_url()?>/role" class="menu-link">
                        <div>Manage Roles</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Dashboard -->
        <li class="menu-item <?=session()->getTempdata("settings")?>">
            <a href="javascript:void(0);" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div>Settings</div>
            </a>
        </li>
    </ul>



</aside>