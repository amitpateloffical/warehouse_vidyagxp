<div class="sidebar bg--dark">
    <button class="res-sidebar-close-btn"><i class="la la-times"></i></button>
    <div class="sidebar__inner">
        <div class="sidebar__logo">
            <a href="{{ route('admin.dashboard') }}" class="sidebar__main-logo">
                <img src="{{ getImage(getFilePath('logoIcon') . '/logo.png') }}" alt="@lang('image')" style="scale: 4">
            </a>
        </div>

        @php
            $admin = auth()
                ->guard('admin')
                ->user();
        @endphp

        <div class="sidebar__menu-wrapper" id="sidebar__menuWrapper">
            <ul class="sidebar__menu">
                @can('admin.dashboard')
                <li class="sidebar-menu-item {{ menuActive('admin.dashboard') }}">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link ">
                        <i class="menu-icon la la-home"></i>
                        <span class="menu-title">@lang('Dashboard')</span>
                    </a>
                </li>
                @endcan

                @can('admin.staff.index')
                    <li class="sidebar-menu-item sidebar-dropdown">
                        <a class="{{ menuActive(['admin.staff*', 'admin.roles.*'], 3) }}" href="javascript:void(0)">
                            <i class="menu-icon las la-users"></i>
                            <span class="menu-title">@lang('Manage Staff')</span>
                        </a>
                        <div
                            class="sidebar-submenu {{ menuActive(['admin.staff*', 'admin.roles.*', 'admin.permissions*'], 2) }}">
                            <ul>
                                @can('admin.staff.index')
                                    <li class="sidebar-menu-item {{ menuActive('admin.staff*') }}">
                                        <a class="nav-link" href="{{ route('admin.staff.index') }}">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">@lang('All Staff')</span>
                                        </a>
                                    </li>
                                @endcan

                                @can('admin.roles.index')
                                    <li class="sidebar-menu-item {{ menuActive('admin.roles*') }}">
                                        <a class="nav-link" href="{{ route('admin.roles.index') }}">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">@lang('Roles')</span>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </div>
                    </li>
                @endcan

                @can(['admin.product*'])
                    <li class="sidebar-menu-item sidebar-dropdown">
                        <a href="javascript:void(0)" class="{{ menuActive('admin.product*', 3) }}">
                            <i class="menu-icon lab la-product-hunt"></i>
                            <span class="menu-title">@lang('Manage Product')</span>
                        </a>
                        <div class="sidebar-submenu {{ menuActive('admin.product*', 2) }} ">
                            <ul>
                                @can('admin.product.category.index')
                                    <li class="sidebar-menu-item {{ menuActive('admin.product.category.index') }} ">
                                        <a href="{{ route('admin.product.category.index') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('Categories')</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('admin.product.brand.index')
                                    <li class="sidebar-menu-item {{ menuActive('admin.product.brand.index') }} ">
                                        <a href="{{ route('admin.product.brand.index') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('Brands')</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('admin.product.unit.index')
                                    <li class="sidebar-menu-item {{ menuActive('admin.product.unit.index') }} ">
                                        <a href="{{ route('admin.product.unit.index') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('Units')</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('admin.product.index')
                                    <li class="sidebar-menu-item {{ menuActive('admin.product.index') }} ">
                                        <a href="{{ route('admin.product.index') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('Products')</span>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </div>
                    </li>
                @endcan

                @can(['admin.warehouse*'])
                    <li class="sidebar-menu-item {{ menuActive('admin.warehouse.*') }}">
                        <a href="{{ route('admin.warehouse.index') }}" class="nav-link ">
                            <i class="menu-icon la la-warehouse"></i>
                            <span class="menu-title">@lang('Warehouse')</span>
                        </a>
                    </li>
                @endcan
                  @can(['admin.newexpirymateriyal*'])
                    <li class="sidebar-menu-item {{ menuActive('admin.newexpirymateriyal.*') }}">
                        <a href="{{ route('admin.newexp.index') }}" class="nav-link ">
                            <i class="menu-icon la la-warehouse"></i>
                            <span class="menu-title">@lang('New Expiry Materiyal')</span>
                        </a>
                    </li>
                @endcan

                @can(['admin.customer.payment*', 'admin.customer.notification*'], 'admin.customer.index')
                    <li
                        class="sidebar-menu-item {{ menuActive(['admin.customer.index', 'admin.customer.payment.*', 'admin.customer.notification.*']) }} ">
                        <a href="{{ route('admin.customer.index') }}" class="nav-link">
                            <i class="menu-icon la la-users"></i>
                            <span class="menu-title">@lang('Customer')</span>
                        </a>
                    </li>
                @endcan

                @can('admin.supplier.index')
                    <li class="sidebar-menu-item {{ menuActive(['admin.supplier.index', 'admin.supplier.payment.*']) }} ">
                        <a href="{{ route('admin.supplier.index') }}" class="nav-link">
                            <i class="menu-icon la la-user-friends"></i>
                            <span class="menu-title">@lang('Supplier')</span>
                        </a>
                    </li>
                @endcan
                @can(['admin.purchase*'])
                    <li class="sidebar-menu-item sidebar-dropdown">
                        <a href="javascript:void(0)" class="{{ menuActive('admin.purchase*', 3) }}">
                            <i class="menu-icon la la-shopping-bag"></i>
                            <span class="menu-title">@lang('Purchase')</span>
                        </a>
                        <div class="sidebar-submenu {{ menuActive('admin.purchase*', 2) }} ">
                            <ul>
                                @can('admin.purchase.index')
                                    <li class="sidebar-menu-item {{ menuActive('admin.purchase.index') }} ">
                                        <a href="{{ route('admin.purchase.index') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('All Purchases')</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('admin.purchase.return.index')
                                    <li class="sidebar-menu-item {{ menuActive('admin.purchase.return.index') }} ">
                                        <a href="{{ route('admin.purchase.return.index') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('Purchases Return')</span>
                                        </a>
                                    </li>

                                    
                                @endcan
                            </ul>
                        </div>
                    </li>
                @endcan

                @can(['admin.sale*'])
                    <li class="sidebar-menu-item sidebar-dropdown">
                        <a href="javascript:void(0)" class="{{ menuActive('admin.sale*', 3) }}">
                            <i class="menu-icon la la-shopping-cart"></i>
                            <span class="menu-title">@lang('Sale')</span>
                        </a>
                        <div class="sidebar-submenu {{ menuActive('admin.sale*', 2) }} ">
                            <ul>
                                @can('admin.sale.index')
                                    <li class="sidebar-menu-item {{ menuActive('admin.sale.index') }} ">
                                        <a href="{{ route('admin.sale.index') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('All Sales')</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('admin.sale.return.index')
                                    <li class="sidebar-menu-item {{ menuActive('admin.sale.return.index') }} ">
                                        <a href="{{ route('admin.sale.return.index') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('Sales Return')</span>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </div>
                    </li>
                @endcan

                @can(['admin.barcode*'])
                    <li class="sidebar-menu-item sidebar-dropdown">
                        <a href="javascript:void(0)" class="{{ menuActive(['admin.barcode', 'create', 'show'], 3) }}">
                            <i class="menu-icon la la-shopping-bag"></i>
                            <span class="menu-title">@lang('Barcode')</span>
                        </a>
                        
                        <div class="sidebar-submenu {{ menuActive(['admin.barcode', 'create', 'show'], 2) }}">
                            <ul>
                                @can('admin.barcode')
                                    <li class="sidebar-menu-item {{ menuActive('admin.barcode') }}">
                                        <a href="{{ url('all-barcode') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('All Barcode')</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('admin.barcode')
                                    <li class="sidebar-menu-item {{ menuActive('create') }}">
                                        <a href="{{ route('create') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('Create Barcode')</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('admin.barcode')
                                    <li class="sidebar-menu-item {{ menuActive('show') }}">
                                        <a href="{{ route('show') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('Show Barcode')</span>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </div>
                    </li>
                @endcan



                @can('admin.adjustment.index')
                    <li class="sidebar-menu-item {{ menuActive('admin.adjustment.*') }}">
                        <a href="{{ route('admin.adjustment.index') }}" class="nav-link ">
                            <i class="menu-icon la la-balance-scale"></i>
                            <span class="menu-title">@lang('Adjustment')</span>
                        </a>
                    </li>
                @endcan

                @can('admin.transfer.index')
                    <li class="sidebar-menu-item {{ menuActive('admin.transfer.*') }}">
                        <a href="{{ route('admin.transfer.index') }}" class="nav-link ">
                            <i class="menu-icon la la-retweet"></i>
                            <span class="menu-title">@lang('Transfer')</span>
                        </a>
                    </li>
                @endcan

                @can(['admin.expense*'])
                    <li class="sidebar-menu-item sidebar-dropdown">
                        <a href="javascript:void(0)" class="{{ menuActive('admin.expense*', 3) }}">
                            <i class="menu-icon la la-wallet"></i>
                            <span class="menu-title">@lang('Expense')</span>
                        </a>
                        <div class="sidebar-submenu {{ menuActive('admin.expense*', 2) }} ">
                            <ul>
                                @can('admin.expense.type.index')
                                    <li class="sidebar-menu-item {{ menuActive('admin.expense.type.index') }} ">
                                        <a href="{{ route('admin.expense.type.index') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('Type')</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('admin.expense.index')
                                    <li class="sidebar-menu-item {{ menuActive('admin.expense.index') }} ">
                                        <a href="{{ route('admin.expense.index') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('All Expenses')</span>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </div>
                    </li>
                @endcan
                @can(['admin.report*'])
                    <li class="sidebar__menu-header">@lang('Reports')</li>
                @endcan

                @can(['admin.report.payment*'])
                    <li class="sidebar-menu-item sidebar-dropdown">
                        <a href="javascript:void(0)" class="{{ menuActive('admin.report.payment.*', 3) }}">
                            <i class="menu-icon la la-money-check-alt"></i>
                            <span class="menu-title">@lang('Payment Report')</span>
                        </a>
                        <div class="sidebar-submenu {{ menuActive('admin.report.payment.*', 2) }} ">
                            <ul>
                                @can('admin.report.payment.supplier')
                                    <li class="sidebar-menu-item {{ menuActive('admin.report.payment.supplier') }} ">
                                        <a href="{{ route('admin.report.payment.supplier') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('Supplier Payments')</span>
                                        </a>
                                    </li>
                                @endcan

                                @can('admin.report.payment.customer')
                                    <li class="sidebar-menu-item {{ menuActive('admin.report.payment.customer') }} ">
                                        <a href="{{ route('admin.report.payment.customer') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('Customer Payments')</span>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </div>
                    </li>
                @endcan

                @can('admin.report.stock.index')
                    <li class="sidebar-menu-item {{ menuActive('admin.report.stock.index') }} ">
                        <a href="{{ route('admin.report.stock.index') }}" class="nav-link">
                            <i class="menu-icon la la-list"></i>
                            <span class="menu-title">@lang('Stock Report')</span>
                        </a>
                    </li>
                @endcan

                @can(['admin.report.data.entry*'])
                    <li class="sidebar-menu-item sidebar-dropdown">
                        <a href="javascript:void(0)" class="{{ menuActive('admin.report.data.entry*', 3) }}">
                            <i class="menu-icon la la-database"></i>
                            <span class="menu-title">@lang('Data Entry Report')</span>
                        </a>

                        <div class="sidebar-submenu {{ menuActive('admin.report.data.entry*', 2) }} ">
                            <ul>
                                @can('admin.report.data.entry.product')
                                    <li class="sidebar-menu-item {{ menuActive('admin.report.data.entry.product') }} ">
                                        <a href="{{ route('admin.report.data.entry.product') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('Product')</span>
                                        </a>
                                    </li>
                                @endcan

                                @can('admin.report.data.entry.customer')
                                    <li class="sidebar-menu-item {{ menuActive('admin.report.data.entry.customer') }} ">
                                        <a href="{{ route('admin.report.data.entry.customer') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('Customer')</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('admin.report.data.entry.supplier')
                                    <li class="sidebar-menu-item {{ menuActive('admin.report.data.entry.supplier') }} ">
                                        <a href="{{ route('admin.report.data.entry.supplier') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('Supplier')</span>
                                        </a>
                                    </li>
                                @endcan

                                @can('admin.report.data.entry.purchase')
                                    <li class="sidebar-menu-item {{ menuActive('admin.report.data.entry.purchase') }} ">
                                        <a href="{{ route('admin.report.data.entry.purchase') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span pan class="menu-title">@lang('Purchase')</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('admin.report.data.entry.purchase.return')
                                    <li
                                        class="sidebar-menu-item {{ menuActive('admin.report.data.entry.purchase.return') }} ">
                                        <a href="{{ route('admin.report.data.entry.purchase.return') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('Purchase Return')</span>
                                        </a>
                                    </li>
                                @endcan

                                @can('admin.report.data.entry.sale')
                                    <li class="sidebar-menu-item {{ menuActive('admin.report.data.entry.sale') }} ">
                                        <a href="{{ route('admin.report.data.entry.sale') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span pan class="menu-title">@lang('Sale')</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('admin.report.data.entry.sale.return')
                                    <li class="sidebar-menu-item {{ menuActive('admin.report.data.entry.sale.return') }} ">
                                        <a href="{{ route('admin.report.data.entry.sale.return') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('Sale Return')</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('admin.report.data.entry.adjustment')
                                    <li class="sidebar-menu-item {{ menuActive('admin.report.data.entry.adjustment') }} ">
                                        <a href="{{ route('admin.report.data.entry.adjustment') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('Adjustment')</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('admin.report.data.entry.transfer')
                                    <li class="sidebar-menu-item {{ menuActive('admin.report.data.entry.transfer') }} ">
                                        <a href="{{ route('admin.report.data.entry.transfer') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('Transfer')</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('admin.report.data.entry.expense')
                                    <li class="sidebar-menu-item {{ menuActive('admin.report.data.entry.expense') }} ">
                                        <a href="{{ route('admin.report.data.entry.expense') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('Expense')</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('admin.report.data.entry.supplier.payment')
                                    <li
                                        class="sidebar-menu-item {{ menuActive('admin.report.data.entry.supplier.payment') }} ">
                                        <a href="{{ route('admin.report.data.entry.supplier.payment') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('Supplier Payment')</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('admin.report.data.entry.customer.payment')
                                    <li
                                        class="sidebar-menu-item {{ menuActive('admin.report.data.entry.customer.payment') }} ">
                                        <a href="{{ route('admin.report.data.entry.customer.payment') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('Customer Payment')</span>
                                        </a>
                                    </li>
                                @endcan

                            </ul>
                        </div>
                    </li>
                @endcan
                @can(['admin.setting*'])
                    <li class="sidebar__menu-header">@lang('Settings')</li>
                @endcan
                @can('admin.setting.index')
                    <li class="sidebar-menu-item {{ menuActive('admin.setting.index') }}">
                        <a href="{{ route('admin.setting.index') }}" class="nav-link">
                            <i class="menu-icon la la-life-ring"></i>
                            <span class="menu-title">@lang('General Setting')</span>
                        </a>
                    </li>
                @endcan
                @can('admin.setting.system.configuration')
                    <li class="sidebar-menu-item {{ menuActive('admin.setting.system.configuration') }}">
                        <a href="{{ route('admin.setting.system.configuration') }}" class="nav-link">
                            <i class="menu-icon la la-cog"></i>
                            <span class="menu-title">@lang('System Configuration')</span>
                        </a>
                    </li>
                @endcan
                @can('admin.setting.logo.icon')
                    <li class="sidebar-menu-item {{ menuActive('admin.setting.logo.icon') }}">
                        <a href="{{ route('admin.setting.logo.icon') }}" class="nav-link">
                            <i class="menu-icon la la-images"></i>
                            <span class="menu-title">@lang('Logo & Favicon')</span>
                        </a>
                    </li>
                @endcan
                @can(['admin.setting.notification*'])
                    <li class="sidebar-menu-item sidebar-dropdown">
                        <a href="javascript:void(0)" class="{{ menuActive('admin.setting.notification*', 3) }}">
                            <i class="menu-icon la la-bell"></i>
                            <span class="menu-title">@lang('Notification Setting')</span>
                        </a>
                        <div class="sidebar-submenu {{ menuActive('admin.setting.notification*', 2) }} ">
                            <ul>
                                @can('admin.setting.notification.global')
                                    <li class="sidebar-menu-item {{ menuActive('admin.setting.notification.global') }} ">
                                        <a href="{{ route('admin.setting.notification.global') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('Global Template')</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('admin.setting.notification.email')
                                    <li class="sidebar-menu-item {{ menuActive('admin.setting.notification.email') }} ">
                                        <a href="{{ route('admin.setting.notification.email') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('Email Setting')</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('admin.setting.notification.sms')
                                    <li class="sidebar-menu-item {{ menuActive('admin.setting.notification.sms') }} ">
                                        <a href="{{ route('admin.setting.notification.sms') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('SMS Setting')</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('admin.setting.notification.templates')
                                    <li class="sidebar-menu-item {{ menuActive('admin.setting.notification.templates') }} ">
                                        <a href="{{ route('admin.setting.notification.templates') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('Notification Templates')</span>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </div>
                    </li>
                @endcan

                @can(['admin.system*'])
                    <li class="sidebar__menu-header">@lang('Extra')</li>
                    <li class="sidebar-menu-item sidebar-dropdown">
                        <a href="javascript:void(0)" class="{{ menuActive('admin.system*', 3) }}">
                            <i class="menu-icon la la-server"></i>
                            <span class="menu-title">@lang('System')</span>
                        </a>
                        <div class="sidebar-submenu {{ menuActive('admin.system*', 2) }} ">
                            <ul>
                                @can('admin.system.info')
                                    <li class="sidebar-menu-item {{ menuActive('admin.system.info') }} ">
                                        <a href="{{ route('admin.system.info') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('Application')</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('admin.system.server.info')
                                    <li class="sidebar-menu-item {{ menuActive('admin.system.server.info') }} ">
                                        <a href="{{ route('admin.system.server.info') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('Server')</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('admin.system.optimize')
                                    <li class="sidebar-menu-item {{ menuActive('admin.system.optimize') }} ">
                                        <a href="{{ route('admin.system.optimize') }}" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">@lang('Cache')</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('admin.system.update')
                                <li class="sidebar-menu-item {{ menuActive('admin.system.update') }} ">
                                    <a href="{{ route('admin.system.update') }}" class="nav-link">
                                        <i class="menu-icon las la-dot-circle"></i>
                                        <span class="menu-title">@lang('Update')</span>
                                    </a>
                                </li>
                                @endcan
                            </ul>
                        </div>
                    </li>
                @endcan
                @can('admin.request.report')
                    <li class="sidebar-menu-item  {{ menuActive('admin.request.report') }}">
                        <a href="{{ route('admin.request.report') }}" class="nav-link"
                            data-default-url="{{ route('admin.request.report') }}">
                            <i class="menu-icon la la-bug"></i>
                            <span class="menu-title">@lang('Report & Request') </span>
                        </a>
                    </li>
                @endcan
            </ul>
            <div class="text-center mb-3 text-uppercase">
                <span class="text--primary">{{ __(systemDetails()['name']) }}</span>
                <span class="text--success">@lang('V'){{ systemDetails()['version'] }} </span>
            </div>
        </div>
    </div>
</div>
<!-- sidebar end -->

@push('script')
    <script>
        if ($('li').hasClass('active')) {
            $('#sidebar__menuWrapper').animate({
                scrollTop: eval($(".active").offset().top - 320)
            }, 500);
        }
    </script>
@endpush
