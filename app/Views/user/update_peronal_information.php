<?= $this->extend('layout/user_profile_layout')?>

<?= $this->section('content')?>

<div class="main">
    <div class="container">
        <div class="col-12 col-lg-2">

        </div>

        <div class="col-12 col-lg-8">

            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-dark" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                First Part Personal Registration
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">


                            <!--Start Update First Registration From -->
                            <br>
                            <form method="POST" class="register-form" id="collapseExample"
                                action="<?= base_url('update_personal_information_validation')?>">
                                <h2>Personal Information</h2><br>

                                <div class="form-row">
                                    <div class="form-group" style="width: 40%;">
                                        <div class="form-select">
                                            <input type="hidden" name="id" id="id" value="<?= $id ?>">
                                            <div class="label-flex">
                                                <label for="profile_created" class="required">Profile Created By</label>
                                            </div>
                                            <div class="select-list">
                                                <select name="profile_created" id="profile_created"
                                                    class="form-control">
                                                    <option disabled>...Select For Profile Created By...</option>

                                                    <?php 
                                            foreach($profile as $each)
                                            {
                                        ?>
                                                    <option value="<?php echo $each['id'];?>"
                                                        <?php if($profile_created == $each['id']){ echo "selected"; } ?>>
                                                        <?php echo $each['items_name'];?></option>

                                                    <?php
                                                    
                                            } 
                                        ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-select">
                                            <div class="label-flex">
                                                <label for="community" class="required">Community</label>
                                            </div>
                                            <div class="select-list">
                                                <select name="community" id="community" class="form-control">
                                                    <option disabled>...Select Community...</option>

                                                    <?php 
                                                foreach($communitys as $each)
                                                {
                                            ?>

                                                    <option value="<?php echo $each['id']; ?>"
                                                        <?php if($community == $each['id']){ echo "selected"; } ?>>
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
                                            <input type="date" name="dob" id="dob" class="form-control"
                                                value="<?= $dob ?>" />
                                        </div>
                                        <div class="danger" role="danger">
                                            <?= \Config\Services::validation()->getError('dob'); ?>
                                        </div>

                                        <div class="form-input">
                                            <label for="self_number" class="required">Self Number</label>
                                            <input type="number" name="self_number" id="self_number"
                                                placeholder="Enter Number" class="form-control"
                                                value="<?= $self_number ?>" />
                                        </div>
                                        <div class="danger" role="danger">
                                            <?= \Config\Services::validation()->getError('self_number'); ?>
                                        </div>

                                        <div class="form-input">
                                            <label for="convenient_time" class="required">Convenient Time</label>
                                            <input type="text" name="convenient_time" id="convenient_time"
                                                placeholder="10am to 9pm" class="form-control"
                                                value="<?= $convenient_time ?>" />
                                        </div>
                                        <div class="danger" role="danger">
                                            <?= \Config\Services::validation()->getError('convenient_time'); ?>
                                        </div>
                                        <div class="form-input">
                                            <label for="relation_contact_person" class="required">Relation With Contact
                                                Person</label>
                                            <input type="text" name="relation_contact_person"
                                                id="relation_contact_person" placeholder="" class="form-control"
                                                value="<?= $relation_contact_person ?>" />
                                        </div>
                                        <div class="danger" role="danger">
                                            <?= \Config\Services::validation()->getError('relation_contact_person'); ?>
                                        </div>
                                        <div class="form-input">
                                            <label for="present_address" class="required">Present Address</label>
                                            <textarea style="padding: 10px;width:90%; height:70px" type="textarea"
                                                name="present_address" id="present_address"
                                                placeholder="Present Address"
                                                class="form-control"><?= $present_address ?></textarea>
                                        </div>
                                        <div class="danger" role="danger">
                                            <?= \Config\Services::validation()->getError('present_address'); ?>
                                        </div><br>
                                    </div>



                                    <div class="form-group" style="width: 40%;">
                                        <div class="form-select">
                                            <div class="label-flex">
                                                <label for="looking_for" class="required">Looking For</label>
                                            </div>
                                            <div class="select-list">
                                                <select name="looking_for" id="looking_for" class="form-control">
                                                    <option selected disabled>...Select Looking For...</option>
                                                    <?php 
                                                foreach($looking as $each)
                                                {
                                            ?>

                                                    <option value="<?php echo $each['id']; ?>"
                                                        <?php if($looking_for == $each['id']){ echo "selected"; } ?>>
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
                                                <select name="location" id="location" class="form-control">
                                                    <option selected disabled>...Select Location...</option>
                                                    <?php 
                                                foreach($locations as $each)
                                                {
                                            ?>

                                                    <option value="<?php echo $each['id']; ?>"
                                                        <?php if($location == $each['id']){ echo "selected"; } ?>>
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
                                            <input type="number" name="guardian_number" id="guardian_number"
                                                placeholder="Enter Number" class="form-control"
                                                value="<?= $guardian_number ?>" />
                                        </div>
                                        <div class="danger" role="danger">
                                            <?= \Config\Services::validation()->getError('guardian_number'); ?>
                                        </div>
                                        <div class="form-input">
                                            <label for="emergency_number" class="required">Emergency Number</label>
                                            <input type="number" name="emergency_number" id="emergency_number"
                                                placeholder="Enter Number" class="form-control"
                                                value="<?= $emergency_number ?>" />
                                        </div>
                                        <div class="danger" role="danger">
                                            <?= \Config\Services::validation()->getError('emergency_number'); ?>
                                        </div>
                                        <div class="form-input">
                                            <label for="contact_person_name" class="required">Contact Person
                                                Name</label>
                                            <input type="text" name="contact_person_name" id="contact_person_name"
                                                placeholder="Enter Name" class="form-control"
                                                value="<?= $contact_person_name ?>" />
                                        </div>
                                        <div class="danger" role="danger">
                                            <?= \Config\Services::validation()->getError('contact_person_name'); ?>
                                        </div>
                                        <div class="form-input">
                                            <label for="permanent_address" class="required">Permanent Address</label>
                                            <textarea style="padding: 10px;width:90%;height:70px" type="textarea"
                                                name="permanent_address" id="permanent_address"
                                                placeholder="Permanent Address" class="form-control"
                                                value="<?= $permanent_address ?>"><?= $permanent_address ?></textarea>
                                        </div>
                                        <div class="danger" role="danger">
                                            <?= \Config\Services::validation()->getError('permanent_address'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-submit">
                                    <input class="btn btn-success" type="submit" value="Update" class="submit"
                                        id="submit" name="submit" />
                                </div>

                            </form>

                            <!--End Update First Registration From -->
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-dark collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                Second Part Personal Registration
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">


                            <!--Start Update Second Registration From -->
                            <br>
                            <form method="POST" class="register-form" id="seconddisplaytable"
                                action="<?= base_url('update_second_personal_information_form')?>">
                                <input type="hidden" name="id" id="id" value="<?= $id ?>">
                                <div class="form-row">
                                    <div class="form-group">
                                        <div class="form-select">
                                            <div class="label-flex">
                                                <label for="marital_status" class="required">Marital Status</label>
                                            </div>
                                            <div class="select-list">
                                                <select name="marital_status" id="marital_status" class="form-control">
                                                    <option selected disabled>...Select Marital Status...</option>
                                                    <?php 
                                                foreach($maritalstatus as $each)
                                                {
                                            ?>

                                                    <option value="<?php echo $each['id']; ?>"
                                                        <?php if($marital_status == $each['id']){ echo "selected"; } ?>>
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
                                                <select name="height" id="height" class="form-control">
                                                    <option selected disabled>...Select Height...</option>
                                                    <?php 
                                                foreach($heights as $each)
                                                {
                                            ?>

                                                    <option value="<?php echo $each['id']; ?>"
                                                        <?php if($height == $each['id']){ echo "selected"; } ?>>
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
                                                <select name="hair_color" id="hair_color" class="form-control">
                                                    <option selected disabled>...Select Hair Color...</option>
                                                    <?php 
                                                foreach($hair_colors as $each)
                                                {
                                            ?>

                                                    <option value="<?php echo $each['id']; ?>"
                                                        <?php if($hair_color == $each['id']){ echo "selected"; } ?>>
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
                                                <select name="complexion" id="complexion" class="form-control">
                                                    <option value="" selected disabled>...Select Complexion...</option>
                                                    <?php 
                                                foreach($complexions as $each)
                                                {
                                            ?>

                                                    <option value="<?php echo $each['id']; ?>"
                                                        <?php if($complexion == $each['id']){ echo "selected"; } ?>>
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
                                                <select name="blood" id="blood" class="form-control">
                                                    <option value="" selected disabled>...Select Blood Group...</option>
                                                    <?php 
                                                foreach($blood_group as $each)
                                                {
                                            ?>

                                                    <option value="<?php echo $each['id']; ?>"
                                                        <?php if($blood == $each['id']){ echo "selected"; } ?>>
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
                                                <select name="profession" id="profession" class="form-control">
                                                    <option value="" selected disabled>...Select Profession...</option>
                                                    <?php 
                                                foreach($professions as $each)
                                                {
                                            ?>

                                                    <option value="<?php echo $each['id']; ?>"
                                                        <?php if($profession == $each['id']){ echo "selected"; } ?>>
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
                                                <select name="annual_income" id="annual_income" class="form-control">
                                                    <option value="" selected disabled>...Select Annual Income...
                                                    </option>
                                                    <?php 
                                                foreach($annual_incomes as $each)
                                                {
                                            ?>

                                                    <option value="<?php echo $each['id']; ?>"
                                                        <?php if($annual_income == $each['id']){ echo "selected"; } ?>>
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
                                                <select name="drink" id="drink" class="form-control">
                                                    <option value="" selected disabled>...Select Drink...</option>
                                                    <?php 
                                                foreach($drinks as $each)
                                                {
                                            ?>

                                                    <option value="<?php echo $each['id']; ?>"
                                                        <?php if($drink == $each['id']){ echo "selected"; } ?>>
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
                                                <select name="children" id="children" class="form-control">
                                                    <option selected disabled>...Have Children...</option>
                                                    <?php 
                                                foreach($childrens as $each)
                                                {
                                            ?>

                                                    <option value="<?php echo $each['id']; ?>"
                                                        <?php if($children == $each['id']){ echo "selected"; } ?>>
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
                                                <select name="body_type" id="body_type" class="form-control">
                                                    <option selected disabled>...Select Body Type...</option>
                                                    <?php 
                                                foreach($body_types as $each)
                                                {
                                            ?>

                                                    <option value="<?php echo $each['id']; ?>"
                                                        <?php if($body_type == $each['id']){ echo "selected"; } ?>>
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
                                                <select name="eye_color" id="eye_color" class="form-control">
                                                    <option value="" selected disabled>...Select Eye Color...</option>
                                                    <?php 
                                                foreach($eye_colors as $each)
                                                {
                                            ?>

                                                    <option value="<?php echo $each['id']; ?>"
                                                        <?php if($eye_color == $each['id']){ echo "selected"; } ?>>
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
                                                <select name="disabilities" id="disabilities" class="form-control">
                                                    <option value="" selected disabled>...Select Disabilities...
                                                    </option>
                                                    <?php 
                                                foreach($disabiliti as $each)
                                                {
                                            ?>

                                                    <option value="<?php echo $each['id']; ?>"
                                                        <?php if($disabilities == $each['id']){ echo "selected"; } ?>>
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
                                                <select name="education" id="education" class="form-control">
                                                    <option value="" selected disabled>...Select Education...</option>
                                                    <?php 
                                                foreach($educations as $each)
                                                {
                                            ?>

                                                    <option value="<?php echo $each['id']; ?>"
                                                        <?php if($education == $each['id']){ echo "selected"; } ?>>
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
                                            <textarea style="padding: 10px;width:90%" type="textarea" name="work_place"
                                                id="work_place" placeholder=""
                                                class="form-control"><?= $work_place ?></textarea>
                                        </div>
                                        <div class="danger" role="danger">
                                            <?= \Config\Services::validation()->getError('work_place'); ?>
                                        </div>

                                        <div class="form-select">
                                            <div class="label-flex">
                                                <label for="diet" class="required">diet</label>
                                            </div>
                                            <div class="select-list">
                                                <select name="diet" id="diet" class="form-control">
                                                    <option value="" selected disabled>...Select Diet...</option>
                                                    <?php 
                                                foreach($diets as $each)
                                                {
                                            ?>

                                                    <option value="<?php echo $each['id']; ?>"
                                                        <?php if($diet == $each['id']){ echo "selected"; } ?>>
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
                                                <select name="smoke" id="smoke" class="form-control">
                                                    <option value="" selected disabled>...Select Smoke...</option>
                                                    <?php 
                                                foreach($smokes as $each)
                                                {
                                            ?>

                                                    <option value="<?php echo $each['id']; ?>"
                                                        <?php if($smoke == $each['id']){ echo "selected"; } ?>>
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
                                    <input class="btn btn-success" type="submit" value="Update" class="submit"
                                        id="submit" name="submit" />
                                </div>
                            </form>
                            <!--End Update Second Registration From -->


                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-dark collapsed" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                Third Part Personal Registration
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            <!--Start Update Third Registration From -->
                            <br>
                            <form method="POST" class="register-form" id="register-form"
                                action="<?= base_url('update_third_personal_information_form')?>">
                                <input type="hidden" name="id" id="id" value="<?= $id ?>">
                                <h2 class="head">Personal Information</h2> <br>
                                <div class="form-row">
                                    <div class="form-group">
                                        <div class="form-select">
                                            <div class="label-flex">
                                                <label for="mother_tongue" class="required">Mother Tongue</label>
                                            </div>
                                            <div class="select-list">
                                                <select name="mother_tongue" id="mother_tongue" class="form-control">
                                                    <option value="" selected disabled>...Select Mother Tongue...
                                                    </option>
                                                    <?php 
                                                foreach($mother_tongues as $each)
                                                {
                                            ?>

                                                    <option value="<?php echo $each['id']; ?>" <?php if($mother_tongue == $each['id']){ echo "selected"; } ?>>
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
                                            <textarea style="width: 100%; height:100px" type="text" name="yourself"
                                                value="<?= $yourself?>" id="yourself" placeholder="About yourself"
                                                class="form-control"><?= $yourself ?></textarea>
                                        </div>

                                        <div class="danger" role="danger">
                                            <?= \Config\Services::validation()->getError('yourself'); ?>
                                        </div>

                                        <div class="form-select">
                                            <div class="label-flex">
                                                <label for="family_value" class="required">Family Value</label>
                                            </div>
                                            <div class="select-list">
                                                <select name="family_value" id="family_value" class="form-control">
                                                    <option value="" selected disabled>...Select Family Value...
                                                    </option>
                                                    <?php 
                                                foreach($family_values as $each)
                                                {
                                            ?>

                                                    <option value="<?php echo $each['id']; ?>" <?php if($family_value == $each['id']){ echo "selected"; } ?>>
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
                                                <select name="father" id="father" class="form-control">
                                                    <option value="" selected disabled>...Select Work...</option>
                                                    <?php 
                                                foreach($fathers as $each)
                                                {
                                            ?>

                                                    <option value="<?php echo $each['id']; ?>" <?php if($father == $each['id']){ echo "selected"; } ?>>
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
                                                <select name="no_of_brother" id="no_of_brother" class="form-control">
                                                    <option value="" selected disabled>...Select No Of Brother...
                                                    </option>
                                                    <?php 
                                                foreach($no_of_brothers as $each)
                                                {
                                            ?>

                                                    <option value="<?php echo $each['id']; ?>" <?php if($no_of_brother == $each['id']){ echo "selected"; } ?>>
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
                                                <label for="whom_brother_married" class="required">Whom Brother
                                                    Married</label>
                                            </div>
                                            <div class="select-list">
                                                <select name="whom_brother_married" id="whom_brother_married"
                                                    class="form-control">
                                                    <option value="" selected disabled>...Select No Of Brother...
                                                    </option>
                                                    <?php 
                                                foreach($whom_brother_marrieded as $each)
                                                {
                                            ?>

                                                    <option value="<?php echo $each['id']; ?>" <?php if($whom_brother_married == $each['id']){ echo "selected"; } ?>>
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
                                                <select name="district" id="district" class="form-control">
                                                    <option value="" selected disabled>...Select District...</option>
                                                    <?php 
                                                foreach($districts as $each)
                                                {
                                            ?>

                                                    <option value="<?php echo $each['id']; ?>" <?php if($district == $each['id']){ echo "selected"; } ?>>
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
                                            <input type="text" name="parmanent_resident" id="parmanent_resident"
                                                placeholder="Enter Parmanent Resident In Details" class="form-control"
                                                value="<?= $parmanent_resident?>" />
                                        </div>

                                        <div class="danger" role="danger">
                                            <?= \Config\Services::validation()->getError('parmanent_resident'); ?>
                                        </div>

                                    </div>






                                    <div class="form-group">
                                        <div class="form-input">
                                            <label for="can_speak" class="required">Can Speak</label>
                                            <input type="text" name="can_speak" id="can_speak"
                                                placeholder="Bangla, English" class="form-control"
                                                value="<?= $can_speak ?>" />
                                        </div>

                                        <div class="danger" role="danger">
                                            <?= \Config\Services::validation()->getError('can_speak'); ?>
                                        </div>

                                        <div class="form-input">
                                            <label for="family_background" class="required">About Family
                                                Background</label>
                                            <textarea style="width: 100%; height:100px" type="text"
                                                name="family_background" id="family_background"
                                                placeholder="About Family Background"
                                                class="form-control"><?= $family_background ?></textarea>
                                        </div>

                                        <div class="danger" role="danger">
                                            <?= \Config\Services::validation()->getError('family_background'); ?>
                                        </div>

                                        <div class="form-select">
                                            <div class="label-flex">
                                                <label for="personal_value" class="required">Personal Value</label>
                                            </div>
                                            <div class="select-list">
                                                <select name="personal_value" id="personal_value" class="form-control">
                                                    <option selected disabled>...Select Personal Value...
                                                    </option>
                                                    <!--  -->
                                                    <?php 
                                                foreach($personal_values as $each)
                                                {
                                            ?>

                                                    <option value="<?php echo $each['id']; ?>" <?php if($personal_value == $each['id']){ echo "selected"; } ?>>
                                                        <?php echo $each['items_name']; ?></option>

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
                                                <select name="mother" id="mother" class="form-control">
                                                    <option value="" selected disabled>...Select Work...</option>
                                                    <?php 
                                                foreach($mothers as $each)
                                                {
                                            ?>

                                                    <option value="<?php echo $each['id']; ?>" <?php if($mother == $each['id']){ echo "selected"; } ?>>
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
                                                <select name="no_of_sister" id="no_of_sister" class="form-control">
                                                    <option value="" selected disabled>...Select No Of Sister...
                                                    </option>
                                                    <?php 
                                                foreach($no_of_sisters as $each)
                                                {
                                            ?>

                                                    <option value="<?php echo $each['id']; ?>" <?php if($no_of_sister == $each['id']){ echo "selected"; } ?>>
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
                                                <label for="whom_sister_married" class="required">Whom Sister
                                                    Married</label>
                                            </div>
                                            <div class="select-list">
                                                <select name="whom_sister_married" id="whom_sister_married"
                                                    class="form-control">
                                                    <option value="" selected disabled>...Select No Of Sister...
                                                    </option>
                                                    <?php 
                                                foreach($whom_sister_marrieded as $each)
                                                {
                                            ?>

                                                    <option value="<?php echo $each['id']; ?>" <?php if($whom_sister_married == $each['id']){ echo "selected"; } ?>>
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
                                            <input type="text" name="zip_code" id="zip_code" placeholder="Zip Code"
                                                class="form-control" value="<?= $zip_code ?>" />
                                        </div>

                                        <div class="form-input">
                                            <label for="country_origin" class="required">Country Origin</label>
                                            <input type="text" name="country_origin" id="country_origin"
                                                placeholder="Enter Country Origin" class="form-control"
                                                value="<?= $country_origin ?>" />
                                        </div>

                                        <div class="danger" role="danger">
                                            <?= \Config\Services::validation()->getError('country_origin'); ?>
                                        </div>


                                    </div>
                                </div>
                                <div class="form-submit">
                                    <input class="btn btn-success" type="submit" value="Update" class="submit"
                                        id="submit" name="submit" />
                                </div>

                            </form>
                            <!--End Update Second Registration From -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-2">

        </div>
    </div>
</div>

<?= $this->endSection()?>