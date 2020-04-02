<section>
  <div class="small-hero">
    <img class="small-hero__bg" src="@asset('images/small-hero.jpg')" alt="hero">
    <div class="container">
      <div class="small-hero__content">
        <h1>
          <span class="title small-hero__title">
            {{ get_the_category()[0]->cat_name }}
          </span>
        </h1>
      </div>
    </div>
  </div>
</section>
<div class="container @if(!is_page()) content-page @endif">
  <article @php post_class() @endphp>
      <header>
        <!-- <h1 class="entry-title">{{ get_the_title() }}</h1>
          @include('partials/entry-meta') -->
        <div>
          <h1 class="title title--small mb-5">
            @php the_title() @endphp
          </h1>
        </div>
      </header>
      <div class="entry-content">
        <div class="pt-2">
          @php the_content() @endphp
        </div>
      </div>
      <footer>
        {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
      </footer>
      {{-- @php comments_template('/partials/comments.blade.php') @endphp --}}
  </article>
</div>
