<?php
/**
 * Created by PhpStorm.
 * User: database
 * Date: 2/14/16
 * Time: 12:46 AM
 */
?>
<div class="row">
  <div class="">
    <div class="well">
      <form action="<?php echo ROOT;?>/App/form_handling/register.php" method="post" class="form-horizontal">
        <fieldset>
          <input hidden="hidden" value="register" name="submit_type"/>
          <div class="form-group">
            <label for="fname" class="control-label col-xs-2">First name</label>
            <div class="col-xs-10">
              <input type="text" name="fname" class="form-control" placeholder="First name" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="sname" class="control-label col-xs-2">Surname</label>
            <div class="col-xs-10">
              <input type="text" name="sname" class="form-control" placeholder="Surname" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="email" class="control-label col-xs-2">Email</label>
            <div class="col-xs-10">
              <input type="text" name="email" class="form-control" placeholder="Email" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="username" class="control-label col-xs-2">Username</label>
            <div class="col-xs-10">
              <input type="text" name="username" class="form-control" placeholder="Username" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="password" class="control-label col-xs-2">Password</label>
            <div class="col-xs-10">
              <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="passwordconfirm" class="control-label col-xs-2">Confirm Password</label>
            <div class="col-xs-10">
              <input type="password" name="passwordconfirm" class="form-control" placeholder="Confirm Password" autocomplete="off" required="required">
            </div>
          </div>
          <div class="form-group">
            <input type="submit" name="register_submit" value="Login" class="col-md-push-2 btn btn-primary">
          </div>
        </fieldset>
      </form>

    </div>
  </div>

</div>
