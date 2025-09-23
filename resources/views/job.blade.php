<x-layout>
<x-slot:heading>
Job
</x-slot:heading>
<h2 class="text-xl font-bold"> {{ $job['title'] }} </h2>
<p>
This job pays €{{ $job['salary'] }} per year.
</p>
</x-layout>