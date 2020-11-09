<?= $this->extend('layout/user_profile_layout')?>

<?= $this->section('content')?>
<div class="container">
    <div class="signup-content">
        <div class="signup-form">
            <form method="POST" class="update_password-form" id="register-form"
                action="<?= base_url('update_user_password')?>">
                <div class="form-input">
                    <label for="old_password">Enter Old Password</label>
                    <input type="password" name="old_password" id="old_password" placeholder="Enter Your Old Password"
                        class="form-control" />
                </div>
                <div class="form-input">
                    <label for="new_password">Enter New Password</label>
                    <input type="password" name="new_password" id="new_password" placeholder="Enter Your New Password"
                        class="form-control" />
                </div>
                <div class="danger" role="danger">
                    <?= \Config\Services::validation()->getError('new_password'); ?>
                </div>
                <div class="form-input">
                    <label for="new_confirm_password"> Enter Confirm Password</label>
                    <input type="password" name="new_confirm_password" id="new_confirm_password"
                        placeholder="Enter Confirm New Password" class="form-control" />
                </div>
                <div class="danger" role="danger">
                    <?= \Config\Services::validation()->getError('new_confirm_password'); ?>
                </div><br>
                <div class="form-submit">
                    <input class="btn btn-success" type="submit" value="Update" class="submit" id="submit"
                        name="submit" />
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection()?>