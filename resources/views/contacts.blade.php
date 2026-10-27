@extends('layout.layout')

@section('title', 'Contacts - ABC Academy')

@section('content')
<div class="contacts-hero">
    <div class="container">
        <h4 class="section-sub-heading" data-aos="fade-up" data-aos-duration="1000">
            CONTACTS
        </h4>
        <h1 class="section-heading" data-aos="fade-up" data-aos-duration="2000">
            Get In Touch With Us
        </h1>
    </div>
</div>
<div class="contacts-container" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col-md-6">
                <h1>Contact Us Directly</h1>
                <p>We are one call away, reach us out and log your comments, thoughts opinions or advice and we will be grateful.</p>
                <div class="contacts-cont">
                    <div class="contacts-details">
                        <div class="contacts-icon">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div class="contacts-desc">
                            <h5>Phone Number</h5>
                            <p><a href="tel:+255777888999">+255 777 888 999</a></p>
                        </div>
                    </div>
                    <div class="contacts-details">
                        <div class="contacts-icon">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div class="contacts-desc">
                            <h5>Email Address</h5>
                            <p><a href="mailto:info@abcacademy.ac.tz">info@abcacademy.ac.tz</a></p>
                        </div>
                    </div>
                    <div class="contacts-details">
                        <div class="contacts-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div class="contacts-desc">
                            <h5>Physical Address</h5>
                            <p>P. O. Box 67, Dodoma.</p>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-md-6">
                <div class="form">
                    @if(session('flash'))

                    <div id="liveToast" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true" style="margin-bottom: 5%;padding: 2%;">
                        <div class="d-flex">
                            <div class="toast-body" style="color: #ffffff !important;">
                                {{ session('flash') }}
                            </div>
                            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                    </div>

                    @endif
                    <form action="/contacts" method="POST">
                        @csrf
                        <div class="form-input">
                            <input type="text" name="name" placeholder="Your name" />
                        </div>

                        <div class="form-input form-input-2">
                            <input type="email" name="email" placeholder="Email address" />
                            <input type="text" name="phone" placeholder="Phone number" />
                        </div>

                        <div class="form-input">
                            <input type="text" name="subject" placeholder="Subject" />
                        </div>
                        <div class="form-input">
                            <textarea name="message" id="" placeholder="Your message..."></textarea>
                        </div>
                        <div class="form-input">
                            <button type="submit" class="contacts-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31732.133715424352!2d35.6990868184736!3d-6.195346337333793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x184def5b6b8e368f%3A0x11feb1341be971f7!2sAl-%20Masjid%20Kikuyu!5e0!3m2!1sen!2stz!4v1790879008085!5m2!1sen!2stz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

@endsection