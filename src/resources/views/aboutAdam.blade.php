@extends('layouts.headerFooter')

@section('contentInMiddle')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>Adam Lenez</h1>
                        <span class="subheading">A website about myself</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                <div class="post-preview">
                    <a href={{ route('index') }}>
                        <h2 class="post-title">This is a page made for my class Backend Web</h2>
                        <h3 class="post-subtitle">Written in Laravel</h3>
                    </a>
                    <p class="post-meta">
                        <br>
                        This is a website made by Adam and about Adam. All coding is done with PHP laravel framework.
                        Starting with this project I had to learn what Laravel was. <br>
                        Youtube channel <a href="https://youtube.com/playlist?list=PLFHz2csJcgk_mM2jEf7t8P678O_jz83on"
                            target="_blank"> Code with Dary </a> helped me alot.
                        Also <a href="https://youtube.com/playlist?list=PL4cUxeGkcC9hL6aCFKyagrT1RCfVN4w2Q" target="_blank">
                            The Net Ninja, </a> a playlist provided by Olaf was a good playlist for teaching me Laravel.
                        <br><br>
                        After understanding how Laravel works, I started to think about how I would create my project. In
                        one of Olaf's classes he told us when he creates his websites, he outsources the CSS work.
                        This gave me the idea to use a free HTML and CSS template online and try to integrate it with
                        Laravel.
                        This approach has shown me how different using Laravel exactly is, plus in the end, my webpage looks
                        alot more pretty.
                        <br>
                        The template used is <a href="https://startbootstrap.com/theme/clean-blog" target="_blank">Clean
                            Blog. </a> This theme had multiple pages and was relativly simple enough for this project.
                        <br><br>
                    </p>
                </div>

            </div>
        </div>
    </div>
@endsection
