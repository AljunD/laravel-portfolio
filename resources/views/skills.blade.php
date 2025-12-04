@extends('layouts.app')
@section('title', 'Skills')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">Technical Skills</h1>

    <!-- Skills Grid -->
    <div class="row">
        <!-- Frontend -->
        <div class="col-lg-4 mb-5">
            <h3 class="text-center mb-4"><i class="fas fa-code text-primary me-2"></i>Frontend</h3>
            <div class="px-4">
                @foreach([
                    ['HTML5', 95, 'bg-danger'],
                    ['CSS3 / Bootstrap / Tailwind', 90, 'bg-info'],
                    ['JavaScript / Vue.js', 85, 'bg-warning'],
                    ['PyQt (GUI)', 80, 'bg-secondary']
                ] as [$skill, $percent, $color])
                <div class="mb-4">
                    <div class="d-flex justify-content-between"><span>{{ $skill }}</span><span>{{ $percent }}%</span></div>
                    <div class="progress" style="height: 12px;">
                        <div class="progress-bar {{ $color }}" style="width:{{ $percent }}%"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Backend -->
        <div class="col-lg-4 mb-5">
            <h3 class="text-center mb-4"><i class="fas fa-server text-success me-2"></i>Backend</h3>
            <div class="px-4">
                @foreach([
                    ['Laravel / PHP', 92, 'bg-success'],
                    ['MySQL / SQLite / PostgreSQL', 88, 'bg-primary'],
                    ['Node.js / Express.js', 75, 'bg-dark'],
                    ['Python (Backend Scripts)', 80, 'bg-info']
                ] as [$skill, $percent, $color])
                <div class="mb-4">
                    <div class="d-flex justify-content-between"><span>{{ $skill }}</span><span>{{ $percent }}%</span></div>
                    <div class="progress" style="height: 12px;">
                        <div class="progress-bar {{ $color }}" style="width:{{ $percent }}%"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Tools & Others -->
        <div class="col-lg-4 mb-5">
            <h3 class="text-center mb-4"><i class="fas fa-tools text-secondary me-2"></i>Tools & Others</h3>
            <div class="px-4">
                @foreach([
                    ['Git / GitHub', 95, 'bg-secondary'],
                    ['Composer / Postman', 85, 'bg-danger'],
                    ['VS Code / PyCharm / Eclipse', 80, 'bg-info'],
                    ['Docker', 78, 'bg-primary'],
                    ['Figma / Adobe XD', 85, 'bg-warning']
                ] as [$skill, $percent, $color])
                <div class="mb-4">
                    <div class="d-flex justify-content-between"><span>{{ $skill }}</span><span>{{ $percent }}%</span></div>
                    <div class="progress" style="height: 12px;">
                        <div class="progress-bar {{ $color }}" style="width:{{ $percent }}%"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Certificates -->
    <div class="mt-5">
        <h2 class="text-center mb-4"><i class="fas fa-certificate text-warning me-2"></i>Certificates</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <ul class="list-group shadow-sm">
                    @foreach([
                        ['Cognitive Class Certificate – Cloud Computing & Data Science', 'https://courses.cognitiveclass.ai/certificates/822c9e20c4d549a38b8892b3b307c603', 'fas fa-graduation-cap text-primary'],
                        ['Oracle Cloud Infrastructure 2024 Certified Foundations Associate', 'https://catalog-education.oracle.com/ords/certview/sharebadge?id=A887F877B5552C56552C3E6F600C2C800D0788C96D84A6AEF679A2CBE7CDDC9C', 'fas fa-cloud text-info'],
                        ['Oracle Cloud Infrastructure 2024 Data Certified Foundations Associate', 'https://catalog-education.oracle.com/ords/certview/sharebadge?id=A887F877B5552C56552C3E6F600C2C804BABD693AD471E769FCD937F1791BAEF', 'fas fa-database text-success'],
                        ['Oracle Cloud Infrastructure 2024 Certified AI Foundations Associate', 'https://catalog-education.oracle.com/ords/certview/sharebadge?id=99471FAD0FC60C294B8B29C9FBEB42EC2476D352DD116E916B61ED9F40E53F35', 'fas fa-robot text-danger']
                    ] as [$title, $link, $icon])
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span><i class="{{ $icon }} me-2"></i>{{ $title }}</span>
                        <a href="{{ $link }}" target="_blank" class="badge bg-primary text-decoration-none">View</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <!-- Resume Download Card -->
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card border-0 shadow-lg">
                <div class="card-body text-center">
                    <h3 class="card-title mb-3"><i class="fas fa-file-word text-primary me-2"></i>Download My Resume</h3>
                    <p class="text-muted mb-4">Get the latest version of my resume in Word format, including education, projects, and certifications.</p>
                    <a href="{{ asset('resume/RESUME (LATEST).docx') }}" class="btn btn-primary btn-lg" download>
                        <i class="fas fa-download me-2"></i>Download Resume (Word)
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Skills Summary Cards -->
    <div class="row justify-content-center mt-5">
        <div class="col-md-10">
            <h2 class="text-center mb-4">Skills Summary</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <i class="fas fa-laptop-code fa-2x text-primary mb-3"></i>
                            <h5 class="card-title">Frontend Development</h5>
                            <p class="text-muted">Expertise in HTML5, CSS3, Bootstrap, Tailwind, JavaScript, and Vue.js for responsive UI/UX.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <i class="fas fa-database fa-2x text-success mb-3"></i>
                            <h5 class="card-title">Backend & Databases</h5>
                            <p class="text-muted">Proficient in Laravel, PHP, Node.js, Python scripts, and relational databases like MySQL, PostgreSQL, and SQLite.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <i class="fas fa-toolbox fa-2x text-secondary mb-3"></i>
                            <h5 class="card-title">Tools & Design</h5>
                            <p class="text-muted">Skilled with Git/GitHub, Docker, Composer, Postman, and design tools such as Figma and Adobe XD.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
