@extends('layouts.app')
@section('title', 'Note 6: Introduction to Web Application Security')

@section('content')
<div class="container py-5">

    <!-- Breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-body px-3 py-2 rounded shadow-sm">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('notes.index') }}">PKS</a></li>
            <li class="breadcrumb-item active">Web Application Security</li>
        </ol>
    </nav>

    <!-- Article -->
    <article class="bg-body-secondary p-4 rounded shadow-sm">
        <!-- Title -->
        <h1 class="fw-bold mb-3 text-body">
            <i class="fas fa-shield-alt me-2 text-primary"></i>
            Introduction to Web Application Security
        </h1>
        <p class="text-body-secondary">Published on <span class="badge bg-secondary">November 27, 2025</span></p>

        <!-- Summary -->
        <section class="mb-5">
            <h2 class="h4 text-primary border-bottom pb-2">🔍 Summary</h2>
            <p class="lead text-body">
                Web application security protects websites and online services from unauthorized access, modification,
                or disruption. This note explores the evolution of the web (ARPANET → Web 1.0 → Modern Web),
                unique challenges of web security, the anatomy of URLs, and the importance of OWASP’s Top 10
                vulnerabilities as a global benchmark.
            </p>
        </section>

        <!-- Evolution of the Web -->
        <section>
            <h2 class="h4 text-primary border-bottom pb-2">🌐 Evolution of the Web</h2>
            <ul class="text-body">
                <li><strong>ARPANET (1969):</strong> Packet switching network for research collaboration.</li>
                <li><strong>Old Web (Web 1.0):</strong> Static HTML pages, limited interactivity.</li>
                <li><strong>Modern Web:</strong> Dynamic, interactive, powered by HTML5, CSS3, JavaScript frameworks, responsive design.</li>
            </ul>
            <div class="alert alert-info mt-3">
                <strong>Comparative Analysis:</strong> Modern web emphasizes accessibility, interactivity, and user-centric design compared to its predecessors.
            </div>
        </section>

        <!-- CIA Triad in Web Security -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🔑 CIA Triad in Web Security</h2>
            <p class="text-body">
                Web security ensures <strong>Confidentiality</strong>, <strong>Integrity</strong>, and <strong>Availability</strong>:
            </p>
            <ul class="text-body">
                <li><strong>Confidentiality:</strong> Encryption of sensitive data (e.g., online banking credentials).</li>
                <li><strong>Integrity:</strong> Digital signatures and logs prevent tampering of transactions.</li>
                <li><strong>Availability:</strong> Redundant servers and DDoS protection ensure 24/7 access.</li>
            </ul>
        </section>

        <!-- Case Study -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">📉 Case Study: Change Healthcare Breach</h2>
            <p class="text-body">
                The “BlackCat” ransomware group exploited a Citrix server lacking multi-factor authentication (MFA),
                leading to a massive breach affecting 190 million individuals and losses of $3.09 billion.
            </p>
            <ul class="text-body">
                <li><strong>Timeline:</strong> Feb 2024 – ransomware detected; Jan 2025 – 190M records exposed.</li>
                <li><strong>Lesson:</strong> MFA and proactive security measures are critical for web applications.</li>
            </ul>
        </section>

        <!-- Anatomy of a URL -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🔗 Anatomy of a URL</h2>
            <p class="text-body">
                A URL specifies how and where to access a resource. Components include:
            </p>
            <ul class="text-body">
                <li><strong>Scheme:</strong> Protocol (http, https, ftp, mailto).</li>
                <li><strong>Hostname:</strong> Domain name (e.g., www.example.com).</li>
                <li><strong>Path:</strong> Location of resource (e.g., /products/details.php).</li>
                <li><strong>Port:</strong> Optional (e.g., :8080).</li>
                <li><strong>Query Parameters:</strong> Data passed to server (e.g., ?q=search).</li>
                <li><strong>Fragment:</strong> Section within a page (#section).</li>
            </ul>
        </section>

        <!-- Challenges of Modern Web Security -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">⚠️ Challenges of Modern Web Security</h2>
            <ul class="text-body">
                <li><strong>Human Factor:</strong> Usability vs security trade-offs, lack of user awareness.</li>
                <li><strong>Tangled Architecture:</strong> Complex client-server interactions, blurred boundaries with JavaScript-heavy apps.</li>
            </ul>
        </section>

        <!-- OWASP -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🛡️ OWASP Top 10</h2>
            <p class="text-body">
                The Open Web Application Security Project (OWASP) provides a benchmark list of the top 10 web
                application vulnerabilities, updated periodically to reflect evolving threats.
            </p>
            <ul class="text-body">
                <li>Injection</li>
                <li>Broken Access Control</li>
                <li>Cryptographic Failures</li>
                <li>Security Misconfiguration</li>
                <li>Vulnerable & Outdated Components</li>
                <li>Cross-Site Scripting (XSS)</li>
                <li>Identification & Authentication Failures</li>
                <li>Software & Data Integrity Failures</li>
                <li>Security Logging & Monitoring Failures</li>
                <li>Server-Side Request Forgery (SSRF)</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mt-5">
            <h2 class="h5 text-primary">📌 Conclusion</h2>
            <p class="text-body">
                Web application security is vital in today’s interconnected world. By understanding the evolution of the web,
                applying the CIA triad, learning from breaches, and following OWASP guidelines, professionals can build
                resilient, secure applications that protect users and organizations alike.
            </p>
        </section>
    </article>

    <!-- Floating Side Navigation Buttons (Top Left & Top Right) -->
    <a href="{{ route('notes.note5') }}"
       class="btn btn-outline-primary shadow rounded-circle position-fixed"
       style="top: 80px; left: 20px; z-index: 1050;"
       title="Previous Note" aria-label="Previous Note">
        <i class="fas fa-arrow-left"></i>
    </a>

    <a href="{{ route('notes.note7') }}"
       class="btn btn-outline-primary shadow rounded-circle position-fixed"
       style="top: 80px; right: 20px; z-index: 1050;"
       title="Next Note" aria-label="Next Note">
        <i class="fas fa-arrow-right"></i>
    </a>
</div>
@endsection
