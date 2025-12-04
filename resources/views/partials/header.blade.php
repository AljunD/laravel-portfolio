<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm sticky-top">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand fw-bold d-flex align-items-center" href="{{ route('home') }}">
            <i class="fas fa-code me-2"></i> Aljun B. Dalman
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Nav Items -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">

                <!-- Home -->
                <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="fas fa-home me-1"></i> Home
                    </a>
                </li>

                <!-- PKS Dropdown -->
                <li class="nav-item dropdown {{ request()->routeIs('notes.*') ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="#" id="pksDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-book-open me-1"></i> PKS
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark shadow border-0 rounded-3" aria-labelledby="pksDropdown">
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('notes.index') ? 'active' : '' }}"
                               href="{{ route('notes.index') }}">
                                <i class="fas fa-list me-1"></i> All PKS Entries
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>

                        <!-- Information Assurance & Security -->
                        <li class="dropdown-submenu position-relative">
                            <a class="dropdown-item dropdown-toggle fw-bold text-info" href="#">
                                <i class="fas fa-shield-alt me-1"></i> Information Assurance & Security
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark shadow border-0 rounded-3 submenu-right">
                                <li>
                                    <a class="dropdown-item {{ request()->routeIs('notes.note1') ? 'active' : '' }}"
                                       href="{{ route('notes.note1') }}">
                                        <i class="fas fa-lock me-1"></i> Note 1: IT Security & CIA Triad
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->routeIs('notes.note2') ? 'active' : '' }}"
                                       href="{{ route('notes.note2') }}">
                                        <i class="fas fa-users-cog me-1"></i> Note 2: Blue Team, Red Team & Pillars
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->routeIs('notes.note3') ? 'active' : '' }}"
                                       href="{{ route('notes.note3') }}">
                                        <i class="fas fa-user-shield me-1"></i> Note 3: Career Opportunities in IT Security
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->routeIs('notes.note4') ? 'active' : '' }}"
                                       href="{{ route('notes.note4') }}">
                                        <i class="fas fa-key me-1"></i> Note 4: Encryption Fundamentals
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->routeIs('notes.note5') ? 'active' : '' }}"
                                       href="{{ route('notes.note5') }}">
                                        <i class="fas fa-cloud me-1"></i> Note 5: Cloud & Virtualization Fundamentals
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item {{ request()->routeIs('notes.note6') ? 'active' : '' }}"
                                       href="{{ route('notes.note7') }}">
                                        <i class="fas fa-shield-alt me-1"></i> Note 6: Web Application Security
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->routeIs('notes.note7') ? 'active' : '' }}"
                                    href="{{ route('notes.note7') }}">
                                        <i class="fas fa-bug me-1"></i> Note 7: Burp Suite Introduction
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->routeIs('notes.note8') ? 'active' : '' }}"
                                    href="{{ route('notes.note8') }}">
                                        <i class="fas fa-bug me-1"></i> Note 8: Command Injection
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->routeIs('notes.note9') ? 'active' : '' }}"
                                    href="{{ route('notes.note9') }}">
                                        <i class="fas fa-database me-1"></i> Note 9: SQL Injection
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->routeIs('notes.note10') ? 'active' : '' }}"
                                    href="{{ route('notes.note10') }}">
                                        <i class="fas fa-code me-1"></i> Note 10: Cross-Site Scripting (XSS)
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->routeIs('notes.note11') ? 'active' : '' }}"
                                    href="{{ route('notes.note11') }}">
                                        <i class="fas fa-folder-open me-1"></i> Note 11: Path Traversal
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->routeIs('notes.note12') ? 'active' : '' }}"
                                    href="{{ route('notes.note12') }}">
                                        <i class="fas fa-network-wired me-1"></i> Note 12: Network Traffic Analysis
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->routeIs('notes.note13') ? 'active' : '' }}"
                                    href="{{ route('notes.note13') }}">
                                        <i class="fas fa-envelope me-1"></i> Note 13: Email Security Fundamentals
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->routeIs('notes.note14') ? 'active' : '' }}"
                                    href="{{ route('notes.note14') }}">
                                        <i class="fas fa-clipboard-list me-1"></i> Note 14: Introduction to Event Logs
                                    </a>
                                </li>











                            </ul>
                        </li>

                        <!-- Laravel PHP Framework -->
                        <li class="dropdown-submenu position-relative">
                            <a class="dropdown-item dropdown-toggle fw-bold text-info" href="#">
                                <i class="fab fa-laravel me-1"></i> Laravel PHP Framework
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark shadow border-0 rounded-3 submenu-right">
                                <li>
                                    <a class="dropdown-item {{ request()->routeIs('notes.laravel.note1') ? 'active' : '' }}"
                                       href="{{ route('notes.laravel.note1') }}">
                                        <i class="fas fa-code me-1"></i> Note 1: Laravel Introduction
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->routeIs('notes.laravel.note2') ? 'active' : '' }}"
                                       href="{{ route('notes.laravel.note2') }}">
                                        <i class="fas fa-database me-1"></i> Note 2: MVC & Routing Basics
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <!-- Skills -->
                <li class="nav-item {{ request()->routeIs('skills') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('skills') }}">
                        <i class="fas fa-lightbulb me-1"></i> Skills
                    </a>
                </li>

                <!-- Projects -->
                <li class="nav-item {{ request()->routeIs('projects') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('projects') }}">
                        <i class="fas fa-project-diagram me-1"></i> Projects
                    </a>
                </li>

                <!-- About -->
                <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('about') }}">
                        <i class="fas fa-user me-1"></i> About Me
                    </a>
                </li>

                <!-- Contact -->
                <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('contact') }}">
                        <i class="fas fa-envelope me-1"></i> Contact
                    </a>
                </li>

                <!-- Theme Toggle Button -->
                <li class="nav-item">
                    <button id="theme-toggle" class="btn btn-outline-light ms-3" title="Toggle theme">
                        <i class="fas fa-moon"></i>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>
