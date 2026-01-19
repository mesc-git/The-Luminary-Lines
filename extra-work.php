<!DOCTYPE html>
<html lang="en">




<!-- <body class="home1"> -->
<!-- --------------- Start Header ------------ -->

<?php include('header.php'); ?>





<style>
  .banner__content_title-w {
    /* margin-top: 150px;
    margin-left: 100px; */
    background-color: #161616;
    display: flex;
    justify-content: left;
    align-items: left;
    /* height: 200vh; */
    position: absolute;
    top: 40%;

  }

  .banner__content_title-w>p {
    color: #030303;
    font-size: 40px;
    line-height: 50px;
    padding-top: 20px;
    /* font-weight: 600; */
    position: relative;
  }

  .banner__content_title-w>h1 {
    color: #ffffff;
    font-size: 80px;
    line-height: 100px;
    font-weight: 600;
    position: relative;
  }

  @media(max-width: 1200px) {
    .banner__content_title-w h1 {
      font-size: 80px;
      line-height: 80px
    }
  }

  @media(max-width: 991px) {
    .banner__content_title-w h1 {
      font-size: 60px;
      line-height: 60px
    }
  }

  @media(max-width: 576px) {

    .banner__content_title-w {
      margin-top: 180px;
      margin-left: 20px;
    }

    .banner__content_title-w h1 {
      font-size: 36px;
      line-height: 53px;

    }
  }

  .navbar {
    height: 100px;
    border-bottom: #fff solid 2px;
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    /* background-color: rgb(85, 85, 11); */
    padding: 0px;
    font-size: 20px;
    backdrop-filter: blur(10px);
    padding: 24px 0;
    /* position: relative; */
    z-index: 1000;

  }


  .navbar {
    height: 100px;
    border-bottom: #fff solid 2px;
    position: fixed;
    display: flex;
    justify-content: space-between;
    width: 100%;

    /* background-color: rgb(85, 85, 11); */

    font-size: 20px;
    backdrop-filter: blur(10px);
    padding: 24px 0;
    /* position: relative; */
    transition: 0.5s;
    z-index: 1000;
  }
</style>
<!-- --------------- Start Testimonial ----------- -->
<section class="testimonial py__60 ">
  <div class="container position-relative">
    <!-- title Start -->
    <div class="testimonial__title" data-aos="fade-down" data-aos-delay="100" data-aos-offset="0" data-aos-duration="1000">
      <h1 class="title-testimonials text-center">
        Services
      </h1>
    </div>
    <!-- title End -->

    <div class="services__wapper" data-aos="fade-up" data-aos-delay="100" data-aos-offset="0" data-aos-duration="1000">
      <div class="ser-row mt-5">
        <div>
          <div class="slides">

            <img src="assets/img/icon/dm01.png" alt="" />
            <!-- <i class="fa-solid fa-chart-simple"></i> -->
            <!-- <img src="assets/img/banner/web.png" alt="" width="26px"> -->
            <h2>Digital Marketing</h2>
            <ul class="mb-5">
              <li>Search Engine Optimization (SEO)</li>
              <li>
                Search Engine Marketing (SEM)
              </li>
              <li>
                Social Media Marketing (SMM)
              </li>
              <li>Email Marketing</li>
              <li>Pay-Per-Click (PPC) Advertising</li>
            </ul>
            <a href="digital-marketing.php" class="mt-5"> Read More</a>
          </div>
        </div>
        <div>
          <div class="slides">
            <img src="assets/img/icon/cc.png" alt="" />
            <h2>Content Creation</h2>
            <ul class="mb-5">
              <li>Engaging Copywriting</li>
              <li>
                Compelling Video Production
              </li>
              <li>
                Stunning Photography
              </li>
              <li>Blog and Article Writing</li>
              <li>Social Media Content Creation</li>
            </ul>
            <a href="content-creation.php" class=" mt-3
              "> Read More</a>
          </div>
        </div>
        <div>
          <div class="slides">
            <img src="assets/img/icon/gp.png" alt="" />
            <h2>Graphic Designing</h2>
            <ul class="mb-5">
              <li>Logo Design and Branding</li>
              <li>
                Brochure and Flyer Design
              </li>
              <li>
                Poster and Banner Design
              </li>
              <li>Infographics</li>
              <li>Packaging Design</li>
            </ul>
            <a href="graphic-design.php" class="mt-3 "> Read More</a>
          </div>
        </div>
        <div>
          <div class="slides">
            <img src="assets/img/icon/web.png" alt="" />
            <h2>Web Development</h2>
            <ul class="mb-5">
              <li>Custom Website Design and Development</li>
              <li>
                E-commerce Solutions
              </li>
              <li>
                Mobile-Friendly Responsive Design
              </li>
              <li>Website Maintenance and Support</li>

            </ul>
            <a href="web-development.php" class=" mt-3"> Read More</a>
          </div>
        </div>
        <div>
          <div class="slides">
            <img src="assets/img/icon/brand.png" alt="" />
            <h2>Brand Identity</h2>
            <ul class="mb-5">
              <li>Brand Guidelines Development</li>
              <li>
                Brand Positioning and Messaging
              </li>
              <li>
                Brand Identity Consultation
              </li>
              <li>Brand Collateral Design</li>
              <li>Brand Recognition</li>

            </ul>
            <a href="brand-identity.php" class="mt-3
              "> Read More</a>
          </div>
        </div>
        <div>
          <div class="slides">
            <img src="assets/img/icon/comm.png" alt="" />
            <h2>Consulting</h2>
            <ul class="mb-5">
              <li> <span></span>Strategic Planning</li>
              <li>
                Market Analysis and Research
              </li>
              <li>
                Brand Strategy Development
              </li>
              <li>Digital Marketing Strategy</li>
              <li>Campaign Optimization</li>
            </ul>
            <a href="consulting.php" class=" mt-3"> Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- --------------- End Testimonial ----------- -->


