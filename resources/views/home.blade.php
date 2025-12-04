@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero text-light text-center py-5 bg-dark bg-gradient">
    <div class="container">
        <h1 class="display-1 fw-bold">Aljun B. Dalman</h1>
        <p class="lead fs-1">Full Stack Developer • System Analyst • UI/UX Enthusiast</p>
        <p class="mb-4">
            BSIT student at <strong>New Era University</strong>, specializing in system analysis, documentation, and full stack development.
            Skilled in <strong>Laravel, PHP, Java, Python, JavaScript</strong>, and frameworks like <strong>Express.js</strong> and <strong>PyQt</strong>.
            Experienced in building responsive, accessible, and scalable applications with a strong focus on user-centered design.
        </p>
        <p class="mb-4">
            Certified in <strong>Oracle Cloud Infrastructure (Foundations, Data, AI)</strong> and <strong>Cognitive Class Cloud Computing & Data Science</strong>.
            Passionate about modernizing operations through digital solutions, refining user experiences, and documenting technical knowledge for future growth.
        </p>
        <a href="{{ route('projects') }}" class="btn btn-primary btn-lg me-3">View My Work</a>
        <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg">Hire Me</a>
    </div>
</section>

<!-- Featured Project -->
<section id="featured-project" class="py-5 bg-body position-relative" data-theme-sensitive>
    <div class="container">
        <h2 class="text-center mb-5">Featured Project</h2>
        <div class="row align-items-center gy-4">
            <div class="col-md-6">
                <!-- Use your actual GrabASeat PNG -->
                <img src="{{ asset('images/projects/grabaseat.png') }}"
                     class="img-fluid rounded-4 shadow-lg border border-light-subtle"
                     alt="GrabASeat Project">
            </div>
            <div class="col-md-6">
                <h3 class="fw-bold">GrabASeat – Online Seat Reservation System</h3>
                <p class="mb-4 text-body">
                    <strong>GrabASeat</strong> is a Laravel-based application designed to streamline event seat booking and reservation management.
                    It features responsive Blade templates with modular inheritance tailored for guest, user, and admin roles.
                    The system’s database schema was carefully architected to handle schedules, seat availability, and payment flows with strict constraints, ensuring reliability and scalability.
                </p>
                <p class="mb-4 text-body">
                    This project demonstrates my ability to combine <strong>backend architecture</strong> with <strong>frontend responsiveness</strong>,
                    delivering a seamless user experience while maintaining robust data integrity. It reflects my focus on accessibility, maintainability, and cinematic UI/UX polish.
                </p>
                <a href="{{ route('projects') }}" class="btn btn-primary">See All Projects →</a>
            </div>
        </div>
    </div>
</section>
@endsection
