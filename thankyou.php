<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Thank You</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: #f4f7fb;
    }

       /* NAVBAR */
  
  .navbar {
  width: 100%;
  height: 100px;             
  background: #2c3e50;
  padding: 0 30px;           
  display: flex;
  align-items: center;       
  justify-content: center;
  box-shadow: 0 2px 10px rgba(0,0,0,0.08);
}

    .logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logo img {
        height: 90px;           
        max-height: 100%;
        width: auto;
        object-fit: contain;
    }

 /* Thankyou Section */


    .thankyou-wrapper {
      min-height: calc(100vh - 100px);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 100px;
    }

    .thankyou-box {
      background: #ffffff;
      padding: 40px 30px;
      border-radius: 10px;
      text-align: center;
      max-width: 850px;
      width: 100%;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .thankyou-box img {
      width: 90px;
      margin-bottom: 20px;
    }

    .thankyou-box h1 {
      font-size: 32px;
      color: #2c3e50;
      margin-bottom: 10px;
    }

    .thankyou-box p {
      font-size: 18px;
      color: #555;
      margin-bottom: 25px;
    }

    .thankyou-box a {
      display: inline-block;
      padding: 12px 30px;
      background: #2c3e50;
      color: #ffffff;
      text-decoration: none;
      border-radius: 6px;
      font-size: 16px;
      transition: 0.3s;
    }

    /* =====================
   MOBILE RESPONSIVE
===================== */
@media (max-width: 768px) {

  /* Navbar */
  .navbar {
    height: 80px;
    padding: 0 15px;
  }

  .logo img {
    height: 65px;
  }

  /* Thank You Wrapper */
  .thankyou-wrapper {
    min-height: calc(100vh - 80px);
    padding: 40px 20px;
  }

  .thankyou-box {
    padding: 30px 20px;
  }

  .thankyou-box img {
    width: 70px;
    margin-bottom: 15px;
  }

  .thankyou-box h1 {
    font-size: 26px;
  }

  .thankyou-box p {
    font-size: 16px;
    line-height: 1.5;
  }

  .thankyou-box a {
    padding: 10px 24px;
    font-size: 15px;
  }
}

  
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <div class="navbar">
    <div class="logo">
      <!-- Demo Logo Image -->
      <img src="assets/img/banner/New-Project2.png" alt="Logo">
      <!-- <span>My Website</span> -->
    </div>
  </div>

  <!-- THANK YOU CONTENT -->
  <div class="thankyou-wrapper">
    <div class="thankyou-box">
      <!-- Demo Image -->
      <img src="https://cdn-icons-png.flaticon.com/512/845/845646.png" alt="Success">

      <h1>Thank You!</h1>
      <p>Your request has been successfully submitted we're excited to connect with you and understand your vision.</p>

      <a href="index.php">Back to Home</a>
    </div>
  </div>

</body>
</html>
