@if ($sortField !== $field)
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up w-4 h-4 mr-2 font-bold text-theme-1 dark:text-theme-10"><polyline points="18 15 12 9 6 15"></polyline></svg>


@elseif ($sortAsc)
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down w-4 h-4 mr-2 font-bold text-theme-1 dark:text-theme-10" ><polyline points="6 9 12 15 18 9"></polyline></svg>

@else
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up w-4 h-4 mr-2 font-bold text-theme-1 dark:text-theme-10"><polyline points="18 15 12 9 6 15"></polyline></svg>
@endif

{{-- @if ($sortBy !== $field)
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up w-4 h-4 mr-2 font-bold"><polyline points="18 15 12 9 6 15"></polyline></svg>

@elseif ($sortDirection= 'desc')
<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="7 13 12 18 17 13"></polyline><polyline points="7 6 12 11 17 6"></polyline></svg>
@elseif ($sortDirection= 'asc')
<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="17 11 12 6 7 11"></polyline><polyline points="17 18 12 13 7 18"></polyline></svg>
@else
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down w-4 h-4 mr-2 font-bold"><polyline points="6 9 12 15 18 9"></polyline></svg>

@endif --}}