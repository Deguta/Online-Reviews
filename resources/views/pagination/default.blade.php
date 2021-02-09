@if ($paginator->lastPage() > 1)
<nav aria-label="Page navigation example">
 <ul class="pagination justify-content-center">
   @for ($i = 1; $i <= $paginator->lastPage(); $i++)
       <li class="page-item {{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
           <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
       </li>
   @endfor
 </ul>
</nav>
@endif