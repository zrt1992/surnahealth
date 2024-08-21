<div>
    <select wire:model="selectedItems" class="form-select select">
        @if(!Route::is(['product-all','product-healthcare']))
        <option>Sort by</option>
        @endif
        @if(Route::is(['product-all','product-healthcare']))
        <option>Select</option>
        @endif
        @foreach ($items as $item)
            <option class="sorting" value="{{ $item }}">{{ $item }}</option>
        @endforeach
    </select>
</div>



