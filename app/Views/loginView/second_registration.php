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
                   <br> <form method="POST" class="register-form" id="register-form" action="<?= base_url('second_registration_Validation')?>">
                    <h2 class="head">Personal Information</h2>  <br>     
                    <div class="form-row">
                            <div class="form-group">
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="marital_status" class="required">Marital Status</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="marital_status" id="marital_status">
                                            <option selected disabled>...Select Marital Status...</option>
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
                                        <label for="height" class="required">Height</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="height" id="height">
                                            <option selected disabled>...Select Height...</option>
                                            <?php 
                                                foreach($height as $each)
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
                                        <label for="hair_color" class="required">Hair Color</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="hair_color" id="hair_color">
                                            <option selected disabled>...Select Hair Color...</option>
                                            <?php 
                                                foreach($hair_color as $each)
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
                                        <?= \Config\Services::validation()->getError('hair_color'); ?>
                                    </div>
                                
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="complexion" class="required">Complexion</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="complexion" id="complexion">
                                            <option value=""selected disabled>...Select Complexion...</option>
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
                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('complexion'); ?>
                                    </div>
                                     

                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="blood" class="required">Blood Group</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="blood" id="blood">
                                        <option value=""selected disabled>...Select Blood Group...</option>
                                            <?php 
                                                foreach($blood as $each)
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
                                        <?= \Config\Services::validation()->getError('blood'); ?>
                                    </div> 
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="profession" class="required">Profession</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="profession" id="profession">
                                        <option value=""selected disabled>...Select Profession...</option>
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
                                        <label for="annual_income" class="required">Annual Income</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="annual_income" id="annual_income">
                                        <option value=""selected disabled>...Select Annual Income...</option>
                                            <?php 
                                                foreach($annual_income as $each)
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
                                        <?= \Config\Services::validation()->getError('annual_income'); ?>
                                    </div>

                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="drink" class="required">Drink</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="drink" id="drink">
                                        <option value=""selected disabled>...Select Drink...</option>
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
                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('drink'); ?>
                                    </div>
                            </div>

                           




                            <div class="form-group">
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="children" class="required">Have Children</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="children" id="children">
                                            <option selected disabled>...Have Children...</option>
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
                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('children'); ?>
                                    </div>
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="body_type" class="required">body_type</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="body_type" id="body_type">
                                            <option selected disabled>...Select Body Type...</option>
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
                                        <label for="eye_color" class="required">Eye Color</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="eye_color" id="eye_color">
                                        <option value=""selected disabled>...Select Eye Color...</option>
                                            <?php 
                                                foreach($eye_color as $each)
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
                                        <?= \Config\Services::validation()->getError('eye_color'); ?>
                                    </div> 
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="disabilities" class="required">Disabilities</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="disabilities" id="disabilities">
                                        <option value=""selected disabled>...Select Disabilities...</option>
                                            <?php 
                                                foreach($disabilities as $each)
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
                                        <?= \Config\Services::validation()->getError('disabilities'); ?>
                                    </div>
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="education" class="required">Education</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="education" id="education">
                                        <option value=""selected disabled>...Select Education...</option>
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
                                    
                                <div class="form-input">
                                    <label for="work_place" class="required">Work Place</label>
                                    <textarea style="padding: 10px;width:90%" type="textarea" name="work_place" id="work_place" placeholder=""></textarea>
                                </div>
                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('work_place'); ?>
                                    </div>

                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="diet" class="required">diet</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="diet" id="diet">
                                        <option value=""selected disabled>...Select Diet...</option>
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
                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('diet'); ?>
                                    </div>
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="smoke" class="required">Smoke</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="smoke" id="smoke">
                                        <option value=""selected disabled>...Select Smoke...</option>
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
                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('smoke'); ?>
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