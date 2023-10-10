<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<input type="hidden" value="<?php echo $comment_limit; ?>" id="post_comment_limit">
<?php if ($comment_count > 0): ?>
        <h6 class="section-label mt-25"><?php echo trans("comments"); ?>: <?php echo $comment_count; ?></h6>
<?php endif; ?>

<?php foreach ($comments as $comment):
$comment_user = null;
if (!empty($comment->user_id)) {
    $comment_user = get_user($comment->user_id);
} ?>
<div class="card">
    <div class="card-body">

        <div class="d-flex align-items-start">
            <?php if (!empty($comment_user)): ?>
            <div class="avatar me-75">
                <img src="<?php echo get_user_avatar_by_id($comment->user_id); ?>" width="38" height="38" alt="<?php echo html_escape($comment->name); ?>">
            </div>
            <?php else: ?>
            <div class="avatar me-75">
                <img src="<?php echo get_user_avatar_by_id($comment->user_id); ?>" width="38" height="38" alt="<?php echo html_escape($comment->name); ?>">
            </div>
            <?php endif; ?>

            <div class="author-info">
                <?php if (!empty($comment_user)): ?>
                <h6 class="fw-bolder mb-25"><?php echo html_escape($comment->name); ?></h6>
                <?php else: ?>
                <h6 class="fw-bolder mb-25"><?php echo html_escape($comment->name); ?></h6>
                <?php endif; ?>

                <p class="card-text"><?php echo time_ago($comment->created_at); ?></p>
                <p class="card-text">
                    <?php echo html_escape($comment->comment); ?>
                </p>

                <a href="javascript:void(0)" onclick="show_comment_box('<?php echo $comment->id; ?>');">
                    <div class="d-inline-flex align-items-center me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left font-medium-3 me-50"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                        <span><?php echo trans('reply'); ?></span>
                    </div>
                </a>

                <?php if (auth_check()):
                    if ($comment->user_id == user()->id || user()->role == "admin"): ?>
                        <a href="javascript:void(0)" onclick="delete_comment('<?php echo $comment->id; ?>','<?php echo $post->id; ?>','<?php echo trans("confirm_comment"); ?>');">
                            <div class="d-inline-flex align-items-center">
                                <i class=" font-medium-3 me-50" data-feather="trash-2"></i>
                                <span><?php echo trans("delete"); ?></span>
                            </div>

                        </a>
                    <?php endif;
                endif; ?>

            </div>
        </div>
    </div>
</div>

    <?php $this->load->view('post/_subcomments', ['parent_comment' => $comment]); ?>

    <?php endforeach; ?>


    <?php if ($comment_count > $comment_limit): ?>
        <div id="load_comment_spinner" class="col-sm-12 load-more-spinner">
            <div class="row">
                <div class="spinner">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <button type="button" class="btn-load-more" onclick="load_more_comment('<?php echo $post->id; ?>');">
                <?php echo trans("load_more_comments"); ?>
            </button>
        </div>
    <?php endif; ?>


