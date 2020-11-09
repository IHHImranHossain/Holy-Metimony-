<?= $this->extend('layout/user_profile_layout')?>
<?= $this->section('content')?>
<div class="main">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <form method="POST" class="partner_register-form" id="register-form"
                    action="<?= base_url('update_partner_preference_form')?>">
                    <br>
                    <h2 class="head">Patner Preference</h2> <br>
                    <div class="form-row">
                    <input type="hidden" name="id" id="id" value="<?= $id ?>">
                        <div class="form-group">

                            <div class="form-select">

                                <div class="label-flex">
                                    <label for="age_range" class="required">Age Range</label>
                                </div>
                                <div class="flex" style="display: flex;">
                                    <div class="select-list">
                                        <select name="age_range_from" id="age_range" class="form-control">
                                            <option value="" selected disabled>Select Age Range</option>
                                            <?php 
                                                        foreach($age_ranges as $each)
                                                        {
                                                    ?>

                                            <option value="<?php echo $each['id']; ?>" <?php if($age_range_from == $each['id']){ echo "selected"; } ?>>
                                                <?php echo $each['items_name']; ?></option>';

                                            <?php
                                                        } 
                                                    ?>

                                        </select>
                                    </div>
                                    &nbsp;<p style="color: black;">To</p>&nbsp;
                                    <div class="select-list">
                                        <select name="age_range_to" id="age_range" class="form-control">
                                            <option value="" selected disabled>Select Age Range</option>
                                            <?php 
                                                        foreach($age_ranges as $each)
                                                        {
                                                    ?>

                                            <option value="<?php echo $each['id']; ?>" <?php if($age_range_to == $each['id']){ echo "selected"; } ?>>
                                                <?php echo $each['items_name']; ?></option>';

                                            <?php
                                                        } 
                                                    ?>

                                        </select>
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
                                    <select name="marital_status" id="marital_status" class="form-control">
                                        <option selected disabled>Select Marital Status</option>
                                        <?php 
                                                foreach($marital_statuss as $each)
                                                {
                                            ?>

                                        <option value="<?php echo $each['id']; ?>" <?php if($marital_status == $each['id']){ echo "selected"; } ?>>
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
                                    <select name="religion" id="religion" class="form-control">
                                        <option value="" selected disabled>Select Religion</option>
                                        <?php 
                                                    foreach($religions as $each)
                                                    {
                                                ?>

                                        <option value="<?php echo $each['id']; ?>" <?php if($religion == $each['id']){ echo "selected"; } ?>>
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
                                    <select name="complexion" id="complexion" class="form-control">
                                        <option value="" selected disabled>Select Complexion</option>
                                        <?php 
                                                    foreach($complexions as $each)
                                                    {
                                                ?>

                                        <option value="<?php echo $each['id']; ?>" <?php if($complexion == $each['id']){ echo "selected"; } ?>>
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
                                    <select name="profession" id="profession" class="form-control">
                                        <option value="" selected disabled>Select Profession</option>
                                        <?php 
                                                    foreach($professions as $each)
                                                    {
                                                ?>

                                        <option value="<?php echo $each['id']; ?>" <?php if($profession == $each['id']){ echo "selected"; } ?>>
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
                                    <select name="drink" id="drink" class="form-control">
                                        <option value="" selected disabled>Select Drink</option>
                                        <?php 
                                                    foreach($drinks as $each)
                                                    {
                                                ?>

                                        <option value="<?php echo $each['id']; ?>" <?php if($drink == $each['id']){ echo "selected"; } ?>>
                                            <?php echo $each['items_name']; ?></option>';

                                        <?php
                                                    } 
                                                ?>

                                    </select>
                                </div>
                            </div>


                            <div class="form-input">
                                <label for="residence">Resident</label>
                                <input type="text" name="residence" id="residence"
                                    placeholder="Enter Residence Which is You Like" class="form-control" value="<?= $residence ?>"/>
                            </div>



                            <div class="form-select">
                                <div class="label-flex">
                                    <label for="mother_tongue" class="required">Mother Tongue</label>
                                </div>
                                <div class="select-list">
                                    <select name="mother_tongue" id="mother_tongue" class="form-control">
                                        <option value="" selected disabled>Select Mother Tongue</option>
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

                            <div class="form-select">
                                <div class="label-flex">
                                    <label for="district">District</label>
                                </div>
                                <div class="select-list">
                                    <select name="district_residence" id="district_residence" class="form-control">
                                        <option value="" selected disabled>Select District</option>
                                        <?php 
                                                    foreach($districts as $each)
                                                    {
                                                ?>

                                        <option value="<?php echo $each['id']; ?>" <?php if($district_residence == $each['id']){ echo "selected"; } ?>>
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
                                        <select name="height_range_from" id="height_range_from" class="form-control">
                                            <option value="" selected disabled>Select Height Range</option>
                                            <?php 
                                                    foreach($height_ranges as $each)
                                                    {
                                                ?>

                                            <option value="<?php echo $each['id']; ?>" <?php if($height_range_from == $each['id']){ echo "selected"; } ?>>
                                                <?php echo $each['items_name']; ?></option>';

                                            <?php
                                                    } 
                                                ?>
                                        </select>
                                    </div>
                                    &nbsp;<p style="color: black;">To</p>&nbsp;
                                    <div class="select-list">
                                        <select name="height_range_to" id="height_range_to" class="form-control">
                                            <option value="" selected disabled>Select Height Range</option>
                                            <?php 
                                                    foreach($height_ranges as $each)
                                                    {
                                                ?>

                                            <option value="<?php echo $each['id']; ?>" <?php if($height_range_to == $each['id']){ echo "selected"; } ?>>
                                                <?php echo $each['items_name']; ?></option>';

                                            <?php
                                                    } 
                                                ?>

                                        </select>
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
                                    <label for="children">Have Children</label>
                                </div>
                                <div class="select-list">
                                    <select name="children" id="children" class="form-control">
                                        <option selected disabled>Select Have Children</option>
                                        <?php 
                                                foreach($childrens as $each)
                                                {
                                            ?>

                                        <option value="<?php echo $each['id']; ?>" <?php if($children == $each['id']){ echo "selected"; } ?>>
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
                                    <select name="body_type" id="body_type" class="form-control">
                                        <option selected disabled>Select Body Type</option>
                                        <?php 
                                                foreach($body_types as $each)
                                                {
                                            ?>

                                        <option value="<?php echo $each['id']; ?>" <?php if($body_type == $each['id']){ echo "selected"; } ?>>
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
                                    <select name="education" id="education" class="form-control">
                                        <option value="" selected disabled>Select Education</option>
                                        <?php 
                                                foreach($educations as $each)
                                                {
                                            ?>

                                        <option value="<?php echo $each['id']; ?>" <?php if($education == $each['id']){ echo "selected"; } ?>>
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
                                    <select name="diet" id="diet" class="form-control">
                                        <option value="" selected disabled>Select Diet</option>
                                        <?php 
                                                foreach($diets as $each)
                                                {
                                            ?>

                                        <option value="<?php echo $each['id']; ?>" <?php if($diet == $each['id']){ echo "selected"; } ?>>
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
                                    <select name="smoke" id="smoke" class="form-control">
                                        <option value="" selected disabled>Select Smoke</option>
                                        <?php 
                                                foreach($smokes as $each)
                                                {
                                            ?>

                                        <option value="<?php echo $each['id']; ?>" <?php if($smoke == $each['id']){ echo "selected"; } ?>>
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
                                    <select name="family_value" id="family_value" class="form-control">
                                        <option value="" selected disabled>Select Family Value</option>
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

                            <div class="form-input">
                                <label for="country_of_origin" class="required">Country Origin</label>
                                <input type="text" name="country_of_origin" id="country_of_origin"
                                    placeholder="Enter Country Origin" class="form-control" value="<?= $country_of_origin ?>"/>
                            </div>
                            <div class="danger" role="danger">
                                <?= \Config\Services::validation()->getError('country_of_origin'); ?>
                            </div>
                        </div>
                    </div>


                    <div class="form-submit">
                        <input class="btn btn-success" type="submit" value="Update" class="submit" id="submit"
                            name="submit" />
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection()?>