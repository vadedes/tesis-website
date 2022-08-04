<?php 

get_header(); ?>


<div class="inner--hero-page-section wf-section">
    <div class="inner-page-section-container blog">
        <div class="container inner-hero-title-wrapper">
            <div class="inner-header-container">
                <div class="hero-headline-wrapper science">
                    <h4 class="top-headline about">ABOUT US</h4>
                    <h1 class="inner-hero-headline about">Blogs</h1>
                    <div class="btn-container">
                        <a href="<?php echo site_url('/contact-us'); ?>" class="btn btn-primary">Contact Form</a>
                        <a href="<?php echo site_url('/order-sample-kit'); ?>" class="btn btn-secondary">Order a Sample
                            Kit</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-accent services-intro science"><img src="images/section-accent-type-3.png" loading="lazy"
                srcset="images/section-accent-type-3-p-500.png 500w, images/section-accent-type-3-p-800.png 800w, images/section-accent-type-3-p-1080.png 1080w, images/section-accent-type-3-p-1600.png 1600w, images/section-accent-type-3.png 1920w"
                sizes="100vw" alt="" class="accent-bg-img"></div>
    </div>
</div>
<div class="inner--page-section blog-page blog-list-page wf-section">
    <div class="inner-page-section-container">
        <div class="container blog">
            <div class="w-embed">
                <style>
                .blog-card:hover {
                    box-shadow: 0px 1.3299663066864014px 2.2609426975250244px 0px rgba(51, 51, 51, 0.02),
                        0px 5.851851940155029px 4.68148136138916px 0px rgba(51, 51, 51, 0.03),
                        0px 14.363636016845703px 9.336362838745117px 0px rgba(51, 51, 51, 0.04),
                        0px 27.663299560546875px 18.300336837768555px 0px rgba(51, 51, 51, 0.04),
                        0px 46.5488166809082px 33.64814758300781px 0px rgba(51, 51, 51, 0.05),
                        0px 71.81817626953125px 57.45454406738281px 0px rgba(51, 51, 51, 0.07);
                }
                </style>
            </div>
            <div class="blog-collection-list-wrapper w-dyn-list">
                <div role="list" class="blog-collection-list w-dyn-items">
                    <!-- CARD -->
                    <?php while(have_posts()){
                    the_post(); ?>
                    <div role="listitem" class="blog-collection-item w-dyn-item">
                        <div data-w-id="" class="blog-card">
                            <div class="blog-card-img-wrapper">
                                <img loading="lazy" src="<?php the_post_thumbnail(); ?>" alt="" class="blog-card-img">
                            </div>
                            <div class="blog-card-info-wrapper">
                                <h4 class="blog-card-title"><?php the_title();?></h4>
                                <p class="blog-card-text">
                                    <?php if(has_excerpt()){
                                    echo get_the_excerpt();
                                    } else {
                                        echo wp_trim_words(get_the_content(), 18);
                                    } ?>
                                </p>
                                <div style="background-color:rgba(23,120,189,0.8)" class="blog-card-underline"></div>
                                <a style="color:rgb(26,27,31)" href="<?php the_permalink(); ?>"
                                    class="blog-card-link">Read more</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <!-- PAGINATION -->
                <div role="navigation" aria-label="List" class="w-pagination-wrapper pagination">
                    <a href="#" aria-label="Previous Page" class="w-pagination-previous slide-arrow left bloc-paginate">
                        <div bind="3e473027-8804-ee76-7258-4af19e85db71" class="html-embed-4 w-embed"><svg width="24"
                                height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.835 3.8701L16.055 2.1001L6.16504 12.0001L16.065 21.9001L17.835 20.1301L9.70504 12.0001L17.835 3.8701Z"
                                    fill="currentColor"></path>
                            </svg></div>
                    </a>
                    <a href="#" aria-label="Next Page" class="w-pagination-next slide-arrow right blog-paginate">
                        <div bind="2ddf338a-5c1d-9270-1e51-08452710bfb1" class="html-embed-4 w-embed"><svg width="24"
                                height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.16496 3.8701L7.94496 2.1001L17.835 12.0001L7.93496 21.9001L6.16496 20.1301L14.295 12.0001L6.16496 3.8701Z"
                                    fill="currentColor"></path>
                            </svg></div>
                    </a>
                </div>
            </div>
        </div>
        <!-- ACCENT IMG -->
        <div class="section-accent blog-list-page bot"><img
                src="<?php echo get_theme_file_uri('images/section-accent-type-3.png'); ?>" loading="lazy" sizes="100vw"
                alt="" class="accent-bg-img"></div>
        <div class="section-accent blog-list-page top"><img
                src="<?php echo get_theme_file_uri('images/section-accent-type-3.png'); ?>" loading="lazy" sizes="100vw"
                alt="" class="accent-bg-img"></div>
    </div>
</div>
<div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd23" class="inner--page-cta-section wf-section">
    <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd24" class="inner-page-section-container cta">
        <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd25" class="container">
            <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd26" class="section-content-wrapper split-img-left">
                <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd27">
                    <h4 bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd28" class="top-headline">CONTACT US</h4>
                    <h2 bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd2a" class="secondary-headline short">Get In Touch
                        with<br>Tesis Biosciences</h2>
                </div>
            </div>
            <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd2e" class="cta-block-wrapper">
                <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd2f" class="w-layout-grid cta-block-grid">
                    <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd30"
                        id="w-node-_8e00ed11-4c64-7d21-1276-f0ea31f3dd30-31f3dd23" class="cta-block-loc-info-wrapper">
                        <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd31" class="cta-block-contact-info">
                            <h4 bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd32" class="cta-block-location-title">Tesis
                                Arizona</h4>
                            <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd34">8125N 86th PI<br>Scottsdale, AZ 85258</div>
                            <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd38" class="cta-block-contact-info-wrapper top">
                                <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd39" class="icon small-2">
                                    <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd3a" class="html-embed-3 w-embed"><svg
                                            width="24" height="24" viewbox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M7.02605 5.52938C7.08438 6.39466 7.23022 7.24049 7.46355 8.04743L6.29688 9.2141C5.89827 8.04743 5.6455 6.81271 5.558 5.52938H7.02605ZM16.6121 17.2154C17.4385 17.4488 18.2844 17.5946 19.1399 17.6529V19.1016C17.8566 19.0141 16.6219 18.7613 15.4455 18.3724L16.6121 17.2154ZM7.95947 3.58496H4.55669C4.02197 3.58496 3.58447 4.02246 3.58447 4.55718C3.58447 13.6863 10.9831 21.085 20.1122 21.085C20.647 21.085 21.0845 20.6475 21.0845 20.1127V16.7197C21.0845 16.185 20.647 15.7475 20.1122 15.7475C18.9067 15.7475 17.7303 15.553 16.6414 15.1933C16.5442 15.1544 16.4373 15.1447 16.34 15.1447C16.0872 15.1447 15.8442 15.2419 15.6497 15.4266L13.5109 17.5655C10.7595 16.1558 8.50392 13.91 7.10392 11.1586L9.24281 9.01968C9.51503 8.74746 9.59281 8.36829 9.48586 8.02802C9.12614 6.93913 8.93169 5.77246 8.93169 4.55718C8.93169 4.02246 8.49419 3.58496 7.95947 3.58496Z"
                                                fill="url(#paint0_linear_494_13790)"></path>
                                            <defs>
                                                <lineargradient id="paint0_linear_494_13790" x1="3.58447" y1="11.7516"
                                                    x2="20.665" y2="11.8278" gradientunits="userSpaceOnUse">
                                                    <stop stop-color="#F99462"></stop>
                                                    <stop offset="1" stop-color="#F99462" stop-opacity="0.65"></stop>
                                                </lineargradient>
                                            </defs>
                                        </svg></div>
                                </div>
                                <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd3b">
                                    <a href="tel:+18448374785" bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd3c"
                                        class="cta-block-link">844-837-4785</a>
                                </div>
                            </div>
                            <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd3e" class="cta-block-contact-info-wrapper">
                                <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd3f" class="icon small-2">
                                    <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd40" class="html-embed-3 w-embed"><svg
                                            width="26.6" height="26.6" viewbox="0 0 26.6 26.6" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21.7771 9.55507H20.666V3.99951H7.33263V9.55507H6.22152C4.37707 9.55507 2.88818 11.044 2.88818 12.8884V19.5551H7.33263V23.9995H20.666V19.5551H25.1104V12.8884C25.1104 11.044 23.6215 9.55507 21.7771 9.55507ZM9.55485 6.22173H18.4437V9.55507H9.55485V6.22173ZM18.4437 21.7773H9.55485V17.3328H18.4437V21.7773ZM20.666 17.3328V15.1106H7.33263V17.3328H5.11041V12.8884C5.11041 12.2773 5.61041 11.7773 6.22152 11.7773H21.7771C22.3882 11.7773 22.8882 12.2773 22.8882 12.8884V17.3328H20.666Z"
                                                fill="url(#paint0_linear_494_13793)"></path>
                                            <path
                                                d="M20.666 14.5551C21.2796 14.5551 21.7771 14.0576 21.7771 13.444C21.7771 12.8303 21.2796 12.3328 20.666 12.3328C20.0523 12.3328 19.5549 12.8303 19.5549 13.444C19.5549 14.0576 20.0523 14.5551 20.666 14.5551Z"
                                                fill="url(#paint1_linear_494_13793)"></path>
                                            <defs>
                                                <lineargradient id="paint0_linear_494_13793" x1="2.88818" y1="13.3328"
                                                    x2="24.5777" y2="13.4404" gradientunits="userSpaceOnUse">
                                                    <stop stop-color="#1670B1"></stop>
                                                    <stop offset="1" stop-color="#1670B1" stop-opacity="0.65"></stop>
                                                </lineargradient>
                                                <lineargradient id="paint1_linear_494_13793" x1="2.88818" y1="13.3328"
                                                    x2="24.5777" y2="13.4404" gradientunits="userSpaceOnUse">
                                                    <stop stop-color="#1670B1"></stop>
                                                    <stop offset="1" stop-color="#1670B1" stop-opacity="0.65"></stop>
                                                </lineargradient>
                                            </defs>
                                        </svg></div>
                                </div>
                                <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd41">
                                    <a href="tel:+18446891251" bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd42"
                                        class="cta-block-link">844-689-1251</a>
                                </div>
                            </div>
                        </div>
                        <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd44" class="cta-block-contact-info">
                            <h4 bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd45" class="cta-block-location-title">Tesis
                                Colorado</h4>
                            <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd47">2953 S. Peoria St. Suite 260<br>Aurora, CO
                                80014</div>
                            <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd4b" class="cta-block-contact-info-wrapper">
                                <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd4c" class="icon small-2">
                                    <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd4d" class="html-embed-3 w-embed"><svg
                                            width="24" height="24" viewbox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M7.02605 5.52938C7.08438 6.39466 7.23022 7.24049 7.46355 8.04743L6.29688 9.2141C5.89827 8.04743 5.6455 6.81271 5.558 5.52938H7.02605ZM16.6121 17.2154C17.4385 17.4488 18.2844 17.5946 19.1399 17.6529V19.1016C17.8566 19.0141 16.6219 18.7613 15.4455 18.3724L16.6121 17.2154ZM7.95947 3.58496H4.55669C4.02197 3.58496 3.58447 4.02246 3.58447 4.55718C3.58447 13.6863 10.9831 21.085 20.1122 21.085C20.647 21.085 21.0845 20.6475 21.0845 20.1127V16.7197C21.0845 16.185 20.647 15.7475 20.1122 15.7475C18.9067 15.7475 17.7303 15.553 16.6414 15.1933C16.5442 15.1544 16.4373 15.1447 16.34 15.1447C16.0872 15.1447 15.8442 15.2419 15.6497 15.4266L13.5109 17.5655C10.7595 16.1558 8.50392 13.91 7.10392 11.1586L9.24281 9.01968C9.51503 8.74746 9.59281 8.36829 9.48586 8.02802C9.12614 6.93913 8.93169 5.77246 8.93169 4.55718C8.93169 4.02246 8.49419 3.58496 7.95947 3.58496Z"
                                                fill="url(#paint0_linear_494_13790)"></path>
                                            <defs>
                                                <lineargradient id="paint0_linear_494_13790" x1="3.58447" y1="11.7516"
                                                    x2="20.665" y2="11.8278" gradientunits="userSpaceOnUse">
                                                    <stop stop-color="#F99462"></stop>
                                                    <stop offset="1" stop-color="#F99462" stop-opacity="0.65"></stop>
                                                </lineargradient>
                                            </defs>
                                        </svg></div>
                                </div>
                                <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd4e">
                                    <a href="tel:+17207262130" bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd4f"
                                        class="cta-block-link">720-726-2130</a>
                                </div>
                            </div>
                            <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd51" class="cta-block-contact-info-wrapper">
                                <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd52" class="icon small-2">
                                    <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd53" class="html-embed-3 w-embed"><svg
                                            width="26.6" height="26.6" viewbox="0 0 26.6 26.6" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21.7771 9.55507H20.666V3.99951H7.33263V9.55507H6.22152C4.37707 9.55507 2.88818 11.044 2.88818 12.8884V19.5551H7.33263V23.9995H20.666V19.5551H25.1104V12.8884C25.1104 11.044 23.6215 9.55507 21.7771 9.55507ZM9.55485 6.22173H18.4437V9.55507H9.55485V6.22173ZM18.4437 21.7773H9.55485V17.3328H18.4437V21.7773ZM20.666 17.3328V15.1106H7.33263V17.3328H5.11041V12.8884C5.11041 12.2773 5.61041 11.7773 6.22152 11.7773H21.7771C22.3882 11.7773 22.8882 12.2773 22.8882 12.8884V17.3328H20.666Z"
                                                fill="url(#paint0_linear_494_13793)"></path>
                                            <path
                                                d="M20.666 14.5551C21.2796 14.5551 21.7771 14.0576 21.7771 13.444C21.7771 12.8303 21.2796 12.3328 20.666 12.3328C20.0523 12.3328 19.5549 12.8303 19.5549 13.444C19.5549 14.0576 20.0523 14.5551 20.666 14.5551Z"
                                                fill="url(#paint1_linear_494_13793)"></path>
                                            <defs>
                                                <lineargradient id="paint0_linear_494_13793" x1="2.88818" y1="13.3328"
                                                    x2="24.5777" y2="13.4404" gradientunits="userSpaceOnUse">
                                                    <stop stop-color="#1670B1"></stop>
                                                    <stop offset="1" stop-color="#1670B1" stop-opacity="0.65"></stop>
                                                </lineargradient>
                                                <lineargradient id="paint1_linear_494_13793" x1="2.88818" y1="13.3328"
                                                    x2="24.5777" y2="13.4404" gradientunits="userSpaceOnUse">
                                                    <stop stop-color="#1670B1"></stop>
                                                    <stop offset="1" stop-color="#1670B1" stop-opacity="0.65"></stop>
                                                </lineargradient>
                                            </defs>
                                        </svg></div>
                                </div>
                                <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd54">
                                    <a href="tel:+17208632042" bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd55"
                                        class="cta-block-link">720-863-2042</a>
                                </div>
                            </div>
                        </div>
                        <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd57" class="cta-block-contact-info">
                            <h4 bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd58" class="cta-block-location-title">Tesis Texas
                            </h4>
                            <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd5a">16115 Park Row, Suite 190<br>Houston, TX
                                77084</div>
                            <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd5e" class="cta-block-contact-info-wrapper">
                                <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd5f" class="icon small-2">
                                    <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd60" class="html-embed-3 w-embed"><svg
                                            width="24" height="24" viewbox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M7.02605 5.52938C7.08438 6.39466 7.23022 7.24049 7.46355 8.04743L6.29688 9.2141C5.89827 8.04743 5.6455 6.81271 5.558 5.52938H7.02605ZM16.6121 17.2154C17.4385 17.4488 18.2844 17.5946 19.1399 17.6529V19.1016C17.8566 19.0141 16.6219 18.7613 15.4455 18.3724L16.6121 17.2154ZM7.95947 3.58496H4.55669C4.02197 3.58496 3.58447 4.02246 3.58447 4.55718C3.58447 13.6863 10.9831 21.085 20.1122 21.085C20.647 21.085 21.0845 20.6475 21.0845 20.1127V16.7197C21.0845 16.185 20.647 15.7475 20.1122 15.7475C18.9067 15.7475 17.7303 15.553 16.6414 15.1933C16.5442 15.1544 16.4373 15.1447 16.34 15.1447C16.0872 15.1447 15.8442 15.2419 15.6497 15.4266L13.5109 17.5655C10.7595 16.1558 8.50392 13.91 7.10392 11.1586L9.24281 9.01968C9.51503 8.74746 9.59281 8.36829 9.48586 8.02802C9.12614 6.93913 8.93169 5.77246 8.93169 4.55718C8.93169 4.02246 8.49419 3.58496 7.95947 3.58496Z"
                                                fill="url(#paint0_linear_494_13790)"></path>
                                            <defs>
                                                <lineargradient id="paint0_linear_494_13790" x1="3.58447" y1="11.7516"
                                                    x2="20.665" y2="11.8278" gradientunits="userSpaceOnUse">
                                                    <stop stop-color="#F99462"></stop>
                                                    <stop offset="1" stop-color="#F99462" stop-opacity="0.65"></stop>
                                                </lineargradient>
                                            </defs>
                                        </svg></div>
                                </div>
                                <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd61">
                                    <a href="tel:+17132714133" bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd62"
                                        class="cta-block-link">713-271-4133</a>
                                </div>
                            </div>
                            <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd64" class="cta-block-contact-info-wrapper">
                                <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd65" class="icon small-2">
                                    <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd66" class="html-embed-3 w-embed"><svg
                                            width="26.6" height="26.6" viewbox="0 0 26.6 26.6" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21.7771 9.55507H20.666V3.99951H7.33263V9.55507H6.22152C4.37707 9.55507 2.88818 11.044 2.88818 12.8884V19.5551H7.33263V23.9995H20.666V19.5551H25.1104V12.8884C25.1104 11.044 23.6215 9.55507 21.7771 9.55507ZM9.55485 6.22173H18.4437V9.55507H9.55485V6.22173ZM18.4437 21.7773H9.55485V17.3328H18.4437V21.7773ZM20.666 17.3328V15.1106H7.33263V17.3328H5.11041V12.8884C5.11041 12.2773 5.61041 11.7773 6.22152 11.7773H21.7771C22.3882 11.7773 22.8882 12.2773 22.8882 12.8884V17.3328H20.666Z"
                                                fill="url(#paint0_linear_494_13793)"></path>
                                            <path
                                                d="M20.666 14.5551C21.2796 14.5551 21.7771 14.0576 21.7771 13.444C21.7771 12.8303 21.2796 12.3328 20.666 12.3328C20.0523 12.3328 19.5549 12.8303 19.5549 13.444C19.5549 14.0576 20.0523 14.5551 20.666 14.5551Z"
                                                fill="url(#paint1_linear_494_13793)"></path>
                                            <defs>
                                                <lineargradient id="paint0_linear_494_13793" x1="2.88818" y1="13.3328"
                                                    x2="24.5777" y2="13.4404" gradientunits="userSpaceOnUse">
                                                    <stop stop-color="#1670B1"></stop>
                                                    <stop offset="1" stop-color="#1670B1" stop-opacity="0.65"></stop>
                                                </lineargradient>
                                                <lineargradient id="paint1_linear_494_13793" x1="2.88818" y1="13.3328"
                                                    x2="24.5777" y2="13.4404" gradientunits="userSpaceOnUse">
                                                    <stop stop-color="#1670B1"></stop>
                                                    <stop offset="1" stop-color="#1670B1" stop-opacity="0.65"></stop>
                                                </lineargradient>
                                            </defs>
                                        </svg></div>
                                </div>
                                <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd67">
                                    <a href="tel:+18446891155" bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd68"
                                        class="cta-block-link">844-689-1155</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd6a"
                        id="w-node-_8e00ed11-4c64-7d21-1276-f0ea31f3dd6a-31f3dd23" class="cta-block-form-container">
                        <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd6b" class="form-block">
                            <h1 bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd6c" class="form-title">TESIS CONTACT FORM</h1>
                            <form id="wf-form-CTA-Section-Contact-Form" name="wf-form-CTA-Section-Contact-Form"
                                data-name="CTA Section Contact Form" method="get">
                                <label bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd6f" for="name-3"
                                    class="form-field-label">First Name</label>
                                <input type="text" class="form-field w-input" maxlength="256" name="name-3"
                                    data-name="Name 3" placeholder="" id="name-3">
                                <label bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd72" for="name-3"
                                    class="form-field-label">Last Name</label>
                                <input type="text" class="form-field w-input" maxlength="256" name="name-2"
                                    data-name="Name 2" placeholder="" id="name-2">
                                <label bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd75" for="email-2"
                                    class="form-field-label">Email</label>
                                <input type="email" class="form-field w-input" maxlength="256" name="email-2"
                                    data-name="Email 2" placeholder="" id="email-2" required=""><label
                                    bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd78" for="email-2"
                                    class="form-field-label">Message</label>
                                <textarea id="field-2" name="field-2" maxlength="5000" data-name="Field 2"
                                    placeholder="Example Text" class="form-field message w-input"></textarea>
                                <input type="submit" bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd7b" value="Submit"
                                    data-wait="Please wait..." class="form-submit">
                            </form>
                            <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd7c" class="w-form-done">
                                <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd7d">Thank you! Your submission has been
                                    received!</div>
                            </div>
                            <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd7f" class="w-form-fail">
                                <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd80">Oops! Something went wrong while
                                    submitting the form.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd82" class="section-bg-gradient-overlay type-2"></div>
                <div bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd83" class="section-accent cta type-2"><img
                        src="images/section-accent-type-2.png" loading="lazy"
                        sizes="(max-width: 479px) 92vw, (max-width: 767px) 93vw, (max-width: 991px) 92vw, (max-width: 1919px) 94vw, 1340px"
                        srcset="images/section-accent-type-2-p-500.png 500w, images/section-accent-type-2-p-800.png 800w, images/section-accent-type-2-p-1080.png 1080w, images/section-accent-type-2.png 1600w"
                        bind="8e00ed11-4c64-7d21-1276-f0ea31f3dd84" alt="" class="accent-bg-img"></div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); 
?>