<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="slider-container">
	<div id="post-details-slider" class="random-slider post-details-slider">
		<?php if (!empty($post->image_big)): ?>
			<div class="home-slider-boxed-item">
<!--				<img  style="width: 100%; float: left; margin: 0 15px 0 0;" src="--><?php //echo get_post_image($post, 'big'); ?><!--" alt="--><?php //echo html_escape($post->title); ?><!--" class="img-responsive mb-3"/>-->
			</div>
            <?php if (!empty($additional_images)):?>
                <section style="cursor:w-resize;" id="component-swiper-multiple">
                    <div class="card">

                        <div class="card-body">
                            <div class="swiper-multiple swiper-container">
                                <div class="swiper-wrapper">
                                    <?php    foreach ($additional_images as $image):?>

                                        <div class="swiper-slide">
                                            <img class="img-fluid" style=" " src="<?php echo base_url() . $image->image_path; ?>" alt="<?php echo html_escape($post->title); ?>" />
                                        </div>
                                    <?php endforeach;?>
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>

                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
		<?php endif; ?>

	</div>

</div>
