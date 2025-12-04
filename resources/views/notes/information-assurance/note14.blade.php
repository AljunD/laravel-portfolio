@extends('layouts.app')
@section('title', 'Note 14: Introduction to Event Logs')

@section('content')
<div class="container py-5">

    <!-- Breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-body px-3 py-2 rounded shadow-sm">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('notes.index') }}">PKS</a></li>
            <li class="breadcrumb-item active">Event Logs</li>
        </ol>
    </nav>

    <!-- Article -->
    <article class="bg-body-secondary p-4 rounded shadow-sm">
        <!-- Title -->
        <h1 class="fw-bold mb-3 text-body">
            <i class="fas fa-clipboard-list me-2 text-primary"></i>
            Introduction to Event Logs
        </h1>
        <p class="text-body-secondary">Published on <span class="badge bg-secondary">December 4, 2025</span></p>

        <!-- Summary -->
        <section class="mb-5">
            <h2 class="h4 text-primary border-bottom pb-2">🔍 Summary</h2>
            <p class="lead text-body">
                Event logs are records of significant actions or occurrences recognized by a software system.
                They provide an audit trail for diagnosing issues, investigating unauthorized activity, and
                correlating events across systems to detect malicious behavior.
            </p>
        </section>

        <!-- Endpoint Security -->
        <section>
            <h2 class="h4 text-primary border-bottom pb-2">🖥️ Endpoint Security & Logs</h2>
            <ul class="text-body">
                <li>Workstations are prime targets for adversaries.</li>
                <li>Event logs capture system activity for auditing and investigation.</li>
                <li>Combining logs reveals correlations between different events.</li>
                <li>Logs are essential for detecting lateral movement and ransomware deployment.</li>
            </ul>
        </section>

        <!-- Fundamentals -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">📑 Log Fundamentals</h2>
            <p class="text-body">
                Logs serve as digital footprints of system activity. Each entry typically contains:
            </p>
            <ul class="text-body">
                <li><strong>Timestamp:</strong> When the event occurred.</li>
                <li><strong>Source:</strong> System or application generating the log.</li>
                <li><strong>Event Type:</strong> Nature of the activity.</li>
                <li><strong>Details:</strong> User, IP address, device, or other attributes.</li>
            </ul>
        </section>

        <!-- Contextual Correlation -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🔗 Contextual Correlation</h2>
            <p class="text-body">
                A single log entry may be insignificant, but aggregated logs provide powerful insights:
            </p>
            <ul class="text-body">
                <li>What happened? (e.g., web shell upload).</li>
                <li>When did it happen? (precise timestamp).</li>
                <li>Where did it happen? (IP address, system name).</li>
                <li>Who was responsible? (user or service account).</li>
                <li>Was it successful? (status codes, outcomes).</li>
                <li>What was the result? (data loss, post-exploitation activity).</li>
            </ul>
        </section>

        <!-- Common Log Types -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">📂 Common Log Types</h2>
            <ul class="text-body">
                <li><strong>Application Logs:</strong> Status, errors, warnings from applications.</li>
                <li><strong>Audit Logs:</strong> Operational activities for compliance.</li>
                <li><strong>Security Logs:</strong> Authentication, permissions, firewall activity.</li>
                <li><strong>System Logs:</strong> Kernel events, boot sequences, hardware status.</li>
                <li><strong>Network Logs:</strong> Traffic and connection details.</li>
                <li><strong>Web Server Logs:</strong> Requests, URLs, response codes.</li>
            </ul>
        </section>

        <!-- Standards -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">📊 Log Formats & Standards</h2>
            <ul class="text-body">
                <li><strong>Structured:</strong> Machine-readable formats.</li>
                <li><strong>Semi-structured:</strong> Mix of predictable and free-form data.</li>
                <li><strong>Unstructured:</strong> Free-form text, harder to parse.</li>
            </ul>
        </section>

        <!-- Collection & SIEM -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🛠️ Log Collection & SIEM</h2>
            <ul class="text-body">
                <li>Centralized log collection improves efficiency.</li>
                <li>Time synchronization (NTP) ensures accurate chronology.</li>
                <li>SIEM platforms (Splunk, Elastic, Azure Sentinel, QRadar) enable correlation and threat detection.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mt-5">
            <h2 class="h5 text-primary">📌 Conclusion</h2>
            <p class="text-body">
                Event logs are the backbone of system monitoring and security investigations.
                By collecting, correlating, and analyzing logs, organizations can detect intrusions,
                reconstruct attack chains, and maintain compliance with regulatory requirements.
            </p>
        </section>
    </article>

    <!-- Floating Side Navigation Buttons (Top Left & Top Right) -->
    <a href="{{ route('notes.note13') }}"
       class="btn btn-outline-primary shadow rounded-circle position-fixed"
       style="top: 80px; left: 20px; z-index: 1050;"
       title="Previous Note" aria-label="Previous Note">
        <i class="fas fa-arrow-left"></i>
    </a>

    <a href="{{ route('notes.note1') }}"
       class="btn btn-outline-primary shadow rounded-circle position-fixed"
       style="top: 80px; right: 20px; z-index: 1050;"
       title="Next Note" aria-label="Next Note">
        <i class="fas fa-arrow-right"></i>
    </a>
</div>
@endsection
