<?php 

get_header(); ?>

<div class="home-hero-section wf-section">
    <div class="section-content-wrapper">
        <div class="container">
            <div class="home-hero-content">
                <div class="home-hero-content--left">
                    <h4 data-w-id="a4c6779c-7c72-79ea-62a3-0327c444825f"
                        style="opacity:0;-webkit-transform:translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                        class="top-headline">NEXT GENERATION SEQUENCING</h4>
                    <h1 data-w-id="b654c271-bb91-556c-1233-3aeb06e400ce"
                        style="opacity:0;-webkit-transform:translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                        class="primary-hero-headline">A Better Approach <br>To Exceptional Care</h1>
                    <p data-w-id="f9292423-a83d-9eec-afd2-a4bc76b96bfd"
                        style="-webkit-transform:translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                        class="home-hero-description">Bridge the gap between patient and complex laboratory testing with
                        Tesis Biosciences. Tesis provides physicians, physician groups, and hospital with full-service
                        complex clinical diagnostic testing accurately and quickly.</p>
                    <div data-w-id="20af55a6-e1a2-8ccb-59c0-c9fef0b22675"
                        style="-webkit-transform:translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                        class="btn-container">
                        <a href="services-overview.html" class="btn btn-primary ">Learn More</a>
                        <a href="order-sample-kit.html" class="btn btn-secondary ">Order a Sample Kit</a>
                    </div>
                </div>
                <div class="home-hero-content--right">
                    <?php 
                      function homePageBanner($args = NULL) {
                        if(!$args['photo']){
                          if(get_field('homepage_banner_image') AND is_home()) {
                            $args['photo'] = get_field('homepage_banner_image')['url'];
                          } else {
                            $args['photo'] = get_theme_file_uri('/images/home-hero-img.png');
                          }

                        }
                    ?>
                    <img src="<?php echo $args['photo']; ?>" loading="lazy"
                        style="-webkit-transform:translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                        data-w-id="67748cbd-b46f-289b-2fd2-ab59eca344fa" sizes="100vw" alt="" class="home-hero-img">
                    <?php } 
                      homePageBanner();
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="section-accent"><img src="<?php echo get_theme_file_uri('images/home-hero-accent.png') ?>"
            loading="lazy" alt="" class="accent-bg-img home-hero-bg"></div>
    <div class="home-hero-strip">
        <div class="partners-logo-container">
            <div class="w-layout-grid partner-logo-grid">
                <div id="w-node-_699cea52-4c8f-c6c0-ffee-e9a098cabcaa-3aa9b880" class="partner-logo-wrapper"></div>
            </div>
        </div>
        <a data-w-id="07940539-1e5f-00ef-e27d-057580b6cf82" style="background-color:rgb(241,97,34)" href="#"
            class="link-partners">
            <div>More Partners</div>
            <svg class="arrow-icon-right" width="22" height="15" viewBox="0 0 22 15" fill="none"
                xmlns="http://www.w3.org/2000/svg"
                style="-webkit-transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)">
                <path
                    d="M21.7191 8.03912C22.0969 7.6362 22.0765 7.00337 21.6735 6.62564L15.1077 0.470167C14.7048 0.0924363 14.072 0.11285 13.6942 0.515763C13.3165 0.918675 13.3369 1.55151 13.7398 1.92924L19.5761 7.40077L14.1046 13.2371C13.7269 13.64 13.7473 14.2728 14.1502 14.6505C14.5531 15.0283 15.1859 15.0079 15.5637 14.605L21.7191 8.03912ZM1.03224 8.99948L21.0218 8.35465L20.9574 6.35569L0.967759 7.00052L1.03224 8.99948Z"
                    fill="white" />
            </svg>
        </a>
    </div>
