@extends('layouts.app')
@section('title', 'Contact')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">Get In Touch</h1>

    <!-- Contact Form -->
    <div class="row">
        <div class="col-lg-8 mx-auto">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('contact.send') }}" method="POST" class="needs-validation" novalidate>
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                    <div class="invalid-feedback">Please enter your name.</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                    <div class="invalid-feedback">Please enter a valid email address.</div>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea name="message" class="form-control" id="message" rows="6" required></textarea>
                    <div class="invalid-feedback">Please write a message.</div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">
                        <i class="fas fa-paper-plane me-2"></i>Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Contact Info -->
    <div class="row mt-5">
        <div class="col-md-6">
            <h3><i class="fas fa-map-marker-alt text-danger me-2"></i>Location</h3>
            <!-- Updated to Quezon City -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.707889232933!2d121.05354831533457!3d14.63620747939579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b6e3d9f6b7a9%3A0x6a2f0f0f0f0f0f0!2sNew%20Era%20University%2C%20Quezon%20City!5e0!3m2!1sen!2sph!4v1630000000000"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
        <div class="col-md-6">
            <h3><i class="fas fa-address-card text-primary me-2"></i>Connect With Me</h3>
            <ul class="list-unstyled">
                <li class="mb-2">
                    <i class="fas fa-envelope text-danger me-2"></i>
                    Email: <a href="mailto:aljundalman12@gmail.com">aljundalman12@gmail.com</a>
                </li>
                <li class="mb-2">
                    <i class="fas fa-phone text-success me-2"></i>
                    Phone: <a href="tel:+639192888483">+63 919 288 8483</a>
                </li>
                <li class="mb-2">
                    <i class="fab fa-github text-dark me-2"></i>
                    GitHub: <a href="https://github.com/AljunD" target="_blank">github.com/AljunD</a>
                </li>
                <li class="mb-2">
                    <i class="fab fa-linkedin text-info me-2"></i>
                    LinkedIn: <a href="https://linkedin.com/in/aljun-dalman" target="_blank">linkedin.com/in/aljun-dalman</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
