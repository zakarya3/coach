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
            url({{ asset('assets/images/contact-hero-img.jpg') }});
        "
      >
        <div class="container">
          <div class="row">
            <div class="offset-lg-2 col-lg-8 col-md-12 col-12">
              <div class="text-center py-lg-16 py-12">
                <h1 class="mb-3 display-4 text-white">Get Connect</h1>
                <p class="lead text-light mb-4 mb-lg-0">
                  Our team gets hundreds of emails, notes, and requests for
                  different opportunities every day. And yes, my team members and
                  I do read every single email that comes through.
                </p>
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
                    <h2 class="mb-3">I love Hearing From You</h2>
                    <p>
                      If you are looking for advice, please fill out this form. We
                      will <br />find you and get in touch.
                    </p>
                  </div>
                  <form class="form-row">
                    <div class="from-group col-md-6 col-12 mb-3">
                      <label for="fname" class="sr-only">First Name</label>
                      <input
                        type="text"
                        class="form-control"
                        id="fname"
                        placeholder="First Name"
                        name="fname"
                        required
                      />
                    </div>
                    <div class="from-group col-md-6 col-12 mb-3">
                      <label for="lname" class="sr-only">Last Name</label>
                      <input
                        type="text"
                        class="form-control"
                        id="lname"
                        placeholder="Last Name"
                        name="lname"
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
                    <div class="form-group col-12 mb-3">
                      <label for="purpose" class="sr-only">Purpose</label>
                      <select class="custom-select" id="purpose">
                        <option selected>Select Purpose</option>
                        <option value="1">Business Coaching</option>
                        <option value="2">Lifecoaching</option>
                        <option value="3">Other</option>
                      </select>
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary btn-block">
                        Send Messages
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- contact info -->
              <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                  <div class="text-center">
                    <h4 class="h5 mb-3">Speaking inquiries:</h4>
                    <p class="text-danger font-weight-bold">123-456-7890</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                  <div class="text-center">
                    <h4 class="h5 mb-3">Business inquiries:</h4>
                    <a href="#!" class="text-danger font-weight-bold"
                      >info@coachexample.com</a
                    >
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                  <div class="text-center">
                    <h4 class="h5 mb-3">Press Contact:</h4>
                    <a href="#!" class="text-danger font-weight-bold"
                      >farris@coach.com
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