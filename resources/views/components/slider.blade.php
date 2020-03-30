<section>
  <div class="main-carousel">
      @foreach ($data['baner'] as $ban)
        <div class="slider carousel-cell">
          <img class="slider__bg" src="{{ $ban['image']['url'] }}" alt="{{ $data['image']['alt'] }}">
          <div class="container">
            <div class="slider__content">
              <h1>
                <span class="title slider__title">
                  {{ $ban['title'] }}
                </span>
              </h1>
              <div class="text slider__text">
                {!! $ban['desc'] !!}
              </div>
              @if($ban['link'])
                <a class="button" href="{{ $ban['link']['url'] }}">
                  {{ $ban['link']['title'] }}
                </a>
              @endif
            </div>
          </div>
        </div>
      @endforeach
  </div>
</section>

<section class="container boxes">
  <div class="boxes__item">
    <h3 class="title">
      PROMOCJE
    </h3>
    <p class="text boxes__text">
      Doceniając zainteresowanie klientów naszymi ofertami, staramy się przygotowywać specjalne promocje i wyjątkowe oferty, w których zapewne znajdą Państwo coś dla siebie. Każda oferta przygotowywana jest przez zespół specjalistów, którzy znają zapotrzebowanie naszych klientów.
    </p>
    <a href="#" class="button">
      Więcej
    </a>
  </div>
  <div class="boxes__item">
    <h3 class="title">
      DOFINANSOWANIA
    </h3>
    <p class="text boxes__text">
      Instalacja C.O. bywają czasem kosztowne, szczególnie dla osób, które przez lata odkładały pieniądze na wymarzony dom lub jego remont. Dlatego nasi specjaliści za każdym razem szukają możliwości obniżenia kosztów inwestycji, korzystając z dofinansowań oferowanych przez partnerów zewnętrznych.
    </p>
    <a href="#" class="button">
      Więcej
    </a>
  </div>
  <div class="boxes__item">
    <h3 class="title">
      REALIZACJE
    </h3>
    <p class="text boxes__text">
      Nasza firma zrealizowała już setki powierzonych nam przez klientów inwestycji. Za każdym razem stawiamy na jakość wykonania, bo tylko to stanowi gwarancję zadowolenia klientów. Obejrzyjcie nasze realizacje!
    </p>
    <a href="#" class="button">
      Więcej
    </a>
  </div>
</section>