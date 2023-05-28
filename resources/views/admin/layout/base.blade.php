<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- SEO -->
        <title>Admin Panel - @yield('title')</title>

        <!-- CSS -->
        <link rel="stylesheet" type='text/css' media='all' href="/css/main.css?v=<?php echo microtime(); ?>">
    </head>
    <body data-page-id="@yield('data-page-id')">
        @include('includes.admin-sidebar')

        <div class="off-canvas-content" data-off-canvas-content>
            <!-- Your page content lives here -->
            <div class="title-bar" style="margin-bottom: 3rem;">
              <div class="title-bar-left">
                <button class="menu-icon hide-for-large" type="button" data-open="offCanvas"></button>
                <span class="title-bar-title">{{ $_ENV['APP_NAME'] }}</span>
              </div>
            </div>

            @yield('content')
        </div>

        <script src="/js/main.js"></script>
    </body>
</html>

