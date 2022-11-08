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
        $result = mysqli_query($con,"DELETE FROM `movie` WHERE id='$id'");
        $_SESSION['error'] = " Delete Successfully";   
    }?>

<main id="content" role="main" class="main">

  <div class="content container-fluid">
    <!-- Step Form -->
    <form class="js-step-form py-md-5" data-hs-step-form-options='{
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
                <h1 class="page-header-title">Movies</h1>
              </div>
              <div class="col-sm-auto">
                <a class="btn btn-primary" href="add-movie.php">
                  <i class="bi-book me-1"></i> Add Movie
                </a>
              </div>
            </div>
            <!-- End Row -->
          </div>

          <div id="addUserStepFormContent">


            <div class="card">
              <!-- Header -->
              <div class="card-header card-header-content-md-between">
                <div class="mb-2 mb-md-0">
                  <form>
                    <!-- Search -->
                    <div class="input-group input-group-merge input-group-flush">
                      <div class="input-group-prepend input-group-text">
                        <i class="bi-search"></i>
                      </div>
                      <input id="datatableSearch" type="search" class="form-control" placeholder="Search users"
                        aria-label="Search users">
                    </div>
                    <!-- End Search -->
                  </form>
                </div>

                <div class="d-grid d-sm-flex justify-content-md-end align-items-sm-center gap-2">
                  <!-- Datatable Info -->
                  <div id="datatableCounterInfo" style="display: none;">
                    <div class="d-flex align-items-center">
                      <span class="fs-5 me-3">
                        <span id="datatableCounter">0</span>
                        Selected
                      </span>
                      <a class="btn btn-outline-danger btn-sm" href="javascript:;">
                        <i class="bi-trash"></i> Delete
                      </a>
                    </div>
                  </div>
                  <!-- End Datatable Info -->



                </div>
              </div>
              <!-- End Header -->

              <!-- Table -->
              <div class="table-responsive datatable-custom position-relative">
                <?php if(isset($_SESSION['message'])){?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong></strong>
                  <?php echo $_SESSION['message']; unset($_SESSION['message']); ?>.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php } ?>
                <?php if(isset($_SESSION['error'])){?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong> </strong>
                  <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php } ?>
                <table id="datatable"
                  class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                  data-hs-datatables-options='{
                           "columnDefs": [{
                              "targets": [0, 7],
                              "orderable": false
                            }],
                           "order": [],
                           "info": {
                             "totalQty": "#datatableWithPaginationInfoTotalQty"
                           },
                           "search": "#datatableSearch",
                           "entries": "#datatableEntries",
                           "pageLength": 15,
                           "isResponsive": false,
                           "isShowPaging": false,
                           "pagination": "datatablePagination"
                         }'>
                  <thead class="thead-light">
                    <tr>
                      <th class="">id</th>


                      <th class="table-column-ps-0">Movie Title</th>
                      <th>Genre</th>
                      <th>Image</th>
                      <th>veiw Details</th>
                      <th>Action</th>

                    </tr>
                  </thead>

                  <tbody>
                    <?php $movie =mysqli_query($con,"select * from movie");
                    foreach($movie as  $movieDEtail){ ?>
                    <tr>
                      <td>
                        <?php echo $movieDEtail['id']; ?>
                      </td>
                      <td class="table-column-ps-0">
                        <a class="d-flex align-items-center" href="user-profile.html">


                          <span class="d-block h5 text-inherit mb-0">
                            <?php echo $movieDEtail['title']; ?>
                          </span>


                        </a>
                      </td>
                      <td>
                   
                        <span class="d-block fs-5 text-body"><?php echo $movieDEtail['genre']; ?></span>
                      </td>

                      </td>

                      <td>

                        <div class="avatar avatar-circle">
                          <img class="avatar-img w-100" src="<?php echo " ../".$movieDEtail['image']; ?>" alt="Image
                          Description">

                        </div>
                      </td>


                      <td>
                        <button type="button" class="btn btn-white btn-sm" data-bs-toggle="modal"
                          data-bs-target="#editUserModal<?php echo $movieDEtail['id']; ?>">
                          veiw
                        </button>
                      </td>

                      <td>
                        <!-- <button type="button" class="btn btn-success btn-sm">
                          Edit
                        </button> -->
                        <a href="?delete=<?php echo $movieDEtail['id']; ?>" class="btn btn-danger btn-sm">
                        <i class="bi bi-trash-fill"></i>
                        </a>
                        <!-- <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                          data-bs-target="#editUserModal">
                         Block
                        </button> -->
                      </td>
                    </tr>
                    <?php } ?>




                  </tbody>
                </table>
              </div>
              <!-- End Table -->

              <!-- Footer -->
              <div class="card-footer">
                <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
                  <div class="col-sm mb-2 mb-sm-0">
                    <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                      <span class="me-2">Showing:</span>

                      <!-- Select -->
                      <div class="tom-select-custom">
                        <select id="datatableEntries" class="js-select form-select form-select-borderless w-auto"
                          autocomplete="off" data-hs-tom-select-options='{
                                    "searchInDropdown": false,
                                    "hideSearch": true
                                  }'>
                          <option value="10">10</option>
                          <option value="15" selected>15</option>
                          <option value="20">20</option>
                        </select>
                      </div>
                      <!-- End Select -->

                      <span class="text-secondary me-2">of</span>

                      <!-- Pagination Quantity -->
                      <span id="datatableWithPaginationInfoTotalQty"></span>
                    </div>
                  </div>
                  <!-- End Col -->

                  <div class="col-sm-auto">
                    <div class="d-flex justify-content-center justify-content-sm-end">
                      <!-- Pagination -->
                      <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                    </div>
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->
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

