@extends('layouts.navbar')
@section('content')
        <!-- hero section -->
        {{-- <div style="background: url({{ asset('assets/images/about-me/HSSQ1522.jpg') }}); background-size: cover; background-repeat: no-repeat; background-position: center;">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-1 col-xl-10 col-md-12 col-12">
                        <div class="pt-14 pb-12 pt-lg-16 pb-lg-14 text-center text-light">
                          <div class="cadre" style="width: 100%; padding: 20px; background-color: #f0d3cb74">
                            <h1 class="display-3 font-weight-bold text-white mb-2" style="color: #40546e !important; font-size: 40px">
                              EASY PROFESSIONAL TRAINING & CONSULTING COACHING & MENTORING
                          </h1>
                          <p class="px-lg-14 mb-4 lead" style="color: #40546e !important">
                            Poussez votre vie à un nouveau niveau. <br /> Connaissez votre valeur pour rayonner vers l’extérieur ! <br> « L’homme est ce qu’il croit » Anton Tchekhov.
                          </p>
                          <a href="" style="font-size: 10px" class="btn btn-primary mr-3">Conférence de Fatima Marrakech – YouTube</a>
                          <a class="popup-youtube icon-shape rounded-circle btn-play icon-md bg-secondary text-white mr-1
                                        text-decoration-none font-12" target="_blank" href="https://www.youtube.com/watch?v=9YU-3S7OZ58">
                              <i class="fas fa-play"></i>
                          </a>
                          <a href="https://www.youtube.com/watch?v=9YU-3S7OZ58" target="_blank" class="popup-youtube text-white">Regarder la vidéo</a>
                          </div>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
        {{-- <div class="mb-6 mb-lg-7" id="content">
          <div class="container-fluid px-0">
              <div class="row g-0 align-items-center revrers" style="width: 100%">
                  <div class="col-md" data-aos="fade-right">
                      <div class="img-shifted shift-left vh-100">
                          <div class="bg-image bg-cover bg-position-top-center" style="width: 100%; height: 100%;"><img src="{{ asset('assets/images/about-me/WhatsApp Image 2023-02-08 at 17.54.22.jpeg') }}" style="width: 100%; height: 100%; object-fit: contain" alt=""></div>
                      </div>
                      <p style="width: 100%; text-align: center">Fatima Zekhnini <br> Conférencière Coach & Formatrice</p>
                  </div>
                  <div class="col-md-6 vh-100 d-flex flex-column" style="margin-top: 40px" data-aos="fade-left">
                      <div class="px-5 px-lg-7 px-xl-9 mt-auto">
                          <h1 class="display-3 upper-line mb-6" style="font-size: 40px; margin-top: 80px">EASY PROFESSIONAL TRAINING & CONSULTING <br> COACHING & MENTORING</h1>
                          <a href="" style="font-size: 10px" class="btn btn-primary mr-3">Conférence de Fatima Marrakech – YouTube</a>
                          <a class="popup-youtube icon-shape rounded-circle btn-play icon-md bg-secondary text-white mr-1
                                        text-decoration-none font-12" target="_blank" href="https://www.youtube.com/watch?v=9YU-3S7OZ58">
                              <i class="fas fa-play"></i>
                          </a>
                          <a href="https://www.youtube.com/watch?v=9YU-3S7OZ58" target="_blank" class="popup-youtube text-white">Regarder la vidéo</a>
                      </div>
                      <div class="bg-light px-5 px-lg-7 px-xl-9 py-5 mt-auto">
                          <p class="fs-3 mb-0"><span class="fst-italic"> Poussez votre vie à un nouveau niveau. <br /> Connaissez votre valeur pour rayonner vers l’extérieur ! <br> « L’homme est ce qu’il croit » Anton Tchekhov.</p>
                      </div>
                  </div>
              </div>
          </div>
        </div> --}}
        <div class="py-lg-16 pt-14 pb-10 bg-cover" style="background-image:linear-gradient(180deg, rgba(30, 24, 53, 0.4) 0%, rgba(30, 24, 53, 0.4) 90.16%),
      url({{ asset('assets/images/about-me/image.jpeg') }});">
<h1 class="text-white mb-3 display-3" style="font-weight: 300; font-size: 50px; margin-top: 200px; text-align: center">
  EASY PROFESSIONAL TRAINING & CONSULTING
</h1>
    </div>
    <div class="pt-14 pb-10 top-shape " style="background:linear-gradient(360deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 102.23%), #f0d3cbde;">
      <div class="container">
          <div class="row d-lg-flex align-items-center">
              <div class="offset-lg-3 col-lg-6 col-md-12 col-12">
                <div class="mb-8 text-center">
                  <h2 class="h3">Connaissez votre valeur pour rayonner vers l’extérieur ! <br> « L’homme est ce qu’il croit » Anton Tchekhov.</h2>
              </div>
              </div>
          </div>
      </div>
  </div>
  <div class="pt-14 pb-10 top-shape " style="background:linear-gradient(360deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 102.23%), #f0d3cbde;">
        <div class="container">
            <div class="row d-lg-flex align-items-center">
                <div class="offset-lg-3 col-lg-6 col-md-12 col-12">
                    <div class="mb-8 text-center">
                        <h2 class="h1">Qui suis-je ?</h2>
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-4 col-lg-6 col-md-6 col-12">
                    <div class="mb-4 mb-lg-0">
                        <img src="{{ asset('assets/images/about-me/IMG_1737.JPG') }}" alt="" class="img-fluid rounded" />
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-5 col-lg-6 col-md-6">
                    <p class="h2 font-dm-serif font-italic font-weight-normal mb-3" style="font-size: 18px">
                        <i class="fas fa-check-circle mr-2 text-primary font-12"></i> Je suis Fatima Zekhnini, spécialiste de la transition professionnelle. Chercheure, conférencière, formatrice et co-auteure. <br>
                        <i class="fas fa-check-circle mr-2 text-primary font-12"></i> Pluriactive et pluridisciplinaire <a style="color: black" href="{{ url('/#Cert') }}">(mes certifications)
                      </a>, je puise mon énergie dans l’intergénérationnel, le multiculturalisme et la diversité. <br>
                        <i class="fas fa-check-circle mr-2 text-primary font-12"></i> Grande passionnée du potentiel humain, du dépassement de soi et de montage de projets ambitieux, j’aborde l’Humain et ses modes de fonctionnement à travers différentes approches scientifiques (neurosciences appliquées, théorie d’acceptation et d’engagement…) et expérientielles (Techniques d’apprentissage efficace, intelligences multiples…). <br>
                        <i class="fas fa-check-circle mr-2 text-primary font-12"></i> J’œuvre dans le domaine de l’accompagnement depuis plus de 10 ans. <br>
                        <i class="fas fa-check-circle mr-2 text-primary font-12"></i> Maman de 3 enfants, double culture belgo-marocaine et une vie atypique pleine de défis tant personnels que professionnels. <br>
                        <i class="fas fa-check-circle mr-2 text-primary font-12"></i> Mon parcours de vie m’a permis de développer des forces comportementales telles que l’adaptabilité constante, la
                        résilience, l’intelligence relationnelle ainsi que l’excellence dans toute action. <br>
                        <i class="fas fa-check-circle mr-2 text-primary font-12"></i> Je mets à votre service mon expertise d’accompagnement au développement de vos compétences transversales, à la
                        valorisation de votre parcours et au déploiement de votre singularité. <br>
                        <i class="fas fa-check-circle mr-2 text-primary font-12"></i> Ma mission est de contribuer à votre mieux-être, à ce que vous soyez le leader dans chaque domaine de votre vie,
                        spirituel, familial, relationnel, financier et santé au service de votre réalisation professionnelle. <br>
                        <i class="fas fa-check-circle mr-2 text-primary font-12"></i>Développez votre potentiel pour vivre une vie harmonieuse ! <br>
                        <i class="fas fa-check-circle mr-2 text-primary font-12"></i>Je vous invite à parcourir nos différents angles d’intervention. <br>
                        <span style="font-family: HaloHandle; font-size: 25px">Pour &nbsp;  cela,&nbsp;  je &nbsp;  vous &nbsp;  invite &nbsp; à&nbsp; parcourir&nbsp; nos&nbsp; différents&nbsp; angles&nbsp; d’intervention.   <br> Fatima &nbsp;  Zekhnini, &nbsp; chercheure, &nbsp; conférencière, &nbsp; coach &nbsp;  formatrice.</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
  <div class="bg-light left-slant-shape pt-lg-3 pb-lg-3 right-slant-shape py-5">
    <div class="container">
        <div class="row">
            <div class="offset-lg-1 col-lg-10 col-md-12 col-12">
                <!-- program thumbnail -->
                <div class="card mb-4 mt-n8 border-0" id="mission">
                    <div class="row no-gutters ">
                        <div class="col-12 col-md-6 rounded-left bg-cover " style="background-image: url({{ asset('assets/images/about-me/IMG_1740.JPG') }}); ">
                            <img src="{{ asset('assets/images/about-me/IMG_1740.JPG') }}" class=" img-fluid d-md-none invisible" alt="" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 ">
                            <div class="card-body p-6 border-top border-primary rounded-right border-top-4">
                            <h2 class="mb-3">Notre mission</h2>
                        <ul class="list-unstyled mb-4">
                        <li>
                            <i
                            class="fas fa-check-circle mr-2 text-primary font-12"
                            ></i
                            >Vous avez constaté que nous évoluons dans un monde en perpétuel changement où l’équilibre entre la vie privé et professionnelle est un challenge permanent.
                        </li>
                        <li>
                            <i
                            class="fas fa-check-circle mr-2 text-primary font-12"
                            ></i
                            >Vous m’accorderez que se former, acquérir des compétences pour tendre à un mieux-être et rester performent est indispensable. Ce challenge peut paraître parfois fastidieux et énergivore.
                        </li>
                        <li>
                            <i
                            class="fas fa-check-circle mr-2 text-primary font-12"
                            ></i
                            >C’est pour cela que chez Epronetworks nous œuvrons à ce que ce cheminement soit facilité par un accompagnement sur mesure.
                        </li>
                        <li>
                            <i
                            class="fas fa-check-circle mr-2 text-primary font-12"
                            ></i
                            >A votre disposition, une équipe de coachs à renommée internationale, collaborant à l’atteinte de vos objectifs.
                        </li>
                        <li>
                            <i
                            class="fas fa-check-circle mr-2 text-primary font-12"
                            ></i
                            >Nous sommes facilitateurs d’apprentissage écologique et d’adaptation au changement.
                        </li>
                        </ul>
                        {{-- <a href="#!" class="btn btn-outline-primary">Learn More</a> --}}
                        </div>
                        </div>
                    </div>
                </div>
                <!-- program thumbnail -->
                <div class="card mb-n4 z-index-1 border-0" id="Cert">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-6 col-12">
                    <div
                        class="card-body p-6 border-top border-primary rounded-left border-top-4"
                    >
                    <h2 class="mb-3">Certifications</h2>
                                <ul class="list-unstyled mb-4">
                                    <li style="font-weight: 600">
                                        <i class="fas fa-check-circle mr-2 text-primary font-12"></i> <b>Passion d'apprendre</b>
                                        <ul>
                                            <li>Coach certifié  Stratégies d'apprentissages</li>
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
                                        <i class="fas fa-check-circle mr-2 text-primary font-12"></i> <b>Institut Européen</b>
                                        <ul>
                                          <li>Interuniversitaire de l'Action Sociale</li>
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
                            {{-- <a href="#!" class="btn btn-outline-primary">Learn More</a> --}}
                        
                    </div>
                    </div>
                    <div
                    class="col-12 col-md-6 rounded-right bg-cover"
                    style="background-size: contain;background-image: url({{ asset('assets/images/about-me/IMG_1487.JPG') }})"
                    >
                    <img
                        src="{{ asset('assets/images/about-me/IMG_1487.JPG') }}"
                        class="img-fluid d-md-none invisible"
                        alt=""
                    />
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
            <!-- testimonails -->

        <!-- podcast -->
        <div class="pt-0 pb-lg-14 pb-8" id="help" style="margin-top: 100px">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-2 col-lg-8 col-md-12 col-12">
                        <div class="mb-8 text-center">
                            <h2>Découvrez nos programmes</h2>
                            {{-- <p class="lead">Commencez dès maintenant avec les idées et les stratégies de Fatima Zekhnini</p> --}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card bg-primary myCard">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #40546e">Consulting</h5>
                            <p class="card-text" style="color: #40546e">Les savoir-être comportementaux communément appelés soft skills sont des compétences comportementales et
                              transversales essentielles à développer pour performer dans son travail et être efficient. <br> Chez Epronetworks, c’est notre domaine d’expertise. Nous œuvrons à ce que vous, votre équipe, vos collaborateurs
                              développent les soft skills qui permettent de s’adapter aux changements.</p>
                            <p class="card-text" style="color: #40546e">Nous analysons votre demande et vos besoins en formation. <br> Nous travaillons sur la conception de solutions réalistes et opérationnelles à travers un processus itératif et collaboratif.
                            <br> <i class="fas fa-check-circle mr-2 font-12"></i> Qualifions les besoins de compétences - concevons les étapes et les formats de formation – adaptons la formation
                            aux collaborateurs. 
                          <br> <i class="fas fa-check-circle mr-2 font-12"></i> Identifions les ressources et acteurs
                        <br> <i class="fas fa-check-circle mr-2 font-12"></i> Coordonnons le processus d’implémentation, de suivi & d’évaluation.</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card bg-secondary myCard">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #f0d3cb">Training</h5>
                            <p class="card-text" style="color: #f0d3cb">Notre objectif est de vous offrir des parcours de formation à valeur ajoutée. C’est pour cela que nous créons les contenus de
                              formation en tant réel avec vous.</p>
                            <p class="card-text" style="color: #f0d3cb">Nos axes d’intervention : <br> Conseil en recrutement/sélection/évaluation <br> Intégration et adaptation au changement sur le lieu de travail
                            <br> Stratégies d’apprentissage <br> Communication & Leadership <br>Développement personnel <br> Organisation et animation de conférences/séminaires/workshops</p>
                            <p class="card-text" style="color: #f0d3cb">Notre but est votre montée en compétences pour faciliter les transitions de vie tant personnelle que professionnelles. <br>
                              Notre approche est holistique et expérientielle.</p>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 20px">
                    <div class="col-sm-6">
                        <div class="card bg-primary myCard">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #40546e">Coaching</h5>
                            <p class="card-text" style="color: #40546e">Nous vous accompagnons dans votre transition personnelle et professionnelle en présentiel et/ou en ligne. <br>
                              Nous vous offrons un suivi et nous nous assurons de votre progression.</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card bg-secondary myCard">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #f0d3cb">Co-sharing space for women in business</h5>
                            <p class="card-text" style="color: #f0d3cb">Ne restez jamais seule, soyez entourée et inspirée, c’est un ingrédient majeur de votre réussite!</p>
                            <p class="card-text" style="color: #f0d3cb">Chez Epronetworks, nous vous offrons un espace d’échange et de partage d’expériences. <br>
                              Vous pourrez vous connecter aux autres dans des valeurs de partage et d’entraide. <br>
                              Nous sommes convaincu que chacune par son parcours unique et inspirant apportera à l’autre une
                              expérience riche. Nous voulons contribuer au bien-être holistique et à l’indépendance financière de chacune
                              de nos membres. <br>
                              Nous nous adressons aux femmes entrepreneures ou en voie de l’être pour lesquelles l’équilibre entre vie
                              professionnelle et vie personnelle est au centre de leurs préoccupations. <br>
                              Nous organisons des afterworks, des events, des sessions wellness, des séminaires, des soirées thématiques
                              à niveau international.</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <!-- program section -->
    {{-- <div class="py-7 pt-lg-8 pb-lg-5" id="Cert">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-12">
                    <div class="mb-10 text-center">
                        <h2 class="mb-3 h1">
                          Découvrez les programmes de coaching de vie
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="py-7 pt-lg-8 pb-lg-5" id="Cert">
      <div class="container">
          <div class="row">
              <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-12">
                  <div class="mb-10 text-center">
                      <h2 class="mb-3 h1">
                          Galerie <i class="bi-image"></i>
                      </h2>
                  </div>
              </div>
          </div>
      </div>
  </div>
    <div class="bg-light left-slant-shape pt-lg-3 pb-lg-3 right-slant-shape py-5">
      {{-- <div class="row no-gutters ">
        <div class="col-md-3 col-12" style="display: flex; justify-content: center; align-items: center">
           <img style="padding: 5px; width: 80%; border-radius: 20px" src="{{ asset('assets/images/about-me/DEBR8744.jpg') }}" alt="" class="img-fluid border-right border-white h-lg-100">
        </div>
        <div class="col-md-3 col-12" style="display: flex; justify-content: center; align-items: center; flex-direction: column">
           <img style="padding: 5px; width: 80%; border-radius: 20px" src="{{ asset('assets/images/about-me/ASVG3636.jpg') }}" alt="" class="img-fluid border-bottom border-white h-lg-100">
           <img style="padding: 5px; width: 80%; border-radius: 20px" src="{{ asset('assets/images/about-me/HCPJ1543 (2).jpg') }}" alt="" class="img-fluid border-bottom border-white h-lg-100 ">
        </div>
        <div class="col-md-3 col-12" style="display: flex; justify-content: center; align-items: center; flex-direction: column">
           <img style="padding: 5px; width: 80%; border-radius: 20px" src="{{ asset('assets/images/about-me/UKQD5388 (1).jpg') }}" alt="" class="img-fluid border-bottom border-white h-lg-100 border-left">
           <img style="padding: 5px; width: 80%; border-radius: 20px" src="{{ asset('assets/images/about-me/JLYB0698.jpg') }}" alt="" class="img-fluid border-bottom border-white h-lg-100 border-left">
        </div>
        <div class="col-md-3 col-12" style="display: flex; justify-content: center; align-items: center">
           <img style="padding: 5px; width: 80%; border-radius: 20px" src="{{ asset('assets/images/about-me/IMG_3864.JPG') }}" alt="" class="img-fluid border-left border-white h-lg-100">
        </div>
      </div> --}}
      <!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item carousel-multi-item-2" data-ride="carousel">

  <!--Controls-->
  <div class="controls-top" style="display: flex; justify-content: center">
    <a class="black-text" href="#multi-item-example" data-slide="prev"><i class="fas fa-angle-left fa-3x pr-3"></i></a>
    <a class="black-text" href="#multi-item-example" data-slide="next"><i class="fas fa-angle-right fa-3x pl-3"></i></a>
  </div>
  <!--/.Controls-->

  <!--Slides-->
  <div class="carousel-inner" role="listbox">

    <!--First slide-->
    <div class="carousel-item active">

      <div class="col-md-3 mb-3">
        <div class="card" style="height: 40vh;">
          <img class="img-fluid" style="width: 100%; height: 100%; object-fit: cover" src="{{ asset('assets/images/about-me/DEBR8744.jpg') }}"
            alt="Card image cap">
        </div>
        <p style="width: 100%; text-align: center">Master en Sciences du Travail avec Andréa Réa, faculté des sciences politiques et sociales de l'ULB</p>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card" style="height: 40vh;">
          <img class="img-fluid" style="width: 100%; height: 100%; object-fit: cover" src="{{ asset('assets/images/about-me/ASVG3636.jpg') }}"
            alt="Card image cap">
        </div>
        <p style="width: 100%; text-align: center"></p>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card" style="height: 40vh;">
          <img class="img-fluid" style="width: 100%; height: 100%; object-fit: cover" src="{{ asset('assets/images/about-me/HCPJ1543 (2).jpg') }}"
            alt="Card image cap">
        </div>
        <p style="width: 100%; text-align: center">Congrès de la Mémoire à Saint- Malo avec Olivier Lejeune</p>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card" style="height: 40vh;">
          <img class="img-fluid" style="width: 100%; height: 100%; object-fit: cover" src="{{ asset('assets/images/about-me/UKQD5388 (1).jpg') }}"
            alt="Card image cap">
        </div>
        <p style="width: 100%; text-align: center">Mission économique princière belge au Maroc</p>
      </div>

    </div>
    <!--/.First slide-->

    <!--Second slide-->
    <div class="carousel-item">

      <div class="col-md-3 mb-3">
        <div class="card" style="height: 40vh;">
          <img class="img-fluid" style="width: 100%; height: 100%; object-fit: cover" src="{{ asset('assets/images/about-me/JLYB0698.jpg') }}"
            alt="Card image cap">
        </div>
        <p style="width: 100%; text-align: center">Notre équipe de coachs Apprendre à Apprendre, Marrakech, musée de l'Eau</p>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card" style="height: 40vh;">
          <img class="img-fluid" style="width: 100%; height: 100%; object-fit: cover" src="{{ asset('assets/images/about-me/IMG_3864.JPG') }}"
            alt="Card image cap">
        </div>
        <p style="width: 100%; text-align: center">Avec Yannick Alain, coach & Formateur Neuro business school</p>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card" style="height: 40vh;">
          <img class="img-fluid" style="width: 100%; height: 100%; object-fit: cover" src="{{ asset('assets/images/about-me/HSSQ1522.jpg') }}"
            alt="Card image cap">
        </div>
        <p style="width: 100%; text-align: center">Conférence sur le Cerveau, Marrakech</p>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card" style="height: 40vh;">
          <img class="img-fluid" style="width: 100%; height: 100%; object-fit: cover" src="{{ asset('assets/images/about-me/IMG_3849 (2).JPG') }}"
            alt="Card image cap">
        </div>
        <p style="width: 100%; text-align: center">Avec Nico Pène, coach formateur, spécialiste en Ennéagramme et spirale dynamique</p>
      </div>

    </div>
    <!--/.Second slide-->

    <!--Thitd slide-->
    <div class="carousel-item">

      <div class="col-md-3 mb-3">
        <div class="card" style="height: 40vh;">
          <img class="img-fluid" style="width: 100%; height: 100%; object-fit: cover" src="{{ asset('assets/images/about-me/HXXH5474.jpg') }}"
            alt="Card image cap">
        </div>
        <p style="width: 100%; text-align: center">Avec Nisrine Kannouf mon amie et coach de vie pluridisciplinaire</p>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card" style="height: 40vh;">
          <img class="img-fluid" style="width: 100%; height: 100%; object-fit: cover" src="{{ asset('assets/images/about-me/IMG_1740.JPG') }}"
            alt="Card image cap">
        </div>
        <p style="width: 100%; text-align: center">Neuro business School, Paris</p>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card" style="height: 40vh;">
          <img class="img-fluid" style="width: 100%; height: 100%; object-fit: cover" src="{{ asset('assets/images/about-me/IMG_1745.JPG') }}"
            alt="Card image cap">
        </div>
        <p style="width: 100%; text-align: center">Avec mon coach en Soft skills, Jérôme Hoarau, Business school Paris</p>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card" style="height: 40vh;">
          <img class="img-fluid" style="width: 100%; height: 100%; object-fit: cover" src="{{ asset('assets/images/about-me/IMG_1487.JPG') }}"
            alt="Card image cap">
        </div>
        <p style="width: 100%; text-align: center">Avec Michel Wozniak, coach, formateur, représentant de Tony Buzan, Mind Mapping & Richard Bandler, PNL , Paris</p>
      </div>

    </div>
    <!--/.Thitd slide-->

  </div>
  <!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->
    </div>
    <div class="py-7 pt-lg-8 pb-lg-5">
        <div class="pb-14">
            <div class="container">
              <div class="row">
                <div class="offset-lg-2 col-lg-8 col-md-12 col-12">
                  <div class="card mt-n12 text-center mb-12">
                    <div class="card-body p-4 p-lg-8">
                      <div class="mb-5">
                        <h2 class="mb-3">Merci de prendre le temps de m’écrire</h2>
                        <p>Si vous cherchez des conseils, merci de remplir ce formulaire.</p>
                      </div>
                      <form class="form-row" method="POST" action="{{ url('sendMail') }}">
                        @csrf
							          @method('PUT')
                        <div class="from-group col-md-6 col-12 mb-3">
                          <label for="fname" class="sr-only">Nom</label>
                          <input
                            type="text"
                            class="form-control"
                            id="fname"
                            placeholder="Nom"
                            name="name"
                            required
                          />
                        </div>
                        <div class="from-group col-md-6 col-12 mb-3">
                          <label for="lname" class="sr-only">Prenom</label>
                          <input
                            type="text"
                            class="form-control"
                            id="lname"
                            placeholder="Prenom"
                            name="prename"
                            required
                          />
                        </div>
                        <div class="from-group col-12 mb-3">
                          <label for="email" class="sr-only"> Email</label>
                          <input
                            type="email"
                            class="form-control"
                            id="email"
                            placeholder="Email"
                            name="email"
                            required
                          />
                        </div>
                        <div class="from-group col-12 mb-3">
                          <label for="phone" class="sr-only"> Téléphone</label>
                          <input
                            type="text"
                            class="form-control"
                            id="phone"
                            placeholder="Phone"
                            name="phone"
                            required
                          />
                        </div>
                        <div class="form-group col-12 mb-3">
                          <label for="purpose" class="sr-only">But</label>
                          <select class="custom-select" name="but" id="purpose">
                            <option>Sélectionnez l'objectif</option>
                            <option value="Consulting">Consulting</option>
                            <option value="Training">Training</option>
                            <option value="Coaching">Coaching</option>
                          </select>
                        </div>
                        <div class="form-group col-12 mb-3">
                          <textarea name="message" class="form-control" placeholder="Votre message..." id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="col-12">
                          <button type="submit" class="btn btn-primary btn-block">
                            Envoyer
                          </button>
                        </div>
                      </form>
                      <p style="margin-top: 30px">
                        Bonne journée <br> Fatima Zekhnini <br> Chercheure Conférencière & Formatrice
                      </p>
                    </div>
                  </div>
                  <!-- contact info -->
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                      <div class="text-center">
                        <p class="text-danger font-weight-bold">+212 604 920 937 <br> +32 484 965 402</p>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                      <div class="text-center">
                        <a href="#!" class="text-danger font-weight-bold"
                          >contact@epronetworks.eu</a
                        >
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                      <div class="text-center">
                        <a href="#!" class="text-danger font-weight-bold"
                          >F.zekhnini@epronetworks.eu
                        </a>
                      </div>
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