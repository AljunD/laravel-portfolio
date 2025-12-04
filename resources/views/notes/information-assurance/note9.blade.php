@extends('layouts.app')
@section('title', 'Note 9: SQL Injection')

@section('content')
<div class="container py-5">

    <!-- Breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-body px-3 py-2 rounded shadow-sm">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('notes.index') }}">PKS</a></li>
            <li class="breadcrumb-item active">SQL Injection</li>
        </ol>
    </nav>

    <!-- Article -->
    <article class="bg-body-secondary p-4 rounded shadow-sm">
        <!-- Title -->
        <h1 class="fw-bold mb-3 text-body">
            <i class="fas fa-database me-2 text-danger"></i>
            SQL Injection
        </h1>
        <p class="text-body-secondary">Published on <span class="badge bg-secondary">December 4, 2025</span></p>

        <!-- Summary -->
        <section class="mb-5">
            <h2 class="h4 text-primary border-bottom pb-2">🔍 Summary</h2>
            <p class="lead text-body">
                SQL Injection (SQLi) is one of the most dangerous and common web application vulnerabilities.
                It occurs when user input is improperly validated and injected into SQL queries, allowing attackers
                to manipulate databases, extract sensitive information, or even gain administrative control.
            </p>
        </section>

        <!-- How It Works -->
        <section>
            <h2 class="h4 text-primary border-bottom pb-2">⚙️ How SQL Injection Works</h2>
            <ul class="text-body">
                <li><strong>Unsanitized Input:</strong> Application directly concatenates user input into SQL queries.</li>
                <li><strong>Manipulation:</strong> Attackers craft malicious input to alter query logic.</li>
                <li><strong>Impact:</strong> Unauthorized data access, modification, or deletion.</li>
            </ul>
            <div class="alert alert-danger mt-3">
                <strong>Example:</strong>
                <code>SELECT * FROM users WHERE username = 'admin' AND password = '' OR '1'='1';</code>
                → Always returns true, bypassing authentication.
            </div>
        </section>

        <!-- Real-World Risks -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">📉 Real-World Risks</h2>
            <ul class="text-body">
                <li>Data breaches exposing sensitive customer information.</li>
                <li>Privilege escalation and administrative takeover.</li>
                <li>Financial losses and reputational damage.</li>
                <li>Compliance violations (GDPR, HIPAA, PCI DSS).</li>
            </ul>
        </section>

        <!-- Prevention -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🛡️ Prevention Strategies</h2>
            <ul class="text-body">
                <li>Use <strong>prepared statements</strong> and parameterized queries.</li>
                <li>Employ <strong>stored procedures</strong> with strict validation.</li>
                <li>Implement <strong>input validation and sanitization</strong>.</li>
                <li>Apply <strong>least privilege</strong> to database accounts.</li>
                <li>Enable <strong>logging and monitoring</strong> for suspicious queries.</li>
            </ul>
        </section>

        <!-- Practice Environments -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🧪 Practice Environments</h2>
            <ul class="text-body">
                <li><strong>DVWA:</strong> Includes SQL Injection and Blind SQL Injection modules.</li>
                <li><strong>PortSwigger Web Security Academy:</strong> Free labs on SQLi exploitation and defense.</li>
                <li><strong>TryHackMe / HackTheBox:</strong> Guided rooms for SQLi practice.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mt-5">
            <h2 class="h5 text-primary">📌 Conclusion</h2>
            <p class="text-body">
                SQL Injection remains a critical threat to web applications.
                By understanding its mechanics, recognizing its risks, and applying secure coding practices,
                developers and security professionals can safeguard databases and protect sensitive information
                from exploitation.
            </p>
        </section>
    </article>

    <!-- Floating Side Navigation Buttons (Top Left & Top Right) -->
    <a href="{{ route('notes.note8') }}"
       class="btn btn-outline-primary shadow rounded-circle position-fixed"
       style="top: 80px; left: 20px; z-index: 1050;"
       title="Previous Note" aria-label="Previous Note">
        <i class="fas fa-arrow-left"></i>
    </a>

    <a href="{{ route('notes.note10') }}"
       class="btn btn-outline-primary shadow rounded-circle position-fixed"
       style="top: 80px; right: 20px; z-index: 1050;"
       title="Next Note" aria-label="Next Note">
        <i class="fas fa-arrow-right"></i>
    </a>
</div>
@endsection