</div>
<div class="home-services-section wf-section">
    <div class="services-section-wrapper service-intro">
        <div class="section-accent intro"><img src="<?php echo get_theme_file_uri('images/section-accent-type-2.png')?>"
                loading="lazy" sizes="100vw" alt="" class="accent-bg-img"></div>
        <div class="container">
            <div class="section-headline-wrapper">
                <div class="headline-wrapper left">
                    <h4 class="top-headline">OUR SERVICES</h4>
                    <h2 class="secondary-headline">Laboratory Testing &amp;<br>Clinical Diagnostic Center</h2>
                </div>
                <div class="headline-wrapper right">
                    <p class="headline-description">Patient care is at the center of what our team does everyday.  Our
                        staff carefully focuses on every test performed, every contact with physicians, and each
                        communication with payers in a manner that reveals our meticulous nature in featuring and
                        protecting patient interest.</p>
                </div>
            </div>
            <div class="section-content-wrapper common">
                <div data-current="NEXT-GENERATION SEQUENCING" data-easing="ease" data-duration-in="300"
                    data-duration-out="100" class="services-tab w-tabs">
                    <div class="tabs-menu w-tab-menu">
                        <a data-w-tab="NEXT-GENERATION SEQUENCING" data-w-id="44377f6f-967b-233c-aea5-fb4eae085856"
                            class="tab-link-next-generation-sequencing w-inline-block w-tab-link w--current">
                            <div>NEXT-GENERATION SEQUENCING</div>
                            <div style="width:0%" class="underline"></div>
                        </a>
                        <a data-w-tab="CYTOLOGY" data-w-id="44377f6f-967b-233c-aea5-fb4eae085859"
                            class="tab-link-cytology w-inline-block w-tab-link">
                            <div>CYTOLOGY</div>
                            <div style="width:0%" class="underline"></div>
                        </a>
                        <a data-w-tab="PGx SENIOR CARE" data-w-id="44377f6f-967b-233c-aea5-fb4eae08585c"
                            class="tab-link-pgx-senior-care w-inline-block w-tab-link">
                            <div>PGx SENIOR CARE</div>
                            <div style="width:0%" class="underline"></div>
                        </a>
                        <a data-w-tab="FAMILY PLANNING &amp; PRENATAL" data-w-id="0a72fbc6-1827-a86e-4500-6da287f059ee"
                            class="tab-link-family-planning-prenatal w-inline-block w-tab-link">
                            <div>FAMILY PLANNING &amp; PRENATAL</div>
                            <div style="width:0%" class="underline"></div>
                        </a>
                        <a data-w-tab="PATHOLOGY" data-w-id="4480b86a-d53d-bc1a-8f84-9e12a630c182"
                            class="tab-link-pathology w-inline-block w-tab-link">
                            <div>PATHOLOGY</div>
                            <div style="width:0%" class="underline"></div>
                        </a>
                    </div>
                    <div class="w-tab-content">
                        <div data-w-tab="NEXT-GENERATION SEQUENCING" class="w-tab-pane w--tab-active">
                            <div class="w-dyn-list">
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

                            </div>
                        </div>
                        <div data-w-tab="CYTOLOGY" class="w-tab-pane">
                            <div class="w-layout-grid services-grid _2-col-tablet">
                                <?php 
                                    $cytologyServices = new WP_Query(array(
                                      'posts_per_page' => 3,
                                      'post_type' => 'cytology',
                                      'meta_key' => 'service_id',
                                      'orderby' => 'meta_value_num',
                                      'order' => 'ASC',
                                    ));
                                    
                                    while($cytologyServices->have_posts()){
                                      $cytologyServices->the_post(); ?>
                                <div id="w-node-_3ef5d9d5-b05b-2266-844c-80b54c0fd46d-3aa9b880"
                                    data-w-id="3ef5d9d5-b05b-2266-844c-80b54c0fd46d" class="services-card">
                                    <div class="card-border blue"></div>
                                    <div style="height:0%" class="card-border orange"></div>
                                    <div class="card-info-wrapper">
                                        <div class="card-icon-wrapper">
                                            <div class="icon"><img loading="lazy" style="display:block"
                                                    src="<?php echo get_field('icon_blue')['url'];?>" alt=""
                                                    class="icon-img blue"><img loading="lazy" style="display:none"
                                                    src="<?php echo get_field('icon_orange')['url'];?>" alt=""
                                                    class="icon-img orange"></div>
                                        </div>
                                        <div class="card-contentt-wrapper">
                                            <h4 style="color:rgb(51,51,51)" class="card-title"><?php the_title()?></h4>
                                            <p style="color:rgb(51,51,51)" class="card-info-desc">
                                                <?php echo get_field('short_description'); ?></p>
                                            <a style="color:rgb(22,112,177)" href="<?php the_permalink(); ?>"
                                                class="btn btn-card ">LEARN
                                                MORE</a>
                                        </div>
                                    </div>
                                    <div style="opacity:0" class="card-overlay"></div>
                                    <div style="opacity:0; 
                                    background-image: url(<?php echo get_field('card_bg')['url']; ?>), 
                                    -webkit-gradient(linear, left top, left bottom, from(rgba(241, 97, 34, 0.76)), to(rgba(241, 97, 34, 0.50)));"
                                        class="card-bg"></div>
                                </div>

                                <?php  } wp_reset_postdata();?>
                            </div>
                        </div>
                        <div data-w-tab="PGx SENIOR CARE" class="w-tab-pane">
                            <div class="w-layout-grid services-grid _2-col-tablet">

                                <?php 
                                    $pgxSeniorCareServices = new WP_Query(array(
                                      'posts_per_page' => 10,
                                      'post_type' => 'pgx-senior-care',
                                      'meta_key' => 'service_id',
                                      'orderby' => 'meta_value_num',
                                      'order' => 'ASC',
                                    ));
                                    
                                    while($pgxSeniorCareServices->have_posts()){
                                      $pgxSeniorCareServices->the_post(); ?>

                                <div id="w-node-_6939d4e9-c21b-97da-61a7-154b24a7d9f1-3aa9b880"
                                    data-w-id="6939d4e9-c21b-97da-61a7-154b24a7d9f1" class="services-card">
                                    <div class="card-border blue"></div>
                                    <div style="height:0%" class="card-border orange"></div>
                                    <div class="card-info-wrapper">
                                        <div class="card-icon-wrapper">
                                            <div class="icon">
                                                <img loading="lazy" style="display:block"
                                                    src="<?php echo get_field('icon_blue')['url'];?>" alt=""
                                                    class="icon-img blue">
                                                <img loading="lazy" style="display:none"
                                                    src="<?php echo get_field('icon_orange')['url'];?>" alt=""
                                                    class="icon-img orange">
                                            </div>
                                        </div>
                                        <div class="card-contentt-wrapper">
                                            <h4 style="color:rgb(51,51,51)" class="card-title"><?php the_title()?></h4>
                                            <p style="color:rgb(51,51,51)" class="card-info-desc">
                                                <?php echo get_field('short_description'); ?></p>
                                            <a style="color:rgb(22,112,177)" href="<?php the_permalink(); ?>"
                                                class="btn btn-card ">LEARN
                                                MORE</a>
                                        </div>
                                    </div>
                                    <div style="opacity:0" class="card-overlay"></div>
                                    <div style="opacity:0; background-image: url(<?php echo get_field('card_bg')['url']; ?>), 
                                    -webkit-gradient(linear, left top, left bottom, from(rgba(241, 97, 34, 0.76)), to(rgba(241, 97, 34, 0.50)));"
                                        class="card-bg"></div>
                                </div>
                                <?php  } wp_reset_postdata();?>
                            </div>
                        </div>
                        <div data-w-tab="FAMILY PLANNING &amp; PRENATAL" class="w-tab-pane">
                            <div class="w-layout-grid services-grid _2-col-tablet">
                                <?php 
                                    $famPlanPrenatalServices = new WP_Query(array(
                                      'posts_per_page' => 10,
                                      'post_type' => 'fam-plan-prenatal',
                                      'meta_key' => 'service_id',
                                      'orderby' => 'meta_value_num',
                                      'order' => 'ASC',
                                    ));
                                    
                                    while($famPlanPrenatalServices->have_posts()){
                                      $famPlanPrenatalServices->the_post(); ?>
                                <div id="w-node-_92ce3324-f957-7178-ad05-ac18c28cc7dc-3aa9b880"
                                    data-w-id="92ce3324-f957-7178-ad05-ac18c28cc7dc" class="services-card">
                                    <div class="card-border blue"></div>
                                    <div style="height:0%" class="card-border orange"></div>
                                    <div class="card-info-wrapper">
                                        <div class="card-icon-wrapper">
                                            <div class="icon"><img loading="lazy" style="display:block"
                                                    src="<?php echo get_field('icon_blue')['url'];?>" alt=""
                                                    class="icon-img blue"><img loading="lazy" style="display:none"
                                                    src="<?php echo get_field('icon_orange')['url'];?>" alt=""
                                                    class="icon-img orange"></div>
                                        </div>
                                        <div class="card-contentt-wrapper">
                                            <h4 style="color:rgb(51,51,51)" class="card-title"><?php the_title()?></h4>
                                            <p style="color:rgb(51,51,51)" class="card-info-desc">
                                                <?php echo get_field('short_description'); ?></p>
                                            <a style="color:rgb(22,112,177)" href="<?php the_permalink(); ?>"
                                                class="btn btn-card ">LEARN
                                                MORE</a>
                                        </div>
                                    </div>
                                    <div style="opacity:0" class="card-overlay"></div>
                                    <div style="opacity:0; background-image: url(<?php echo get_field('card_bg')['url']; ?>), 
                                    -webkit-gradient(linear, left top, left bottom, from(rgba(241, 97, 34, 0.76)), to(rgba(241, 97, 34, 0.50)));"
                                        class="card-bg"></div>
                                </div>
                                <?php  } wp_reset_postdata();?>
                            </div>
                        </div>
                        <div data-w-tab="PATHOLOGY" class="w-tab-pane">
                            <div class="w-layout-grid services-grid _2-col-tablet">
                                <?php 
                                    $pathologyServices = new WP_Query(array(
                                      'posts_per_page' => 10,
                                      'post_type' => 'pathology',
                                      'meta_key' => 'service_id',
                                      'orderby' => 'meta_value_num',
                                      'order' => 'ASC',
                                    ));
                                    
                                    while($pathologyServices->have_posts()){
                                      $pathologyServices->the_post(); ?>

                                <div id="w-node-_8d4ad245-5ed6-70d6-185a-00ea334c92c3-3aa9b880"
                                    data-w-id="8d4ad245-5ed6-70d6-185a-00ea334c92c3" class="services-card">
                                    <div class="card-border blue"></div>
                                    <div style="height:0%" class="card-border orange"></div>
                                    <div class="card-info-wrapper">
                                        <div class="card-icon-wrapper">
                                            <div class="icon"><img loading="lazy" style="display:block"
                                                    src="<?php echo get_field('icon_blue')['url'];?>" alt=""
                                                    class="icon-img blue"><img loading="lazy" style="display:none"
                                                    src="<?php echo get_field('icon_orange')['url'];?>" alt=""
                                                    class="icon-img orange"></div>
                                        </div>
                                        <div class="card-contentt-wrapper">
                                            <h4 style="color:rgb(51,51,51)" class="card-title"><?php the_title()?></h4>
                                            <p style="color:rgb(51,51,51)" class="card-info-desc">
                                                <?php echo get_field('short_description'); ?></p>
                                            <a style="color:rgb(22,112,177)" href="<?php the_permalink(); ?>"
                                                class="btn btn-card ">LEARN
                                                MORE</a>
                                        </div>
                                    </div>
                                    <div style="opacity:0" class="card-overlay"></div>
                                    <div style="opacity:0; background-image: url(<?php echo get_field('card_bg')['url']; ?>), 
                                    -webkit-gradient(linear, left top, left bottom, from(rgba(241, 97, 34, 0.76)), to(rgba(241, 97, 34, 0.50)));"
                                        class="card-bg"></div>
                                </div>
                                <?php  } wp_reset_postdata();?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="feature-section wf-section">
    <div class="feature-section-container">
        <div class="feature-content-wrapper">
            <div class="w-layout-grid section-grid col-2">
                <div id="w-node-b98c6fd7-2bf9-c65c-2278-07078422932e-3aa9b880" class="feature-img"></div>
                <div id="w-node-_6c08a5e7-6532-97dd-16bb-6d3f36dd8675-3aa9b880" class="feature-content">
                    <h4 class="top-headline white">TESIS</h4>
                    <h2 class="secondary-headline white">PGx Fall Prevention</h2>
                    <p class="feature-description">We believe PGx should be incorporated into all Fall Prevention
                        Protocols as it can help reduce fall rates and limit adverse reactions. Learn how Tesis can help
                        you provide the best care whilte decreasing expenses.</p>
                    <a href="<?php echo site_url('/next-gen-sequencing/pgx-testing') ?>" class="btn btn-primary ">Learn
                        More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="benefits-section wf-section">
    <div class="benefits-section-container">
        <div class="container">
            <div class="section-headline-wrapper center">
                <h4 class="top-headline center">CUSTOMER BENEFITS</h4>
                <h2 class="secondary-headline center">Tesis Biosciences Advantages</h2>
            </div>
            <div class="section-content-wrapper benefits">
                <div class="w-layout-grid benefits-grid"><img
                        src="<?php echo get_theme_file_uri('images/benefits-image.jpg')?>" loading="lazy"
                        id="w-node-_97f0c1b1-d614-298c-7a28-cad31d0a96d0-1d0a96c6" alt="" class="benefits-img">
                    <div id="w-node-_97f0c1b1-d614-298c-7a28-cad31d0a96d1-1d0a96c6" class="grid-container desktop">
                        <div class="benefit-card">
                            <div class="card-icon-wrapper benefits">
                                <div class="icon"><img
                                        src="<?php echo get_theme_file_uri('images/HL7-interfacing.svg')?>"
                                        loading="lazy" alt="" class="icon-img"></div>
                            </div>
                            <div class="benefit-card-text-content">
                                <h4 class="benefit-text">HL7 Interfacing or <br>API Reports</h4>
                            </div>
                        </div>
                        <div class="benefit-card">
                            <div class="card-icon-wrapper benefits">
                                <div class="icon"><img src="<?php echo get_theme_file_uri('/images/portal.svg');?>"
                                        loading=" lazy" alt="" class="icon-img">
                                </div>
                            </div>
                            <div class="benefit-card-text-content">
                                <h4 class="benefit-text">Portal for <br>Real-Time Results</h4>
                            </div>
                        </div>
                        <div class="benefit-card">
                            <div class="card-icon-wrapper benefits">
                                <div class="icon"><img src="<?php echo get_theme_file_uri('images/consistency.svg');?>"
                                        loading="lazy" alt="" class="icon-img"></div>
                            </div>
                            <div class="benefit-card-text-content">
                                <h4 class="benefit-text">Consistently Fast Turnaround Times</h4>
                            </div>
                        </div>
                        <div class="benefit-card">
                            <div class="card-icon-wrapper benefits">
                                <div class="icon"><img src="<?php echo get_theme_file_uri('images/quality.svg');?>"
                                        loading="lazy" alt="" class="icon-img">
                                </div>
                            </div>
                            <div class="benefit-card-text-content">
                                <h4 class="benefit-text">Quality Diagnostics is <br>Our #1 Priority</h4>
                            </div>
                        </div>
                    </div>
                    <div id="w-node-_97f0c1b1-d614-298c-7a28-cad31d0a96f4-1d0a96c6" class="grid-container desktop">
                        <div class="benefit-card">
                            <div class="card-icon-wrapper benefits">
                                <div class="icon"><img src="<?php echo get_theme_file_uri('images/parent-first.svg');?>"
                                        loading="lazy" alt="" class="icon-img"></div>
                            </div>
                            <div class="benefit-card-text-content">
                                <h4 class="benefit-text">Patient First Culture</h4>
                            </div>
                        </div>
                        <div class="benefit-card">
                            <div class="card-icon-wrapper benefits">
                                <div class="icon"><img
                                        src="<?php echo get_theme_file_uri('images/partner-physician.svg');?>"
                                        loading="lazy" alt="" class="icon-img"></div>
                            </div>
                            <div class="benefit-card-text-content">
                                <h4 class="benefit-text">Partner to Physician</h4>
                            </div>
                        </div>
                        <div class="benefit-card">
                            <div class="card-icon-wrapper benefits">
                                <div class="icon"><img src="<?php echo get_theme_file_uri('images/24-7.svg');?>"
                                        loading="lazy" alt="" class="icon-img">
                                </div>
                            </div>
                            <div class="benefit-card-text-content">
                                <h4 class="benefit-text">24/7 Access to Lab Experts</h4>
                            </div>
                        </div>
                        <div class="benefit-card">
                            <div class="card-icon-wrapper benefits">
                                <div class="icon"><img src="<?php echo get_theme_file_uri('images/compliant.svg');?>"
                                        loading="lazy" alt="" class="icon-img"></div>
                            </div>
                            <div class="benefit-card-text-content">
                                <h4 class="benefit-text">Complaint &amp; Accredited Laboratory</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-layout-grid benefits-grid tablet">
                    <div id="w-node-_97f0c1b1-d614-298c-7a28-cad31d0a9712-1d0a96c6" class="grid-container">
                        <div class="benefit-card">
                            <div class="card-icon-wrapper benefits">
                                <div class="icon"><img
                                        src="<?php echo get_theme_file_uri('images/HL7-interfacing.svg');?>"
                                        loading="lazy" alt="" class="icon-img"></div>
                            </div>
                            <div class="benefit-card-text-content">
                                <h4 class="benefit-text">HL7 Interfacing or <br>API Reports</h4>
                            </div>
                        </div>
                        <div class="benefit-card">
                            <div class="card-icon-wrapper benefits">
                                <div class="icon"><img src="<?php echo get_theme_file_uri('images/portal.svg');?>"
                                        loading="lazy" alt="" class="icon-img">
                                </div>
                            </div>
                            <div class="benefit-card-text-content">
                                <h4 class="benefit-text">Portal for <br>Real-Time Results</h4>
                            </div>
                        </div>
                        <div class="benefit-card">
                            <div class="card-icon-wrapper benefits">
                                <div class="icon"><img src="<?php echo get_theme_file_uri('images/consistency.svg');?>"
                                        loading="lazy" alt="" class="icon-img"></div>
                            </div>
                            <div class="benefit-card-text-content">
                                <h4 class="benefit-text">Consistently Fast Turnaround Times</h4>
                            </div>
                        </div>
                        <div class="benefit-card">
                            <div class="card-icon-wrapper benefits">
                                <div class="icon"><img src="<?php echo get_theme_file_uri('images/quality.svg');?>"
                                        loading="lazy" alt="" class="icon-img">
                                </div>
                            </div>
                            <div class="benefit-card-text-content">
                                <h4 class="benefit-text">Quality Diagnostics is <br>Our #1 Priority</h4>
                            </div>
                        </div>
                    </div>
                    <div id="w-node-_97f0c1b1-d614-298c-7a28-cad31d0a9735-1d0a96c6" class="grid-container">
                        <div class="benefit-card">
                            <div class="card-icon-wrapper benefits">
                                <div class="icon"><img src="<?php echo get_theme_file_uri('images/parent-first.svg');?>"
                                        loading="lazy" alt="" class="icon-img"></div>
                            </div>
                            <div class="benefit-card-text-content">
                                <h4 class="benefit-text">Patient First Culture</h4>
                            </div>
                        </div>
                        <div class="benefit-card">
                            <div class="card-icon-wrapper benefits">
                                <div class="icon"><img
                                        src="<?php echo get_theme_file_uri('images/partner-physician.svg');?>"
                                        loading="lazy" alt="" class="icon-img"></div>
                            </div>
                            <div class="benefit-card-text-content">
                                <h4 class="benefit-text">Partner to Physician</h4>
                            </div>
                        </div>
                        <div class="benefit-card">
                            <div class="card-icon-wrapper benefits">
                                <div class="icon"><img src="<?php echo get_theme_file_uri('images/24-7.svg');?>"
                                        loading="lazy" alt="" class="icon-img">
                                </div>
                            </div>
                            <div class="benefit-card-text-content">
                                <h4 class="benefit-text">24/7 Access to Lab Experts</h4>
                            </div>
                        </div>
                        <div class="benefit-card">
                            <div class="card-icon-wrapper benefits">
                                <div class="icon"><img src="<?php echo get_theme_file_uri('images/compliant.svg');?>"
                                        loading="lazy" alt="" class="icon-img"></div>
                            </div>
                            <div class="benefit-card-text-content">
                                <h4 class="benefit-text">Complaint &amp; Accredited Laboratory</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-accent benefits"><img
                src="<?php echo get_theme_file_uri('images/section-accent-type-3.png');?>" loading="lazy" sizes="100vw"
                alt="" class="accent-bg-img"></div>
    </div>
</div>
<div class="locations-section wf-section">
    <div class="locations-section-wrapper">
        <div class="section-bg-gradient-overlay"></div>
        <div class="section-bottom-container">
            <div class="container">
                <div class="section-headline-wrapper">
                    <div class="headline-wrapper left">
                        <h4 class="top-headline">OUR LOCATIONS</h4>
                        <h2 class="secondary-headline">Multiple Locations to<br>Optimize Result Turnarounds</h2>
                    </div>
                    <div class="headline-wrapper right">
                        <p class="headline-description locations">With 3 Locations and counting, Tesis Bioscieces
                            provides physicians, physician groups, and hospitals full-service complex clinical
                            diagnostic testing where and when you need it.</p>
                    </div>
                </div>
            </div>
            <div class="container locations">
                <div class="locations-content">
                    <div class="w-layout-grid locations-grid">
                        <div id="w-node-_2d329885-72d9-089e-7ba7-3e9c14dd5a13-3aa9b880" class="locations-card">
                            <h3 class="locations-label">Tesis Arizona</h3>
                            <p class="paragraph-3">8125N 86th PI<br>Scottsdale, AZ 85258</p>
                            <div class="location-contact-btn top">
                                <div class="card-icon-wrapper benefits">
                                    <div class="icon orange-shadow">
                                        <img src="<?php echo get_theme_file_uri('/images/phone-orange.svg'); ?>"
                                            loading="lazy" alt="" class="icon-img">
                                    </div>
                                </div>
                                <a href="tel:+18448374785" class="locations-btn">844-837-4785</a>
                            </div>
                            <div class="location-contact-btn">
                                <div class="card-icon-wrapper benefits">
                                    <div class="icon"><img
                                            src="<?php echo get_theme_file_uri('images/blue-print.svg'); ?>"
                                            loading="lazy" alt="" class="icon-img"></div>
                                </div>
                                <a href="tel:+18446891251" class="locations-btn">844-689-1251</a>
                            </div>
                        </div>
                        <div id="w-node-ec56a998-1bba-e6d4-efad-0594cadc5bbe-3aa9b880" class="locations-card">
                            <h3 class="locations-label">Tesis Colorado</h3>
                            <p>2953 S. Peoria St. Suite 260<br>Aurora, CO 80014</p>
                            <div class="location-contact-btn top">
                                <div class="card-icon-wrapper benefits">
                                    <div class="icon orange-shadow"><img
                                            src="<?php echo get_theme_file_uri('images/phone-orange.svg'); ?>"
                                            loading="lazy" alt="" class="icon-img"></div>
                                </div>
                                <a href="tel:+17207262130" class="locations-btn">720-726-2130</a>
                            </div>
                            <div class="location-contact-btn">
                                <div class="card-icon-wrapper benefits">
                                    <div class="icon"><img
                                            src="<?php echo get_theme_file_uri('images/blue-print.svg'); ?>"
                                            loading="lazy" alt="" class="icon-img"></div>
                                </div>
                                <a href="tel:+17208632042" class="locations-btn">720-863-2042</a>
                            </div>
                        </div>
                        <div id="w-node-_3e70c5c2-4532-74df-b44c-6701770769e4-3aa9b880" class="locations-card">
                            <h3 class="locations-label">Tesis Texas</h3>
                            <p>16115 Park Row, Suite 190<br>Houston, TX 77084</p>
                            <div class="location-contact-btn top">
                                <div class="card-icon-wrapper benefits">
                                    <div class="icon orange-shadow"><img
                                            src="<?php echo get_theme_file_uri('images/phone-orange.svg'); ?>"
                                            loading="lazy" alt="" class="icon-img"></div>
                                </div>
                                <a href="tel:+17132714133" class="locations-btn">713-271-4133</a>
                            </div>
                            <div class="location-contact-btn">
                                <div class="card-icon-wrapper benefits">
                                    <div class="icon"><img
                                            src="<?php echo get_theme_file_uri('images/blue-print.svg'); ?>"
                                            loading="lazy" alt="" class="icon-img"></div>
                                </div>
                                <a href="tel:+18446891155" class="locations-btn">844-689-1155</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-accent benefits locations"><img
                    src="<?php echo get_theme_file_uri('images/section-accent-type-3.png'); ?>" loading="lazy"
                    sizes="100vw" alt="" class="accent-bg-img"></div>
        </div>
    </div>
</div>


<?php get_footer(); 
?>