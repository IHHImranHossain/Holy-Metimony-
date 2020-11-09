<?= $this->extend('layout/user_home_layout')?>
<?= $this->section('content')?>

<head>
   <meta charset="utf-8" />
   <title>
      Profile Biodata
   </title>

   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true">

   <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet" type="text/css" />
   <link href="public/user_cv/dist/styles/style.css" rel="stylesheet" type="text/css" />
   <meta name="msapplication-TileColor" content="#ff5050">
   <meta name="msapplication-TileImage" content="public/user_cv/dist/icons/mstile-144x144.png">
</head>
<body class="cv-boxed background-2 theme-red">
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

            <div class="cv-author">
               <div class="cv-photo side">
                  <img src="public/assets/upload/<?php echo $session->get('upload_image');?>"
                     class="img-circle elevation-2" alt="User Image" style="height: 14.1rem;
                     width: 12.1rem;">
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

            <!-- Work experience section -->

            <section>
               <div class="section1">
                  <h2 style="font-weight: bolder; border-bottom: 2px solid black">About Yourself</h2>
                  <h3>Basic Information</h3>

                  <article class="cv-job">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-input">
                                 <label for="age">BirthDay</label>
                                 <text><?= $dob ?></text>
                              </div>
                              <div class="form-input">
                                 <label for="Complexion">Complexion</label>
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
                                    <text>
                              </div>
                              <div class="form-input">
                                 <label for="Height">Height</label>
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
                                    <text>
                              </div>
                              <div class="form-input">
                                 <label for="Special Cases">Special Cases</label>
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
                                    <text>
                              </div>
                           </div>

                           <div class="col-md-6">
                              <div class="form-input">
                                 <label for="Marital Status">Marital Status</label>
                                 <text><?php
                                    foreach($maritalstatus as $each)
                                    {
                                       if($marital_status == $each['id'])
                                       { 
                                          echo $each['items_name'];
                                       }
                                    }
                                    ?>
                                    <text>
                              </div>
                              <div class="form-input">
                                 <label for="Children">Children</label>
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
                                    <text>
                              </div>
                              <div class="form-input">
                                 <label for="Body Type">Body Type</label>&emsp;&emsp;&emsp;&emsp;&emsp;
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
                                    <text>
                              </div>
                              <div class="form-input">
                                 <label for="Blood Group">Blood Group</label>&emsp;&emsp;&emsp;&emsp;&emsp;
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
                                    <text>
                              </div>
                           </div>
                        </div>
                     </div>
                  </article>
               </div>

               <div class="section2">
                  <h3>Religious & Social Background</h3>

                  <article class="cv-job">
                     <div class="container">
                        <div class="row">

                           <div class="col-md-6">
                              <div class="form-input">
                                 <p for="Religion">Religion</p>
                              </div>
                              <div class="form-input">
                                 <p for="Family Values">Family Values</p>
                              </div>
                              <div class="form-input">
                                 <p for="Mother Tongue">Mother Tongue</p>
                              </div>

                           </div>

                           <div class="col-md-6">
                              <div class="form-input">
                                 <p>
                                    <?php
                                    foreach($communitys as $each)
                                    {
                                       if($community == $each['id'])
                                       { 
                                          echo $each['items_name'];
                                       }
                                    }
                                 ?>
                                 </p>
                              </div>
                              <div class="form-input">
                                 <p>
                                    <?php
                                    foreach($family_values as $each)
                                    {
                                       if($family_value == $each['id'])
                                       { 
                                          echo $each['items_name'];
                                       }
                                    }
                                 ?>
                                 </p>
                              </div>
                              <div class="form-input">
                                 <p>
                                    <?php
                                    foreach($mother_tongues as $each)
                                    {
                                       if($mother_tongue == $each['id'])
                                       { 
                                          echo $each['items_name'];
                                       }
                                    }
                                 ?>
                                 </p>
                              </div>
                           </div>

                        </div>
                     </div>
                  </article>
               </div>

               <div class="section3">
                  <h3>Cultural Background</h3>

                  <article class="cv-job">
                     <div class="container">
                        <div class="row">

                           <div class="col-md-6">
                              <div class="form-input">
                                 <p for="Country of Birth">Country of Birth</p>
                              </div>
                              <div class="form-input">
                                 <p for="Can speak">Can speak</p>
                              </div>
                              <div class="form-input">
                                 <p for="Personal Values">Personal Values</p>
                              </div>
                           </div>

                           <div class="col-md-6">
                              <div class="form-input">
                                 <p>
                                    <?= $country_origin ?>
                                 </p>
                              </div>
                              <div class="form-input">
                                 <p>
                                    <?= $can_speak ?>
                                 </p>
                              </div>
                              <div class="form-input">
                                 <p>
                                    <?php
                                    foreach($personal_values as $each)
                                    {
                                       if($personal_value == $each['id'])
                                       { 
                                          echo $each['items_name'];
                                       }
                                    }
                                 ?>
                                 </p>
                              </div>
                           </div>

                        </div>
                     </div>
                  </article>
               </div>

               <div class="section4">
                  <h3>Education & Career</h3>

                  <article class="cv-job">
                     <div class="container">
                        <div class="row">

                           <div class="col-md-6">
                              <div class="form-input">
                                 <p for="Education">Education</p>
                              </div>
                              <div class="form-input">
                                 <p for="Profession">Profession</p>
                              </div>
                              <div class="form-input">
                                 <p for="Annual Income">Annual Income</p>
                              </div>

                           </div>

                           <div class="col-md-6">
                              <div class="form-input">
                                 <p>
                                    <?php
                                    foreach($educations as $each)
                                    {
                                       if($education == $each['id'])
                                       { 
                                          echo $each['items_name'];
                                       }
                                    }
                                 ?>
                                 </p>
                              </div>
                              <div class="form-input">
                                 <p>
                                    <?php
                                    foreach($professions as $each)
                                    {
                                       if($profession == $each['id'])
                                       { 
                                          echo $each['items_name'];
                                       }
                                    }
                                 ?>
                                 </p>
                              </div>
                              <div class="form-input">
                                 <p>
                                    <?php
                                    foreach($annual_incomes as $each)
                                    {
                                       if($annual_income == $each['id'])
                                       { 
                                          echo $each['items_name'];
                                       }
                                    }
                                 ?>
                                 </p>
                              </div>
                           </div>

                        </div>
                     </div>
                  </article>
               </div>

               <div class="section5">
                  <h3>Lifestyle</h3>

                  <article class="cv-job">
                     <div class="container">
                        <div class="row">

                           <div class="col-md-6">
                              <div class="form-input">
                                 <p for="Diet">Diet</p>
                              </div>
                              <div class="form-input">
                                 <p for="Smoke">Smoke</p>
                              </div>
                              <div class="form-input">
                                 <p for="Drink">Drink</p>
                              </div>

                           </div>

                           <div class="col-md-6">
                              <div class="form-input">
                                 <p>
                                    <?php
                                    foreach($diets as $each)
                                    {
                                       if($diet == $each['id'])
                                       { 
                                          echo $each['items_name'];
                                       }
                                    }
                                 ?>
                                 </p>
                              </div>
                              <div class="form-input">
                                 <p>
                                    <?php
                                    foreach($smokes as $each)
                                    {
                                       if($smoke == $each['id'])
                                       { 
                                          echo $each['items_name'];
                                       }
                                    }
                                 ?>
                                 </p>
                              </div>
                              <div class="form-input">
                                 <p>
                                    <?php
                                    foreach($drinks as $each)
                                    {
                                       if($drink == $each['id'])
                                       { 
                                          echo $each['items_name'];
                                       }
                                    }
                                 ?>
                                 </p>
                              </div>
                           </div>

                        </div>
                     </div>
                  </article>
               </div>

               <div class="section6">
                  <h3>Location</h3>

                  <article class="cv-job">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-input">
                                 <label for="parmanent_resident">Parmanent
                                    Resident</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                                 <text><?= $parmanent_resident ?></text>
                              </div>
                              <div class="form-input">
                                 <label for="district">District</label>&emsp;&emsp;
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
                                 <label for="zip_code">Zip Code</label>&emsp;&emsp;
                                 <text><?= $zip_code ?></text>
                              </div>
                              <div class="form-input">
                                 <label for="Children">Children</label>&emsp;&emsp;&emsp;&emsp;&emsp;
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
                                    <text>
                              </div>
                           </div>
                        </div>
                     </div>
                  </article>
               </div>

               <div class="section7">
                  <h3>Hobbies, Interests & more</h3>

                  <article class="cv-job">
                     <div class="container">
                        <div class="row">

                           <div class="col-md-6">
                              <div class="form-input">
                                 <p for="interest">Interest</p>
                              </div>
                              <div class="form-input">
                                 <p for="Favorite Music">Favorite Music</p>
                              </div>
                              <div class="form-input">
                                 <p for="Favorite Reads">Favorite Reads</p>
                              </div>
                              <div class="form-input">
                                 <p for="Preferred Movies">Preferred Movies</p>
                              </div>
                              <div class="form-input">
                                 <p for="Favorite Cooking">Favorite Cooking</p>
                              </div>
                              <div class="form-input">
                                 <p for="dress_style">Dress Style</p>
                              </div>

                           </div>

                           <div class="col-md-6">
                              <div class="form-input">
                                 <p><?= $activity['interest']; ?></p>
                              </div>
                              <div class="form-input">
                                 <p><?= $activity['music']; ?></p>
                              </div>
                              <div class="form-input">
                                 <p><?= $activity['reads']; ?></p>
                              </div>
                              <div class="form-input">
                                 <p><?= $activity['movies']; ?></p>
                              </div>
                              <div class="form-input">
                                 <p><?= $activity['cooking']; ?></p>
                              </div>
                              <div class="form-input">
                                 <p><?= $activity['dress_style']; ?></p>
                              </div>

                           </div>

                        </div>
                     </div>
                  </article>
               </div>

               <div class="section8">
                  <h2 style="font-weight: bolder; border-bottom: 2px solid black">Family Details</h2>
                  <h3>Family Details</h3>

                  <article class="cv-job">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-input">
                                 <label for="Father">Father</label>&emsp;&emsp;&emsp;&emsp;&emsp;
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
                                    <text>
                              </div>

                              <div class="form-input">
                                 <label for="Brother(s)">Brother(s)</label>&emsp;&emsp;
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
                                    <text>
                              </div>
                              <div class="form-input">
                                 <label for="Sister(s)">Whom Brother(s) <br> Married</label>&emsp;&emsp;
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
                                 <label for="Mother">Mother</label>&emsp;&emsp;
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
                                    <text>
                              </div>
                              <div class="form-input">
                                 <label for="Sister(s)">Sister(s)</label>&emsp;&emsp;&emsp;&emsp;&emsp;
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
                                    <text>
                              </div>
                              <div class="form-input">
                                 <label for="Sister(s)">Whom Sister(s) Married</label>&emsp;&emsp;
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
            <section>
               <div class="section9">

                  <div class="section9">
                     <h2 style="font-weight: bolder; border-bottom: 2px solid black">Partner Preference</h2>
                     <h3>Basic Information</h3>

                     <article class="cv-job">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="form-input">
                                    <label for="age">Age Range</label>&emsp;&emsp;&emsp;&emsp;&emsp;
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
                                       to
                                       <text>
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
                                 </div>
                                 <div class="form-input">
                                    <label for="Complexion">Complexion</label>&emsp;&emsp;
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
                                       <text>
                                 </div>
                                 
                                 <div class="form-input">
                                    <label for="Family Value">Family Value</label>&emsp;&emsp;&emsp;&emsp;&emsp;
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
                                       <text>
                                 </div>
                                 <div class="form-input">
                                    <label for="mother_tongues">Mother Tongues</label>&emsp;&emsp;&emsp;&emsp;&emsp;
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
                                       <text>
                                 </div>
                              </div>

                              <div class="col-md-6">
                                 <div class="form-input">
                                    <label for="Height">Height Range</label>&emsp;&emsp;&emsp;&emsp;&emsp;
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
                                       to
                                       <text>
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
                                 </div>
                                 <div class="form-input">
                                    <label for="Marital Status">Marital Status</label>&emsp;&emsp;
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
                                    <label for="Children">Children</label>&emsp;&emsp;&emsp;&emsp;&emsp;
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
                                    <label for="Body Type">Body Type</label>&emsp;&emsp;&emsp;&emsp;&emsp;
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
               </div>
                  <div class="section-10">
                     <h3>Education & Career</h3>

                  <article class="cv-job">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-input">
                                 <label for="Education">Education</label>&emsp;&emsp;&emsp;&emsp;&emsp;
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
                                 <label for="professions">Profession</label>&emsp;&emsp;&emsp;&emsp;&emsp;
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
            <!-- Footer -->
            <!-- <footer class="cv-footer">
               Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit
               amet dui. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.
            </footer> -->

            <!-- Have a nice day slogan -->
            <div class="cv-slogan">
               Have a
               <strong>nice day</strong>!
            </div>
         </div>
      </main>
   </div>



   <!-- build:js scripts/combined.js -->

   <!-- endbuild -->

   
</body>

</html>
<?= $this->endSection()?>