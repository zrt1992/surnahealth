
    <div class="col-lg-6">
        <div class="mb-3">
            <label class="onboarding-lable">Time will you be available?</label>
            <select wire:model="selectedItems" class="select">
                <option disabled selected>Start Time</option>
                @foreach ($items as $item)
                    <option class="sorting" value="{{ $item }}">{{ $item }}</option>
                @endforeach
            </select>
        </div>
    </div>
