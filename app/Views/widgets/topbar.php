<header class="header">
    <div class="header__inner">
        <div class="container-fluid">
            <div class="header__row row justify-content-between">
                <div class="header__col-left col d-flex align-items-center">
                    <div class="header__left-toggle">
                        <button class="header__toggle-menu toggle-sidebar" type="button">
                            <svg class="icon-icon-menu">
                                <use xlink:href="#icon-menu"></use>
                            </svg>
                        </button>
                        <button class="header__toggle-search toggle-search">
                            <svg class="icon-icon-search">
                                <use xlink:href="#icon-search"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="header__search">
                        <form class="form-search" action="javascript:void(0)"
                              method="GET">
                            <div class="form-search__container"><span class="form-search__icon-left">
                                            <svg class="icon-icon-search">
                                                <use xlink:href="#icon-search"></use>
                                            </svg></span>
                                <input class="form-search__input" type="text" placeholder="Search...">
                            </div>
                        </form>
                    </div>
                </div>

                <?php /*
                    <div class="header__tools">
                        <div class="header__notes header__tools-item">
                            <a class="header__tools-toggle header__tools-toggle--message"
                               href="javascript:void(0)"
                               data-tippy-content="Notifications" data-tippy-placement="bottom"
                               data-toggle="dropdown">
                                <svg class="icon-icon-message">
                                    <use xlink:href="#icon-message"></use>
                                </svg>
                                <span class="badge-signal"></span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu__top dropdown-menu__item"><span
                                        class="dropdown-menu__title">Notifications</span><span
                                        class="badge badge--red">5</span><a class="dropdown-menu__clear-all"
                                                                            href="javascript:void(0)" role="button">Clear
                                        All</a>
                                </div>
                                <div class="dropdown-menu__items scrollbar-thin scrollbar-visible"
                                     data-simplebar="init">
                                    <div class="simplebar-wrapper" style="margin: 0px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper"
                                                     style="height: auto; overflow: hidden;">
                                                    <div class="simplebar-content" style="padding: 0px;">
                                                        <div class="dropdown-menu__item">
                                                            <a class="dropdown-menu__item-remove"
                                                               href="javascript:void(0)">
                                                                <svg class="icon-icon-cross">
                                                                    <use xlink:href="#icon-cross"></use>
                                                                </svg>
                                                            </a>
                                                            <a class="dropdown-menu__item-block dropdown-menu__note"
                                                               href="javascript:void(0)">
                                                                <div class="dropdown-menu__item-left">
                                                                    <div
                                                                        class="dropdown-menu__item-icon color-green">
                                                                        <svg class="icon-icon-cart">
                                                                            <use xlink:href="#icon-cart"></use>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-menu__item-right">
                                                                    <h4 class="dropdown-menu__item-title">New
                                                                        Order Received</h4><span
                                                                        class="dropdown-menu__item-time">25 min
                                                                                ago</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="dropdown-menu__item">
                                                            <a class="dropdown-menu__item-remove"
                                                               href="javascript:void(0)">
                                                                <svg class="icon-icon-cross">
                                                                    <use xlink:href="#icon-cross"></use>
                                                                </svg>
                                                            </a>
                                                            <a class="dropdown-menu__item-block dropdown-menu__note"
                                                               href="javascript:void(0)">
                                                                <div class="dropdown-menu__item-left">
                                                                    <div
                                                                        class="dropdown-menu__item-icon color-orange">
                                                                        <svg class="icon-icon-bill">
                                                                            <use xlink:href="#icon-bill"></use>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-menu__item-right">
                                                                    <h4 class="dropdown-menu__item-title">New
                                                                        invoice received</h4><span
                                                                        class="dropdown-menu__item-time">5 hours
                                                                                ago</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="dropdown-menu__item">
                                                            <a class="dropdown-menu__item-remove"
                                                               href="javascript:void(0)">
                                                                <svg class="icon-icon-cross">
                                                                    <use xlink:href="#icon-cross"></use>
                                                                </svg>
                                                            </a>
                                                            <a class="dropdown-menu__item-block dropdown-menu__note"
                                                               href="javascript:void(0)">
                                                                <div class="dropdown-menu__item-left">
                                                                    <div
                                                                        class="dropdown-menu__item-icon color-teal">
                                                                        <svg class="icon-icon-truck">
                                                                            <use xlink:href="#icon-truck"></use>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-menu__item-right">
                                                                    <h4 class="dropdown-menu__item-title">new
                                                                        batch is shipped</h4><span
                                                                        class="dropdown-menu__item-time">10
                                                                                hours ago</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="dropdown-menu__item">
                                                            <a class="dropdown-menu__item-remove"
                                                               href="javascript:void(0)">
                                                                <svg class="icon-icon-cross">
                                                                    <use xlink:href="#icon-cross"></use>
                                                                </svg>
                                                            </a>
                                                            <a class="dropdown-menu__item-block dropdown-menu__note"
                                                               href="javascript:void(0)">
                                                                <div class="dropdown-menu__item-left">
                                                                    <div
                                                                        class="dropdown-menu__item-icon color-green">
                                                                        <svg class="icon-icon-cart">
                                                                            <use xlink:href="#icon-cart"></use>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-menu__item-right">
                                                                    <h4 class="dropdown-menu__item-title">New
                                                                        Order Received</h4><span
                                                                        class="dropdown-menu__item-time">25 min
                                                                                ago</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="dropdown-menu__item">
                                                            <a class="dropdown-menu__item-remove"
                                                               href="javascript:void(0)">
                                                                <svg class="icon-icon-cross">
                                                                    <use xlink:href="#icon-cross"></use>
                                                                </svg>
                                                            </a>
                                                            <a class="dropdown-menu__item-block dropdown-menu__note"
                                                               href="javascript:void(0)">
                                                                <div class="dropdown-menu__item-left">
                                                                    <div
                                                                        class="dropdown-menu__item-icon color-orange">
                                                                        <svg class="icon-icon-bill">
                                                                            <use xlink:href="#icon-bill"></use>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-menu__item-right">
                                                                    <h4 class="dropdown-menu__item-title">New
                                                                        invoice received</h4><span
                                                                        class="dropdown-menu__item-time">5 hours
                                                                                ago</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: 0px; height: 0px;">
                                        </div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal"
                                         style="visibility: hidden;">
                                        <div class="simplebar-scrollbar"
                                             style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar"
                                             style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                    </div>
                                </div>
                                <div class="dropdown-menu__divider"></div>
                                <a
                                    class="dropdown-menu__item dropdown-menu__link-all"
                                    href="javascript:void(0)">View all Notifications
                                    <svg class="icon-icon-keyboard-right">
                                        <use xlink:href="#icon-keyboard-right"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="header__messages header__tools-item">
                            <a class="header__tools-toggle header__tools-toggle--bell"
                               href="javascript:void(0)" data-tippy-content="Messages"
                               data-tippy-placement="bottom" data-toggle="dropdown">
                                <svg class="icon-icon-bell">
                                    <use xlink:href="#icon-bell"></use>
                                </svg>
                                <span class="badge-signal"></span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu__top dropdown-menu__item"><span
                                        class="dropdown-menu__title">Messages</span><span
                                        class="badge badge--red">7</span><a class="dropdown-menu__clear-all"
                                                                            href="javascript:void(0)" role="button">Clear
                                        All</a>
                                </div>
                                <div class="dropdown-menu__items scrollbar-thin scrollbar-visible"
                                     data-simplebar="init">
                                    <div class="simplebar-wrapper" style="margin: 0px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper"
                                                     style="height: auto; overflow: hidden;">
                                                    <div class="simplebar-content" style="padding: 0px;">
                                                        <div class="dropdown-menu__item">
                                                            <a class="dropdown-menu__item-remove"
                                                               href="javascript:void(0)">
                                                                <svg class="icon-icon-cross">
                                                                    <use xlink:href="#icon-cross"></use>
                                                                </svg>
                                                            </a>
                                                            <a class="dropdown-menu__item-block dropdown-menu__message"
                                                               href="javascript:void(0)">
                                                                <div class="dropdown-menu__item-left">
                                                                    <div
                                                                        class="dropdown-menu__item-icon color-teal">
                                                                        <div
                                                                            class="dropdown-menu__item-icon-text">
                                                                            MA
                                                                        </div>
                                                                        <img src="<?=base_url()?>/public/img/content/humans/item-4.jpg"
                                                                             alt="#">
                                                                    </div>
                                                                    <div
                                                                        class="badge-signal badge-signal--green">
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-menu__item-right">
                                                                    <div class="dropdown-menu__item-column">
                                                                        <h4 class="dropdown-menu__item-title">
                                                                            Mark Anderson</h4>
                                                                        <p class="dropdown-menu__text">Nemo enim
                                                                            ipsam voluptatem Nemo enim ipsam
                                                                            voluptatem</p>
                                                                    </div>
                                                                    <span
                                                                        class="dropdown-menu__item-time">25 min
                                                                                ago</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="dropdown-menu__item">
                                                            <a class="dropdown-menu__item-remove"
                                                               href="javascript:void(0)">
                                                                <svg class="icon-icon-cross">
                                                                    <use xlink:href="#icon-cross"></use>
                                                                </svg>
                                                            </a>
                                                            <a class="dropdown-menu__item-block dropdown-menu__message"
                                                               href="javascript:void(0)">
                                                                <div class="dropdown-menu__item-left">
                                                                    <div
                                                                        class="dropdown-menu__item-icon color-orange-dark">
                                                                        <div
                                                                            class="dropdown-menu__item-icon-text">
                                                                            JT
                                                                        </div>
                                                                        <img src="<?=base_url()?>/public/img/content/humans/item-1.jpg"
                                                                             alt="#">
                                                                    </div>
                                                                    <div
                                                                        class="badge-signal badge-signal--green">
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-menu__item-right">
                                                                    <div class="dropdown-menu__item-column">
                                                                        <h4 class="dropdown-menu__item-title">
                                                                            Jennifer Tang</h4>
                                                                        <p class="dropdown-menu__text">Nemo enim
                                                                            ipsam voluptatem Nemo enim ipsam
                                                                            voluptatem</p>
                                                                    </div>
                                                                    <span
                                                                        class="dropdown-menu__item-time">3 hours
                                                                                ago</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="dropdown-menu__item">
                                                            <a class="dropdown-menu__item-remove"
                                                               href="javascript:void(0)">
                                                                <svg class="icon-icon-cross">
                                                                    <use xlink:href="#icon-cross"></use>
                                                                </svg>
                                                            </a>
                                                            <a class="dropdown-menu__item-block dropdown-menu__message"
                                                               href="javascript:void(0)">
                                                                <div class="dropdown-menu__item-left">
                                                                    <div
                                                                        class="dropdown-menu__item-icon color-orange">
                                                                        <div
                                                                            class="dropdown-menu__item-icon-text">
                                                                            SA
                                                                        </div>
                                                                        <img src="<?=base_url()?>/public/img/content/humans/item-5.jpg"
                                                                             alt="#">
                                                                    </div>
                                                                    <div class="badge-signal"></div>
                                                                </div>
                                                                <div class="dropdown-menu__item-right">
                                                                    <div class="dropdown-menu__item-column">
                                                                        <h4 class="dropdown-menu__item-title">
                                                                            Stephen Allen</h4>
                                                                        <p class="dropdown-menu__text">Nemo enim
                                                                            ipsam voluptatem Nemo enim ipsam
                                                                            voluptatem</p>
                                                                    </div>
                                                                    <span
                                                                        class="dropdown-menu__item-time">10
                                                                                hours ago</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="dropdown-menu__item">
                                                            <a class="dropdown-menu__item-remove"
                                                               href="javascript:void(0)">
                                                                <svg class="icon-icon-cross">
                                                                    <use xlink:href="#icon-cross"></use>
                                                                </svg>
                                                            </a>
                                                            <a class="dropdown-menu__item-block dropdown-menu__message"
                                                               href="javascript:void(0)">
                                                                <div class="dropdown-menu__item-left">
                                                                    <div
                                                                        class="dropdown-menu__item-icon color-red">
                                                                        <div
                                                                            class="dropdown-menu__item-icon-text">
                                                                            WS
                                                                        </div>
                                                                        <img src="<?=base_url()?>/public/img/content/humans/item-6.jpg"
                                                                             alt="#">
                                                                    </div>
                                                                    <div class="badge-signal badge-signal--red">
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-menu__item-right">
                                                                    <div class="dropdown-menu__item-column">
                                                                        <h4 class="dropdown-menu__item-title">
                                                                            Walter Sanders</h4>
                                                                        <p class="dropdown-menu__text">Nemo enim
                                                                            ipsam voluptatem Nemo enim ipsam
                                                                            voluptatem</p>
                                                                    </div>
                                                                    <span
                                                                        class="dropdown-menu__item-time">30 min
                                                                                ago</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="dropdown-menu__item">
                                                            <a class="dropdown-menu__item-remove"
                                                               href="javascript:void(0)">
                                                                <svg class="icon-icon-cross">
                                                                    <use xlink:href="#icon-cross"></use>
                                                                </svg>
                                                            </a>
                                                            <a class="dropdown-menu__item-block dropdown-menu__message"
                                                               href="javascript:void(0)">
                                                                <div class="dropdown-menu__item-left">
                                                                    <div
                                                                        class="dropdown-menu__item-icon color-blue">
                                                                        <div
                                                                            class="dropdown-menu__item-icon-text">
                                                                            SA
                                                                        </div>
                                                                        <img src="<?=base_url()?>/public/img/content/humans/item-5.jpg"
                                                                             alt="#">
                                                                    </div>
                                                                    <div
                                                                        class="badge-signal badge-signal--green">
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-menu__item-right">
                                                                    <div class="dropdown-menu__item-column">
                                                                        <h4 class="dropdown-menu__item-title">
                                                                            Stephen Allen</h4>
                                                                        <p class="dropdown-menu__text">Nemo enim
                                                                            ipsam voluptatem Nemo enim ipsam
                                                                            voluptatem</p>
                                                                    </div>
                                                                    <span
                                                                        class="dropdown-menu__item-time">2h
                                                                                hours ago</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="dropdown-menu__item">
                                                            <a class="dropdown-menu__item-remove"
                                                               href="javascript:void(0)">
                                                                <svg class="icon-icon-cross">
                                                                    <use xlink:href="#icon-cross"></use>
                                                                </svg>
                                                            </a>
                                                            <a class="dropdown-menu__item-block dropdown-menu__message"
                                                               href="javascript:void(0)">
                                                                <div class="dropdown-menu__item-left">
                                                                    <div
                                                                        class="dropdown-menu__item-icon color-green">
                                                                        <div
                                                                            class="dropdown-menu__item-icon-text">
                                                                            JH
                                                                        </div>
                                                                        <img src="<?=base_url()?>/public/img/content/humans/item-7.jpg"
                                                                             alt="#">
                                                                    </div>
                                                                    <div class="badge-signal"></div>
                                                                </div>
                                                                <div class="dropdown-menu__item-right">
                                                                    <div class="dropdown-menu__item-column">
                                                                        <h4 class="dropdown-menu__item-title">
                                                                            John Hendrix</h4>
                                                                        <p class="dropdown-menu__text">Nemo enim
                                                                            ipsam voluptatem Nemo enim ipsam
                                                                            voluptatem</p>
                                                                    </div>
                                                                    <span
                                                                        class="dropdown-menu__item-time">8 hours
                                                                                ago</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="dropdown-menu__item">
                                                            <a class="dropdown-menu__item-remove"
                                                               href="javascript:void(0)">
                                                                <svg class="icon-icon-cross">
                                                                    <use xlink:href="#icon-cross"></use>
                                                                </svg>
                                                            </a>
                                                            <a class="dropdown-menu__item-block dropdown-menu__message"
                                                               href="javascript:void(0)">
                                                                <div class="dropdown-menu__item-left">
                                                                    <div
                                                                        class="dropdown-menu__item-icon color-orange">
                                                                        <div
                                                                            class="dropdown-menu__item-icon-text">
                                                                            RH
                                                                        </div>
                                                                        <img src="<?=base_url()?>/public/img/content/humans/item-8.jpg"
                                                                             alt="#">
                                                                    </div>
                                                                    <div class="badge-signal badge-signal--red">
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-menu__item-right">
                                                                    <div class="dropdown-menu__item-column">
                                                                        <h4 class="dropdown-menu__item-title">
                                                                            Ryan Henderson</h4>
                                                                        <p class="dropdown-menu__text">Nemo enim
                                                                            ipsam voluptatem Nemo enim ipsam
                                                                            voluptatem</p>
                                                                    </div>
                                                                    <span
                                                                        class="dropdown-menu__item-time">5 min
                                                                                ago</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: 0px; height: 0px;">
                                        </div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal"
                                         style="visibility: hidden;">
                                        <div class="simplebar-scrollbar"
                                             style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar"
                                             style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                    </div>
                                </div>
                                <div class="dropdown-menu__divider"></div>
                                <a
                                    class="dropdown-menu__item dropdown-menu__link-all"
                                    href="javascript:void(0)">View all Messages
                                    <svg class="icon-icon-keyboard-right">
                                        <use xlink:href="#icon-keyboard-right"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    */?>

                <div class="header__profile dropdown">
                    <a class="header__profile-toggle dropdown__toggle"
                       href="javascript:void(0)" data-toggle="dropdown">
                        <div class="header__profile-image"><span
                                    class="header__profile-image-text">MA</span>
                            <img src="<?=base_url()?>/public/img/content/humans/item-4.jpg" alt="#">
                        </div>
                        <div class="header__profile-text"><span>Mark Anderson</span>
                        </div>
                        <span class="icon-arrow-down">
                                        <svg class="icon-icon-arrow-down">
                                            <use xlink:href="#icon-arrow-down"></use>
                                        </svg></span>
                    </a>
                    <div class="profile-dropdown dropdown-menu dropdown-menu--right"><a
                                class="profile-dropdown__item dropdown-menu__item"
                                href="javascript:void(0)" tabindex="0"><span
                                    class="profile-dropdown__icon">
                                            <svg class="icon-icon-user">
                                                <use xlink:href="#icon-user"></use>
                                            </svg></span><span>My Profile</span></a><a
                                class="profile-dropdown__item dropdown-menu__item"
                                href="javascript:void(0)" tabindex="0"><span
                                    class="profile-dropdown__icon">
                                            <svg class="icon-icon-chat">
                                                <use xlink:href="#icon-chat"></use>
                                            </svg></span><span>My chat</span></a><a
                                class="profile-dropdown__item dropdown-menu__item"
                                href="javascript:void(0)" tabindex="0"><span
                                    class="profile-dropdown__icon">
                                            <svg class="icon-icon-task">
                                                <use xlink:href="#icon-task"></use>
                                            </svg></span><span>Tasks</span></a><a
                                class="profile-dropdown__item dropdown-menu__item"
                                href="javascript:void(0)" tabindex="0"><span
                                    class="profile-dropdown__icon">
                                            <svg class="icon-icon-settings">
                                                <use xlink:href="#icon-settings"></use>
                                            </svg></span><span>Settings</span></a>
                        <div class="dropdown-menu__divider"></div>
                        <a
                                class="profile-dropdown__item dropdown-menu__item"
                                href="javascript:void(0)" tabindex="0"><span
                                    class="profile-dropdown__icon">
                                            <svg class="icon-icon-logout">
                                                <use xlink:href="#icon-logout"></use>
                                            </svg></span><span>Logout</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>