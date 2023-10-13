<div>
    <div>
        <label>
            <textarea wire:model='body' placeholder="What's up dev ?"></textarea>
        </label>
        @error('body')
            <span class="text-red-200 font-bold">{{ $message }}</span>
        @enderror
    </div>

    <x-primary-button wire:click="tweet">Tweet</x-primary-button>
</div>
