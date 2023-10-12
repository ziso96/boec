<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>



<div class="card">
    <div class="card-body">
        <?php if (auth_check()): ?>
        <form id="make_comment_registered" class="form">
            <input type="hidden" name="parent_id" value="0">
            <input type="hidden" name="user_id" value="0">
            <input type="hidden" name="post_id" value="<?php echo $post->id; ?>">
            <div class="row">
                        <input type="hidden" name="parent_id" class="form-control" value="0">
                        <input type="hidden" name="user_id" class="form-control" value="<?php echo user()->id; ?>">
                        <input type="hidden" name="post_id" class="form-control" <?php echo $post->id; ?>">
                <div class="col-12">
                    <textarea name="comment" class="form-control mb-2" rows="4" placeholder="<?php echo trans("leave_your_comment"); ?>"></textarea>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary waves-effect waves-float waves-light"><?php echo trans("post_comment"); ?></button>
                </div>
                <div id="message-comment-result" class="message-comment-result"></div>
            </div>
        </form>
    </div>
</div>
<?php else: ?>
        <form id="make_comment" class="form">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <div class="mb-2">
                        <input type="text" name="name" class="form-control" placeholder="<?php echo trans("name"); ?>">
                    </div>
                </div>
                <div class="col-sm-6 col-12">
                    <div class="mb-2">
                        <input type="email" name="email" class="form-control" placeholder="<?php echo trans("email"); ?>">

                    </div>
                </div>
                <div class="col-12">
                    <textarea name="comment" class="form-control mb-2" rows="4" placeholder="<?php echo trans("leave_your_comment"); ?>"></textarea>
                </div>

                <div class="col-12">
                    <?php generate_recaptcha(); ?>
                    <button type="submit" class="btn btn-primary waves-effect waves-float waves-light"><?php echo trans("post_comment"); ?></button>
                </div>
                <div id="message-comment-result" class="message-comment-result"></div>
            </div>
        </form>
    </div>
  </div>

<?php endif; ?>