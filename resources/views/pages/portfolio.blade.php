@extends('app')
@section('title') Portfolio @parent @stop
@section('content')
@include('layouts.secondary_nav')
<!-- Portfolio Grid Section -->
<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Portfolio</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-responsive" src="{{ asset('/images/portfolio/disaster_prevention_img_01.jpg') }}" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Disaster Prevention System</h4>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="{{ asset('/images/portfolio/nursing_img_01.jpg') }}" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Vital Data Recorder</h4>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="{{ asset('/images/portfolio/human_resource.png') }}" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Human Resources Registration System</h4>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Portfolio Modals -->
<!-- Use the modals below to showcase details about your portfolio projects! -->

<!-- Portfolio Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Disaster Prevention System</h2>
                        <p class="item-intro text-muted">Disaster prevention system aims to protect the lives and properties from disaster.</p>
                        <img class="img-responsive" src="{{ asset('/images/portfolio/disaster_prevention_img_01.jpg') }}" alt="">
                        <p>
                          To do so,  we repeatedly formulate countermeasures on a routine basis, and take advantage of the lessons of past disasters in order to be well prepared and trained. And also, being aware of the disaster prevention will also lead to protecting precious family and friends.
                        </p>
                        <p>
                          We mainly have been made to build for disaster prevention system (usually local governments such as prefectures and municipalities) local government, residents of life, we are working day-to-day property, and to create systems such as stability is maintained for life.
                        </p>
                        <p>
                          We mainly carried out the building of disaster prevention system for local governments (usually local public entities such as prefectures and municipalities), life of the residents, properties, and we are working everyday to create systems to maintain stability of life.
                        </p>
                        <p>The disaster prevention information system:
                        <ul>
                          <li>Features capability to respond in any disaster.</li>
                          <li>Various types of information collected are before a disaster occurs (pre-alarm, etc.) and, prior knowledge provides things that should be kept in mind in everyday life.</li>
                          <li>We collect information, such as damage information and disaster activities when a disaster occurs, you will be prompted to share informations to officials by transmitting quickly.</li>
                        </ul>
                        In our company we will continue to implement these functions.</p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 2 -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Vital Data Recorder</h2>

                        <img class="img-responsive img-centered" src="{{ asset('/images/portfolio/nursing_img_01.jpg') }}" alt="">
                        <p class="item-intro text-muted">A Smartphone application to save the day-to-day vital data in the cloud storage.</p>
                        <p>And also share information with health care workers that do not require a special system</p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 3 -->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Human Resource Management System</h2>

                        <img class="img-responsive img-centered" src="{{ asset('/images/portfolio/human_resource.png') }}" alt="">
                        <p class="item-intro text-muted"></p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
