<header class="s-header">

    <div class="row s-header__inner width-sixteen-col">

        <div class="s-header__block">
            <div class="s-header__logo">
                <a class="logo" href={{ route('index') }}>
                    <img src={{ asset('asset/images/logo.svg') }} alt="Homepage">
                </a>
            </div>

            <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
        </div> <!-- end s-header__block -->

        <nav class="s-header__nav">

            <ul class="s-header__menu-links">
                <li class="{{ request()->is('posts') ? "current" : '' }}">
                    <a href={{ route('posts.index') }}>Actualités</a>
                </li>
                <li class="{{ request()->is('actions') ? "current" : '' }}">
                    <a href={{ route('actions') }}>Nos actions</a>
                </li>
                <li class="{{ request()->is('nous-soutenir') ? "current" : '' }}">
                    <a href="{{ route('nous-soutenir') }}">Nous soutenir</a>
                </li>
            </ul> <!-- s-header__menu-links -->

            <div class="s-header__contact">
                <a href="{{ route('contact') }}" class="btn btn--primary s-header__contact-btn">Nous contacter</a>
            </div> <!-- s-header__contact -->

        </nav> <!-- end s-header__nav -->

    </div> <!-- end s-header__inner -->

</header> <!-- end s-header -->
