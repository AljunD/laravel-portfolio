@extends('layouts.app')
@section('title', 'Notes')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-4 fw-bold">📚 Personal Knowledge System – Technical Notes</h1>

    <!-- Filter + Search -->
    <div class="row justify-content-center mb-5">
        <div class="col-md-4 mb-3 mb-md-0">
            <!-- Dropdown Filter -->
            <div class="dropdown w-100">
                <button class="btn btn-outline-dark dropdown-toggle w-100" type="button" id="notesDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-filter me-2"></i> Filter Notes
                </button>
                <ul class="dropdown-menu shadow" aria-labelledby="notesDropdown">
                    <li><a class="dropdown-item fw-bold {{ request()->routeIs('notes.index') ? 'active' : '' }}"
                           href="{{ route('notes.index') }}"><i class="fas fa-list me-2"></i> All Notes</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item {{ request()->routeIs('notes.note1') ? 'active' : '' }}"
                           href="{{ route('notes.note1') }}"><i class="fas fa-lock me-2"></i> IT Security & CIA Triad</a></li>
                    <li><a class="dropdown-item {{ request()->routeIs('notes.note2') ? 'active' : '' }}"
                           href="{{ route('notes.note2') }}"><i class="fas fa-users-cog me-2"></i> Blue Team vs Red Team</a></li>
                    <li><a class="dropdown-item {{ request()->routeIs('notes.note3') ? 'active' : '' }}"
                           href="{{ route('notes.note3') }}"><i class="fas fa-user-shield me-2"></i> Career Opportunities in IT Security</a></li>
                    <li><a class="dropdown-item {{ request()->routeIs('notes.note4') ? 'active' : '' }}"
                           href="{{ route('notes.note4') }}"><i class="fas fa-key me-2"></i> Encryption Fundamentals</a></li>
                    <li><a class="dropdown-item {{ request()->routeIs('notes.note5') ? 'active' : '' }}"
                           href="{{ route('notes.note5') }}"><i class="fas fa-cloud me-2"></i> Cloud & Virtualization Fundamentals</a></li>
                    <li><a class="dropdown-item {{ request()->routeIs('notes.note6') ? 'active' : '' }}"
                           href="{{ route('notes.note6') }}"><i class="fas fa-shield-alt me-2"></i> Web Application Security</a></li>
                </ul>
            </div>
        </div>

        <div class="col-md-6">
            <!-- Search Bar -->
            <form action="{{ route('notes.index') }}" method="GET" class="d-flex">
                <input type="text" name="search" class="form-control me-2" placeholder="🔍 Search notes..."
                       value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>

    <!-- Notes Grid -->
    <div class="row">
        <!-- Note 1 -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0 hover-shadow">
                <img src="{{ asset('images/notes/information-assurance/note1/p1.png') }}" class="card-img-top" alt="CIA Triad">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-primary">Note 1: Importance of IT Security & CIA Triad</h5>
                    <p class="text-muted mb-1"><i class="bi bi-calendar-event"></i> November 27, 2025</p>
                    <p class="small">
                        IT security protects systems and data from attacks, focusing on the CIA Triad:
                        <strong>Confidentiality</strong>, <strong>Integrity</strong>, and <strong>Availability</strong>...
                    </p>
                    <div class="mb-2">
                        <span class="badge bg-info text-dark">Security</span>
                        <span class="badge bg-secondary">CIA Triad</span>
                    </div>
                    <a href="{{ route('notes.note1') }}" class="btn btn-outline-primary btn-sm">Read More</a>
                </div>
            </div>
        </div>

        <!-- Note 2 -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0 hover-shadow">
                <img src="{{ asset('images/notes/information-assurance/note2/p1.png') }}" class="card-img-top" alt="Blue vs Red Team">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-primary">Note 2: Career Paths – Blue Team, Red Team & Three Pillars</h5>
                    <p class="text-muted mb-1"><i class="bi bi-calendar-event"></i> November 27, 2025</p>
                    <p class="small">
                        Cybersecurity careers include <strong>Blue Team</strong> (defense) and <strong>Red Team</strong> (ethical attacks).
                        Together they strengthen security, supported by the Three Pillars: People, Processes, Technology...
                    </p>
                    <div class="mb-2">
                        <span class="badge bg-success">Career</span>
                        <span class="badge bg-warning text-dark">Blue Team</span>
                        <span class="badge bg-danger">Red Team</span>
                    </div>
                    <a href="{{ route('notes.note2') }}" class="btn btn-outline-primary btn-sm">Read More</a>
                </div>
            </div>
        </div>

        <!-- Note 3 -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0 hover-shadow">
                <img src="{{ asset('images/notes/information-assurance/note3/p1.png') }}" class="card-img-top" alt="Career Opportunities">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-primary">Note 3: Career Opportunities in IT Security</h5>
                    <p class="text-muted mb-1"><i class="bi bi-calendar-event"></i> November 27, 2025</p>
                    <p class="small">
                        IT security careers span <strong>Blue Team</strong> defense, <strong>Red Team</strong> offense,
                        and governance/compliance roles. Certifications and labs accelerate entry into these fields...
                    </p>
                    <div class="mb-2">
                        <span class="badge bg-success">Career</span>
                        <span class="badge bg-info text-dark">IT Security</span>
                        <span class="badge bg-secondary">Opportunities</span>
                    </div>
                    <a href="{{ route('notes.note3') }}" class="btn btn-outline-primary btn-sm">Read More</a>
                </div>
            </div>
        </div>

        <!-- Note 4 -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0 hover-shadow">
                <img src="{{ asset('images/notes/information-assurance/note4/p1.png') }}" class="card-img-top" alt="Encryption Fundamentals">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-primary">Note 4: Encryption Fundamentals</h5>
                    <p class="text-muted mb-1"><i class="bi bi-calendar-event"></i> November 27, 2025</p>
                    <p class="small">
                        Encryption ensures confidentiality, integrity, authentication, and non-repudiation. This note covers
                        cryptographic principles, hash functions, symmetric and asymmetric ciphers, key exchange, and certificates...
                    </p>
                    <div class="mb-2">
                        <span class="badge bg-primary">Encryption</span>
                        <span class="badge bg-info text-dark">Cryptography</span>
                        <span class="badge bg-secondary">Certificates</span>
                    </div>
                    <a href="{{ route('notes.note4') }}" class="btn btn-outline-primary btn-sm">Read More</a>
                </div>
            </div>
        </div>

        <!-- Note 5 -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0 hover-shadow">
                <img src="{{ asset('images/notes/information-assurance/note5/p1.png') }}" class="card-img-top" alt="Cloud & Virtualization">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-primary">Note 5: Cloud & Virtualization Fundamentals</h5>
                    <p class="text-muted mb-1"><i class="bi bi-calendar-event"></i> November 27, 2025</p>
                    <p class="small">
                        Cloud computing and virtualization are core to modern IT. This note covers hypervisors, cloud storage,
                        deployment models (public, private, hybrid, community), and the role of CASBs in securing cloud services...
                    </p>
                    <!-- Tags -->
                    <div class="mb-2">
                        <span class="badge bg-primary">Cloud</span>
                        <span class="badge bg-info text-dark">Virtualization</span>
                        <span class="badge bg-success">CASB</span>
                    </div>
                    <a href="{{ route('notes.note5') }}" class="btn btn-outline-primary btn-sm">Read More</a>
                </div>
            </div>
        </div>

        <!-- Note 6 -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0 hover-shadow">
                <img src="{{ asset('images/notes/information-assurance/note6/p1.png') }}" class="card-img-top" alt="Web Application Security">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-primary">Note 6: Introduction to Web Application Security</h5>
                    <p class="text-muted mb-1"><i class="bi bi-calendar-event"></i> November 27, 2025</p>
                    <p class="small">
                        Web application security protects websites and services from unauthorized access and disruption. This note
                        explores the evolution of the web (ARPANET → Web 1.0 → Modern Web), the CIA triad in web security,
                        case studies like the Change Healthcare breach, URL anatomy, and OWASP’s Top 10 vulnerabilities...
                    </p>
                    <!-- Tags -->
                    <div class="mb-2">
                        <span class="badge bg-danger">Web Security</span>
                        <span class="badge bg-info text-dark">OWASP</span>
                        <span class="badge bg-secondary">CIA Triad</span>
                    </div>
                    <a href="{{ route('notes.note6') }}" class="btn btn-outline-primary btn-sm">Read More</a>
                </div>
            </div>
        </div>
        <!-- Note 7 -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0 hover-shadow">
                <img src="{{ asset('images/notes/information-assurance/note7/p1.png') }}" class="card-img-top" alt="Burp Suite Introduction">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-primary">Note 7: Introduction to Burp Suite</h5>
                    <p class="text-muted mb-1"><i class="bi bi-calendar-event"></i> December 4, 2025</p>
                    <p class="small">
                        Burp Suite is a leading toolkit for web application security testing. This note introduces its
                        core components—Proxy, Repeater, Intruder, Scanner, and Sequencer—explains installation steps,
                        and highlights practice environments like DVWA and PortSwigger’s Web Security Academy for safe,
                        hands-on vulnerability testing...
                    </p>
                    <!-- Tags -->
                    <div class="mb-2">
                        <span class="badge bg-danger">Burp Suite</span>
                        <span class="badge bg-info text-dark">Penetration Testing</span>
                        <span class="badge bg-secondary">DVWA</span>
                    </div>
                    <a href="{{ route('notes.note7') }}" class="btn btn-outline-primary btn-sm">Read More</a>
                </div>
            </div>
        </div>
        <!-- Note 8 -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0 hover-shadow">
                <img src="{{ asset('images/notes/information-assurance/note8/p1.png') }}" class="card-img-top" alt="Command Injection">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-primary">Note 8: Command Injection</h5>
                    <p class="text-muted mb-1"><i class="bi bi-calendar-event"></i> December 4, 2025</p>
                    <p class="small">
                        Command Injection is a critical vulnerability where unsanitized user input is passed to system-level commands.
                        This note explains how command injection works, its real-world risks, prevention strategies, and practice environments
                        like DVWA and PortSwigger’s Web Security Academy for safe, hands-on learning...
                    </p>
                    <!-- Tags -->
                    <div class="mb-2">
                        <span class="badge bg-danger">Command Injection</span>
                        <span class="badge bg-warning text-dark">Input Validation</span>
                        <span class="badge bg-info text-dark">Exploitation</span>
                        <span class="badge bg-primary">System Security</span>
                        <span class="badge bg-secondary">DVWA</span>
                        <span class="badge bg-success">Mitigation</span>
                    </div>
                    <a href="{{ route('notes.note8') }}" class="btn btn-outline-primary btn-sm">Read More</a>
                </div>
            </div>
        </div>
        <!-- Note 9 -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0 hover-shadow">
                <img src="{{ asset('images/notes/information-assurance/note9/p1.png') }}" class="card-img-top" alt="SQL Injection">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-primary">Note 9: SQL Injection</h5>
                    <p class="text-muted mb-1"><i class="bi bi-calendar-event"></i> December 4, 2025</p>
                    <p class="small">
                        SQL Injection (SQLi) is one of the most dangerous web application vulnerabilities.
                        This note explains how SQLi works, its real-world risks, prevention strategies, and practice environments
                        like DVWA and PortSwigger’s Web Security Academy for safe, hands-on learning...
                    </p>
                    <!-- Tags -->
                    <div class="mb-2">
                        <span class="badge bg-danger">SQL Injection</span>
                        <span class="badge bg-warning text-dark">Input Validation</span>
                        <span class="badge bg-info text-dark">Database Exploitation</span>
                        <span class="badge bg-primary">Data Security</span>
                        <span class="badge bg-secondary">DVWA</span>
                        <span class="badge bg-success">Mitigation</span>
                    </div>
                    <a href="{{ route('notes.note9') }}" class="btn btn-outline-primary btn-sm">Read More</a>
                </div>
            </div>
        </div>
        <!-- Note 10 -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0 hover-shadow">
                <img src="{{ asset('images/notes/information-assurance/note10/p1.png') }}" class="card-img-top" alt="Cross-Site Scripting (XSS)">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-primary">Note 10: Cross-Site Scripting (XSS)</h5>
                    <p class="text-muted mb-1"><i class="bi bi-calendar-event"></i> December 4, 2025</p>
                    <p class="small">
                        Cross-Site Scripting (XSS), classified as CWE‑79, is a web vulnerability that allows attackers
                        to inject malicious scripts into applications. This note explains how XSS works, its types
                        (Reflected, Stored, DOM-based, uXSS, Self-XSS), consequences like session hijacking and data theft,
                        and prevention strategies such as input validation, contextual output encoding, and Content Security Policy...
                    </p>
                    <!-- Tags -->
                    <div class="mb-2">
                        <span class="badge bg-danger">XSS</span>
                        <span class="badge bg-warning text-dark">Input Validation</span>
                        <span class="badge bg-info text-dark">Script Injection</span>
                        <span class="badge bg-primary">Browser Security</span>
                        <span class="badge bg-secondary">DVWA</span>
                        <span class="badge bg-success">Mitigation</span>
                    </div>
                    <a href="{{ route('notes.note10') }}" class="btn btn-outline-primary btn-sm">Read More</a>
                </div>
            </div>
        </div>
        <!-- Note 11 -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0 hover-shadow">
                <img src="{{ asset('images/notes/information-assurance/note11/p1.png') }}" class="card-img-top" alt="Path Traversal">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-primary">Note 11: Path Traversal</h5>
                    <p class="text-muted mb-1"><i class="bi bi-calendar-event"></i> December 4, 2025</p>
                    <p class="small">
                        Path Traversal, classified as CWE‑35, is a vulnerability that allows attackers to access files and directories
                        outside the intended scope of a web application. This note explains how directory traversal works, common techniques
                        like dot‑dot‑slash sequences and encoding tricks, the consequences such as unauthorized access and system compromise,
                        and prevention strategies including input validation, path normalization, and strict access controls...
                    </p>
                    <!-- Tags -->
                    <div class="mb-2">
                        <span class="badge bg-danger">Path Traversal</span>
                        <span class="badge bg-warning text-dark">Input Validation</span>
                        <span class="badge bg-info text-dark">File Exploitation</span>
                        <span class="badge bg-primary">System Security</span>
                        <span class="badge bg-secondary">DVWA</span>
                        <span class="badge bg-success">Mitigation</span>
                    </div>
                    <a href="{{ route('notes.note11') }}" class="btn btn-outline-primary btn-sm">Read More</a>
                </div>
            </div>
        </div>
        <!-- Note 12 -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0 hover-shadow">
                <img src="{{ asset('images/notes/information-assurance/note12/p1.png') }}" class="card-img-top" alt="Network Traffic Analysis">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-primary">Note 12: Network Traffic Analysis</h5>
                    <p class="text-muted mb-1"><i class="bi bi-calendar-event"></i> December 4, 2025</p>
                    <p class="small">
                        Network Traffic Analysis is the process of capturing, inspecting, and analyzing network data flow.
                        This note introduces the OSI model primer, explains the traffic analysis process, highlights common tools
                        like Wireshark and tcpdump, and explores approaches such as descriptive, diagnostic, predictive, and prescriptive analysis.
                        It emphasizes how traffic analysis helps detect anomalies, monitor threats, and maintain resilient infrastructures...
                    </p>
                    <!-- Tags -->
                    <div class="mb-2">
                        <span class="badge bg-danger">Traffic Analysis</span>
                        <span class="badge bg-warning text-dark">OSI Model</span>
                        <span class="badge bg-info text-dark">Wireshark</span>
                        <span class="badge bg-primary">Network Security</span>
                        <span class="badge bg-secondary">tcpdump</span>
                        <span class="badge bg-success">Monitoring</span>
                    </div>
                    <a href="{{ route('notes.note12') }}" class="btn btn-outline-primary btn-sm">Read More</a>
                </div>
            </div>
        </div>
        <!-- Note 13 -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0 hover-shadow">
                <img src="{{ asset('images/notes/information-assurance/note13/p1.png') }}" class="card-img-top" alt="Email Security Fundamentals">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-primary">Note 13: Email Security Fundamentals</h5>
                    <p class="text-muted mb-1"><i class="bi bi-calendar-event"></i> December 4, 2025</p>
                    <p class="small">
                        Email Security Fundamentals explain how email works, the importance of confidentiality, integrity, and authentication,
                        and the role of encryption standards like S/MIME and OpenPGP. This note also covers common threats such as phishing,
                        spoofing, and Business Email Compromise, and highlights authentication mechanisms like SPF, DKIM, and DMARC,
                        along with analysis tools such as header analyzers and the REMnux platform...
                    </p>
                    <!-- Tags -->
                    <div class="mb-2">
                        <span class="badge bg-danger">Email Security</span>
                        <span class="badge bg-warning text-dark">Encryption</span>
                        <span class="badge bg-info text-dark">S/MIME</span>
                        <span class="badge bg-primary">OpenPGP</span>
                        <span class="badge bg-secondary">SPF/DKIM/DMARC</span>
                        <span class="badge bg-success">Phishing Defense</span>
                    </div>
                    <a href="{{ route('notes.note13') }}" class="btn btn-outline-primary btn-sm">Read More</a>
                </div>
            </div>
        </div>
        <!-- Note 14 -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0 hover-shadow">
                <img src="{{ asset('images/notes/information-assurance/note14/p1.png') }}" class="card-img-top" alt="Introduction to Event Logs">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-primary">Note 14: Introduction to Event Logs</h5>
                    <p class="text-muted mb-1"><i class="bi bi-calendar-event"></i> December 4, 2025</p>
                    <p class="small">
                        Event Logs record significant actions or occurrences within a system, providing an audit trail for
                        diagnosing issues, investigating unauthorized activity, and correlating events to detect malicious behavior.
                        This note explains log fundamentals, contextual correlation, common log types, formats and standards,
                        and the role of SIEM platforms like Splunk, Azure Sentinel, and QRadar in centralized log analysis...
                    </p>
                    <!-- Tags -->
                    <div class="mb-2">
                        <span class="badge bg-danger">Event Logs</span>
                        <span class="badge bg-warning text-dark">Audit Trail</span>
                        <span class="badge bg-info text-dark">SIEM</span>
                        <span class="badge bg-primary">System Security</span>
                        <span class="badge bg-secondary">Splunk</span>
                        <span class="badge bg-success">Monitoring</span>
                    </div>
                    <a href="{{ route('notes.note14') }}" class="btn btn-outline-primary btn-sm">Read More</a>
                </div>
            </div>
        </div>






    </div>
</div>
@endsection
