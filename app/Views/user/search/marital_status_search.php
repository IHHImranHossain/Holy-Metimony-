<?= $this->extend('layout/user_home_layout')?>
<?= $this->section('content')?>
<div class="signup-form">
    <br>
    <form method="POST" class="search-form" action="<?= base_url('marital_status_search_fetch')?>">
        <h2 class="head">Marital Status Search</h2> <br>

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
                    <label for="marital_status">Marital Status</label>
                </div>
                <div class="select-list">
                    <select name="marital_status" id="marital_status" class="form-control">
                        <option selected disabled>...Select Marital Status...</option>
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
            <div class="form-submit">
                <input type="submit" value="Search" class="btn btn-success" id="submit" name="submit" />
            </div>
        </div>
</div>
</form>

<?= $this->endSection()?>