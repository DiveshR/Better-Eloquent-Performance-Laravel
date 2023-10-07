<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                <div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase  dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Author
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>

            </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
            
            <tr class="bg-white border-b">

                <td class="px-6 py-4">
                 {{ $post->title }}
                </td>
                <td class="px-6 py-4">
                {{ $post->user->name }}
                </td>
                <td class="px-6 py-4">
                {{ $post->user->email }}
                </td>
                @empty
                <td class="px-6 py-4">
                No Post
                </td>
            </tr>
            
            @endforelse
        </tbody>
    </table>
</div>

<!-- <nav aria-label="Page navigation example">
  <ul class="inline-flex -space-x-px text-base h-10">
 
  </ul>
</nav> -->


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
