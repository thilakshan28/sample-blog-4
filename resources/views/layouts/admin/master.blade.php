<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.admin._meta')
    @include('layouts.admin._style')
</head>

<body class="header-fixed">
    @include('layouts.admin._header')
    <div class="page-body">
        @include('layouts.admin._sidebar')
        <div class="page-content-wrapper">
            <div class="page-content-wrapper-inner">
                <div class="content-viewport">
                    @yield('content')
                </div>
            </div>
        </div>
        @include('layouts.admin._footer')
    </div>
    @include('layouts.admin._script')
</body>

</html>