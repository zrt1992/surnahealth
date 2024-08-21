
    <div class="mb-3">
        <label class="mb-2">Select City</label>
        <select wire:model="selectedOption1" class="select2 form-select form-control select" id="heart_rate" name="heart_rate"
            tabindex="-1" aria-hidden="true">
            <option value="">Select Your City</option>
            @foreach ($options1 as $option)
                <option value="{{ $option }}">{{ $option }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label class="mb-2">Select State</label>
        <select wire:model="selectedOption2" class="select2 form-select form-control select" id="bp" name="bp"
            tabindex="-1" aria-hidden="true">
            <option value="">Select Your State</option>
            @foreach ($options2 as $option)
                <option value="{{ $option }}">{{ $option }}</option>
            @endforeach
        </select>
    </div>
