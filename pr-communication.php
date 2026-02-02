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
    <h1>Strategic Reputation Management and Stakeholder Engagement.</h1>
  </section>

  <!-- P TAG + OUR SERVICES -->
  <section class="services-text">
    <p>We manage public perception and stakeholder relationships for sector skill councils, educational institutions, and brands through strategic communications, media engagement, and reputation building. Our PR services position organizations as industry leaders while navigating complex stakeholder landscapes.
    </p>

    <h2>Our Services</h2>
  </section>

  <!-- EXISTING COMPONENT (NOT TOUCHED) -->
  <section class="brand-timeline">

    <div class="timeline-row with-line">
      <div class="timeline-card">
        <h3>Communication Planning</h3>
        <p>Comprehensive communication strategies audit and analysis, objective setting, stakeholder mapping, messaging frameworks, and channel planning aligned with organizational goals.</p>
      </div>

      <div class="timeline-card">
        <h3>Press Content Development</h3>
        <p>Professional press releases, media advisories, press kits, thought leadership articles, and spokesperson preparation for effective media engagement.</p>
      </div>

      <div class="timeline-card">
        <h3>Media Coordination & Relations</h3>
        <p>Proactive media outreach, press conference management, interview coordination, media monitoring, and relationship building with key journalists and publications.</p>
      </div>
    </div>

    <div class="timeline-row with-line">
      <div class="timeline-card">
        <h3>Internal & External Communication</h3>
        <p>Integrated communication programs- employee communications, stakeholder updates, crisis communications, and change management messaging for organizational alignment.</p>
      </div>

      <div class="timeline-card">
        <h3>Digital Reputation Management</h3>
        <p>Online reputation monitoring, response strategy development, review management, and digital crisis mitigation to protect and enhance organizational credibility.</p>
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

.top-banner {
  width: 100%;
  height: 50vh;
  background-image: url("https://castercomm.com/wp-content/uploads/2019/12/BLog-pic.png");
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