<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="text-center mb-8">
                        <h1 class="text-3xl font-bold text-gray-900">{{ $user->name }}</h1>
                        @if($user->title)
                            <p class="text-xl text-gray-600 mt-2">{{ $user->title }}</p>
                        @endif
                        @if($user->bio)
                            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">{{ $user->bio }}</p>
                        @endif
                    </div>

                    @if($user->skills->count() > 0)
                        <div class="mb-8">
                            <h2 class="text-2xl font-semibold text-gray-900 mb-4">Compétences</h2>
                            <div class="flex flex-wrap gap-2">
                                @foreach($user->skills as $skill)
                                    <span class="bg-gray-100 rounded-full px-4 py-2">{{ $skill->name }}</span>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    @if($user->projects->count() > 0)
                        <div class="mb-8">
                            <h2 class="text-2xl font-semibold text-gray-900 mb-4">Projets</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                @foreach($user->projects as $project)
                                    <div class="border rounded-lg p-4">
                                        <h3 class="text-lg font-semibold mb-2">{{ $project->title }}</h3>
                                        <p class="text-gray-600 mb-2">{{ $project->description }}</p>
                                        @if($project->link)
                                            <a href="{{ $project->link }}" target="_blank" class="text-blue-500 hover:text-blue-700">
                                                Voir le projet
                                            </a>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <div class="text-center">
                        <a href="{{ route('pdf.generate', $user->username) }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Télécharger le CV
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 