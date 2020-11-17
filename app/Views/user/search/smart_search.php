<?= $this->extend('layout/user_home_layout')?>
<?= $this->section('content')?>
<div class="signup-form">
    <br>
    <form method="POST" class="search-form" action="<?= base_url('smart_search_fetch')?>">
        <h2 class="search_title">Smart Search</h2> <br>

        <div class="form-group">
            <div class="form-select">

                <div class="label-flex">
                    <label for="age_range">Looking For</label>
                </div>
                <div class="select-list">
                    <select name="looking_for" id="looking_for" class="form-control">
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
            </div><br>

            <div class="form-select">
                <div class="label-flex">
                    <label for="complexion" >Complexion</label>
                </div>
                <div class="select-list">
                    <select name="complexion" id="complexion" class="form-control">
                        <option value="" selected disabled>...Select Complexion...</option>
                        <?php 
                            foreach($complexions as $each)
                            {
                        ?>

                        <option value="<?php echo $each['id']; ?>">
                            <?php echo $each['items_name']; ?></option>';

                        <?php
                            } 
                        ?>

                    </select>
                </div>
            </div><br>

            <div class="form-select">
                <div class="label-flex">
                    <label for="marital_status">Marital Status</label>
                </div>
                <div class="select-list">
                    <select name="marital_status" id="marital_status" class="form-control">
                        <option selected disabled>Select Marital Status</option>
                        <?php 
                            foreach($maritalstatus as $each)
                            {
                        ?>

                        <option value="<?php echo $each['id']; ?>">
                            <?php echo $each['items_name']; ?></option>';

                        <?php
                            } 
                        ?>
                    </select>
                </div>
            </div><br>
            <div class="form-select">
                <div class="label-flex">
                    <label for="children">Have Children</label>
                </div>
                <div class="select-list">
                    <select name="children" id="children" class="form-control">
                        <option selected disabled>...Have Children...</option>
                        <?php 
                            foreach($childrens as $each)
                            {
                        ?>

                        <option value="<?php echo $each['id']; ?>">
                            <?php echo $each['items_name']; ?></option>';

                        <?php
                            } 
                        ?>
                    </select>
                </div>
            </div><br>
            <div class="form-select">
                <div class="label-flex">
                    <label for="mother_tongue">Mother Tongue</label>
                </div>
                <div class="select-list">
                    <select name="mother_tongue" id="mother_tongue" class="form-control">
                        <option value="" selected disabled>...Select Mother Tongue...</option>
                        <?php 
                            foreach($mother_tongues as $each)
                            {
                        ?>

                        <option value="<?php echo $each['id']; ?>">
                            <?php echo $each['items_name']; ?></option>';

                        <?php
                            } 
                        ?>

                    </select>
                </div>
            </div><br>
            <div class="form-select">
                <div class="label-flex">
                    <label for="family_value">Family Value</label>
                </div>
                <div class="select-list">
                    <select name="family_value" id="family_value" class="form-control">
                        <option value="" selected disabled>...Select Family Value...</option>
                        <?php 
                            foreach($family_values as $each)
                            {
                        ?>

                        <option value="<?php echo $each['id']; ?>">
                            <?php echo $each['items_name']; ?></option>';

                        <?php
                            } 
                        ?>

                    </select>
                </div>
            </div><br>
            <div class="form-select">
                <div class="label-flex">
                    <label for="district">District</label>
                </div>
                <div class="select-list">
                    <select name="district" id="district" class="form-control">
                        <option value="" selected disabled>...Select District...</option>
                        <?php 
                            foreach($districts as $each)
                            {
                        ?>

                        <option value="<?php echo $each['id']; ?>">
                            <?php echo $each['items_name']; ?></option>';

                        <?php
                            } 
                        ?>

                    </select>
                </div>
            </div><br>
            
            <div class="form-select">
                <div class="label-flex">
                    <label for="profession">Profession</label>
                </div>
                <div class="select-list">
                    <select name="profession" id="profession" class="form-control">
                        <option value="" selected disabled>...Select Profession...</option>
                        <?php 
                            foreach($professions as $each)
                            {
                        ?>

                        <option value="<?php echo $each['id']; ?>">
                            <?php echo $each['items_name']; ?></option>';

                        <?php
                            } 
                        ?>

                    </select>
                </div>
            </div><br>
            <div class="form-select">
                <div class="label-flex">
                    <label for="location">Location</label>
                </div>
                <div class="select-list">
                    <select name="location" id="location" class="form-control">
                        <option selected disabled>...Select Location...</option>
                        <?php 
                            foreach($locations as $each)
                            {
                        ?>

                        <option value="<?php echo $each['id']; ?>">
                            <?php echo $each['items_name']; ?></option>';


                        <?php
                            } 
                        ?>
                    </select>
                </div>
            </div><br>
            <div class="form-submit">
                <input type="submit" value="Search" class="btn btn-success" id="submit" name="submit" />
            </div>
        </div>
</div>
</form>

<?= $this->endSection()?>