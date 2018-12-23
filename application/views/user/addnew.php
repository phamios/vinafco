<div class="animated fadeIn">
    
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <i class="fa fa-edit"></i>Thêm mới người dùng</div>
                  <div class="card-body">
                    <form class="form-horizontal">
                      <div class="form-group">
                        <label class="col-form-label" for="prependedInput">Tên đăng nhập</label>
                        <div class="controls">
                          <div class="input-prepend input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">@</span>
                            </div>
                            <input class="form-control" id="prependedInput" size="16" type="text">
                          </div>
                         
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-form-label" for="appendedInput">Mật khẩu</label>
                        <div class="controls">
                          <div class="input-group">
                            <input class="form-control" id="appendedInput" size="16" type="text">
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Quyền</label>
                        <div class="col-md-9">
                      
                            <select class="form-control" id="select1" name="select1"> 
                                <option value="1">Admin ( Kiểm tra & Cấu hình lại Formula và SO/Master Data)</option>
                                <option value="2">Staff ( Chỉ có quyền kiểm tra lại SO/Master Data )</option> 
                                <option value="3">Member ( Khách Hàng)</option> 
                            </select>

                        </div>
                        </div>


                      <div class="form-actions">
                        <button class="btn btn-primary" type="submit">Save changes</button>
                        <button class="btn btn-secondary" type="button">Cancel</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
          </div>