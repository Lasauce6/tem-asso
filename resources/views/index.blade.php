@extends('main')

@section('title', 'Tous Ensemble en Musique - Association (TEM)')

@section('content')
    <!-- # site main content
        ================================================== -->
    <section id="content" class="s-content">

        <!-- intro
        ----------------------------------------------- -->
        <section id="intro" class="s-intro">

            <div class="row s-intro__content width-sixteen-col">

                <div class="column lg-12 s-intro__content-inner grid-block">

                    <div class="s-intro__content-text">
                        <div class="s-intro__content-pretitle text-pretitle">Tous Ensemble en Musique</div>
                        <h1 class="s-intro__content-title">
                            Association inclusive qui promeut la musique pour tous
                        </h1>
                    </div> <!-- s-intro__content-text -->

                    <div class="s-intro__content-media">
                        <div class="s-intro__content-media-inner">
                            <img src={{ asset('asset/images/intro-bg.jpg') }} alt="" alt="">
                            <div class="lines">
                                <span></span>
                            </div>
                        </div>
                    </div> <!-- s-intro__content-media -->

                    <div class="s-intro__scroll-down">
                        <a href="#about" class="smoothscroll">
                            <div class="scroll-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="none" stroke="#97b34a" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">&lt;!--!  Atomicons Free 1.00 by @atisalab License - https://atomicons.com/license/ (Icons: CC BY 4.0) Copyright 2021 Atomicons --&gt;<polyline points="7 13 12 18 17 13"></polyline><line x1="12" y1="18" x2="12" y2="6"></line></svg>
                            </div>
                            <span>Plus d'informations</span>
                        </a>
                    </div> <!-- s-intro__scroll-down -->

                </div> <!-- s-intro__content-inner -->

            </div> <!-- s-intro__content -->

        </section> <!-- end s-intro -->

        <!-- about
        ----------------------------------------------- -->
        <section id="about" class="s-about target-section">

            <div class="row s-about__content width-sixteen-col">
                <div class="column grid-block grid-section-split">

                    <img src={{ asset('asset/images/geometric_shape.png') }} alt="" class="s-about__content-imgbg" alt="">

                    <div class="section-header grid-section-split__header">
                        <div class="text-pretitle">A propos</div>
                        <h2 class="text-display-title">
                            Qui sommes-nous ?
                        </h2>
                    </div> <!-- end section-header -->

                    <div class="s-about__content-main grid-section-split__primary">
                        <p class="attention-getter">
                            Fondée par d'anciens élèves de l'institut St Pierre,
                            l'association acceuille des musiciens de tous niveaux et de tous horizons.
                            Composée d'une trentaine de musiciens et de bénévoles ainsi que plus de 200 adhérents, l'association Tous Ensemble en Musique a pour objectif de promouvoir la musique pour tous.
                            L'association intègre le projet "Tous En Musique", un projet d'inclusion scolaire qui utilise la musique comme outil de cohésion sociale.
                        </p>
                        <br>
                        <p class="attention-getter">
                            "Tous En Musique" alias TEM. Trois lettres pour résumer un projet développé depuis plus de 15 ans.
                            Ayant pour objectif de rapprocher les jeunes, TEM acceuille plusieurs établissements scolaires, des artistes
                            indépendants, des étudiants et des élèves d'IME, de SEGPA et d'ULIS.
                            De Brunoy jusqu'à Angers, TEM est un projet d'inclusion scolaire à travers la musique.
                        </p>

                    </div> <!-- end s-about__content-main -->

                    <div class="s-about__content-btn grid-section-split__bottom">
{{--                        <a href="about.html" class="btn btn--stroke u-fullwidth">More About Me</a>--}}

                        <ul class="s-about__social social-list">
                            <li>
                                <a href="https://www.instagram.com/tem_asso" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);-ms-filter:"><path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path></svg>
                                    <span class="u-screen-reader-text">Instagram</span>
                                </a>
                            </li>
                        </ul> <!-- end s-footer__social -->
                    </div> <!-- end s-about__content-btn -->

                </div> <!-- content-inner -->
            </div>

        </section> <!-- end s-about -->

        <!-- clients
        ----------------------------------------------- -->
        <section id="clients" class="s-clients">

            <div class="row s-clients__content-block width-sixteen-col">
                <div class="column xl-12 grid-block grid-section-split">

                    <div class="section-header">
                        <div class="text-pretitle">Partenaires</div>
                        <h2 class="text-display-title">
                            Ils nous soutiennent dans nos projets
                        </h2>
                    </div> <!-- end section-header -->

                </div> <!-- end column -->
            </div> <!-- end row -->

            <div class="row s-clients__content-block width-sixteen-col">
                <div class="column xl-12">
                    <div class="grid grid-cols-7 gap-3 place-items-center justify-center">
                        <div class="max-w-60">
                            <a href="https://www.maine-et-loire.fr/" target="_blank">
                                <img src="{{ asset('asset/images/partenaires/anjou.png') }}" alt="Logo Anjou">
                            </a>
                        </div>
                        <div class="max-w-60">
                            <a href="https://www.apel.fr/" target="_blank">
                                <img src="{{ asset('asset/images/partenaires/apel.png') }}" alt="Logo Apel">
                            </a>
                        </div>
                        <div class="max-w-60">
                            <a href="https://www.brunoy.fr/" target="_blank">
                                <img src="{{ asset('asset/images/partenaires/brunoy.png') }}" alt="Logo Brunoy">
                            </a>
                        </div>
                        <div class="max-w-60">
                            <a href="https://www.iledefrance.fr/" target="_blank">
                                <img src="{{ asset('asset/images/partenaires/idf.png') }}" alt="Log IDF">
                            </a>
                        </div>
                        <div class="max-w-60">
                            <a href="https://www.lesateliersmorsaintois.com/association-alterite" target="_blank">
                                <img src="{{ asset('asset/images/partenaires/alterite.png') }}" alt="Logo Alterite">
                            </a>
                        </div>
                        <div class="max-w-60">
                            <a href="https://www.ville-boussy.fr/" target="_blank">
                                <img src="{{ asset('asset/images/partenaires/boussy.png') }}" alt="Logo Boussy saint Antoine">
                            </a>
                        </div>
                        <div class="max-w-60">
                            <a href="https://www.essonne.fr/" target="_blank">
                                <img src="{{ asset('asset/images/partenaires/essonne.jpg') }}" alt="Logo Essonne">
                            </a>
                        </div>
                        <div class="max-w-60">
                            <a href="#" target="_blank">
                                <img src="{{ asset('asset/images/partenaires/papillons_blancs.png') }}" alt="Logo Papillons Blancs">
                            </a>
                        </div>
                        <div class="max-w-60">
                            <a href="https://pass.culture.fr/" target="_blank">
                                <img src="{{ asset('asset/images/partenaires/pass_culture.jpg') }}" alt="Logo Pass Culture">
                            </a>
                        </div>
                        <div class="max-w-60">
                            <a href="https://www.the-quietly-prod.com/accueil" target="_blank">
                                <img src="{{ asset('asset/images/partenaires/tqp_black.png') }}" alt="Logo The Quietly Prod">
                            </a>
                        </div>
                        <div class="max-w-60">
                            <a href="https://raphaelbaticle.fr" target="_blank">
                                <img src="{{ asset('asset/images/partenaires/raphael.png') }}" alt="Logo Raphaël BATICLE">
                            </a>
                        </div>
                        <div class="max-w-60">
                            <a href="https://www.vyvs.fr/" target="_blank">
                                <img src="{{ asset('asset/images/partenaires/vyvs.png') }}" alt="Logo VYVS">
                            </a>
                        </div>
                        <div class="max-w-60">
                            <a href="https://www.yerres.fr/" target="_blank">
                                <img src="{{ asset('asset/images/partenaires/yerres.png') }}" alt="Logo Yerres">
                            </a>
                        </div>
                        <div class="max-w-120">
                            <a href="https://www.chateau-angers.fr/" target="_blank">
                                <img src="{{ asset('asset/images/partenaires/monuments_nationaux.png') }}" alt="Logo Centre des Monuments Nationaux">
                            </a>
                        </div>
                        <div class="max-w-60">
                            <a href="https://www.chateau-angers.fr/" target="_blank">
                            </a>
                        </div>
                    </div> <!-- end clients-list -->

                </div> <!-- end column -->
            </div> <!-- end row -->

        </section> <!-- end s-clients -->

    </section> <!-- s-content-->
@endsection
