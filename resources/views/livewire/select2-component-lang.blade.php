<div>
    <label class="onboarding-lable">Language</label>
    <select wire:model="selectedItems" class="select">
        <option disabled selected>Choose Your Language</option>
        @foreach ($items as $item)
            <option class="sorting" value="{{ $item }}">{{ $item }}</option>
        @endforeach
    </select>
</div>


