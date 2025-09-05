<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arslan Ahmed | Creative Developer</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body class="bg-light">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Arsalan<span style="color: var(--secondary-color);"></span></a>
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="particles" id="particles"></div>
        <div class="container">
            <div class="row align-items-center min-vh-100 py-5">
                <div class="col-lg-6 text-center order-1 order-lg-2">
                    <img src="{{ asset('assets/images/arsalan.jpg') }}" title="Arslan Ahmed" alt="Arslan Ahmed"
                        class="img-fluid float-animation rounded-circle">
                </div>
                <div class="col-lg-6 order-2 order-lg-1">
                    <h6 class="text-primary animate__animated animate__fadeInUp">Hello, I'm</h6>
                    <h1 class="hero-title animate__animated animate__fadeInUp">Arsalan Ahmed</h1>
                    <h2 class="hero-subtitle animate__animated animate__fadeInUp">I'm a <span id="typed"></span>
                    </h2>
                    <p class="lead mb-4 animate__animated animate__fadeInUp">
                        I create beautiful, functional websites and applications with a focus on
                        user experience and modern design principles.
                    </p>
                    <div class="animate__animated animate__fadeInUp text-center text-md-start">
                        <div class="d-flex flex-column flex-md-row justify-content-md-center">
                            <a href="#portfolio"
                                class="btn btn-primary me-md-3 mb-2 mb-md-0 align-items-center responsive-btn">View My
                                Work</a>
                            <a href="#contact" class="btn btn-outline-primary align-items-center responsive-btn">Contact
                                Me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container py-5">
            <h2 class="section-title">About Me</h2>
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="card p-4 h-100">
                        <h3 class="mb-4">Building Scalable Web Solutions with Laravel</h3>
                        <p>Hello! I'm <strong>Arslan Ahmed</strong>, a Laravel developer from Pakistan with a passion
                            for crafting robust and efficient web applications. I specialize in transforming complex
                            requirements into seamless, scalable solutions that empower businesses and deliver real
                            value to users.</p>
                        <p>My expertise lies in backend development with Laravel, API integrations, and database-driven
                            systems—always written with clean, maintainable code. I enjoy turning ideas into reality by
                            combining logical problem-solving with user-focused development.</p>
                        <p>Beyond coding, I’m driven by curiosity—I love experimenting with new tools, optimizing
                            workflows, and sharing knowledge with the developer community. For me, every project is an
                            opportunity to learn, innovate, and create something impactful.</p>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><strong>Name:</strong> Arslan Ahmed</li>
                                    <li class="mb-2"><strong>Email:</strong><a href="mailto:arslanahmed6182@gmail.com"
                                            onclick="this.href='mailto:' + 'arslanahmed6182' + '@' + 'gmail.com'">
                                            arslanahmed6182@gmail.com</a></li>
                                    <li class="mb-2"><strong>Age:</strong> 25</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><strong>Location:</strong> Layyah, Punjab, Pakistan</li>
                                    <li class="mb-2"><strong>Freelance:</strong> Available</li>
                                    <li class="mb-2"><strong>Experience:</strong> 3+ Years</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card p-4 h-100">
                        <h4 class="mb-4">My Skills</h4>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span class="skill-name">HTML</span>
                                <span class="skill-percentage">85%</span>
                            </div>
                            <div class="skill-progress">
                                <div class="skill-progress-bar" data-width="85"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span class="skill-name">CSS</span>
                                <span class="skill-percentage">90%</span>
                            </div>
                            <div class="skill-progress">
                                <div class="skill-progress-bar" data-width="90"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span class="skill-name">Bootstrap</span>
                                <span class="skill-percentage">85%</span>
                            </div>
                            <div class="skill-progress">
                                <div class="skill-progress-bar" data-width="85"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span class="skill-name">JavaScript</span>
                                <span class="skill-percentage">65%</span>
                            </div>
                            <div class="skill-progress">
                                <div class="skill-progress-bar" data-width="65"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span class="skill-name">jQuery</span>
                                <span class="skill-percentage">75%</span>
                            </div>
                            <div class="skill-progress">
                                <div class="skill-progress-bar" data-width="75"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span class="skill-name">AJAX</span>
                                <span class="skill-percentage">80%</span>
                            </div>
                            <div class="skill-progress">
                                <div class="skill-progress-bar" data-width="80"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span class="skill-name">MySQL</span>
                                <span class="skill-percentage">85%</span>
                            </div>
                            <div class="skill-progress">
                                <div class="skill-progress-bar" data-width="85"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span class="skill-name">PHP</span>
                                <span class="skill-percentage">85%</span>
                            </div>
                            <div class="skill-progress">
                                <div class="skill-progress-bar" data-width="85"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span class="skill-name">Laravel</span>
                                <span class="skill-percentage">90%</span>
                            </div>
                            <div class="skill-progress">
                                <div class="skill-progress-bar" data-width="90"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Statistics Section -->
    <section id="statistics" class="py-5">
        <div class="container py-5">
            <div class="row text-center">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="card stat-card h-100">
                        <div class="card-body">
                            <div class="stat-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <h3 class="stat-number" data-count="500">
                                <span class="counter-value">0</span>
                                <span class="plus-symbol">+</span>
                            </h3>
                            <p class="stat-label">Hours Worked</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="card stat-card h-100">
                        <div class="card-body">
                            <div class="stat-icon">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                            <h3 class="stat-number" data-count="50">
                                <span class="counter-value">0</span>
                                <span class="plus-symbol">+</span>
                            </h3>
                            <p class="stat-label">Projects Finished</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="card stat-card h-100">
                        <div class="card-body">
                            <div class="stat-icon">
                                <i class="fas fa-smile"></i>
                            </div>
                            <h3 class="stat-number" data-count="200">
                                <span class="counter-value">0</span>
                                <span class="plus-symbol">+</span>
                            </h3>
                            <p class="stat-label">Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="card stat-card h-100">
                        <div class="card-body">
                            <div class="stat-icon">
                                <i class="fas fa-coffee"></i>
                            </div>
                            <h3 class="stat-number" data-count="1000">
                                <span class="counter-value">0</span>
                                <span class="plus-symbol">+</span>
                            </h3>
                            <p class="stat-label">Coffee Drinked</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Education Section -->
    <section id="education" class="py-5 ">
        <div class="container py-5">
            <h2 class="text-center mb-5 section-title">Education & Qualifications</h2>
            <div class="row">
                <!-- Education Item 1 -->
                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                    <div class="card education-card h-100">
                        <div class="card-body">
                            <div class="stat-icon">
                                <i class="fas fa-school"></i>
                            </div>
                            <h3 class="education-degree">High School Degree</h3>
                            <p class="education-institution">Govt Boys Model Higher secondery School Layyah</p>
                            <p class="education-period">2014 - 2016</p>
                            <p class="education-details">I finished school with flying colors! Got my degree of Tenth
                                class from Government Model High School Layyah. Ready to take on the world and make a
                                difference in IT Industry. So pumped for what's next!" 🎓🌟</p>
                        </div>
                    </div>
                </div>
                <!-- Education Item 2 -->
                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                    <div class="card education-card h-100">
                        <div class="card-body">
                            <div class="stat-icon">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <h3 class="education-degree">Intermediate Computer Science (ICS)</h3>
                            <p class="education-institution">Govt Boys Model Higher secondery School Layyah</p>
                            <p class="education-period">2016 - 2018</p>
                            <p class="education-details">Got my intermediate degree from Model High School, paving the
                                way for my educational journey. Equipped with foundational knowledge in Intermediate
                                Computer Science, I'm excited to continue my academic pursuits and excel in IT industry.
                                Let's keep pushing forward! 🎓🚀</p>
                        </div>
                    </div>
                </div>
                <!-- Education Item 3 -->
                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                    <div class="card education-card h-100">
                        <div class="card-body">
                            <div class="stat-icon">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <h3 class="education-degree">Bachelors of Computer Science</h3>
                            <p class="education-institution">Comsets University Islamabad</p>
                            <p class="education-period">2018- 2022</p>
                            <p class="education-details">Completed my Bachelor's degree in Computer Science from
                                Comsets University Islamabad (CUI). Equipped with a strong foundation in programming,
                                algorithms, and problem-solving, I'm ready to dive into the exciting world of software
                                development.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section -->
    <section id="services" class="py-5 bg-light">
        <div class="container py-5">
            <h2 class="section-title">My Services</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-palette me-2"></i>
                        </div>
                        <h4 class="mb-3">Web Design</h4>
                        <p>A well-designed website prioritizes user experience.Responsive web design is a fundamental
                            aspect of modern web design.To ensure that websites are responsive and adapt to different
                            screen sizes and devices, providing a seamless user experience on desktops, tablets, and
                            mobile phones.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-code me-2"></i>
                        </div>
                        <h4 class="mb-3">Web Development</h4>
                        <p>I can create websites from scratch or work with existing projects using diiferent
                            frameworks.I can write code using languages like HTML, CSS,Bootstrap, JavaScript, and
                            server-side scripting languages like PHP and the framework of PHP which is Laravel.I am
                            proficient in both front-end and back-end development.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-shopping-cart me-2"></i>
                        </div>
                        <h4 class="mb-3">Ecommerce Development</h4>
                        <p>I can create ecommerece websites from scratch or existing websites for further improvements
                            and features.I am specialize in building online ecommerece websites and shopping cart
                            systems. I can integrate payment gateways, manage product catalogs, and ensure secure
                            transactions and also handles orders management system in it.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-plug me-2"></i>
                        </div>
                        <h4 class="mb-3">API Integration</h4>
                        <p>I can built custom RESTFUL APIs using PHP framework Laravel.I also integrate third-party APIs
                            (Application Programming Interfaces) to enhance the functionality of websites, enabling
                            features like social media sharing, geolocation services, or payment processing. Also
                            authenticate uses in thired party APIs</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-tachometer-alt me-2"></i>
                        </div>
                        <h4 class="mb-3">Web Performance Optimization</h4>
                        <p>Web performance optimization is the practice of improving the speed, responsiveness, and
                            overall efficiency of websites and web applications. It's crucial for delivering a positive
                            user experience, reducing bounce rates, and enhancing search engine rankings. Slow-loading
                            websites can frustrate users and his experience.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-server me-2"></i>
                        </div>
                        <h4 class="mb-3">Web Hosting and Deployment</h4>
                        <p>Web hosting and deployment are critical aspects of bringing a website or web application to
                            life on the internet. They involve various technical processes and decisions to ensure that
                            your web project is accessible to users worldwide. I can deploy your project on Cpanel and
                            also can changes on live server.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Section -->
    <section id="portfolio" class="py-5">
        <div class="container py-5">
            <h2 class="section-title">My Portfolio</h2>
            <div class="portfolio-filter text-center mb-5">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="web">Web Design</button>
                <button class="filter-btn" data-filter="app">App Development</button>
                <button class="filter-btn" data-filter="graphic">Graphic Design</button>
            </div>
            <div class="row portfolio-grid">
                <div class="col-lg-4 col-md-6 portfolio-item mb-4" data-category="web" id="web-1">
                    <div class="portfolio-img">
                        <img src="{{ asset('assets/images/web-1.png') }}" alt="Web Project" class="img-fluid">
                        <div class="portfolio-overlay">
                            <div class="overlay-content">
                                <h5>E-commerce Website</h5>
                                <p>Web Design</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item mb-4" data-category="app">
                    <div class="portfolio-img">
                        <img src="{{ asset('assets/images/fitness.png') }}" alt="App Project" class="img-fluid">
                        <div class="portfolio-overlay">
                            <div class="overlay-content">
                                <h5>Fitness App</h5>
                                <p>App Development</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item mb-4" data-category="graphic">
                    <div class="portfolio-img">
                        <img src="{{ asset('assets/images/graphic-design.png') }}" alt="Design Project"
                            class="img-fluid">
                        <div class="portfolio-overlay">
                            <div class="overlay-content">
                                <h5>Cyber Punk</h5>
                                <p>Graphic Design</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item mb-4" data-category="web">
                    <div class="portfolio-img">
                        <img src="{{ asset('assets/images/blog.png') }}" alt="Web Project" class="img-fluid">
                        <div class="portfolio-overlay">
                            <div class="overlay-content">
                                <h5>Blog Platform</h5>
                                <p>Web Design</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item mb-4" data-category="app">
                    <div class="portfolio-img">
                        <img src="{{ asset('assets/images/travel-web.png') }}" alt="App Project" class="img-fluid">
                        <div class="portfolio-overlay">
                            <div class="overlay-content">
                                <h5>Travel App</h5>
                                <p>App Development</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item mb-4" data-category="web">
                    <div class="portfolio-img">
                        <img src="{{ asset('assets/images/business-web.png') }}" alt="Web Project" class="img-fluid">
                        <div class="portfolio-overlay">
                            <div class="overlay-content">
                                <h5>Business Website</h5>
                                <p>Web Design</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container py-5">
            <h2 class="section-title">Get In Touch</h2>
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="card p-4">
                        <h4 class="mb-4">Contact Me</h4>
                        <form id="contact-form" method="POST" action="{{ route('contact.send') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Your Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Subject</label>
                                <input type="text" class="form-control" name="subject" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea class="form-control" name="message" rows="8" maxlength="400" required></textarea>
                                <small class="text-muted">
                                    <span id="charCount">0</span><span style="color: var(--text-color)">/400
                                        characters</span>
                                </small>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card p-4 h-100">
                        <h4 class="mb-4">Contact Information</h4>
                        <div class="d-flex align-items-center mb-4">
                            <div class="icon-circle bg-primary me-3">
                                <i class="fas fa-map-marker-alt text-white"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">Location</h6>
                                <p class="mb-0">Layyah, Punjab, Pakistan</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="icon-circle bg-primary me-3">
                                <i class="fas fa-envelope text-white"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">Email</h6>
                                <p class="mb-0 email"><a
                                        href="mailto:arslanahmed6182@gmail.com">arslanahmed6182@gmail.com</a></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="icon-circle bg-primary me-3">
                                <i class="fas fa-phone text-white"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">Phone</h6>
                                <p class="mb-0"><a href="tel:+923255147825">+92 325 5147825</a></p>
                            </div>
                        </div>
                        <div class="mt-2">
                            <h6 class="mb-3">Follow Me</h6>
                            <div class="social-icons">
                                <a href="https://www.linkedin.com/in/arsalan-ahmed-33b29a365/"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a href="https://web.facebook.com/profile.php?id=100024166727339&_rdc=1&_rdr#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="https://x.com/Arsalan_web_dev"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/arsalan_web_dev/"><i
                                        class="fab fa-instagram"></i></a>
                                <a href="https://github.com/arslan321-ahd"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                        <div class="mt-3">
                            <h6 class="mb-2">My Location</h6>
                            <div class="map-container" style="height: 250px; border-radius: 10px; overflow: hidden;">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2628.642!2d70.933689!3d30.961997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sPK!4v1690000000000!5m2!1sen!2sPK"
                                    width="100%" height="100%" style="border:0;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                            <p class="small mt-2" style="color: var(--text-color); opacity: 0.8;">
                                Based in Layyah, Pakistan
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="py-5"> <!-- Removed bg-dark and text-light classes -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <h3 class="mb-4">Arslan<span style="color: var(--secondary-color);"></span></h3>
                    <p>Creating beautiful digital experiences is my passion. Let's work together to bring your ideas to
                        life.</p>
                </div>
                <div class="col-lg-3 col-md-4 mb-4">
                    <h5 class="mb-4">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#home" class="text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="#about" class="text-decoration-none">About</a></li>
                        <li class="mb-2"><a href="#services" class="text-decoration-none">Services</a>
                        </li>
                        <li class="mb-2"><a href="#portfolio" class="text-decoration-none">Portfolio</a>
                        </li>
                        <li class="mb-2"><a href="#contact" class="text-decoration-none">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 mb-4">
                    <h5 class="mb-4">Services</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-decoration-none">Web Design</a>
                        </li>
                        <li class="mb-2"><a href="#" class="text-decoration-none">Web
                                Development</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none">App
                                Development</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none">UI/UX Design</a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr style="background-color: var(--border-color);">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2023 Arslan Ahmed. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <div class="theme-switch">
        <i class="fas fa-moon"></i>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
