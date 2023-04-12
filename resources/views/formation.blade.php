@extends('layouts.navbar')
@section('content')
    <!-- pagheader section -->
  <div class="bg-shape bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
          <div class="py-lg-14 py-12  mb-3">
            <h1 class="h2 text-white">Mes formation</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- pricing -->
  <div class="pb-12 mt-lg-n12  mt-n6">
    <div class="container">
      <div class="row">
        <!-- free -->
        {{-- <div class="col-lg-4 col-md-4 col-12">
          <div class="card rounded-lg mb-4 ">
            <div class="card-body p-4">
              <h4 class="mb-3 text-primary">Free</h4>
              <span class="h1">$0.00</span>
              <p class="mb-0">One Month Free</p>
            </div>
            <div class="card-body pb-4 pt-0 px-4">
              <ul class="list-unstyled ">
                <li class="d-flex justify-content-between align-items-center mb-2">
                  <span>Total Clients/Coachees</span><span class="text-dark">2</span>
                </li>
                <li class="d-flex justify-content-between align-items-center mb-2">
                  <span>Storage</span><span class="text-dark">50 MB</span>
                </li>
                <li class="d-flex justify-content-between align-items-center mb-2">
                  <span>Base Functionality</span><span class="text-success font-12"><i
                      class="fas fa-check-circle"></i></span>
                </li>
                <li class="d-flex justify-content-between align-items-center mb-2">
                  <span>Calendar Syncronization</span><span class="text-success font-12"><i
                      class="fas fa-check-circle"></i></span>
                </li>
                <li class="d-flex justify-content-between align-items-center mb-2">
                  <span>Public Coach Profile</span><span class="text-success font-12"><i
                      class="fas fa-check-circle"></i></span>
                </li>
                <li class="d-flex justify-content-between align-items-center mb-2">
                  <span>Inquiries & Contacts</span><span class="text-danger font-12"><i
                      class="fas fa-times-circle"></i></span>
                </li>
                <li class="d-flex justify-content-between align-items-center mb-2">
                  <span>Librariess</span><span class="text-danger font-12"><i class="fas fa-times-circle"></i></span>
                </li>
              </ul>
              <a href="#!" class="btn btn-outline-secondary btn-block mt-4 mb-3">Get Started Free</a>
              <p class="mb-0 font-14">* Place some disclaimer text here</p>
            </div>
          </div>
        </div> --}}
        <!-- basic plan -->
        {{-- <div class="col-lg-4 col-md-4 col-12">
          <div class="card rounded-lg mb-4 ">
            <div class="card-body p-4">
              <h4 class="mb-3 text-primary">Basic Plan</h4>
              <span class="h1">$19.00</span>
              <p class="mb-0">Monthly</p>
            </div>
            <div class="card-body pb-4 pt-0 px-4">
              <ul class="list-unstyled ">
                <li class="d-flex justify-content-between align-items-center mb-2">
                  <span>Total Clients/Coachees</span><span class="text-dark">10</span>
                </li>
                <li class="d-flex justify-content-between align-items-center mb-2">
                  <span>Storage</span><span class="text-dark">150 MB</span>
                </li>
                <li class="d-flex justify-content-between align-items-center mb-2">
                  <span>Base Functionality</span><span class="text-success font-12"><i
                      class="fas fa-check-circle"></i></span>
                </li>
                <li class="d-flex justify-content-between align-items-center mb-2">
                  <span>Calendar Syncronization</span><span class="text-success font-12"><i
                      class="fas fa-check-circle"></i></span>
                </li>
                <li class="d-flex justify-content-between align-items-center mb-2">
                  <span>Public Coach Profile</span><span class="text-success font-12"><i
                      class="fas fa-check-circle"></i></span>
                </li>
                <li class="d-flex justify-content-between align-items-center mb-2">
                  <span>Inquiries & Contacts</span><span class="text-success font-12"><i
                      class="fas fa-check-circle"></i></span>
                </li>
                <li class="d-flex justify-content-between align-items-center mb-2">
                  <span>Librariess</span><span class="text-danger font-12"><i class="fas fa-times-circle"></i></span>
                </li>
              </ul>
              <a href="#!" class="btn btn-primary btn-block mt-4 mb-3">Get Started</a>
              <p class="mb-0 font-14">* Place some disclaimer text here</p>
            </div>
          </div>
        </div> --}}
        <!-- premium plan -->
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card rounded-lg mb-4 ">
            <div class="card-body p-4">
              <h4 class="mb-3 text-primary">Formation sur Youtube</h4>
              {{-- <span class="h1">$49.00</span>
              <p class="mb-0">Monthly</p> --}}
            </div>
            <div class="card-body pb-4 pt-0 px-4">
              {{-- <ul class="list-unstyled ">
                <li class="d-flex justify-content-between align-items-center mb-2">
                  <span>Total Clients/Coachees</span><span class="text-dark">25</span>
                </li>
                <li class="d-flex justify-content-between align-items-center mb-2">
                  <span>Storage</span><span class="text-dark">500 MB</span>
                </li>
                <li class="d-flex justify-content-between align-items-center mb-2">
                  <span>Base Functionality</span><span class="text-success font-12"><i
                      class="fas fa-check-circle"></i></span>
                </li>
                <li class="d-flex justify-content-between align-items-center mb-2">
                  <span>Calendar Syncronization</span><span class="text-success font-12"><i
                      class="fas fa-check-circle"></i></span>
                </li>
                <li class="d-flex justify-content-between align-items-center mb-2">
                  <span>Public Coach Profile</span><span class="text-success font-12"><i
                      class="fas fa-check-circle"></i></span>
                </li>
                <li class="d-flex justify-content-between align-items-center mb-2">
                  <span>Inquiries & Contacts</span><span class="text-success font-12"><i
                      class="fas fa-check-circle"></i></span>
                </li>
                <li class="d-flex justify-content-between align-items-center mb-2">
                  <span>Librariess</span><span class="text-success font-12"><i class="fas fa-check-circle"></i></span>
                </li>
              </ul> --}}
              <a href="https://www.youtube.com/watch?v=9YU-3S7OZ58" class="btn btn-outline-secondary btn-block mt-4 mb-3">Regarder la vidéo</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection