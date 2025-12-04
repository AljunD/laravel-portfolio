@extends('layouts.app')
@section('title', 'Note 10: Cross-Site Scripting (XSS)')

@section('content')
<div class="container py-5">

    <!-- Breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-body px-3 py-2 rounded shadow-sm">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('notes.index') }}">PKS</a></li>
            <li class="breadcrumb-item active">Cross-Site Scripting (XSS)</li>
        </ol>
    </nav>

    <!-- Article -->
    <article class="bg-body-secondary p-4 rounded shadow-sm">
        <!-- Title -->
        <h1 class="fw-bold mb-3 text-body">
            <i class="fas fa-code me-2 text-danger"></i>
            Cross-Site Scripting (XSS)
        </h1>
        <p class="text-body-secondary">Published on <span class="badge bg-secondary">December 4, 2025</span></p>

        <!-- Summary -->
        <section class="mb-5">
            <h2 class="h4 text-primary border-bottom pb-2">🔍 Summary</h2>
            <p class="lead text-body">
                Cross-Site Scripting (XSS), classified as CWE‑79, is a web security vulnerability that allows attackers
                to inject malicious scripts into web applications. These scripts run in the victim’s browser,
                compromising user interactions, violating the same-origin policy, and enabling attacks such as
                session hijacking, data theft, and malware distribution.
            </p>
        </section>

        <!-- How It Works -->
        <section>
            <h2 class="h4 text-primary border-bottom pb-2">⚙️ How XSS Works</h2>
            <ul class="text-body">
                <li>Untrusted data enters a web application (e.g., via URL parameters or form inputs).</li>
                <li>The application dynamically generates a page without proper sanitization.</li>
                <li>The victim’s browser executes the injected script in the site’s domain context.</li>
                <li>This circumvents the same-origin policy and compromises user trust.</li>
            </ul>
            <div class="alert alert-danger mt-3">
                <strong>Example:</strong> A welcome message displays user input directly:
                <code>&lt;script&gt;alert('XSS')&lt;/script&gt;</code>
            </div>
        </section>

        <!-- Types of XSS -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🧩 Types of XSS Attacks</h2>
            <ul class="text-body">
                <li><strong>Reflected XSS (Type 1):</strong> Payload injected via URL or form, executed immediately.</li>
                <li><strong>Stored XSS (Type 2):</strong> Payload stored in a database or comment section, affecting multiple users.</li>
                <li><strong>DOM-Based XSS (Type 0):</strong> Payload executed client-side due to unsafe DOM manipulation.</li>
                <li><strong>Universal XSS (uXSS):</strong> Exploits browser flaws, affecting any site visited.</li>
                <li><strong>Self-XSS:</strong> Tricks users into pasting malicious code into their browser console.</li>
            </ul>
        </section>

        <!-- Consequences -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">📉 Consequences of XSS</h2>
            <ul class="text-body">
                <li>Session hijacking and account takeover.</li>
                <li>Cookie theft and credential compromise.</li>
                <li>Website defacement and unauthorized actions.</li>
                <li>Malware distribution via hidden iFrames or drive-by downloads.</li>
                <li>Phishing overlays and redirection to malicious sites.</li>
            </ul>
        </section>

        <!-- Prevention -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🛡️ Prevention Strategies</h2>
            <ul class="text-body">
                <li>Validate and sanitize all user inputs.</li>
                <li>Apply contextual output encoding/escaping (HTML, JavaScript, URL).</li>
                <li>Use Content Security Policy (CSP) to restrict script execution.</li>
                <li>Set cookies with <code>HttpOnly</code> and <code>Secure</code> flags.</li>
                <li>Employ frameworks and libraries with built-in XSS protection.</li>
            </ul>
        </section>

        <!-- Practice Environments -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🧪 Practice Environments</h2>
            <ul class="text-body">
                <li><strong>DVWA:</strong> Includes modules for Reflected, Stored, and DOM-based XSS.</li>
                <li><strong>PortSwigger Web Security Academy:</strong> Free labs on XSS exploitation and defense.</li>
                <li><strong>TryHackMe / HackTheBox:</strong> Guided rooms for hands-on XSS practice.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mt-5">
            <h2 class="h5 text-primary">📌 Conclusion</h2>
            <p class="text-body">
                XSS remains one of the most prevalent web vulnerabilities.
                By understanding its types, consequences, and applying secure coding practices,
                developers and security professionals can protect users from malicious scripts
                and preserve trust in web applications.
            </p>
        </section>
    </article>

    <!-- Floating Side Navigation Buttons (Top Left & Top Right) -->
    <a href="{{ route('notes.note9') }}"
       class="btn btn-outline-primary shadow rounded-circle position-fixed"
       style="top: 80px; left: 20px; z-index: 1050;"
       title="Previous Note" aria-label="Previous Note">
        <i class="fas fa-arrow-left"></i>
    </a>

    <a href="{{ route('notes.note11') }}"
       class="btn btn-outline-primary shadow rounded-circle position-fixed"
       style="top: 80px; right: 20px; z-index: 1050;"
       title="Next Note" aria-label="Next Note">
        <i class="fas fa-arrow-right"></i>
    </a>
</div>
@endsection
