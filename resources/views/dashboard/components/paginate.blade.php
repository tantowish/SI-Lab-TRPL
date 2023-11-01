<div class="flex justify-between">
    <!-- Previous Button -->
    <a id="prev" class="flex cursor-pointer items-center justify-center px-3 h-8 mr-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
    <svg class="w-3.5 h-3.5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
    </svg>
    Previous
    </a>
    <a id="next" class="flex cursor-pointer items-center justify-center px-3 h-8 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
    Next
    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
    </svg>
    </a>
</div>  


<script>
    document.getElementById("prev").addEventListener("click", function() {
        navigate(-1);
    });

    document.getElementById("next").addEventListener("click", function() {
        navigate(1);
    });

    let currentPage = 1; // Set the initial page

    function navigate(offset) {
        currentPage += offset;
        if (currentPage < 1) currentPage = 1; // Ensure it doesn't go below 1
        // You can add a check here to limit the maximum page number based on your data
        // For example, if you have a total number of pages, you can check if currentPage > totalPages

        // Update the URL with the page number
        window.location.href = `?page=${currentPage}`;
    }
</script>