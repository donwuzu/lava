<x-app-layout>
    

  <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
    
      <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-8">Admin Dashboard</h1>
     
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
        <!-- Users Card -->
        <a href=" #"
           class="block bg-white dark:bg-gray-800 p-4 shadow rounded-lg transform transition duration-300 hover:scale-105 hover:shadow-lg">
            <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Total Users</h3>
            <p class="text-2xl font-bold text-gray-900 dark:text-white"> {{ $userCount }}</p>
        </a>

        <!-- Posts Card -->
        <a href="#"
           class="block bg-white dark:bg-gray-800 p-4 shadow rounded-lg transform transition duration-300 hover:scale-105 hover:shadow-lg">
            <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Total Posts</h3>
            <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $postCount}}</p>
        </a>

        <!-- Comments Card -->
        <a href="#"
           class="block bg-white dark:bg-gray-800 p-4 shadow rounded-lg transform transition duration-300 hover:scale-105 hover:shadow-lg">
            <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Total Comments</h3>
            <p class="text-2xl font-bold text-gray-900 dark:text-white">...</p>
        </a>

        <!-- Revenue Card -->
        <a href="#"
           class="block bg-white dark:bg-gray-800 p-4 shadow rounded-lg transform transition duration-300 hover:scale-105 hover:shadow-lg">
            <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Total Revenue</h3>
            <p class="text-2xl font-bold text-gray-900 dark:text-white">...</p>
        </a>
    </div>
      
  </div>
  
</x-app-layout>