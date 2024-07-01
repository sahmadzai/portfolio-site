<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="National Association of Community Health Providers">
    <link rel="shortcut icon" href="#">
    <title>Home | NCHP</title>
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Karla:wght@400;500;700&family=Montserrat:wght@400;600;700&display=swap"
        rel="stylesheet">
    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c690cab681.js" crossorigin="anonymous"></script>

    <!--Custom CSS-->
    <link rel="stylesheet" href="./assets/css/lpage.css">
    <!--Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

</head>

<body>
    <div class="sticky-banner">
        <p>This is a DEMO! &copy; Copyright <a href="https://sahmadzai.com">sahmadzai.com</a></p>
    </div>

    <!---Navigation -->
    <nav class="navbar navbar-expand-lg bg-transparent p-3" id="main">
        <a class="navbar-brand" href="/">NCHP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pricing">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#goals">Goals</a>
                </li>
            </ul>
            <div class="login">
                <a href="#" class="btn btn-primary">Log In</a>
                </span>
            </div>
        </div>
    </nav>
    <!--- End Navigation -->

    <!--Main Hero Section-->
    <section class="main-hero">

        <div class="hero-container col-xxl-12 px-4 py-5 m-auto">
            <div class="main-accent-img"></div>
            <div class="row flex-lg align-items-center g-8 ">
                <div class="col-lg-6 col-sm-6 col-12 hero-text">
                    <h1 class="display-5 fw-bold">Builiding better <span
                            style="color: var(--accent-color);">communities</span>, one provider at a time.</h1>
                    <p class="lead">The National Cooperative of Healthcare Providers (NCHP) is the voice for healthcare
                        providers seeking to reduce their business expenses and increase their business revenue and
                        profits.
                    </p>
                    <div class="hero-cta">
                        <div class="row">
                            <a class="btn btn-accent" href="#pricing">Get Started Today</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-6 hero-img">
                    <img src="./assets/images/doctorimg1.png" class="d-block mx-lg-auto img-fluid"
                        alt="Image of a group of doctors smiling. NACHP Hero Image">
                </div>


            </div>
        </div>
    </section>



    <!-------------------------------------------Offer Section-------------------------->
    <section class="offer" id="services">
        <div class="row justify-content-center text-center">
            <div class="col-xxl-12">
                <h2 class="what-we-offer"> Some Services We Offer</h2>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-4 col-md-12 col-sm-12 mt-12">
                <div class="offer-box mt-10  rounded">
                    <div class="offer-title">
                        <img class="offer-icon" src="./assets/images/search_client.png"
                            srcset="./assets/images/search_client.svg"
                            alt="An icon that is a silohuette of a person with a magnifying glass.">
                        <h3 class="offer-cat d-flex align-items-center"> DHP License Monitoring </h3>
                    </div>
                    <div class="offer-text">
                        <p class="offer-desc">We receive daily updates regarding health professionals’ license renewal
                            or expiration,
                            notices of proceedings, and/or case decisions which we then alert our members of any
                            employee
                            <span class="dots" style="display: none;">license issues. <br> Per DMAS regulation
                                12VAC30-60-5.D providers shall maintain documentation that
                                demonstrates that individuals providing services have the required qualifications
                                established by DMAS, the Department
                                of Health Professions (DHP), or the Department of Behavioral Health and Developmental
                                Services (DBHDS).
                        </p>
                        <a onclick="readMore(this)" class="readmore">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12 mt-12">
                <div class="offer-box mt-10 rounded">
                    <div class="offer-title">
                        <img class="offer-icon" src="./assets/images/payroll.png" srcset="./assets/images/payroll.svg"
                            alt="An icon that is a silohuette of a two people with a coin.">
                        <h3 class="offer-cat d-flex align-items-center"> HIPPA Risk Assessment Tool</h3>
                    </div>
                    <div class="offer-text">
                        <p class="offer-desc">The purpose of the SRA Tool is to assist small to medium-sized health care
                            providers and their
                            business associates in performing and documenting a Security Risk Assessment. <span
                                class="dots" style="display: none;"><br> The HIPAA
                                Security Rule, effective since 2005, requires all organizations that are covered
                                entities or
                                business associates under HIPAA to conduct a thorough and accurate assessment of the
                                potential
                                risks and vulnerabilities to the confidentiality, integrity, and availability of
                                electronically
                                protected health information held by the entity (164.308(a)(1)(ii)(A)).</p>
                        <a onclick="readMore(this)" class="readmore">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12 mt-12">
                <div class="offer-box mt-10 rounded">
                    <div class="offer-title">
                        <img class="offer-icon" src="./assets/images/MedBreif.png" srcset="./assets/images/MedBreif.svg"
                            alt="An icon of a letter.">
                        <h3 class="offer-cat"> Addiction Physician Collab. Agreement Services </h3>
                    </div>
                    <p>NCHP members have access to Certified Addiction Physicians to ensure compliance with
                        DBHDS Substance Abuse <span class="dots" style="display: none;">Intensive Outpatient Services
                            (12VAC35-105-1730) and Substance
                            Abuse Partial Hospitalization Programs (12VAC35-105-1680).</p>
                    <a onclick="readMore(this)" class="readmore">Read More</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 mt-12">
                <div class="offer-box mt-10 rounded">
                    <div class="offer-title">
                        <img class="offer-icon" src="./assets/images/calling.png" srcset="./assets/images/calling.svg"
                            alt="An icon of a phone.">
                        <h3 class="offer-cat"> Legislation Tracker </h3>
                    </div>
                    <p>NCHP members will receive monthly legislation reports allowing our members to easily stay up
                        to date on bills they care about, so they can take timely action. <span class="dots"
                            style="display: none;"><br>
                            Per DBHDS regulation 12VAC35-105-150(3), providers, including their employees, contractors,
                            students, and volunteers, shall comply with all applicable federal, state, or local laws and
                            regulations.</p>
                    <a onclick="readMore(this)" class="readmore">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 mt-12">
                <div class="offer-box mt-10 rounded">
                    <div class="offer-title">
                        <img class="offer-icon" src="./assets/images/course.png" srcset="./assets/images/course.svg"
                            alt="An icon containing three books.">
                        <h3 class="offer-cat"> OIG Monthly Monitoring </h3>
                    </div>
                    <p>NCHP conducts monthly OIG searches for our members to identify individuals and entities
                        excluded from Federally funded health care programs according to <span class="dots"
                            style="display: none;">section 1128 of the Social
                            Security Act (and from Medicare and State healthcare programs under section 1156 of the
                            Social Security Act).
                            NCHP can ensure that new hires and current employees are not on the excluded
                            list and alert our members of any issues concerning excluded individuals and entities.
                            <br> Per DMAS providers must comply with the U.S. Department of Health and Human Services
                            Office of Inspector General (HHS-OIG) procedures with regard to excluded individuals (See
                            the
                            Medicaid Memo dated 4/7/2009)</p>
                    <a onclick="readMore(this)" class="readmore">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 mt-12">
                <div class="offer-box mt-10 rounded">
                    <div class="offer-title">
                        <img class="offer-icon" src="./assets/images/staff.png" srcset="./assets/images/staff.svg"
                            alt="An icon containing a silohuette of three people.">
                        <h3 class="offer-cat"> Employee Testing </h3>
                    </div>
                    <p>NCHP offers a pre-employment testing service that measures personality traits and aptitude
                        abilities to ensure your candidates will be an excellent performance fit for your organization.
                        <span class="dots" style="display: none;"><br> The
                            best way to find qualified employees is through our pre-employment tests, which help
                            identify
                            skills, personality types, and aptitudes for specific roles to ensure that whomever we bring
                            on
                            board is a perfect fit.
                    </p>
                    <a onclick="readMore(this)" class="readmore">Read More</a>
                </div>
            </div>
        </div>

    </section>


    <!------------------------About Us--------------------------------------->

    <section class="about-us" id="about">
        <div class="about-us-row row align-items-center position-relative w-100">
            <div class="accent-box"></div>
            <div class="col-lg-6 col-md-6 opt-sm-0 p-3">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-6">
                        <div class="row">
                            <div class="col-lg-12 mt-4 pt-2 p-10">
                                <div class="card work-desk rounded border-0 overflow-hidden">
                                    <img src="./assets/images/pexels-tima-miroshnichenko-8376198.jpg" class="img-fluid"
                                        alt="Image of woman with laptop" />
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-6 col-6">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="card work-desk rounded border-0 overflow-hidden">
                                    <img src="./assets/images/docvc.png" class="img-fluid"
                                        alt="Image of doctor video chat" />

                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-lg-12 col-md-12 mt-4 pt-2">
                                <div class="card work-desk rounded border-0 overflow-hidden">
                                    <img src="./assets/images/telehealth-illustration1.png" class="img-fluid"
                                        alt="Image" />

                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end col-->

            <div class="col-lg-5 col-md-6 col-12 order-1 order-md-2 m-auto">
                <div class="section-title">
                    <h5 class="about-title mb-3">About Us</h5>
                    <h4 class="about-sub mb-3">
                        Our mission is to <span style="color: var(--accent-color);">increase the combined purchasing
                            power of the co-op</span> by increasing paid
                        memberships and negotiating lower costs for products and services offered to provide economic
                        benefits to our members.
                    </h4>
                    <p1 class="about-text mb-0">NCHP works to build better communities throughout the country and a more
                        inclusive economy that empowers
                        health providers to contribute to shared prosperity and well-being for themselves and future
                        generations in our communities. By
                        leveraging the shared resources of the cooperative movement, we seek to engage, partner with,
                        and empower people from all walks of
                        life—particularly those left behind by a shifting economy and facing the most significant
                        economic and societal barriers. We achieve
                        this vision through collaborative partnerships in development, advocacy, public awareness, and
                        thought leadership. </p1>
                </div>
                <div class="section-cta text-center">
                    <a href="#pricing" class="btn btn-primary">Join Today</a>
                </div>
            </div>
        </div>
        <!--end col-->
        </div>
        <!--end row-->
    </section>


    <!-----------------------------------------Pricing Section---------------------------------->

    <section class="price-container" id="pricing">
        <div class="row justify-content-center text-center">
            <div class="col-xxl-12">
                <h2 class="pricing-font">Pricing</h2>
                <h3 class="pricing-sub">Choose the best tier for your needs</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 mt-12">
                <div class="mt-10 price-box rounded">
                    <div class="pricing-name text-center">
                        <h4 class="mb-12 package-name">Tier 1 Membership</h4>
                    </div>
                    <div class="price-features">
                        <p> OIG Monthly Monitoring </p>
                        <p> DHP License Monitoring </p>
                        <p> Legislation Tracker </p>
                    </div>
                    <div class="plan-price text-center" style="margin-top: 38%;">
                        <h2>$750</h2>
                        <p>/year</p>
                    </div>
                    <div class="text-center mt-5">
                        <a class=" btn btn-accent mb-4" href="#">Sign up</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="mt-12 price-box rounded">
                    <div class="pricing-name text-center">
                        <h4 class="mb-12 package-name">Tier 2 Membership</h4>
                    </div>

                    <div class="price-features">
                        <p> All of Tier 1 Benefits </p>
                        <p> Employment Testing <span> <br> ($7.99/candidate)</p>
                        <p> Risk Assessment <span> <br> Contact us for Pricing <span></p>
                    </div>
                    <div class="plan-price text-center" style="margin-top: 24%;">
                        <h2>$900</h2>
                        <p>/year</p>
                    </div>
                    <div class="text-center mt-5">
                        <a class=" btn btn-accent mb-4" href="#">Sign up</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="mt-12 price-box rounded">
                    <div class="pricing-name text-center">
                        <h4 class="mb-12 package-name">Tier 3 Membership</h4>
                    </div>
                    <div class="price-features">
                        <p> All of Tier 2 Benefits </p>
                        <p> Executive/Billing Coaching </p>
                        <p> Staffing Agency (Coming Soon) </p>
                        <p> Training Modules (Coming Soon) </p>
                        <p> Ekco Buisness Platform (Coming Soon) </p>
                    </div>
                    <div class="plan-price text-center">
                        <h2>$1,100</h2>
                        <p> /year</p>
                    </div>
                    <div class="text-center mt-5">
                        <a class=" btn btn-accent mb-4" href="#">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <p class="usage-fee">** Prices do not include the 3% processing fee that will be applied at checkout. **
                </p>
            </div>
        </div>
    </section>


    <!-----------------------------------------Cooperative Goals---------------------------------->
    <!-- Layout will be an image on the right side of the page with text on the left side of the page -->
    <section class="cooperative-goals" id="goals">
        <div class="row justify-content-center">
            <h2 class="cooperative-goals-title">Cooperative Goals</h2>
            <div class="col-lg-6">
                <ul class="cooperative-goals-list">
                    <li class="mb-2"> <span> Partnership Goal</span>: To create lifetime partnerships with our vendors,
                        members, corporate partners, and other charitable organizations we do business.
                    </li>
                    <li class="mb-2"> <span> Service Quality Goal</span>: To focus on hiring and electing individuals
                        that are knowledgeable, skilled, and possess key abilities to ensure the co-op and it members
                        are successful in their missions. </li>
                    <li> <span> Innovation Goal</span>: To create software that alerts health organizations that verify
                        health organizations’ proof of licensure, worker exclusions, and DEA licenses.</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <ul class="cooperative-goals-list">
                    <li class="mb-1"> <span> Education/Training Goal</span>: To educate co-op members, officers,
                        employees, and the general public on the principles and techniques of cooperation. </li>
                    <li class="mb-2"> <span> Economic Goal</span>: To operate on a sustainable financial basis of
                        profitable growth, increasing value for our stakeholders and expanding opportunities for
                        development and career growth for our employees. </li>
                    <li> <span> Advocacy Goal</span>: To negotiate for housing, mercantile, merchandise, brokerage, and
                        the exchange of products and services. </li>
                </ul>
            </div>
        </div>
    </section>

    <!------------------------Contact Section-------------------------------->
    <!-- <section class="contact" id="contact"> 

    <div class="row position-relative w-100">
      <div class="contact-accent-box"></div>
      <div class="col-lg-6 col-md-6 col-sm-12 ml-lg-5">
        <div class="contact-info">
            <h5 class="contact-title">Contact Us</h5>
            <p class="contact-text">Fill out the form and our Team will get back to <br>you soon!</p>
            <div class="contact-box rounded align-items-center"> 
              <i class="contact-icon fa-solid fa-phone h3"></i> 
              <a class="phone-number text-center" href="tel:1234567890"> 123 456 789 </a>
            </div>
            <br>
            <div class="contact-box rounded align-items-center"> 
              <i class="email-icon fa-solid fa-envelope h3"></i>
              <a class="email-text" href="mailto:contact@coopsite.com"> contact@nchp.com </a>
            </div>
            <div class="social-icons">
              <div class="row justify-content-start mt-3 ">
                <div class="col-auto contact-item">
                <a class="nav-link" href="https://www.instagram.com"><img src="./assets/images/Instagram.png" srcset="./assets/images/Instagram.svg" alt="Instagram logo"></a>
                </div>
                <div class="col-auto contact-item">
                  <a class="nav-link" href="https://www.facebook.com"><img src="./assets/images/Facebook.png" srcset="./assets/images/Facebook.svg" alt="Facebook logo"></a>
                </div>
                <div class="col-auto contact-item">
                  <a class="nav-link" href="https://www.twitter.com"><img src="./assets/images/TwitterSquared.png" srcset="./assets/images/TwitterSquared.svg" alt="Twitter logo"></a>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-5 col-sm-12 order-1 order-md-2 m-auto">
        <form class="contact-input" method="post">
            <div class="input-row">
              <p class="input-text">Name</p>  
              <input class="input-box rounded" type="text" name="client-name" placeholder="i.e John Doe"><br>
            </div>
            <div class="input-row">
              <p class="input-text">Company</p>  
              <input class="input-box rounded" type="text" name="client-company" placeholder="i.e Google"><br>
            </div>
            <div class="input-row">
              <p class="input-text">Email</p>  
              <input class="input-box rounded" type="email" name="client-email" placeholder="i.e johndoe@email.com"><br>
            </div>
            <div class="input-row">
              <p class="input-text">Phone Number</p>  
              <input class="input-box rounded" type="tel" name="client-number" placeholder="i.e 123 456 7890"><br>
            </div>
            <div class="input-row">
              <p class="input-text">Message</p>  
              <textarea class="message-input rounded" style="resize: none;" maxlength="200" rows = "4" cols = "5" 
              name="client-message" placeholder="i.e Want to purchase the first plan, tell me more about it!"></textarea><br>
            </div>
            <div class="contact-submit">
              <input class="contact-btn" type="submit" value="Submit">
            </div>
        </form>
          
     
      </div>

  </section> -->

    <!------------------------Footer----------------------------------------->
    <footer>
        <div class="row nopadding justify-content-center text-center">
            <div class="col-xxl-12">
                <a class="footerbr" href="#main">NCHP</a>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center mt-3 ">
                <div class="col-auto footer-item">
                    <a class="nav-link" href="#services">Services</a>
                </div>
                <div class="col-auto footer-item">
                    <a class="nav-link" href="#about">About</a>
                </div>
                <div class="col-auto footer-item">
                    <a class="nav-link" href="#pricing">Pricing</a>
                </div>
                <div class="col-auto footer-item">
                    <a class="nav-link" href="#contact">Goals</a>
                </div>
            </div>
        </div>
        <!-- <div class="row justify-content-center mt-4 ">
      <div class="col-auto footer-item">
        <a class="nav-link" href="#"><img src="/assets/images/Instagram.png" srcset="/assets/images/Instagram.svg" alt="Instagram logo"></a>
      </div>
      <div class="col-auto footer-item">
        <a class="nav-link" href="#"><img src="/assets/images/Facebook.png" srcset="/assets/images/Facebook.svg" alt="Facebook logo"></a>
      </div>
      <div class="col-auto footer-item">
        <a class="nav-link" href="#"><img src="/assets/images/TwitterSquared.png" srcset="/assets/images/TwitterSquared.svg" alt="Twitter logo"></a>
      </div>
    </div> -->
        <div class="copy-right text-center fw-bold">
            <hr>
            <p>
                © 2022 <a href="https://digitalkeyllc.com" target="_blank" class="footer-item"
                    style="color:var(--primary-color); font-size: 14px; margin: 0;">Digital Key, LLC </a>
            </p>
        </div>
    </footer>

    <script>
    //Read more button for multiple paragraphs
    function readMore(btn) {
        let post = btn.parentElement;
        if (post.querySelector(".dots").style.display == "none") {
            post.querySelector(".dots").style.display = "revert";
            btn.innerHTML = "Read Less";
        } else {
            post.querySelector(".dots").style.display = "none";
            btn.innerHTML = "Read More";
        }
    }
    </script>
</body>

</html>