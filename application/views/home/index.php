 <!-- Breadcrumb-->
 <ol class="breadcrumb">
          <!-- <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Dashboard</li> -->
          <!-- Breadcrumb Menu-->
          <!-- <li class="breadcrumb-menu d-md-down-none">
            <div class="btn-group" role="group" aria-label="Button group">
              <a class="btn" href="#">
                <i class="icon-speech"></i>
              </a>
              <a class="btn" href="./">
                <i class="icon-graph"></i>  Dashboard</a>
              <a class="btn" href="#">
                <i class="icon-settings"></i>  Settings</a>
            </div>
          </li> -->
        </ol>
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-warning">
                  <div class="card-body pb-0"> 
                    <div class="text-value">
                    <?php if($this->session->userdata('admin_name') == "admin" ):?>
                    19.823
                    <?php else:?>
                    1.222
                    <?php endif;?>
                    </div>
                    <div>Đơn hàng kế hoạch</div>
                  </div>
                  <div class="chart-wrapper mt-3" style="height:70px;">
                    <canvas class="chart" id="card-chart3" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-primary">
                  <div class="card-body pb-0"> 
                    <div class="text-value">
                    <?php if($this->session->userdata('admin_name') == "admin" ):?>
                    9.721
                    <?php else:?>
                    800
                    <?php endif;?>
                    </div>
                    <div>Đơn hàng thành công</div>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                    <canvas class="chart" id="card-chart4" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
             
            <!-- /.card-->
             
              
            </div>
            <!-- /.row-->
             
            <!-- /.row-->
          </div>
        </div>