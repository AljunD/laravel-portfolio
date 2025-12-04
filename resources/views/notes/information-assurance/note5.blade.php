@extends('layouts.app')
@section('title', 'Note 5: Cloud & Virtualization Fundamentals')

@section('content')
<div class="container py-5">

    <!-- Breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-body px-3 py-2 rounded shadow-sm">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('notes.index') }}">PKS</a></li>
            <li class="breadcrumb-item active">Cloud & Virtualization Fundamentals</li>
        </ol>
    </nav>

    <!-- Article -->
    <article class="bg-body-secondary p-4 rounded shadow-sm">
        <!-- Title -->
        <h1 class="fw-bold mb-3 text-body">
            <i class="fas fa-cloud me-2 text-primary"></i>
            Cloud & Virtualization Fundamentals
        </h1>
        <p class="text-body-secondary">Published on <span class="badge bg-secondary">November 27, 2025</span></p>

        <!-- Summary -->
        <section class="mb-5">
            <h2 class="h4 text-primary border-bottom pb-2">🔍 Summary</h2>
            <p class="lead text-body">
                Cloud computing and virtualization are cornerstones of modern IT infrastructure. This note explores
                <strong>hypervisors</strong>, <strong>cloud storage</strong>, <strong>deployment models</strong>, and the role of
                <strong>Cloud Access Security Brokers (CASBs)</strong> in securing organizational resources.
            </p>
        </section>

        <!-- Hypervisors -->
        <section>
            <h2 class="h4 text-primary border-bottom pb-2">🖥️ Hypervisors</h2>
            <p class="text-body">
                Hypervisors enable virtualization by allowing multiple operating systems to run on a single physical machine.
            </p>
            <ul class="text-body">
                <li><strong>Type 1 (Bare-metal):</strong> Runs directly on hardware. Examples: VMware ESXi, Microsoft Hyper-V.</li>
                <li><strong>Type 2 (Hosted):</strong> Runs on top of an existing OS. Examples: VirtualBox, VMware Workstation.</li>
            </ul>
        </section>

        <!-- Cloud Storage -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">💾 Cloud Storage</h2>
            <p class="text-body">
                Cloud storage provides scalable, remote file hosting accessible via apps or web portals.
            </p>
            <ul class="text-body">
                <li><strong>Applications:</strong> OneDrive, Google Drive, Dropbox.</li>
                <li><strong>File Synchronization:</strong> Keeps data consistent across devices.</li>
                <li><strong>Content Delivery Networks (CDNs):</strong> Distribute content globally to reduce latency (e.g., YouTube, Netflix).</li>
            </ul>
        </section>

        <!-- Deployment Models -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🌐 Cloud Deployment Models</h2>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="border rounded p-3 h-100 bg-body shadow-sm">
                        <h5 class="fw-bold text-success">Public Cloud</h5>
                        <p class="text-body">Resources provided by third-party vendors over the internet. Example: AWS, Azure.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="border rounded p-3 h-100 bg-body shadow-sm">
                        <h5 class="fw-bold text-danger">Private Cloud</h5>
                        <p class="text-body">Operated internally by an organization. Example: AWS GovCloud.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="border rounded p-3 h-100 bg-body shadow-sm">
                        <h5 class="fw-bold text-warning">Hybrid Cloud</h5>
                        <p class="text-body">Combines public and private resources. Requires strict data governance.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="border rounded p-3 h-100 bg-body shadow-sm">
                        <h5 class="fw-bold text-info">Community Cloud</h5>
                        <p class="text-body">Shared infrastructure among organizations with similar needs. Example: research institutions.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CASB -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🔒 Cloud Access Security Broker (CASB)</h2>
            <p class="text-body">
                CASBs act as security checkpoints between users and cloud services, ensuring compliance and visibility.
            </p>
            <ul class="text-body">
                <li>Enable single sign-on authentication</li>
                <li>Enforce access controls & authorizations</li>
                <li>Scan for malware & rogue devices</li>
                <li>Monitor user & resource activity</li>
                <li>Reduce risk of data theft</li>
            </ul>
            <p class="small text-body-secondary">Examples: Forcepoint, Skyhigh Security, CloudLock.</p>
        </section>

        <!-- Conclusion -->
        <section class="mt-5">
            <h2 class="h5 text-primary">📌 Conclusion</h2>
            <p class="text-body">
                Cloud and virtualization technologies provide scalability, flexibility, and efficiency for modern organizations.
                Understanding hypervisors, storage, deployment models, and CASBs equips professionals to design secure,
                resilient infrastructures.
            </p>
        </section>
    </article>

    <!-- Floating Side Navigation Buttons (Top Left & Top Right) -->
    <a href="{{ route('notes.note4') }}"
       class="btn btn-outline-primary shadow rounded-circle position-fixed"
       style="top: 80px; left: 20px; z-index: 1050;"
       title="Previous Note" aria-label="Previous Note">
        <i class="fas fa-arrow-left"></i>
    </a>

    <a href="{{ route('notes.note6') }}"
       class="btn btn-outline-primary shadow rounded-circle position-fixed"
       style="top: 80px; right: 20px; z-index: 1050;"
       title="Next Note" aria-label="Next Note">
        <i class="fas fa-arrow-right"></i>
    </a>
</div>
@endsection
