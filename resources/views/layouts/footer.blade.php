<!-- footer -->
<footer class="s-footer">
    <div class="row s-footer__content">
        <div class="column xl-8 lg-12">
            <h3>Liens utiles</h3>
            <div class="row">
                <div class="column xl-6 lg-6 md-12 s-footer__block s-footer__about">
                    <ul class="link-list">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('posts.index') }}">Actualités</a></li>
                        <li><a href="{{ route('actions') }}">Nos actions</a></li>
                        <li><a href="{{ route('nous-soutenir') }}">Nous soutenir</a></li>
                    </ul>
                </div>
                <div class="column xl-6 lg-6 md-12 s-footer__block s-footer__site-links">
                    <ul class="link-list">
                        <li><a href="{{ route('contact') }}">Nous contacter</a></li>
                        <li><a href="https://raphaelbaticle.fr" target="_blank">Conception et hébèrgement</a></li>
                        <li><a href="{{ route('legals') }}">Mentions légales</a></li>
                    </ul>
                </div>
            </div>
        </div>
        {{--        <div class="column xl-4 lg-6 md-12 tab-12 s-footer__block s-footer__newsletter">--}}
        {{--            <h3>Newsletter</h3>--}}

        {{--            <p>--}}
        {{--                Abonnez vous à notre newsletter pour ne rien rater et être informé des dernières actualités--}}
        {{--            </p>--}}

        {{--            <div class="subscribe-form">--}}
        {{--                <form id="mc-form" class="mc-form">--}}
        {{--                    <input type="email" name="EMAIL" id="mce-EMAIL" class="u-fullwidth text-center" placeholder="Email" title="The domain portion of the email address is invalid (the portion after the @)." pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$" required>--}}
        {{--                    <input type="submit" name="subscribe" value="S'abonner" class="btn btn--primary btn--small u-fullwidth">--}}
        {{--                    <!-- <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_cdb7b577e41181934ed6a6a44_9a91cfe7b3" tabindex="-1" value=""></div> -->--}}
        {{--                    <div class="mc-status"></div>--}}
        {{--                </form>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </div>

    <div class="row s-footer__bottom">
        <div class="column xl-4 lg-4 md-12">
            <ul class="s-footer__social social-list mt-8">
                <li>
                    <a href="https://www.instagram.com/tem_asso" target="_blank">
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Instagram icon</title>
                            <path
                                d="m16 12v-.001c0-2.209-1.791-4-4-4s-4 1.791-4 4 1.791 4 4 4c1.104 0 2.104-.448 2.828-1.171.723-.701 1.172-1.682 1.172-2.768 0-.021 0-.042-.001-.063v.003zm2.16 0c-.012 3.379-2.754 6.114-6.135 6.114-3.388 0-6.135-2.747-6.135-6.135s2.747-6.135 6.135-6.135c1.694 0 3.228.687 4.338 1.797 1.109 1.08 1.798 2.587 1.798 4.256 0 .036 0 .073-.001.109v-.005zm1.687-6.406v.002c0 .795-.645 1.44-1.44 1.44s-1.44-.645-1.44-1.44.645-1.44 1.44-1.44c.398 0 .758.161 1.018.422.256.251.415.601.415.988v.029-.001zm-7.84-3.44-1.195-.008q-1.086-.008-1.649 0t-1.508.047c-.585.02-1.14.078-1.683.17l.073-.01c-.425.07-.802.17-1.163.303l.043-.014c-1.044.425-1.857 1.237-2.272 2.254l-.01.027c-.119.318-.219.695-.284 1.083l-.005.037c-.082.469-.14 1.024-.159 1.589l-.001.021q-.039.946-.047 1.508t0 1.649.008 1.195-.008 1.195 0 1.649.047 1.508c.02.585.078 1.14.17 1.683l-.01-.073c.07.425.17.802.303 1.163l-.014-.043c.425 1.044 1.237 1.857 2.254 2.272l.027.01c.318.119.695.219 1.083.284l.037.005c.469.082 1.024.14 1.588.159l.021.001q.946.039 1.508.047t1.649 0l1.188-.024 1.195.008q1.086.008 1.649 0t1.508-.047c.585-.02 1.14-.078 1.683-.17l-.073.01c.425-.07.802-.17 1.163-.303l-.043.014c1.044-.425 1.857-1.237 2.272-2.254l.01-.027c.119-.318.219-.695.284-1.083l.005-.037c.082-.469.14-1.024.159-1.588l.001-.021q.039-.946.047-1.508t0-1.649-.008-1.195.008-1.195 0-1.649-.047-1.508c-.02-.585-.078-1.14-.17-1.683l.01.073c-.07-.425-.17-.802-.303-1.163l.014.043c-.425-1.044-1.237-1.857-2.254-2.272l-.027-.01c-.318-.119-.695-.219-1.083-.284l-.037-.005c-.469-.082-1.024-.14-1.588-.159l-.021-.001q-.946-.039-1.508-.047t-1.649 0zm11.993 9.846q0 3.578-.08 4.953c.005.101.009.219.009.337 0 3.667-2.973 6.64-6.64 6.64-.119 0-.237-.003-.354-.009l.016.001q-1.375.08-4.953.08t-4.953-.08c-.101.005-.219.009-.337.009-3.667 0-6.64-2.973-6.64-6.64 0-.119.003-.237.009-.354l-.001.016q-.08-1.375-.08-4.953t.08-4.953c-.005-.101-.009-.219-.009-.337 0-3.667 2.973-6.64 6.64-6.64.119 0 .237.003.354.009l-.016-.001q1.375-.08 4.953-.08t4.953.08c.101-.005.219-.009.337-.009 3.667 0 6.64 2.973 6.64 6.64 0 .119-.003.237-.009.354l.001-.016q.08 1.374.08 4.953z"/>
                        </svg>
                        <span class="u-screen-reader-text">Instagram</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/profile.php?id=61557113342520" target="_blank">
                        <svg width="24" height="24" viewBox="0 0 24 24" role="img" xmlns="http://www.w3.org/2000/svg">
                            <title>Facebook icon</title>
                            <path
                                d="M23.9981 11.9991C23.9981 5.37216 18.626 0 11.9991 0C5.37216 0 0 5.37216 0 11.9991C0 17.9882 4.38789 22.9522 10.1242 23.8524V15.4676H7.07758V11.9991H10.1242V9.35553C10.1242 6.34826 11.9156 4.68714 14.6564 4.68714C15.9692 4.68714 17.3424 4.92149 17.3424 4.92149V7.87439H15.8294C14.3388 7.87439 13.8739 8.79933 13.8739 9.74824V11.9991H17.2018L16.6698 15.4676H13.8739V23.8524C19.6103 22.9522 23.9981 17.9882 23.9981 11.9991Z"/>
                        </svg>
                        <span class="u-screen-reader-text">Facebook</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/company/tem-asso" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                             class="bi bi-linkedin" viewBox="0 0 16 16">
                            <title>Linkedin icon</title>
                            <path
                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                        </svg>
                        <span class="u-screen-reader-text">Linkedin</span>
                    </a>
                </li>
            </ul> <!-- end s-footer__social -->
        </div>
        <div class="column xl-6 lg-6 md-12">
            <p class="ss-copyright">
                <span>© Copyright TEM 2025</span>
                <span>Création logo : Alexandre Bouché</span>
                <span>Site réalisé par <a href="https://raphaelbaticle.fr" target="_blank">Raphaël Baticle</a></span>
                <span>Design by <a href="https://www.styleshout.com/" target="_blank">StyleShout</a> Distribution By <a
                        href="https://themewagon.com" target="_blank">ThemeWagon</a></span>
            </p>
        </div>
        <div class="ss-go-top xl-2 lg-2 md-12">
            <a class="smoothscroll mt-8" title="Back to Top" href="#top">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="none"
                     stroke="#ffffff" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">&lt;!--! Atomicons
                    Free 1.00 by @atisalab License - https://atomicons.com/license/ (Icons: CC BY 4.0) Copyright 2021
                    Atomicons --&gt;<polyline points="17 11 12 6 7 11"></polyline>
                    <line x1="12" y1="18" x2="12" y2="6"></line>
                </svg>
            </a>
        </div> <!-- end ss-go-top -->
    </div>

</footer> <!-- end s-footer -->
