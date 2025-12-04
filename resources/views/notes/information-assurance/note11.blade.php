@extends('layouts.app')
@section('title', 'Note 11: Path Traversal')

@section('content')
<div class="container py-5">

    <!-- Breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-body px-3 py-2 rounded shadow-sm">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('notes.index') }}">PKS</a></li>
            <li class="breadcrumb-item active">Path Traversal</li>
        </ol>
    </nav>

    <!-- Article -->
    <article class="bg-body-secondary p-4 rounded shadow-sm">
        <!-- Title -->
        <h1 class="fw-bold mb-3 text-body">
            <i class="fas fa-folder-open me-2 text-danger"></i>
            Path Traversal (CWE‑35)
        </h1>
        <p class="text-body-secondary">Published on <span class="badge bg-secondary">December 4, 2025</span></p>

        <!-- Summary -->
        <section class="mb-5">
            <h2 class="h4 text-primary border-bottom pb-2">🔍 Summary</h2>
            <p class="lead text-body">
                Path Traversal, also known as Directory Traversal, is a web security vulnerability that allows attackers
                to access files and directories outside the intended scope of a web application. By manipulating input
                with sequences like <code>../</code>, attackers can bypass restrictions and gain access to sensitive files
                such as configuration data, credentials, or system files.
            </p>
        </section>

        <!-- How It Works -->
        <section>
            <h2 class="h4 text-primary border-bottom pb-2">⚙️ How Path Traversal Works</h2>
            <ul class="text-body">
                <li>Applications build file paths using user input without proper validation.</li>
                <li>Attackers inject traversal sequences (<code>../</code>, <code>..\\</code>, encoded variants).</li>
                <li>The server resolves these paths to unintended directories or files.</li>
                <li>Sensitive information such as <code>/etc/passwd</code> or application source code can be exposed.</li>
            </ul>
            <div class="alert alert-danger mt-3">
                <strong>Example:</strong>
                <code>https://example.com/?file=../../etc/passwd</code> → retrieves the system password file.
            </div>
        </section>

        <!-- Consequences -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">📉 Consequences</h2>
            <ul class="text-body">
                <li>Unauthorized access to sensitive files and credentials.</li>
                <li>Modification or deletion of critical files.</li>
                <li>System compromise through exposure of configuration and architecture details.</li>
                <li>Data breaches and service disruption.</li>
            </ul>
        </section>

        <!-- Techniques -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🧩 Common Techniques</h2>
            <ul class="text-body">
                <li>Dot-dot-slash (<code>../</code>) sequences.</li>
                <li>Alternate path separators (<code>/</code>, <code>\\</code>).</li>
                <li>Percent encoding (<code>%2e%2e%2f</code>).</li>
                <li>Double encoding (<code>%252e%252e%252f</code>).</li>
                <li>Unicode encoding (<code>%u002e%u002e%u002f</code>).</li>
                <li>Mangled paths (e.g., <code>....//....//</code>).</li>
                <li>NULL byte injection (<code>%00</code>).</li>
            </ul>
        </section>

        <!-- Prevention -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🛡️ Prevention Strategies</h2>
            <ul class="text-body">
                <li>Validate and sanitize user input using allowlists.</li>
                <li>Never use raw user input directly in file paths.</li>
                <li>Normalize paths to neutralize traversal sequences.</li>
                <li>Apply strict access controls and least privilege principles.</li>
                <li>Isolate execution environments to limit file system exposure.</li>
            </ul>
        </section>

        <!-- Tools -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🧪 Tools for Detection</h2>
            <ul class="text-body">
                <li><strong>Burp Suite:</strong> Detects directory traversal vulnerabilities during scans.</li>
                <li><strong>OWASP ZAP:</strong> Free and open-source security scanner.</li>
                <li><strong>Nikto:</strong> Web server scanner for dangerous files and misconfigurations.</li>
                <li><strong>DotDotPwn:</strong> Specialized tool for path traversal testing.</li>
                <li><strong>Metasploit:</strong> Framework with modules for exploitation.</li>
                <li><strong>DirBuster:</strong> OWASP tool for discovering hidden directories and files.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mt-5">
            <h2 class="h5 text-primary">📌 Conclusion</h2>
            <p class="text-body">
                Path Traversal is a critical vulnerability that can expose sensitive files and compromise systems.
                By understanding traversal techniques, recognizing their consequences, and applying secure coding practices,
                developers and security professionals can protect applications from unauthorized access and exploitation.
            </p>
        </section>
    </article>

    <!-- Floating Side Navigation Buttons (Top Left & Top Right) -->
    <a href="{{ route('notes.note10') }}"
       class="btn btn-outline-primary shadow rounded-circle position-fixed"
       style="top: 80px; left: 20px; z-index: 1050;"
       title="Previous Note" aria-label="Previous Note">
        <i class="fas fa-arrow-left"></i>
    </a>

    <a href="{{ route('notes.note12') }}"
       class="btn btn-outline-primary shadow rounded-circle position-fixed"
       style="top: 80px; right: 20px; z-index: 1050;"
       title="Next Note" aria-label="Next Note">
        <i class="fas fa-arrow-right"></i>
    </a>
</div>
@endsection
