<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal Information</title>

    <!-- Main css -->
    
    
    <link rel="stylesheet" href="public/assets/css/personal_registration.css">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="public/assets/img/c2.jpg" alt="">
                </div>
                <div class="signup-form">
                   <br> <form method="POST" class="register-form" id="register-form" action="<?= base_url('first_registration_Validation')?>">
                        <h2 class="head">Personal Information</h2>  <br>  
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="profile_created" class="required">Profile Created By</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="profile_created" id="profile_created">
                                            <option selected disabled>...Select For Profile Created By...</option>
                                        <?php 
                                            foreach($profile as $each)
                                            {
                                        ?>
                                            <option value="<?php echo $each['id']; ?>">
                                            <?php echo $each['items_name']; ?></option>';

                                        <?php
                                            } 
                                        ?>
                                        </select>
                                    </div>
                                </div> 
                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('profile_created'); ?>
                                    </div>
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="community" class="required">Community</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="community" id="community">
                                            <option selected disabled>...Select Community...</option>
                                            <?php 
                                                foreach($community as $each)
                                                {
                                            ?>

                                            <option value="<?php echo $each['id']; ?>">
                                            <?php echo $each['items_name']; ?></option>';

                                            <?php
                                                } 
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('community'); ?>
                                    </div>
                                <div class="form-input">
                                    <label for="dob" class="required">Date of Birth</label>
                                    <input type="date" name="dob" id="dob" />
                                </div>
                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('dob'); ?>
                                    </div>
                                
                                <div class="form-input">
                                    <label for="self_number" class="required">Self Number</label>
                                    <input type="number" name="self_number" id="self_number" placeholder="Enter Number"/>
                                </div>
                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('self_number'); ?>
                                    </div>

                                <div class="form-input">
                                    <label for="convenient_time" class="required">Convenient Time</label>
                                    <input type="text" name="convenient_time" id="convenient_time" placeholder="10am to 9pm"/>
                                </div>
                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('convenient_time'); ?>
                                    </div>
                                <div class="form-input">
                                    <label for="relation_contact_person" class="required">Relation With Contact Person</label>
                                    <input type="text" name="relation_contact_person" id="relation_contact_person" placeholder=""/>
                                </div>
                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('relation_contact_person'); ?>
                                    </div>
                            </div>



                            <div class="form-group">
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="looking_for" class="required">Looking For</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="looking_for" id="looking_for">
                                            <option selected disabled>...Select Looking For...</option>
                                            <?php 
                                                foreach($looking as $each)
                                                {
                                            ?>

                                            <option value="<?php echo $each['id']; ?>">
                                            <?php echo $each['items_name']; ?></option>';

                                            <?php
                                                } 
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('looking_for'); ?>
                                    </div>
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="location" class="required">Location</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="location" id="location">
                                            <option selected disabled>...Select Location...</option>
                                            <?php 
                                                foreach($location as $each)
                                                {
                                            ?>

                                            <option value="<?php echo $each['id']; ?>">
                                            <?php echo $each['items_name']; ?></option>';

                                            <?php
                                                } 
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('location'); ?>
                                    </div>
                                <div class="form-input">
                                    <label for="guardian_number" class="required">Guardian Number</label>
                                    <input type="number" name="guardian_number" id="guardian_number" placeholder="Enter Number"/>
                                </div>
                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('guardian_number'); ?>
                                    </div>
                                <div class="form-input">
                                    <label for="emergency_number" class="required">Emergency Number</label>
                                    <input type="number" name="emergency_number" id="emergency_number" placeholder="Enter Number"/>
                                </div>
                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('emergency_number'); ?>
                                    </div>
                                <div class="form-input">
                                    <label for="contact_person_name" class="required">Contact Person Name</label>
                                    <input type="text" name="contact_person_name" id="contact_person_name" placeholder="Enter Name"/>
                                </div>
                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('contact_person_name'); ?>
                                    </div>
                                <div class="form-input">
                                    <label for="permanent_address" class="required">Permanent Address</label>
                                    <textarea style="padding: 10px;width:90%;height:70px" type="textarea" name="permanent_address" id="permanent_address" placeholder="Permanent Address"></textarea>
                                </div>
                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('permanent_address'); ?>
                                    </div>
                                <div class="form-input">
                                    <label for="present_address" class="required">Present Address</label>
                                    <textarea  style="padding: 10px;width:90%; height:70px" type="textarea" name="present_address" id="present_address" placeholder="Present Address"></textarea>
                                </div>
                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('present_address'); ?>
                                    </div><br>
                            </div>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Next" class="submit" id="submit" name="submit" />
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>

    </div>

    
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>