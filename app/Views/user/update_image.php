<?= $this->extend('layout/user_profile_layout')?>
<?= $this->section('content')?>
<div class="main">
    <div class="container">
        <div class="signup-content">
                <form method="POST" class="update_image_form" id="register-form"
                    action="<?= base_url('update_user_image')?>" enctype="multipart/form-data">
                    <div class="form-input">
                    <label for="old_password">Enter Old Password</label>
                    <input type="file" name="update_image" id="update_image" 
                        class="form-control" />
                    </div>
                    <div class="danger" role="danger">
                                <?= \Config\Services::validation()->getError('update_image'); ?>
                            </div><br>
                        <div class="form-submit" >
                        <input style="width: 100%;" class="btn btn-success" type="submit" value="Submit" class="submit" id="submit"
                            name="submit" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection()?>