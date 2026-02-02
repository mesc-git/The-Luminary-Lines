<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- custom-css link -->
    <link rel="stylesheet" href="assets/css/custom.css" />

</head>
<!-- --------------- Start Header ------------ -->

<?php include('header.php'); ?>
    
<body>

  <!-- TOP BACKGROUND WITH HEADING -->
  <section class="top-banner">
    <h1>Building Brands That Lead, Campaigns That Convert...</h1>
  </section>

  <!-- P TAG + OUR SERVICES -->
  <section class="services-text">
    <p>
      We craft strategic brand identities and integrated marketing campaigns tailored for sector skill councils, educational institutions, and purpose-driven brands. From brand positioning to digital execution, we ensure your organization stands out, engages stakeholders, and builds lasting recognition in competitive landscapes.
    </p>

    <h2>Our Services</h2>
  </section>

  <!-- EXISTING COMPONENT (NOT TOUCHED) -->
  <section class="brand-timeline">

    <div class="timeline-row with-line">
      <div class="timeline-card">
        <h3>Brand Identity Development</h3>
        <p>Complete brand identity systems,- logos, visual guidelines, brand voice, and positioning frameworks that reflect your institutional mission and resonate with your target audience.</p>
      </div>

      <div class="timeline-card">
        <h3>Campaign Planning & Execution</h3>
        <p>Data-driven campaign strategies across multiple channels from awareness campaigns and enrollment drives to advocacy initiatives and stakeholder engagement programs.</p>
      </div>

      <div class="timeline-card">
        <h3>Social Media Strategy & Management</h3>
        <p>Comprehensive social media presence development from content calendars, platform optimization, community management, and performance analytics to build engaged online communities.</p>
      </div>
    </div>

    <div class="timeline-row with-line">
      <div class="timeline-card">
        <h3>Marketing Collaterals</h3>
        <p> Professional design and production of brochures, presentations, annual reports, infographics, posters, and all promotional materials that communicate your value effectively.</p>
      </div>

      <div class="timeline-card">
        <h3>Digital Promotions</h3>
        <p>Targeted digital advertising campaigns across Google, Meta, LinkedIn, and other platforms, optimized for reach, engagement, and conversions within institutional budgets.</p>
      </div>
    </div>
  </section>


<style>
:root {
  --line-height: 2px;
  --dot-size: 16px;      /* bada dot */
  --dot-border: 3px;
  --line-color: #fa991c;
  --gap: 40px;
}

/* ================= TOP BACKGROUND SECTION ================= */
.top-banner {
  width: 100%;
  height: 50vh;
  background-image: url("assets/img/homepageImages/Branding-Img.png");
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  position: relative; 
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 1;
}

.top-banner::after {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.3);
  z-index: 1; 
}

.top-banner h1 {
  position: relative;
  z-index: 2;
  color: #fff;
  font-size: 70px;
  font-weight: 800;
  text-align: center;
  line-height: 1.2;
  text-shadow: 0 4px 15px rgba(0,0,0,0.6);
}

.services-text {
  text-align: center;
  max-width: 90%;
  margin: 60px auto 20px;
  padding: 0 20px;
}

.services-text p {
  font-size: 24px;
  line-height: 1.6;
  color: #555;
  margin-bottom: 50px;
}

.services-text h2 {
  position: relative;
  color: #000;
  font-size: 56px;
  font-weight: 700;
  padding-bottom: 14px;
}

/* underline accent */
.services-text h2::after {
  content: "";
  position: absolute;
  left: 50%;
  bottom: 0;
  transform: translateX(-50%);
  width: 80px;
  height: 4px;
  background: #000;
  border-radius: 2px;
}

.brand-timeline {
  padding: 70px 80px;
}

.timeline-row {
  position: relative;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 60px;
  margin-bottom: 90px;
}

.timeline-row.with-line::before {
  content: "";
  position: absolute;
  top: -40px;
  left: 0;
  height: var(--line-height);
  background: var(--line-color);
  width: calc((100% / 3) * var(--items));
}

.timeline-card {
  position: relative;
}

.timeline-card::before {
  content: "";
  position: absolute;
  top: -48px;
  left: 0;
  width: var(--dot-size);
  height: var(--dot-size);
  background: #000;
  border-radius: 50%;
  border: var(--dot-border) solid #fff;
  box-shadow: 0 0 0 2px var(--line-color);
  z-index: 2;
}

.timeline-card h3 {
  font-size: 25px;
  font-weight: 700;
  margin-bottom: 12px;
}


.timeline-card p {
  font-size: 18px;
  line-height: 1.8;
  color: #444;
}

@media (max-width: 768px) {

  .top-banner {
    height: 38vh;
  }

  .top-banner h1 {
    font-size: 34px;
    padding: 0 15px;
    line-height: 1.3;
  }

  .services-text {
    margin: 40px auto 10px;
    padding: 0 15px;
  }

  .services-text h2 {
    font-size: 38px;
  }

  .services-text p {
    font-size: 20px;
    line-height: 1.6;
  }

  .brand-timeline {
    padding: 40px 20px;
  }

  .timeline-row {
    grid-template-columns: 1fr;
    gap: 50px;
    margin-bottom: 60px;
    padding-left: 45px;
  }

  .timeline-row.with-line::before {
    display: none;
  }

 
  .timeline-card::before {
    top: 6px;
    left: -36px;
  }

  .timeline-card h3 {
    font-size: 22px;
  }

  .timeline-card p {
    font-size: 16px;
    line-height: 1.6;
  }

  .highlight {
    font-size: 14px;
    padding: 5px 12px;
  }
}
</style>


  <!-- JS (AS IS) -->
  <script>
    document.querySelectorAll('.timeline-row').forEach(row => {
      row.style.setProperty(
        '--items',
        row.querySelectorAll('.timeline-card').length
      );
    });
  </script>


<?php include('footer.php'); ?>
</body>
</html>