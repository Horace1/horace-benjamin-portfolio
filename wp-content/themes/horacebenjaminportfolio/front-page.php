<?php get_header() ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-bg-one sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#top">
            <svg xmlns="http://www.w3.org/2000/svg" width="51.554" height="75.621" viewBox="0 0 51.554 75.621">
                <g id="Horace_Benjamin_-_Light-Colour" data-name="Horace Benjamin - Light-Colour" transform="translate(25.777 37.81)">
                    <g id="Group_52" data-name="Group 52" transform="translate(-25.777 -37.81)">
                        <g id="Group_51" data-name="Group 51" transform="translate(4.042 23.585)">
                            <rect id="Rectangle_51" data-name="Rectangle 51" width="21.736" height="3.963" transform="matrix(0.784, -0.62, 0.62, 0.784, 0.605, 19.411)" fill="#f7cf26"/>
                            <g id="Group_50" data-name="Group 50" transform="translate(26.355)">
                                <path id="Path_50" data-name="Path 50" d="M209.029,223.6a8.836,8.836,0,0,1-8.18,8.774l-.048,0H189.368v-3.963h10.883a4.814,4.814,0,0,0,.008-9.628H189.368V215.4h7.319a4.033,4.033,0,0,0,2.083-.576h1.48a8.777,8.777,0,0,1,8.778,8.776Z" transform="translate(-189.368 -203.924)" fill="#f2f1eb"/>
                                <path id="Path_51" data-name="Path 51" d="M204.1,154.342a7.357,7.357,0,0,1-1.13,3.918,7.456,7.456,0,0,1-5.777,3.491l-.04,0h-7.783v-3.347h7.319a4.064,4.064,0,0,0,.007-8.129h-7.326v-3.347h7.319A7.42,7.42,0,0,1,204.1,154.342Z" transform="translate(-189.368 -146.931)" fill="#f2f1eb"/>
                            </g>
                            <rect id="Rectangle_52" data-name="Rectangle 52" width="3.963" height="28.451" transform="translate(16.96 0)" fill="#f2f1eb"/>
                            <rect id="Rectangle_53" data-name="Rectangle 53" width="3.963" height="28.451" transform="translate(0 0)" fill="#f2f1eb"/>
                        </g>
                        <path id="Path_52" data-name="Path 52" d="M0,11.235l.952-.952a35.08,35.08,0,0,1,49.65,0l.952.952-2.8,2.8-.952-.952a31.115,31.115,0,0,0-44.045,0l-.952.952Z" fill="#f2f1eb"/>
                        <path id="Path_53" data-name="Path 53" d="M51.554,386.463l-.952.952a35.08,35.08,0,0,1-49.65,0L0,386.463l2.8-2.8.952.952a31.116,31.116,0,0,0,44.045,0l.952-.952Z" transform="translate(0 -322.078)" fill="#f2f1eb"/>
                    </g>
                </g>
            </svg>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'main-menu',
                    'menu_class'     => 'navbar-nav ms-auto',
                    'container'      => false,
                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                )
            );
            ?>
        </div>
    </div>
