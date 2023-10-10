<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Start Footer Section -->
<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">Müəllif hüququ © 2023<a class="ms-25" href="#" target="_blank">BOEC</a><span class="d-none d-sm-inline-block">, Bütünm hüquqları qorunur!</span></span><l class="float-md-end d-none d-md-block"> <?php echo html_escape(trans("social_media")); ?>: <?php $this->load->view("partials/_social_links"); ?><span class="float-md-end d-none d-md-block"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></span></l></p>
    <!-- <br><p><?php // echo html_escape(trans("newsletter_exp")); ?></p>
    <?php // echo form_open('home_controller/add_to_newsletter'); ?>
    <div class="row">
        <div class="col-md-3">
            <input type="text" class="form-control" id="basicInput" placeholder="<?php // echo html_escape(trans("email")); ?>" required <?php // echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
        </div>
        <div class="col-md-3">
            <button class="btn btn-primary waves-effect waves-float waves-light" type="submit"><?php // echo trans("subscribe"); ?></button>
        </div>
    </div>
    <?php // echo form_close(); ?>

    <div class="row">
        <p id="newsletter">
            <?php
            // if ($this->session->flashdata('news_error')):
              //  echo '<span class="text-danger">' . $this->session->flashdata('news_error') . '</span>';
          //  endif;

          //  if ($this->session->flashdata('news_success')):
             //   echo '<span class="text-success">' . $this->session->flashdata('news_success') . '</span>';
          //  endif;
            ?>
        </p>
    </div> -->
<br>
<br>
<br>
<br>
</footer>
<button class="btn btn-primary btn-icon scroll-top waves-effect waves-float waves-light" type="button" style="display: inline-block;"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></button>





			<!-- footer widget follow us-->





<!-- End Footer Section -->
<?php if (!isset($_COOKIE["inf_cookies_warning"]) && $settings->cookies_warning): ?>
	<div class="cookies-warning">
		<div class="text"><?php echo $this->settings->cookies_warning_text; ?></div>
		<a href="javascript:void(0)" onclick="hide_cookies_warning();" class="icon-cl"> <i class="icon-close"></i></a>
	</div>
<?php endif; ?>
<!-- Scroll Up Link -->
<a href="#" class="scrollup"><i class="icon-arrow-up"></i></a>
<!-- Slider js -->
<script src="<?php echo base_url(); ?>assets/vendor/slick/slick.min.js"></script>
<!-- Bootstrap js -->
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- Plugins -->
<script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
<!-- Theme js -->
<script src="<?php echo base_url(); ?>assets/js/script-3.9.min.js"></script>
<?php if (isset($page_type)):
	echo $general_settings->facebook_comment;
endif; ?>
<script>$('<input>').attr({type: 'hidden', name: 'lang_folder', value: '<?php echo $this->selected_lang->folder_name; ?>'}).appendTo('form[method=post]');</script>
<?php echo $general_settings->google_adsense_code; ?>
<?php echo $general_settings->google_analytics; ?>




<!-- BEGIN: Vendor JS-->
<script src="<?php echo base_url(); ?>v2/app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="<?php echo base_url(); ?>v2/app-assets/js/core/app-menu.js"></script>
<script src="<?php echo base_url(); ?>v2/app-assets/js/core/app.js"></script>
<script src="<?php echo base_url(); ?>v2/app-assets/vendors/js/ui/jquery.sticky.js"></script>
<script src="<?php echo base_url(); ?>v2/app-assets/js/scripts/components/components-modals.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!-- END: Page JS-->

<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>


</body>
</html>
