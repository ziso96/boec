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
                                    <!-- <div class="row">
                                        <div class="col-xl-12 col-md-12 col-12">
                                            <h2 class="contact-leave-message"><?php // echo trans("leave_message"); ?></h2>

                                            <?php $this->load->view('partials/_messages'); ?>

                                            <!-- form start -->
                                            <?php echo form_open('home_controller/contact_post', ['id' => 'form_validate', 'class' => 'validate_terms']); ?>

                                    <!--      <div class="mb-1">
                                                <label class="form-label" for="basicInput"><?php // echo trans("name"); ?></label>
                                                <input type="text" class="form-control" id="basicInput" name="name" placeholder="<?php // echo trans("name"); ?>" maxlength="199" minlength="1"
                                                       pattern=".*\S+.*" value="<?php // echo old('name'); ?>" required <?php // echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-label" for="basicInput"><?php // echo trans("email"); ?></label>
                                                <input type="text" class="form-control" id="basicInput"  name="email" maxlength="199"
                                                       placeholder="<?php // echo trans("email"); ?>"
                                                       value="<?php // echo old('email'); ?>" required <?php // echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-label" for="exampleFormControlTextarea1"><?php // echo trans("message"); ?></label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"
                                                          placeholder="<?php // echo trans("message"); ?>" maxlength="4970"
                                                          minlength="5"
                                                          required <?php // echo ($rtl == true) ? 'dir="rtl"' : ''; ?>><?php // echo old('message'); ?></textarea>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="unchecked" required>
                                                <label class="form-check-label" for="inlineCheckbox2">
                                                    <a href="<?php // echo lang_base_url(); ?>terms-conditions" class="link-terms" target="_blank"><strong><?php // echo trans("terms_conditions"); ?> </strong></a> | <?php // echo trans("terms_conditions_exp"); ?>&nbsp;
                                                </label>
                                            </div>
                                            <?php // generate_recaptcha(); ?>

                                            <div class="demo-inline-spacing">
                                                <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">

                                                    <?php // echo html_escape(trans("submit")); ?>

                                                </button>
                                            </div>
                                           </form>
                                        </div>
                                    </div> -->

                                    <hr class="my-2" />
                                <div class="row">
                                    <div class="col-xl-9 col-md-6 col-12">
                                        <?php if (!empty($settings->contact_address)): ?>

                                                        <iframe style="width: 100%; height: -webkit-fill-available; "id="contact_iframe" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=<?php echo $settings->contact_address; ?>&ie=UTF8&t=&z=8&iwloc=B&output=embed&disableDefaultUI=true" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

                                        <?php endif; ?>
                                        <script>
                                            var iframe = document.getElementById("contact_iframe");
                                            iframe.src = iframe.src;
                                        </script>
                                    </div>




                                    <div class="col-xl-3 col-md-6 col-12">

                                    <?php if ($settings->contact_phone): ?>
                                    <div class="card-body"><i class="font-medium-2 " data-feather='phone-call'></i> &nbsp;
                                    <?php echo html_escape($settings->contact_phone); ?>
                                    </div>
                                    <?php endif; ?>

                                    <?php if ($settings->contact_email): ?>
                                    <div class="card-body"><i class="font-medium-2 " data-feather='mail'></i> &nbsp;
                                    <?php echo html_escape($settings->contact_email); ?>
                                    </div>
                                    <?php endif; ?>

                                    <?php if ($settings->contact_address): ?>
                                    <div class="card-body"><i class="font-medium-2 mb-50" data-feather='map-pin'></i> &nbsp;
                                    <?php echo html_escape($settings->contact_address); ?>
                                    </div>
                                    <?php endif; ?>
                                    </div>
                                    <hr class="my-2" />
                                    <?php echo $settings->contact_text; ?>
                                    <hr class="my-2" />
                                </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Blog -->
                        <?php else: ?>

                        <?php endif; ?>



            </div>
        </div>

    </div>
        </div>
    </div>
</div>






