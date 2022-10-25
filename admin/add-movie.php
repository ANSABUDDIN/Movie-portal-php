<?php
session_start(); 
if(!isset($_SESSION['admin']))
{
  header("location:login.php");
}
include './header.php';
include("../config.php"); 


    if(isset($_GET['delete']))
    {
        $id = $_GET['delete'];
        $result = mysqli_query($con,"DELETE FROM `ebook` WHERE id='$id'");
        $_SESSION['error'] = " Delete Successfully";   
    }?>

<main id="content" role="main" class="main">
  <!-- Content -->
  <div class="content container-fluid">

    <!-- Step Form -->
    <form action="add-movie-db.php" method="post"  class="js-step-form py-md-5" enctype="multipart/form-data" data-hs-step-form-options='{
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


                <h1 class="page-header-title">Add Movie</h1>
              </div>

            </div>
            <!-- End Row -->
          </div>
          
          <div id="addUserStepFormContent">

            <div id="addUserStepProfile" class="card card-lg active">

              <div class="card-body">
                <div class="row mb-4">
                  <label for="firstNameLabel" class="col-sm-3 col-form-label form-label">Movie Title</label>
                  <div class="col-sm-9">
                    <div class="input-group input-group-sm-vertical">
                      <input type="text" class="form-control" name="title" id="firstNameLabel"
                        placeholder="Movie Title">
                    </div>
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="emailLabel" class="col-sm-3 col-form-label form-label">Description</label>

                  <div class="col-sm-9">
                    <!-- <textarea name="description"  class="form-control"  placeholder="Description" id="emailLabel" cols="30" rows="8"></textarea> -->
                    <input type="text" class="form-control"  name="description" placeholder="Description" id="emailLabel" >
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="emailLabel" class="col-sm-3 col-form-label form-label">Movie Star</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="movie_star" id="emailLabel" placeholder="Movie star">
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="emailLabel" class="col-sm-3 col-form-label form-label">Director name</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="director_name" id="emailLabel" placeholder="Director name star">
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="emailLabel" class="col-sm-3 col-form-label form-label">Category</label>

                  <div class="col-sm-9">
                    <select class="form-control" name="category">
                      <option value="Movie">Movie</option>
                      <option value="Drama">Drama</option>
                      <option value="Series">Series</option>
                    </select>
                    <!-- <input type="text" class="form-control" name="category" id="emailLabel" placeholder="Category"> -->
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="emailLabel" class="col-sm-3 col-form-label form-label">Movie Link</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="movie_link" id="emailLabel" placeholder="Movie link">
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="emailLabel" class="col-sm-3 col-form-label form-label">Download Link</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="download_link" id="emailLabel" placeholder="Download link">
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="emailLabel" class="col-sm-3 col-form-label form-label">Trailer Link</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="trailer_link" id="emailLabel" placeholder="Trailer link">
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="emailLabel" class="col-sm-3 col-form-label form-label">Release Year</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="release_year" id="emailLabel" placeholder="Release Year ">
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="emailLabel" class="col-sm-3 col-form-label form-label">Country </label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="country" id="emailLabel" placeholder="Country">
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="emailLabel" class="col-sm-3 col-form-label form-label"> Image</label>

                  <div class="col-sm-9">
                    <input type="file" class="form-control" name="file" id="emailLabel" placeholder="Duration">
                  </div>
                </div>
              </div>
 
              <div class="card-footer d-flex justify-content-end align-items-center">
                <input type="submit" name="submit" class="btn btn-primary" data-hs-step-form-next-options='{
                            "targetSelector": "#addUserStepBillingAddress"
                          }'>
                  
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


                    <div class="mb-4">
                      <input type="text" class="form-control" name="city" id="cityLabel" placeholder="City"
                        aria-label="City">
                    </div>

                    <input type="text" class="form-control" name="state" id="stateLabel" placeholder="State"
                      aria-label="State">
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="row mb-4">
                  <label for="addressLine1Label" class="col-sm-3 col-form-label form-label">Address line 1</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="addressLine1" id="addressLine1Label"
                      placeholder="Your address" aria-label="Your address">
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="js-add-field row mb-4" data-hs-add-field-options='{
                          "template": "#addAddressFieldTemplate",
                          "container": "#addAddressFieldContainer",
                          "defaultCreated": 0
                        }'>
                  <label for="addressLine2Label" class="col-sm-3 col-form-label form-label">Address line 2 <span
                      class="form-label-secondary">(Optional)</span></label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="addressLine2" id="addressLine2Label"
                      placeholder="Your address" aria-label="Your address">

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
                  <label for="zipCodeLabel" class="col-sm-3 col-form-label form-label">Zip code <i
                      class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                      title="You can find your code in a postal address."></i></label>

                  <div class="col-sm-9">
                    <input type="text" class="js-input-mask form-control" name="zipCode" id="zipCodeLabel"
                      placeholder="Your zip code" aria-label="Your zip code" data-hs-mask-options='{
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
              <img class="img-fluid mb-3" src="assets/svg/illustrations/oc-hi-five.svg" alt="Image Description"
                data-hs-theme-appearance="default" style="max-width: 15rem;">
              <img class="img-fluid mb-3" src="assets/svg/illustrations-light/oc-hi-five.svg" alt="Image Description"
                data-hs-theme-appearance="dark" style="max-width: 15rem;">

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
  

<?php include './footer.php'; ?>