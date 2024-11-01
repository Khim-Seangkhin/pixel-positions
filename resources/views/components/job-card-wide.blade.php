@props(['job'])

<div class="p-6 bg-white/10 rounded-xl flex gap-x-6 border border-transparent hover:border-blue-700 transition duration-150 group">
    <div class="size-[100px] flex-shrink-0">
        <x-employer-logo :employer="$job->employer"></x-employer-logo>
    </div>
    <div class="flex-1 flex flex-col">
        <div class="self-start text-sm text-gray-400">{{ $job->employer->name }}</div>
        <a href="{{ $job->url }}" target="_blank" class="text-lg group-hover:text-blue-700">{{ $job->title }}</a>
        <p class="text-sm text-gray-400 mt-auto">{{ $job->salary }}</p>
    </div>
    <div class="hidden md:inline-block">
        @foreach ($job->tags as $tag)
            <x-tag :$tag/>
        @endforeach
    </div>
</div>
