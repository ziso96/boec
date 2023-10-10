<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php if ($layout == "layout_2" || $layout == "layout_5"): ?>

	<!--Post list item-->
	<div class="post-item-horizontal">
		<div class="item-image">
			<a href="<?php echo generate_category_url($item->parent_category_slug, $item->category_slug); ?>">
                <span class="label-post-category">
					<?php echo html_escape($item->category_name); ?>
                </span>
			</a>
			<a href="<?php echo generate_post_url($item); ?>">
				<?php $this->load->view("post/_post_image", ['post_item' => $item, 'type' => 'image_slider']); ?>
			</a>
		</div>

		<div class="item-content">

			<h3 class="title">
				<a href="<?php echo generate_post_url($item); ?>">
					<?php echo html_escape(character_limiter($item->title, 55, '...')); ?>
				</a>
			</h3>
			<?php $this->load->view("post/_post_meta", ['item' => $item]); ?>
			<p class="summary">
				<?php echo html_escape(character_limiter($item->summary, 130, '...')); ?>
			</p>
			<div class="post-buttons">
				<a href="<?php echo generate_post_url($item); ?>" class="pull-right read-more">
					<?php echo html_escape(trans("readmore")); ?>
					<i class="icon-arrow-right read-more-i" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</div>

<?php elseif ($layout == "layout_3" || $layout == "layout_6"): ?>

    <div class="col-md-4 col-12">
        <div class="card">
            <a href="<?php echo generate_post_url($item); ?>">
                <?php $this->load->view("post/_post_image", ['post_item' => $item, 'type' => 'image_slider']); ?>
            </a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="<?php echo generate_post_url($item); ?>" class="blog-title-truncate text-body-heading"><?php echo html_escape(character_limiter($item->title, 50, '...')); ?></a>
                </h4>
                <div class="d-flex">
                    <div class="avatar me-50">
                        <img src="assets/img/user.png" alt="BOEV" width="24" height="24" />
                    </div>
                    <div class="author-info">
                        <small><a href="#" class="text-body">Dərc edilib</a></small>
                        <span class="text-muted ms-50 me-25">|</span>
                        <small class="text-muted"><?php echo helper_date_format($item->created_at); ?></small>
                    </div>
                </div>
                <div class="my-1 py-25">
                    <a href="<?php echo generate_category_url($item->parent_category_slug, $item->category_slug); ?>">
                        <span class="badge rounded-pill badge-light-info me-50"><?php echo html_escape($item->category_name); ?></span>
                    </a>
                </div>
                <p class="card-text blog-content-truncate">
                    <?php echo (character_limiter($item->content, 50, '...')); ?>
                </p>
                <hr />
                <div class="d-flex justify-content-between align-items-center">
                    <a href="page-blog-detail.html#blogComment">
                        <div class="d-flex align-items-center">
                            <i data-feather="eye" class="font-medium-1 text-body me-50"></i>
                            <span class="text-body fw-bold me-2"><?php echo $item->hit; ?></span>
                            <i data-feather="message-square" class="font-medium-1 text-body me-50"></i>
                            <span class="text-body fw-bold"><?php echo helper_get_comment_count($item->id); ?> <?php echo html_escape(trans("comment")); ?></span>
                        </div>
                    </a>
                    <a href="<?php echo generate_post_url($item); ?>" class="fw-bold"><?php echo html_escape(trans("readmore")); ?></a>
                </div>
            </div>
        </div>
    </div>




<?php else: ?>

	<!--post list item-->
	<div class="col-sm-12 post-item">
		<div class="row">
			<div class="post-image">
				<a href="<?php echo generate_post_url($item); ?>">
					<?php $this->load->view("post/_post_image", ['post_item' => $item, 'type' => 'image_mid']); ?>
				</a>
			</div>

			<div class="post-footer">
				<div class="text-center">
					<!--if related category exists-->
					<p class="default-post-label-category">
						<a href="<?php echo generate_category_url($item->parent_category_slug, $item->category_slug); ?>">
                            <span class="label-post-category">
                          	<?php echo html_escape($item->category_name); ?>
                            </span>
						</a>
					</p>
					<h3 class="title">
						<a href="<?php echo generate_post_url($item); ?>">
							<?php echo html_escape($item->title); ?>
						</a>
					</h3>
					<?php $this->load->view("post/_post_meta", ['item' => $item]); ?>
				</div>
				<p class="summary text-center">
					<?php echo html_escape($item->summary); ?>
				</p>

				<div class="post-buttons">
					<a href="<?php echo generate_post_url($item); ?>" class="pull-right read-more">
						<?php echo html_escape(trans("readmore")); ?>
						<i class="icon-arrow-right read-more-i" aria-hidden="true"></i>
					</a>
				</div>

			</div><!-- /.post footer -->
		</div><!-- /.row -->
	</div>

<?php endif; ?>




