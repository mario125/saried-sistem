    {include 'overall/head.tpl'}
<body class="theme-red">
    <!-- Page Loader -->
    {include 'overall/load.tpl'}
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    {include 'overall/buscar.tpl'}
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    {include 'overall/navbar.tpl'}
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            {include 'overall/info_user.tpl'}
            <!-- #User Info -->
            <!-- Menu -->
            {include 'overall/nav_movil.tpl'}
            <!-- #Menu -->
            <!-- Footer -->

            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
         {include 'overall/theme.tpl'}
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>BLANK PAGE</h2>
            </div>
        </div>
    </section>

    {include 'overall/js_footer.tpl'}
</body>

</html>
