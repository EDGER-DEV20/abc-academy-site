@extends('layout.layout')

@section('title', 'Home - ABC Academy')

@section('content')
<div class="hero">
    <div class="container">

        <div class="hero-brand" data-aos="fade-up" data-aos-duration="500">
            <i class="bi bi-patch-check-fill"></i> A centre for Academic Excellence.
        </div>

        <h1 data-aos="fade-up" data-aos-duration="1000">Shaping Tommorrow's Bright Future, Today </h1>
        <p data-aos="fade-up" data-aos-duration="1500">We empower students with skills, curiosity and character needed to navigate and thrive in an evercharning World.</p>
        <div class="hero-btns" data-aos="fade-up" data-aos-duration="1000">
            <a href="/enroll" class="hero-btn">
                Enroll Now
            </a>
            <a href="/about" class="hero-btn">
                Discover More
            </a>
        </div>
    </div>
</div>
<div class="school-mvm">
    <div class="container">
        <div class="school-mvm-content">
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col-md-4">
                    <div class="row g-4">
                        <div class="col-md-2">
                            <div class="mvm-icon">
                                <i class="bi bi-rocket-takeoff"></i>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="mvm-content">
                                <h4>Mission</h4>
                                <p>To provide a safe and healthy environment where every child can grow intellectually.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row g-4">
                        <div class="col-md-2">
                            <div class="mvm-icon">
                                <i class="bi bi-binoculars"></i>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="mvm-content">
                                <h4>Vission</h4>
                                <p>To see all students enjoy learning, reach their full potential and become confident, independent learners.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row g-4">
                        <div class="col-md-2">
                            <div class="mvm-icon">
                                <i class="bi bi-chat-quote"></i>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="mvm-content">
                                <h4>Motto</h4>
                                <p>Education is the fruit of knowledge, we care, we share, for the future we prepare.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="welcome">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col-md-5">
                <div class="welcome-img" data-aos="fade-up" data-aos-duration="1000">
                    <img src="{{asset('images/director.jfif')}}" alt="director's image" />
                </div>
            </div>
            <div class="col-md-7">
                <div class="welcome-note" data-aos="fade-up" data-aos-duration="2000">
                    <h5 class="sub-heading">
                        <div></div> WELCOME TO ABC ACADEMY
                    </h5>
                    <h1>A Welcome Note from Our Director</h1>

                    <p>It is my great pleasure to welcome you to ABC Academy Secondary School, a place where we are committed to nurturing knowledge, character, confidence, and a strong sense of responsibility in every student. We believe that education is not only about academic excellence, but also about preparing young people to become responsible and successful members of society.</p>

                    <p>At ABC Academy, we provide a supportive and inspiring learning environment where students are encouraged to discover their talents, develop their abilities, and pursue their dreams. Our dedicated teachers and staff work closely with students to ensure that every learner receives the guidance, care, and opportunities they need to thrive.</p>

                    <p>We value discipline, integrity, hard work, creativity, and respect as essential foundations for success. Through quality education and a balanced approach to learning, we aim to equip our students with the skills and confidence needed to face the challenges and opportunities of an ever-changing world.</p>

                    <p>On behalf of the entire ABC Academy family, I warmly welcome you to our school. We look forward to working together with parents, guardians, and the wider community to build a brighter future for our students.</p>

                    <p class="director-info">Dr. John Doe<br /><span>Director, ABC Academy</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="summary">
    <div class="container">
        <div class="row row-cols-2 row-cols-md-4 g-4">
            <div class="col">
                <h2>1000+</h2>
                <h6>Students</h6>
            </div>
            <div class="col">
                <h2>110+</h2>
                <h6>Teachers</h6>
            </div>
            <div class="col">
                <h2>10+</h2>
                <h6>Departments</h6>
            </div>
            <div class="col">
                <h2>25+</h2>
                <h6>Years of Experience</h6>
            </div>
        </div>
    </div>