</nav>
<section class="py-5 mb-4 bg-bg-two home-hero">
    <div class="container-fluid">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <svg class="bd-placeholder-img rounded-circle" width="300" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                        <image href="<?php echo get_template_directory_uri(); ?>/assets/images/me.jpg" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" />
                    </svg>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h1 class="display-5 fw-bold text-white pt-3">Horace Benjamin Portfolio</h1>
                    <p class="col-md-8 fs-4 text-white">I am a Web developer based in Sheffield specialising in Website and Web Application Development.</p>
                    <a class="btn btn-custom-yellow btn-lg" href="<?php echo get_template_directory_uri(); ?>/assets/files/Horace-Benjamin-CV.pdf" title="Downloads CV" download>Download CV</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5 mb-4" id="about_me">
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <?php get_template_part( 'template-partials/section','content' ); ?>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2>My Skills</h2>
                    <div class="skills">
                        <div class="skills__section">
                            <h5 class="skills__heading">Frontend</h5>
                            <div class="skills__group">
                                <div class="skills__row">
                                    <div class="skills__skill"><i class="fa-brands fa-html5"></i> HTML 5</div>
                                    <div class="skills__skill"><i class="fa-brands fa-css3-alt"></i> CSS 3</div>
                                </div>
                                <div class="skills__row">
                                    <div class="skills__skill"><i class="fa-brands fa-js"></i> JavaScript</div>
                                    <div class="skills__skill"><i class="fa-brands fa-sass"></i> Sass</div>
                                 </div>
                                <div class="skills__row">
                                    <div class="skills__skill"><i class="fa-brands fa-vuejs"></i> Vue.js</div>
                                </div>
                            </div>
                        </div>
                        <div class="skills__section">
                            <h5 class="skills__heading">Backend</h5>
                            <div class="skills__group">
                                <div class="skills__row">
                                    <div class="skills__skill"><i class="fa-brands fa-php"></i> PHP</div>
                                    <div class="skills__skill"><i class="fa-brands fa-laravel"></i> Laravel</div>
                                </div>
                                <div class="skills__row">
                                    <div class="skills__skill"><i class="fa-solid fa-database"></i> MySQL</div>
                                </div>
                            </div>
                        </div>
                        <div class="skills__section">
                            <h5 class="skills__heading">Tools & Platforms</h5>
                            <div class="skills__group">
                                <div class="skills__row">
                                    <div class="skills__skill"><i class="fa-brands fa-git"></i> Git</div>
                                    <div class="skills__skill"><i class="fa-brands fa-github"></i> GitHub</div>
                                </div>
                                <div class="skills__row">
                                    <div class="skills__skill"><i class="fa-brands fa-bitbucket"></i> Bitbucket</div>
                                    <div class="skills__skill"><i class="fa-brands fa-sourcetree"></i> SourceTree</div>
                                </div>
                                <div class="skills__row">
                                    <div class="skills__skill"><i class="fa-brands fa-wordpress"></i> WordPress</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-bg-two py-5" id="portfolio">
    <div class="pt-4">
        <h2 class="text-center text-white">My Portfolio</h2>
        <p class="text-center text-white">Here are some personal projects from my GitHub</p>
    </div><!-- /.row -->
    <div class="container">
        <?php
            $args = array(
                'post_type'      => 'Projects',
                'posts_per_page' => 4,
                'order'          => 'ASC',
            );
            $loop = new WP_Query($args);
        ?>
        <div class="row pt-5 pb-4">
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class="col-lg-6 col-md-6 col-sm-12 mt-4">
                    <div class="h-100 p-5 text-bg-dark rounded-3">
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </div>
                </div><!-- /.col-lg-6 -->
            <?php endwhile; ?>
        </div><!-- /.row -->
        <div class="row pt-4">
            <div class="col-12">
                <div class="text-center">
                    <a class="btn btn-custom-yellow btn-lg text-center" href="https://github.com/horace1" target="_blank" title="View GitHub Portfolio"><i class="fa-brands fa-github"></i> View my GitHub Repositories</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5 mb-4" id="contact_me">
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2>Contact Me</h2>
                    <p>Feel free to contact me</p>
                    <ul class="list-unstyled">
                        <li class="mb-2 fs-5"><i class="fa-solid fa-mobile-screen"></i> 07932212729</li>
                        <li class="mb-2 fs-5"><i class="fa-solid fa-envelope"></i> horacebenjamin84@googlemail.com</li>
                        <li class="mb-2 fs-5"><i class="fa-brands fa-linkedin"></i> linkedin.com/in/horace-benjamin-78214353</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mt-lg-0 mt-md-0 mt-5">
                    <h2>Contact Form</h2>
                    <?php echo do_shortcode('[wpforms id="15"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer() ?>