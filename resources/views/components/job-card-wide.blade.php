@props(['job'])

<div class="p-6 bg-white/10 rounded-xl flex gap-x-6 border border-transparent hover:border-blue-700 transition duration-150 group">
    <div class="size-[100px]">
        <x-employer-logo class="size-full object-cover rounded-lg"></x-employer-logo>
    </div>
    <div class="flex-1 flex flex-col">
        <div class="self-start text-sm text-gray-400">Laracast</div>
        <h3 class="text-lg group-hover:text-blue-700">Vidio Producer</h3>
        <p class="text-sm text-gray-400 mt-auto">Full Time - Form $60,000</p>
    </div>
    <div class="inline-block">
        @foreach ($job->tags as $tag)
            <x-tag :$tag />
        @endforeach
    </div>
</div>
