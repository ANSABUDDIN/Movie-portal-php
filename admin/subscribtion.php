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
        $result = mysqli_query($con,"UPDATE subscribtion SET `status`='1' WHERE id='$id'");
        $_SESSION['message'] = " Approve Successfully";   
    }
    if(isset($_GET['delete']))
    {
        $id = $_GET['delete'];
        $result = mysqli_query($con,"DELETE FROM `subscribtion` WHERE id='$id'");
        $_SESSION['error'] = " Delete Successfully";   
    }?>


<main id="content" role="main" class="main">
  <!-- Content -->
  <div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
      <div class="row align-items-end">
        <div class="col-sm mb-2 mb-sm-0">
          <h1 class="page-header-title">Subscribtion</h1>
        </div>
        <!-- End Col -->

        <!-- <div class="col-sm-auto">
          <a class="btn btn-primary" href="add-subscrition.php">
            <i class="bi-person-plus-fill me-1"></i> Add Subscribtion
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
              <input id="datatableSearch" type="search" class="form-control" placeholder="Search Plans"
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
      <div class="table-responsive datatable-custom">
          <table id="datatable"
            class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
            data-hs-datatables-options='{
                   "columnDefs": [{
                      "targets": [0, 1, 4],
                      "orderable": false
                    }],
                   "order": [],
                   "info": {
                     "totalQty": "#datatableWithPaginationInfoTotalQty"
                   },
                   "search": "#datatableSearch",
                   "entries": "#datatableEntries",
                   "pageLength": 8,
                   "isResponsive": false,
                   "isShowPaging": false,
                   "pagination": "datatablePagination"
                 }'>
                 <thead class="thead-light">
            <tr>
              <th class="">id</th>

              <th class="table-column-ps-0">User Name</th>
              <th class="table-column-ps-0">User Email</th>
              <th>Package</th>
              <th>Price</th>
              <th>Duration</th>
              <th>Expire</th>
              <th>Status</th>
              <th>Action</th>
              
            </tr>
          </thead>

          <tbody>
           <?php 
           $sub = mysqli_query($con,"select * from subscribtion");
           foreach($sub as $detail){
              $user_id = $detail['user_id'];
              $package_id = $detail['package_id'];
              $users=mysqli_query($con,"select * from user where id='$user_id'");
              foreach($users as $userdetail)
              {
                $email = $userdetail['email'];
                $username = $userdetail['username'];
              }
              $package=mysqli_query($con,"select * from package where id='$package_id'");
              foreach($package as $packagedetail)
              {
                $title = $packagedetail['title'];
                $price = $packagedetail['amount'];
                $duration = $packagedetail['duration'];
              }
              ?>
              <tr>
              <td><?php echo $detail['id']; ?></td>
              <td><?php echo $username; ?></td>
              <td><?php echo $email; ?></td>
              <td><?php echo $title; ?></td>
              <td><?php echo $price; ?></td>
              <td><?php echo $duration; ?></td>
              <td><?php echo $detail['expire']; ?></td>
              <td><?php  if($detail['status'] == 0){ echo "Pending"; }else{ echo "Approved"; } ?></td>
              <td>
              <?php if($detail['status'] == 1){ ?>
                <a href="?delete=<?php echo $detail['id']; ?>" class="btn btn-danger">
                   Block
                </a>
              <?php }else{ ?>
                <a href="?approve=<?php echo $detail['id']; ?>"  class="btn btn-success">
                   Approve
                </a>
              <?php } ?>
              </td>
              </tr>

           <?php } ?>
          </tbody>
          </table>
        </div>
     

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


<?php include './footer.php'; ?>