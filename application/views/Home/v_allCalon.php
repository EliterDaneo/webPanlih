  <div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<div class="text-center">
								<h3 class="text-center">Daftar Calon Panlih</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Courses -->

	<div class="courses">
		<div class="container">
			<div class="row">

				<!-- Courses Main Content -->
				<div class="col-lg-12">
					<div class="courses_container">
						<div class="row courses_row">
							
							<!-- Course -->
              <?php foreach ($daftarCalonPanlih as $key => $value) { ?>
              <div class="col-lg-3 course_col">
                <div class="course">
                  <div class="course_image"><img src="<?= base_url('asset/data/foto/calonPanlih/'. $value->fotoCalon)?>" alt=""></div>
                  <div class="course_body">
                    <h3 class="course_title text-center"><a href="<?= base_url('Home/detailCalon/'. $value->id)?>">Calon Pimpinam Muhammadiyah Wonosobo</a></h3>
                    <div class="course_teacher"><?= $value->namaCalon?></div>
                    <div class="course_text">
                      <p><?= $value->diskripsiCalon?></p>
                    </div>
                  </div>
                </div>
              </div>
              <?php }?>
						</div>
					</div>
				</div>
      </div>
    </div>
  </div>