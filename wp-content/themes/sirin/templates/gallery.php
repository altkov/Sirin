    <?php
    get_template_part('template-parts/page-header');
    ?>

    <main class="main content-section">
        <div class="container">
            <div class="content-tabs" data-target=".main-content">
                <a href="#tab-concept" data-index="0" class="content-tab active">
                    <h2><?php echo carbon_get_the_post_meta('tab-1-title'); ?></h2>
                </a>
                <a href="#tab-creators" data-index="1" class="content-tab">
                    <h2><?php echo carbon_get_the_post_meta('tab-2-title'); ?></h2>
                </a>
            </div>
            <div class="main-content">
                <div class="tabs-content">
                    <div class="tab-content" id="tab-concept">
                        <div class="content-row">
                            <div class="main-text">
                                <?php echo carbon_get_the_post_meta('tab-concept-text'); ?>
                            </div>
                            <aside class="extra-description">
                                <img class="content-image round-image" src="<?php echo carbon_get_post_meta_img('tab-concept-img'); ?>" alt="Сирин">
                                <p class="extra-text"><?php echo carbon_get_the_post_meta('tab-concept-extra-text'); ?></p>
                            </aside>
                        </div>
                    </div>
                    <div class="tab-content" id="tab-creators">
                        <div class="row">
                            <?php
                                $creators = carbon_get_the_post_meta('creators');
                                foreach ($creators as $creator) { ?>
                                    <div class="col-md-6 creator-block">
                                        <div class="creator-about">
                                            <img src="<?php echo wp_get_attachment_image_url($creator['img']); ?>" alt="<?php echo $creator['name']; ?>" class="creator-image content-image">
                                            <div class="creator-text">
                                                <h4 class="creator-name"><?php echo $creator['name']; ?></h4>
                                                <p><?php echo $creator['about']; ?></p>
                                            </div>
                                        </div>
                                        <div class="extra-text">
                                            <?php echo $creator['text']; ?>
                                        </div>
                                    </div>
                                <?php }
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>



    <section class="content-section">
        <div class="container">
            <div class="section-header">
                <h2><?php echo carbon_get_the_post_meta('activities-title'); ?></h2>
                <p><?php echo carbon_get_the_post_meta('activities-text'); ?></p>
            </div>
            <div class="row section-block cards-row mobile-slider">
                <?php if ($activities = carbon_get_the_post_meta('gallery-activities')) {
                    foreach ($activities as $activity) { ?>
                        <div class="col-lg-6">
                            <div class="activity-card content-card">
                                <img src="<?php echo wp_get_attachment_image_url($activity['img']); ?>" alt="<?php echo $activity['title']; ?>" class="activity-img content-image">
                                <div class="activity-text">
                                    <h5 class="card-header"><?php echo $activity['title']; ?></h5>
                                    <p><?php echo $activity['content']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php }
                } ?>
            </div>
        </div>
    </section>



    <!-- SECTION -->

    <section class="content-section">
        <div class="container">
            <div class="blog-preview-container">
                <?php $blogPreviewTitle = carbon_get_the_post_meta('blog-preview-title'); ?>
                <img src="<?php echo carbon_get_post_meta_img('blog-preview-img'); ?>" alt="<?php echo $blogPreviewTitle; ?>" class="blog-preview-image content-image round-image">
                <div class="blog-preview">
                    <h2><?php echo $blogPreviewTitle; ?></h2>
                    <p><?php echo carbon_get_the_post_meta('blog-preview-text'); ?></p>
                    <a href="#" class="blog-preview-btn btn-secondary btn-compact"><?php echo carbon_get_the_post_meta('blog-preview-btn'); ?></a>
                </div>
            </div>
        </div>
    </section>