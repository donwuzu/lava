
	
	
		
		
	<x-app-layout>

		
<!-- resources/views/career-form.blade.php -->
<section class="py-12 bg-gray-100 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
            <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-8">Upload Your Career Information</h2>

            <!-- Success Message -->
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Form -->
            <form action="{{ route('career.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Education -->
                <div class="mb-6">
                    <label for="education" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Education</label>
                    <input type="text" id="education" name="education" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-400 dark:bg-gray-700 dark:text-white" required>
                    @error('education')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Skills -->
                <div class="mb-6">
                    <label for="skills" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Skills</label>
                    <textarea id="skills" name="skills" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-400 dark:bg-gray-700 dark:text-white" required></textarea>
                    @error('skills')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Experience -->
                <div class="mb-6">
                    <label for="experience" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Experience</label>
                    <textarea id="experience" name="experience" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-400 dark:bg-gray-700 dark:text-white" required></textarea>
                    @error('experience')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- LinkedIn Profile -->
                <div class="mb-6">
                    <label for="linkedin" class="block text-sm font-medium text-gray-700 dark:text-gray-300">LinkedIn Profile (optional)</label>
                    <input type="url" id="linkedin" name="linkedin" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-400 dark:bg-gray-700 dark:text-white">
                    @error('linkedin')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Resume Upload -->
                <div class="mb-6">
                    <label for="document" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Upload Resume (PDF/DOC/DOCX)</label>
                    <input type="file" id="document" name="document" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-400 dark:bg-gray-700 dark:text-white" required>
                    @error('document')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>



</x-app-layout>
      
	
		
		
		
		
		
	
		
		