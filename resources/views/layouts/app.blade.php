<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.includes.meta')
    @include('layouts.includes.topbar')
    @include('layouts.includes.style')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Hero Section Begin -->
        @include('layouts.includes.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Product Section Begin -->
                @include('layouts.includes.product-section')

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            @include('layouts.includes.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- @include('layouts.includes.scroll_top')
    @include('layouts.includes.logout_modal') -->
    @include('layouts.includes.script')

</body>

</html>