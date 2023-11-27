@props(['route', 'icon', 'title' => null])

<div>
    <a href="{{ $route }}"
    class="bg-gray-200 bg-transparent hover:bg-gray-200 hover:bg-opacity-10 rounded-full p-2 inline-block w-auto space-x-2">
    <div class="flex items-center space-x-4">
        <div>
            <x-dynamic-component :component="'icons.' . $icon" />
        </div>

        @if ($title)
            <div class="font-bold text-lg pr-6">{{ $title }}</div>
        @endif
    </div>
</a>
</div>
