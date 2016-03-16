<?php

/**
 * @link       http://www.deepenbajracharya.com.np
 * @since      1.0.0
 *
 * @package    Zoom_Video_Conference
 * @subpackage Zoom_Video_Conference/admin/partials
 */
?>
<div class="wrap">
  <div class="msg_contain"></div>
  <h1><?php _e('Add a User to Zoom', 'zoom-video-conference'); ?></h1>
  <div id="poststuff">
    <div id="post-body" class="metabox-holder columns-2">
      <form action="?page=add_zoom_users" method="POST">
        <div id="postbox-container-1" class="postbox-container">
          <div id="submitdiv" class="postbox ">
            <h2 class="hndle ui-sortable-handle"><span><?php _e('Action', 'zoom-video-conference'); ?></span></h2>
            <div class="inside">
              <div id="major-publishing-actions">
                <input type="submit" name="add_zoom_userss" class="button button-primary button-large create_user" value="Create User">
              </div>
            </div>
          </div>
        </div>
        <div id="postbox-container-2" class="postbox-container">
          <div id="date-settings" class="postbox ">
            <h2 class="hndle ui-sortable-handle"><span><?php _e('Fill up the following information', 'zoom-video-conference'); ?></span></h2>
            <div class="inside">
              <table class="zoom_api_table">
               <tr>
                <th><?php _e('Email Address:', 'zoom-video-conference'); ?></th>
                <td><select name="email" class="email">
                <?php $users = get_users(); ?>
                  <option value="0">Select a User</option>
                  <?php foreach ( $users as $user ) { ?>
                  <option inst_id="<?php echo esc_html( $user->id ); ?>" value="<?php echo esc_html( $user->user_email ); ?>"><?php echo esc_html( $user->user_email ); ?></option>
                  <?php } ?>
                </select></td>
                <!--   	<td><input type="text" required name="email" value="" class="email" ></td> -->
              </tr>
              <tr>
                <th><?php _e('User Type: ', 'zoom-video-conference'); ?></th>
                <td><select name="type" id="type">
                  <option value="1"><?php _e('Basic User', 'zoom-video-conference'); ?></option>
                  <option value="2"><?php _e('Pro User', 'zoom-video-conference'); ?></option>
                </select></td>
              </tr>
              <tr>
                <th><?php _e('First Name: ', 'zoom-video-conference'); ?></th>
                <td><input type="text" name="first_name" required id="first_name" value=""></td>
              </tr>
              <tr>
                <th><?php _e('Last Name: ', 'zoom-video-conference'); ?></th>
                <td><input type="text" name="last_name" required id="last_name" value=""></td>
              </tr>
              <tr>
              	<th><?php _e('Department: ', 'zoom-video-conference'); ?></th>
              	<td><input type="text" name="dept"  id="dept" value=""></td>
              </tr>
            </table>
          </div>
        </div>

      </div>
    </form>
  </div>
</div>
</div>