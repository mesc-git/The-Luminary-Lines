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
    <h1>Strategic Guidance for Institutional Growth and Impact.</h1>
  </section>

  <!-- P TAG + OUR SERVICES -->
  <section class="services-text">
    <p>
      We partner with sector skill councils, educational institutions, and organizations to develop robust strategic frameworks, build institutional capacity, and advocate for policy change. Our consulting services combine ecosystem understanding with practical implementation support for sustainable organizational growth.
    </p>

    <h2>Our Services</h2>
  </section>

  <!-- EXISTING COMPONENT (NOT TOUCHED) -->
  <section class="brand-timeline">

    <div class="timeline-row with-line">
      <div class="timeline-card">
        <h3>Brand Building & Positioning</h3>
        <p>Strategic brand audits, competitive analysis, and positioning frameworks that establish your organization as a thought leader and trusted authority in your domain.</p>
      </div>

      <div class="timeline-card">
        <h3>Incubation & Startup Support</h3>
        <p>Complete incubation center setup from infrastructure planning and program design to mentorship network establishment and operational frameworks for fostering innovation ecosystems.</p>
      </div>

      <div class="timeline-card">
        <h3>Communication Strategy Development</h3>
        <p>Comprehensive communication frameworks from stakeholder mapping, messaging architecture, channel strategy, and implementation roadmaps aligned with organizational objectives.</p>
      </div>
    </div>

    <div class="timeline-row with-line">
      <div class="timeline-card">
        <h3>Stakeholder Messaging & Engagement</h3>
        <p>Tailored communication approaches for diverse stakeholder groups- government bodies, industry partners, students, parents, and community organizations.</p>
      </div>

      <div class="timeline-card">
        <h3>Programme Advocacy</h3>
        <p>Strategic advocacy initiatives- policy briefs, stakeholder presentations, media engagement, and coalition building to advance institutional programs and influence policy decisions.</p>
      </div>

      <div class="timeline-card">
        <h3>Institutional Positioning</h3>
        <p> Long-term positioning strategies that establish credibility, demonstrate impact, and differentiate your institution in the education and skilling landscape.</p>
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
  background-image: url("assets/img/homepageImages/consultancy-img.png");
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
  /* width: calc((100% / 3) * var(--items)); */
  width: 100%;
}

.timeline-card {
  position: relative;
  align-self: start;
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