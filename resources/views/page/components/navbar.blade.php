<nav class="bg-white dark:bg-gray-100 sticky w-full z-50 top-0 left-0 border-b ">
    <div class="max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto p-2">
        <a href="#" class="flex items-center">
            <img src="{{ asset('assets/img/page/index/Silaboe-Logo.png') }}"class="h-12 mr-3" alt="Silaboe Logo" />
        </a>
        <div class="flex md:order-2">
            <a href="loginpage.html" type="button"
                class="text-white bg-[#64c5d3] hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-3xl text-sm px-5 py-2 text-center mr-3 md:mr-0">
                LOG IN
            </a>



            <button data-collapse-toggle="navbar-dropdown" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>

        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-100 md:dark:bg-gray-100 ">
                <li>
                    <a href="LandingPageLabu.html"
                        class=" font-semibold text-lg block py-2 pl-3 pr-4 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 dark:text-black md:dark:hover:text-gray-500 dark:hover:bg-gray-700 dark:hover:text-black md:dark:hover:bg-transparent"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="AboutUs"
                        class=" text-lg block py-2 pl-3 pr-4 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gray-500 md:p-0 dark:text-black md:dark:hover:text-gray-500 dark:hover:bg-gray-700 dark:hover:text-gray-500 md:dark:hover:bg-transparent">About
                        Us</a>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="text-lg flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-black md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-black md:dark:hover:text-gray-500 dark:focus:text-black dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                        Information
                        <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-200 dark:divide-black">
                        <ul class="py-2 text-sm text-gray-700 dark:text-black" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="PublicationPage1.html"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Publication
                                </a>
                            </li>
                            <li>
                                <a href="DataSoftware.html"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Data
                                    Software</a>
                            </li>
                            <li>
                                <a href="Laboratorium1Page.html"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Laboratorium
                                </a>
                            </li>
                            <li>
                                <a href="Membership1.html"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Membership
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="faqs"
                        class=" font-semibold text-lg block py-2 pl-3 pr-4 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0  md:p-0 dark:text-black  dark:hover:bg-gray-700 dark:hover:text-gray-600 md:dark:hover:bg-transparent">FAQs</a>
                </li>
            </ul>
        </div>
    </div>
</nav>