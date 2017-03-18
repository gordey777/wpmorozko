<div class="add-rev">

      <div id="modalRew" class="modalRewiews">
        <div>
          <a href="#close" title="Закрыть" id="mod-close" class="close"></a>
        <?php
          $customform = array(
            //'fields'               => '',
            'comment_field'        => '<p class="comment-form-comment"><textarea id="comment" name="comment" placeholder="Оставте отзыв*" cols="45" rows="5"  aria-required="true" required="required"></textarea></p>',
            'must_log_in'          => '<p class="must-log-in">' . sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
            'logged_in_as'         => '<p class="logged-in-as">' . sprintf( __( '<a href="%1$s" aria-label="Logged in as %2$s. Edit your profile.">Logged in as %2$s</a>. <a href="%3$s">Log out?</a>' ), get_edit_user_link(), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
            'comment_notes_before' => '',
            'comment_notes_after'  => '',
            'id_form'              => 'commentform',
            'id_submit'            => 'submit',
            'class_form'           => 'comment-form',
            'class_submit'         => 'submit',
            'name_submit'          => 'submit',
            'title_reply'          => __( 'Оставте отзыв' ),
            'title_reply_to'       => __( 'Leave a Reply to %s' ),
            'title_reply_before'   => '<h6 id="reply-title" class="modal-title">',
            'title_reply_after'    => '</h6>',
            'cancel_reply_before'  => ' <small>',
            'cancel_reply_after'   => '</small>',
            'cancel_reply_link'    => __( 'Cancel reply' ),
            'label_submit'         => __( 'Отправить' ),
            'submit_button'        => '<input name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" />',
            'submit_field'         => '<p class="form-submit">%1$s %2$s</p>',
            'format'               => 'xhtml',
          );
          comment_form( $customform );
           ?>


        </div>
      </div>
    </div><!-- /.add-rev -->
