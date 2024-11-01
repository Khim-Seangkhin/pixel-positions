<x-layout>
    <x-button-back />
    <x-page-heading>Result</x-page-heading>
    <div class="mt-6 space-y-3">
        @forelse ($jobs as $job)
            <x-job-card-wide :$job />
        @empty
            <div>No Data!</div>
        @endforelse
    </div>
</x-layout>
