<?php echo form_open_multipart('home/demension'); ?> 
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

            <!-- <div class="form-group row">
            <label class="col-md-3 col-form-label" for="text-input">Text Input</label>
            <div class="col-md-9">
                <input class="form-control" id="text-input" type="text" name="text-input" placeholder="Text">
                <span class="help-block">This is a help text</span>
            </div>
            </div>
            <div class="form-group row">
            <label class="col-md-3 col-form-label" for="email-input">Email Input</label>
            <div class="col-md-9">
                <input class="form-control" id="email-input" type="email" name="email-input" placeholder="Enter Email">
                <span class="help-block">Please enter your email</span>
            </div>
            </div>
         
            
            <div class="form-group row">
            <label class="col-md-3 col-form-label" for="select1">Select</label>
            <div class="col-md-9">
                <select class="form-control" id="select1" name="select1">
                <option value="0">Please select</option>
                <option value="1">Option #1</option>
                <option value="2">Option #2</option>
                <option value="3">Option #3</option>
                </select>
            </div>
            </div> -->
            
            
             
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