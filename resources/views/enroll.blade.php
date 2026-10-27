@extends('layout.layout')

@section('title', 'Enroll Now - ABC Academy')

@section('content')
<div class="contacts-hero enroll-hero">
    <div class="container">
        <h4 class="section-sub-heading" data-aos="fade-up" data-aos-duration="1000">
            ENROLL NOW
        </h4>
        <h1 class="section-heading" data-aos="fade-up" data-aos-duration="2000">
            Welcome to The ABC Academy Family, Build a Future
        </h1>
    </div>
</div>
<div class="contacts-container" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col-md-6">
                <h1>Ask Us About Enrollment</h1>
                <p>We are one call away, reach us out and log your comments, thoughts opinions or advice on enrolment and we will be grateful.</p>
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
                    <form action="/enroll" method="POST">
                        @csrf
                        <div class="form-input">
                            <input type="text" name="firstname" placeholder="Student's firstname" required />
                        </div>

                        <div class="form-input form-input-2">
                            <input type="text" name="middlename" placeholder="Student's middle name" />
                            <input type="text" name="surname" placeholder="Student's Surname" required />
                        </div>

                        <div class="form-input select-wrapper">
                            <select name="type" required>
                                <option value="">Enrollment type</option>
                                <option value="Freshman">Freshman</option>
                                <option value="Trensfer">Transfer</option>
                            </select>
                        </div>

                        <div class="form-input">
                            <input type="text" name="kin_name" placeholder="Next of kin's name">
                        </div>

                        <div class="form-input form-input-2">
                            <input type="email" name="email" placeholder="Next of kin's email address" required />
                            <input type="text" name="phone" placeholder="Next of kin's phone number" required />
                        </div>



                        <div class="form-input">
                            <button type="submit" class="contacts-btn">Enroll</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection