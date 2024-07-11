@props(['category'])
<x-badge wire:navigate href="{{ route('posts.index', ['category' => $category->slug]) }}"
    :textColor="$category->text_Color" :bgColor="$category->bg_Color">
    {{ $category->title }}
</x-badge>
