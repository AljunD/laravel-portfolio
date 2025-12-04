@extends('layouts.app')
@section('title', 'Note 7: Introduction to Burp Suite')

@section('content')
<div class="container py-5">

    <!-- Breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-body px-3 py-2 rounded shadow-sm">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('notes.index') }}">PKS</a></li>
            <li class="breadcrumb-item active">Burp Suite</li>
        </ol>
    </nav>

    <!-- Article -->
    <article class="bg-body-secondary p-4 rounded shadow-sm">
        <!-- Title -->
        <h1 class="fw-bold mb-3 text-body">
            <i class="fas fa-bug me-2 text-danger"></i>
            Introduction to Burp Suite
        </h1>
        <p class="text-body-secondary">Published on <span class="badge bg-secondary">December 4, 2025</span></p>

        <!-- Summary -->
        <section class="mb-5">
            <h2 class="h4 text-primary border-bottom pb-2">🔍 Summary</h2>
            <p class="lead text-body">
                Burp Suite is an integrated platform for web application security testing.
                Widely used by penetration testers and bug bounty hunters, it provides tools
                to intercept, analyze, and manipulate web traffic, helping identify vulnerabilities
                such as SQL injection, XSS, and weak session tokens.
            </p>
        </section>

        <!-- Core Components -->
        <section>
            <h2 class="h4 text-primary border-bottom pb-2">🧩 Core Components</h2>
            <ul class="text-body">
                <li><strong>Proxy:</strong> Intercepts and modifies HTTP/S traffic.</li>
                <li><strong>Repeater:</strong> Manually resends and edits requests.</li>
                <li><strong>Intruder:</strong> Automates customized attacks (SQLi, XSS).</li>
                <li><strong>Scanner:</strong> Detects vulnerabilities automatically (Pro edition).</li>
                <li><strong>Sequencer:</strong> Tests randomness of session tokens.</li>
            </ul>
            <div class="alert alert-info mt-3">
                <strong>Tip:</strong> Each tool complements the others, forming a complete workflow for web security testing.
            </div>
        </section>

        <!-- Installation -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">💻 Installing Burp Suite</h2>
            <p class="text-body">
                Burp Suite comes in <strong>Community (free)</strong> and <strong>Professional (paid)</strong> editions.
                The Community Edition can be downloaded from
                <a href="https://portswigger.net/burp/communitydownload" target="_blank">PortSwigger</a>.
                Installation requires Java and follows platform-specific instructions.
            </p>
        </section>

        <!-- Proxy -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🌐 The Proxy</h2>
            <p class="text-body">
                The Proxy acts as a middleman between your browser and the server,
                allowing you to intercept and modify requests and responses.
                Even when interception is off, Burp logs all traffic in the HTTP history tab.
            </p>
        </section>

        <!-- Repeater -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🔁 Burp Repeater</h2>
            <p class="text-body">
                Repeater enables manual manipulation of HTTP requests.
                It is useful for testing multi-step processes, replaying requests with different parameters,
                and probing input-based vulnerabilities.
            </p>
        </section>

        <!-- Intruder -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">💣 Burp Intruder</h2>
            <p class="text-body">
                Intruder automates attacks by injecting payloads into requests.
                Attack types include <strong>Sniper</strong>, <strong>Battering Ram</strong>, <strong>Pitchfork</strong>, and <strong>Cluster Bomb</strong>.
                It is commonly used for brute force, SQL injection, and XSS testing.
            </p>
        </section>

        <!-- Sequencer -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🎲 Burp Sequencer</h2>
            <p class="text-body">
                Sequencer analyzes the randomness of session tokens.
                Weak tokens can be predicted, leading to session hijacking and unauthorized access.
            </p>
        </section>

        <!-- Practice Environments -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🧪 Practice Environments</h2>
            <ul class="text-body">
                <li><strong>Web Security Academy:</strong> Free labs from PortSwigger for hands-on training.</li>
                <li><strong>Damn Vulnerable Web Application (DVWA):</strong> A PHP/MySQL app intentionally left insecure for practice.</li>
                <li><strong>TryHackMe & VulnHub:</strong> Platforms offering DVWA rooms and virtual machines.</li>
                <li><strong>Docker:</strong> Run DVWA containers locally for safe testing.</li>
            </ul>
            <div class="alert alert-warning mt-3">
                ⚠️ <strong>Warning:</strong> DVWA is intentionally vulnerable. Never deploy it on public servers.
            </div>
        </section>

        <!-- Conclusion -->
        <section class="mt-5">
            <h2 class="h5 text-primary">📌 Conclusion</h2>
            <p class="text-body">
                Burp Suite is a cornerstone of web application security testing.
                By mastering its core tools—Proxy, Repeater, Intruder, Scanner, and Sequencer—
                and practicing in safe environments like DVWA, professionals can build strong skills
                in identifying and mitigating vulnerabilities.
            </p>
        </section>
    </article>

    <!-- Floating Side Navigation Buttons (Top Left & Top Right) -->
    <a href="{{ route('notes.note6') }}"
       class="btn btn-outline-primary shadow rounded-circle position-fixed"
       style="top: 80px; left: 20px; z-index: 1050;"
       title="Previous Note" aria-label="Previous Note">
        <i class="fas fa-arrow-left"></i>
    </a>

    <a href="{{ route('notes.note8') }}"
       class="btn btn-outline-primary shadow rounded-circle position-fixed"
       style="top: 80px; right: 20px; z-index: 1050;"
       title="Next Note" aria-label="Next Note">
        <i class="fas fa-arrow-right"></i>
    </a>
</div>
@endsection
