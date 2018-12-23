
<div class="row">
<?php echo form_open_multipart('home/demension'); ?> 
    <div class="col-md-12">
    <div class="card">
        <div class="card-header">
        <strong>Đơn giá cấu hình</strong> </div>
        <div class="card-body">
       

           <div class="form-group row">
            <label class="col-md-3 col-form-label" for="text-input">Tên vùng miền</label>
            <div class="col-md-9">
                <input class="form-control" id="text-input" type="text" name="text-input" placeholder="Hà Nội">
            </div>
            </div>
 
          
        </form>
        </div>
        <div class="card-footer">
        <button class="btn btn-sm btn-primary" type="submit" name="submitUpload">
            <i class="fa fa-dot-circle-o"></i> Xử lý</button>
        <button class="btn btn-sm btn-danger" type="reset">
            <i class="fa fa-ban"></i> Reset</button>
        </div>
    </div>
     
    </div>
    <?php echo form_close(); ?>


    <div class="col-sm-6">
                <div class="card">
                  <div class="card-header">
                    <i class="fa fa-align-justify"></i>Tổng quan</div>
                  <div class="card-body">
                    <table class="table table-responsive-sm table-striped">
                      <thead>
                        <tr>
                          <th>Stt</th>
                          <th>Tên vùng</th> 
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Thanh hóa</td> 
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Nghệ An</td> 
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Nghệ Tĩnh</td> 
                        </tr>
                      </tbody>
                    </table>
                    <!-- <ul class="pagination">
                      <li class="page-item">
                        <a class="page-link" href="#">Prev</a>
                      </li>
                      <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">2</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">3</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">4</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul> -->
                  </div>
                </div>
              </div>
</div>



