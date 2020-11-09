<?= $this->extend('layout/user_profile_layout')?>

<?= $this->section('content')?>
<div class="container">
<div class="row">
    <div class="col-12 col-md-4">

    </div>
    <div class="col-12 col-md-4"><br>
            <form method="POST" class="register" id="register"
                action="<?= base_url('edit_registration_validation') ?>">
                <h2 class="head">Update Data Here</h2> <br>
                <div class="form">
                    <div class="form-input">
                        <label for="first_name" class="required">First name</label>
                        <input type="text" name="first_name" id="first_name" class="form-control" value="<?= $first_name ?>"/>
                    </div>
                    <div class="danger" role="danger">
                        <?= \Config\Services::validation()->getError('first_name'); ?>
                    </div>
                    <div class="form-input">
                        <label for="last_name" class="required">Last name</label>
                        <input type="text" name="last_name" id="last_name" class="form-control" value="<?= $last_name ?>"/>
                    </div>
                    <div class="danger" role="danger">
                        <?= \Config\Services::validation()->getError('last_name'); ?>
                    </div>
                    
                    <div class="form-input">
                        <label for="phone_number" class="required">Phone Number</label>
                        <input type="number" name="phone_number" id="phone_number" class="form-control" value="<?= $phone_number?>"/>
                    </div>
                    <div class="danger" role="danger">
                        <?= \Config\Services::validation()->getError('phone_number'); ?>
                    </div>
                   
                    <br>
                    <h5>You can't change your <span style="color: brown;">Email Address</span></h5>

                <div class="form-submit">
                    <input class="btn btn-success" type="submit" value="Submit" class="submit" id="submit" name="submit" />
                </div>
            </form>
        </div>
    </div>
    <div class="col-12 col-md-4">

    </div>
</div>


<?= $this->endSection()?>