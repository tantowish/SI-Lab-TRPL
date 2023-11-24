<div class="flex items-center justify-between py-3">
    <div class="flex flex-1 justify-between sm:hidden">
      <a href="#" class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
      <a href="#" class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
    </div>
    <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
      <div>
        <p class="text-sm text-gray-700">
          Showing
          <span id="showing" class="font-medium"></span>
          to
          <span id="to" class="font-medium"></span>
          of
          <span id="total" class="font-medium">97</span>
          results
        </p>
      </div>
      <div>
        <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
          <a id="prev" class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 cursor-pointer">
            <span class="sr-only">Previous</span>
            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
            </svg>
          </a>
          <a id="information" aria-current="page" class="relative z-10 inline-flex items-center bg-main px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2"></a>
          <a id="next" class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 cursor-pointer">
            <span class="sr-only">Next</span>
            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
            </svg>
          </a>
        </nav>
      </div>
    </div>
  </div>
  

<script>
    showing = document.getElementById('showing')
    to = document.getElementById('to')
    total = document.getElementById('total')

    showing.textContent = showing_value
    to.textContent = to_value
    total.textContent = total_value


    document.getElementById("prev").addEventListener("click", function (e) {
        navigate(-1,e);
    });

    document.getElementById("next").addEventListener("click", function (e) {
        navigate(1, e);
    });

    info = document.getElementById('information')
    info.textContent = currentPage;
    console.log(maxPage )

    function navigate(offset,e) {
        currentPage += offset;

        // Ensure it doesn't go below 1
        if (currentPage < 1) {
            currentPage = 1
            return
        }

        // Ensure it doesn't exceed the maximum page number
        if (currentPage > maxPage) {
            currentPage = maxPage
            return
        }

        // Update the URL with the page number
        window.location.href = `?page=${currentPage}`;
    }
</script>