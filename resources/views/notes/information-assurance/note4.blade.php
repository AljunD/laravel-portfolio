@extends('layouts.app')
@section('title', 'Note 4: Encryption Fundamentals')

@section('content')
<div class="container py-5">

    <!-- Breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-body px-3 py-2 rounded shadow-sm">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('notes.index') }}">PKS</a></li>
            <li class="breadcrumb-item active">Encryption Fundamentals</li>
        </ol>
    </nav>

    <!-- Article -->
    <article class="bg-body-secondary p-4 rounded shadow-sm">
        <!-- Title -->
        <h1 class="fw-bold mb-3 text-body">
            <i class="fas fa-lock me-2 text-primary"></i>
            Encryption Fundamentals
        </h1>
        <p class="text-body-secondary">Published on <span class="badge bg-secondary">November 27, 2025</span></p>

        <!-- Summary -->
        <section class="mb-5">
            <h2 class="h4 text-primary border-bottom pb-2">🔍 Summary</h2>
            <p class="lead text-body">
                Encryption is the backbone of cybersecurity, ensuring <strong>confidentiality</strong>, <strong>integrity</strong>,
                <strong>authentication</strong>, and <strong>non-repudiation</strong>. This note explores cryptographic principles,
                hash functions, symmetric and asymmetric ciphers, key exchange algorithms, and the role of certificate authorities
                in securing digital communication.
            </p>
        </section>

        <!-- Principles of Cryptography -->
        <section>
            <h2 class="h4 text-primary border-bottom pb-2">📘 Principles of Cryptography</h2>
            <ul class="text-body">
                <li><strong>Encryption</strong> – Protects data from unauthorized access.</li>
                <li><strong>Authentication</strong> – Confirms the identity of users or systems.</li>
                <li><strong>Integrity</strong> – Ensures data is not altered in transit.</li>
                <li><strong>Non-repudiation</strong> – Prevents denial of actions (e.g., digital signatures).</li>
            </ul>
        </section>

        <!-- Hash Functions -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🔑 Hash Functions</h2>
            <p class="text-body">
                Hash functions convert plain text into fixed-length hashed values. They are one-way functions used for
                password storage, digital signatures, and integrity checks.
            </p>
            <div class="alert alert-info">
                <strong>Example:</strong> SHA-256 produces a 256-bit hash value, widely used in blockchain and secure communications.
            </div>
        </section>

        <!-- Ciphers -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🧩 Ciphers</h2>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="border rounded p-3 h-100 bg-body shadow-sm">
                        <h5 class="fw-bold text-success">Symmetric Encryption</h5>
                        <p class="text-body">Uses a single shared key for both encryption and decryption. Examples: AES, DES, 3DES.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="border rounded p-3 h-100 bg-body shadow-sm">
                        <h5 class="fw-bold text-danger">Asymmetric Encryption</h5>
                        <p class="text-body">Uses a public key for encryption and a private key for decryption. Examples: RSA, DSA, ECDSA.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Key Exchange -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🔄 Key Exchange Algorithms</h2>
            <p class="text-body">
                Secure communication requires exchanging keys without exposing them. The <strong>Diffie-Hellman</strong> algorithm
                allows two parties to establish a shared secret over an insecure channel.
            </p>
            <table class="table table-fixed table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Alice</th>
                        <th>Bob</th>
                    </tr>
                </thead>
                <tbody class="text-body">
                    <tr>
                        <td>Chooses private key (a), computes public key a* = q^a mod p</td>
                        <td>Chooses private key (b), computes public key b* = q^b mod p</td>
                    </tr>
                    <tr>
                        <td>Receives b*, computes shared secret x = (b*)^a mod p</td>
                        <td>Receives a*, computes shared secret x = (a*)^b mod p</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Transport vs End-to-End Encryption -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🌐 Transport vs End-to-End Encryption</h2>
            <p class="text-body">
                <strong>Transport Encryption</strong> secures data between client and server (e.g., HTTPS).
                <strong>End-to-End Encryption</strong> ensures only the communicating users can read the data (e.g., Signal, WhatsApp).
            </p>
        </section>

        <!-- Certificate Authorities -->
        <section class="mt-5">
            <h2 class="h4 text-primary border-bottom pb-2">🏛️ Certificate Authorities & Digital Certificates</h2>
            <p class="text-body">
                Certificate Authorities (CAs) validate identities and issue digital certificates. Trusted Root-CAs form the basis
                of secure communication on the internet. X.509 certificates are used in SSL/TLS to establish trust.
            </p>
            <ul class="text-body">
                <li>Generate a Certificate Signing Request (CSR)</li>
                <li>CA validates identity</li>
                <li>CA issues signed certificate</li>
                <li>Install certificate on server</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mt-5">
            <h2 class="h5 text-primary">📌 Conclusion</h2>
            <p class="text-body">
                Encryption fundamentals underpin secure communication in modern IT systems. By understanding cryptographic
                principles, ciphers, key exchange, and certificate authorities, professionals can design systems that protect
                confidentiality, integrity, and trust in the digital age.
            </p>
        </section>
    </article>

    <!-- Floating Side Navigation Buttons (Top Left & Top Right) -->
    <a href="{{ route('notes.note3') }}"
       class="btn btn-outline-primary shadow rounded-circle position-fixed"
       style="top: 80px; left: 20px; z-index: 1050;"
       title="Previous Note" aria-label="Previous Note">
        <i class="fas fa-arrow-left"></i>
    </a>

    <a href="{{ route('notes.note5') }}"
       class="btn btn-outline-primary shadow rounded-circle position-fixed"
       style="top: 80px; right: 20px; z-index: 1050;"
       title="Next Note" aria-label="Next Note">
        <i class="fas fa-arrow-right"></i>
    </a>
</div>
@endsection
