<?php
/*
Template Name: Blog Page12121
*/
?>


<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/odometer.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/default.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
  <!--Preloader-->
  <div id="preloader">
            <div id="loader" class="loader">
                <div class="loader-container">
                    <div class="loader-icon"><img src="assets/img/preloader.png" alt="Xolio - Creative Agency HTML5 Template"></div>
                </div>
            </div>
        </div>
        <!--Preloader-end -->

        <!-- Custom-cursor -->
        <div class="mouseCursor cursor-outer"></div>
        <div class="mouseCursor cursor-inner"><span>Drag</span></div>
        <!-- Custom-cursor-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header>
            <div id="sticky-header" class="menu-area transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav">
                                    <div class="logo">
                                        <a href="index.html"><img src="assets/img/logo/logo.png" alt="Logo"></a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                    <?php
        wp_nav_menu( array(
            'theme_location' => 'menu-principal',
            'container'      => false,
            'menu_class'     => 'navigation',
            'fallback_cb'    => false,
        ));
        ?>
                                    </div>
                                    <div class="header-action">
                                        <ul class="list-wrap">
                                            <li class="header-btn"><a href="#!" class="btn">Contact <span></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>

                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <nav class="menu-box">
                                    <div class="close-btn"><i class="fas fa-times"></i></div>
                                    <div class="nav-logo">
                                        <a href="index.html"><img src="assets/img/logo/logo.png" alt="Logo"></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix list-wrap">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->

                        </div>
                    </div>
                </div>

                <!-- header-contact -->
                <div class="header-contact-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="left-side-content">
                                    <h3 class="title">Contact</h3>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-5 col-md-6">
                                            <div class="contact-info-list">
                                                <ul class="list-wrap">
                                                    <li>
                                                        <div class="icon">
                                                            <svg viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M1.5 6.5C1.5 4.89295 1.95538 3.86848 2.63534 3.2371C3.32535 2.59637 4.36497 2.25 5.75 2.25H15.75C17.135 2.25 18.1746 2.59637 18.8647 3.2371C19.5446 3.86848 20 4.89295 20 6.5V13.5C20 15.107 19.5446 16.1315 18.8647 16.7629C18.1746 17.4036 17.135 17.75 15.75 17.75H5.75C4.36497 17.75 3.32535 17.4036 2.63534 16.7629C1.95538 16.1315 1.5 15.107 1.5 13.5V6.5ZM5.75 0.75C4.13503 0.75 2.67465 1.15363 1.61466 2.1379C0.544615 3.13152 0 4.60705 0 6.5V13.5C0 15.393 0.544615 16.8685 1.61466 17.8621C2.67465 18.8464 4.13503 19.25 5.75 19.25H15.75C17.365 19.25 18.8254 18.8464 19.8853 17.8621C20.9554 16.8685 21.5 15.393 21.5 13.5V6.5C21.5 4.60705 20.9554 3.13152 19.8853 2.1379C18.8254 1.15363 17.365 0.75 15.75 0.75H5.75ZM16.2181 7.58602C16.5417 7.32751 16.5945 6.85558 16.336 6.53194C16.0775 6.20829 15.6056 6.15548 15.2819 6.41398L12.1529 8.91324L12.1525 8.91352C11.3961 9.51536 10.0946 9.51549 9.33799 8.91393L6.21898 6.41471C5.89574 6.1557 5.42373 6.20778 5.16471 6.53102C4.9057 6.85426 4.95778 7.32627 5.28102 7.58529L8.40101 10.0853L8.40286 10.0868C9.70626 11.1244 11.7837 11.1244 13.0871 10.0868L13.0881 10.086L16.2181 7.58602Z" />
                                                            </svg>
                                                        </div>
                                                        <div class="content">
                                                            <a href="mailto:company@gmail.com">company@gmail.com</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <svg viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M2.48199 7.65591C3.37522 3.73032 6.71708 1.74769 10.1338 1.75C13.5508 1.75231 16.8905 3.73971 17.7791 7.66556L17.7791 7.6656C18.8362 12.3354 15.943 16.3756 13.2111 18.999L13.2097 19.0004C11.4913 20.659 8.77127 20.661 7.04076 18.9997C4.31866 16.3762 1.42493 12.3261 2.48199 7.65591ZM10.1348 0.250002C14.1154 0.252693 18.1706 2.60029 19.2421 7.33441C20.4848 12.8239 17.0589 17.3834 14.251 20.08C11.9497 22.3008 8.31046 22.2989 6.00106 20.0809L6.00012 20.08C3.20236 17.3836 -0.22362 12.8139 1.01908 7.32441L1.01926 7.32364C2.09618 2.58953 6.1542 0.247312 10.1348 0.250002ZM7.76166 9.30994C7.76166 8.00103 8.82274 6.93994 10.1317 6.93994C11.4406 6.93994 12.5017 8.00103 12.5017 9.30994C12.5017 10.6189 11.4406 11.6799 10.1317 11.6799C8.82274 11.6799 7.76166 10.6189 7.76166 9.30994ZM10.1317 5.43994C7.99432 5.43994 6.26166 7.1726 6.26166 9.30994C6.26166 11.4473 7.99432 13.1799 10.1317 13.1799C12.269 13.1799 14.0017 11.4473 14.0017 9.30994C14.0017 7.1726 12.269 5.43994 10.1317 5.43994Z" />
                                                            </svg>
                                                        </div>
                                                        <div class="content">
                                                            <span>Ranelagh Place, Liverpool, L3 5UL, England</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <svg viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M1.5 11C1.5 5.89421 5.64421 1.75 10.75 1.75C15.8558 1.75 20 5.89421 20 11C20 16.1058 15.8558 20.25 10.75 20.25C5.64421 20.25 1.5 16.1058 1.5 11ZM10.75 0.25C4.81579 0.25 0 5.06579 0 11C0 16.9342 4.81579 21.75 10.75 21.75C16.6842 21.75 21.5 16.9342 21.5 11C21.5 5.06579 16.6842 0.25 10.75 0.25ZM11.1289 6.50977C11.1289 6.09555 10.7931 5.75977 10.3789 5.75977C9.96469 5.75977 9.62891 6.09555 9.62891 6.50977V10.6098C9.62891 11.0862 9.79027 11.5637 10.0149 11.9576C10.2393 12.3511 10.5673 12.7322 10.9755 12.9744L10.9766 12.975L14.0746 14.8238C14.4303 15.0361 14.8907 14.9198 15.1029 14.5641C15.3152 14.2084 15.1989 13.748 14.8432 13.5357L11.7433 11.6857L11.7413 11.6845C11.6099 11.6067 11.4483 11.4431 11.3179 11.2145C11.1875 10.9859 11.1289 10.7633 11.1289 10.6098V6.50977Z" />
                                                            </svg>
                                                        </div>
                                                        <div class="content">
                                                            <span>7 Days a week <br> from 10-00 am to 6-00 pm</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="lats-chat">
                                                    <a href="contact.html">Lat’s Chat</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-7 col-md-6">
                                            <div class="our-best-project">
                                                <div class="content">
                                                    <h4 class="title">One of Our <span>Best Ongoing</span> Projects</h4>
                                                    <a href="project-details.html" class="btn">Details <span></span></a>
                                                </div>
                                                <div class="thumb">
                                                    <img src="assets/img/images/our_project_img.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="customer-support-wrap">
                                    <h4 class="title">Customer Support</h4>
                                    <div class="customer-support-content">
                                        <div class="content-top">
                                            <img src="assets/img/images/support_img.png" alt="">
                                            <h4 class="title">Need Help Choosing a Plan?</h4>
                                        </div>
                                        <p>We offer solutions for businesses of all sizes. For questions about our plans and products,,
                                            contact our team of experts. <a href="contact.html">Get in touch</a></p>
                                    </div>
                                    <div class="content-bottom">
                                        <a href="contact.html">Support</a>
                                        <a href="contact.html">Documentation</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="body-contact-overlay"></div>
                <!-- header-contact-end -->
            </div>
        </header>
        <!-- header-area-end -->


 <!-- breadcrumb area -->

            <section class="breadcrumb-area breadcrumb-area-three parallax pt-175 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2 class="title">Blog</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="breadcrumb-search">
                            <form action="<?php echo site_url('/blog-page'); ?>" method="get">
            <label for="search"><i class="far fa-search"></i></label>
            <input type="text" id="search" name="s" placeholder="Search for...">
            <button type="submit" class="btn">Procurar <span></span></button>
                            </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="breadcrumb-shape-wrap-two">
                    <div class="parallax-shape">
                        <img src="assets/img/images/breadcrumb_shape03.png" class="layer" data-depth="0.5" alt="img">
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- blog-area -->
<section class="inner-blog-area pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-70">
                <?php
                // Query dos últimos 9 posts
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 9
                );
                $the_query = new WP_Query($args);

                // Verifica se há posts
                if ($the_query->have_posts()) :
                    // Loop de posts
                    while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                <div class="inner-blog-item">
                    <div class="inner-blog-thumb">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                    <div class="inner-blog-content">
                        <div class="blog-meta-two">
                            <ul class="list-wrap">
                                <li class="tag"><?php the_category(', '); ?></li>
                                <li><i class="fal fa-clock"></i><?php the_time('G \h i'); ?></li>
                                <li><i class="fal fa-calendar"></i><?php the_time('F j, Y'); ?></li>
                                <li>By <?php the_author(); ?></li>
                            </ul>
                        </div>
                        <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                        <a href="<?php the_permalink(); ?>" class="rade-more-btn">Read More</a>
                    </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>No posts found</p>';
                endif;
                ?>
                
                <!-- Paginação -->
                <div class="pagination-wrap">
                    <?php
                    the_posts_pagination(array(
                        'mid_size' => 2,
                        'prev_text' => __('« Previous', 'textdomain'),
                        'next_text' => __('Next »', 'textdomain'),
                    ));
                    ?>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-30">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>
<!-- blog-area-end -->

            <!-- newsletter-area -->
            <section class="newsletter-area-two">
                <div class="container">
                    <div class="newsletter-wrap">
                        <div class="row justify-content-center">
                            <div class="col-xl-7 col-lg-9">
                                <div
                                    class="section-title title-style-two white-title text-center mb-30">
                                    <span class="sub-title">Get update</span>
                                    <h2 class="title">Get latest updates and deals</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                <div class="newsletter-form">
                                    <form action="#">
                                        <input type="email" placeholder="Enter your email address">
                                        <button type="submit" class="btn">Subscribe <span></span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="newsletter-shape-wrap-two">
                            <img src="assets/img/images/h3_newsletter_shape01.png" alt="">
                            <img src="assets/img/images/h3_newsletter_shape02.png" alt="">
                            <img src="assets/img/images/h3_newsletter_shape03.png" alt="">
                            <img src="assets/img/images/h3_newsletter_shape04.png" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <!-- newsletter-area-end -->

        </main>
            <!-- main end -->
<?php get_footer(); ?>
