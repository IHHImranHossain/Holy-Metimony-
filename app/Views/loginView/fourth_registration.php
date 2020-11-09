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
                    <img src="public/assets/img/c6.jpg" alt="">
                </div>
                <div class="signup-form">
                    <br><form method="POST" class="register-form" id="register-form" action="<?= base_url('fourth_registration_Validation')?>">
                        <h2 class="head">Your Interest</h2>  <br>     
                        <div class="form-row">
                            <div class="form-group">

                                <div class="form-input">
                                    <label for="interest" class="required">Write Your Interest</label>
                                    <textarea style="width: 700px; height:100px" type="text" name="interest" id="interest" placeholder="Ex: Pets, Travelling, Health & Fit"></textarea>
                                </div>

                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('interest'); ?>
                                    </div>

                                <div class="form-input">
                                    <label for="music" class="required">Write Your Fevoutire Music</label>
                                    <textarea style="width: 700px; height:100px" type="text" name="music" id="music" placeholder="Ex: POP, R&B "></textarea>
                                </div>

                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('music'); ?>
                                    </div>

                                <div class="form-input">
                                    <label for="reads" class="required">Write Your Fevoutire Reads</label>
                                    <textarea style="width: 700px; height:100px" type="text" name="reads" id="reads" placeholder="Ex: Fantasy, Online News "></textarea>
                                </div>

                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('reads'); ?>
                                    </div>
                                
                                <div class="form-input">
                                    <label for="movies" class="required">Write Your Fevoutire Movies</label>
                                    <textarea style="width: 700px; height:100px" type="text" name="movies" id="movies" placeholder="Ex: Movie Names "></textarea>
                                </div>

                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('movies'); ?>
                                    </div>

                                <div class="form-input">
                                    <label for="cooking" class="required">Write Your Fevoutire Cooking</label>
                                    <textarea style="width: 700px; height:100px" type="text" name="cooking" id="cooking" placeholder="Ex: Kabab, Fast Food"></textarea>
                                </div>

                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('cooking'); ?>
                                    </div>

                                <div class="form-input">
                                    <label for="dress_style" class="required">Write Your Fevoutire Dress Style</label>
                                    <textarea style="width: 700px; height:100px" type="text" name="dress_style" id="dress_style" placeholder="Ex: Casual, Trendy"></textarea>
                                </div> 

                                    <div class="danger" role="danger">
                                        <?= \Config\Services::validation()->getError('dress_style'); ?>
                                    </div>

                            </div>
                        </div><br>
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