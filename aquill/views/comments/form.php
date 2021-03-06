<form class="commentform" method="POST"
      action="<?php echo $comment->id ? url("admin/comments/edit/{$comment->id}") : url("admin/comments/new"); ?>"
      accept-charset="UTF-8">

    <input type="hidden" name="csrf_token" value="<?php echo csrf_token(); ?>">
    <input type="hidden" name="id" value="<?php echo $comment->id; ?>">

    <fieldset class="header">
        <div class="wrap">
            <h1><?php echo $comment->id ? __('comment.edit', array('name' => $comment->name)) : __('comment.add'); ?></h1>
            <aside class="form-actions buttons">
                <button type="submit" class="btn green">
                    <span class="icon-save"></span>
                    <?php //_e('global.update'); ?></button>
                <a class="button red"
                   href="<?php echo url('admin/comments/delete/' . $comment->id); ?>">
                   <span class="icon-delete"></span>
                   <?php //_e('global.delete'); ?></a>
            </aside>
        </div>
    </fieldset>

    <?php echo $messages; ?>

    <fieldset class="split">
        <div class="wrap">
            <div class="control-group">
                <label for="name" class="control-label"><?php _e('comment.name'); ?></label>

                <div class="controls">
                    <input placeholder="<?php _e('comment.name_placeholder'); ?>" type="text" name="name"
                           value="<?php echo $comment->name; ?>">
                </div>
            </div>
            <div class="control-group">
                <label for="email" class="control-label"><?php _e('comment.email'); ?></label>

                <div class="controls">
                    <input placeholder="<?php _e('comment.email_placeholder'); ?>" type="text" name="email"
                           value="<?php echo $comment->email; ?>">
                </div>
            </div>
            <div class="control-group">
                <label for="url" class="control-label"><?php _e('comment.url'); ?></label>

                <div class="controls">
                    <input placeholder="<?php _e('comment.url_placeholder'); ?>" type="text" name="url"
                           value="<?php echo $comment->url; ?>">
                </div>
            </div>
            <div class="control-group">
                <label for="status" class="control-label"><?php _e('comment.status'); ?></label>

                <div class="controls">
                    <?php echo Form::select('status', $statuses, $comment->status); ?>
                </div>
            </div>
            <div class="control-group">
                <label for="text" class="control-label"><?php _e('comment.comment'); ?></label>

                <div class="controls">
                    <textarea placeholder="<?php _e('comment.comment_placeholder'); ?>" name="content" rows="3"
                              cols="60"><?php echo $comment->content; ?></textarea>
                </div>
            </div>
        </div>
    </fieldset>
</form>


<?php echo Form::close(); ?>