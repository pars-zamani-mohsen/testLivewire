<div>
    <strong>{{ $title }}</strong>
    @foreach ($users as $user)
        <div wire:key="{{ $user->id }}">
            {{ $user->name }}
        </div>
    @endforeach

    <br>

    <form>
        <label for="title">Title:</label>

        <input type="text" id="title" wire:model="title">
    </form>
</div>
