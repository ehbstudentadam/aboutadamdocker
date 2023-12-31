@extends('layouts.headerFooter')

@section('contentInMiddle')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('assets/img/contact-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>Contact Me</h1>
                        <span class="subheading">Have questions? I have answers.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <main>
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon
                        as possible!</p>
                    <p>I have made use of a database for this page where these details will be stored. For this to work
                        you will need to create a database called "aboutadamproject". Laravel should handle the rest.
                    </p>
                    <div class="my-5">
                        <form action="/contact" method="POST">
                            @csrf
                            <div class="form-floating">
                                <input class="form-control" id="name" name="name" type="text"
                                    placeholder="Enter your name..." />
                                <label for="name">Name</label>
                                <div class="invalid-feedback">A name is required.</div>
                            </div>
                            <div class="form-floating">
                                <input class="form-control" id="email" name="email" type="email"
                                    placeholder="Enter your email..." />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback">An email is required.</div>
                                <div class="invalid-feedback">Email is not valid.</div>
                            </div>
                            <div class="form-floating">
                                <input class="form-control" id="phone" name="phone_number" type="tel"
                                    placeholder="Enter your phone number..." />
                                <label for="phone">Phone Number</label>
                                <div class="invalid-feedback">A phone number is required.
                                </div>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your message here..."
                                    style="height: 12rem"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback">A message is required.
                                </div>
                            </div>
                            <br>
                            <br>
                            <button class="btn btn-primary text-uppercase" type="submit" id="submitButton">Send message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
