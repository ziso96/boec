<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0"> <?php echo html_escape($post->title); ?> </h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo lang_base_url(); ?>"> <?php echo html_escape(trans("home")); ?> </a>
                                </li>
                                <?php $category_array = get_category_array($post->category_id);
                                if (!empty($category_array['parent_category'])):?>
                                <li class="breadcrumb-item "><a href="<?php echo generate_category_url(null, $category_array['parent_category']->slug); ?>"> <?php echo html_escape($category_array['parent_category']->name); ?> </a>
                                </li>
                                <?php endif; ?>
                                <?php if (!empty($category_array['subcategory'])): ?>
                                <li class="breadcrumb-item"> <a href=" <?php echo generate_category_url($category_array['parent_category']->slug, $category_array['subcategory']->slug); ?>"> <?php echo html_escape($category_array['subcategory']->name); ?> </a>
                                </li>
                                <?php endif; ?>
                                <li class="breadcrumb-item active"> <?php echo html_escape($post->title); ?>
                                </li>
                            </ol>
                        </div>

                        <div class="breadcrumb-wrapper">
                        </div>

                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">

                </div>
            </div>
        </div>
        <div class="content-detached">
            <div class="content-body">
                <!-- Blog Detail -->
                <div class="blog-detail-wrapper">
                    <div class="row">
                        <!-- Blog -->
                        <div class="col-12">
                            <div class="card">

                                <div class="card-body">
                                    <?php if (!empty($post->summary)): ?>
                                    <h3 class="mb-0">
                                    <?php echo $post->summary; ?>
                                    </h3>
                                    <?php endif; ?>

                                    <?php if (!empty($post->video_embed_code)): ?>
                                        <div class="post-video">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="<?php echo $post->video_embed_code; ?>" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <hr>
                                            <?php if (!empty($additional_images)) :
                                                $this->load->view("post/_post_details_slider", ["ad_space" => "post_top"]);
                                            else:
                                                if (!empty($post->image_big)): ?>
                                                    <div class="row match-height">
                                                    <div class="col-md-6 col-sm-12 col-12">
                                                    <img style="width: 100%; float: left; margin: 0 15px 0 0;" src="<?php echo get_post_image($post, 'big'); ?>" class="img-responsive center-image mb-3" alt="<?php echo html_escape($post->title); ?>"/>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endif; ?>

                                    <?php $this->load->view("partials/_ad_spaces", ["ad_space" => "post_top"]); ?>
                                        <div class="col-md-6 col-sm-12 col-12">
                                    <div class="post-text text-style">

                                        <?php echo $post->content; ?>

                                        <?php if (!empty($post->optional_url)) : ?>
                                            <br>
                                            <a href="<?php echo html_escape($post->optional_url); ?>"
                                               class="btn btn-md btn-custom margin-bottom15 btn-optional-link"
                                               target="_blank"><?php echo html_escape($settings->optional_url_button_name); ?></a>
                                        <?php endif; ?>
                                        <?php $files = get_post_files($post->id);
                                        if (!empty($files)):?>
                                            <div class="post-files">
                                                <h2 class="title"><?php echo trans("files"); ?></h2>
                                                <?php foreach ($files as $file): ?>
                                                    <?php echo form_open('download-file'); ?>
                                                    <input type="hidden" name="id" value="<?php echo $file->id; ?>">
                                                    <div class="file">
                                                        <button type="submit"><i class="icon-file"></i><?php echo $file->file_name; ?></button>
                                                    </div>
                                                    </form>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    </div>
                                    </div>


                                    <?php endif; ?>


                                <div class="card-body">
                                    <hr>
                                    <h3><?php echo html_escape(trans("tags")); ?></h3>

                                    <div class="my-1 py-25">
                                        <?php foreach ($post_tags as $tag) : ?>
                                        <a href="<?php echo lang_base_url() . 'tag/' . html_escape($tag->tag_slug); ?>">
                                            <span class="badge rounded-pill badge-light-info me-50"><?php echo html_escape($tag->tag); ?></span>
                                        </a>
                                        <?php endforeach; ?>
                                    </div>

                                <hr class="my-2" />
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center me-1">
                                                <a href="#" class="me-50">
                                                    <i data-feather="calendar" class="font-medium-5 text-body align-middle"></i>
                                                </a>
                                                <a href="#">
                                                    <div class="text-body align-middle"> <?php echo helper_date_format($post->created_at); ?></div>
                                                </a>
                                            </div>
<!--                                            --><?php //if ($general_settings->comment_system == 1) : ?>
<!--                                            <div class="d-flex align-items-center me-1">-->
<!--                                                <a href="#" class="me-50">-->
<!--                                                    <i data-feather="message-square" class="font-medium-5 text-body align-middle"></i>-->
<!--                                                </a>-->
<!--                                                <a href="#">-->
<!--                                                    <div class="text-body align-middle"> --><?php //echo helper_get_comment_count($post->id); ?><!--</div>-->
<!--                                                </a>-->
<!--                                            </div>-->
<!--                                            --><?php //endif; ?>
                                            <?php if ($general_settings->show_pageviews == 1) : ?>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="me-50">
                                                    <i data-feather="eye" class="font-medium-5 text-body align-middle"></i>
                                                </a>
                                                <a href="#">
                                                    <div class="text-body align-middle"><?php echo $post->hit; ?></div>
                                                </a>
                                            </div>
                                            <?php endif; ?>
                                        </div>


                                        </div>
                                    </div>

                                </div>

<!--        --><?php //if ($general_settings->comment_system == 1): ?>
<!--        <div class="col-12 mt-1" id="blogComment">-->
<!--        --><?php //if ($general_settings->comment_system == 1): ?>
<!--        <h6 class="section-label mt-25">--><?php //echo trans("comments"); ?><!--</h6>-->
<!--        --><?php //endif; ?>
<!--        --><?php //if ($general_settings->comment_system == 1): ?>
<!--        <div class="col-12 mt-1">-->
                    <!-- include comments -->
<!--                    --><?php //$this->load->view('post/_make_comment'); ?>
<!--            --><?php //$this->load->view('post/_comments'); ?>
<!--        </div>-->
<!--    --><?php //endif; ?>

    </div>

<!--                            --><?php //endif; ?>


    </div>
</div>






<!-- /.Section: main -->
<script>
    $(".fb-comments").attr("data-href", window.location.href);
</script>
<?php
if ($general_settings->facebook_comment == 1) {
	echo $general_settings->facebook_comment;
} ?>
