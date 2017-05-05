<?php echo $header; ?>

<section class="page-account">
  <div class="container"> 
        <div class="col-xs-8 col-sm-8 col-md-6 col-md-offset-3">
          <div id="login">
            <h2 class="page-title"><?php echo $heading_title; ?></h2>
              <p><?php echo $text_account_already; ?></p>

              <form accept-charset="UTF-8" action="<?php echo $action; ?>" id="customer_login" method="post" enctype="multipart/form-data" class="form-horizontal">
                <input name="FormType" type="hidden" value="customer_login">
                <input name="utf8" type="hidden" value="true">
                  
                <div class="userform">
                    <div class="form-group">
                      <label><?php echo $entry_lastname;?> <span class="required">*</span></label>
                      <input type="text" class="input-control type_1" name="lastname">
                    </div>
                    <div class="form-group">
                        <label><?php echo $entry_firstname;?> <span class="required">*</span></label>
                        <input type="text" class="input-control type_1" name="firstname">
                    </div>
                    <div class="form-group">
                      <label><?php echo $entry_email;?> <span class="required">*</span></label>
                      <input type="email" class="input-control type_1" name="email">
                    </div>
                    <div class="form-group">
                      <label><?php echo $entry_password;?> <span class="required">*</span></label>
                      <input type="password" class="input-control type_1" name="password">
                    </div>
                     <div class="form-group">
                        <a href="<?php echo $action;?>" class="pull-right">Bạn đã có tài khoản?</a>
                    </div>
                    <input type="submit" value="Đăng ký" class="btn btn-primary" />
                    <input type="reset" value="Reset">
                </div>
              </form>
          </div>
        </div>
    </div>
</section>

     
<?php echo $footer; ?>
     




