<footer class="bg-dark text-light py-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Aljun B. Dalman</h5>
                <p>Full Stack Web Developer</p>
            </div>
            <div class="col-md-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-light text-decoration-none">Home</a></li>
                    <li><a href="{{ route('notes.index') }}" class="text-light text-decoration-none">Notes</a></li>
                    <li><a href="{{ route('skills') }}" class="text-light text-decoration-none">Skills</a></li>
                    <li><a href="{{ route('projects') }}" class="text-light text-decoration-none">Projects</a></li>
                    <li><a href="{{ route('about') }}" class="text-light text-decoration-none">About</a></li>
                    <li><a href="{{ route('contact') }}" class="text-light text-decoration-none">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Connect</h5>
                <a href="https://github.com/AljunD" class="text-light me-4"><i class="fab fa-github fa-2x"></i></a>
                <a href="https://www.linkedin.com/in/aljun-dalman-5a8112154/" class="text-light me-4"><i class="fab fa-linkedin fa-2x"></i></a>
                <a href="https://www.facebook.com/aljun.dalman.15" class="text-light"><i class="fab fa-facebook fa-2x"></i></a>
            </div>
        </div>
        <hr class="my-4">
        <p class="text-center mb-0">&copy; {{ date('Y') }} Aljun B. Dalman. All rights reserved.</p>
    </div>
</footer>
