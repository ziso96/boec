<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">

        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0"><?php echo html_escape(trans("search")); ?>: <?php echo html_escape($q); ?></h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo lang_base_url(); ?>"><?php echo html_escape(trans("home")); ?></a>
                                </li>
                                <li class="breadcrumb-item active"><?php echo html_escape(trans("search")); ?></li>
                                <li class="breadcrumb-item active"><?php echo html_escape($q); ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">

                </div>
            </div>
<!-- Section: main -->
            <div class="content-body">
                <div class="content-detached">
                    <div class="content-body">
                        <!-- Blog List -->
                        <div class="blog-list-wrapper">

                        <!-- posts -->
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

                                        <?php $this->load->view("partials/_ad_spaces", ["ad_space" => "search_top"]); ?>

                                    <?php endif; ?>

                                    <?php $count++; ?>

                                <?php endforeach; ?>

                                <?php if ($post_count < 1): ?>
                                    <div class="w-100 text-center">
                                    <h2 class=""><?php echo html_escape(trans("search_noresult")); ?></h2> <br>
                                    <img class="img-fluid" style="zoom: 50%" src="<?php echo base_url(); ?>v2/app-assets/images/pages/under-maintenance.svg" alt="Under maintenance page" />
                                    </div>
                                <?php endif; ?>


                            </div><!-- /.posts -->
                        </div>

                        <div class="col-xs-12 col-sm-12">
                            <div class="row">
                                <?php $this->load->view("partials/_ad_spaces", ["ad_space" => "search_bottom"]); ?>
                            </div>
                        </div>

                        <!-- Pagination -->
                        <div class="col-xs-12 col-sm-12">
                            <div class="row">
                                <?php echo $this->pagination->create_links(); ?>
                            </div>
                        </div>

                    </div>

                </div>



            </div>
        </div>
    </div>
    </div>
</div>

<!-- /.Section: main -->

