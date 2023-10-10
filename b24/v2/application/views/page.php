<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo lang_base_url(); ?>v2/app-assets/css/pages/page-blog.css">


<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <?php if ($page->breadcrumb_active == 1): ?>
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <?php if ($page->right_column_active == 1): ?>
                    <div class="col-12">
                        <?php if ($page->title_active == 1): ?>
                        <h2 class="content-header-title float-start mb-0"><?php echo html_escape($page->title); ?></h2>
                        <?php endif; ?>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo lang_base_url(); ?>"><?php echo html_escape(trans("home")); ?></a>
                                </li>
                                <li class="breadcrumb-item active"><?php echo html_escape($page->title); ?>
                                </li>
                            </ol>
                        </div>
                        <?php else: ?>
                            <div class="breadcrumb-wrapper">
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
        <div class="content-detached">
            <div class="content-body">
                <!-- Blog Detail -->
                <div class="blog-detail-wrapper">
                    <div class="row">
                        <!-- Blog -->
                        <div class="col-12">
                            <div class="card">

                                <div class="card-body">
                                        <?php echo $page->page_content; ?>
                                    <hr class="my-2" />
                                    <!-- <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center me-1">
                                                <a href="#" class="me-50">
                                                    <i data-feather="message-square" class="font-medium-5 text-body align-middle"></i>
                                                </a>
                                                <a href="#">
                                                    <div class="text-body align-middle">19.1K</div>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="me-50">
                                                    <i data-feather="bookmark" class="font-medium-5 text-body align-middle"></i>
                                                </a>
                                                <a href="#">
                                                    <div class="text-body align-middle">139</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="dropdown blog-detail-share">
                                            <i data-feather="share-2" class="font-medium-5 text-body cursor-pointer" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item py-50 px-1">
                                                    <i data-feather="github" class="font-medium-3"></i>
                                                </a>
                                                <a href="#" class="dropdown-item py-50 px-1">
                                                    <i data-feather="gitlab" class="font-medium-3"></i>
                                                </a>
                                                <a href="#" class="dropdown-item py-50 px-1">
                                                    <i data-feather="facebook" class="font-medium-3"></i>
                                                </a>
                                                <a href="#" class="dropdown-item py-50 px-1">
                                                    <i data-feather="twitter" class="font-medium-3"></i>
                                                </a>
                                                <a href="#" class="dropdown-item py-50 px-1">
                                                    <i data-feather="linkedin" class="font-medium-3"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!--/ Blog -->
                        <?php else: ?>

                        <?php endif; ?>



                        <!-- Blog Comment -->
                        <!--   <div class="col-12 mt-1" id="blogComment">
                               <h6 class="section-label mt-25">Comment</h6>
                               <div class="card">
                                   <div class="card-body">
                                       <div class="d-flex align-items-start">
                                           <div class="avatar me-75">
                                               <img src="../../../app-assets/images/portrait/small/avatar-s-9.jpg" width="38" height="38" alt="Avatar" />
                                           </div>
                                           <div class="author-info">
                                               <h6 class="fw-bolder mb-25">Chad Alexander</h6>
                                               <p class="card-text">May 24, 2020</p>
                                               <p class="card-text">
                                                   A variation on the question technique above, the multiple-choice question great way to engage your
                                                   reader.
                                               </p>
                                               <a href="#">
                                                   <div class="d-inline-flex align-items-center">
                                                       <i data-feather="corner-up-left" class="font-medium-3 me-50"></i>
                                                       <span>Reply</span>
                                                   </div>
                                               </a>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <!--/ Blog Comment -->

                        <!-- Leave a Blog Comment -->
                        <!--   <div class="col-12 mt-1">
                               <h6 class="section-label mt-25">Leave a Comment</h6>
                               <div class="card">
                                   <div class="card-body">
                                       <form action="javascript:void(0)" class="form">
                                           <div class="row">
                                               <div class="col-sm-6 col-12">
                                                   <div class="mb-2">
                                                       <input type="text" class="form-control" placeholder="Name" />
                                                   </div>
                                               </div>
                                               <div class="col-sm-6 col-12">
                                                   <div class="mb-2">
                                                       <input type="email" class="form-control" placeholder="Email" />
                                                   </div>
                                               </div>
                                               <div class="col-sm-6 col-12">
                                                   <div class="mb-2">
                                                       <input type="url" class="form-control" placeholder="Website" />
                                                   </div>
                                               </div>
                                               <div class="col-12">
                                                   <textarea class="form-control mb-2" rows="4" placeholder="Comment"></textarea>
                                               </div>
                                               <div class="col-12">
                                                   <div class="form-check mb-2">
                                                       <input type="checkbox" class="form-check-input" id="blogCheckbox" />
                                                       <label class="form-check-label" for="blogCheckbox">Save my name, email, and website in this browser for the next time I comment.</label>
                                                   </div>
                                               </div>
                                               <div class="col-12">
                                                   <button type="submit" class="btn btn-primary">Post Comment</button>
                                               </div>
                                           </div>
                                       </form>
                                   </div>
                               </div>
                           </div>
                           <!--/ Leave a Blog Comment -->
                    </div>
                </div>
                <!--/ Blog Detail -->

            </div>
        </div>

    </div>
</div>

