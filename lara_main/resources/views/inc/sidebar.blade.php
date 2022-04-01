@section('sidebar_template')
<div class="sidebar col-lg-5 py-5 ">
    <nav class="list-group list-group-flush mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-dark text-decoration-none list-group-item" href="{{ route('home') }}">Yome</a>
        <a class="me-3 py-2 text-dark text-decoration-none list-group-item" href="{{ route('about') }}">About</a>
        <a class="me-3 py-2 text-dark text-decoration-none list-group-item" href="{{ route('contact') }}">New user</a>
        <a class="me-3 py-2 text-dark text-decoration-none list-group-item" href="{{ route('contact-data') }}">Users</a>
    </nav>

</div>
