<div class="col-sm-3 offset-sm-1">
  <div>
    <h2>Archives</h2>
    <ol class="list-unstyled">
      @foreach ($archive as $interval)
        <li>
          <a href="/?month={{ $interval['month'] }}&year={{ $interval['year'] }}">
            {{ $interval['month'] . ' ' . $interval['year'] }}
          </a>
        </li>
      @endforeach
    </ol>
  </div>
  <div>
      <h2>Tags</h2>
      <ol class="list-unstyled">
        @foreach ($tags as $tag)
          <li>
            <a href="/tasks/tags/{{ $tag }}">
              {{ $tag }}
            </a>
          </li>
        @endforeach
      </ol>
    </div>
</div>