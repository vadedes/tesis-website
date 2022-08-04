<?php 

get_header(); ?>

<div class="inner--hero-page-section wf-section">
    <div class="inner-page-hero-img"></div>
    <div class="inner-page-section-container services-overview">
        <div class="container">
            <div class="inner-header-container">
                <div class="hero-headline-wrapper">
                    <h4 class="top-headline">SERVICES OVERVIEW</h4>
                    <h1 class="inner-hero-headline">Laboratory Testing &amp;<br>Clinical Diagnostics Center</h1>
                    <div class="btn-container">
                        <a href="#" class="btn btn-primary">Contact Form</a>
                        <a href="#" class="btn btn-secondary">Order a Sample Kit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="services-section wf-section">
    <div class="section-content-wrapper services">
        <div class="container">
            <div class="section-headline-wrapper">
                <div class="headline-wrapper">
                    <h2 class="secondary-headline">Next-Generation<br>Sequencing</h2>
                </div>
                <div class="headline-wrapper no-top-headline services-intro">
                    <p class="headline-description inner-pages">Tesis uses a genetically integrated medical platform to
                        perform high-complexity testing. Our experienced team specializes in creating next-generation
                        sequencing panels to identify changes in chromosomes, genes or proteins. We customize our
                        panels, equipment and workflows to address our partners’ objectives and better identify
                        predictors of specific chronic diseases.</p>
                </div>
            </div>
            <div class="section-content-wrapper inner-pages">
                <div bind="9f31611e-71e8-a75c-1046-152d3bc74502" class="w-dyn-list">
                    <div role="list" class="services-grid _2-col-tablet w-dyn-items">
                        <?php 
                                    $ngsServices = new WP_Query(array(
                                      'posts_per_page' => 10,
                                      'post_type' => 'next-gen-sequencing',
                                      'meta_key' => 'service_id',
                                      'orderby' => 'meta_value_num',
                                      'order' => 'ASC',
                                    ));
                                    
                                    while($ngsServices->have_posts()){
                                      $ngsServices->the_post(); ?>

                        <div role="listitem" class="w-dyn-item">
                            <div data-w-id="9bdaef03-1c51-5ebe-4d9b-3c1f34026d93" class="services-card">
                                <div class="card-border blue"></div>
                                <div style="height:0%" class="card-border orange"></div>
                                <div class="card-info-wrapper">
                                    <div class="card-icon-wrapper">
                                        <div class="icon"><img loading="lazy" style="display:block" src="<?php echo get_field('icon_blue')['url']; 
                                                              // print_r(get_field('icon_blue')['url']);
                                                            ?>" alt="" class="icon-img blue">

                                            <img loading="lazy" style="display:none"
                                                src="<?php echo get_field('icon_orange')['url']; ?>" alt=""
                                                class="icon-img orange">
                                        </div>
                                    </div>
                                    <div class="card-contentt-wrapper">
                                        <h4 style="color:rgb(51,51,51)" class="card-title">
                                            <?php the_title(); ?></h4>
                                        <p style="color:rgb(51,51,51)" class="card-info-desc">
                                            <?php echo get_field('short_description'); ?></p>
                                        <a style="color:rgb(22,112,177)" href="<?php the_permalink(); ?>"
                                            class="btn btn-card ">LEARN MORE</a>
                                    </div>
                                </div>
                                <div style="opacity:0" class="card-overlay"></div>
                                <div style="opacity:0; 
                                            background-image: url(<?php echo get_field('card_bg')['url']; ?>), 
                                            -webkit-gradient(linear, left top, left bottom, from(rgba(241, 97, 34, 0.76)), to(rgba(241, 97, 34, 0.50)));"
                                    class="card-bg"></div>
                            </div>
                        </div>

                        <?php  } wp_reset_postdata();?>

                    </div>

                    <!-- <div bind="9f31611e-71e8-a75c-1046-152d3bc74503" role="list"
                        class="services-grid _2-col-tablet w-dyn-items">
                        <!-- <div bind="9f31611e-71e8-a75c-1046-152d3bc74504" role="listitem" class="w-dyn-item">
                            <div data-w-id="9f31611e-71e8-a75c-1046-152d3bc74505" class="services-card">
                                <div class="card-border blue"></div>
                                <div style="height:0%" class="card-border orange"></div>
                                <div class="card-info-wrapper">
                                    <div class="card-icon-wrapper">
                                        <div class="icon"><img style="display:block"
                                                bind="9f31611e-71e8-a75c-1046-152d3bc7450b" src="" loading="lazy" alt=""
                                                class="icon-img blue"><img style="display:none"
                                                bind="9f31611e-71e8-a75c-1046-152d3bc7450c" src="" loading="lazy" alt=""
                                                class="icon-img orange"></div>
                                    </div>
                                    <div class="card-contentt-wrapper">
                                        <h4 bind="9f31611e-71e8-a75c-1046-152d3bc7450e" style="color:rgb(51,51,51)"
                                            class="card-title"></h4>
                                        <p bind="9f31611e-71e8-a75c-1046-152d3bc7450f" style="color:rgb(51,51,51)"
                                            class="card-info-desc"></p>
                                        <a bind="9f31611e-71e8-a75c-1046-152d3bc74510" style="color:rgb(22,112,177)"
                                            href="service-detail-page.html" class="btn btn-card w-button">LEARN MORE</a>
                                    </div>
                                </div>
                                <div style="opacity:0" class="card-overlay"></div>
                                <div bind="9f31611e-71e8-a75c-1046-152d3bc74513" style="opacity:0" class="card-bg">
                                </div>
                            </div>
                        </div> -->

                </div>
                <!-- <div bind="9f31611e-71e8-a75c-1046-152d3bc74514" class="w-dyn-empty">
                    <div>No items found.</div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="section-accent services-intro"><img src="<?php echo get_theme_file_uri('/images/section-accent-type-2.png'); ?>" loading="lazy"
            
            sizes="100vw" alt="" class="accent-bg-img"></div>
