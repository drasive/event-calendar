@if (count($genres) > 1)
    <div class="genre-filter btn-group"  role="group">
        <a href="." class="btn btn-default
          @if (is_null($selectedGenre)) active @endif">All Genres</a>
        
        @foreach ($genres as $index => $genre)
            <a class="http-parameter btn btn-default
              @if (!is_null($selectedGenre) && $genre->id == $selectedGenre->id) active @endif"
              data-http-keys='["genre-id", "page"]' data-http-values='["{{ $genre->id }}", "1"]'>{{{ $genre->name }}}</a>
        @endforeach
    </div>
@endif
