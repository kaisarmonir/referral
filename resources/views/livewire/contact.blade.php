@extends('layouts.app')

    @section('content')

    <div class="container pt-3">



        <section id="main-container" class="main-container">
            <div class="container">

              <div class="row text-center">
                <div class="col-12">
                  <h2 class="section-title">Reaching our Office</h2>
                  <h3 class="section-sub-title">Find Our Location</h3>
                </div>

              </div>
              <!--/ Title row end -->
              <a href="{{url('/contact/1')}}"><button class="btn btn-secondary">Edit contact information</button></a><br/><br/>

              <div class="row">
                <div class="col-md-4">
                  <div class="ts-service-box-bg text-center h-100">
                    <span class="ts-service-icon icon-round">
                      <i class="fas fa-map-marker-alt mr-0"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h4>Visit Our Office</h4>
                      <p>{{$contact->address}}</p>
                    </div>
                  </div>
                </div><!-- Col 1 end -->

                <div class="col-md-4">
                  <div class="ts-service-box-bg text-center h-100">
                    <span class="ts-service-icon icon-round">
                      <i class="fa fa-envelope mr-0"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h4>Email Us</h4>
                      <p>{{$contact->email}}</p>
                    </div>
                  </div>
                </div><!-- Col 2 end -->

                <div class="col-md-4">
                  <div class="ts-service-box-bg text-center h-100">
                    <span class="ts-service-icon icon-round">
                      <i class="fa fa-phone-square mr-0"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h4>Call Us</h4>
                      <p>{{$contact->mobile}}</p>
                    </div>
                  </div>
                </div><!-- Col 3 end -->

              </div><!-- 1st row end -->

              <div class="gap-60"></div>



              <div class="gap-40"></div>

              <div class="row">
                <div class="col-md-12">
                  <h3 class="column-title">We love to hear</h3>
                  <!-- contact form works with formspree.io  -->
                  <!-- contact form activation doc: https://docs.themefisher.com/constra/contact-form/ -->
                  <form id="contact-form" action="{{url('message')}}" method="post" role="form">
                    @csrf
                    <div class="error-container"></div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Name</label>
                          <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>mobile</label>
                          <input class="form-control form-control-email" name="title" id="email" placeholder="" type="text"
                            required>
                        </div>
                      </div>

                    </div>
                    <div class="form-group">
                      <label>Message</label>
                      <textarea class="form-control form-control-message" name="description" id="message" placeholder="" rows="10"
                        required></textarea>
                    </div>
                    <div class="text-right"><br>
                      <button class="btn btn-primary solid blank" type="submit">Send Message</button>
                    </div>
                  </form>
                </div>

              </div><!-- Content row -->
            </div><!-- Conatiner end -->
          </section><!-- Main container end -->

    </div>
    @endsection