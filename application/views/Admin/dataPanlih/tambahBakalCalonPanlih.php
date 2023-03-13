          <div class="d-flex justify-content-center">
            <div class="col-lg-6">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary"><?= $title;?></h6>
                </div>
                <div class="card-body">
                  <?php echo form_open_multipart('Admin/addBakalcalonPanlih'); ?>
                  <form>
                    <div class="form-group">
                      <label>Nama Calon</label>
                      <input type="text" name="namaCalon" class="form-control"
                        placeholder="Enter Name" autofocus>
                    </div>
                    <div class="form-group">
                      <label>Alamat Calon</label>
                      <input type="text" name="alamatCalon" class="form-control"
                        placeholder="Enter Address">
                    </div>
                    <div class="form-group">
                      <label>Visi Calon</label>
                      <textarea type="text" name="visiCalon" class="form-control"
                        placeholder="Enter Visi">
                      </textarea>
                    </div>
                    <div class="form-group">
                      <label>Misi Calon</label>
                      <textarea type="text" name="misiCalon" class="form-control"
                        placeholder="Enter Misi">
                      </textarea>
                    </div>
                    <div class="form-group">
                      <label>Diskrpsi Calon</label>
                      <textarea type="text" name="diskripsiCalon" class="form-control"
                        placeholder="Enter Diskripsi">
                      </textarea>
                    </div>
                    <div class="form-group">
                      <div class="custom-file">
                        <input type="file" name="fotoCalon" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose Photos</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                  <?php echo form_close(); ?>
                </div>
              </div>
            </div>
          </div>