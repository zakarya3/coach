@extends('layouts.navbar')
@section('content')
        <!-- hero section -->
        <div class="bg-cover" style="background-image:linear-gradient(180deg, rgba(30, 24, 53, 0.4) 0%, rgba(30, 24, 53, 0.4) 90.16%),
        url({{ asset('assets/images/about-hero-img.jpg') }});">
          <div class="container">
              <div class="row">
                  <div class="offset-lg-2 col-lg-8 col-md-12 col-12">
                      <div class="py-lg-15 py-12 text-white text-center">
                          <a class="popup-youtube icon-shape rounded-circle btn-play icon-xl 
                                         text-decoration-none mb-3" href="https://www.youtube.com/watch?v=JRzWRZahOVU">
                              <i class="fas fa-play"></i>
                          </a>
                          <h1 class="font-weight-bold text-white mb-2 display-2">
                              The Coach
                          </h1>
                          <p class="mb-0 lead text-light">
                              world leading motivational speaker
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- about coach-->
      <div class="py-lg-12 py-6">
          <div class="container">
              <div class="row">
                  <div class="offset-lg-2 col-lg-8 col-md-12 col-12">
                      <h2 class="mb-4">About Fatima Zekhnini</h2>
                      <p>
                        Pluriactive & pluridisciplinaire, je puise mon énergie dans l’intergénérationnel, le multiculturalisme et la diversité.
                      </p>
                      <p>
                        Mon driver est la recherche perpétuelle de l’équilibre entre les différentes sphères de la vie, perso, santé, pro, famille et spirituelle au service de la réalisation professionnelle.
                      </p>
                      <p>
                        Mes forces comportementales résident dans l’adaptabilité constante, la résilience dûes à mon parcours et l’intelligence relationnelle que j’ai développée par mon intérêt pour l’humain et sa singularité.
                      </p>
                      <p>
                        Mon kif-job est l’accompagnement au développement de vos compétences transversales, la valorisation de vos parcours et surtout le déploiement de votre singularité.
                      </p>
                  </div>
              </div>
          </div>
      </div>
@endsection