</div>
</div>
<div class="cytology-section wf-section">
    <div class="inner-page-section-container">
        <div class="container">
            <div class="section-content-wrapper split-img-left">
                <div class="section-split img-wrapper"><img
                        src="<?php echo get_theme_file_uri('images/cytology-img.jpg') ?>" loading="lazy" alt=""
                        class="section-split img"></div>
                <div class="section-split content-wrapper right-content">
                    <h2 class="secondary-headline">Cytology</h2>
                    <p class="headline-description inner-pages split-content">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Elementum urna at lacus tempor at ut amet ullamcorper. Ut feugiat eget sapien
                        sociis aenean. Sit amet nibh nisl sed ultrices. Tempor nunc nunc, nisi, ullamcorper duis
                        lobortis faucibus amet. Tortor commodo odio lectus sagittis, lacinia facilisi purus dolor.</p>
                    <a href="<?php echo site_url('/cytology-service-1'); ?>" class="cta-btn large w-inline-block">
                        <div class="cta-border-line"></div>
                        <div class="cta-btn-content-wrapper">
                            <div class="cta-btn-num-wrapper">
                                <h5 class="cta-btn-label-main number">01</h5>
                            </div>
                            <div class="cta-btn-text-wrapper">
                                <h5 class="cta-btn-label-main">SERVICE 1</h5>
                                <p class="paragraph-2">Lorem ipsum dolor sit amet, <br>consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="cta-btn-arrow"><img src="<?php echo get_theme_file_uri('images/arrow-right-chevron.svg'); ?>" loading="lazy" alt=""
                                class="icon-t2"></div>
                    </a>
                    <a href="<?php echo site_url('/cytology-service-2'); ?>" class="cta-btn large middle w-inline-block">
                        <div class="cta-border-line"></div>
                        <div class="cta-btn-content-wrapper">
                            <div class="cta-btn-num-wrapper">
                                <h5 class="cta-btn-label-main number">02</h5>
                            </div>
                            <div class="cta-btn-text-wrapper">
                                <h5 class="cta-btn-label-main">SERVICE 2</h5>
                                <p class="paragraph-2">Lorem ipsum dolor sit amet, <br>consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="cta-btn-arrow"><img src="<?php echo get_theme_file_uri('images/arrow-right-chevron.svg'); ?>" loading="lazy" alt=""
                                class="icon-t2"></div>
                    </a>
                    <a href="<?php echo site_url('/cytology-service-3'); ?>" class="cta-btn large w-inline-block">
                        <div class="cta-border-line"></div>
                        <div class="cta-btn-content-wrapper">
                            <div class="cta-btn-num-wrapper">
                                <h5 class="cta-btn-label-main number">03</h5>
                            </div>
                            <div class="cta-btn-text-wrapper">
                                <h5 class="cta-btn-label-main">SERVICE 3</h5>
                                <p class="paragraph-2">Lorem ipsum dolor sit amet, <br>consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="cta-btn-arrow"><img src="<?php echo get_theme_file_uri('images/arrow-right-chevron.svg'); ?>" loading="lazy" alt=""
                                class="icon-t2"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="section-accent services-intro"><img src="<?php echo get_theme_file_uri('images/section-accent-type-2.png'); ?>" loading="lazy"
            sizes="100vw" alt="" class="accent-bg-img"></div>
</div>
<div class="pgx-senior-care-section wf-section">
    <div class="inner-page-section-container">
        <div class="container">
            <div class="section-content-wrapper split-img-left">
                <div class="section-split content-wrapper left-content">
                    <h2 class="secondary-headline">PGx Senior Care</h2>
                    <p class="headline-description inner-pages split-content">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Neque sed risus, natoque tincidunt auctor natoque. Enim enim adipiscing vitae
                        tellus condimentum risus feugiat. Morbi vitae quis non purus penatibus ipsum. Consequat nulla
                        eget amet tincidunt ut amet fermentum vel.</p>
                    <div class="benefits-icon-container">
                        <div class="w-layout-grid benefits-icon-grid">
                            <div id="w-node-ea6c0fc3-83a2-80f0-c739-4bfc1d6bbeae-1b0fd0bb"
                                class="senior-benefits-icon-card"><img
                                    src="<?php echo get_theme_file_uri('images/Icon-1.svg'); ?>" loading="lazy" alt=""
                                    class="pgx-senior-icon blue"><img
                                    src="<?php echo get_theme_file_uri('images/Icon.svg');?>" loading="lazy" alt=""
                                    class="pgx-senior-icon white">
                                <div class="pgx-senior-benefits-heading">Benefit 1</div>
                                <div class="pgx-senior-benefits-heading sm">Figures</div>
                            </div>
                            <div id="w-node-db7dd4ba-e4b5-54de-fed1-6655baf1c93e-1b0fd0bb"
                                class="senior-benefits-icon-card"><img
                                    src="<?php echo get_theme_file_uri('images/update.svg');?>" loading="lazy" alt=""
                                    class="pgx-senior-icon blue"><img
                                    src="<?php echo get_theme_file_uri('images/update-1.svg');?>" loading="lazy" alt=""
                                    class="pgx-senior-icon white">
                                <div class="pgx-senior-benefits-heading">Benefit 2</div>
                                <div class="pgx-senior-benefits-heading sm">Figures</div>
                            </div>
                            <div id="w-node-c3a0714a-62d9-56d4-4ef1-0f8345f1d75f-1b0fd0bb"
                                class="senior-benefits-icon-card"><img
                                    src="<?php echo get_theme_file_uri('images/bar_chart.svg');?>" loading="lazy" alt=""
                                    class="pgx-senior-icon blue"><img
                                    src="<?php echo get_theme_file_uri('images/bar_chart-1.svg');?>" loading="lazy"
                                    alt="" class="pgx-senior-icon white">
                                <div class="pgx-senior-benefits-heading">Benefit 3</div>
                                <div class="pgx-senior-benefits-heading sm">Figures</div>
                            </div>
                            <div id="w-node-_3f996a5a-2c46-5ee6-c503-320c10bb2bcd-1b0fd0bb"
                                class="senior-benefits-icon-card"><img
                                    src="<?php echo get_theme_file_uri('images/verified_user.svg');?>" loading="lazy"
                                    alt="" class="pgx-senior-icon blue"><img
                                    src="<?php echo get_theme_file_uri('images/verified_user-1.svg');?>" loading="lazy"
                                    alt="" class="pgx-senior-icon white">
                                <div class="pgx-senior-benefits-heading">Benefit 4</div>
                                <div class="pgx-senior-benefits-heading sm">Figures</div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-container">
                        <a href="<?php echo site_url('/pgx-senior-care/pgx-senior-care/'); ?>"
                            class="btn btn-primary">Learn More</a>
                        <a href="<?php echo site_url('/services-overview/order-sample-kit/'); ?>"
                            class="btn btn-secondary">Order a Sample Kit</a>
                    </div>
                    <div bind="b6203e4b-8514-5424-f085-dbc006989e94" class="w-embed">
                        <style>
                        .senior-benefits-icon-card {
                            transition: all 0.4s ease-in-out;
                        }

                        .senior-benefits-icon-card:hover {
                            background-color: hsla(205, 78%, 39%, 0.7);
                            box-shadow: 0px 1.8518518209457397px 3.1481480598449707px 0px hsla(205, 78%, 39%, 0.02),
                                0px 8.148148536682129px 6.518518447875977px 0px hsla(205, 78%, 39%, 0.03),
                                0px 20px 13px 0px hsla(205, 78%, 39%, 0.04),
                                0px 38.51852035522461px 25.481481552124023px 0px hsla(205, 78%, 39%, 0.04),
                                0px 64.81481170654297px 46.85185241699219px 0px hsla(205, 78%, 39%, 0.05),
                                0px 100px 80px 0px hsla(205, 78%, 39%, 0.07);
                            transform: translateY(-5px);
                        }

                        .senior-benefits-icon-card:hover .pgx-senior-icon.blue {
                            display: none;
                        }

                        .senior-benefits-icon-card:hover .pgx-senior-icon.white {
                            display: block;
                        }

                        .senior-benefits-icon-card:hover .pgx-senior-benefits-heading {
                            color: #fff;
                        }

                        .senior-benefits-icon-card:hover .pgx-senior-benefits-heading.sm {
                            color: #fff;
                        }
                        </style>
                    </div>
                </div>
                <div class="section-split img-wrapper right-side"><img
                        src="<?php echo get_theme_file_uri('images/PGx-Senior-care.jpg')?>" loading="lazy" alt=""
                        class="section-split img"></div>
            </div>
        </div>
    </div>
</div>
<div class="family-planning-section wf-section">
    <div class="inner-page-section-container">
        <div class="container">
            <div class="section-content-wrapper split-img-left">
                <div class="section-split img-wrapper"><img
                        src="<?php echo get_theme_file_uri('images/Family-Planning--and-Prenatal.jpg')?>" loading="lazy"
                        alt="" class="section-split img"></div>
                <div class="section-split content-wrapper right-content">
                    <h2 class="secondary-headline">Family Planning <br>and Prenatal</h2>
                    <p class="headline-description inner-pages split-content">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Elementum urna at lacus tempor at ut amet ullamcorper. Ut feugiat eget sapien
                        sociis aenean. Sit amet nibh nisl sed ultrices. Tempor nunc nunc, nisi, ullamcorper duis
                        lobortis faucibus amet. Tortor commodo odio lectus sagittis, lacinia facilisi purus dolor.</p>
                    <a href="<?php echo site_url('/fam-plan-prenatal/genetic-carrier/'); ?>" class="cta-btn large w-inline-block">
                        <div class="cta-border-line"></div>
                        <div class="cta-btn-content-wrapper">
                            <div class="cta-btn-num-wrapper">
                                <h5 class="cta-btn-label-main number">01</h5>
                            </div>
                            <div class="cta-btn-text-wrapper">
                                <h5 class="cta-btn-label-main">GENETIC CARRIER</h5>
                                <p class="paragraph-2">Lorem ipsum dolor sit amet, <br>consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="cta-btn-arrow"><img src="<?php echo get_theme_file_uri('images/arrow-right-chevron.svg')?>" loading="lazy" alt=""
                                class="icon-t2"></div>
                    </a>
                    <a href="<?php echo site_url('/fam-plan-prenatal/assurenatal/'); ?>" class="cta-btn large middle w-inline-block">
                        <div class="cta-border-line"></div>
                        <div class="cta-btn-content-wrapper">
                            <div class="cta-btn-num-wrapper">
                                <h5 class="cta-btn-label-main number">02</h5>
                            </div>
                            <div class="cta-btn-text-wrapper">
                                <h5 class="cta-btn-label-main">ASSURENATAL</h5>
                                <p class="paragraph-2">Lorem ipsum dolor sit amet, <br>consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="cta-btn-arrow"><img src="<?php echo get_theme_file_uri('images/arrow-right-chevron.svg')?>" loading="lazy" alt=""
                                class="icon-t2"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="section-accent family-planning"><img src="images/section-accent-type-2.png" loading="lazy"
            srcset="images/section-accent-type-2-p-500.png 500w, images/section-accent-type-2-p-800.png 800w, images/section-accent-type-2-p-1080.png 1080w, images/section-accent-type-2.png 1600w"
            sizes="100vw" alt="" class="accent-bg-img"></div>
