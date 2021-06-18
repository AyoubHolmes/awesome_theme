<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>TestAwesome</title>
        <?php wp_head(); ?>
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light" aria-label="Ninth navbar example">
                <div class="container-xl">
                    <a class="navbar-brand" href="#">Container XL</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarsExample07XL">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li style="color: #000" class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown07XL" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown07XL">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        </ul>
                        <form>
                        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                </div>
            </nav>
        </header>
        <header style="direction: rtl;">
            <nav class="navbar navbar-expand-lg navbar-light" aria-label="Ninth navbar example">
                <div class="container-xl">
                    <a class="logo_1" href="https://freemium.kezakoo.com/home/"><img src="<?php echo get_bloginfo('template_url') ?>/images/Logo_Kezakoo_black_orange (1) 1 (1).png"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
                        <span><img src="<?php echo get_bloginfo('template_url') ?>/images/Shape.png"></span>
                    </button>

                    <div style="margin-top: 20px; margin-right: 100px;background-color: white;" class="collapse navbar-collapse" id="navbarsExample07XL">
                        <?php
                            wp_nav_menu( array(
                                'theme_location'    => 'primary',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'bs-example-navbar-collapse-1',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            ) );
                        ?>
                    </div>
                </div>
            </nav>
        </header>
       