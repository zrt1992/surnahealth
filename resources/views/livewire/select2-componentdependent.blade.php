<div>
    <div class="col-12 col-md-12">
        <div class="mb-3">
            <label class="mb-2">Gender</label>
            <select wire:model="selectedOption1" class="select2 form-select form-control select">
                @foreach ($options1 as $option)
                    <option value="{{ $option }}">{{ $option }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-12 col-md-12">
        <div class="mb-3">
            <label class="mb-2">Relationship</label>
            <select wire:model="selectedOption2" class="select2 form-select form-control select">
                @foreach ($options2 as $option)
                    <option value="{{ $option }}">{{ $option }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>

