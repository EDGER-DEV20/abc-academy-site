@extends('layout.layout')

@section('title', 'News & Events - ABC Academy')

@section('content')
<div class="news-hero">
    <div class="container">
        <h4 class="section-sub-heading" data-aos="fade-up" data-aos-duration="1000">
            News & Events
        </h4>
        <h1 class="section-heading" data-aos="fade-up" data-aos-duration="2000">
            Latest News and Events Updates at ABC Academy
        </h1>
    </div>
</div>
<div class="news-content" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <div class="col">
                <div class="blog-card">
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
                <div class="blog-card">
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
                <div class="blog-card">
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
</div>

@endsection