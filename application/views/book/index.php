<?php echo form_open_multipart('home/datvanchuyen'); ?> 
<div class="row">
    <div class="col-md-6">
    <div class="card">
        <div class="card-header">
        <strong>Nhập dữ liệu</strong> </div>
        <div class="card-body">
       
        
            <div class="form-group row">
            <label class="col-md-3 col-form-label" for="file-input">Chọn file</label>
            <div class="col-md-9">
                <input id="file-input" type="file" name="file-input">
            </div>
            </div>
   
        </div>
        <div class="card-footer">
        <button class="btn btn-sm btn-primary" type="submit" name="bttBook">
            <i class="fa fa-dot-circle-o"></i> Xử lý</button>
        <button class="btn btn-sm btn-danger" type="reset">
            <i class="fa fa-ban"></i> Reset</button>
        </div>
    </div>
     
    </div>

</div>

<?php echo form_close(); ?>