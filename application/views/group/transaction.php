<div class="animated fadeIn">
<div class="row">
    <?php echo form_open_multipart('home/demension'); ?> 
    <div class="col-md-24">
        <div class="card">
            <div class="card-header">
            <strong>Trans_cost</strong> </div>
            <div class="card-body">
        
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="select1">Vùng miền</label>
                    <div class="col-md-9">
                        <select class="form-control" id="select1" name="select1">
                        <option value="0">Chọn vùng miền</option>
                        <option value="1">Thanh Hóa</option>
                        <option value="2">Nghệ An</option>
                        <option value="3">Hà Tĩnh</option>
                        </select>
                    </div>
                </div> 


            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="text-input">Trans_cost</label>
                <div class="col-md-9">
                    <input class="form-control" id="text-input" type="text" name="text-input" placeholder="0">
                    <select class="form-control" id="select1" name="select1"> 
                        <option value="1">vnd/Ton</option>
                        <option value="2">vnd/m3</option> 
                    </select>
                </div>
                </div> 
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


        <?php echo form_open_multipart('home/demension'); ?> 
<div class="col-md-24">
    <div class="card">
        <div class="card-header">
        <strong>Unloading Cost</strong> </div>
        <div class="card-body">
      
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="select1">Vùng miền</label>
                <div class="col-md-9">
                    <select class="form-control" id="select1" name="select1">
                    <option value="0">Chọn vùng miền</option>
                    <option value="1">Thanh Hóa</option>
                    <option value="2">Nghệ An</option>
                    <option value="3">Hà Tĩnh</option>
                    </select>
                </div>
            </div> 


           <div class="form-group row">
            <label class="col-md-3 col-form-label" for="text-input">Trans_cost</label>
            <div class="col-md-9">
                <input class="form-control" id="text-input" type="text" name="text-input" placeholder="0">
                <select class="form-control" id="select1" name="select1"> 
                    <option value="1">vnd/Ton</option>
                    <option value="2">vnd/m3</option> 
                 </select>
            </div>
            </div>

            
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
                          <th></th>
                          <th></th>
                          <th>Thanh hóa</th>
                          <th>Nghệ An</th>
                          <th>Hà Tĩnh</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Trans_cost</td>
                          <td>vnd/m3</td>
                          <td><?php echo number_format('195000');?></td>
                          <td>
                            <?php echo number_format('325000');?>
                          </td>
                          <td>
                            <?php echo number_format('364000');?>
                          </td>
                        </tr>
                        <tr>
                          <td>Trans_cost</td>
                          <td>vnd/ton</td>
                          <td><?php echo number_format('657000');?></td>
                          <td>
                            <?php echo number_format('1095000');?>
                          </td>
                          <td>
                            <?php echo number_format('1227000');?>
                          </td>
                        </tr>
                        <tr>
                          <td>Unloading</td>
                          <td>vnd/m3</td>
                          <td><?php echo number_format('20000');?></td>
                          <td>
                            <?php echo number_format('20000');?>
                          </td>
                          <td>
                            <?php echo number_format('20000');?>
                          </td>
                        </tr>
                        <tr>
                          <td>Unloading</td>
                          <td>vnd/ton</td>
                          <td><?php echo number_format('50000');?></td>
                          <td>
                            <?php echo number_format('50000');?>
                          </td>
                          <td>
                            <?php echo number_format('50000');?>
                          </td>
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
</div>



