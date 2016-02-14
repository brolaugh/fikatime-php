<?php
/**
 * Created by PhpStorm.
 * User: database
 * Date: 2/13/16
 * Time: 11:59 PM
 */
?>
<div class="row">
  <div class="">
    <div class="well">
      <form action="<?php echo ROOT;?>/App/form_handling/login.php" method="post" class="form-horizontal">
        <fieldset>
          <input hidden="hidden" value="login" name="submit_type"/>
          <div class="form-group">
            <label for="username" class="control-label col-xs-2">Username</label>
            <div class="col-xs-10">
              <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
          </div>
          <div class="form-group">
            <label for="password" class="control-label col-xs-2">Password</label>
            <div class="col-xs-10">
              <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
          </div>
          <div class="form-group">
            <input type="submit" name="login_submit" value="Login" class="col-md-push-2 btn btn-primary">
          </div>
        </fieldset>
      </form>

    </div>
  </div>

</div>
