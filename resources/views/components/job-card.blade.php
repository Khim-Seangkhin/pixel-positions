@props(['job'])

<div class="p-6 bg-white/10 rounded-xl flex flex-col text-center border border-transparent hover:border-blue-700 transition duration-150 group">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>
    <div class="py-8">
        <h3 class="font-bold text-xl group-hover:text-blue-700">{{ $job->title }}</h3>
        <p class="text-sm mt-4">{{ $job->salary }}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag size="small" :$tag />
            @endforeach
        </div>
        <x-employer-logo class="size-11 object-cover rounded-lg"></x-employer-logo>
    </div>
</div>
