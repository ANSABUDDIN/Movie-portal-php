<?php
session_start(); 
if(!isset($_SESSION['admin']))
{
  header("location:login.php");
}
include './header.php';
include("../config.php"); 

if(isset($_GET['approve']))
    {
        $id = $_GET['approve'];
        $result = mysqli_query($con,"UPDATE ebook_order SET `status`='1' WHERE id='$id'");
        $_SESSION['message'] = " Approve Successfully";   
    }
    if(isset($_GET['delete']))
    {
        $id = $_GET['delete'];
        $result = mysqli_query($con,"DELETE FROM `ebook_order` WHERE id='$id'");
        $_SESSION['error'] = " Delete Successfully";   
    }?>


  <main id="content" role="main" class="main">
    <!-- Content -->
    <?php if(isset($_SESSION['message'])){?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong></strong> <?php echo $_SESSION['message']; unset($_SESSION['message']); ?>.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      <?php } ?>
      <?php if(isset($_SESSION['error'])){?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong> </strong> <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      <?php } ?>
    <div class="content container-fluid">
      <!-- Step Form -->
      <form action="updatepassword-db.php" method="post" class="js-step-form py-md-5" data-hs-step-form-options='{
              "progressSelector": "#addUserStepFormProgress",
              "stepsSelector": "#addUserStepFormContent",
              "endSelector": "#addUserFinishBtn",
              "isValidate": false
            }'>
        <div class="row justify-content-lg-center">
          <div class="col-lg-12">
        

          <div class="page-header">
      <div class="row align-items-end">
        <div class="col-sm mb-2 mb-sm-0">


          <h1 class="page-header-title">Change Password </h1>
        </div>
        
      </div>
      <!-- End Row -->
    </div>
            <div id="addUserStepFormContent">
     
              <div id="addUserStepProfile" class="card card-lg active">
     
                <div class="card-body">
                <div class="row mb-4">
                    <label for="firstNameLabel" class="col-sm-3 col-form-label form-label">Old  Password :</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-sm-vertical">
                        <input type="password" class="form-control" name="old_pass" id="firstNameLabel" placeholder="New Password" >
                      </div>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <label for="firstNameLabel" class="col-sm-3 col-form-label form-label">New  Password :</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-sm-vertical">
                        <input type="password" class="form-control" name="new_pass" id="firstNameLabel" placeholder="New Password" >
                      </div>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <label for="emailLabel" class="col-sm-3 col-form-label form-label">Confirm Password :</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" name="re_pass" id="emailLabel" placeholder="Confirm Password" >
                    
                    </div>
                  </div>
                </div>
                <!-- End Body -->

                <!-- Footer -->
                <div class="card-footer d-flex justify-content-end align-items-center">
                  <input type="submit" name="submit" class="btn btn-primary" data-hs-step-form-next-options='{
                            "targetSelector": "#addUserStepBillingAddress"
                          }' value="Update Password">                
                </div>
                <!-- End Footer -->
              </div>
              <!-- End Card -->

              <div id="addUserStepBillingAddress" class="card card-lg" style="display: none;">
                <!-- Body -->
                <div class="card-body">
                  <!-- Form -->
                  <div class="row mb-4">
                    <label for="locationLabel" class="col-sm-3 col-form-label form-label">Location</label>

                    <div class="col-sm-9">
                      <!-- Select -->
                      
                      <!-- End Select -->

                      <div class="mb-4">
                        <input type="text" class="form-control" name="city" id="cityLabel" placeholder="City" aria-label="City">
                      </div>

                      <input type="text" class="form-control" name="state" id="stateLabel" placeholder="State" aria-label="State">
                    </div>
                  </div>
                  <!-- End Form -->

                  <!-- Form -->
                  <div class="row mb-4">
                    <label for="addressLine1Label" class="col-sm-3 col-form-label form-label">Address line 1</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="addressLine1" id="addressLine1Label" placeholder="Your address" aria-label="Your address">
                    </div>
                  </div>
                  <!-- End Form -->

                  <!-- Form -->
                  <div class="js-add-field row mb-4" data-hs-add-field-options='{
                          "template": "#addAddressFieldTemplate",
                          "container": "#addAddressFieldContainer",
                          "defaultCreated": 0
                        }'>
                    <label for="addressLine2Label" class="col-sm-3 col-form-label form-label">Address line 2 <span class="form-label-secondary">(Optional)</span></label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="addressLine2" id="addressLine2Label" placeholder="Your address" aria-label="Your address">

                      <!-- Container For Input Field -->
                      <div id="addAddressFieldContainer"></div>

                      <a href="javascript:;" class="js-create-field form-link">
                        <i class="bi-plus"></i> Add address
                      </a>
                    </div>
                  </div>
                  <!-- End Form -->

                  <!-- Form -->
                  <div class="row">
                    <label for="zipCodeLabel" class="col-sm-3 col-form-label form-label">Zip code <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="You can find your code in a postal address."></i></label>

                    <div class="col-sm-9">
                      <input type="text" class="js-input-mask form-control" name="zipCode" id="zipCodeLabel" placeholder="Your zip code" aria-label="Your zip code" data-hs-mask-options='{
                               "mask": "AA0 0AA"
                             }'>
                    </div>
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Body -->

                <!-- Footer -->
                <div class="card-footer d-flex align-items-center">
                  <button type="button" class="btn btn-ghost-secondary" data-hs-step-form-prev-options='{
                       "targetSelector": "#addUserStepProfile"
                     }'>
                    <i class="bi-chevron-left"></i> Previous step
                  </button>

                  <div class="ms-auto">
                    <button type="button" class="btn btn-primary" data-hs-step-form-next-options='{
                              "targetSelector": "#addUserStepConfirmation"
                            }'>
                      Next <i class="bi-chevron-right"></i>
                    </button>
                  </div>
                </div>
                <!-- End Footer -->
              </div>

              <div id="addUserStepConfirmation" class="card card-lg" style="display: none;">
                <!-- Profile Cover -->
                <div class="profile-cover">
                  <div class="profile-cover-img-wrapper">
                    <img class="profile-cover-img" src="assets/img/1920x400/img1.jpg" alt="Image Description">
                  </div>
                </div>
                <!-- End Profile Cover -->

                <!-- Avatar -->
                <div class="avatar avatar-xxl avatar-circle avatar-border-lg profile-cover-avatar">
                  <img class="avatar-img" src="assets/img/160x160/img9.jpg" alt="Image Description">
                </div>
                <!-- End Avatar -->

                <!-- Body -->
                <div class="card-body">
                  <dl class="row">
                    <dt class="col-sm-6 text-sm-end">Full name:</dt>
                    <dd class="col-sm-6">Ella Lauda</dd>

                    <dt class="col-sm-6 text-sm-end">Email:</dt>
                    <dd class="col-sm-6">ella@site.com</dd>

                    <dt class="col-sm-6 text-sm-end">Phone:</dt>
                    <dd class="col-sm-6">+1 (609) 972-22-22</dd>

                    <dt class="col-sm-6 text-sm-end">Organization:</dt>
                    <dd class="col-sm-6">Htmlstream</dd>

                    <dt class="col-sm-6 text-sm-end">Department:</dt>
                    <dd class="col-sm-6">-</dd>

                    <dt class="col-sm-6 text-sm-end">Account type:</dt>
                    <dd class="col-sm-6">Individual</dd>

                    <dt class="col-sm-6 text-sm-end">Country:</dt>
                    <dd class="col-sm-6"><img class="avatar avatar-xss avatar-circle me-1" src="assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Great Britain Flag"> United Kingdom</dd>

                    <dt class="col-sm-6 text-sm-end">City:</dt>
                    <dd class="col-sm-6">London</dd>

                    <dt class="col-sm-6 text-sm-end">State:</dt>
                    <dd class="col-sm-6">-</dd>

                    <dt class="col-sm-6 text-sm-end">Address line 1:</dt>
                    <dd class="col-sm-6">45 Roker Terrace, Latheronwheel</dd>

                    <dt class="col-sm-6 text-sm-end">Address line 2:</dt>
                    <dd class="col-sm-6">-</dd>

                    <dt class="col-sm-6 text-sm-end">Zip code:</dt>
                    <dd class="col-sm-6">KW5 8NW</dd>
                  </dl>
                  <!-- End Row -->
                </div>
                <!-- End Body -->

                <!-- Footer -->
                <div class="card-footer d-sm-flex align-items-sm-center">
                  <button type="button" class="btn btn-ghost-secondary mb-2 mb-sm-0" data-hs-step-form-prev-options='{
                       "targetSelector": "#addUserStepBillingAddress"
                     }'>
                    <i class="bi-chevron-left"></i> Previous step
                  </button>

                  <div class="ms-auto">
                    <button type="button" class="btn btn-white me-2">Save in drafts</button>
                    <button id="addUserFinishBtn" type="button" class="btn btn-primary">Add user</button>
                  </div>
                </div>
                <!-- End Footer -->
              </div>
            </div>
            <!-- End Content Step Form -->

            <!-- Message Body -->
            <div id="successMessageContent" style="display:none;">
              <div class="text-center">
                <img class="img-fluid mb-3" src="assets/svg/illustrations/oc-hi-five.svg" alt="Image Description" data-hs-theme-appearance="default" style="max-width: 15rem;">
                <img class="img-fluid mb-3" src="assets/svg/illustrations-light/oc-hi-five.svg" alt="Image Description" data-hs-theme-appearance="dark" style="max-width: 15rem;">

                <div class="mb-4">
                  <h2>Successful!</h2>
                  <p>New <span class="fw-semibold text-dark">Ella Lauda</span> user has been successfully created.</p>
                </div>

                <div class="d-flex justify-content-center">
                  <a class="btn btn-white me-3" href="users.html">
                    <i class="bi-chevron-left ms-1"></i> Back to users
                  </a>
                  <a class="btn btn-primary" href="users-add-user.html">
                    <i class="bi-person-plus-fill me-1"></i> Add new user
                  </a>
                </div>
              </div>
            </div>
            <!-- End Message Body -->
          </div>
        </div>
        <!-- End Row -->
      </form>
      <!-- End Step Form -->
    </div>
    <!-- End Content -->

    <!-- Footer -->

   

    <!-- End Footer -->
  </main>

  <?php include './footer.php'; ?>