<!-- --------------- Start Services ----------- -->
<section class="services mbser " id="services">
  <div class="container position-relative">

    <!-- <div class="row ser-row justify-content-between align-items-center about__wapper">
        <div class="g-5">
          <div class="ser-col text-center">
            <img src="assets/img/banner/web.png" alt="">
            <h2>Digital Marketing</h2>
            <ul>
              <li>Search Engine Optimization (SEO)</li>
              <li>
                Search Engine Marketing (SEM)
              </li>
              <li>
                Social Media Marketing (SMM)
              </li>
              <li>Email Marketing</li>
              <li>Pay-Per-Click (PPC) Advertising</li>
            </ul>
            
            <button class="btn" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Read
              More</button>
          </div>
        </div>
        <div class=" slide">
          <div class="ser-col text-center">
            <img src="assets/img/services/s2.jpg" alt="">
            <h2>Content Creation</h2>
            <ul>
              <li>Engaging Copywriting</li>
              <li>
                Compelling Video Production
              </li>
              <li>
                Stunning Photography
              </li>
              <li>Blog and Article Writing</li>
              <li>Social Media Content Creation</li>
            </ul>
            
            <div class="modal fade" id="exampleModalToggle02" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="text-center" id="exampleModalToggleLabel2">Content Creation
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>
                      Content Creation is a service that involves creating any digital or written material such as
                      blogs, social media posts, articles, videos, etc. with the aim to engage and inform you and
                      increase traffic to your website. Our team of content creators combines creativity with strategic
                      thinking to develop compelling content that resonates with your audience and drives meaningful
                      interactions. Whether you need informative blog posts, captivating videos, or engaging social
                      media content, we tailor our creations to align with your brand's voice and objectives.
                    </p>
                  </div>
                  
                </div>
              </div>
            </div>
            
            <button class="btn" data-bs-target="#exampleModalToggle02" data-bs-toggle="modal">Read
              More</button>
          </div>
        </div>
        <div class=" slide">
          <div class="ser-col text-center">
            <img src="assets/img/services/s3.jpg" alt="">
            <h2>Graphic Designing</h2>
            <ul>
              <li>Logo Design and Branding</li>
              <li>
                Brochure and Flyer Design
              </li>
              <li>
                Poster and Banner Design
              </li>
              <li>Infographics</li>
              <li>Packaging Design</li>
            </ul>
              <div class="modal fade" id="exampleModalToggle03" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class=" text-center" id="exampleModalToggleLabel3">
                      Graphic Designing</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>Web Development is the process of building the structure and functionality of your website. It
                      involves multiple aspects such as web design, web content development, and coding/programming. It
                      is an essential and integral part of your business, whether small or big. Our web development team
                      specializes in creating responsive and user-friendly websites that not only look great but also
                      function seamlessly across all devices. With expertise in custom website design, e-commerce
                      solutions, and ongoing maintenance and support, we ensure that your online presence reflects the
                      professionalism and quality of your brand.</p>
                  </div>
                  
                </div>
              </div>
            </div>

            <button class="btn" data-bs-target="#exampleModalToggle03" data-bs-toggle="modal">Read
              More</button>
          </div>
        </div>

        <div class="slide">
          <div class="ser-col text-center">
            <img src="assets/img/services/s1.jpg" alt="">
            <h2>Web Development</h2>
            <ul>
              <li>Custom Website Design and Development</li>
              <li>
                E-commerce Solutions
              </li>
              <li>
                Mobile-Friendly Responsive Design
              </li>
              <li>Website Maintenance and Support</li>

            </ul>

            <button class="btn" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Read
              More</button>
          </div>
        </div>
        <div class="slide">
          <div class="ser-col text-center">
            <img src="assets/img/services/s1.jpg" alt="">
            <h2>Brand Identity</h2>
            <ul class="">
              <li>Brand Guidelines Development</li>
              <li>
                Brand Positioning and Messaging
              </li>
              <li>
                Brand Identity Consultation
              </li>
              <li>Brand Collateral Design</li>

            </ul>

            <button class="btn " data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Read
              More</button>
          </div>
        </div>
        <div class="slide">
          <div class="ser-col text-center">
            <img src="assets/img/services/s1.jpg" alt="">
            <h2>Consulting</h2>
            <ul class="">
              <li>Strategic Planning</li>
              <li>
                Market Analysis and Research
              </li>
              <li>
                Brand Strategy Development
              </li>
              <li>Digital Marketing Strategy</li>
              <li>Campaign Optimization</li>
            </ul>
            
            <button class="btn " data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Read
              More</button>
          </div>
        </div>

      </div> -->

    <!-- <a href="digital-marketing.php" class="common__btn2 mt-4 mt-lg-0" style="border-style: none;">
        <span>View All Services</span>
        <img src="assets/icons/arrow-up-rignt-black.svg" alt="" />
      </a> -->





    <!-- imapotant for website -->
    <!-- -- counter start -->
    <div class="counter">
      <div class="subscribe">
        <div class="row">
          <div class="col-lg-8">
            <h2>Subscribe to our newsletter & get more information</h2>
          </div>
          <div class="col-lg-4 mt-5 mt-lg-0">
            <div>
              <!-- <input type="text" placeholder="Your Email" /> -->
              <!-- <button class="common__btn" style="border-style: none;">
                <span>Subscribe Now</span>
                <img src="assets/icons/arrow-up-rignt-black.svg" alt="" />
              </button> -->
              <button class="common__btn" style="border-style: none; background-color:#000;margin-left:120px;"><a href=".php">
                  <span>Get A Quote</span>
                  <img src="assets/icons/arrow-up-rignt-black.svg" alt="" />
                </a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- -- counter end -->
  </div>
