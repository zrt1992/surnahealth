<div>

    <div class="mb-3">
        <label class="mb-2">Category <span class="text-danger">*</span></label>
        <select wire:model="selectedOption1" class="select2 form-select form-control select" name="category" required="">
            @foreach ($items as $optionValue => $optionLabel)
                <option value="{{ $optionValue }}" {{ $optionValue == 2 ? 'selected' : '' }}>{{ $optionLabel }}
                </option>
            @endforeach
        </select>
    </div>

</div>
