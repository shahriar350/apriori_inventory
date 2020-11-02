<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('head')
</head>
<body>
    <div id="app">
        <div class="bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <b-navbar toggleable="lg" type="dark">
                            <b-navbar-brand href="#">
                                logo
                            </b-navbar-brand>
                            <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

                            <b-collapse id="nav-collapse" is-nav>
                                <b-navbar-nav>
                                    <b-nav-item href="{{ route('admin.dashboard') }}" class="{{ ((request()->is('admin/dashboard')) ? 'active' : '')}}">Dashboard</b-nav-item>
                                    <b-nav-item href="{{ route('admin.product') }}" class="{{ ((request()->is('admin/products')) ? 'active' : '')}}">Products</b-nav-item>
                                </b-navbar-nav>

                                <!-- Right aligned nav items -->
                                <b-navbar-nav class="ml-auto">

                                    <b-nav-item-dropdown right>
                                        <!-- Using 'button-content' slot -->
                                        <template #button-content>
                                            <em>User</em>
                                        </template>
                                        <b-dropdown-item href="#">Profile</b-dropdown-item>
                                        <b-dropdown-item href="#">Sign Out</b-dropdown-item>
                                    </b-nav-item-dropdown>
                                </b-navbar-nav>
                            </b-collapse>
                        </b-navbar>
                    </div>

                </div>
            </div>
        </div>
        <div class="bg-light">
            <div class="container">
                @yield('body')
            </div>
        </div>
    </div>

<script src="{{ asset('js/Admin.js') }}"></script>
</body>
</html>
