@extends('layouts.app')
@section('title', 'Note 13: Email Security Fundamentals')

@section('content')
<div class="container py-5">

    <!-- Breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-body px-3 py-2 rounded shadow-sm">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('notes.index') }}">PKS</a></li>
            <li class="breadcrumb-item active">Email Security Fundamentals</li>
        </ol>
    </nav>

    <!-- Article -->
    <article class="bg-body-secondary p-4 rounded shadow-sm">
        <!-- Title -->
        <h1 class="fw-bold mb-3 text-body">
            <i class="fas fa-envelope me-2 text-danger"></i>
            Email Security Fundamentals
        </h1>
        <p class="text-body-secondary">Published on <span class="badge bg-secondary">December 4, 2025</span></p>

        <!-- Summary -->
        <section class="mb-5">
            <h2 class="h4 text-primary border-bottom pb-2">🔍 Summary</h2>
            <p class="lead text-body">
                Email remains one of the most widely used communication methods, but it is also a common attack vector.
                Email Security Fundamentals cover how email works, the importance of confidentiality, integrity, and authentication,
                and the use of encryption standards like S/MIME and OpenPGP to protect sensitive communications.
            </p>
        </section>

        <!-- How Email Works -->
        <section>
            <h2 class="h4 text-primary border-bottom pb-2">📬 How Email Works</h2>
            <ol class="text-body">
                <li><strong>Compose:</strong> User writes an email in a client.</li>
                <li><strong>SMTP Server:</strong> Sends the message to the recipient’s mail server.</li>
                <li><strong>DNS Lookup:</strong> Resolves MX records to find the destination server.</li>
                <li><strong>MX Server:</strong> Receives the email for the recipient’s domain.</li>
                <li><strong>User Inbox:</strong> Message is delivered to the recipient.</li>
            </ol>
        </section>

        <!-- Security Principles -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🛡️ Core Security Principles</h2>
            <ul class="text-body">
                <li><strong>Confidentiality:</strong> Only authorized users can read emails.</li>
                <li><strong>Integrity:</strong> Prevents unauthorized modification.</li>
                <li><strong>Availability:</strong> Ensures timely access.</li>
                <li><strong>Authentication:</strong> Verifies sender identity.</li>
                <li><strong>Non-repudiation:</strong> Prevents denial of sending.</li>
            </ul>
        </section>

        <!-- Encryption -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🔐 Email Encryption</h2>
            <p class="text-body">
                Encryption ensures that only intended recipients can read email content.
                It protects sensitive data in transit and at rest, supports compliance, and builds trust.
            </p>
            <h3 class="h5 mt-3">S/MIME</h3>
            <ul class="text-body">
                <li>Uses PKI and trusted Certificate Authorities.</li>
                <li>Provides encryption and digital signatures.</li>
                <li>Common in enterprise environments.</li>
            </ul>
            <h3 class="h5 mt-3">OpenPGP</h3>
            <ul class="text-body">
                <li>Open-source, decentralized trust model.</li>
                <li>Uses public/private key pairs.</li>
                <li>Popular among privacy-focused users.</li>
            </ul>
        </section>

        <!-- Threats -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">⚠️ Common Threats</h2>
            <ul class="text-body">
                <li>Phishing and spear phishing.</li>
                <li>Malware via attachments or links.</li>
                <li>Email spoofing and Business Email Compromise (BEC).</li>
                <li>Social engineering and zero-day exploits.</li>
            </ul>
        </section>

        <!-- Authentication -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">📑 Email Authentication</h2>
            <ul class="text-body">
                <li><strong>SPF:</strong> Validates sending IP addresses.</li>
                <li><strong>DKIM:</strong> Uses cryptographic signatures to verify authenticity.</li>
                <li><strong>DMARC:</strong> Provides policy and reporting for SPF/DKIM failures.</li>
            </ul>
        </section>

        <!-- Tools -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🧪 Analysis Tools</h2>
            <ul class="text-body">
                <li><strong>Message Header Analyzer:</strong> Parses headers for SPF, DKIM, DMARC results.</li>
                <li><strong>REMnux Platform:</strong> Linux toolkit for malware and email analysis.</li>
                <li><strong>emldump, msg-extractor, mail-parser:</strong> Tools for parsing and analyzing email files.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mt-5">
            <h2 class="h5 text-primary">📌 Conclusion</h2>
            <p class="text-body">
                Email security is vital for protecting sensitive communications and preventing fraud.
                By applying encryption standards, authentication mechanisms, and analysis tools,
                organizations and individuals can safeguard their email systems against evolving threats.
            </p>
        </section>
    </article>

    <!-- Floating Side Navigation Buttons (Top Left & Top Right) -->
    <a href="{{ route('notes.note12') }}"
       class="btn btn-outline-primary shadow rounded-circle position-fixed"
       style="top: 80px; left: 20px; z-index: 1050;"
       title="Previous Note" aria-label="Previous Note">
        <i class="fas fa-arrow-left"></i>
    </a>

    <a href="{{ route('notes.note14') }}"
       class="btn btn-outline-primary shadow rounded-circle position-fixed"
       style="top: 80px; right: 20px; z-index: 1050;"
       title="Next Note" aria-label="Next Note">
        <i class="fas fa-arrow-right"></i>
    </a>
</div>
@endsection
