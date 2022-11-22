

<div>
    <h1>Liste des classe</h1>
    <label for="selectedClass">Select Class</label>
    <select class="form-control" id="selectedClass" wire:model="selectedClass">
        <option value="">Select a Class</option>
        @foreach ($classes as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>
    @if(!is_null($selectedClass))

        <label for="">Select Class</label>
        <select class="form-control">
            <option value="">Select a Class</option>
            @foreach ( $sections as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select> 

    @endif

</div>
