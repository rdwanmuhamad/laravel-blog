 <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <div class="container">
         <a class="navbar-brand" href="/">Blog</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
             aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav">
                 <li class="nav-item">
                     <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link {{ request()->is('posts*') ? 'active' : '' }}" href="/posts">Posts</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link {{ request()->is('categories*') ? 'active' : '' }}"
                         href="/categories">Category</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link {{ request()->is('about*') ? 'active' : '' }}" href="/about">About</a>
                 </li>
             </ul>

             <ul class="navbar-nav ms-auto">
                 <li class="nav-item me-3">
                     <a class="nav-lin btn btn-success" href="{{ route('login') }}"><i class="bi bi-person-circle"></i> Sign In</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link text-decoration-underline" href="{{ route('register') }}">Sign Up</a>
                 </li>
             </ul>
         </div>
     </div>
 </nav>
