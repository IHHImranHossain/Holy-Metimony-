<?= $this->extend('layout/user_home_layout')?>
<?= $this->section('content')?>

<?php    
                   
foreach($district_search as $each)
{
    if($user_id !== $each['id'])
    {                       
        if($user_data['looking_for'] !== $each['looking_for'])
        { 
            if($user_data['district'] == $each['district'])
            {       
?>

<div class=" search_card">
    <img class="img-fluid profile_img" src="public/assets/upload/<?=$each['upload_image'] ?>" alt="img">
    <div class="card-body">
        <h5 class="card-title"><a href="<?=  base_url('user_profile_view').'/'.$each['id'];?>">
                <?=$each['first_name'] ?>&nbsp;<?=$each['last_name'] ?>
            </a>,
            <?php
                $birthdate = new DateTime($each['dob']);
                $today   = new DateTime('today');
                $age = $birthdate->diff($today)->y;
                echo $age;
            ?>&nbsp;Years
        </h5>
        <div class="row">
            <div class="col-md-4">
                <text class="view_card_text">
                    <?php
                        foreach($communitys as $find)
                        {
                
                            if($each['community'] == $find['id'])
                            { 
                                echo $find['items_name'];
                            }
                        }
                    ?>
                </text><br>
                <text class="view_card_text">
                    <?php
                        foreach($maritalstatus as $find)
                        {
                
                            if($each['marital_status'] == $find['id'])
                            { 
                                echo $find['items_name'];
                            }
                        }
                    ?>
                </text><br>
                <text class="view_card_text">
                    <?php
                        foreach($professions as $find)
                        {
                
                            if($each['profession'] == $find['id'])
                            { 
                                echo $find['items_name'];
                            }
                        }
                    ?>
                </text><br>
            </div>
            <div class="col-md-4">
                <text class="view_card_text">
                    <?php
                        foreach($heights as $find)
                        {
                
                            if($each['height'] == $find['id'])
                            { 
                                echo $find['items_name'];
                            }
                        }
                    ?>
                </text><br>
                <text class="view_card_text">
                    <?php
                        foreach($locations as $find)
                        {
                
                            if($each['location'] == $find['id'])
                            { 
                                echo $find['items_name'];
                            }
                        }
                    ?>
                </text><br>
                <text class="view_card_text">
                    <?php
                        foreach($mother_tongues as $find)
                        {
                
                            if($each['mother_tongue'] == $find['id'])
                            { 
                                echo $find['items_name'];
                            }
                        }
                    ?>
                </text><br>
            </div>
            <div class="col-md-4 profile_view" style="text-align: center;">
                <i class="fas fa-users" id="view_profile_text">View Profile</i><br>
                <a href="<?php echo base_url('user_profile_view').'/'.$each['id'];?>"><button type="button"
                        class="btn btn-outline-success"><i class="fas fa-id-card fa-2x"></i></button></a>
            </div>
            <text class="view_card_text">
                If you like then connect with her/him
            </text>
        </div>
    </div>
</div>

<?php
            }                            
        } 
    }        
} 
?>

<?= $this->endSection()?>