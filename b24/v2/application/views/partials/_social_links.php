<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!--if facebook url exists-->
<?php if (!empty($settings->facebook_url)) : ?>
    <l style="margin: 0 5px 0 0 ">
        <a href="<?php echo html_escape($settings->facebook_url); ?>"
       target="_blank"> <i class="font-medium-5"  data-feather='facebook'></i></a>
    </l>
<?php endif; ?>
<!--if twitter url exists-->
<?php if (!empty($settings->twitter_url)) : ?>
    <l style="margin: 0 10px 0 0" >
        <a class="twitter" href="<?php echo html_escape($settings->twitter_url); ?>"
           target="_blank"><i class="font-medium-5"  data-feather='instagram'></i></a>
    </l>
<?php endif; ?>
<!--if pinterest url exists-->
<?php if (!empty($settings->pinterest_url)) : ?>
    <l style="margin: 0 10px 0 0" >
        <a class="pinterest" href="<?php echo html_escape($settings->pinterest_url); ?>"
           target="_blank"><i class="font-medium-5 "  data-feather='youtube'></i></a>
    </l>
<?php endif; ?>
<!--if instagram url exists-->
<?php if (!empty($settings->instagram_url)) : ?>
    <l>
        <a class="instgram" href="<?php echo html_escape($settings->instagram_url); ?>"
           target="_blank"><i class="icon-instagram"></i></a>
    </l>
<?php endif; ?>
<!--if linkedin url exists-->
<?php if (!empty($settings->linkedin_url)) : ?>
    <l>
        <a class="linkedin" href="<?php echo html_escape($settings->linkedin_url); ?>"
           target="_blank"><i class="icon-linkedin"></i></a>
    </l>
<?php endif; ?>
<!--if vk url exists-->
<?php if (!empty($settings->vk_url)) : ?>
    <l>
        <a class="vk" href="<?php echo html_escape($settings->vk_url); ?>"
           target="_blank"><i class="icon-vk"></i></a>
    </l>
<?php endif; ?>

<!--if rss active-->
<?php if ($general_settings->show_rss == 1) : ?>
    <l>
        <a class="rss" href="<?php echo lang_base_url(); ?>rss-feeds"><i class="icon-rss"></i></a>
    </l>
<?php endif; ?>