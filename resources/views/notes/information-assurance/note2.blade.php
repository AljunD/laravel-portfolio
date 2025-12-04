@extends('layouts.app')
@section('title', 'Note 2: Career Paths – Blue Team, Red Team & Three Pillars')

@section('content')
<div class="container py-5">

    <!-- Breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-body px-3 py-2 rounded shadow-sm">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('notes.index') }}">Notes</a></li>
            <li class="breadcrumb-item active">Career Paths – Blue Team, Red Team & Three Pillars</li>
        </ol>
    </nav>

    <!-- Article -->
    <article class="bg-body-secondary p-4 rounded shadow-sm">
        <!-- Title -->
        <h1 class="fw-bold mb-3 text-body">
            <i class="bi bi-person-badge-fill me-2 text-primary"></i>
            Career Paths – Blue Team, Red Team & Three Pillars
        </h1>
        <p class="text-body-secondary">Published on <span class="badge bg-secondary">November 27, 2025</span></p>

        <!-- Image 1 -->
        <figure class="mb-4 text-center">
            <img src="{{ asset('images/notes/note2/p1.png') }}"
                 class="img-fluid rounded shadow"
                 alt="Cybersecurity Career Overview">
            <figcaption class="mt-2 text-body-secondary">
                Blue Team vs Red Team: Defensive and Offensive Roles in Cybersecurity.
            </figcaption>
        </figure>

        <!-- Summary -->
        <section class="mb-5">
            <h2 class="h4 text-primary border-bottom pb-2">🔍 Summary</h2>
            <p class="lead text-body">
                Cybersecurity careers include the <span class="badge bg-info text-dark">Blue Team</span> (defense: monitoring, response) and
                <span class="badge bg-danger">Red Team</span> (ethical attacks to test defenses).
                They collaborate for stronger security. The Three Pillars—<strong>People</strong>, <strong>Processes</strong>, and <strong>Technology</strong>—form the foundation of effective protection.
            </p>
        </section>

        <!-- Topic -->
        <section>
            <h2 class="h4 text-primary border-bottom pb-2">📘 Topic</h2>
            <p class="text-body">
                Cybersecurity offers diverse careers focused on protecting systems from threats. The <strong>Blue Team</strong> defends organizations by monitoring networks, detecting intrusions, and responding to incidents—like analysts using logs to mitigate breaches.
            </p>
            <p class="text-body">
                The <strong>Red Team</strong> simulates attacks as ethical hackers, identifying vulnerabilities through penetration testing. Together, they create robust security: Red Team finds weaknesses, Blue Team fixes them.
            </p>

            <!-- Image 2 -->
            <figure class="my-5 text-center">
                <img src="{{ asset('images/notes/note2/p2.png') }}"
                     class="img-fluid rounded shadow"
                     alt="Three Pillars Diagram">
                <figcaption class="mt-2 text-body-secondary">
                    The Three Pillars: People, Processes, Technology — all must be balanced for effective security.
                </figcaption>
            </figure>

            <!-- Pillars -->
            <div class="row mt-4">
                <div class="col-md-4 mb-3">
                    <div class="border rounded p-3 h-100 bg-body shadow-sm">
                        <h5 class="fw-bold text-success">People</h5>
                        <p class="text-body">Awareness training to avoid errors like clicking phishing links. Human vigilance is critical.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="border rounded p-3 h-100 bg-body shadow-sm">
                        <h5 class="fw-bold text-warning">Processes</h5>
                        <p class="text-body">Standardized responses like incident handling protocols ensure consistent actions during attacks.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="border rounded p-3 h-100 bg-body shadow-sm">
                        <h5 class="fw-bold text-danger">Technology</h5>
                        <p class="text-body">Tools like firewalls, antivirus, and intrusion detection systems provide automated protection.</p>
                    </div>
                </div>
            </div>

            <!-- Career Paths -->
            <div class="alert alert-info mt-4" role="alert">
                <h5 class="alert-heading">💼 Career Opportunities</h5>
                <p class="text-body">
                    Roles include <strong>Security Analyst</strong> (Blue), <strong>Penetration Tester</strong> (Red), or hybrid consultants.
                    The course emphasizes hands-on platforms to build skills for these paths.
                </p>
            </div>

            <!-- Mitigations -->
            <section class="mt-4">
                <h2 class="h5 text-primary">🛡️ Mitigations & Best Practices</h2>
                <ul class="text-body">
                    <li>Regular drills and policy updates</li>
                    <li>Team collaboration and cross-training</li>
                    <li>Continuous learning and certifications</li>
                    <li>Integration of all three pillars in strategy</li>
                </ul>
            </section>

            <!-- Conclusion -->
            <section class="mt-4">
                <h2 class="h5 text-primary">📌 Conclusion</h2>
                <p class="text-body">
                    This framework helps build secure environments, reducing risks in critical sectors.
                    By balancing people, processes, and technology—and fostering collaboration between Blue and Red Teams—organizations can stay resilient against evolving threats.
                </p>
            </section>
        </section>
    </article>

    <!-- Floating Side Navigation Buttons (Top Left & Top Right) -->
    <a href="{{ route('notes.note1') }}"
       class="btn btn-outline-primary shadow rounded-circle position-fixed"
       style="top: 80px; left: 20px; z-index: 1050;"
       title="Previous Note" aria-label="Previous Note">
        <i class="fas fa-arrow-left"></i>
    </a>

    <a href="{{ route('notes.note3') }}"
       class="btn btn-outline-primary shadow rounded-circle position-fixed"
       style="top: 80px; right: 20px; z-index: 1050;"
       title="Next Note" aria-label="Next Note">
        <i class="fas fa-arrow-right"></i>
    </a>
</div>
@endsection
