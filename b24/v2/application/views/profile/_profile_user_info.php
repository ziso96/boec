<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!--user profile info-->
<div class="card-body">
    <div class="user-avatar-section">
        <div class="d-flex align-items-center flex-column">
        <img class="img-fluid rounded mt-3 mb-2" src="<?php echo get_user_avatar($user); ?>" alt="<?php echo html_escape($user->username); ?>"  height="200" width="200" alt="User avatar" />
        </div>
        <div class="user-info text-center mb-50">

            <h4><?php echo html_escape($user->username); ?></h4>
        <?php if ($this->auth_check) : ?>
            <?php if ($user->role == 'admin'):?>
            <span style="text-transform: capitalize;" class="badge bg-light-success"><?php echo trans(html_escape($user->role)); ?></span>
            <?php endif  ?>
            <?php if ($user->role == 'author'):?>
                <span style="text-transform: capitalize;" class="badge bg-light-warning"><?php echo trans(html_escape($user->role)); ?></span>
            <?php endif  ?>
            <?php if ($user->role == 'user'):?>
                <span style="text-transform: capitalize;" class="badge bg-light-info"><?php echo trans(html_escape($user->role)); ?></span>
            <?php endif  ?>

        <?php else : ?>

            <?php if ($general_settings->registration_system == 1): ?>
            <span style="text-transform: capitalize;" class="badge bg-light-secondary"><?php echo html_escape($user->role); ?></span>
            <?php endif  ?>
        <?php endif  ?>
        </div>

        <div class="user-info text-center">
            <span class="badge bg-light-secondary"><?php echo html_escape($user->email); ?></span>
        </div>
        <p class="mt-2">
           <?php echo html_escape($user->about_me); ?>
        </p>

        <h4 class="fw-bolder border-bottom pb-50 mb-1"> </h4>
        <div class="info-container">
            <ul class="list-unstyled">
                <li class="mb-75">
                    <span class="fw-bolder me-25"><?php echo html_escape(trans("username")); ?>:</span>
                    <span><?php echo html_escape($user->username); ?></span>
                </li>
                <li class="mb-75">
                    <span class="fw-bolder me-25"><?php echo html_escape(trans("email")); ?>:</span>
                    <span><?php echo html_escape($user->email); ?></span>
                </li>
                <li class="mb-75">
                    <span class="fw-bolder me-25"><?php echo html_escape(trans("role")); ?>:</span>

                    <?php if ($this->auth_check) : ?>

                        <?php if ($user->role == 'admin'):?>
                            <span style="text-transform: capitalize;" class="badge bg-light-success"><?php echo trans(html_escape($user->role)); ?></span>
                        <?php endif  ?>
                        <?php if ($user->role == 'author'):?>
                            <span style="text-transform: capitalize;" class="badge bg-light-warning"><?php echo trans(html_escape($user->role)); ?></span>
                        <?php endif  ?>
                        <?php if ($user->role == 'user'):?>
                            <span style="text-transform: capitalize;" class="badge bg-light-info"><?php echo trans(html_escape($user->role)); ?></span>
                        <?php endif  ?>

                    <?php else : ?>

                        <?php if ($general_settings->registration_system == 1): ?>
                            <span style="text-transform: capitalize;" class="badge bg-light-secondary"><?php echo html_escape($user->role); ?></span>
                        <?php endif  ?>
                    <?php endif  ?>

                    </li><!--&nbsp;-->
                <li class="mb-75">
                    <span class="fw-bolder me-25"><?php echo trans("member_since"); ?></span>
                    <span><?php echo helper_date_format($user->created_at); ?></span>
                </li>
                <li class="mb-75">
                    <span class="fw-bolder me-25"><?php echo trans("id"); ?>:</span>
                    <span><?php echo html_escape($user->id); ?></span>
                </li>
                <li class="mb-75">
                    <span class="fw-bolder me-25"><?php echo trans("phone"); ?>:</span>
                    <span> <?php echo html_escape($user->phone); ?> </span>
                </li>
                <li class="mb-75">
                    <span class="fw-bolder me-25"><?php echo trans("language"); ?>:</span>
                    <span> AZ </span>
                </li>
                <li class="mb-75">
                    <span class="fw-bolder me-25">Token:</span>
                    <span><?php echo html_escape($user->token); ?></span>
                </li>
            </ul>

        </div>


