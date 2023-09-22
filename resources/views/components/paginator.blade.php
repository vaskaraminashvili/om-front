<nav class="d-md-flex justify-content-between align-items-center border-top pt-3" aria-label="Page navigation example">
  <div class="text-center text-md-left mb-3 mb-md-0">Showing {{ $paginator->firstItem() }}–{{ $paginator->lastItem() }} of {{ $paginator->total() }} results</div>
  <ul class="pagination mb-0 pagination-shop justify-content-center justify-content-md-start">
    @if ($paginator->onFirstPage())
      <li class="page-item disabled">
        <a class="page-link current" href="#">
          <span aria-hidden="true">&lsaquo;</span>
        </a>
      </li>
    @else
      <li class="page-item">
        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"
          aria-label="@lang('pagination.previous')">&lsaquo;</a>
      </li>
    @endif
    @foreach ($elements as $element)
      @if (is_string($element))
        <li class="page-item disabled"><a class="page-link" href="#"><span>{{ $element }}</span></a></li>
      @endif
      @if (is_array($element))
        @foreach ($element as $page => $url)
          @if ($page == $paginator->currentPage())
            <li class="page-item"><a class="page-link current" href="#">{{ $page }}</a></li>
          @else
            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
          @endif
        @endforeach
      @endif
    @endforeach
    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
      <li>
        <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
      </li>

      <li class="page-item">
        <a class="page-link current" href="{{ $paginator->nextPageUrl() }}">&rsaquo;</a>
    </li>
    @else
      <li class="page-item disabled"><a class="page-link" href="#">&rsaquo;</a></li>
    @endif

  </ul>
</nav>
