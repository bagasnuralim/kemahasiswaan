<?php $this->load->view('common/header'); ?>


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Direktorat Kemahasiswaan STIE INABA</h1>
          <h2>Menjadi Sekolah Tinggi Ilmu Ekonomi yang unggul pada bidang akuntansi, manajemen dan kewirausahaan.</h2>
          <div class="d-flex">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
	<!-- ======= Testimonials Section ======= -->
	<section id="testimonials" class="testimonials section-bg">
      <div class="container">
        <div class="section-title">
          <span>Agenda</span>
          <h2>Agenda</h2>
          <p>Jadwal Kegiatan Kemahasiswaan</p>
				</div>
				<?php $this->load->view('calendar/index'); ?>
      </div>
	</section>
		<section id="testimonials" class="testimonials section-bg">
      <div class="container">
        <div class="section-title">
          <span>Documents</span>
          <h2>Documents</h2>
          <p>Layanan Informasi Resmi STIE INABA</p>
        </div>
      </div>
		</section>
		<!-- End Testimonials Section -->
  </main><!-- End #main -->

	<?php $this->load->view('common/footer'); ?>