</section>








<div class="container-fluid header-to">
  <img src="assets/img/banner/banner home.jpg" alt="" class="c-img d-lg-block d-none">
  <div class="row">
    <div class="col-lg-8 ms-lg-5 ms-sm-0">
      <div class="banner__content_title-home" style="margin-top: 0px;">
        <h1 class="text-dark" data-aos="fade-up mt-5" data-aos-delay="100" data-aos-offset="0" data-aos-duration="1000">
          Design.Consult.<br>
          Advertise. </h1>
        <p data-aos="fade-up" data-aos-delay="200" data-aos-offset="0" data-aos-duration="1000" class="text-dark">
          High-quality, relevant content is essential for engaging <br>
          & retaining online audiences.
        </p>
      </div>
      <div class="buttons d-sm-flex align-items-center" data-aos="fade-up" data-aos-delay="300" data-aos-offset="0" data-aos-duration="1000">
        <!-- <button class="common__btn buttons_file" href="contact.php" style="background-color: #000; border-style: none;"> -->
        <a href="contact.php" class="common__btn buttons_file" style="background-color: #000; border-style: none;"><span> Get A Quote</span>
          <img src="assets/icons/arrow-up-right.svg" alt="" />
        </a>
        </button>
        <!-- <button class="common__btn buttons_outline mt-4 mt-sm-0">
            <span>More About Us</span>
            <img src="assets/icons/arrow-up-right-yellow.svg" alt="" />
          </button> -->
      </div>
    </div>
  </div>
</div>








<!-- index -->
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>

  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <video autoplay loop muted class="d-lg-block d-none">
        <source src="assets/img/clients/Render_4K.mp4" class="object-fit-cover" type=video/mp4 autoplay mute loop>
      </video>
      <video autoplay loop muted class="d-lg-none d-block">
        <source src="assets/img/clients/Render_4K phone.mp4" class="object-fit-cover" type=video/mp4 autoplay mute loop>
      </video>
    </div>
    <div class="carousel-item" style="background-color: #14b1bb;">
      <img src="assets/img/banner/banner home.jpg" class="d-block w-100 d-lg-block d-none c-img" alt="...">
      <div class="carousel-caption ">
        <h1 class="text-dark">
          Design.Consult.<br>
          Advertise. </h1>
        <p>
          High-quality, relevant content is essential for engaging <br>
          & retaining online audiences.
        </p>

        <div class="buttons d-sm-flex align-items-center" data-aos="fade-up" data-aos-delay="300" data-aos-offset="0" data-aos-duration="1000">
          <!-- <button class="common__btn buttons_file" href="contact.php" style="background-color: #000; border-style: none;"> -->
          <a href="contact.php" class="common__btn buttons_file" style="background-color: #000; border-style: none;"><span> Get A Quote</span>
            <img src="assets/icons/arrow-up-right.svg" alt="" />
          </a>
          </button>
          <!-- <button class="common__btn buttons_outline mt-4 mt-sm-0">
            <span>More About Us</span>
            <img src="assets/icons/arrow-up-right-yellow.svg" alt="" />
          </button> -->
        </div>
      </div>
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>






<!-- who -->



<div class="container-fluid header-to">
  <img src="assets/img/banner/bnnww.jpg" alt="" class="c-img  d-lg-block d-none">
  <!-- <img src="assets/img/banner/hm.png " alt="" class="mb-show d-sm-block d-none" style="height: 400px;"> -->
  <!-- <div class="container who-banner">
    <div class="animation">
      <h1 class="swift-up-text">Turning Brands into icons with expert marketing
      </h1>
    </div>
  </div> -->
  <div class="row">
    <div class="col-12 d-flex justify-content-xl-between justify-content-center align-items-center">

      <div class="banner__content_title-s">
        <h1 data-aos="fade-up text-dark mt-5 ms-5 mt-sm-5 ms-sm-2" data-aos-delay="100" data-aos-offset="0" data-aos-duration="1000">Turning Brands into icons with expert marketing
        </h1>
        <div class="d-flex justify-content-center gap-2 banner__content_title-t ">
          <a href="index.php">Home</a>
          <span>/</span> <a href="services.php">Services</a>
        </div>
      </div>

    </div>
  </div>
</div>














