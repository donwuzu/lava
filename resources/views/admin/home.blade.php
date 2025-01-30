<x-app-layout>
    

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-8">Admin Dashboard</h1>
    
        <!-- Display Career Data in a Table -->
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">

            <div x-data="{ openModal: false, fileSrc: '' }">
            <table class="min-w-full">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">User</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Education</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Skills</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Experience</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">LinkedIn</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Resume</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach($careers as $career)
                        <tr class="bg-white dark:bg-gray-800">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">{{ $career->user->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">{{ $career->education }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">{{ $career->skills }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">{{ $career->experience }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">
                                <a href="{{ $career->linkedin }}" target="_blank" class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-300">LinkedIn</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">
                                @if($career->file_path)
                                    <button 
                                        @click="openModal = true; fileSrc = '{{ asset('storage/' . $career->file_path) }}'" 
                                        class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-300"
                                    >
                                        View Resume
                                    </button>
                                @else
                                    No document uploaded
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


           <!-- Global Modal -->
                        <div 
                        x-show="openModal" 
                        class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center p-4"
                        x-transition
                    >
    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl max-w-3xl w-full relative border border-gray-300 dark:border-gray-700">
                       
        
                    <!-- Close Button -->
                            <button 
                                @click="openModal = false" 
                                class="absolute top-3 right-3 bg-red-600 text-white px-3 py-1 rounded-lg text-sm font-bold hover:bg-red-700 transition"
                            >
                                X 
                            </button>


                    <!-- Document Viewer -->

                    <div class="p-6">
                        <iframe :src="fileSrc" class="w-full h-[500px] rounded-lg border border-gray-200 dark:border-gray-600"></iframe>
                    </div>
    </div>
</div>

        
            </div>
        </div>
    </div>
    
</x-app-layout>