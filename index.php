<?php
  session_start();
  ?>

<!DOCTYPE html>

<html lang="en-US">
  <head itemscope itemtype="https://schema.org/WebSite">
    <meta charset="UTF-8" />

    <meta http-equiv="refresh" content="60" />

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />

    <style>


      /* media queries */


      .logo{
        /* margin-top: 2rem; */
      }
      img.logo {
          width: 14.8rem;
          height: 6.9rem;
          /* margin-top: 1rem; */
      }
      a.nav-link.active {
          /* color: #546E7A; */
          /* color: white; */
          color: black;
          text-decoration: underline;
          font-weight: 500;
          font-family: "Lato", Sans-serif;
          /* font-family: poppins; */
          font-size: 14px;
          padding-left: 50rem;

      }
      a.nav-link.active:hover{
          /*text-decoration:none;*/
          color: #ff8200;
      }

      .main {
      }
      .fa-solid{
        font-size: 1.5rem;
        margin-right: 1rem;
      }
      div#pb-1 {
          float: right;
      }
      i.fa-solid.fa-phone {
          margin-top: 3rem;
      }
      .fa-regular{
        font-size: 2rem;
        margin-right: 1rem;
        margin-top: 3rem;

      }
      .phone-bar {
          /*padding-right: 2rem;*/

          /* border-left: 1px solid black; */ */
      }
      .email-bar {
        padding-left: 2rem;
      }

      /* background image plus overlay */

      .page-content {
          /* background-image: url("images/bg-pic.jpg"); */
      background: url("https://mva-usa.com/wp-content/uploads/2024/06/pexels-photo-235226.jpeg") rgb(53 38 12 / 0.7);
          background-blend-mode: multiply;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          /* background-size: 1583px 760px; */
          padding: 5rem 2rem 5rem 2rem;
      }
      .text{
        padding-top: 5rem;
        padding-left: 2rem;
        padding-right: 1rem;
      }
      .form-control{
        font-size: 14px;
        width: 23rem;
        border-radius: 25px;
        color: #999;
      }
      .form {
          padding: 4rem 3rem 4rem 3rem;
        /*background: rgb(106 65 25 / 41%);*/
        background: rgb(0 166 255 / 11%);
          /* background: rgba(0,0,0,.6); */
          margin-left: 5rem;
      }
      input.btn.btn-primary{
        padding: 0.5rem 1rem 0.5rem 1rem;
        margin-left: 5rem;
        color: black;
        border-color: black;
        background-color: white;
        font-family: 'Poppins', sans-serif;
        border-radius: 25px;
      }
      input.btn.btn-primary:hover{
      background-color: black;
      color: white;
      border-color: white;
      border-width: 2px;
      }
      .our-clients{
        padding-top: 5rem;
        padding-bottom: 5rem;
      }
      .client-header{
        padding-bottom: 1rem;
      }
      label.form-check-label{
      color: white;
      font-family:'Muli', sans-serif;
      font-size: 10px;
      }
      .footer-content {
          background-color:#1b3455;
          color: #fff;
          padding: 3rem 0rem 6rem 0rem;
          border-bottom: 1px solid #323232;
          text-align: justify;
      }
      .copyright{
        /* background-color: #272727; */
        background-color: #004e62c9;
        color: #ffffff;
        padding: 2rem 0rem 2rem 1rem;
      }
      h2.h2-title {
          font-size: 16px;
          font-weight:bold;
          font-family: 'Poppins', sans-serif;

      }
      .p1-title {
          font-family:'Muli', sans-serif;
          font-size: 17px;
          line-height: 1.65em;
          text-align: justify;
      }
      .copyright{
        font-family:'Muli', sans-serif;
        font-size: 18px;
      }

      .f-row{
          margin-right: 31rem;
      }
      /* changes */
      .footer-row {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        column-gap: 20px;

      }
      .footer-row .footer-column {
        width: 45%;
      }
      /* reponsive web */

      @media (max-width:576px) {
          .main {
          display: none;
      }
      }

      @media (max-width:576px) {
      div#pb-1 {
        float: none;
      }
      }

      @media (max-width:576px) {
      .form {
          /*padding: 4rem 3rem 4rem 3rem;*/
          padding: 2rem 1rem 3rem 1rem;
          margin-left: 0rem;
          /*background: rgb(53 38 12 / 35%);*/
            /*background: rgb(106 65 25 / 41%);*/
            background: rgb(0 166 255 / 11%);

      }
      }

      @media (max-width:576px) {
      .form-control {
          font-size: 14px;
          width: 13rem;
          border-radius: 25px;
          color: #999;
      }
      }



      @media (max-width:576px) {
      div#lg-2 {
          margin-top: -1.5rem;
      }
      .text {
          padding-top: 0rem;
          padding-left: 0rem;
          padding-right: 0rem;
      }
      div#lg-1 {
          margin-top: -1.5rem;
      }
      input.btn.btn-primary {
          padding: 0.5rem 1rem 0.5rem 1rem;
          margin-left: 3rem;
          color: black;
          border-color: black;
          background-color: white;
          font-family: 'Poppins', sans-serif;
          border-radius: 25px;
      }
      .email-bar {
        padding-left: 1rem;
      }
      h2.h2-title {
          text-align: center;
      }
      .p1-title {
          text-align: justify;
          padding-bottom: 2rem;
      }
      .footer-content {
          background-color: #1b3455;
          color: #fff;
          padding: 3rem 0rem 0rem 0rem;
          border-bottom: 1px solid #323232;
      }
      .form-control {
          font-size: 14px;
          border-radius: 25px;
          color: #999;
      }
      .copyright{
        /* background-color: #272727; */
            background-color: #004e62c9;
        color: #ffffff;
        padding: 2rem 0rem 2rem 6rem;
      }
      .form {
          /*padding: 4rem 3rem 4rem 3rem;*/
          padding: 2rem 1rem 3rem 1rem;
          margin-left: 0rem;
        /*background:rgb(106 65 25 / 41%);*/
        background: rgb(0 166 255 / 11%);
      }
      div#pb-1 {
        float: none;
      }
      .main {
          display: none;
      }
      }

      @media (max-width:576px) {
      .p1-title {
          text-align: justify;
          padding-bottom: 2rem;
      }
      .p-title {
          text-align: center;
          /*text-align:justify;*/
          padding-bottom: 2rem;
      }
      h2.h2-title {
          text-align: center;
      }
      .email-bar {
        padding-left: 1rem;
      }
      .col-2 {
          display:none;
      }
      .col-3 {
          display:none;
      }
      /* changes */
      .footer-row {
        row-gap: 50px;
      }
      .footer-row .footer-column {
        width: 100%;
        text-align: justify;
      }
      }

      .fa-solid{
        font-size:0.9rem;
      }
    </style>
    <title>Health-care-explore.com</title>
  </head>

  <body
    onload="hide()"
    class="home page-template page-template-template-home page-template-template-home-php page page-id-8 wp-custom-logo has-banner"
    itemscope
    itemtype="https://schema.org/WebPage"
  >
    <!-- Top header -->
    <div class="top-navbar" style="background-color: #060002">
      <div class="container">
        <nav class="navbar navbar-expand-lg">
          <div class="container">
            <a class="navbar-brand" href="index.php">
              <img
                class="logo"
                style="width: 12pc; margin-left: 0rem"
                src="https://mva-usa.com/wp-content/uploads/2024/06/WBG-removebg-preview.png"
                alt="company logo"
            /></a>

            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="nav justify-content-end">
                <!--<li class="nav-item ">-->
                <!--  <a class="nav-link active" aria-current="page" href="https://keepingpet.com/">HOME</a>-->
                <!--</li>-->
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <!-- Bootstrap Alert -->

    <!-- page content  -->
    <div class="page-content">
      <!-- <div class="bg"> -->
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="text">
              <h2 style="color: white; font-family: 'Poppins', sans-serif">
                Get Your Free Consultation
              </h2>
              <br />
              <h3 style="color: white">
                Injured in an Accident? Speak to a Lawyer Near You.
              </h3>
              <!-- <ul style="color: white; font-family: 'Muli', sans-serif; ">
                             <i class="fa-solid fa-check fa-xs " > </i>
                        Injured in an Accident? Speak to a Lawyer Near You.<br>
                               <i class="fa-solid fa-check fa-xs " > </i>
                             Navigating the Affordable Care Act and finding the best coverage options. <br>
                               <i class="fa-solid fa-check fa-xs " > </i>
                             Access to a network of trusted insurance providers offering great rates and plans.<br>
                               <i class="fa-solid fa-check fa-xs " > </i>
                      
                            Personalized assistance in understanding and selecting the most suitable plan for you from the Health Insurance Marketplace.<br>
                            <i class="fa-solid fa-check fa-xs " > </i>
                      
                            Streamlined and user-friendly online enrollment process.<br>
                            <i class="fa-solid fa-check fa-xs " > </i>
                      
                            Peace of mind with the right Affordable Care Act plan.<br>
                            <i class="fa-solid fa-check fa-xs " > </i>
                      
                             Enroll online or via phone.<br>
                            
                          </ul> -->
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-md-12 col-sm-12">
        <!-- Form template -->
        <div class="form" style="border-radius: 22px">
          <!--<form action="index.php" method="POST">-->

          <form action="active-process.php" method="POST">
            <h2 style="color: white; font-family: 'Poppins', sans-serif">
              Get Your Quote
            </h2>
            <br />
            <input
              type="name"
              name="fname"
              class="form-control"
              id="exampleInputname"
              aria-describedby="emailHelp"
              placeholder="First Name"
              required
            /><br />
            <input
              type="name"
              name="lname"
              class="form-control"
              id="exampleInputname"
              aria-describedby="emailHelp"
              placeholder=" Last Name"
              required
            /><br />
            <input
              type="email"
              name="email"
              class="form-control"
              id="exampleInputname"
              aria-describedby="emailHelp"
              placeholder="Email"
              required
            /><br />
            <input
              type="phone"
              name="phone"
              class="form-control"
              id="exampleInputphone"
              aria-describedby="emailHelp"
              placeholder="Phone"
              required
            /><br />

            <label for="exampleInputstate"></label>
            <select
              name="state"
              class="form-control"
              id="exampleInputstate"
              aria-describedby="emailHelp"
            >
              <option value="">Select State</option>
              <option value="AL">AL</option>
              <option value="AK">AK</option>
              <option value="AZ">AZ</option>
              <option value="AR">AR</option>
              <option value="CA">CA</option>
              <option value="CO">CO</option>
              <option value="CT">CT</option>
              <option value="DE">DE</option>
              <option value="FL">FL</option>
              <option value="GA">GA</option>
              <option value="HI">HI</option>
              <option value="ID">ID</option>
              <option value="IL">IL</option>
              <option value="IN">IN</option>
              <option value="IA">IA</option>
              <option value="KS">KS</option>
              <option value="KY">KY</option>
              <option value="LA">LA</option>
              <option value="ME">ME</option>
              <option value="MD">MD</option>
              <option value="MA">MA</option>
              <option value="MI">MI</option>
              <option value="MN">MN</option>
              <option value="MS">MS</option>
              <option value="MO">MO</option>
              <option value="MT">MT</option>
              <option value="NE">NE</option>
              <option value="NV">NV</option>
              <option value="NH">NH</option>
              <option value="NJ">NJ</option>
              <option value="NM">NM</option>
              <option value="NY">NY</option>
              <option value="NC">NC</option>
              <option value="ND">ND</option>
              <option value="OH">OH</option>
              <option value="OK">OK</option>
              <option value="OR">OR</option>
              <option value="PA">PA</option>
              <option value="RI">RI</option>
              <option value="SC">SC</option>
              <option value="SD">SD</option>
              <option value="TN">TN</option>
              <option value="TX">TX</option>
              <option value="UT">UT</option>
              <option value="VT">VT</option>
              <option value="VA">VA</option>
              <option value="WA">WA</option>
              <option value="WV">WV</option>
              <option value="WI">WI</option>
              <option value="WY">WY</option>
            </select>




            <br />
            
            
            
            <input
              type="text"
              name="zipcode"
              class="form-control"
              id="exampleInputzipcode"
              aria-describedby="emailHelp"
              placeholder="Zip_code"
            /><br />
            <!--  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required><br>-->
            <!--<input type="text" name="z-code" class="form-control" id="exampleInputzipcode" aria-describedby="emailHelp" placeholder="Postal Code/Zip Code" required><br>-->

            <!-- <label for="">Has smartphone?</label> -->
            <div class="form-check">
              <input
                type="radio"
                name="has_smartphone"
                value="yes"
                class="form-check-input"
                id="smartphoneYes"
                required
              />
              <label class="form-check-label" for="smartphoneYes"
                >Yes, I have a smartphone</label
              >
            </div>
            <div class="form-check">
              <input
                type="radio"
                name="has_smartphone"
                value="no"
                class="form-check-input"
                id="smartphoneNo"
                required
              />
              <label class="form-check-label" for="smartphoneNo"
                >No, I don't have a smartphone</label
              >
            </div>
            <br />
            
            

            <div class="form-check">
              <label
                class="form-check-label"
                for="flexCheckDefault"
                style="text-align: justify"
              >
                By clicking the "GetQuote" Below," you acknowledge and agree to
                our
                <a href="https://mva-usa.com/privacy-policy/">
                  Privacy Policy
                </a>
                &
                <a href="https://mva-usa.com/privacy-policy/"
                  >Terms and Conditions</a
                >
                By providing your contact information, you authorize
                HealthCareConnect, its affiliates, and<a
                  href="https://mva-usa.com/privacy-policy/"
                >
                  partners</a
                >
                to contact you via email, telephone calls, pre-recorded
                messages, ringless voicemails, and text messages at the number
                you provided. These communications may be conducted using an
                autodialer and may include offers about products or services
                related to healthcare exploration.
              </label>
            </div>
            logo

            <br />

            <input
              type="submit"
              name="submit"
              value="Get Quote"
              class="btn btn-primary"
            />
          </form>
        </div>
      </div>
    </div>

    <!-- clients section  picture -->
    <!-- footer section  -->

    <div class="footer">
      <div class="footer-content">
        <div class="container" style="max-width: 1172px">
          <!--gave class footer row -->
          <div class="footer-row">
            <div class="footer-column">
              <h2 class="h2-title">About Us</h2>
              <div class="p-title">
                Car accidents, whether minor or severe, can have a profound
                impact on individuals and communities, and often occur without
                warning. Our team is dedicated to helping you navigate the
                difficult aftermath, providing expert guidance and support every
                step of the way. From understanding your legal rights to
                managing insurance claims, we're committed to ensuring you
                receive the care and attention you deserve during this
                challenging time. Let us help you move forward with confidence
                and peace of mind.
              </div>
            </div>

            <div class="footer-column">
              <h2 class="h2-title">CONTACT US</h2>
              <div class="p-title">
                <p>Email: info@mva-usa.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- </div> -->

    <!-- copyrights -->

    <div class="copyright">
      <div class="container" style="max-width: 1172px">
        <div class="row">Copyright 2024 | MVA-USA</div>
      </div>
    </div>

    <!-- TrustedForm -->
    <script type="text/javascript">
      (function () {
        var tf = document.createElement("script");
        tf.type = "text/javascript";
        tf.async = true;
        tf.src =
          ("https:" == document.location.protocol ? "https" : "http") +
          "://api.trustedform.com/trustedform.js?field=xxTrustedFormCertUrl&ping_field=xxTrustedFormPingUrl&l=" +
          new Date().getTime() +
          Math.random();
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(tf, s);
      })();
    </script>
    <noscript>
      <img src="https://api.trustedform.com/ns.gif" />
    </noscript>
    <!-- End TrustedForm -->
  </body>
</html>
