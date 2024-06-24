<x-layout>
    <x-slot:heading>
        About Page
    </x-slot:heading>
    
    <div class="space-y-4">
        @foreach($jobs as $job)
            <a href="/jobs/{{$job['id']}}" class="block px-4 py-6 border border-gray-800 rounded-lg bg-gray-200">
                <div> {{ $job->employer->name }} </div>
                <div><strong>{{ $job['title'] }}</strong> Pays: {{ $job['salary'] }}</div>
            </a>
        @endforeach
    </div>

    <div>
        {{ $jobs->links() }}
    </div>

</x-layout>