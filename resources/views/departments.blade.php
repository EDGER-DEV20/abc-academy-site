@extends('layout.layout')

@section('title', 'Departments - ABC Academy')

@section('content')

<div class="departments-hero">
    <div class="container">
        <h4 class="section-sub-heading" data-aos="fade-up" data-aos-duration="1000">
            DEPARTMENTS
        </h4>
        <h1 class="section-heading" data-aos="fade-up" data-aos-duration="2000">
            Our Academy's Departments
        </h1>
    </div>
</div>
<div class="departments-content">
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="departments-card">
                    <img src="{{asset('images/19476.jpg')}}" alt="">

                    <div class="departments-desc">
                        <div class="departments-icon">
                            <i class="bi bi-beaker"></i>
                        </div>
                        <h2>Science & Mathematics</h2>
                        <p>Department of Science & mathematics facilitates all science subjects and mathematics together with facilities like laboratories and innovation hubs also it supervises all scientific functions, innovations, events, science clubs and exihibitions.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="departments-card">
                    <img src="{{asset('images/119018.jpg')}}" alt="">

                    <div class="departments-desc">
                        <div class="departments-icon">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <h2>Accounting & Business</h2>
                        <p>Department of Accounting & business manages accounting and business subjects, students, teachers and facilities also it supervises all accounting and business clubs, functions, events, presentations and exhibitions</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="departments-card" data-aos="fade-up" data-aos-duration="2500">
                    <img src="{{asset('images/30269.jpg')}}" alt="">

                    <div class="departments-desc">
                        <div class="departments-icon">
                            <i class="bi bi-hourglass-top"></i>
                        </div>
                        <h2>Arts, Philosophy & Religion</h2>
                        <p>Department of Accounting & business is responsible for supervising students, teachers, arts subjects, religious welfare of students, debates as well as promoting wisdom, etiquette, discipline and values.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="departments-card" data-aos="fade-up" data-aos-duration="3000">
                    <img src="{{asset('images/5282.jpg')}}" alt="">

                    <div class="departments-desc">
                        <div class="departments-icon">
                            <i class="bi bi-mic"></i>
                        </div>
                        <h2>Sports, Games and Entertainment</h2>
                        <p>Department of Sports, games and entertainment manages sports, games and entertainment affairs, trainings, subjects, concerts and tournaments for the welfare of students as well as promoting and growing their talents.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection