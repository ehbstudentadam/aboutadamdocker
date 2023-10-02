@extends('layouts.headerFooter')

@section('contentInMiddle')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('assets/img/about-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>About Me</h1>
                        <span class="subheading">This is where I come from.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href={{ route('show', ['id' => 'background']) }}>
                            <h2 class="post-title">Born in Kortrijk</h2>
                            <h3 class="post-subtitle">Raised in Izegem</h3>
                        </a>
                        <p class="post-meta">
                            <br>
                            Born in Kortrijk on the 25th of may in 1994 and shortly thereafter moved to a smaller town
                            nearby that is Izegem. <br>
                            After finishing high school with a degree in aeroplane mechanics, I joined the military just
                            doing so. I have worked on the F16 fighter jets for 5 years but came quickly more passionate
                            about Information Technology. <br>
                            I made the decision to change profession to work in IT, this change has led me here, following
                            my Bachelors Informatics, thus making this project for my class, backend web.
                            <br><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
