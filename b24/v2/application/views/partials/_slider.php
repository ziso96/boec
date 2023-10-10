<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!--

<div class="col-md-12 col-sm-12">
    <div class="card">
        <div class="card-body">
            <div id="carousel-example-caption" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carousel-example-caption" data-bs-slide-to="0" class=""></li>
                    <li data-bs-target="#carousel-example-caption" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carousel-example-caption" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <?php // if (!empty($this->slider_posts)): $i=0;
                    //foreach ($this->slider_posts as $item) : ?>
                    <!-- slider item -->
                 <!--   <div class="carousel-item active">
                        <img class="img-fluid" src="<?php  // echo base_url(); ?>v2/app-assets/images/slider/09.jpg" alt="img" />
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="text-white">First Slide Label</h3>
                            <p class="text-white">
                                Donut jujubes I love topping I love sweet. Jujubes I love brownie gummi bears I love donut sweet
                                chocolate. Tart chocolate marshmallow.Tart carrot cake muffin.
                            </p>
                        </div>
                    </div>
                        <?php //  $i++; endforeach;
                 //   endif; ?>


                </div>
                <a class="carousel-control-prev" data-bs-target="#carousel-example-caption" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" data-bs-target="#carousel-example-caption" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>




<div class="slider-container">
	<div class="container-fluid">
		<div class="row">
			<div class="home-slider-fixer">
				<div class="col-sl">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAooAAAGxAQMAAADf7wU8AAAAA1BMVEVHcEyC+tLSAAAAAXRSTlMAQObYZgAAADlJREFUGBntwTEBAAAAwiD7p14JT2AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAwFOMYwAB7fFpjAAAAABJRU5ErkJggg==" alt="img">
				</div>
				<div class="col-sl col-sl-2"></div>
				<div class="col-sl col-sl-3"></div>
				<div class="col-sl col-sl-4"></div>
			</div>
		</div>
	</div>

	<div class="home-slider-container">
		<div id="home-slider" class="home-slider">
			<?php  //  if (!empty($this->slider_posts)): $i=0;
                 // foreach ($this->slider_posts as $item) : ?>
					<!-- slider item --><!--
					<div class="home-slider-item dd<?php // echo $i; ?>">
						<a href="<?php// echo generate_post_url($item); ?>">
							<?php // $this->load->view("post/_post_image_slider", ['post_item' => $item, 'type' => 'home_slider']); ?>
						</a>
						<div class="item-info redirect-onclik" data-url="<?php // echo generate_post_url($item); ?>">
							<a href="<?php //echo generate_category_url($item->parent_category_slug, $item->category_slug); ?>">
							<span class="label label-danger label-slider-category">
								<?php // echo html_escape($item->category_name); ?>
							</span>
							</a>
							<h2 class="title">
								<a href="<?php //echo generate_post_url($item); ?>">
									<?php //echo html_escape(character_limiter($item->title, 70, '...')); ?>
								</a>
							</h2>
							<?php //$this->load->view("post/_post_meta", ['item' => $item]); ?>
						</div>
					</div>
				<?php // $i++; endforeach;
			//endif; ?>
		</div>
		<div id="home-slider-nav" class="slider-nav">
			<button class="prev"><i class="icon-arrow-left"></i></button>
			<button class="next"><i class="icon-arrow-right"></i></button>
		</div>
	</div>
</div>
