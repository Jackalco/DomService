<nav>
    <div id="navButtonContainer">
        <a class="navButton" href="{{ route('home') }}">Accueil</a>
        <a class="navButton" href="{{ route('services') }}">Services</a>
        <a class="navButton" href="{{ route('agencies') }}">Agences</a>
        <a class="navButton" href="{{ route('recruitment') }}">Recrutement</a>
        <a class="navButton" href="{{ route('contact') }}">Contact</a>            
    </div>
    <div>
        <img src="{{ asset('images/logo.png') }}" alt="Logo DOM Services">
    </div>
</nav>