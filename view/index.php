<?php
include '../util/corpo.php';
cabeca();
?>

<?php
sidebar();
?>
</div>
<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Navegação</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <form class="navbar-form">
                    <div class="input-group no-border">
                        <input type="text" value="" class="form-control" placeholder="Busca..">
                        <button type="submit" class="btn btn-white btn-round btn-just-icon">
                            <i class="material-icons">search</i>
                            <div class="ripple-container"></div>
                        </button>
                    </div>
                </form>
                <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">person</i>
                            <p class="d-lg-none d-md-block">
                                Usuario
                            </p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                            <a class="dropdown-item" href="#">Perfil</a>
                            <a class="dropdown-item" href="#">Configurações</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Sair</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6"></div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <p class="card-category text-center">Usuarios</p>
                            <h3 class="card-title text-center">3</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="fa fa-refresh"> Atualizar</i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">store</i>
                            </div>
                            <p class="card-category text-center">Produtos</p>
                            <h3 class="card-title text-center">3</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="fa fa-refresh"> Atualizar</i>
                            </div>
                        </div>
                    </div>
                </div>
                <!--                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card card-stats">
                                            <div class="card-header card-header-danger card-header-icon">
                                                <div class="card-icon">
                                                    <i class="material-icons">info_outline</i>
                                                </div>
                                                <p class="card-category text-center">Fixed Issues</p>
                                                <h3 class="card-title text-center">75</h3>
                                            </div>
                                            <div class="card-footer">
                                                <div class="stats">
                                                    <i class="material-icons">local_offer</i> Tracked from Github
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card card-stats">
                                            <div class="card-header card-header-info card-header-icon">
                                                <div class="card-icon">
                                                    <i class="fa fa-twitter"></i>
                                                </div>
                                                <p class="card-category text-center">Followers</p>
                                                <h3 class="card-title text-center">+245</h3>
                                            </div>
                                            <div class="card-footer">
                                                <div class="stats">
                                                    <i class="material-icons">update</i> Just Updated
                                                </div>
                                            </div>
                                        </div>
                                    </div>-->
            </div>

            <div class="row">
                
</div>

<script>
    $(document).ready(function() {
    $().ready(function() {
    $sidebar = $('.sidebar');
            $sidebar_img_container = $sidebar.find('.sidebar-background');
            $full_page = $('.full-page');
            $sidebar_responsive = $('body > .navbar-collapse');
            window_width = $(window).width();
            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();
            if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
    if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
    $('.fixed-plugin .dropdown').addClass('open');
    }

    }

    $('.fixed-plugin a').click(function(event) {
    // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
    if ($(this).hasClass('switch-trigger')) {
    if (event.stopPropagation) {
    event.stopPropagation();
    } else if (window.event) {
    window.event.cancelBubble = true;
    }
    }
    });
            $('.fixed-plugin .active-color span').click(function() {
    $full_page_background = $('.full-page-background');
            $(this).siblings().removeClass('active');
            $(this).addClass('active');
            var new_color = $(this).data('color');
            if ($sidebar.length != 0) {
    $sidebar.attr('data-color', new_color);
    }

    if ($full_page.length != 0) {
    $full_page.attr('filter-color', new_color);
    }

    if ($sidebar_responsive.length != 0) {
    $sidebar_responsive.attr('data-color', new_color);
    }
    });
            $('.fixed-plugin .background-color .badge').click(function() {
    $(this).siblings().removeClass('active');
            $(this).addClass('active');
            var new_color = $(this).data('background-color');
            if ($sidebar.length != 0) {
    $sidebar.attr('data-background-color', new_color);
    }
    });
            $('.fixed-plugin .img-holder').click(function() {
    $full_page_background = $('.full-page-background');
            $(this).parent('li').siblings().removeClass('active');
            $(this).parent('li').addClass('active');
            var new_image = $(this).find("img").attr('src');
            if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
    $sidebar_img_container.fadeOut('fast', function() {
    $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $sidebar_img_container.fadeIn('fast');
    });
    }

    if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
            $full_page_background.fadeOut('fast', function() {
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                    $full_page_background.fadeIn('fast');
            });
    }

    if ($('.switch-sidebar-image input:checked').length == 0) {
    var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
    }

    if ($sidebar_responsive.length != 0) {
    $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
    }
    });
            $('.switch-sidebar-image input').change(function() {
    $full_page_background = $('.full-page-background');
            $input = $(this);
            if ($input.is(':checked')) {
    if ($sidebar_img_container.length != 0) {
    $sidebar_img_container.fadeIn('fast');
            $sidebar.attr('data-image', '#');
    }

    if ($full_page_background.length != 0) {
    $full_page_background.fadeIn('fast');
            $full_page.attr('data-image', '#');
    }

    background_image = true;
    } else {
    if ($sidebar_img_container.length != 0) {
    $sidebar.removeAttr('data-image');
            $sidebar_img_container.fadeOut('fast');
    }

    if ($full_page_background.length != 0) {
    $full_page.removeAttr('data-image', '#');
            $full_page_background.fadeOut('fast');
    }

    background_image = false;
    }
    });
            $('.switch-sidebar-mini input').change(function() {
    $body = $('body');
            $input = $(this);
            if (md.misc.sidebar_mini_active == true) {
    $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;
            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();
    } else {

    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');
            setTimeout(function() {
            $('body').addClass('sidebar-mini');
                    md.misc.sidebar_mini_active = true;
            }, 300);
    }

    <?php
    rodape();
    ?>
