<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal Information</title>

    <!-- Main css -->
    
    
    <link rel="stylesheet" href="public/assets/css/personal_registration.css">
    <style>
    
    </style>
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="public/assets/img/c2.jpg" alt="">
                </div>
                <div class="signup-form">
                    <br><form method="POST" class="register-form" id="register-form" action="<?= base_url('third_registration_Validation')?>">
                        <h2 class="head">Personal Information</h2>  <br>
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="mother_tongue" class="required">Mother Tongue</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="mother_tongue" id="mother_tongue">
                                            <option value=""selected disabled>...Select Mother Tongue...</option>
                                            <?php 
                                                foreach($mother_tongue as $each)
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
                                        <?= \Config\Services::validation()->getError('mother_tongue'); ?>
                                    </div>

                                <div class="form-input">
                                    <label for="yourself" class="required">About yourself</label>
                                    <textarea style="width: 100%; height:100px" type="text" name="yourself" id="yourself" placeholder="About yourself"></textarea>
                                </div>

                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('yourself'); ?>
                                    </div>

                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="family_value" class="required">Family Value</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="family_value" id="family_value">
                                            <option value=""selected disabled>...Select Family Value...</option>
                                            <?php 
                                                foreach($family_value as $each)
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
                                        <?= \Config\Services::validation()->getError('family_value'); ?>
                                    </div>
                                
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="father" class="required">Father</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="father" id="father">
                                            <option value=""selected disabled>...Select Work...</option>
                                            <?php 
                                                foreach($father as $each)
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
                                        <?= \Config\Services::validation()->getError('father'); ?>
                                    </div>

                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="no_of_brother" class="required">No Of Brother</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="no_of_brother" id="no_of_brother">
                                        <option value=""selected disabled>...Select No Of Brother...</option>
                                            <?php 
                                                foreach($no_of_brother as $each)
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
                                        <?= \Config\Services::validation()->getError('no_of_brother'); ?>
                                    </div>

                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="whom_brother_married" class="required">Whom Brother Married</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="whom_brother_married" id="whom_brother_married">
                                        <option value=""selected disabled>...Select No Of Brother...</option>
                                            <?php 
                                                foreach($whom_brother_married as $each)
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
                                        <?= \Config\Services::validation()->getError('whom_brother_married'); ?>
                                    </div>

                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="district" class="required">District</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="district" id="district">
                                        <option value=""selected disabled>...Select District...</option>
                                            <?php 
                                                foreach($district as $each)
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
                                        <?= \Config\Services::validation()->getError('district'); ?>
                                    </div>

                                <div class="form-input">
                                    <label for="parmanent_resident" class="required">Parmanent Resident</label>
                                    <input type="text" name="parmanent_resident" id="parmanent_resident" placeholder="Enter Parmanent Resident In Details"/>
                                </div>

                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('parmanent_resident'); ?>
                                    </div>

                            </div>
        





                            <div class="form-group">
                                <div class="form-input">
                                    <label for="can_speak" class="required">Can Speak</label>
                                    <input  type="text" name="can_speak" id="can_speak" placeholder="Bangla, English" />
                                </div>

                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('can_speak'); ?>
                                    </div>

                                <div class="form-input">
                                    <label for="family_background" class="required">About Family Background</label>
                                    <textarea style="width: 100%; height:100px" type="text" name="family_background" id="family_background" placeholder="About Family Background"></textarea>
                                </div>

                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('family_background'); ?>
                                    </div>

                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="personal_value" class="required">Personal Value</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="personal_value" id="personal_value">
                                            <option value=""selected disabled>...Select Personal Value...</option>
                                            <?php 
                                                foreach($personal_value as $each)
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
                                        <?= \Config\Services::validation()->getError('personal_value'); ?>
                                    </div>

                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="mother" class="required">Mother</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="mother" id="mother">
                                            <option value=""selected disabled>...Select Work...</option>
                                            <?php 
                                                foreach($mother as $each)
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
                                        <?= \Config\Services::validation()->getError('mother'); ?>
                                    </div>

                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="no_of_sister" class="required">No Of Sister</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="no_of_sister" id="no_of_sister">
                                        <option value=""selected disabled>...Select No Of Sister...</option>
                                            <?php 
                                                foreach($no_of_sister as $each)
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
                                        <?= \Config\Services::validation()->getError('no_of_sister'); ?>
                                    </div>

                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="whom_sister_married" class="required">Whom Sister Married</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="whom_sister_married" id="whom_sister_married">
                                        <option value=""selected disabled>...Select No Of Sister...</option>
                                            <?php 
                                                foreach($whom_sister_married as $each)
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
                                        <?= \Config\Services::validation()->getError('whom_sister_married'); ?>
                                    </div>
                                    
                                <div class="form-input">
                                    <label for="zip_code" class="required">Zip Code</label>
                                    <input  type="text" name="zip_code" id="zip_code" placeholder="Zip Code" />
                                </div>

                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('zip_code'); ?>
                                    </div>

                                <div class="form-input">
                                    <label for="country_origin" class="required">Country Origin</label>
                                    <input type="text" name="country_origin" id="country_origin" placeholder="Enter Country Origin"/>
                                </div>

                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('country_origin'); ?>
                                    </div>
                                
                               
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