@if($search_condition != null)
  @for ($i=0; $i<count($search_condition); $i++)
    \{{ $search_condition[$i] }}
  @endfor
@endif