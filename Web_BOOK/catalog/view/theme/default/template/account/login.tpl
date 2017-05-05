<?php echo $header; ?>

<?php if ($success) { ?>
  <div class="alert alert-success"><i class="fa fa-check-circle"></i> <?php echo $success; ?></div>
  <?php } ?>
  <?php if ($error_warning) { ?>
  <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?></div>
  <?php } ?>
  <section class="page-account">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
          <div id="login">
            <h2 class="page-title"><?php echo $heading_title;?></h2>
            <p><?php echo $text_register_account;?></p>
            <form accept-charset="UTF-8" action="<?php echo $action; ?>" id="customer_login" method="post">
              <input name="FormType" type="hidden" value="customer_login">
              <input name="utf8" type="hidden" value="true">
              <div class="userform">
                  <div class="form-group">
                    <label><?php echo $entry_email;?>: <span class="required">*</span></label>
                    <input type="email" class="input-control type_1" name="email">
                    <!-- <input type="text" name="email" value="<?php echo $email; ?>" placeholder="<?php echo $entry_email; ?>" id="input-email" class="form-control" /> -->
                  </div>
                  <div class="form-group">
                    <label><?php echo $entry_password;?>: <span class="required">*</span></label>
                    <input type="password" class="input-control type_1" name="password">
                  </div>
                  <div class="form-group">
                    <!-- <a href="#recover" onclick="showRecoverPasswordForm();return false;"><?php echo $text_forgotten;?></a> -->
                    <a href="<?php echo $forgotten; ?>"><?php echo $text_forgotten; ?></a>
                    <a href="<?php echo $register;?>" class="pull-right"><?php echo $text_register;?></a>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="dangnhap col-md-6 col-xs-12 col-sm-6">
                        <!-- <button class="button blue"><?php echo $text_returning_customer; ?></button> -->
                        <input class="button blue "type="submit" value="<?php echo $text_returning_customer; ?>" class="btn btn-primary" />
                        <?php if ($redirect) { ?>
                        <input type="hidden" name="redirect" value="<?php echo $redirect; ?>" />
                        <?php } ?>
                      </div>
                      <div class="fb_gg col-md-6 col-xs-12 col-sm-6">
                      <b><?php echo $text_i_am_returning_customer;?> </b>
                      <a href="#"><img src="./image/images/footer/fb.gif" alt=" "></a>
                      <a href="#"><img src="./image/images/footer/gg.gif" alt=" "></a>
                      </div>
                    </div>
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  




























<?php echo $footer; ?>