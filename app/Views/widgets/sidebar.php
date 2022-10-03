<aside class="sidebar">
    <div class="sidebar__backdrop"></div>
    <div class="sidebar__container">
        <div class="sidebar__top">
            <div class="container container--sm">
                <a class="sidebar__logo" href="<?=base_url()?>/dashboard">
                    <img class="sidebar__logo-icon" src="<?=base_url()?>/public/img/content/logo.png" alt="#" width="44">
                    <div class="sidebar__logo-text">C-Panel</div>
                </a>
            </div>
        </div>
        <div class="sidebar__content" data-simplebar="init">
            <div class="simplebar-wrapper" style="margin: 0px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right: -15.4545px; bottom: -15.4545px;">
                        <div class="simplebar-content-wrapper" style="height: 100%; overflow: scroll;">
                            <div class="simplebar-content" style="padding: 0px;">
                                <nav class="sidebar__nav">
                                    <ul class="sidebar__menu">
                                        <li class="sidebar__menu-item">
                                            <a class="sidebar__link <?=session()->getTempdata("dashboard")?>"
                                               href="<?=base_url()?>/dashboard"
                                               aria-expanded="true">
                                                <span class="sidebar__link-icon">
                                                            <svg class="icon-icon-dashboard">
                                                                <use xlink:href="#icon-dashboard"></use>
                                                            </svg>
                                                </span>
                                                <span class="sidebar__link-text">Dashboard</span></a>
                                        </li>
                                        <li class="sidebar__menu-item">
                                            <a class="sidebar__link <?=session()->getTempdata("warehouse")?>"
                                               href="javascript:void(0)"
                                               data-toggle="collapse" data-target="#warehouses"
                                               aria-expanded="false">
                                                <span class="sidebar__link-icon">
                                                            <svg class="icon-icon-cart">
                                                                <use xlink:href="#icon-home"></use>
                                                            </svg></span>
                                                <span class="sidebar__link-text">Warehouses</span>
                                                <span class="sidebar__link-arrow">
                                                            <svg class="icon-icon-keyboard-down">
                                                                <use xlink:href="#icon-keyboard-down"></use>
                                                            </svg>
                                                </span>
                                            </a>
                                            <div class="collapse" id="warehouses">
                                                <ul class="sidebar__collapse-menu">
                                                    <li class="sidebar__menu-item">
                                                        <a class="sidebar__link" href="<?=base_url()?>/warehouse/add">
                                                            <span class="sidebar__link-signal"></span>
                                                            <span class="sidebar__link-text">Add Warehouse</span>
                                                        </a>
                                                    </li>
                                                    <li class="sidebar__menu-item"><a class="sidebar__link"
                                                                                      href="<?=base_url()?>/warehouse"><span
                                                                class="sidebar__link-signal"></span><span
                                                                class="sidebar__link-text">Manage
                                                                        Warehouses</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="sidebar__menu-item">
                                            <a class="sidebar__link <?=session()->getTempdata("state")?>"
                                               href="javascript:void(0)"
                                               data-toggle="collapse" data-target="#inventory"
                                               aria-expanded="false">
                                                <span class="sidebar__link-icon">
                                                            <svg class="icon-icon-cart">
                                                                <use xlink:href="#icon-grid"></use>
                                                            </svg></span>
                                                <span class="sidebar__link-text">Inventory</span>
                                                <span class="sidebar__link-arrow">
                                                            <svg class="icon-icon-keyboard-down">
                                                                <use xlink:href="#icon-keyboard-down"></use>
                                                            </svg>
                                                </span>
                                            </a>
                                            <div class="collapse" id="inventory">
                                                <ul class="sidebar__collapse-menu">
                                                    <li class="sidebar__menu-item"><a class="sidebar__link"
                                                                                      href="javascript:void(0)"><span
                                                                class="sidebar__link-signal"></span><span
                                                                class="sidebar__link-text">Add Package</span></a>
                                                    </li>
                                                    <li class="sidebar__menu-item"><a class="sidebar__link"
                                                                                      href="javascript:void(0)"><span
                                                                class="sidebar__link-signal"></span><span
                                                                class="sidebar__link-text">Manage
                                                                        Package</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="sidebar__menu-item">
                                            <a class="sidebar__link <?=session()->getTempdata("state")?>"
                                               href="javascript:void(0)"
                                               data-toggle="collapse" data-target="#delivery"
                                               aria-expanded="false">
                                                <span class="sidebar__link-icon">
                                                    <i class="fas fa-truck"></i>
                                                </span>
                                                <span class="sidebar__link-text">Delivery</span>
                                                <span class="sidebar__link-arrow">
                                                            <svg class="icon-icon-keyboard-down">
                                                                <use xlink:href="#icon-keyboard-down"></use>
                                                            </svg>
                                                </span>
                                            </a>
                                            <div class="collapse" id="delivery">
                                                <ul class="sidebar__collapse-menu">
                                                    <li class="sidebar__menu-item"><a class="sidebar__link"
                                                                                      href="javascript:void(0)"><span
                                                                class="sidebar__link-signal"></span><span
                                                                class="sidebar__link-text">Add Delivery</span></a>
                                                    </li>
                                                    <li class="sidebar__menu-item"><a class="sidebar__link"
                                                                                      href="javascript:void(0)"><span
                                                                class="sidebar__link-signal"></span><span
                                                                class="sidebar__link-text">Manage
                                                                        Deliveries</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="sidebar__menu-item">
                                            <a class="sidebar__link <?=session()->getTempdata("state")?>"
                                               href="javascript:void(0)"
                                               data-toggle="collapse"
                                               aria-expanded="false">
                                                <span class="sidebar__link-icon">
                                                    <svg class="icon-icon-cart">-->
                                                        <use xlink:href="#icon-details"></use>
                                                    </svg>
                                                </span>
                                                <span class="sidebar__link-text">Quote Request</span>
                                            </a>
                                        </li>
                                        <li class="sidebar__menu-item">
                                            <a class="sidebar__link <?=session()->getTempdata("state")?>"
                                               href="javascript:void(0)"
                                               data-toggle="collapse"
                                               aria-expanded="false">
                                                <span class="sidebar__link-icon">
                                                    <svg class="icon-icon-cart">-->
                                                        <use xlink:href="#icon-comments"></use>
                                                    </svg>
                                                </span>
                                                <span class="sidebar__link-text">Contact Messages</span>
                                            </a>
                                        </li>
                                        <li class="sidebar__menu-item">
                                            <a class="sidebar__link <?=session()->getTempdata("state")?>"
                                               href="javascript:void(0)"
                                               data-toggle="collapse"
                                               aria-expanded="false">
                                                <span class="sidebar__link-icon">
                                                    <svg class="icon-icon-cart">-->
                                                        <use xlink:href="#icon-folder"></use>
                                                    </svg>
                                                </span>
                                                <span class="sidebar__link-text">File Manager</span>
                                            </a>
                                        </li>
                                        <li class="sidebar__menu-item">
                                            <a class="sidebar__link <?=session()->getTempdata("state")?>"
                                               href="javascript:void(0)"
                                               data-toggle="collapse" data-target="#administration"
                                               aria-expanded="false">
                                                <span class="sidebar__link-icon">
                                                            <svg class="icon-icon-cart">
                                                                <use xlink:href="#icon-user"></use>
                                                            </svg></span>
                                                <span class="sidebar__link-text">Administration</span>
                                                <span class="sidebar__link-arrow">
                                                            <svg class="icon-icon-keyboard-down">
                                                                <use xlink:href="#icon-keyboard-down"></use>
                                                            </svg>
                                                </span>
                                            </a>
                                            <div class="collapse" id="administration">
                                                <ul class="sidebar__collapse-menu">
                                                    <li class="sidebar__menu-item"><a class="sidebar__link"
                                                                                      href="javascript:void(0)"><span
                                                                    class="sidebar__link-signal"></span><span
                                                                    class="sidebar__link-text">Add User</span></a>
                                                    </li>
                                                    <li class="sidebar__menu-item"><a class="sidebar__link"
                                                                                      href="javascript:void(0)"><span
                                                                    class="sidebar__link-signal"></span><span
                                                                    class="sidebar__link-text">Manage
                                                                        Users</span></a>
                                                    </li>
                                                    <li class="sidebar__menu-item"><a class="sidebar__link"
                                                                                      href="javascript:void(0)"><span
                                                                    class="sidebar__link-signal"></span><span
                                                                    class="sidebar__link-text">Add Role</span></a>
                                                    </li>
                                                    <li class="sidebar__menu-item"><a class="sidebar__link"
                                                                                      href="javascript:void(0)"><span
                                                                    class="sidebar__link-signal"></span><span
                                                                    class="sidebar__link-text">Manage Roles</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="sidebar__menu-item">
                                            <a class="sidebar__link <?=session()->getTempdata("settings")?>"
                                               href="javascript:void(0)"
                                               data-toggle="collapse"
                                               aria-expanded="false">
                                                <span class="sidebar__link-icon">
                                                    <svg class="icon-icon-cart">-->
                                                        <use xlink:href="#icon-settings"></use>
                                                    </svg>
                                                </span>
                                                <span class="sidebar__link-text">Settings</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: auto; height: 575px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: visible;">
                <div class="simplebar-scrollbar"
                     style="transform: translate3d(0px, 0px, 0px); display: block; width: 25px;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar"
                     style="transform: translate3d(0px, 0px, 0px); display: block; height: 415px;"></div>
            </div>
        </div>
    </div>
</aside>