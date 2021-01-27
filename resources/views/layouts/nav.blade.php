<nav>
    <a href="javascript:void(0);" class="iconNavBar" onclick="showNavBar()">
        <i class="fa fa-bars"></i>
    </a>
    <div id="navBar" class="navButtonContainer">
        <a class="navButton" href="{{ route('home') }}">Accueil</a>
        <a class="navButton" href="{{ route('services') }}">Services</a>
        <a class="navButton" href="{{ route('agencies') }}">Agences</a>
        <a class="navButton" href="{{ route('recruitment') }}">Recrutement</a>
        <a class="navButton" href="{{ route('company') }}">L'entreprise</a>
        <a class="navButton" href="{{ route('contact') }}">Contact</a>          
    </div>
    <div id="logoContainer">
        <img id="logo" src="{{ asset('images/logo.png') }}" alt="Logo DOM Services">
    </div>
</nav>