</div>
<div class="pathology-section wf-section">
    <div class="inner-page-section-container">
        <div class="container">
            <div class="section-content-wrapper split-img-left">
                <div class="section-split content-wrapper left-content">
                    <h2 class="secondary-headline">Pathology</h2>
                    <p class="headline-description inner-pages split-content pathology">Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Pellentesque ullamcorper interdum id ipsum scelerisque aliquam.
                        Malesuada volutpat porttitor blandit urna condimentum. Velit habitant ornare tempus, viverra
                        amet. Eget ullamcorper orci, bibendum cursus proin. Semper gravida ut mattis cras id lectus.
                        Semper amet, tellus at senectus risus, in et, eu. Adipiscing urna elit sed dictumst accumsan
                        hac.</p>
                    <div class="btn-container">
                        <a href="<?php echo site_url('/pathology/bone-marrow/') ?>" class="btn btn-primary">Learn
                            More</a>
                    </div>
                    <div bind="d8da513e-84cd-0472-68ea-dbb19509b521" class="w-embed">
                        <style>
                        .senior-benefits-icon-card {
                            transition: all 0.4s ease-in-out;
                        }

                        .senior-benefits-icon-card:hover {
                            background-color: hsla(205, 78%, 39%, 0.7);
                            box-shadow: 0px 1.8518518209457397px 3.1481480598449707px 0px hsla(205, 78%, 39%, 0.02),
                                0px 8.148148536682129px 6.518518447875977px 0px hsla(205, 78%, 39%, 0.03),
                                0px 20px 13px 0px hsla(205, 78%, 39%, 0.04),
                                0px 38.51852035522461px 25.481481552124023px 0px hsla(205, 78%, 39%, 0.04),
                                0px 64.81481170654297px 46.85185241699219px 0px hsla(205, 78%, 39%, 0.05),
                                0px 100px 80px 0px hsla(205, 78%, 39%, 0.07);
                            transform: translateY(-5px);
                        }

                        .senior-benefits-icon-card:hover .pgx-senior-icon.blue {
                            display: none;
                        }

                        .senior-benefits-icon-card:hover .pgx-senior-icon.white {
                            display: block;
                        }

                        .senior-benefits-icon-card:hover .pgx-senior-benefits-heading {
                            color: #fff;
                        }

                        .senior-benefits-icon-card:hover .pgx-senior-benefits-heading.sm {
                            color: #fff;
                        }
                        </style>
                    </div>
                </div>
                <div class="section-split img-wrapper right-side center">
                    <div class="w-layout-grid grid-2">
                        <div class="benefit-card pathology">
                            <div class="card-icon-wrapper benefits">
                                <div class="icon"><img
                                        src="<?php echo get_theme_file_uri('images/bone-marrow-icon.svg'); ?>"
                                        loading="lazy" alt="" class="icon-img"></div>
                            </div>
                            <div class="benefit-card-text-content pathology">
                                <h4 class="benefit-text pathology">Bone Marrow</h4>
                                <p class="pathology-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div>
                        <div class="benefit-card pathology">
                            <div class="card-icon-wrapper benefits">
                                <div class="icon"><img
                                        src="<?php echo get_theme_file_uri('images/prostate-icon.svg'); ?>"
                                        loading="lazy" alt="" class="icon-img"></div>
                            </div>
                            <div class="benefit-card-text-content pathology">
                                <h4 class="benefit-text pathology">Prostate</h4>
                                <p class="pathology-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div>
                        <div class="benefit-card pathology">
                            <div class="card-icon-wrapper benefits">
                                <div class="icon"><img
                                        src="<?php echo get_theme_file_uri('images/partner-physician.svg'); ?>"
                                        loading="lazy" alt="" class="icon-img"></div>
                            </div>
                            <div class="benefit-card-text-content pathology">
                                <h4 class="benefit-text pathology">Peripheral Blood</h4>
                                <p class="pathology-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div>
                        <div class="benefit-card pathology">
                            <div class="card-icon-wrapper benefits">
                                <div class="icon"><img
                                        src="<?php echo get_theme_file_uri('images/pathology-service-4.svg'); ?>"
                                        loading="lazy" alt="" class="icon-img"></div>
                            </div>
                            <div class="benefit-card-text-content pathology">
                                <h4 class="benefit-text pathology">Service No. 4</h4>
                                <p class="pathology-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div bind="eb2aeddd-be6f-afd6-32cf-d76f5882b085" class="w-embed">
                <style>
                .pathology-card-text {
                    transition: all 0.3s ease;
                }

                .benefit-card:hover .pathology-card-text {
                    color: #fff;
                }
                </style>
            </div>
        </div>
    </div>
    <div class="section-accent benefits pathology"><img
            src="<?php echo get_theme_file_uri('images/section-accent-type-3.png'); ?>" loading="lazy" sizes="100vw"
            alt="" class="accent-bg-img"></div>
