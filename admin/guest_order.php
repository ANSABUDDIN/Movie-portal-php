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
  <div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
      <div class="row align-items-end">
        <div class="col-sm mb-2 mb-sm-0">
          <h1 class="page-header-title">Order</h1>
        </div>

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
              <input id="datatableSearch" type="search" class="form-control" placeholder="Search Order"
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


              <th>Username</th>
              <th>Email</th>
              <th>E-Book</th>
              <th>Amount</th>
              <th>Wallet Address</th>
              <th>Chain</th>
              <th>Status</th>
              <th>Action</th>

            </tr>
          </thead>

          <tbody>
          <?php $order=mysqli_query($con,"select * from ebook_order where wallet !='Subscription'");
           foreach($order as $GETorder)
           { 
                $ebook=mysqli_query($con,"select * from ebook where id='".$GETorder['ebook_id']."'");
                foreach($ebook as $GETebook){
                  $ebook = $GETebook['title'];
                  $amount = $GETebook['price'];
                }

                
              
              
              
              ?>
              <tr>
              <td><?php echo $GETorder['id']; ?></td>
                <td><?php echo $GETorder['guest_user_email']; ?></td>
                <td><?php echo $GETorder['guest_user_phone']; ?></td>
                <td><?php echo $ebook; ?></td>
                <td><?php echo $amount; ?></td>
                <td><?php echo $GETorder['wallet']; ?></td>
                <td><?php echo $GETorder['chain']; ?></td>
                <td><?php  if($GETorder['status'] == 0){ echo "Pending"; }else{ echo "Approved"; } ?></td>
                <td>
              <?php if($GETorder['status'] == 1){ ?>
                <a href="?delete=<?php echo $GETorder['id']; ?>" class="btn btn-danger">
                   Block
                </a>
              <?php }else{ ?>
                <a href="?approve=<?php echo $GETorder['id']; ?>"  class="btn btn-success">
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