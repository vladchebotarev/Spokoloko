@extends('layouts.app')

@section('content')

    <div class="add-listing-content" style="height: auto;">
        <div class="ui centered grid container">
            <div class="row">
                <div class="ui six wide computer twelve wide tablet column">
                    <h3 class="text-align-center-sq block-sq title-sq">Dolącz do nas</h3>

                    <p class="description-sq text-align-center-sq">Wybierz typ swojego biznesu
                    </p>

                </div>
            </div>

        </div>
    </div>



    <div class="ui centered grid container">


        <div class="ui link stackable cards" style="padding-bottom: 100px;">
            <div class="ui card" style="-webkit-box-shadow: none; ">
                <a class="image" href="share-venue">
                    <img src="../new-assets/images/sharing/code.jpg">

                </a>
                <div class="content">
                    <a class="header">Przestrzeń eventowa</a>

                    <div class="description">
                        Restauracje, kluby muzyczne, sale konferencyjne, koncertowe i inne
                    </div>
                </div>
            </div>


            <div class="ui card" style="-webkit-box-shadow: none; ">
                <a class="image" href="#">
                    <img src="../new-assets/images/sharing/design.jpg" style="-webkit-filter: grayscale(1);
  filter: grayscale(1);">
                </a>
                <div class="content">
                    <a class="header">Obsługa wydarzeń</a>

                    <div class="description">
                        Wkrótce
                    </div>
                </div>

            </div>

        </div>

    </div>




@endsection