@extends('layouts.app')
@section('title', 'About Me')

@section('content')
<div class="container py-5">
    <!-- Intro Section -->
    <div class="row align-items-center mb-5">
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/mypic.png') }}"
                 class="img-fluid rounded-circle shadow-lg mb-3"
                 alt="Portrait of Aljun B. Dalman" width="280">
        </div>
        <div class="col-md-8">
            <h1 class="fw-bold mb-3">About Me</h1>
            <p class="lead">
                Hello! I'm <strong>Aljun B. Dalman</strong>, a Bachelor of Science in Information Technology student at
                <strong>New Era University</strong> in Quezon City.
            </p>
            <p>
                I specialize in <strong>system analysis</strong>, <strong>documentation</strong>, and <strong>full stack development</strong>.
                My technical skills span <strong>PHP, Java, Python, HTML, JavaScript</strong>, and frameworks such as
                <strong>Laravel, Express.js, and PyQt</strong>. I’m experienced with tools like <strong>Git, Composer, and Postman</strong>,
                and I work across platforms including <strong>VS Code, PyCharm, Eclipse, and GitHub</strong>.
            </p>
            <p>
                My academic projects include building a Laravel-based seat reservation system (<strong>GrabASeat</strong>),
                a responsive personal portfolio website with GitHub integration, and a Python-based media & entertainment application
                with PyQt and SQLite. I’ve also earned certifications in <strong>Cloud Computing</strong>, <strong>Data Science</strong>,
                and <strong>Oracle Cloud Infrastructure (Foundations, Data, and AI)</strong>.
            </p>
            <p>
                Beyond coding, I value <strong>collaboration</strong>, <strong>adaptability</strong>, and <strong>active listening</strong>.
                I’m passionate about modernizing university operations through digital solutions, refining user experiences,
                and documenting technical knowledge for future growth.
            </p>
        </div>
    </div>

    <!-- Career Timeline -->
    <h2 class="text-center mb-5 fw-bold">Career Timeline</h2>
    <div class="timeline">
        <div class="timeline-item left">
            <div class="timeline-content shadow-sm p-4 rounded">
                <h5 class="text-muted">2023 - Present</h5>
                <h4 class="fw-bold">Bachelor of Science in Information Technology</h4>
                <p><i class="fas fa-university text-primary me-2"></i>New Era University, Quezon City</p>
                <p>Currently pursuing my degree with a focus on system analysis, software development, and cloud technologies.</p>
            </div>
        </div>
        <div class="timeline-item right">
            <div class="timeline-content shadow-sm p-4 rounded">
                <h5 class="text-muted">2025</h5>
                <h4 class="fw-bold">GrabASeat – Online Seat Reservation System</h4>
                <p><i class="fas fa-chair text-success me-2"></i>Lead Developer & System Analyst</p>
                <p>Architected a Laravel-based booking platform with responsive Blade templates and a robust database schema for schedules, seat availability, and payments.</p>
            </div>
        </div>
        <div class="timeline-item left">
            <div class="timeline-content shadow-sm p-4 rounded">
                <h5 class="text-muted">2025</h5>
                <h4 class="fw-bold">Portfolio Website</h4>
                <p><i class="fas fa-laptop-code text-info me-2"></i>Designer & Developer</p>
                <p>Created a responsive portfolio site integrating GitHub repositories and a Personal Knowledge System for certifications and references.</p>
            </div>
        </div>
        <div class="timeline-item right">
            <div class="timeline-content shadow-sm p-4 rounded">
                <h5 class="text-muted">2025</h5>
                <h4 class="fw-bold">Media & Entertainment Application</h4>
                <p><i class="fas fa-film text-danger me-2"></i>Python Developer</p>
                <p>Developed a PyQt-based GUI with secure login and entertainment modules (movies, music, games) using SQLite and hashlib for security.</p>
            </div>
        </div>
    </div>
</div>
@endsection