<!--    <div class="right">-->
<!---->
<!---->
<!---->
<!--        <div class="row-custom">-->
<!---->
<!--        </div>-->
<!---->
<!--        <div class="row-custom user-contact">-->
<!--            <span class="info">--><?php //echo trans("member_since"); ?><!--&nbsp;--><?php //echo helper_date_format($user->created_at); ?><!--</span>-->
<!--            --><?php //if ($user->show_email_on_profile): ?>
<!--                <span class="info"><i class="icon-envelope"></i>--><?php //echo html_escape($user->email); ?><!--</span>-->
<!--            --><?php //endif; ?>
<!--        </div>-->
<!---->
<!--        <div class="row-custom profile-buttons">-->
<!--            --><?php //if (auth_check()): ?>
<!--                --><?php //if (user()->id != $user->id): ?>
<!--                    form follow-->
<!--                    --><?php //echo form_open('profile_controller/follow_unfollow_user', ['class' => 'form-inline']); ?>
<!--                    <input type="hidden" name="following_id" value="--><?php //echo $user->id; ?><!--">-->
<!--                    <input type="hidden" name="follower_id" value="--><?php //echo user()->id; ?><!--">-->
<!--                    --><?php //if (is_user_follows($user->id, user()->id)): ?>
<!--                        <button class="btn btn-md btn-custom btn-follow"><i class="icon-user-plus"></i>--><?php //echo trans("unfollow"); ?><!--</button>-->
<!--                    --><?php //else: ?>
<!--                        <button class="btn btn-md btn-custom btn-follow"><i class="icon-user-plus"></i>--><?php //echo trans("follow"); ?><!--</button>-->
<!--                    --><?php //endif; ?>
<!--                    --><?php //echo form_close(); ?>
<!--                --><?php //endif; ?>
<!--            --><?php //else: ?>
<!--                <a href="--><?php //echo lang_base_url(); ?><!--login" class="btn btn-md btn-custom btn-follow"><i class="icon-user-plus"></i>--><?php //echo trans("follow"); ?><!--</a>-->
<!--            --><?php //endif; ?>
<!--            <div class="social">-->
<!--                <ul>-->
<!--                    --><?php //if (!empty($user->facebook_url)): ?>
<!--                        <li><a href="--><?php //echo $user->facebook_url; ?><!--" target="_blank"><i class="icon-facebook"></i></a></li>-->
<!--                    --><?php //endif; ?>
<!--                    --><?php //if (!empty($user->twitter_url)): ?>
<!--                        <li><a href="--><?php //echo $user->twitter_url; ?><!--" target="_blank"><i class="icon-twitter"></i></a></li>-->
<!--                    --><?php //endif; ?>
<!--                    --><?php //if (!empty($user->instagram_url)): ?>
<!--                        <li><a href="--><?php //echo $user->instagram_url; ?><!--" target="_blank"><i class="icon-instagram"></i></a></li>-->
<!--                    --><?php //endif; ?>
<!--                    --><?php //if (!empty($user->pinterest_url)): ?>
<!--                        <li><a href="--><?php //echo $user->pinterest_url; ?><!--" target="_blank"><i class="icon-pinterest"></i></a></li>-->
<!--                    --><?php //endif; ?>
<!--                    --><?php //if (!empty($user->linkedin_url)): ?>
<!--                        <li><a href="--><?php //echo $user->linkedin_url; ?><!--" target="_blank"><i class="icon-linkedin"></i></a></li>-->
<!--                    --><?php //endif; ?>
<!--                    --><?php //if (!empty($user->vk_url)): ?>
<!--                        <li><a href="--><?php //echo $user->vk_url; ?><!--" target="_blank"><i class="icon-vk"></i></a></li>-->
<!--                    --><?php //endif; ?>
<!--                    --><?php //if (!empty($user->youtube_url)): ?>
<!--                        <li><a href="--><?php //echo $user->youtube_url; ?><!--" target="_blank"><i class="icon-youtube"></i></a></li>-->
<!--                    --><?php //endif; ?>
<!--                </ul>-->
<!--            </div>-->
<!-- -->
<!--        </div>-->
<!--    </div>-->
</div>
