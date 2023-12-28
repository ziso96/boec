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
                        <h2 class="content-header-title float-start mb-0"><?php echo html_escape($page->title); ?></h2>
                        <?php endif; ?>
                        <?php if ($page->breadcrumb_active == 1): ?>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo lang_base_url(); ?>"><?php echo html_escape(trans("home")); ?></a>
                                </li>

                                <li class="breadcrumb-item active"><?php echo html_escape($page->title); ?>
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


            <section id="card-demo-example">
                <div class="row match-height">
                    <?php foreach ($gallery_albums as $item):
                    $cover = get_gallery_cover_image($item->id); ?>

                    <div class="col-md-6 col-lg-4">

                        <div class="card">
                            <a href="<?php echo lang_base_url(); ?>gallery/album/<?php echo $item->id; ?>">
                                <?php if (!empty($cover)): ?>
                                    <img class="card-img-top" src="<?php echo base_url() . html_escape($cover->path_small); ?>" alt="<?php echo html_escape($item->name); ?>" class="img-responsive"/>
                                <?php else: ?>
                                    <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="<?php echo html_escape($item->name); ?>" class="img-responsive img-gallery-empty"/>
                                <?php endif; ?>
                            </a>
                            <div class="card-body">
<!--                                <h4 class="card-title">Card title</h4>-->
<!--                                <p class="card-text">-->
<!--                                    Some quick example text to build on the card title and make up the bulk of the card's content.-->
<!--                                </p>-->
                                <a href="<?php echo lang_base_url(); ?>gallery/album/<?php echo $item->id; ?>" class="btn btn-outline-primary full-width"><?php echo html_escape(character_limiter($item->name, 100, '...')); ?></a>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>


                </div>
            </section>








        </div>
    </div>
</div>



<!-- Section: main -->


<script src="<?php echo base_url(); ?>assets/vendor/masonry-filter/imagesloaded.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/masonry-filter/masonry-3.1.4.min.js"></script>
<script>
    $(document).ready(function () {
        $(function () {
            var a = $("#masonry");
            a.imagesLoaded(function () {
                a.masonry({gutterWidth: 0, isAnimated: true, itemSelector: ".gallery-item"})
            });
        })
    });
</script>