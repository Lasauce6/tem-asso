@extends('main')

@section('title', 'Actualités')

@section('content')
    <section id="content" class="s-content">

        <section class="s-pageheader pageheader">
            <div class="row">
                <div class="column xl-12">
                    <h1 class="page-title">
                        <span class="page-title__small-type text-pretitle">TEM</span>
                        Actualités
                    </h1>
                </div>
            </div>
        </section>

        <section class="s-pagecontent pagecontent">

            <div class="row">
                <div class="column xl-12 grid-block">

                    <!-- <div class="grid-full">         -->
                    <div class="grid-full grid-list-items">

                        @foreach($posts as $post)
                            <x-post-item :post="$post" />
                        @endforeach

                    </div> <!-- grid-list-items -->
                    <!-- </div>     -->

                </div> <!-- end grid-block-->
            </div> <!-- end row -->


            <!-- pagination -->
            <div class="row navigation pagination">
                <div class="column xl-12">
                    {{ $posts->links() }}
                </div> <!-- end column -->
            </div> <!-- end pagination -->

        </section>

    </section> <!-- s-content-->

@endsection

@section('scripts')
    <script>
        // Récupérez toutes les cartes de post
        const postCards = document.querySelectorAll('.post-card');

        // Parcourez chaque carte et ajoutez un écouteur d'événements de clic
        postCards.forEach(card => {
            card.addEventListener('click', () => {
                // Récupérez le lien de la carte
                const link = card.querySelector('a').href;
                // Redirigez l'utilisateur vers le lien du post
                window.location.href = link;
            });
        });
    </script>
@endsection
