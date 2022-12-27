@extends('layouts.navbar')
@section('content')
        <!-- hero section -->
        <div class="bg-dark right-slant-shape pt-lg-13 py-12 pb-lg-0 ">
            <div class="container">
                <div class="row d-lg-flex align-items-center ">
                    <div class="col-lg-5 col-lg-5 col-md-6 col-12">
                        <div class="mb-0 mb-lg-8 ">
                            <h1 class=" text-white mb-3 display-4" style="font-size: 30px">
                                EASY PROFESSIONAL TRAINING & CONSULTING COACHING & MENTORING

                            </h1>
    
                            <p class="mb-6 lead text-white-50" style="font-size: 15px">
                                Push your life to a new level. <br> Connaissez votre valeur pour rayonner vers l’extérieur ! <br> « L’homme est ce qu’il croit » Anton Tchekhov.

                            </p>
                            <a href="" style="font-size: 10px" class="btn btn-primary mr-3">Conférence de Fatima Marrakech – YouTube</a>
                            <a class="popup-youtube icon-shape rounded-circle btn-play icon-md bg-secondary text-white mr-1
                                         text-decoration-none font-12" target="_blank" href="https://www.youtube.com/watch?v=9YU-3S7OZ58">
                                <i class="fas fa-play"></i>
                            </a>
                            <a href="https://www.youtube.com/watch?v=9YU-3S7OZ58" target="_blank" class="popup-youtube text-white">Watch Video
                  </a>
                        </div>
                    </div>
                    <div class="offset-xl-2 col-xl-5 offset-lg-1 col-lg-5 col-md-6 col-12 mb-n2 d-none d-md-block">
                        <div class="position-relative z-index-1">
                            <img src="{{ asset('assets/images/speaker-img-1.jpg') }}" alt="" class="img-fluid rounded w-100 border-bottom border-bottom-4 border-primary" />
                            <div class="card-img-overlay d-flex flex-column justify-content-end p-4 ">
                                <h4 class="mb-0 h2">Fatima Zekhnini</h4>
                                <span class="font-12">Formatrice en stratégies d'apprentissage</span>
                            </div>
                        </div>
                        <div class="position-relative z-index-1">
                            <div class=" position-absolute ml-n13 mt-n5">
                                <img src="{{ asset('assets/images/shape.svg') }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- testimonails -->
    <div class="pt-14 pb-10 top-shape " style="background:linear-gradient(360deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 102.23%), #F8F8F8;">
        <div class="container">
            <div class="row d-lg-flex align-items-center">
                <div class="offset-lg-3 col-lg-6 col-md-12 col-12">
                    <div class="mb-8 text-center">
                        <h2 class="h1">About me.</h2>
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-4 col-lg-6 col-md-6 col-12">
                    <div class="mb-4 mb-lg-0">
                        <img src="{{ asset('assets/images/speaker-img-1.jpg') }}" alt="" class="img-fluid rounded" />
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-5 col-lg-6 col-md-6">
                    <i class="fas fa-quote-left font-28 text-secondary mb-5"></i>
                    <p class="h2 font-dm-serif font-italic font-weight-normal mb-3" style="font-size: 20px">
                       <img src="{{ asset('assets/images/points.png') }}" alt=""> Pluriactive & pluridisciplinaire, je puise mon énergie dans l’intergénérationnel, le multiculturalisme et la diversité. <br>
                       <img src="{{ asset('assets/images/points.png') }}" alt=""> Mon driver est la recherche perpétuelle de l’équilibre entre les différentes sphères de la vie, perso, santé, pro, famille et spirituelle au service de la réalisation professionnelle. <br>
                       <img src="{{ asset('assets/images/points.png') }}" alt=""> Mes forces comportementales résident dans l’adaptabilité constante, la résilience dûes à mon parcours et l’intelligence relationnelle que j’ai développée par mon intérêt pour l’humain et sa singularité. <br>
                       <img src="{{ asset('assets/images/points.png') }}" alt=""> Mon kif-job est l’accompagnement au développement de vos compétences transversales, la valorisation de vos parcours et surtout le déploiement de votre singularité. <br>

                    </p>
                    <p class="font-14 mb-5">Fatima Zekhnini, Formatrice en stratégies d'apprentissage</p>
                    <a href="stories.html" class="btn btn-primary">View Stories</a>
                </div>
            </div>
        </div>
    </div>

        <!-- podcast -->
        <div class="pt-0 pb-lg-14 pb-8" id="help">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-2 col-lg-8 col-md-12 col-12">
                        <div class="mb-8 text-center">
                            <h2>How can i help you?</h2>
                            <p class="lead">Get started now with insights and strategies from The Coach</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Consulting</h5>
                            <p class="card-text">Consulting en  gestion de la formation : analyse des besoins en formation – évaluation de la formation et des formateurs.</p>
                            <a href="#" class="btn btn-primary">Contact us</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Training</h5>
                            <p class="card-text">Training en soft skills – stratégies d’apprentissage – formation de formateur.</p>
                            <a href="#" class="btn btn-primary">Contact us</a>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 20px">
                    <div class="col-sm-6">
                        <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Coaching</h5>
                            <p class="card-text">Coaching en transition professionnelle - auto-apprentissage.</p>
                            <a href="#" class="btn btn-primary">Contact us</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Co-working & mentoring</h5>
                            <p class="card-text">Co-working & mentoring   space for women in business.</p>
                            <a href="#" class="btn btn-primary">Contact us</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <!-- program section -->
    <div class="py-7 pt-lg-8 pb-lg-5" id="Cert">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-12">
                    <div class="mb-10 text-center">
                        <h2 class="mb-3 h1">
                            Discover life coaching programs
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light left-slant-shape pt-lg-3 pb-lg-3 right-slant-shape py-5">
        <div class="container">
            <div class="row">
                <div class="offset-lg-1 col-lg-10 col-md-12 col-12">
                    <!-- program thumbnail -->
                    <div class="card mb-4 mt-n8 border-0">
                        <div class="row no-gutters ">
                            <div class="col-12 col-md-6 rounded-left bg-cover " style="background-image: url({{ asset('assets/images/program-img-1.jpg') }}); ">
                                <img src="{{ asset('assets/images/program-img-1.jpg') }}" class=" img-fluid d-md-none invisible" alt="" />
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 ">
                                <div class="card-body p-6 border-top border-primary rounded-right border-top-4">
                                    <h2 class="mb-3">Certifications</h2>
                                    <ul class="list-unstyled mb-4">
                                        <li style="font-weight: 600">
                                            <i class="fas fa-check-circle mr-2 text-primary font-12"></i> <b>Passion d'apprendre</b>
                                            <ul>
                                                <li>Coach certifié  Stratégies d'apprentissages</li>
                                                <li><a href="https://la-semaine.com/p-marrakech_2018"> https://la-semaine.com/p-marrakech_2018</a></li>
                                                <li>Co-Auteure de « La boîte à outils du cerveau pour les parents », Paris, France, 2018</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <i class="fas fa-check-circle mr-2 text-primary font-12"></i> <b>Neuro Business School</b>
                                            <ul>
                                                <li>Application des Neurosciences à l’apprentissage</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <i class="fas fa-check-circle mr-2 text-primary font-12"></i>Institut Européen Interuniversitaire de l'Action Sociale
                                            <ul>
                                                <li>Certificat Européen de Formation Universitaire en Ingénierie Sociale</li>
                                                <li>Chargée d’études Université de Florence et Université du Luxembourg</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <i class="fas fa-check-circle mr-2 text-primary font-12"></i> <b>Université libre de Bruxelles</b>
                                            <ul>
                                                <li>Master's degree Sciences du Travail spécialisation en gestion de la formation et de la transition professionnelle</li>
                                                <li>Conseillère en Insertion Socioprofessionnelle, bachelor IRG, Bruxelles</li>
                                                <li>Commerce & Marketing  International, bachelor EPHEC, Bruxelles</li>
                                            </ul>
                                        </li>
                                    </ul>
                                <a href="#!" class="btn btn-outline-primary">Learn More</a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- program thumbnail -->
                    <div class="card mb-n4 z-index-1 border-0">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-md-6 col-12">
                        <div
                            class="card-body p-6 border-top border-primary rounded-left border-top-4"
                        >
                            <h2 class="mb-3">Our mission</h2>
                            <ul class="list-unstyled mb-4">
                            <li>
                                <i
                                class="fas fa-check-circle mr-2 text-primary font-12"
                                ></i
                                >A travers mon expertise, mes expériences du terrain ainsi que mon parcours de vie, je vous propose de vous connecter à la personne qui pourra vous accompagner au mieux et vous aider à évoluer dans la bienveillance tout en vous challengeant.
                            </li>
                            <li>
                                <i
                                class="fas fa-check-circle mr-2 text-primary font-12"
                                ></i
                                >Mon équipe composée d’un réseau de coachs de renommée internationale est à votre disposition.
                            </li>
                            <li>
                                <i
                                class="fas fa-check-circle mr-2 text-primary font-12"
                                ></i
                                >Mon rôle à travers une première séance que nous ferons ensemble en visio ou en présentiel à votre guise, est de vous trouver le coach qui matchera avec votre personnalité et vos attentes.
                            </li>
                            <li>
                                <i
                                class="fas fa-check-circle mr-2 text-primary font-12"
                                ></i
                                >Je mettrai mes capacités d’écoute, d’analyse , d’évaluation à votre service.
                            </li>
                            <li>
                                <i
                                class="fas fa-check-circle mr-2 text-primary font-12"
                                ></i
                                >Mon profil pluridisciplinaire me permet d’avoir une vision globale de différents domaines tel que la formation, l’éducation, l’enseignement, le travail et ses différents aspects ainsi que mon expertise pointue de l’humain à travers les neurosciences appliquées, la thérapie ACT que je mettrai volontiers à votre service.
                            </li>
                            </ul>
                            <a href="#!" class="btn btn-outline-primary">Learn More</a>
                        </div>
                        </div>
                        <div
                        class="col-12 col-md-6 rounded-right bg-cover"
                        style="background-image: url({{ asset('assets/images/program-img-2.jpg') }}); "
                        >
                        <img
                            src="{{ asset('assets/images/program-img-2.jpg') }}"
                            class="img-fluid d-md-none invisible"
                            alt=""
                        />
                        </div>
                    </div>
                                <!-- social media -->
            <div class="row">
                <div class="offset-lg-3 col-lg-6 col-md-12 col-12">
                  <div class="text-center mt-14">
                    <h4 class="mb-4">Follow me on</h4>
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a
                          href="#"
                          class="social-btn sb-facebook sb-round btn-light"
                          ><i class="fab fa-facebook-f"></i
                        ></a>
                      </li>
                      <li class="list-inline-item">
                        <a
                          href="#"
                          class="social-btn sb-twitter sb-round btn-light"
                          ><i class="fab fa-twitter"></i
                        ></a>
                      </li>
                      <li class="list-inline-item">
                        <a
                          href="#"
                          class="social-btn sb-linkedin sb-round btn-light"
                          ><i class="fab fa-linkedin"></i
                        ></a>
                      </li>
                      <li class="list-inline-item">
                        <a
                          href="#"
                          class="social-btn sb-youtube sb-round btn-light"
                          ><i class="fab fa-youtube"></i
                        ></a>
                      </li>
                      <li class="list-inline-item">
                        <a
                          href="#"
                          class="social-btn sb-instagram sb-round btn-light"
                          ><i class="fab fa-instagram"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection