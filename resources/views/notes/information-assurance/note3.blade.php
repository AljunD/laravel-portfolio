@extends('layouts.app')
@section('title', 'Note 3: Career Opportunities in IT Security')

@section('content')
<div class="container py-5">

    <!-- Breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-body px-3 py-2 rounded shadow-sm">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('notes.index') }}">PKS</a></li>
            <li class="breadcrumb-item active">Career Opportunities in IT Security</li>
        </ol>
    </nav>

    <!-- Article -->
    <article class="bg-body-secondary p-4 rounded shadow-sm">
        <!-- Title -->
        <h1 class="fw-bold mb-3 text-body">
            <i class="fas fa-user-shield me-2 text-primary"></i>
            Career Opportunities in IT Security
        </h1>
        <p class="text-body-secondary">Published on <span class="badge bg-secondary">November 27, 2025</span></p>

        <!-- Summary -->
        <section class="mb-5">
            <h2 class="h4 text-primary border-bottom pb-2">🔍 Summary</h2>
            <p class="lead text-body">
                IT security offers diverse career paths across <span class="badge bg-success">Blue Team</span> defense,
                <span class="badge bg-danger">Red Team</span> offense, and specialized roles in governance, risk, and compliance.
                Professionals safeguard data, test vulnerabilities, and design resilient systems. Certifications and hands-on labs
                accelerate entry into these fields.
            </p>
        </section>

        <!-- Topic -->
        <section>
            <h2 class="h4 text-primary border-bottom pb-2">📘 Topic</h2>
            <p class="text-body">
                As organizations face increasing cyber threats, IT security careers have become critical. Opportunities range from
                defending networks to simulating attacks, and from policy development to incident response. Each path contributes
                to the overall resilience of digital infrastructure.
            </p>

            <div class="row mt-4">
                <div class="col-md-4 mb-3">
                    <div class="border rounded p-3 h-100 bg-body shadow-sm">
                        <h5 class="fw-bold text-success">Blue Team (Defense)</h5>
                        <p class="text-body">Focuses on monitoring, detection, and prevention. Roles include SOC Analyst, Incident Responder, and Threat Hunter.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="border rounded p-3 h-100 bg-body shadow-sm">
                        <h5 class="fw-bold text-danger">Red Team (Offense)</h5>
                        <p class="text-body">Simulates attacks to identify weaknesses. Roles include Penetration Tester, Ethical Hacker, and Exploit Developer.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="border rounded p-3 h-100 bg-body shadow-sm">
                        <h5 class="fw-bold text-warning">Governance & Compliance</h5>
                        <p class="text-body">Ensures adherence to standards and laws. Roles include Security Auditor, Risk Analyst, and Compliance Officer.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Image -->
        <figure class="my-5 text-center">
            <img src="{{ asset('images/notes/information-assurance/note3/p1.png') }}"
                 class="img-fluid rounded shadow"
                 alt="IT Security Career Paths">
            <figcaption class="mt-2 text-body-secondary">
                Career paths in IT security: Blue Team, Red Team, and Governance/Compliance.
            </figcaption>
        </figure>

        <!-- Practical Applications -->
        <div class="alert alert-info mt-4" role="alert">
            <h5 class="alert-heading">💡 Practical Applications</h5>
            <p class="text-body">
                Blue Teams defend critical infrastructure, Red Teams expose vulnerabilities before attackers do, and compliance
                specialists align organizations with regulations like GDPR or HIPAA. Labs on <strong>HackTheBox</strong> and
                <strong>TryHackMe</strong> provide real-world practice for both offensive and defensive skills.
            </p>
        </div>

        <!-- Certifications -->
        <section class="mt-4">
            <h2 class="h5 text-primary">🎓 Certifications & Skills</h2>
            <ul class="text-body">
                <li>CompTIA Security+ for foundational knowledge</li>
                <li>Certified Ethical Hacker (CEH) for Red Team skills</li>
                <li>Certified Information Systems Security Professional (CISSP) for governance</li>
                <li>Hands-on labs: HackTheBox, TryHackMe, CyberDefenders</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mt-4">
            <h2 class="h5 text-primary">📌 Conclusion</h2>
            <p class="text-body">
                IT security careers are diverse and rewarding, offering opportunities to protect, test, and govern digital systems.
                By combining certifications, practical labs, and PKS documentation, students can build a strong portfolio that
                demonstrates both technical expertise and strategic thinking.
            </p>
        </section>
    </article>

    <!-- Floating Side Navigation Buttons (Top Left & Top Right) -->
    <a href="{{ route('notes.note2') }}"
       class="btn btn-outline-primary shadow rounded-circle position-fixed"
       style="top: 80px; left: 20px; z-index: 1050;"
       title="Previous Note" aria-label="Previous Note">
        <i class="fas fa-arrow-left"></i>
    </a>

    <a href="{{ route('notes.note4') }}"
       class="btn btn-outline-primary shadow rounded-circle position-fixed"
       style="top: 80px; right: 20px; z-index: 1050;"
       title="Next Note" aria-label="Next Note">
        <i class="fas fa-arrow-right"></i>
    </a>
</div>
@endsection
