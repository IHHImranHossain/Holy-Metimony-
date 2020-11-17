<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <!-- Main css -->
    <link rel="stylesheet" href="public/assets/css/personal_registration.css">

</head>

<body>


    <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="public/assets/img/c1.jpg" alt="">
                </div>

                <div class="signup-form">

                    <br>
                    <form method="POST" class="register-form" id="register-form" enctype="multipart/form-data"
                        action="<?= base_url('registration_validation') ?>">
                        <h2 class="head">Registration Here</h2> <br>
                        <div class="form-group">
                            <div class="form-input">
                                <label for="first_name" class="required">First name</label>
                                <input type="text" name="first_name" id="first_name" />
                            </div>
                            <div class="danger" role="danger">
                                <?= \Config\Services::validation()->getError('first_name'); ?>
                            </div>
                            <div class="form-input">
                                <label for="last_name" class="required">Last name</label>
                                <input type="text" name="last_name" id="last_name" />
                            </div>
                            <div class="danger" role="danger">
                                <?= \Config\Services::validation()->getError('last_name'); ?>
                            </div>
                            <div class="form-input">
                                <label for="email" class="required">Email</label>
                                <input type="text" name="email" id="email" />
                            </div>
                            <div class="danger" role="danger">
                                <?= \Config\Services::validation()->getError('email'); ?>
                            </div><br>
                            <div class="form-select">
                                <div class="label-flex">
                                    <label for="gender" class="required">Select Gender</label>
                                </div>
                                <div class="select-list">
                                    <select name="gender" id="gender">
                                        <option selected disabled>...Select Gender...</option>
                                        <option value="male">Man Seeking A Woman</option>
                                        <option value="female">Woman Seeking A Man</option>
                                    </select>
                                </div>
                            </div>
                            <div class="danger" role="danger">
                                <?= \Config\Services::validation()->getError('gender'); ?>
                            </div>
                            <div class="form-input">
                                <label for="phone_number" class="required">Phone Number</label>
                                <input type="number" name="phone_number" id="phone_number" />
                            </div>
                            <div class="danger" role="danger">
                                <?= \Config\Services::validation()->getError('phone_number'); ?>
                            </div>
                            <div class="form-input">
                                <label for="password" class="required">Password</label>
                                <input type="password" name="password" id="password" />
                            </div>
                            <div class="danger" role="danger">
                                <?= \Config\Services::validation()->getError('password'); ?>
                            </div>
                            <div class="form-input">
                                <label for="password_confirm" class="required">Confirm Password</label>
                                <input type="password" name="password_confirm" id="password_confirm" />
                            </div>
                            <div class="danger" role="danger">
                                <?= \Config\Services::validation()->getError('password_confirm'); ?>
                            </div>

                            <div class="form-input">
                                <label>Upload Your Photo</label>
                                <input style="height:150px" type="file" name="upload_image" id="upload_image">
                            </div>

                            <div class="danger" role="danger">
                                <?= \Config\Services::validation()->getError('upload_image'); ?>
                            </div><br>
                        </div>


                        <div class="form-submit">
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                            <div class="login_page">
                                <p>Have Already Account?? <a href="<?= base_url('user_login') ?>"> Login</a></p>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</body>

</html>