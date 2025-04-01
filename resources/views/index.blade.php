@extends('main')

@section('title', 'Tous Ensemble En Musique - Association (TEM)')

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
                        <div class="s-intro__content-pretitle text-pretitle">Tous Ensemble En Musique</div>
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


                    <div class="section-header grid-section-split__header">
                        <div class="text-pretitle">A propos</div>
                        <h2 class="text-display-title">
                            Qui sommes-nous ?
                        </h2>
                <ul class="s-about__social social-list">
                    <li>
                        <a href="https://www.instagram.com/tem_asso" target="_blank">
                            <svg width="70" height="70" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <title>Instagram icon</title>
                                <path d="m16 12v-.001c0-2.209-1.791-4-4-4s-4 1.791-4 4 1.791 4 4 4c1.104 0 2.104-.448 2.828-1.171.723-.701 1.172-1.682 1.172-2.768 0-.021 0-.042-.001-.063v.003zm2.16 0c-.012 3.379-2.754 6.114-6.135 6.114-3.388 0-6.135-2.747-6.135-6.135s2.747-6.135 6.135-6.135c1.694 0 3.228.687 4.338 1.797 1.109 1.08 1.798 2.587 1.798 4.256 0 .036 0 .073-.001.109v-.005zm1.687-6.406v.002c0 .795-.645 1.44-1.44 1.44s-1.44-.645-1.44-1.44.645-1.44 1.44-1.44c.398 0 .758.161 1.018.422.256.251.415.601.415.988v.029-.001zm-7.84-3.44-1.195-.008q-1.086-.008-1.649 0t-1.508.047c-.585.02-1.14.078-1.683.17l.073-.01c-.425.07-.802.17-1.163.303l.043-.014c-1.044.425-1.857 1.237-2.272 2.254l-.01.027c-.119.318-.219.695-.284 1.083l-.005.037c-.082.469-.14 1.024-.159 1.589l-.001.021q-.039.946-.047 1.508t0 1.649.008 1.195-.008 1.195 0 1.649.047 1.508c.02.585.078 1.14.17 1.683l-.01-.073c.07.425.17.802.303 1.163l-.014-.043c.425 1.044 1.237 1.857 2.254 2.272l.027.01c.318.119.695.219 1.083.284l.037.005c.469.082 1.024.14 1.588.159l.021.001q.946.039 1.508.047t1.649 0l1.188-.024 1.195.008q1.086.008 1.649 0t1.508-.047c.585-.02 1.14-.078 1.683-.17l-.073.01c.425-.07.802-.17 1.163-.303l-.043.014c1.044-.425 1.857-1.237 2.272-2.254l.01-.027c.119-.318.219-.695.284-1.083l.005-.037c.082-.469.14-1.024.159-1.588l.001-.021q.039-.946.047-1.508t0-1.649-.008-1.195.008-1.195 0-1.649-.047-1.508c-.02-.585-.078-1.14-.17-1.683l.01.073c-.07-.425-.17-.802-.303-1.163l.014.043c-.425-1.044-1.237-1.857-2.254-2.272l-.027-.01c-.318-.119-.695-.219-1.083-.284l-.037-.005c-.469-.082-1.024-.14-1.588-.159l-.021-.001q-.946-.039-1.508-.047t-1.649 0zm11.993 9.846q0 3.578-.08 4.953c.005.101.009.219.009.337 0 3.667-2.973 6.64-6.64 6.64-.119 0-.237-.003-.354-.009l.016.001q-1.375.08-4.953.08t-4.953-.08c-.101.005-.219.009-.337.009-3.667 0-6.64-2.973-6.64-6.64 0-.119.003-.237.009-.354l-.001.016q-.08-1.375-.08-4.953t.08-4.953c-.005-.101-.009-.219-.009-.337 0-3.667 2.973-6.64 6.64-6.64.119 0 .237.003.354.009l-.016-.001q1.375-.08 4.953-.08t4.953.08c.101-.005.219-.009.337-.009 3.667 0 6.64 2.973 6.64 6.64 0 .119-.003.237-.009.354l.001-.016q.08 1.374.08 4.953z"/></svg>
                            <span class="u-screen-reader-text">Instagram</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/profile.php?id=61557113342520" target="_blank">
                            <svg width="70" height="70" viewBox="0 0 24 24" role="img" xmlns="http://www.w3.org/2000/svg">
                                <title>Facebook icon</title>
                                <path d="M23.9981 11.9991C23.9981 5.37216 18.626 0 11.9991 0C5.37216 0 0 5.37216 0 11.9991C0 17.9882 4.38789 22.9522 10.1242 23.8524V15.4676H7.07758V11.9991H10.1242V9.35553C10.1242 6.34826 11.9156 4.68714 14.6564 4.68714C15.9692 4.68714 17.3424 4.92149 17.3424 4.92149V7.87439H15.8294C14.3388 7.87439 13.8739 8.79933 13.8739 9.74824V11.9991H17.2018L16.6698 15.4676H13.8739V23.8524C19.6103 22.9522 23.9981 17.9882 23.9981 11.9991Z"/>
                            </svg>
                            <span class="u-screen-reader-text">Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/tem-asso" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor"
                                 class="bi bi-linkedin" viewBox="0 0 16 16">
                                <title>Linkedin icon</title>
                                <path
                                    d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                            </svg>
                            <span class="u-screen-reader-text">Linkedin</span>
                        </a>
                    </li>
                </ul> <!-- end s-footer__social -->

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

<!--                    <div class="s-about__content-btn grid-section-split__bottom mb-4">-->
<!--{{--                        <a href="about.html" class="btn btn--stroke u-fullwidth">More About Me</a>--}}-->
<!---->
<!---->
<!--                    </div> <!-- end s-about__content-btn -->


                </div> <!-- content-inner -->

            </div>
            <div class="row width-sixteen-col">
                <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4 mt-4">
                    <div class="flex-1 mx-5">
                        <video class="w-full h-full rounded-lg" src="{{ asset('asset/videos/interviews_TEM15.mov') }}" controls></video>
                    </div>
                    <div class="flex-1 mx-5">
                        <video class="w-full h-full rounded-lg" src="{{ asset('asset/videos/TEM15_Brunoy_Angers.mp4') }}" controls></video>
                    </div>
                </div>
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
                                <img src="{{ asset('asset/images/partenaires/monuments_nationaux_cologotage.png') }}" alt="Logo Centre des Monuments Nationaux et République Française">
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
