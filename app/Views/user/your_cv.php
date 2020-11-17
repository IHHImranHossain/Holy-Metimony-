<?= $this->extend('layout/user_home_layout')?>
<?= $this->section('content')?>

   <div class="cv-page">
      <!-- Contact wrap -->
      <div class="cv-contact">
         <!-- Magic contact menu szmygurygu -->
         <div class="cv-contact-morph" data-morph-active="M1000,0h-1000l0,100C300,100,500,100,800,100h200L1000,0z"
            style="display: none">
            <svg width="100%" height="100%" viewBox="0 0 1000 100" preserveAspectRatio="none">
               <path d="M1000,0h-1000l0,0C300,0,500,100,800,100h200L1000,0z" />
            </svg>
         </div>
      </div>

      <!-- Main CV wrap -->
      <?php $session = session(); ?>
      <main class="cv">
         <div class="wrap">
            <nav class="cv-main-nav">
               <a href="#">
                  <i class="icon-cloud-download"></i>
               </a>
               <a href="#" class="cv-print-button">
                  <i class="icon-printer"></i>
               </a>
            </nav>
            <section class="card_herader_section">
               <div class="cv-author">
                  <div class="cv-photo side">
                     <img src="public/assets/upload/<?php echo $session->get('upload_image');?>"
                        class="img-circle elevation-2" alt="User Image">
                  </div>

                  <h1>
                     <?php echo $session->get('first_name');?>
                     <br /><?php echo $session->get('last_name');?><span class="comma">,</span>
                     <small>
                        <?php
                        foreach($professions as $each)
                        {
                           if($profession == $each['id'])
                           { 
                              echo $each['items_name'];
                           }
                        }
                     ?>
                     </small>
                  </h1>
               </div>

               <article>
                  <p>
                     <?= $yourself ?>
                  </p>
               </article><br>
            </section>
            <!-- Work experience section -->

            <section class="card_main_section">
               <div class="section1">
                  <h2 class="card_view_section">About Yourself</h2>
                  <h3 class="card_view_subsection">Basic Information</h3>

                  <article class="cv-job">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-input">
                                 <label for="age" class="card_information">BirthDay</label>
                                 <text><?= $dob ?></text>
                              </div>
                              <div class="form-input">
                                 <label for="Complexion" class="card_information">Complexion</label>
                                 <text>
                                    <?php
                                    foreach($complexions as $each)
                                    {
                                       if($complexion == $each['id'])
                                       { 
                                          echo $each['items_name'];
                                       }
                                    }
                                 ?>
                                 </text>
                              </div>
                              <div class="form-input">
                                 <label for="Height" class="card_information">Height</label>
                                 <text>
                                    <?php
                                    foreach($heights as $each)
                                    {
                                       if($height == $each['id'])
                                       { 
                                          echo $each['items_name'];
                                       }
                                    }
                                 ?>
                                 </text>
                              </div>
                              <div class="form-input">
                                 <label for="Special Cases" class="card_information"> Special Cases</label>
                                 <text>
                                    <?php
                                    foreach($disabiliti as $each)
                                    {
                                       if($disabilities == $each['id'])
                                       { 
                                          echo $each['items_name'];
                                       }
                                    }
                                 ?>
                                 </text>
                              </div>
                           </div>

                           <div class="col-md-6">
                              <div class="form-input">
                                 <label for="Marital Status" class="card_information">Marital Status</label>
                                 <text><?php
                                    foreach($maritalstatus as $each)
                                    {
                                       if($marital_status == $each['id'])
                                       { 
                                          echo $each['items_name'];
                                       }
                                    }
                                    ?>
                                 </text>
                              </div>
                              <div class="form-input">
                                 <label for="Children" class="card_information">Children</label>
                                 <text>
                                    <?php
                                    foreach($childrens as $each)
                                    {
                                       if($children == $each['id'])
                                       { 
                                          echo $each['items_name'];
                                       }
                                    }
                                 ?>
                                 </text>
                              </div>
                              <div class="form-input">
                                 <label for="Body Type" class="card_information">Body
                                    Type</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                                 <text>
                                    <?php
                                    foreach($body_types as $each)
                                    {
                                       if($body_type == $each['id'])
                                       { 
                                          echo $each['items_name'];
                                       }
                                    }
                                 ?>
                                 </text>
                              </div>
                              <div class="form-input">
                                 <label for="Blood Group" class="card_information">Blood
                                    Group</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                                 <text>
                                    <?php
                                    foreach($blood_group as $each)
                                    {
                                       if($blood == $each['id'])
                                       { 
                                          echo $each['items_name'];
                                       }
                                    }
                                 ?>
                                 </text>
                              </div>
                           </div>
                        </div>
                     </div>
                  </article>
               </div>

               <div class="section2">
                  <h3 class="card_view_subsection">Religious & Social Background</h3>

                  <article class="cv-job">
                     <div class="container">
                        <div class="row">

                           <div class="col-md-6">
                              <div class="form-input">
                                 <label for="Religion" class="card_information">Religion</label>
                                 <text>
                                    <?php
                                       foreach($communitys as $each)
                                       {
                                          if($community == $each['id'])
                                          { 
                                             echo $each['items_name'];
                                          }
                                       }
                                    ?>
                                 </text>
                              </div>
                              <div class="form-input">
                                 <label for="Family Values" class="card_information">Family Values</label>
                                 <text>
                                    <?php
                                       foreach($family_values as $each)
                                       {
                                          if($family_value == $each['id'])
                                          { 
                                             echo $each['items_name'];
                                          }
                                       }
                                    ?>
                                 </text>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-input">
                                 <label for="Mother Tongue" class="card_information">Mother Tongue</label>
                                 <text>
                                    <?php
                                       foreach($mother_tongues as $each)
                                       {
                                          if($mother_tongue == $each['id'])
                                          { 
                                             echo $each['items_name'];
                                          }
                                       }
                                    ?>
                                 </text>
                              </div>
                           </div>
                        </div>
                     </div>
                  </article>
               </div>

               <div class="section3">
                  <h3 class="card_view_subsection">Cultural Background</h3>

                  <article class="cv-job">
                     <div class="container">
                        <div class="row">

                           <div class="col-md-6">
                              <div class="form-input">
                                 <label for="Country of Birth" class="card_information">Country of Birth</label>
                                 <text>
                                    <?= $country_origin ?>
                                 </text>
                              </div>
                              <div class="form-input">
                                 <label for="Can speak" class="card_information">Can speak</label>
                                 <text>
                                    <?= $can_speak ?>
                                 </text>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-input">
                                 <label for="Personal Values" class="card_information">Personal Values</label>
                                 <text>
                                    <?php
                                    foreach($personal_values as $each)
                                    {
                                       if($personal_value == $each['id'])
                                       { 
                                          echo $each['items_name'];
                                       }
                                    }
                                 ?>
                                 </text>
                              </div>
                           </div>
                        </div>
                     </div>
                  </article>
               </div>

               <div class="section4">
                  <h3 class="card_view_subsection">Education & Career</h3>

                  <article class="cv-job">
                     <div class="container">
                        <div class="row">

                           <div class="col-md-6">
                              <div class="form-input">
                                 <label for="Education" class="card_information">Education</label>
                                 <text>
                                    <?php
                                       foreach($educations as $each)
                                       {
                                          if($education == $each['id'])
                                          { 
                                             echo $each['items_name'];
                                          }
                                       }
                                    ?>
                                 </text>
                              </div>
                              <div class="form-input">
                                 <label for="Profession" class="card_information">Profession</label>
                                 <text>
                                    <?php
                                       foreach($professions as $each)
                                       {
                                          if($profession == $each['id'])
                                          { 
                                             echo $each['items_name'];
                                          }
                                       }
                                    ?>
                                 </text>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-input">
                                 <label for="Annual Income" class="card_information">Annual Income</label>
                                 <text>
                                    <?php
                                       foreach($annual_incomes as $each)
                                       {
                                          if($annual_income == $each['id'])
                                          { 
                                             echo $each['items_name'];
                                          }
                                       }
                                    ?>
                                 </text>
                              </div>
                           </div>
                        </div>
                     </div>
                  </article>
               </div>

               <div class="section5">
                  <h3 class="card_view_subsection">Lifestyle</h3>

                  <article class="cv-job">
                     <div class="container">
                        <div class="row">

                           <div class="col-md-6">
                              <div class="form-input">
                                 <label for="Diet" class="card_information">Diet</label>
                                 <text>
                                    <?php
                                       foreach($diets as $each)
                                       {
                                          if($diet == $each['id'])
                                          { 
                                             echo $each['items_name'];
                                          }
                                       }
                                    ?>
                                 </text>
                              </div>
                              <div class="form-input">
                                 <label for="Smoke" class="card_information">Smoke</label>
                                 <text>
                                    <?php
                                       foreach($smokes as $each)
                                       {
                                          if($smoke == $each['id'])
                                          { 
                                             echo $each['items_name'];
                                          }
                                       }
                                    ?>
                                 </text>
                              </div>
                           </div>

                           <div class="col-md-6">
                              <div class="form-input">
                                 <label for="Drink" class="card_information">Drink</label>
                                 <text>
                                    <?php
                                       foreach($drinks as $each)
                                       {
                                          if($drink == $each['id'])
                                          { 
                                             echo $each['items_name'];
                                          }
                                       }
                                    ?>
                                 </text>
                              </div>
                           </div>
                        </div>
                     </div>
                  </article>
               </div>

               <div class="section6">
                  <h3 class="card_view_subsection">Location</h3>

                  <article class="cv-job">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-input">
                                 <label for="parmanent_resident" class="card_information">Parmanent
                                    Resident</label>
                                 <text><?= $parmanent_resident ?></text>
                              </div>
                              <div class="form-input">
                                 <label for="district" class="card_information">District</label>
                                 <text>
                                    <?php
                                    foreach($districts as $each)
                                    {
                                       if($district == $each['id'])
                                       { 
                                          echo $each['items_name'];
                                       }
                                    }
                                 ?>
                                    <text>
                              </div>
                           </div>

                           <div class="col-md-6">
                              <div class="form-input">
                                 <label for="zip_code" class="card_information">Zip Code</label>
                                 <text><?= $zip_code ?></text>
                              </div>
                           </div>
                        </div>
                     </div>
                  </article>
               </div>

               <div class="section7">
                  <h3 class="card_view_subsection">Hobbies, Interests & more</h3>

                  <article class="cv-job">
                     <div class="container">
                        <div class="row">

                           <div class="col-md-6">
                              <div class="form-input">
                                 <label for="interest" class="card_information">Interest</label>
                                 <text><?= $activity['interest']; ?></text>
                              </div>
                              <div class="form-input">
                                 <label for="Favorite Music" class="card_information">Favorite Music</label>
                                 <text><?= $activity['music']; ?></text>
                              </div>
                              <div class="form-input">
                                 <label for="Favorite Reads" class="card_information">Favorite Reads</label>
                                 <text><?= $activity['reads']; ?></text>
                              </div>
                           </div>

                           <div class="col-md-6">
                              <div class="form-input">
                                 <label for="Preferred Movies" class="card_information">Preferred Movies</label>
                                 <text><?= $activity['movies']; ?></text>
                              </div>
                              <div class="form-input">
                                 <label for="Favorite Cooking" class="card_information">Favorite Cooking</label>
                                 <text><?= $activity['cooking']; ?></text>
                              </div>
                              <div class="form-input">
                                 <label for="dress_style" class="card_information">Dress Style</label>
                                 <text><?= $activity['dress_style']; ?></text>
                              </div>

                           </div>

                        </div>
                     </div>
                  </article>
               </div>
            </section>
            <section class="card_main_section">
               <div class="section8">
                  <h2 class="card_view_section">Family Details</h2>
                  <h3 class="card_view_subsection">Family Details</h3>

                  <article class="cv-job">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-input">
                                 <label for="Father"
                                    class="card_information">Father</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                                 <text>
                                    <?php
                                    foreach($fathers as $each)
                                    {
                                       // dd( $each);
                                       //    exit();
                                       if($father == $each['id'])
                                       { 
                                          echo $each['items_name'];
                                       }
                                    }
                                 ?>
                                 </text>
                              </div>

                              <div class="form-input">
                                 <label for="Brother(s)" class="card_information">Brother(s)</label>&emsp;&emsp;
                                 <text>
                                    <?php
                                    foreach($no_of_brothers as $each)
                                    {
                                       if($no_of_brother == $each['id'])
                                       { 
                                          echo $each['items_name'];
                                       }
                                    }
                                 ?>
                                 </text>
                              </div>
                              <div class="form-input">
                                 <label for="Sister(s)" class="card_information">Whom Brother(s) <br>
                                    Married</label>&emsp;&emsp;
                                 <text>
                                    <?php
                                    foreach($whom_brother_marrieded as $each)
                                    {
                                       if($whom_brother_married == $each['id'])
                                       { 
                                          echo $each['items_name'];
                                       }
                                    }
                                 ?>
                                 </text>
                              </div>
                           </div>

                           <div class="col-md-6">
                              <div class="form-input">
                                 <label for="Mother" class="card_information">Mother</label>&emsp;&emsp;
                                 <text>
                                    <?php
                                    foreach($mothers as $each)
                                    {
                                       if($mother == $each['id'])
                                       { 
                                          echo $each['items_name'];
                                       }
                                    }
                                 ?>
                                 </text>
                              </div>
                              <div class="form-input">
                                 <label for="Sister(s)"
                                    class="card_information">Sister(s)</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                                 <text>
                                    <?php
                                    foreach($no_of_sisters as $each)
                                    {
                                       if($no_of_sister == $each['id'])
                                       { 
                                          echo $each['items_name'];
                                       }
                                    }
                                 ?>
                                 </text>
                              </div>
                              <div class="form-input">
                                 <label for="Sister(s)" class="card_information">Whom Sister(s)
                                    Married</label>&emsp;&emsp;
                                 <text>
                                    <?php
                                    foreach($whom_sister_marrieded as $each)
                                    {
                                       if($whom_sister_married == $each['id'])
                                       { 
                                          echo $each['items_name'];
                                       }
                                    }
                                 ?>
                                 </text>
                              </div>

                           </div>
                        </div>
                     </div>
                  </article>
               </div>
            </section>
            <section class="card_main_section">
               <div class="section9">
                  <h2 class="card_view_section">Partner Preference</h2>
                  <h3 class="card_view_subsection">Basic Information</h3>

                  <article class="cv-job">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-input">
                                 <label for="age" class="card_information">Age
                                    Range</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                                 <text>
                                    <?php
                                       $array =  $partner_preference['age_ranges'];
                                       $id = $partner_preference['age_range_from'];
                                          foreach($array as $each)
                                          {
                                             if($id == $each['id'])
                                             { 
                                                echo $each['items_name'];
                                             }
                                          }
                                    ?>
                                    <label for="">To </label>

                                    <?php
                                       $array =  $partner_preference['age_ranges'];
                                       $id = $partner_preference['age_range_to'];
                                          foreach($array as $each)
                                          {
                                             if($id == $each['id'])
                                             { 
                                                echo $each['items_name'];
                                             }
                                          }
                                    ?>
                                 </text>
                              </div>
                              <div class="form-input">
                                 <label for="Complexion" class="card_information">Complexion</label>&emsp;&emsp;
                                 <text>
                                    <?php
                                       $array =  $partner_preference['complexions'];
                                       $id = $partner_preference['complexion'];
                                          foreach($array as $each)
                                          {
                                             if($id == $each['id'])
                                             { 
                                                echo $each['items_name'];
                                             }
                                          }
                                    ?>
                                 </text>
                              </div>

                              <div class="form-input">
                                 <label for="Family Value" class="card_information">Family
                                    Value</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                                 <text>
                                    <?php
                                       $array =  $partner_preference['family_values'];
                                       $id = $partner_preference['family_value'];
                                          foreach($array as $each)
                                          {
                                             if($id == $each['id'])
                                             { 
                                                echo $each['items_name'];
                                             }
                                          }
                                    ?>
                                 </text>
                              </div>
                              <div class="form-input">
                                 <label for="mother_tongues" class="card_information">Mother
                                    Tongues</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                                 <text>
                                    <?php
                                       $array =  $partner_preference['mother_tongues'];
                                       $id = $partner_preference['mother_tongue'];
                                          foreach($array as $each)
                                          {
                                             if($id == $each['id'])
                                             { 
                                                echo $each['items_name'];
                                             }
                                          }
                                    ?>
                                 </text>
                              </div>
                           </div>

                           <div class="col-md-6">
                              <div class="form-input">
                                 <label for="Height" class="card_information">Height
                                    Range</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                                 <text>
                                    <?php
                                       $array =  $partner_preference['height_ranges'];
                                       $id = $partner_preference['height_range_from'];
                                          foreach($array as $each)
                                          {
                                             if($id == $each['id'])
                                             { 
                                                echo $each['items_name'];
                                             }
                                          }
                                    ?>
                                    <label for="">To</label>
                                    <?php
                                       $array =  $partner_preference['height_ranges'];
                                       $id = $partner_preference['height_range_to'];
                                          foreach($array as $each)
                                          {
                                             if($id == $each['id'])
                                             { 
                                                echo $each['items_name'];
                                             }
                                          }
                                    ?>
                                 </text>
                              </div>
                              <div class="form-input">
                                 <label for="Marital Status" class="card_information">Marital Status</label>&emsp;&emsp;
                                 <text>
                                    <?php
                                       $array =  $partner_preference['marital_statuss'];
                                       $id = $partner_preference['marital_status'];
                                          foreach($array as $each)
                                          {
                                             if($id == $each['id'])
                                             { 
                                                echo $each['items_name'];
                                             }
                                          }
                                    ?>
                                    <text>
                              </div>
                              <div class="form-input">
                                 <label for="Children"
                                    class="card_information">Children</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                                 <text>
                                    <?php
                                       $array =  $partner_preference['childrens'];
                                       $id = $partner_preference['children'];
                                          foreach($array as $each)
                                          {
                                             if($id == $each['id'])
                                             { 
                                                echo $each['items_name'];
                                             }
                                          }
                                    ?>
                                    <text>
                              </div>
                              <div class="form-input">
                                 <label for="Body Type" class="card_information">Body
                                    Type</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                                 <text>
                                    <?php
                                       $array =  $partner_preference['body_types'];
                                       $id = $partner_preference['body_type'];
                                          foreach($array as $each)
                                          {
                                             if($id == $each['id'])
                                             { 
                                                echo $each['items_name'];
                                             }
                                          }
                                    ?>
                                    <text>
                              </div>

                           </div>
                        </div>
                     </div>
                  </article>
               </div>
               <div class="section-10">
                  <h3 class="card_view_subsection">Education & Career</h3>

                  <article class="cv-job">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-input">
                                 <label for="Education"
                                    class="card_information">Education</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                                 <text>
                                    <?php
                                       $array =  $partner_preference['educations'];
                                       $id = $partner_preference['education'];
                                          foreach($array as $each)
                                          {
                                             if($id == $each['id'])
                                             { 
                                                echo $each['items_name'];
                                             }
                                          }
                                    ?>
                              </div>
                              <div class="form-input">
                                 <label for="professions"
                                    class="card_information">Profession</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                                 <text>
                                    <?php
                                       $array =  $partner_preference['professions'];
                                       $id = $partner_preference['profession'];
                                          foreach($array as $each)
                                          {
                                             if($id == $each['id'])
                                             { 
                                                echo $each['items_name'];
                                             }
                                          }
                                    ?>
                                    <text>
                              </div>

                           </div>
                        </div>
                     </div>
                  </article>
               </div>
            </section>
            <div class="cv-slogan">
               Have a
               <strong>nice day</strong>!
            </div>

         </div>
      </main>
   </div>
<?= $this->endSection()?>