<!-- slide Services -->
<!--  container3 -->
<div class="container-fluid source" style="font-family: 'Livvic', sans-serif;">
  <div class="container source1">
    <div class="row text-center text-drak mt-5">
      <div class="col-12 mt-5 ser-title">
        <h1>Our Services</h1>
        <!-- <p class="display-5 fw-bold">Our Service</p> -->
        <!-- <p class="lead text-center ">Custom Software
          Development concept to
          execution, we build tailored software <br>solutions that perfectly match your business requirements.
        </p> -->
      </div>
    </div>
  </div>
  <div class="container ">
    <div class="row  my-3 g-4 ">
      <div class="col-12 col-lg-4 col-md-6  ">
        <div class="card ">
          <div class="card-bodys">
            <img src="assets/img/icon/dm01.png" alt="" />
            <h2>Digital-Marketing</h2>
            <ul class="mb-5">

              <li><span></span>Search Engine Optimization (SEO)</li>
              <li><span></span>
                Search Engine Marketing (SEM)
              </li>
              <li><span></span>
                Social Media Marketing (SMM)
              </li>
              <li><span></span>Email Marketing</li>
              <li> <span></span>Pay-Per-Click (PPC) Advertising</li>
            </ul>
            <a href="digital-marketing.php" class="mt-5"> Read More</a>
          </div>
        </div>
      </div>
      <div class="col-12  col-lg-4 col-md-6   ">
        <div class="card g-0">
          <div class="card-bodys">
            <img src="assets/img/icon/cc.png" alt="" />
            <h2>Content Creation</h2>
            <ul class="mb-5">
              <li><span></span>Engaging Copywriting</li>
              <li><span></span>
                Compelling Video Production
              </li>
              <li><span></span>
                Stunning Photography
              </li>
              <li><span></span>
                Blog and Article Writing</li>
              <li><span></span>Social Media Content Creation</li>

            </ul>
            <a href="content-creation.php" class=" mt-3
              "> Read More</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4 col-md-6 ">
        <div class=" card g-0">
          <div class="col-12 card-bodys ">
            <img src="assets/img/icon/gp.png" alt="" />
            <h2>Graphic Designing
            </h2>
            <ul class="mb-5">
              <li><span></span>Logo Design and Branding</li>
              <li><span></span>
                Brochure and Flyer Design
              </li>
              <li><span></span>
                Poster and Banner Design
              </li>
              <li>
                <span></span>Infographics
              </li>
              <li>
                <span></span>Packaging Design
              </li>
            </ul>
            <a href="graphic-design.php" class="mt-3 "> Read More</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-4 col-md-6  ">
        <div class="card g-0">
          <div class="card-bodys">
            <img src="assets/img/icon/web.png" alt="" />
            <h2>Web Development</h2>
            <ul class="mb-5">
              <li><span></span>Custom Website Design and Development</li>
              <li><span></span>
                E-commerce Solutions
              </li>
              <li><span></span>
                Mobile-Friendly Responsive Design
              </li>
              <li><span></span>Website Maintenance and Support</li>

            </ul>
            <a href="web-development.php" class=" mt-3"> Read More</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4 col-md-6   ">
        <div class="card g-0">
          <div class="card-bodys">
            <img src="assets/img/icon/brand.png" alt="" />
            <h2>Brand Identity</h2>
            <ul class="mb-5">
              <li>
                <span></span>Brand Guidelines Development
              </li>
              <li>
                <span></span>Brand Positioning and Messaging
              </li>
              <li><span></span>
                Brand Identity Consultation
              </li><span></span>
              <li><span></span>Brand Collateral Design</li>
              <li><span></span>Brand Recognition</li>

            </ul>
            <a href="brand-identity.php" class="mt-3
              "> Read More</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4 col-md-6   ">
        <div class="card g-none">
          <div class="card-bodys">
            <img src="assets/img/icon/comm.png" alt="" />
            <h2>Consulting</h2>
            <ul class="mb-5">
              <li> <span></span>Strategic Planning</li>
              <li>
                <span></span> Market Analysis and Research
              </li>
              <li>
                <span></span> Brand Strategy Development
              </li>
              <li><span></span>Digital Marketing Strategy</li>
              <li><span></span>Campaign Optimization</li>
            </ul>
            <a href="consulting.php" class=" mt-3"> Read More</a>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>
<!--  container3 -->






<!-- --------------- start Footer ----------- -->
<?php include('footer.php'); ?>
</body>

</html>