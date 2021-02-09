<footer>
    <div id="socialMedia">
        <div>Retrouvez nous sur </div>
        <a id="facebook" target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a>
        <a id="instagram" target="_blank" href="https://www.instagram.com/domservices44/"><i class="fab fa-instagram-square"></i></a>
        <a id="twitter" target="_blank" href="https://twitter.com/domservices44"><i class="fab fa-twitter-square"></i></a>
        <a id="linkedin" target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
    </div> 
    <div id="footerAsideContainer">
        <div class="footerAside">
            <a class="footerAsideLink" href="{{ route('agencies') }}">Agences</a>
            <a class="footerAsideLink" href="{{ route('company') }}">L'entreprise</a>
            <a class="footerAsideLink" href="{{ route('recruitment') }}">Recrutement</a>
            <a class="footerAsideLink" href="{{ route('contact') }}">Contact</a>
        </div>
        <div class="footerAside">
            <a class="footerAsideLink" href="{{ route('services') }}">Services</a>
            <a class="footerAsideServiceLink" href="{{ route('servicing') }}">Entretien du logement</a>
            <a class="footerAsideServiceLink" href="{{ route('ironing') }}">Repassage</a>
            <a class="footerAsideServiceLink" href="{{ route('help-seniors') }}">Aide aux seniors</a>
            <a class="footerAsideServiceLink" href="{{ route('shopping') }}">Courses et accompagnement sorties</a>
            <a class="footerAsideServiceLink" href="{{ route('concierge') }}">Services de conciergerie</a>
            <a class="footerAsideServiceLink" href="{{ route('relationship-providers') }}">Mise en relation avec nos prestataires</a>
        </div>
        <div class="footerAside">
            <a class="legalNotice" href="{{ route('legal-mention') }}">Mentions légales</a>
            <a class="legalNotice" href="{{ route('admin') }}">Administrateur</a>
            <p>© DOM Services 2021</p>
        </div>
    </div>
</footer>