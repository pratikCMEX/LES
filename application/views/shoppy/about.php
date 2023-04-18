<!-- ----hero-section--- -->

<section class="hero-section common-banner-bg login-section">
  <img src="<?= $this->theme_base_url . '/assets/img/home/banner-left-bg.png' ?>" alt="" class="left-bg">
  <img src="<?= $this->theme_base_url . '/assets/img/home/banner-right-bg.png' ?>" alt="" class="right-bg">
  <div class="container">
    <div class="row">
      <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
        <h1><?= $this->lang->line('About us') ?></h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url() . 'home' ?>"><?= $this->lang->line('home') ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $this->lang->line('About us') ?></li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>

<!-- ---------about-us-section------------ -->

<section class="about-us-wrap p-100">
  <div class="container">
    <div class="row">
      <div class="col-xxl-7 col-xl-7 col-lg-7 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="0">
        <div class="about-img">
          <img src="<?= base_url() . 'public/uploads/about/' . $about_section_one[0]->image ?>" alt="">
        </div>
      </div>
      <div class="col-xxl-5 col-xl-5 col-lg-5 d-flex align-items-end wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
        <div class="about-details">
          <div class="about-content">
            <h5><?= $about_section_one[0]->main_title ?></h5>
            <div>
              <p><?= $about_section_one[0]->content ?></p>
            </div>
          </div>
          <div class="about-rect-img">
            <!-- <img src="./assets/img/about-us/about-rectangle.png" alt="" > -->
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 277 244">
              <defs>
                <style>
                  .about-rect-svg {
                    opacity: 0.2;
                  }
                </style>
              </defs>
              <path class="about-rect-svg" d="M20,0H257a20,20,0,0,1,20,20V224a20,20,0,0,1-20,20H20A20,20,0,0,1,0,224V20A20,20,0,0,1,20,0Z" />
            </svg>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!--============ client-wrap ==================-->
<section class="client-wrap p-100 offering">
  <div class="container">
    <div class="row">
      <div class="col-xxl-12 col-xl-12 col-lg-12">
        <div class="title text-center">
          <h2>The Trust <span>From Clients</span></h2>
          <p>Do not miss the current offers until the end of month.</p>
        </div>
      </div>
    </div>

    <!-- slider -->
    <div class="owl-carousel owl-theme" id="client-slide">
      <?php foreach ($about_section_two as $key => $value) { ?>
        <div class="item">
          <div class="clients-card text-center">
            <div class="clients-quote-img">
              <!-- <img src="./assets/img/about-us/client-quote-img.png" alt=""> -->
              <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 61 54">
                <defs></defs>
                <path class="client-quote-img" d="M15,54A13.64,13.64,0,0,1,4,49Q0,43.8,0,35.6A35.92,35.92,0,0,1,5.92,15.4Q12,6.21,24.48,0l2.17,3.2A39,39,0,0,0,15.79,13.4q-4.74,6.41-4.73,13a4.55,4.55,0,0,0,1,3,4,4,0,0,0,3,1A10.87,10.87,0,0,1,23.29,34a11.18,11.18,0,0,1,3.56,8.4,11.18,11.18,0,0,1-3.56,8.4A11.55,11.55,0,0,1,15,54Zm34.16,0A13.64,13.64,0,0,1,38.1,49q-3.94-5.2-4-13.4a36,36,0,0,1,5.92-20.2Q46.19,6.21,58.63,0L60.8,3.2A39.17,39.17,0,0,0,49.94,13.4q-4.72,6.41-4.73,13a4.61,4.61,0,0,0,1,3,4,4,0,0,0,3,1A10.89,10.89,0,0,1,57.45,34,11.17,11.17,0,0,1,61,42.4a11.17,11.17,0,0,1-3.55,8.4A11.57,11.57,0,0,1,49.16,54Z" />
              </svg>
            </div>
            <div class="client-name">
              <h4><?= $value->name ?></h4>
              <p>Customer</p>
            </div>
            <div class="clients-con">
              <p><?= $value->content ?></p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

  </div>


</section>