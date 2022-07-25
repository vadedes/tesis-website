<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Tue Jul 12 2022 13:27:25 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="62ac66b6f2835b433aa9b880" data-wf-site="62ac66b6f2835b1573a9b87f">

<head>
    <meta charset="utf-8">
    <title>Tesis Biosciences</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Tesis Biosciences" name="generator">
    <?php wp_head(); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
    WebFont.load({
        google: {
            families: ["Droid Serif:400,400italic,700,700italic", "Inter:300,regular,500,600,700,800,900",
                "Poppins:300,regular,italic,500,600,700,800,900"
            ]
        }
    });
    </script>
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">
    ! function(o, c) {
        var n = c.documentElement,
            t = " w-mod-";
        n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n
            .className += t + "touch")
    }(window, document);
    </script>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="images/webclip.png" rel="apple-touch-icon">
</head>

<body <?php body_class() ?>>
    <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease"
        role="banner" class="navbar">
        <div class="nav-container">
            <a href="<?php echo site_url('/') ?>" aria-current="page" class="w-nav-brand w--current"><img
                    src="<?php echo get_theme_file_uri('/images/Tesis-Logo.svg') ?>" loading="lazy" alt=""
                    class="logo-img"></a>
            <div class="nav-links-container">
                <nav role="navigation" class="nav-menu w-nav-menu">
                    <a href="<?php echo site_url('/') ?>" aria-current="page"
                        class="nav-link main-nav w-nav-link w--current">Home</a>
                    <div data-hover="true" data-delay="0" class="nav-link w-dropdown">
                        <div class="nav-link w-dropdown-toggle">
                            <div class="w-icon-dropdown-toggle"></div>
                            <div>Services</div>
                        </div>
                        <nav class="dropdown-list w-dropdown-list">
                            <a href="<?php echo site_url('/services-overview'); ?>"
                                class="nav-sub-menu w-dropdown-link">Services Overview</a>
                            <div data-hover="true" data-delay="0" class="nav-link sub-nav w-dropdown">
                                <div class="nav-link sub-nav w-dropdown-toggle">
                                    <div class="w-icon-dropdown-toggle"></div>
                                    <div>Next-Generation Sequencing</div>
                                </div>
                                <nav class="dropdown-list sub-nav w-dropdown-list">
                                    <div class="w-dyn-list">
                                        <div role="list" class="w-dyn-items">
                                            <?php
                                                // wp_nav_menu(array(
                                                //     'theme_location' => 'headerMenuLocation',
                                                // ))
                                            ?>
                                            <div role="listitem" class="w-dyn-item">
                                                <a href="<?php echo site_url('/next-gen-sequencing/pgx-testing/'); ?>"
                                                    class="nav-sub-menu w-dropdown-link">PGx Testing</a>
                                            </div>
                                            <div role="listitem" class="w-dyn-item">
                                                <a href="<?php echo site_url('/next-gen-sequencing/cgx-testing/'); ?>"
                                                    class="nav-sub-menu w-dropdown-link">CGx Testing</a>
                                            </div>
                                            <div role="listitem" class="w-dyn-item">
                                                <a href="<?php echo site_url('/next-gen-sequencing/pulmonary/'); ?>"
                                                    class="nav-sub-menu w-dropdown-link">Pulmonary</a>
                                            </div>
                                            <div role="listitem" class="w-dyn-item">
                                                <a href="<?php echo site_url('/next-gen-sequencing/urology/'); ?>"
                                                    class="nav-sub-menu w-dropdown-link">Urology</a>
                                            </div>
                                            <div role="listitem" class="w-dyn-item">
                                                <a href="<?php echo site_url('/next-gen-sequencing/wound-care/'); ?>"
                                                    class="nav-sub-menu w-dropdown-link">Wound Care</a>
                                            </div>
                                            <div role="listitem" class="w-dyn-item">
                                                <a href="<?php echo site_url('/next-gen-sequencing/anesthesia/'); ?>"
                                                    class="nav-sub-menu w-dropdown-link">Anesthesia</a>
                                            </div>
                                            <div role="listitem" class="w-dyn-item">
                                                <a href="<?php echo site_url('/next-gen-sequencing/neurology/'); ?>"
                                                    class="nav-sub-menu w-dropdown-link">Neurology</a>
                                            </div>
                                            <div role="listitem" class="w-dyn-item">
                                                <a href="<?php echo site_url('/next-gen-sequencing/cardiac/'); ?>"
                                                    class="nav-sub-menu w-dropdown-link">Cardiac</a>
                                            </div>
                                            <div role="listitem" class="w-dyn-item">
                                                <a href="<?php echo site_url('/next-gen-sequencing/diabetes/'); ?>"
                                                    class="nav-sub-menu w-dropdown-link">Diabetes</a>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                            <!-- CYTOLOGY -->
                            <div data-hover="true" data-delay="0" class="nav-link sub-nav w-dropdown">
                                <div class="nav-link sub-nav w-dropdown-toggle">
                                    <div class="w-icon-dropdown-toggle"></div>
                                    <div>Cytology</div>
                                </div>
                                <nav class="dropdown-list sub-nav w-dropdown-list">
                                    <div class="w-dyn-list">
                                        <div role="list" class="w-dyn-items">
                                            <div role="listitem" class="w-dyn-item">
                                                <a href="<?php echo site_url('/cytology/cytology-service-1/'); ?>"
                                                    class="nav-sub-menu w-dropdown-link">Cytology Service 1</a>
                                            </div>
                                            <div role="listitem" class="w-dyn-item">
                                                <a href="<?php echo site_url('/cytology/cytology-service-2/'); ?>"
                                                    class="nav-sub-menu w-dropdown-link">Cytology Service 2</a>
                                            </div>
                                            <div role="listitem" class="w-dyn-item">
                                                <a href="<?php echo site_url('/cytology/cytology-service-3/'); ?>"
                                                    class="nav-sub-menu w-dropdown-link">Cytology Service 3</a>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>

                            <!-- <a href="#" class="nav-sub-menu w-dropdown-link">Cytology</a> -->
                            <!-- PGX SENIOR CARE -->
                            <a href="<?php echo site_url('/pgx-senior-care/pgx-senior-care/'); ?>"
                                class="nav-sub-menu w-dropdown-link">PGx Senior Care</a>

                            <!-- FAMILY PLANNING & PRENATAL -->
                            <div data-hover="true" data-delay="0" class="nav-link sub-nav w-dropdown">
                                <div class="nav-link sub-nav w-dropdown-toggle">
                                    <div class="w-icon-dropdown-toggle"></div>
                                    <div>Family Planning &amp; Prenatal</div>
                                </div>
                                <nav class="dropdown-list sub-nav w-dropdown-list">
                                    <div class="w-dyn-list">
                                        <div role="list" class="w-dyn-items">
                                            <div role="listitem" class="w-dyn-item">
                                                <a href="<?php echo site_url('/fam-plan-prenatal/genetic-carrier/'); ?>"
                                                    class="nav-sub-menu w-dropdown-link">Genetic Carrier</a>
                                            </div>
                                            <div role="listitem" class="w-dyn-item">
                                                <a href="<?php echo site_url('/fam-plan-prenatal/assurenatal/'); ?>"
                                                    class="nav-sub-menu w-dropdown-link">Assurenatal</a>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                            <!-- <a href="#" class="nav-sub-menu w-dropdown-link">Family Planning &amp; Prenatal</a> -->

                            <!-- PATHOLOGY -->
                            <div data-hover="true" data-delay="0" class="nav-link sub-nav w-dropdown">
                                <div class="nav-link sub-nav w-dropdown-toggle">
                                    <div class="w-icon-dropdown-toggle"></div>
                                    <div>Pathology</div>
                                </div>
                                <nav class="dropdown-list sub-nav w-dropdown-list">
                                    <div class="w-dyn-list">
                                        <div role="list" class="w-dyn-items">
                                            <div role="listitem" class="w-dyn-item">
                                                <a href="<?php echo site_url('/pathology/bone-marrow/'); ?>"
                                                    class="nav-sub-menu w-dropdown-link">Bone Marrow</a>
                                            </div>
                                            <div role="listitem" class="w-dyn-item">
                                                <a href="<?php echo site_url('/pathology/prostate/'); ?>"
                                                    class="nav-sub-menu w-dropdown-link">Prostate</a>
                                            </div>
                                            <div role="listitem" class="w-dyn-item">
                                                <a href="<?php echo site_url('/pathology/peripheral-blood/'); ?>"
                                                    class="nav-sub-menu w-dropdown-link">Peripheral Blood</a>
                                            </div>
                                            <div role="listitem" class="w-dyn-item">
                                                <a href="<?php echo site_url('/pathology/pathology-service-4/'); ?>"
                                                    class="nav-sub-menu w-dropdown-link">Pathology Service 4</a>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                            <!-- <a href="#" class="nav-sub-menu w-dropdown-link">Pathology</a> -->
                        </nav>
                    </div>
                    <div data-hover="true" data-delay="0" class="nav-link w-dropdown">
                        <div class="nav-link w-dropdown-toggle">
                            <div class="w-icon-dropdown-toggle"></div>
                            <div>Company</div>
                        </div>
                        <nav class="dropdown-list w-dropdown-list">
                            <a href="our-story.html" class="nav-sub-menu w-dropdown-link">Our Story</a>
                            <a href="science-innovation.html" class="nav-sub-menu w-dropdown-link">Science &amp;
                                Innovation</a>
                            <a href="careers.html" class="nav-sub-menu w-dropdown-link">Careers</a>
                            <a href="blogs.html" class="nav-sub-menu w-dropdown-link">Blogs</a>
                        </nav>
                    </div>
                    <div data-hover="true" data-delay="0" class="nav-link w-dropdown">
                        <div class="nav-link w-dropdown-toggle">
                            <div class="w-icon-dropdown-toggle"></div>
                            <div>Resources</div>
                        </div>
                        <nav class="dropdown-list w-dropdown-list">
                            <a href="physician-forms.html" class="nav-sub-menu w-dropdown-link">Physician Forms</a>
                            <a href="patient-forms.html" class="nav-sub-menu w-dropdown-link">Patient Forms</a>
                            <a href="https://tesis-biosciences.webflow.io/patient-forms?tab=patient-forms-section#patientFaq"
                                class="nav-sub-menu w-dropdown-link">Patient FAQ</a>
                            <a href="order-sample-kit.html" class="nav-sub-menu w-dropdown-link">Order a Sample Kit</a>
                        </nav>
                    </div>
                    <a href="locations.html" class="nav-link main-nav w-nav-link">Locations</a>
                    <a href="contact-us.html" class="nav-link main-nav w-nav-link">Contact</a>
                    <div class="search-overlay-btn">
                        <a href="#" class="search-link w-inline-block">
                            <svg class="seach-btn" width="37" height="37" viewBox="0 0 37 37" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M23.8929 22.01C24.999 20.7033 25.666 19.0131 25.666 17.167C25.666 13.0249 22.3082 9.66699 18.166 9.66699C14.0239 9.66699 10.666 13.0249 10.666 17.167C10.666 21.3091 14.0239 24.667 18.166 24.667C20.0121 24.667 21.7024 24 23.009 22.8939L25.2241 25.1089C25.4682 25.353 25.8639 25.353 26.108 25.1089C26.352 24.8649 26.352 24.4691 26.108 24.225L23.8929 22.01ZM24.416 17.167C24.416 20.6188 21.6178 23.417 18.166 23.417C14.7142 23.417 11.916 20.6188 11.916 17.167C11.916 13.7152 14.7142 10.917 18.166 10.917C21.6178 10.917 24.416 13.7152 24.416 17.167Z"
                                    fill="#333333" />
                            </svg>
                        </a>
                    </div>
                    <a href="#" class="btn btn-portal mb">Portal Login</a>
                </nav>
                <div class="menu-button w-nav-button">
                    <div class="w-icon-nav-menu"></div>
                </div>
                <a href="https://portal.clarolaboratory.com/" target="_blank" class="btn btn-portal lg">Portal Login</a>
                <div class="w-embed">
                    <style>
                    .btn-portal {
                        box-shadow: 0px 1.2407407760620117px 3.1481480598449707px 0px #F1612204,
                            0px 5.459259033203125px 6.518518447875977px 0px #F1612207,
                            0px 13.399999618530273px 13px 0px #F1612209,
                            0px 25.80740737915039px 25.481481552124023px 0px #F161220B,
                            0px 43.425926208496094px 46.85185241699219px 0px #F161220E,
                            0px 67px 80px 0px #F1612212;
                    }

                    .btn-portal:hover {
                        box-shadow: none;
                        transform: translateY(-5px);
                        background-color: #1670b1;
                    }
                    </style>
                </div>
            </div>
        </div>
        <div data-w-id="519f64bb-ae26-46df-ca57-94bb23cba33e" class="nav-bg"></div>
    </div>