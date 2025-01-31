<th wire:click="setSortBy('{{ $nameSort }}')">
    <button class="btn btn-sm d-flex justify-content-between align-items-center w-100">
        <strong class="text-start">{{ $displayName }}</strong>
        @if ($sortBy != $nameSort)
            <i class="bi bi-arrow-down-up text-end"></i>
        @elseif ($sortDir == 'asc')
            <i class="bi bi-arrow-up text-end"></i>
        @else
            <i class="bi bi-arrow-down text-end"></i>
        @endif
    </button>
</th>
