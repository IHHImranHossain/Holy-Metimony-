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
                    <img src="public/assets/img/c7.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" action="<?= base_url('fiveth_registration_Validation')?>">
                       <br> <h2 class="head">Patner Preference</h2>  <br>     
                        <div class="form-row">
                            <div class="form-group">

                                <div class="form-select">
                    
                                        <div class="label-flex">
                                            <label for="age_range" class="required">Age Range</label>
                                        </div>
                                        <div class="flex" style="display: flex;">
                                            <div class="select-list">
                                                <select name="age_range_from" id="age_range">
                                                    <option value=""selected disabled>Select Age Range</option>
                                                    <?php 
                                                        foreach($age_range as $each)
                                                        {
                                                    ?>

                                                    <option value="<?php echo $each['id']; ?>">
                                                    <?php echo $each['items_name']; ?></option>';

                                                    <?php
                                                        } 
                                                    ?>
                                        
                                                </select> 
                                            </div>
                                            &nbsp;<p style="color: black;">To</p>&nbsp;
                                            <div class="select-list">
                                                <select name="age_range_to" id="age_range">
                                                    <option value=""selected disabled>Select Age Range</option>
                                                    <?php 
                                                        foreach($age_range as $each)
                                                        {
                                                    ?>

                                                    <option value="<?php echo $each['id']; ?>">
                                                    <?php echo $each['items_name']; ?></option>';

                                                    <?php
                                                        } 
                                                    ?>
                                        
                                                </select> <p>To</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('age_range_to'); ?>
                                    </div>
                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('age_range_from'); ?>
                                    </div>

                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="marital_status" class="required">Marital Status</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="marital_status" id="marital_status">
                                            <option selected disabled>Select Marital Status</option>
                                            <?php 
                                                foreach($marital_status as $each)
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
                                            <?= \Config\Services::validation()->getError('marital_status'); ?>
                                        </div> 

                                <div class="form-select">
                                        <div class="label-flex">
                                            <label for="religion" class="required">religion</label>
                                        </div>
                                        <div class="select-list">
                                            <select name="religion" id="religion">
                                                <option value=""selected disabled>Select Religion</option>
                                                <?php 
                                                    foreach($religion as $each)
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
                                            <?= \Config\Services::validation()->getError('height'); ?>
                                        </div>
                                    
                                    <div class="form-select">
                                        <div class="label-flex">
                                            <label for="complexion">Complexion</label>
                                        </div>
                                        <div class="select-list">
                                            <select name="complexion" id="complexion">
                                                <option value=""selected disabled>Select Complexion</option>
                                                <?php 
                                                    foreach($complexion as $each)
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
                                    
                                     
                                    <div class="form-select">
                                        <div class="label-flex">
                                            <label for="profession" class="required">Profession</label>
                                        </div>
                                        <div class="select-list">
                                            <select name="profession" id="profession">
                                            <option value=""selected disabled>Select Profession</option>
                                                <?php 
                                                    foreach($profession as $each)
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
                                            <?= \Config\Services::validation()->getError('profession'); ?>
                                        </div>
                        
                                    <div class="form-select">
                                        <div class="label-flex">
                                            <label for="drink">Drink</label>
                                        </div>
                                        <div class="select-list">
                                            <select name="drink" id="drink">
                                            <option value=""selected disabled>Select Drink</option>
                                                <?php 
                                                    foreach($drink as $each)
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
                                        

                                    <div class="form-input">
                                        <label for="residence">Resident</label>
                                        <input type="text" name="residence" id="residence" placeholder="Enter Residence Which is You Like"/>
                                    </div>
                                    


                                    <div class="form-select">
                                        <div class="label-flex">
                                            <label for="mother_tongue" class="required">Mother Tongue</label>
                                        </div>
                                        <div class="select-list">
                                            <select name="mother_tongue" id="mother_tongue">
                                                <option value=""selected disabled>Select Mother Tongue</option>
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

                                    <div class="form-select">
                                        <div class="label-flex">
                                            <label for="district">District</label>
                                        </div>
                                        <div class="select-list">
                                            <select name="district_residence" id="district_residence">
                                            <option value=""selected disabled>Select District</option>
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
                            </div>

                           




                            <div class="form-group">

                                <div class="form-select">
                    
                                    <div class="label-flex">
                                        <label for="age_range" class="required">Height Range</label>
                                    </div>
                                    <div class="flex" style="display: flex;">
                                        <div class="select-list">
                                            <select name="height_range_from" id="height_range_from">
                                                <option value=""selected disabled>Select Height Range</option>
                                                <?php 
                                                    foreach($height_range as $each)
                                                    {
                                                ?>

                                                <option value="<?php echo $each['id']; ?>">
                                                <?php echo $each['items_name']; ?></option>';

                                                <?php
                                                    } 
                                                ?>
                                            </select> 
                                        </div>
                                        &nbsp;<p style="color: black;">To</p>&nbsp;
                                        <div class="select-list">
                                            <select name="height_range_to" id="height_range_to">
                                                <option value=""selected disabled>Select Height Range</option>
                                                <?php 
                                                    foreach($height_range as $each)
                                                    {
                                                ?>

                                                <option value="<?php echo $each['id']; ?>">
                                                <?php echo $each['items_name']; ?></option>';

                                                <?php
                                                    } 
                                                ?>
                                    
                                            </select> <p>To</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="danger" role="danger">
                                    <?= \Config\Services::validation()->getError('height_range_from'); ?>
                                </div>
                                <div class="danger" role="danger">
                                    <?= \Config\Services::validation()->getError('height_range_to'); ?>
                                </div>

                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="children" >Have Children</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="children" id="children">
                                            <option selected disabled>Select Have Children</option>
                                            <?php 
                                                foreach($children as $each)
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
                                    
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="body_type" class="required">body_type</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="body_type" id="body_type">
                                            <option selected disabled>Select Body Type</option>
                                            <?php 
                                                foreach($body_type as $each)
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
                                        <?= \Config\Services::validation()->getError('body_type'); ?>
                                    </div>
                                
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="education" class="required">Education</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="education" id="education">
                                        <option value=""selected disabled>Select Education</option>
                                            <?php 
                                                foreach($education as $each)
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
                                        <?= \Config\Services::validation()->getError('education'); ?>
                                    </div>
                                    

                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="diet">diet</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="diet" id="diet">
                                        <option value=""selected disabled>Select Diet</option>
                                            <?php 
                                                foreach($diet as $each)
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
                                    
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="smoke">Smoke</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="smoke" id="smoke">
                                        <option value=""selected disabled>Select Smoke</option>
                                            <?php 
                                                foreach($smoke as $each)
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
                                   

                                    <div class="form-select">
                                        <div class="label-flex">
                                            <label for="family_value" class="required">Family Value</label>
                                        </div>
                                        <div class="select-list">
                                            <select name="family_value" id="family_value">
                                                <option value=""selected disabled>Select Family Value</option>
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
                            
                                <div class="form-input">
                                    <label for="country_of_origin" class="required">Country Origin</label>
                                    <input type="text" name="country_of_origin" id="country_of_origin" placeholder="Enter Country Origin"/>
                                </div>
                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('country_of_origin'); ?>
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