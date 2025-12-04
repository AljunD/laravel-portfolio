@extends('layouts.app')
@section('title', 'Note 1: Information Assurance, CIA Triad & Course Orientation')

@section('content')
<div class="container py-5">

    <!-- Breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-body px-3 py-2 rounded shadow-sm">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/notes') }}">PKS</a></li>
            <li class="breadcrumb-item active">Information Assurance & CIA Triad</li>
        </ol>
    </nav>

    <!-- Article -->
    <article class="bg-body-secondary p-4 rounded shadow-sm">
        <!-- Title -->
        <h1 class="fw-bold mb-3 text-body">
            <i class="bi bi-shield-lock-fill me-2 text-primary"></i>
            Information Assurance, CIA Triad & Course Orientation
        </h1>
        <p class="text-body-secondary">Published on <span class="badge bg-secondary">November 27, 2025</span></p>

        <!-- Summary -->
        <section class="mb-5">
            <h2 class="h4 text-primary border-bottom pb-2">🔍 Summary</h2>
            <p class="lead text-body">
                Information Assurance (IA) is the discipline of protecting data and managing risks in storage,
                processing, and transmission. It emphasizes the <span class="badge bg-info text-dark">CIA Triad</span> —
                <strong>Confidentiality</strong>, <strong>Integrity</strong>, and <strong>Availability</strong>.
                This course builds cybersecurity foundations through quizzes, labs, forums, and a Personal Knowledge System (PKS) project.
            </p>
        </section>

        <!-- CIA Triad -->
        <section>
            <h2 class="h4 text-primary border-bottom pb-2">📘 CIA Triad</h2>
            <div class="row mt-4">
                <div class="col-md-4 mb-3">
                    <div class="border rounded p-3 h-100 bg-body shadow-sm">
                        <h5 class="fw-bold text-success">Confidentiality</h5>
                        <p class="text-body">Restricts information to authorized users. Example: encryption for personal messages or healthcare data.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="border rounded p-3 h-100 bg-body shadow-sm">
                        <h5 class="fw-bold text-warning">Integrity</h5>
                        <p class="text-body">Maintains data accuracy and trustworthiness. Example: checksums verifying file integrity, digital signatures in finance.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="border rounded p-3 h-100 bg-body shadow-sm">
                        <h5 class="fw-bold text-danger">Availability</h5>
                        <p class="text-body">Ensures resources are accessible when needed. Example: redundant servers in critical systems to avoid outages.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Grading Breakdown -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">📊 Grading Breakdown</h2>
            <ul class="text-body">
                <li>Quizzes (20%) – In-class assessments</li>
                <li>Forum (15%) – Participation in HackTheBox/TryHackMe rooms</li>
                <li>Assignments (15%) – Practical exercises</li>
                <li>Project (20%) – Personal Knowledge System (PKS)</li>
                <li>Other Activities (10%) – Additional labs</li>
                <li>Periodic Exam (20%) – Comprehensive evaluation</li>
            </ul>
        </section>

        <!-- Certification Pathway -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🎓 Certification Pathway</h2>
            <p class="text-body">
                Students may pursue certifications to automatically earn perfect scores in quizzes and exams:
            </p>
            <ul class="text-body">
                <li>CompTIA Security+ (Sec+)</li>
                <li>Hack The Box CPTS</li>
                <li>TryHackMe Professional Certificates</li>
                <li>TCM Security Certifications</li>
            </ul>
        </section>

        <!-- Forum & Labs -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🧪 Forum & Labs</h2>
            <p class="text-body">
                Forum grades are based on progress in <strong>TryHackMe</strong>, <strong>HackTheBox Academy</strong>, and <strong>CyberDefenders</strong>.
                These labs provide hands-on practice, supplementing theoretical knowledge with real-world scenarios.
            </p>
        </section>

        <!-- Project: PKS -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">📝 Project: Personal Knowledge System (PKS)</h2>
            <p class="text-body">
                The PKS is a digital notebook where students organize notes, research, and reflections.
                Midterms require a draft PKS in Markdown format, while finals involve publishing the PKS online as a blog or CV.
            </p>
            <ul class="text-body">
                <li><strong>Midterms:</strong> Submit PKS as a .zip vault (Obsidian/Notion/Markdown)</li>
                <li><strong>Finals:</strong> Publish PKS online as blog/CV</li>
                <li><strong>Start Here:</strong> Include a START HERE.md or HOME.md entry point</li>
            </ul>
        </section>

        <!-- Typical Class Flow -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">📅 Typical Class Flow</h2>
            <ol class="text-body">
                <li>Recall & Recite – Warm-up on previous topics</li>
                <li>Lecture & Theory – Learn foundational concepts</li>
                <li>Hands-On Application – Lab practice</li>
                <li>Reflect & Synthesize – PKS integration</li>
                <li>Assess & Clarify – Quiz + Q&A</li>
            </ol>
        </section>

        <!-- Conclusion -->
        <section class="mt-5">
            <h2 class="h5 text-primary">📌 Conclusion</h2>
            <p class="text-body">
                Information Assurance and the CIA Triad provide the backbone of cybersecurity. Combined with practical labs,
                certification pathways, and the PKS project, students gain both theoretical knowledge and applied skills.
                This holistic approach prepares them for careers in cybersecurity and information assurance.
            </p>
        </section>
    </article>

    <!-- Floating Side Navigation Buttons (Top Left & Top Right) -->
    <a href="{{ url('/notes/information-assurance/note0') }}"
       class="btn btn-outline-primary shadow rounded-circle position-fixed"
       style="top: 80px; left: 20px; z-index: 1050;"
       title="Previous Note" aria-label="Previous Note">
        <i class="fas fa-arrow-left"></i>
    </a>

    <a href="{{ url('/notes/information-assurance/note2') }}"
       class="btn btn-outline-primary shadow rounded-circle position-fixed"
       style="top: 80px; right: 20px; z-index: 1050;"
       title="Next Note" aria-label="Next Note">
        <i class="fas fa-arrow-right"></i>
    </a>
</div>
@endsection
