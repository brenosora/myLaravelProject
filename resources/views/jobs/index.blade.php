<x-layout>
    <x-slot:heading>
            Jobs Listings
    </x-slot:heading>
    <h1> Jobs available</h1>

    <div class="space-y-4">
        @foreach($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border boerder-gray-200 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name}}</div>
                <div>
                    <li> <strong class="text-cruzeiro">{{$job['title']}}:</strong> Pays {{$job['salary']}} per year.</li>
                </div>
            </a>
        @endforeach
        </div>
            {{$jobs->links()}}
        </div>
    </div>
</x-layout>