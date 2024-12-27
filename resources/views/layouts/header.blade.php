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
{{--                <li><a href="about.html">A Propos</a></li>--}}
                <li class="{{ request()->is('posts') ? "current" : '' }}"><a href={{ route('posts.index') }}>Actualités</a></li>
{{--                <li><a href="blog.html">Souvenirs</a></li>--}}
{{--                <li><a href="contact.html">Contact</a></li>--}}
            </ul> <!-- s-header__menu-links -->

            <div class="s-header__contact">
{{--                <a href="contact.html" class="btn btn--primary s-header__contact-btn">Adhérer</a>--}}
            </div> <!-- s-header__contact -->

        </nav> <!-- end s-header__nav -->

    </div> <!-- end s-header__inner -->

</header> <!-- end s-header -->
