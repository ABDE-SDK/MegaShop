<header>
        <div class="header-content">
            <div class="logo">MegaShop</div>
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">Accueil</a></li>
                    <li><a href="{{ route('categorie', ['slug' => 'informatique']) }}">Informatique</a></li>
                    <li><a href="{{ route('categorie', ['slug' => 'petit-electromenager']) }}">Petit électroménager</a></li>
                    <li><a href="{{ route('categorie', ['slug' => 'grand-electromenager']) }}">Grand électroménager</a></li>
                    <li><a href="{{ route('cgv') }}">CGV</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>