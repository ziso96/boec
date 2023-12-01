<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <?php if ($page->title_active) : ?>
                            <h2 class="content-header-title float-start mb-0"><?php echo html_escape($page->title); ?>: <?php echo html_escape($album->name); ?></h2>
                        <?php endif; ?>
                        <?php if ($page->breadcrumb_active == 1): ?>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo lang_base_url(); ?>"><?php echo html_escape(trans("home")); ?></a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?php echo lang_base_url(); ?>gallery"><?php echo html_escape($page->title); ?></a>
                                    </li>
                                    <?php foreach ($gallery_images as $item): ?>
                                    <?php endforeach; ?>
                                    <li class="breadcrumb-item active"><?php echo html_escape($item->title); ?>
                                    </li>

                                </ol>
                            </div>
                        <?php else: ?>
                            <div class="page-breadcrumb">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">

                </div>
            </div>
        </div>
        <div class="content-body">

<!--                <div data-filter="category_--><?php //echo $item->category_id; ?><!--" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 gallery-item">-->
<!--                    <div class="item-inner">-->
<!--                        <a class="image-popup lightbox" href="--><?php //echo base_url() . $item->path_big; ?><!--" data-effect="mfp-zoom-out" title="--><?php //echo html_escape($item->title); ?><!--">-->
<!--                            <img src="--><?php //echo base_url() . html_escape($item->path_small); ?><!--" alt="--><?php //echo html_escape($item->title); ?><!--" class="img-responsive"/>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->

<!--            --><?php //if (!empty($gallery_categories)): ?>
<!--            <div class="card">-->
<!--            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">-->
<!--                <input type="radio" class="btn-check" name="option">-->
<!--                <label data-filter="" class="btn btn-outline-primary waves-effect" >--><?php //echo trans("all"); ?><!--</label>-->
<!--                --><?php //foreach ($gallery_categories as $category): ?>
<!--                <input type="radio" class="btn-check" name="option" >-->
<!--                <label data-filter="category_--><?php //echo $category->id; ?><!--" class="btn btn-outline-primary waves-effect" >--><?php //echo $category->name; ?><!--</label>-->
<!--                --><?php //endforeach; ?>
<!--            </div>-->
<!--            </div>-->
<!--            --><?php //endif; ?>

            <section id="card-demo-example">

                <div class="row">
                    <?php foreach ($gallery_images as $item): ?>
                    <div data-filter="category_<?php echo $item->category_id; ?>" class="col-md-6 col-lg-4">
                        <div class="card">
                            <a data-bs-toggle="modal" data-bs-target="#large<?php echo $item->id; ?>" href="<?php echo base_url() . $item->path_big; ?>"  title="<?php echo html_escape($item->title); ?>">
                                <img class="card-img " src="<?php echo base_url() . html_escape($item->path_small); ?>" height="250" alt="<?php echo html_escape($item->title); ?>" />
                            </a>

<!--                            <div class="card-body">-->
<!--                                <h4 class="card-title">Card title</h4>-->
<!--                                <p class="card-text">-->
<!--                                    Some quick example text to build on the card title and make up the bulk of the card's content.-->
<!--                                </p>-->
<!--                                <a href="#" class="btn btn-outline-primary">Go somewhere</a>-->
<!--                            </div>-->
                        </div>
                    </div>
                        <div class="modal fade text-start" id="large<?php echo $item->id; ?>" tabindex="-1" aria-labelledby="myModalLabel17" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel17"><?php echo html_escape($item->title); ?></h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img class="card-img-top full-height" src="<?php echo base_url() . html_escape($item->path_big); ?>" alt="<?php echo html_escape($item->title); ?>" />
                                    </div>
                                    <div class="modal-body">

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </section>


<!-- /.Section: wrapper -->

<script src="<?php echo base_url(); ?>assets/vendor/masonry-filter/imagesloaded.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/masonry-filter/masonry-3.1.4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/masonry-filter/masonry.filter.js"></script>

<script>
    $(document).ready(function (a) {
        a(".image-popup").magnificPopup({
            type: "image", titleSrc: function (b) {
                return b.el.attr("title") + "<small></small>"
            }, image: {verticalFit: true,}, gallery: {enabled: true, navigateByImgClick: true, preload: [0, 1]}, removalDelay: 100, fixedContentPos: true,
        })
    });
    $(document).ready(function () {
        $(document).on('click touchstart', '.filters .btn', function () {
            $(".filters .btn").removeClass("active");
            $(this).addClass("active")
        });
        $(function () {
            var a = $("#masonry");
            a.imagesLoaded(function () {
                a.masonry({gutterWidth: 0, isAnimated: true, itemSelector: ".gallery-item"})
            });
            $(".filters .btn").click(function (b) {
                b.preventDefault();
                var c = $(this).attr("data-filter");
                a.masonryFilter({
                    filter: function () {
                        if (!c) {
                            return true
                        }
                        return $(this).attr("data-filter") == c
                    }
                })
            })
        })
    });
</script>
