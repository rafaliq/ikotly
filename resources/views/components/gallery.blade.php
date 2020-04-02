<section class="section section--gradient">
  <div class="container">
    @foreach ($data['gallery'] as $item)
      <div class="section__columns">
        <div class="section-info">
          <h3 class="title title--small">
            {{ $item['title'] }}
          </h3>
          <p class="text section-info__desc section-info__desc--column">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed arcu consequat nisl mollis malesuada ut nec lectus. Etiam ultrices placerat orci, quis commodo lacus hendrerit vel. Praesent sed orci at dui tristique vehicula ut ut ipsum.
          </p>
        </div>
      <div class="gallery gallery--columns">
          @php
            $galleryName = rand(1, 999);
          @endphp
          @foreach ($item['images'] as $img)
            <div class="gallery__image">
              <a data-fancybox="gallery{{$galleryName}}" href="{{ $img['url'] }}">
                <img class="gallery__image" src="{{ $img['url'] }}">
              </a>
            </div>
          @endforeach
        </div>
      </div>
    @endforeach
  </div>
</section>