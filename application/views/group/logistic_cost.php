<?php echo form_open_multipart('home/demension'); ?> 
<div class="row">
    <div class="col-md-6">
    <div class="card">
        <div class="card-header">
        <strong>Đơn giá cấu hình</strong> </div>
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

            <div class="form-group row">
            <label class="col-md-3 col-form-label" for="text-input">Tăng Bo</label>
            <div class="col-md-9">
                <input class="form-control" id="text-input" type="text" name="text-input" placeholder="0">
          
                <select class="form-control" id="select1" name="select1"> 
                    <option value="1">vnd/Ton</option>
                    <option value="2">vnd/m3</option> 
                 </select>

            </div>
            </div>

            <div class="form-group row">
            <label class="col-md-3 col-form-label" for="text-input">Unloading</label>
            <div class="col-md-9">
                <input class="form-control" id="text-input" type="text" name="text-input" placeholder="0">
          
                <select class="form-control" id="select1" name="select1"> 
                    <option value="1">vnd/Ton</option>
                    <option value="2">vnd/m3</option> 
                 </select>

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

</div>

<?php echo form_close(); ?>