</div>
<div class="why-us">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col-md-5" data-aos="fade-up" data-aos-duration="1000">
                <h1>Why We're The Best Academic Choice</h1>
                <P>Clear facts and reasons on why we have been the best center for academic excellence for over two decades.</P>
            </div>
            <div class="col-md-7">
                <div class="row row-cols-2 row-cols-md-2 g-4">
                    <div class="col">
                        <div class="why-card" data-aos="fade-up" data-aos-duration="1500">
                            <div class="why-icon">
                                <i class="bi bi-buildings"></i>
                            </div>
                            <div class="why-content">
                                <h5>Conducive Environment</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="why-card" data-aos="fade-up" data-aos-duration="2000">
                            <div class="why-icon">
                                <i class="bi bi-person-video3"></i>
                            </div>
                            <div class="why-content">
                                <h5>Professional Educators</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="why-card" data-aos="fade-up" data-aos-duration="2500">
                            <div class="why-icon">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <div class="why-content">
                                <h5>Modern Facilities</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="why-card" data-aos="fade-up" data-aos-duration="3000">
                            <div class="why-icon">
                                <i class="bi bi-book"></i>
                            </div>
                            <div class="why-content">
                                <h5>Academic Performance</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="programs">
    <div class="container">
        <h5 class="sub-heading" data-aos="fade-up" data-aos-duration="500">
            <div></div> OUR PROGRAMS
        </h5>
        <h1 class="heading" data-aos="fade-up" data-aos-duration="1000">Programs We Offer to the Future Generation</h1>
        <div class="programs-content">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <div class="col">
                    <div class="programs-card" data-aos="fade-up" data-aos-duration="1500">
                        <div class="programs-icon">
                            <i class="bi bi-beaker"></i>
                        </div>
                        <h4>Science & Mathematics</h4>
                        <p>Our academy offers science and mathematics programs to prepare the future generation with scientific innovation, through our professional educators and modern facilities.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="programs-card" data-aos="fade-up" data-aos-duration="2000">
                        <div class="programs-icon">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <h4>Accounting & Business</h4>
                        <p>We offer best accounting and business programs to prepare tomorrow's world first class business enthrusiast, analysts and professional accountants who will compete at the world's market.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="programs-card" data-aos="fade-up" data-aos-duration="2500">
                        <div class="programs-icon">
                            <i class="bi bi-hourglass-top"></i>
                        </div>
                        <h4>Arts, Philosophy & Religion</h4>
                        <p>Our arts, philosophy & religion programs prepare tomorrow's world best social, political and religious leaders as well as policy makers, analysts and law experts.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="programs-card" data-aos="fade-up" data-aos-duration="3000">
                        <div class="programs-icon">
                            <i class="bi bi-mic"></i>
                        </div>
                        <h4>Sports, Games & Entertainment.</h4>
                        <p>We prepare future generation for creative economy as well as building a sociallized and interactive community through sports, games and entertainment programs that we offer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="staff">
    <div class="container">
        <h5 class="sub-heading" data-aos="fade-up" data-aos-duration="500">
            <div></div> OUR STAFF
        </h5>
        <h1 class="heading" data-aos="fade-up" data-aos-duration="1000">Our School Academic Governance</h1>
        <div class="staff-content">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <div class="col">
                    <div class="staff-card" data-aos="fade-up" data-aos-duration="1500">

                        <img src="{{asset('images/download (4).jfif')}}" alt="">

                        <div class="staff-desc">
                            <h5>Dr. Jane Hadson</h5>
                            <p>Principal</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="staff-card" data-aos="fade-up" data-aos-duration="2000">

                        <img src="{{asset('images/assistant.jfif')}}" alt="">

                        <div class="staff-desc">
                            <h5>Dr. Omar Omar</h5>
                            <p>Assistant Principal</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="staff-card" data-aos="fade-up" data-aos-duration="2500">

                        <img src="{{asset('images/academic.jfif')}}" alt="">

                        <div class="staff-desc">
                            <h5>Mr. Emmaus Mbete</h5>
                            <p>Academic Master</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="staff-card" data-aos="fade-up" data-aos-duration="3000">

                        <img src="{{asset('images/discipline.jfif')}}" alt="">

                        <div class="staff-desc">
                            <h5>Ms. Anne Lwiza</h5>
                            <p>Discipline Master</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="feedback">
    <div class="container">
        <h5 class="sub-heading" data-aos="fade-up" data-aos-duration="500">
            <div></div> FEEDBACK
        </h5>
        <h1 class="heading" data-aos="fade-up" data-aos-duration="1000">Our Alumni on Their Academic Life at ABC</h1>
        <div class="feedback-content" data-aos="fade-up" data-aos-duration="2000">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="feedback-container">
                            <div class="feedback-icon">
                                <i class="bi bi-quote"></i>
                            </div>
                            <div class="feedback-desc">
                                I'm proud to be one of the ABC Academy Alumni, your teachings and guidance shaped me inti who I am today, I'm to contribute my knowledge and inputs in real world process, but where it all started? it was ABC Academy. so proud...
                            </div>
                            <div class="feedback-sender">
                                <div class="sender-img">
                                    <img src="{{asset('images/Photo portrait.jfif')}}" alt="Alumni Image">
                                </div>
                                <div class="sender-name">
                                    <h5>Jane Doe</h5>
                                    <p>CEO, CRF Holdings</p>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="carousel-item">
                        <div class="feedback-container">
                            <div class="feedback-icon">
                                <i class="bi bi-quote"></i>
                            </div>
                            <div class="feedback-desc">
                                I'm super grateful to pass at the hands of ABC Academy that prepared me well academically, my life began there and ever since it has never been the same again, I'm real proud to share this.
                            </div>
                            <div class="feedback-sender">
                                <div class="sender-img">
                                    <img src="{{asset('images/frank.jfif')}}" alt="Alumni Image">
                                </div>
                                <div class="sender-name">
                                    <h5>Frank Frances</h5>
                                    <p>CTO, Microtech Solutions</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog">
    <div class="container">
        <h5 class="sub-heading" data-aos="fade-up" data-aos-duration="500">
            <div></div> BLOG
        </h5>
        <h1 class="heading" data-aos="fade-up" data-aos-duration="1000">ABC Academy Latest News & Events</h1>
        <div class="blog-content">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 g-4">
                <div class="col">
                    <div class="blog-card" data-aos="fade-up" data-aos-duration="1500">
                        <div class="blog-img">
                            <img src="{{asset('images/grad.jpg')}}" alt="blog image" />
                        </div>
                        <div class="blog-type">Events</div>
                        <div class="blog-card-content">
                            <p class="blog-date">3 days ago</p>
                            <h4>20<sup>th</sup> ABC Academy Graduation Ceremony</h4>
                            <p>20<sup>th</sup> ABC academy graduation ceremony held on 20<sup>th</sup> of september 2026</p>

                            <div class="blog-link">
                                <a href="#">Read More<i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="blog-card" data-aos="fade-up" data-aos-duration="2000">
                        <div class="blog-img">
                            <img src="{{asset('images/pta.jpg')}}" alt="blog image" />
                        </div>
                        <div class="blog-type">News</div>
                        <div class="blog-card-content">
                            <p class="blog-date">16<sup>th</sup> September 2026</p>
                            <h4>2026 Annual PTA Meeting to Be Held Later this Year</h4>
                            <p>Annual PTA meeting 2026 is set to be held on october 25 2026 with main agendas being</p>

                            <div class="blog-link">
                                <a href="#">Read More<i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="blog-card" data-aos="fade-up" data-aos-duration="2500">
                        <div class="blog-img">
                            <img src="{{asset('images/19476.jpg')}}" alt="blog image" />
                        </div>
                        <div class="blog-type">Events</div>
                        <div class="blog-card-content">
                            <p class="blog-date">1 month ago</p>
                            <h4>World Science Day Exihibition is Around the Corner, to Be Held Earlier this November</h4>
                            <p>World science day exihibition that engage all schoos will be held earlier november this year, all students</p>

                            <div class="blog-link">
                                <a href="#">Read More<i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-view">
            <a href="/news-updates">View More<i class="bi bi-arrow-right"></i></a>
        </div>
    </div>
</div>

@endsection