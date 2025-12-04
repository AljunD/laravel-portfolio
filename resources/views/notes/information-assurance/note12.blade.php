@extends('layouts.app')
@section('title', 'Note 12: Network Traffic Analysis')

@section('content')
<div class="container py-5">

    <!-- Breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-body px-3 py-2 rounded shadow-sm">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('notes.index') }}">PKS</a></li>
            <li class="breadcrumb-item active">Network Traffic Analysis</li>
        </ol>
    </nav>

    <!-- Article -->
    <article class="bg-body-secondary p-4 rounded shadow-sm">
        <!-- Title -->
        <h1 class="fw-bold mb-3 text-body">
            <i class="fas fa-network-wired me-2 text-primary"></i>
            Network Traffic Analysis
        </h1>
        <p class="text-body-secondary">Published on <span class="badge bg-secondary">December 4, 2025</span></p>

        <!-- Summary -->
        <section class="mb-5">
            <h2 class="h4 text-primary border-bottom pb-2">🔍 Summary</h2>
            <p class="lead text-body">
                Network Traffic Analysis involves capturing, inspecting, and analyzing network data flow.
                It provides visibility into protocols, ports, and communication patterns, helping organizations
                establish baselines, detect anomalies, and respond to threats effectively.
            </p>
        </section>

        <!-- OSI Model Primer -->
        <section>
            <h2 class="h4 text-primary border-bottom pb-2">🌐 OSI Model Primer</h2>
            <ul class="text-body">
                <li><strong>Layer 7 – Application:</strong> User-facing protocols (HTTP, FTP).</li>
                <li><strong>Layer 6 – Presentation:</strong> Data formatting and encryption (SSL, TLS).</li>
                <li><strong>Layer 5 – Session:</strong> Connection management (NetBIOS).</li>
                <li><strong>Layer 4 – Transport:</strong> End-to-end communication (TCP, UDP).</li>
                <li><strong>Layer 3 – Network:</strong> Addressing and routing (IP).</li>
                <li><strong>Layer 2 – Data Link:</strong> Frames between devices (Ethernet).</li>
                <li><strong>Layer 1 – Physical:</strong> Hardware transmission (cables, NICs).</li>
            </ul>
        </section>

        <!-- Defined -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">📡 Network Traffic Analysis Defined</h2>
            <p class="text-body">
                It is the act of examining network traffic to characterize common ports and protocols,
                establish baselines, monitor threats, and ensure visibility into the organization’s network.
            </p>
        </section>

        <!-- Tools -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🛠️ Common Tools</h2>
            <ul class="text-body">
                <li><strong>tcpdump:</strong> Command-line packet capture.</li>
                <li><strong>Tshark:</strong> CLI analyzer for live or saved traffic.</li>
                <li><strong>Wireshark:</strong> GUI-based analyzer with deep protocol inspection.</li>
                <li><strong>NGrep:</strong> Pattern matching for packets.</li>
                <li><strong>tcpick:</strong> TCP stream tracking and reassembly.</li>
                <li><strong>Network Taps & Span Ports:</strong> Hardware/software for duplicating traffic.</li>
            </ul>
        </section>

        <!-- Process -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">⚙️ Analysis Process</h2>
            <ul class="text-body">
                <li><strong>Ingest Traffic:</strong> Capture packets with filters.</li>
                <li><strong>Reduce Noise:</strong> Filter unnecessary traffic.</li>
                <li><strong>Analyze:</strong> Identify relevant data and anomalies.</li>
                <li><strong>Detect & Alert:</strong> Use IDS/IPS to flag malicious activity.</li>
            </ul>
        </section>

        <!-- Approaches -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">📊 Approaches</h2>
            <ul class="text-body">
                <li><strong>Descriptive:</strong> Summarizes traffic characteristics.</li>
                <li><strong>Diagnostic:</strong> Explains causes and effects.</li>
                <li><strong>Predictive:</strong> Models future probabilities.</li>
                <li><strong>Prescriptive:</strong> Recommends actions to prevent issues.</li>
            </ul>
        </section>

        <!-- Wireshark -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🔎 Wireshark Deep Dive</h2>
            <p class="text-body">
                Wireshark provides packet list, details, and bytes views. It supports display filters
                (e.g., <code>http.request.method == GET</code>), capture filters (e.g., <code>tcp port 80</code>),
                and statistics such as top talkers, protocol breakdowns, and conversations.
                It can also reconstruct TCP streams to extract files or conversations.
            </p>
        </section>

        <!-- Conclusion -->
        <section class="mt-5">
            <h2 class="h5 text-primary">📌 Conclusion</h2>
            <p class="text-body">
                Network Traffic Analysis is essential for monitoring, troubleshooting, and securing networks.
                By leveraging tools like Wireshark and tcpdump, applying filters, and interpreting traffic patterns,
                professionals gain actionable insights to detect threats and maintain resilient infrastructures.
            </p>
        </section>
    </article>

    <!-- Floating Side Navigation Buttons (Top Left & Top Right) -->
    <a href="{{ route('notes.note11') }}"
       class="btn btn-outline-primary shadow rounded-circle position-fixed"
       style="top: 80px; left: 20px; z-index: 1050;"
       title="Previous Note" aria-label="Previous Note">
        <i class="fas fa-arrow-left"></i>
    </a>

    <a href="{{ route('notes.note13') }}"
       class="btn btn-outline-primary shadow rounded-circle position-fixed"
       style="top: 80px; right: 20px; z-index: 1050;"
       title="Next Note" aria-label="Next Note">
        <i class="fas fa-arrow-right"></i>
    </a>
</div>
@endsection