</div>
<div bind="97f0c1b1-d614-298c-7a28-cad31d0a96c6" class="benefits-section wf-section">
    <div bind="97f0c1b1-d614-298c-7a28-cad31d0a96c7" class="benefits-section-container">
        <div bind="97f0c1b1-d614-298c-7a28-cad31d0a96c8" class="container">
            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a96c9" class="section-headline-wrapper center">
                <h4 bind="97f0c1b1-d614-298c-7a28-cad31d0a96ca" class="top-headline center">CUSTOMER BENEFITS</h4>
                <h2 bind="97f0c1b1-d614-298c-7a28-cad31d0a96cc" class="secondary-headline center">Tesis Biosciences
                    Advantages</h2>
            </div>
            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a96ce" class="section-content-wrapper benefits">
                <div bind="97f0c1b1-d614-298c-7a28-cad31d0a96cf" class="w-layout-grid benefits-grid"><img
                        src="<?php echo get_theme_file_uri('images/benefits-image.jpg'); ?>" loading="lazy"
                        id="w-node-_97f0c1b1-d614-298c-7a28-cad31d0a96d0-1d0a96c6"
                        bind="97f0c1b1-d614-298c-7a28-cad31d0a96d0" alt="" class="benefits-img">
                    <div bind="97f0c1b1-d614-298c-7a28-cad31d0a96d1"
                        id="w-node-_97f0c1b1-d614-298c-7a28-cad31d0a96d1-1d0a96c6" class="grid-container desktop">
                        <div bind="97f0c1b1-d614-298c-7a28-cad31d0a96d2" class="benefit-card">
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a96d3" class="card-icon-wrapper benefits">
                                <div bind="97f0c1b1-d614-298c-7a28-cad31d0a96d4" class="icon"><img
                                        src="<?php echo get_theme_file_uri('images/HL7-interfacing.svg'); ?>"
                                        loading="lazy" bind="97f0c1b1-d614-298c-7a28-cad31d0a96d5" alt=""
                                        class="icon-img"></div>
                            </div>
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a96d6" class="benefit-card-text-content">
                                <h4 bind="97f0c1b1-d614-298c-7a28-cad31d0a96d7" class="benefit-text">HL7 Interfacing or
                                    <br>API Reports
                                </h4>
                            </div>
                        </div>
                        <div bind="97f0c1b1-d614-298c-7a28-cad31d0a96db" class="benefit-card">
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a96dc" class="card-icon-wrapper benefits">
                                <div bind="97f0c1b1-d614-298c-7a28-cad31d0a96dd" class="icon"><img
                                        src="<?php echo get_theme_file_uri('images/portal.svg'); ?>" loading="lazy"
                                        bind="97f0c1b1-d614-298c-7a28-cad31d0a96de" alt="" class="icon-img"></div>
                            </div>
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a96df" class="benefit-card-text-content">
                                <h4 bind="97f0c1b1-d614-298c-7a28-cad31d0a96e0" class="benefit-text">Portal for
                                    <br>Real-Time Results
                                </h4>
                            </div>
                        </div>
                        <div bind="97f0c1b1-d614-298c-7a28-cad31d0a96e4" class="benefit-card">
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a96e5" class="card-icon-wrapper benefits">
                                <div bind="97f0c1b1-d614-298c-7a28-cad31d0a96e6" class="icon"><img
                                        src="<?php echo get_theme_file_uri('images/consistency.svg'); ?>" loading="lazy"
                                        bind="97f0c1b1-d614-298c-7a28-cad31d0a96e7" alt="" class="icon-img"></div>
                            </div>
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a96e8" class="benefit-card-text-content">
                                <h4 bind="97f0c1b1-d614-298c-7a28-cad31d0a96e9" class="benefit-text">Consistently Fast
                                    Turnaround Times</h4>
                            </div>
                        </div>
                        <div bind="97f0c1b1-d614-298c-7a28-cad31d0a96eb" class="benefit-card">
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a96ec" class="card-icon-wrapper benefits">
                                <div bind="97f0c1b1-d614-298c-7a28-cad31d0a96ed" class="icon"><img
                                        src="<?php echo get_theme_file_uri('images/quality.svg'); ?>" loading="lazy"
                                        bind="97f0c1b1-d614-298c-7a28-cad31d0a96ee" alt="" class="icon-img"></div>
                            </div>
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a96ef" class="benefit-card-text-content">
                                <h4 bind="97f0c1b1-d614-298c-7a28-cad31d0a96f0" class="benefit-text">Quality Diagnostics
                                    is <br>Our #1 Priority</h4>
                            </div>
                        </div>
                    </div>
                    <div bind="97f0c1b1-d614-298c-7a28-cad31d0a96f4"
                        id="w-node-_97f0c1b1-d614-298c-7a28-cad31d0a96f4-1d0a96c6" class="grid-container desktop">
                        <div bind="97f0c1b1-d614-298c-7a28-cad31d0a96f5" class="benefit-card">
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a96f6" class="card-icon-wrapper benefits">
                                <div bind="97f0c1b1-d614-298c-7a28-cad31d0a96f7" class="icon"><img
                                        src="<?php echo get_theme_file_uri('images/parent-first.svg'); ?>"
                                        loading="lazy" bind="97f0c1b1-d614-298c-7a28-cad31d0a96f8" alt=""
                                        class="icon-img"></div>
                            </div>
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a96f9" class="benefit-card-text-content">
                                <h4 bind="97f0c1b1-d614-298c-7a28-cad31d0a96fa" class="benefit-text">Patient First
                                    Culture</h4>
                            </div>
                        </div>
                        <div bind="97f0c1b1-d614-298c-7a28-cad31d0a96fc" class="benefit-card">
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a96fd" class="card-icon-wrapper benefits">
                                <div bind="97f0c1b1-d614-298c-7a28-cad31d0a96fe" class="icon"><img
                                        src="<?php echo get_theme_file_uri('images/partner-physician.svg'); ?>"
                                        loading="lazy" bind="97f0c1b1-d614-298c-7a28-cad31d0a96ff" alt=""
                                        class="icon-img"></div>
                            </div>
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a9700" class="benefit-card-text-content">
                                <h4 bind="97f0c1b1-d614-298c-7a28-cad31d0a9701" class="benefit-text">Partner to
                                    Physician</h4>
                            </div>
                        </div>
                        <div bind="97f0c1b1-d614-298c-7a28-cad31d0a9703" class="benefit-card">
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a9704" class="card-icon-wrapper benefits">
                                <div bind="97f0c1b1-d614-298c-7a28-cad31d0a9705" class="icon"><img
                                        src="<?php echo get_theme_file_uri('images/24-7.svg'); ?>" loading="lazy"
                                        bind="97f0c1b1-d614-298c-7a28-cad31d0a9706" alt="" class="icon-img"></div>
                            </div>
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a9707" class="benefit-card-text-content">
                                <h4 bind="97f0c1b1-d614-298c-7a28-cad31d0a9708" class="benefit-text">24/7 Access to Lab
                                    Experts</h4>
                            </div>
                        </div>
                        <div bind="97f0c1b1-d614-298c-7a28-cad31d0a970a" class="benefit-card">
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a970b" class="card-icon-wrapper benefits">
                                <div bind="97f0c1b1-d614-298c-7a28-cad31d0a970c" class="icon"><img
                                        src="<?php echo get_theme_file_uri('images/compliant.svg'); ?>" loading="lazy"
                                        bind="97f0c1b1-d614-298c-7a28-cad31d0a970d" alt="" class="icon-img"></div>
                            </div>
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a970e" class="benefit-card-text-content">
                                <h4 bind="97f0c1b1-d614-298c-7a28-cad31d0a970f" class="benefit-text">Complaint &amp;
                                    Accredited Laboratory</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div bind="97f0c1b1-d614-298c-7a28-cad31d0a9711" class="w-layout-grid benefits-grid tablet">
                    <div bind="97f0c1b1-d614-298c-7a28-cad31d0a9712"
                        id="w-node-_97f0c1b1-d614-298c-7a28-cad31d0a9712-1d0a96c6" class="grid-container">
                        <div bind="97f0c1b1-d614-298c-7a28-cad31d0a9713" class="benefit-card">
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a9714" class="card-icon-wrapper benefits">
                                <div bind="97f0c1b1-d614-298c-7a28-cad31d0a9715" class="icon"><img
                                        src="<?php echo get_theme_file_uri('images/HL7-interfacing.svg'); ?>"
                                        loading="lazy" bind="97f0c1b1-d614-298c-7a28-cad31d0a9716" alt=""
                                        class="icon-img"></div>
                            </div>
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a9717" class="benefit-card-text-content">
                                <h4 bind="97f0c1b1-d614-298c-7a28-cad31d0a9718" class="benefit-text">HL7 Interfacing or
                                    <br>API Reports
                                </h4>
                            </div>
                        </div>
                        <div bind="97f0c1b1-d614-298c-7a28-cad31d0a971c" class="benefit-card">
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a971d" class="card-icon-wrapper benefits">
                                <div bind="97f0c1b1-d614-298c-7a28-cad31d0a971e" class="icon"><img
                                        src="<?php echo get_theme_file_uri('images/portal.svg'); ?>" loading="lazy"
                                        bind="97f0c1b1-d614-298c-7a28-cad31d0a971f" alt="" class="icon-img"></div>
                            </div>
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a9720" class="benefit-card-text-content">
                                <h4 bind="97f0c1b1-d614-298c-7a28-cad31d0a9721" class="benefit-text">Portal for
                                    <br>Real-Time Results
                                </h4>
                            </div>
                        </div>
                        <div bind="97f0c1b1-d614-298c-7a28-cad31d0a9725" class="benefit-card">
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a9726" class="card-icon-wrapper benefits">
                                <div bind="97f0c1b1-d614-298c-7a28-cad31d0a9727" class="icon"><img
                                        src="<?php echo get_theme_file_uri('images/consistency.svg'); ?>" loading="lazy"
                                        bind="97f0c1b1-d614-298c-7a28-cad31d0a9728" alt="" class="icon-img"></div>
                            </div>
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a9729" class="benefit-card-text-content">
                                <h4 bind="97f0c1b1-d614-298c-7a28-cad31d0a972a" class="benefit-text">Consistently Fast
                                    Turnaround Times</h4>
                            </div>
                        </div>
                        <div bind="97f0c1b1-d614-298c-7a28-cad31d0a972c" class="benefit-card">
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a972d" class="card-icon-wrapper benefits">
                                <div bind="97f0c1b1-d614-298c-7a28-cad31d0a972e" class="icon"><img
                                        src="<?php echo get_theme_file_uri('images/quality.svg'); ?>" loading="lazy"
                                        bind="97f0c1b1-d614-298c-7a28-cad31d0a972f" alt="" class="icon-img"></div>
                            </div>
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a9730" class="benefit-card-text-content">
                                <h4 bind="97f0c1b1-d614-298c-7a28-cad31d0a9731" class="benefit-text">Quality Diagnostics
                                    is <br>Our #1 Priority</h4>
                            </div>
                        </div>
                    </div>
                    <div bind="97f0c1b1-d614-298c-7a28-cad31d0a9735"
                        id="w-node-_97f0c1b1-d614-298c-7a28-cad31d0a9735-1d0a96c6" class="grid-container">
                        <div bind="97f0c1b1-d614-298c-7a28-cad31d0a9736" class="benefit-card">
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a9737" class="card-icon-wrapper benefits">
                                <div bind="97f0c1b1-d614-298c-7a28-cad31d0a9738" class="icon"><img
                                        src="<?php echo get_theme_file_uri('images/parent-first.svg'); ?>"
                                        loading="lazy" bind="97f0c1b1-d614-298c-7a28-cad31d0a9739" alt=""
                                        class="icon-img"></div>
                            </div>
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a973a" class="benefit-card-text-content">
                                <h4 bind="97f0c1b1-d614-298c-7a28-cad31d0a973b" class="benefit-text">Patient First
                                    Culture</h4>
                            </div>
                        </div>
                        <div bind="97f0c1b1-d614-298c-7a28-cad31d0a973d" class="benefit-card">
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a973e" class="card-icon-wrapper benefits">
                                <div bind="97f0c1b1-d614-298c-7a28-cad31d0a973f" class="icon"><img
                                        src="<?php echo get_theme_file_uri('images/partner-physician.svg'); ?>"
                                        loading="lazy" bind="97f0c1b1-d614-298c-7a28-cad31d0a9740" alt=""
                                        class="icon-img"></div>
                            </div>
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a9741" class="benefit-card-text-content">
                                <h4 bind="97f0c1b1-d614-298c-7a28-cad31d0a9742" class="benefit-text">Partner to
                                    Physician</h4>
                            </div>
                        </div>
                        <div bind="97f0c1b1-d614-298c-7a28-cad31d0a9744" class="benefit-card">
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a9745" class="card-icon-wrapper benefits">
                                <div bind="97f0c1b1-d614-298c-7a28-cad31d0a9746" class="icon"><img
                                        src="<?php echo get_theme_file_uri('images/24-7.svg'); ?>" loading="lazy"
                                        bind="97f0c1b1-d614-298c-7a28-cad31d0a9747" alt="" class="icon-img"></div>
                            </div>
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a9748" class="benefit-card-text-content">
                                <h4 bind="97f0c1b1-d614-298c-7a28-cad31d0a9749" class="benefit-text">24/7 Access to Lab
                                    Experts</h4>
                            </div>
                        </div>
                        <div bind="97f0c1b1-d614-298c-7a28-cad31d0a974b" class="benefit-card">
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a974c" class="card-icon-wrapper benefits">
                                <div bind="97f0c1b1-d614-298c-7a28-cad31d0a974d" class="icon"><img
                                        src="<?php echo get_theme_file_uri('images/compliant.svg'); ?>" loading="lazy"
                                        bind="97f0c1b1-d614-298c-7a28-cad31d0a974e" alt="" class="icon-img"></div>
                            </div>
                            <div bind="97f0c1b1-d614-298c-7a28-cad31d0a974f" class="benefit-card-text-content">
                                <h4 bind="97f0c1b1-d614-298c-7a28-cad31d0a9750" class="benefit-text">Complaint &amp;
                                    Accredited Laboratory</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div bind="97f0c1b1-d614-298c-7a28-cad31d0a9752" class="section-accent benefits"><img
                src="<?php echo get_theme_file_uri('images/section-accent-type-3.png'); ?>" loading="lazy" sizes="100vw"
                bind="97f0c1b1-d614-298c-7a28-cad31d0a9753" alt="" class="accent-bg-img"></div>
    </div>
</div>
<div class="cta-section wf-section">
    <div class="container">
        <div class="cta-section-secondary">
            <div class="cta-bg-gradient"></div>
            <div class="cta-content-wrapper">
                <h4 class="top-headline center">CUSTOMER BENEFITS</h4>
                <h2 class="secondary-headline center">Tesis Biosciences Advantages</h2>
                <div class="btn-container center">
                    <a href="<?php echo site_url('/services-overview/contact-us') ?>" class="btn btn-primary">Contact
                        Form</a>
                    <a href="<?php echo site_url('/services-overview/order-sample-kit/') ?>"
                        class="btn btn-secondary">Order a Sample Kit</a>
                </div>
            </div>
            <div class="section-accent cta"><img
                    src="<?php echo get_theme_file_uri('images/section-accent-type-2.png'); ?>" loading="lazy"
                    sizes="(max-width: 479px) 83vw, (max-width: 767px) 90vw, (max-width: 1919px) 92vw, 1340px" alt=""
                    class="accent-bg-img"></div>
        </div>
    </div>
</div>


<?php get_footer(); 
?>