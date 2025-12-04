@extends('layouts.app')
@section('title', 'Note 8: Command Injection')

@section('content')
<div class="container py-5">

    <!-- Breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-body px-3 py-2 rounded shadow-sm">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('notes.index') }}">PKS</a></li>
            <li class="breadcrumb-item active">Command Injection</li>
        </ol>
    </nav>

    <!-- Article -->
    <article class="bg-body-secondary p-4 rounded shadow-sm">
        <!-- Title -->
        <h1 class="fw-bold mb-3 text-body">
            <i class="fas fa-terminal me-2 text-danger"></i>
            Command Injection
        </h1>
        <p class="text-body-secondary">Published on <span class="badge bg-secondary">December 4, 2025</span></p>

        <!-- Summary -->
        <section class="mb-5">
            <h2 class="h4 text-primary border-bottom pb-2">🔍 Summary</h2>
            <p class="lead text-body">
                Command Injection is a critical web application vulnerability that occurs when user input is
                improperly validated and passed directly to system-level commands. Attackers can exploit this
                flaw to execute arbitrary commands, compromise servers, and escalate privileges.
            </p>
        </section>

        <!-- How It Works -->
        <section>
            <h2 class="h4 text-primary border-bottom pb-2">⚙️ How Command Injection Works</h2>
            <ul class="text-body">
                <li><strong>Unsanitized Input:</strong> Application takes user input and passes it to a shell command.</li>
                <li><strong>Execution:</strong> Malicious input alters the intended command.</li>
                <li><strong>Impact:</strong> Attackers gain unauthorized access, extract data, or control the system.</li>
            </ul>
            <div class="alert alert-danger mt-3">
                <strong>Example:</strong> A search form that executes <code>ping</code> with user input can be abused
                with <code>; rm -rf /</code> to delete files.
            </div>
        </section>

        <!-- Real-World Risks -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">📉 Real-World Risks</h2>
            <ul class="text-body">
                <li>Data theft and exfiltration.</li>
                <li>Privilege escalation on the host system.</li>
                <li>Complete server compromise.</li>
                <li>Pivoting into internal networks.</li>
            </ul>
        </section>

        <!-- Prevention -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🛡️ Prevention Strategies</h2>
            <ul class="text-body">
                <li>Validate and sanitize all user inputs.</li>
                <li>Use parameterized APIs instead of direct shell commands.</li>
                <li>Apply least privilege principles to application accounts.</li>
                <li>Employ Web Application Firewalls (WAFs) for added protection.</li>
            </ul>
        </section>

        <!-- Practice Environments -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🧪 Practice Environments</h2>
            <p class="text-body">
                Command Injection can be safely practiced in controlled labs such as:
            </p>
            <ul class="text-body">
                <li><strong>DVWA:</strong> Damn Vulnerable Web Application includes a Command Injection module.</li>
                <li><strong>PortSwigger Web Security Academy:</strong> Free labs on injection vulnerabilities.</li>
                <li><strong>TryHackMe / HackTheBox:</strong> Guided rooms and challenges for hands-on learning.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mt-5">
            <h2 class="h5 text-primary">📌 Conclusion</h2>
            <p class="text-body">
                Command Injection is one of the most dangerous vulnerabilities in web applications.
                By understanding how it works, recognizing its risks, and applying secure coding practices,
                developers and security professionals can protect systems from catastrophic exploitation.
            </p>
        </section>
    </article>

    <!-- Floating Side Navigation Buttons (Top Left & Top Right) -->
    <a href="{{ route('notes.note7') }}"
       class="btn btn-outline-primary shadow rounded-circle position-fixed"
       style="top: 80px; left: 20px; z-index: 1050;"
       title="Previous Note" aria-label="Previous Note">
        <i class="fas fa-arrow-left"></i>
    </a>

    <a href="{{ route('notes.note9') }}"
       class="btn btn-outline-primary shadow rounded-circle position-fixed"
       style="top: 80px; right: 20px; z-index: 1050;"
       title="Next Note" aria-label="Next Note">
        <i class="fas fa-arrow-right"></i>
    </a>
</div>
@endsection
