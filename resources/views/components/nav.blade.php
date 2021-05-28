@props([
  'class' => 'navbar navbar-expand-lg navbar-light' 
])
<nav class="{{ $class }}">
  <a class="navbar-brand" href="/">
    <x-logo/>
  </a>

  <button class="navbar-toggler menu ripplemenu" type="button" data-toggle="collapse"
    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
    aria-label="Toggle navigation">
    <svg viewBox="0 0 64 48">
      <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
      <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
      <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
    </svg>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto nav-pills">
        {{ $slot }}
    </ul>
</nav>