<script src="<?php echo base_url(); ?>assets/core/js/zxcvbn.js"></script>

<form method="post">

    <input type="hidden" name="<?php echo $this->config->item('csrf_token_name'); ?>"
           value="<?php echo $this->security->get_csrf_hash() ?>">

    <div id="headerbar">
        <h1 class="headerbar-title"><?php _trans('change_password'); ?></h1>
        <?php echo $this->layout->load_view('layout/header_buttons'); ?>
    </div>

    <div id="content">

        <div class="row">
            <div class="col-xs-12 col-md-6 col-md-offset-3">

                <?php $this->layout->load_view('layout/alerts'); ?>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php _trans('change_password'); ?>
                    </div>

                    <div class="panel-body">
                        <div class="form-group">
                            <label for="user_current_password">
                                <?php _trans('password_current'); ?>
                            </label>
                            <input type="password" name="user_current_password" id="user_current_password"
                            	class="form-control"
                            	placeholder="<?php _trans('password_current_enter'); ?>">
                        </div>

                        <div class="form-group">
                            <label for="user_new_password">
                                <?php _trans('password_new'); ?>
                            </label>
                            <input type="password" name="user_new_password" id="user_new_password"
                                class="form-control passwordmeter-input"
								placeholder="<?php _trans('password_new_enter'); ?>">
                            <div class="progress" style="height:3px;">
                                <div class="progress-bar progress-bar-danger passmeter passmeter-1"
                                     style="width: 33%"></div>
                                <div class="progress-bar progress-bar-warning passmeter passmeter-2"
                                     style="display: none; width: 33%"></div>
                                <div class="progress-bar progress-bar-success passmeter passmeter-3"
                                     style="display: none; width: 34%"></div>
                            </div>
          					<div>
								<small id="password_strength_help" class="form-text text-muted"> <!-- #2 -->
									<?php _trans('password_strength')?>
								</small>
							</div>
                        </div>

                        <div class="form-group">
                            <label for="user_new_password_vrfy">
                                <?php _trans('password_new_verify'); ?>
                            </label>
                            <input type="password" name="user_new_password_vrfy" id="user_new_password_vrfy"
                                class="form-control"
                            	placeholder="<?php _trans('password_new_enter_again'); ?>">
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

</form>
