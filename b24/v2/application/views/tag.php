<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">

        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0"><?php echo html_escape(trans("tag")); ?>: <?php echo html_escape($tag->tag); ?></h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo lang_base_url(); ?>"><?php echo html_escape(trans("home")); ?></a>
                                </li>
                                <li class="breadcrumb-item active"><?php echo html_escape(trans("tag")); ?></li>
                                <li class="breadcrumb-item active"><?php echo html_escape($tag->tag); ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">

                </div>
            </div>



        <div class="content-body">
            <div class="content-detached">
                <div class="content-body">
                    <!-- Blog List -->
                    <div class="blog-list-wrapper">
                        <!-- Blog List Items -->

                        <div class="col-xs-12 col-sm-12 posts <?php echo ($layout == "layout_3" || $layout == "layout_6") ? 'p-0 posts-boxed' : ''; ?>">
                            <div class="row match-height">
                                <?php $count = 0; ?>

                                <?php foreach ($posts as $item): ?>

                                    <?php if ($count != 0 && $count % 3 == 0): ?>
                                        <div class="col-sm-12 col-xs-12"></div>
                                    <?php endif; ?>

                                    <!-- post item -->
                                    <?php $this->load->view('post/_post_item', ['item' => $item]); ?>
                                    <!-- /.post item -->

                                    <?php if ($count == 1): ?>

                                        <?php $this->load->view("partials/_ad_spaces", ["ad_space" => "tag_top"]); ?>

                                        <!-- increment count -->
                                    <?php endif; ?>

                                    <?php $count++; ?>
                                <?php endforeach; ?>
                            </div>

                        </div><!-- /.posts -->

                        <div class="col-xs-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <?php $this->load->view("partials/_ad_spaces", ["ad_space" => "tag_bottom"]); ?>
                            </div>
                        </div>

                        <!-- Pagination -->
                        <div class="col-xs-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <?php echo $this->pagination->create_links(); ?>
                            </div>
                        </div>

                    </div>

                </div>


                <!--/col-->

            </div>
        </div>
        </div>
    </div>
</div>

<!-- /.Section: main -->
