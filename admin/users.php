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
        $result = mysqli_query($con,"UPDATE user SET `status`='1' WHERE id='$id'");
        $_SESSION['message'] = " Approve Successfully";   
    }
    if(isset($_GET['block']))
    {
        $id = $_GET['block'];
        $result = mysqli_query($con,"UPDATE user SET `status`='2' WHERE id='$id'");
        $_SESSION['error'] = " Block Successfully";   
    }?>

<main id="content" role="main" class="main">
  <!-- Content -->
  <div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
      <div class="row align-items-end">
        <div class="col-sm mb-2 mb-sm-0">
          <!-- <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-no-gutter">
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Pages</a></li>
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Users</a></li>
              <li class="breadcrumb-item active" aria-current="page">Overview</li>
            </ol>
          </nav> -->

          <h1 class="page-header-title">Users</h1>
        </div>
        <!-- End Col -->

        <!-- <div class="col-sm-auto">
          <a class="btn btn-primary" href="users-add-user.html">
            <i class="bi-person-plus-fill me-1"></i> Add user
          </a>
        </div> -->
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Page Header -->

    
    <!-- Card -->
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
              <th class="table-column-ps-0">Profile/Name</th>
              <th>Email</th>
              <th>Country</th>
              <th>Status</th>
              <th>Role</th>
              <th>Detail Profile</th>
              <th>Action</th>
              
            </tr>
          </thead>

          <tbody>
            <?php $user=mysqli_query($con,"select * from user");
            foreach($user as $GETuser){ ?>
            <tr>
            <td><?php echo $GETuser['id']; ?></td>
            <td><?php echo $GETuser['username']; ?></td>
            <td><?php echo $GETuser['email']; ?></td>
            <td><?php echo $GETuser['country']; ?></td>
            <td><?php if($GETuser['status'] == 0){ echo "Pending"; }else{ echo "Approved"; } ?></td>
            <td><?php echo $GETuser['category']; ?></td>
              <td>
                <button type="button" class="btn btn-white btn-sm" data-bs-toggle="modal" 
                data-bs-target="#editUserModal<?php echo $GETuser['id']; ?>">
                   veiw
                </button>
              </td>
              <td>
              <?php if($GETuser['status'] == 1){ ?>
                <a href="?block=<?php echo $GETuser['id']; ?>" class="btn btn-danger">
                   Block
                </a>
              <?php }else{ ?>
                <a href="?approve=<?php echo $GETuser['id']; ?>"  class="btn btn-success">
                   Approve
                </a>
              <?php } ?>
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
  </div>
  <!-- End Content -->

  <!-- Footer -->



  <!-- End Footer -->
</main>
<!-- ========== END MAIN CONTENT ========== -->
<!-- Edit user -->
 <?php $user=mysqli_query($con,"select * from user");
  foreach($user as $GETuser){ ?>
   <div class="modal fade" id="editUserModal<?php echo $GETuser['id']; ?>" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editUserModalLabel">User Details</h5>
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
                <a class="nav-link active" href="#profile" id="profile-tab" data-bs-toggle="tab"
                  data-bs-target="#profile" role="tab" aria-selected="true">
                  <i class="bi-person me-1"></i> Profile
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#billing-address" id="billing-address-tab" data-bs-toggle="tab"
                  data-bs-target="#billing-address" role="tab" aria-selected="false">
                  <i class="bi-building me-1"></i> FAQs
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
                    <img id="editProfileCoverImgModal" class="profile-cover-img" src="assets/img/1920x400/img1.jpg"
                      alt="Image Description">
                  </div>
                </div>
                <!-- End Profile Cover -->

                <!-- Avatar -->
                <label class="avatar avatar-xxl avatar-circle avatar-uploader profile-cover-avatar mb-5"
                  for="editAvatarUploaderModal">
                  <img id="editAvatarImgModal" class="avatar-img" src="assets/img/160x160/img9.jpg"
                    alt="Image Description">
                </label>
                <!-- End Avatar -->

                <!-- Form -->
                <div class="row mb-4">
                  <label for="editFirstNameModalLabel" class="col-sm-3 col-form-label form-label">Username <i
                      class="tio-help-outlined text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                      title="Displayed on public forums, such as Front."></i></label>

                  <div class="col-sm-9">
                    <div class="input-group input-group-sm-vertical">
                      <input type="text" class="form-control" name="editFirstNameModal" disabled
                        id="editFirstNameModalLabel" placeholder="Your first name" aria-label="Your first name"
                        value="<?php echo $GETuser['username']; ?>">

                    </div>
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="row mb-4">
                  <label for="editEmailModalLabel" class="col-sm-3 col-form-label form-label">Email</label>

                  <div class="col-sm-9">
                    <input type="email" class="form-control" name="editEmailModal" disabled id="editEmailModalLabel"
                      placeholder="Email" aria-label="Email" value="<?php echo $GETuser['email']; ?>">
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="row mb-4">
                  <label for="editPhoneLabel" class="col-sm-3 col-form-label form-label">Phone Number

                  </label>

                  <div class="col-sm-9">
                    <div class="input-group input-group-sm-vertical">
                      <input type="text" class="js-masked-input form-control" disabled name="phone" id="editPhoneLabel"
                        placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx" value="<?php echo $GETuser['phone']; ?>"
                        data-hs-mask-options='{
                                 "template": "+0(000)000-00-00"
                               }'>
                    </div>
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="row mb-4">
                  <label for="editOrganizationModalLabel" class="col-sm-3 col-form-label form-label">Role</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="editOrganizationModal" disabled
                      id="editOrganizationModalLabel" placeholder="Your organization" aria-label="Your organization"
                      value="<?php echo $GETuser['category']; ?>">
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="editOrganizationModalLabel" class="col-sm-3 col-form-label form-label">Country</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="editOrganizationModal" disabled
                      id="editOrganizationModalLabel" placeholder="Your organization" aria-label="Your organization"
                      value="<?php echo $GETuser['country']; ?>">
                  </div>
                </div>
              </form>
            </div>

            <div class="tab-pane fade" id="billing-address" role="tabpanel" aria-labelledby="billing-address-tab">
              <form>
                <div class="row mb-4">
                  <div class="col-12">
                    <label for="editAddressLine1Label" class="col-sm-3 col-form-label form-label">Name of your project
                      ?</label>
                  </div>
                  <div class="col-12">
                    <input type="text" class="form-control" name="addressLine1" disabled id="editAddressLine1Label"
                      aria-label="Your address" value="<?php echo $GETuser['name_your_project']; ?>">
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-12">
                    <label for="editAddressLine1Label" class="col-sm-3 col-form-label form-label">Number of nft’s
                      ?</label>
                  </div>
                  <div class="col-12">
                    <input type="text" class="form-control" name="addressLine1" disabled id="editAddressLine1Label"
                      aria-label="Your address" value="<?php echo $GETuser['number_of_nft']; ?>">
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-12">
                    <label for="editAddressLine1Label" class=" col-form-label form-label">Short description of your
                      project ?</label>
                  </div>
                  <div class="col-12">
                    <input type="text" class="form-control" name="addressLine1" disabled id="editAddressLine1Label"
                      aria-label="Your address" value="<?php echo $GETuser['description']; ?>">
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-12">
                    <label for="editAddressLine1Label" class="col-sm-3 col-form-label form-label">Discord link ?</label>
                  </div>
                  <div class="col-12">
                    <input type="text" class="form-control" name="addressLine1" disabled id="editAddressLine1Label"
                      aria-label="Your address" value="<?php echo $GETuser['discord']; ?> ">
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-12">
                    <label for="editAddressLine1Label" class="col-sm-3 col-form-label form-label">Website URL ?</label>
                  </div>
                  <div class="col-12">
                    <input type="text" class="form-control" name="addressLine1" disabled id="editAddressLine1Label"
                      aria-label="Your address" value="<?php echo $GETuser['website']; ?>">
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-12">
                    <label for="editAddressLine1Label" class="col-sm-3 col-form-label form-label">Average sale price
                      ?</label>
                  </div>
                  <div class="col-12">
                    <input type="text" class="form-control" name="addressLine1" disabled id="editAddressLine1Label"
                      aria-label="Your address" value="<?php echo $GETuser['average_sale_price']; ?>">
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-12">
                    <label for="editAddressLine1Label" class="col-sm-3 col-form-label form-label">Sales date ?</label>
                  </div>
                  <div class="col-12">
                    <input type="text" class="form-control" name="addressLine1" disabled id="editAddressLine1Label"
                      aria-label="Your address" value="<?php echo $GETuser['date']; ?>">
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-12">
                    <label for="editAddressLine1Label" class="col-sm-3 col-form-label form-label">Your budget ?</label>
                  </div>
                  <div class="col-12">
                    <input type="text" class="form-control" name="addressLine1" disabled id="editAddressLine1Label"
                      aria-label="Your address" value="<?php echo $GETuser['budget']; ?>">
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-12">
                    <label for="editAddressLine1Label" class=" col-form-label form-label">How would you like us to help
                      you?</label>
                  </div>
                  <div class="col-12">
                    <input type="text" class="form-control" name="addressLine1" disabled id="editAddressLine1Label"
                      aria-label="Your address" value="<?php echo $GETuser['help']; ?>">
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






  <!-- ========== END SECONDARY CONTENTS ========== -->



  <?php include './footer.php'; ?>