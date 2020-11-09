<?= $this->extend('layout/user_profile_layout')?>
<?= $this->section('content')?>

<div class="main">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <br>
                <form method="POST" class="interest_register-form" id="register-form"
                    action="<?= base_url('update_your_interest_form')?>">
                    <h2 class="head">Your Interest</h2> <br>
                    
                    <div class="form-row">
                        <div class="form-group">
                        <input type="hidden" name="id" id="id" value="<?= $id ?>">
                            <div class="form-input">
                                <label for="interest" class="required">Write Your Interest</label><br>
                                <textarea style="width: 700px; height:100px" type="text" name="interest" id="interest"
                                    placeholder="Ex: Pets, Travelling, Health & Fit"><?= $interest ?></textarea>
                            </div>

                            <div class="danger" role="danger">
                                <?= \Config\Services::validation()->getError('interest'); ?>
                            </div>

                            <div class="form-input">
                                <label for="music" class="required">Write Your Fevoutire Music</label><br>
                                <textarea style="width: 700px; height:100px" type="text" name="music" id="music"
                                    placeholder="Ex: POP, R&B "><?= $music ?></textarea>
                            </div>

                            <div class="danger" role="danger">
                                <?= \Config\Services::validation()->getError('music'); ?>
                            </div>

                            <div class="form-input">
                                <label for="reads" class="required">Write Your Fevoutire Reads</label><br>
                                <textarea style="width: 700px; height:100px" type="text" name="reads" id="reads"
                                    placeholder="Ex: Fantasy, Online News "><?= $reads ?></textarea>
                            </div>

                            <div class="danger" role="danger">
                                <?= \Config\Services::validation()->getError('reads'); ?>
                            </div>

                            <div class="form-input">
                                <label for="movies" class="required">Write Your Fevoutire Movies</label><br>
                                <textarea style="width: 700px; height:100px" type="text" name="movies" id="movies"
                                    placeholder="Ex: Movie Names "><?= $movies ?></textarea>
                            </div>

                            <div class="danger" role="danger">
                                <?= \Config\Services::validation()->getError('movies'); ?>
                            </div>

                            <div class="form-input">
                                <label for="cooking" class="required">Write Your Fevoutire Cooking</label><br>
                                <textarea style="width: 700px; height:100px" type="text" name="cooking" id="cooking"
                                    placeholder="Ex: Kabab, Fast Food"><?= $cooking ?></textarea>
                            </div>

                            <div class="danger" role="danger">
                                <?= \Config\Services::validation()->getError('cooking'); ?>
                            </div>

                            <div class="form-input">
                                <label for="dress_style" class="required">Write Your Fevoutire Dress Style</label><br>
                                <textarea style="width: 700px; height:100px" type="text" name="dress_style"
                                    id="dress_style" placeholder="Ex: Casual, Trendy"><?= $dress_style ?></textarea>
                            </div>

                            <div class="danger" role="danger">
                                <?= \Config\Services::validation()->getError('dress_style'); ?>
                            </div>

                        </div>
                    </div><br>
                    <div class="form-submit">
                        <input class="btn btn-success" type="submit" value="Submit" class="submit" id="submit"
                            name="submit" />
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>


<?= $this->endSection()?>