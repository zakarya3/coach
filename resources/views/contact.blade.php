@extends('layouts.navbar')
@section('content')
        <!-- hero section -->
        <div
        class="bg-shape bg-cover"
        style="
          background-image: linear-gradient(
              180deg,
              rgba(30, 24, 53, 0.4) 0%,
              rgba(30, 24, 53, 0.4) 90.16%
            ),
            url({{ asset('assets/images/about-me/XIFA4723.jpg') }});
        "
      >
        <div class="container">
          <div class="row">
            <div class="offset-lg-2 col-lg-8 col-md-12 col-12">
              <div class="text-center py-lg-16 py-12">
                <h1 class="mb-3 display-4 text-white">Contactez-nous</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- conatc form -->
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
                    Bonne journée <br> “Fatima Zekhnini” <br> Chercheuse Conférencière & Formatrice
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
@endsection