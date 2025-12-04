@extends('layouts.app')
@section('title', 'Projects')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">My Projects</h1>

    <div class="row g-4">
        <!-- Project 1: GrabASeat -->
        <div class="col-md-6 col-lg-4">
            <div class="card project-card h-100 shadow-lg" data-bs-toggle="modal" data-bs-target="#project1">
                <!-- Correct path using asset() -->
                <img src="{{ asset('images/projects/grabaseat.png') }}" class="card-img-top" alt="GrabASeat">
                <div class="card-body">
                    <h5 class="card-title">GrabASeat – Online Seat Reservation</h5>
                    <p class="card-text">Laravel-based booking system with schedules, seat availability, and payment flows.</p>
                    <span class="badge bg-primary">Laravel</span>
                    <span class="badge bg-success">MySQL</span>
                    <span class="badge bg-info">Blade</span>
                </div>
            </div>
        </div>

        <!-- Project 2: Portfolio Website -->
        <div class="col-md-6 col-lg-4">
            <div class="card project-card h-100 shadow-lg" data-bs-toggle="modal" data-bs-target="#project2">
                <img src="{{ asset('images/projects/portfolio.png') }}" class="card-img-top" alt="Portfolio">
                <div class="card-body">
                    <h5 class="card-title">Portfolio Website</h5>
                    <p class="card-text">Responsive personal portfolio showcasing projects, GitHub integration, and PKS documentation.</p>
                    <span class="badge bg-warning">HTML/CSS</span>
                    <span class="badge bg-secondary">JavaScript</span>
                    <span class="badge bg-dark">Bootstrap</span>
                </div>
            </div>
        </div>

        <!-- Project 3: Media & Entertainment App -->
        <div class="col-md-6 col-lg-4">
            <div class="card project-card h-100 shadow-lg" data-bs-toggle="modal" data-bs-target="#project3">
                <img src="{{ asset('images/projects/media.png') }}" class="card-img-top" alt="Media App">
                <div class="card-body">
                    <h5 class="card-title">Media & Entertainment Application</h5>
                    <p class="card-text">Python PyQt GUI app with secure login and entertainment modules (movies, music, games).</p>
                    <span class="badge bg-info">Python</span>
                    <span class="badge bg-primary">PyQt</span>
                    <span class="badge bg-success">SQLite</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modals -->
<div class="modal fade" id="project1" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">GrabASeat – Online Seat Reservation System</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <img src="{{ asset('images/projects/grabaseat.png') }}" class="card-img-top" alt="GrabASeat">
                <p>Designed and implemented a Laravel-based application for seat booking and reservation management. Built responsive Blade templates with modular inheritance for guest, user, and admin roles. Architected database schema to handle schedules, seat availability, and payment flows with strict constraints.</p>
                <p><strong>Tech:</strong> Laravel, Blade, MySQL, Bootstrap</p>
                <a href="#" class="btn btn-primary me-2">Live Demo</a>
                <a href="https://github.com/AljunD" target="_blank" class="btn btn-secondary">GitHub</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="project2" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Portfolio Website</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <img src="{{ asset('images/projects/portfolio.png') }}" class="card-img-top" alt="Portfolio">
                <p>Designed and deployed a responsive personal portfolio website to showcase academic and technical projects. Integrated GitHub repositories to dynamically display compiled work and maintain version control. Built a Personal Knowledge System section to document learnings, certifications, and technical references.</p>
                <p><strong>Tech:</strong> HTML, CSS, JavaScript, Bootstrap, GitHub API</p>
                <a href="#" class="btn btn-primary me-2">Live Demo</a>
                <a href="https://github.com/AljunD" target="_blank" class="btn btn-secondary">GitHub</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="project3" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Media & Entertainment Application</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <img src="{{ asset('images/projects/media.png') }}" class="card-img-top" alt="Media App">
                <p>Designed a Graphical User Interface (GUI) using PyQt to provide an interactive user experience. Implemented a secure login system with SQLite for credential storage and hashlib for password hashing and salting. Built a media module (Movies/TV, Music, or Games) to demonstrate entertainment features such as playlists, search, or simple game mechanics.</p>
                <p><strong>Tech:</strong> Python, PyQt, SQLite, Hashlib</p>
                <a href="#" class="btn btn-primary me-2">Live Demo</a>
                <a href="https://github.com/AljunD" target="_blank" class="btn btn-secondary">GitHub</a>
            </div>
        </div>
    </div>
</div>

@endsection