</main>



<!-- modal start -->
<?php $movie=mysqli_query($con,"select * from movie");
  foreach($movie as $Getmovie){ ?>
<div class="modal fade" id="editUserModal<?php echo $Getmovie['id']; ?>" tabindex="-1"
  aria-labelledby="editUserModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editUserModalLabel">Movie Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Body -->
      <div class="modal-body">
        <!-- Nav Scroller -->
        <div class="js-nav-scroller hs-nav-scroller-horizontal">
          <span class="hs-nav-scroller-arrow-prev" style="display: none;">
            <a class="hs-nav-scroller-arrow-link" href="javascript:;">
              <i class="bi-chevron-left"></i>
            </a>
          </span>

          <span class="hs-nav-scroller-arrow-next" style="display: none;">
            <a class="hs-nav-scroller-arrow-link" href="javascript:;">
              <i class="bi-chevron-right"></i>
            </a>
          </span>

          <!-- Nav -->
          <ul class="js-tabs-to-dropdown nav nav-segment nav-fill mb-5" id="editUserModalTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" href="#profile" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                role="tab" aria-selected="true">
                <i class="bi-person me-1"></i> Movie Details
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#billing-address" id="billing-address-tab" data-bs-toggle="tab"
                data-bs-target="#billing-address" role="tab" aria-selected="false">
                <i class="bi-building me-1"></i> Links
              </a>
            </li>

          </ul>
          <!-- End Nav -->
        </div>
        <!-- End Nav Scroller -->

        <!-- Tab Content -->
        <div class="tab-content" id="editUserModalTabContent">
          <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <form>
              <!-- Profile Cover -->
              <div class="profile-cover">
                <div class="profile-cover-img-wrapper">
                  <img id="editProfileCoverImgModal" class="profile-cover-img" src="../<?php echo $Getmovie['image']; ?>"
                    alt="Image Description">
                </div>
              </div>
              <!-- End Profile Cover -->

              <!-- Avatar -->
              <label class="avatar avatar-xxl avatar-circle avatar-uploader profile-cover-avatar mb-5"
                for="editAvatarUploaderModal">
                <img id="editAvatarImgModal" class="avatar-img" src="../<?php echo $Getmovie['image']; ?>"
                  alt="Image Description">
              </label>
              <!-- End Avatar -->

              <!-- Form -->
              <div class="row mb-4">
                <label for="editFirstNameModalLabel" class="col-sm-3 col-form-label form-label">Movie Title <i
                    class="tio-help-outlined text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Displayed on public forums, such as Front."></i></label>

                <div class="col-sm-9">
                  <div class="input-group input-group-sm-vertical">
                    <input type="text" class="form-control" name="editFirstNameModal" disabled
                      id="editFirstNameModalLabel" placeholder="Your first name" aria-label="Your first name"
                      value="<?php echo $Getmovie['title']; ?>">

                  </div>
                </div>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="row mb-4">
                <label for="editEmailModalLabel" class="col-sm-3 col-form-label form-label">Movie Description</label>

                <div class="col-sm-9 ">
                  <div class="form-control">

                    <?php echo $Getmovie['description']; ?>
                  </div>
                  
                </div>
              </div>
              <div class="row mb-4">
                <label for="editEmailModalLabel" class="col-sm-3 col-form-label form-label">Country</label>

                <div class="col-sm-9 ">
                  <div class="form-control">

                    <?php echo $Getmovie['country']; ?>
                  </div>
                  
                </div>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="row mb-4">
                <label for="editPhoneLabel" class="col-sm-3 col-form-label form-label">Genre

                </label>

                <div class="col-sm-9">
                  <div class="input-group input-group-sm-vertical">
                    <input type="text" class="js-masked-input form-control" disabled name="phone" id="editPhoneLabel"
                      placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx"
                      value="<?php echo $Getmovie['genre']; ?>" />
                  </div>
                </div>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="row mb-4">
                <label for="editOrganizationModalLabel" class="col-sm-3 col-form-label form-label">Director name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="editOrganizationModal" disabled
                    id="editOrganizationModalLabel" placeholder="Your organization" aria-label="Your organization"
                    value="<?php echo $Getmovie['director_name']; ?>">
                </div>
              </div>
              <div class="row mb-4">
                <label for="editOrganizationModalLabel" class="col-sm-3 col-form-label form-label">Movie Star</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="editOrganizationModal" disabled
                    id="editOrganizationModalLabel" placeholder="Your organization" aria-label="Your organization"
                    value="<?php echo $Getmovie['movie_star']; ?>">
                </div>
              </div>
              <div class="row mb-4">
                <label for="editOrganizationModalLabel" class="col-sm-3 col-form-label form-label">Release year</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="editOrganizationModal" disabled
                    id="editOrganizationModalLabel" placeholder="Your organization" aria-label="Your organization"
                    value="<?php echo $Getmovie['release_year']; ?>">
                </div>
              </div>
            </form>
          </div>

          <div class="tab-pane fade" id="billing-address" role="tabpanel" aria-labelledby="billing-address-tab">
            <form>
              <div class="row mb-4">
                <div class="col-12">
                  <label for="editAddressLine1Label" class="col-sm-3 col-form-label form-label">Movie Link
                    ?</label>
                </div>
                <div class="col-12">
                  <input type="text" class="form-control" name="addressLine1" disabled id="editAddressLine1Label"
                    aria-label="Your address" value="<?php echo $Getmovie['movie_link']; ?>">
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-12">
                  <label for="editAddressLine1Label" class="col-sm-3 col-form-label form-label">Movie Download Link
                    </label>
                </div>
                <div class="col-12">
                  <input type="text" class="form-control" name="addressLine1" disabled id="editAddressLine1Label"
                    aria-label="Your address" value="<?php echo $Getmovie['download_link']; ?>">
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-12">
                  <label for="editAddressLine1Label" class=" col-form-label form-label">Movie Trailer Link</label>
                </div>
                <div class="col-12">
                  <input type="text" class="form-control" name="addressLine1" disabled id="editAddressLine1Label"
                    aria-label="Your address" value="<?php echo $Getmovie['trailer_link']; ?>">
                </div>
              </div>
         

            </form>
          </div>


        </div>
        <!-- End Tab Content -->
      </div>
      <!-- End Body -->
    </div>
  </div>
</div>
<?php } ?>

<!-- modal end -->


<?php include './footer.php'; ?>