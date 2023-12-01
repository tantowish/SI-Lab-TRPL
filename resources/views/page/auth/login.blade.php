<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Single Sign On</title>
    <!-- Tambahkan link ke file CSS TailwindCSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="  flex items-center justify-center h-screen mx-auto w-auto">
        <div class="bg-white  rounded-lg shadow-2xl w-full max-w-md">
            <div class="text-black text-xl font-semibold my-4 block text-center ">Single Sign On</div>
            <div
                class="bg-gray-200 border border-gray-300 text-gray-900 py-4 w-full text-lg font-semibold mb-4 text-center">
                Enter your UGM ID and Password
            </div>
            <div class="mx-8 my-8">
                <form action="\login" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="ugm_id" class="block text-gray-700 font-medium">UGM ID
                            (without@*.ugm.ac.id)</label>
                        <input type="text" id="ugm_id" name="ugm_id"
                            class="border border-gray-300 rounded-lg px-4 py-2 w-full focus:outline-none focus:ring focus:border-blue-500" />
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 font-medium">Password</label>
                        <input type="password" id="password" name="password"
                            class="border border-gray-300 rounded-lg px-4 py-2 w-full focus:outline-none focus:ring focus:border-blue-500" />
                    </div>

                    <div class="mb-2 flex items-center">
                        <input type="checkbox" id="warn_me" name="warn_me" class="mr-2" />
                        <label for="warn_me" class="text-gray-700 text-sm">Warn me before logging me into other
                            sites</label>
                    </div>

                    <div class="mb-4 flex items-center">
                        <input type="checkbox" id="remember_me" name="remember_me" class="mr-2" />
                        <label for="remember_me" class="text-gray-700 text-sm">Remember Me</label>
                    </div>

                    <div class="flex flex-row justify-between">
                        <div class="flex">
                            <button type="submit"
                                class="flex text-sm font-semibold bg-[#7BBB7E] hover:bg-black text-white  px-4 py-1 focus:outline-none focus:ring focus:bg-blue-600 mr-4">
                                Login
                            </button>

                            <button type="button"
                                class="flex font-semibold bg-[#F6C553] hover:bg-black text-white  px-4 py-1 focus:outline-none focus:ring focus:bg-gray-400 ">
                                Clear
                            </button>
                        </div>

                        <div class="self-start justify-self-end block">
                            <a href="#" class="text-blue-500 text-xs hover:underline">Forgot Password</a>
                        </div>
                    </div>
                </form>

                <div class="mt-4 text-center">
                    <p class="text-sm">Do not have an account?</p>
                </div>

                <div class="mt-4 text-center">
                    <button type="button"
                        class="text-black hover:underline bg-transparent border border-gray-600 hover:bg-gray-200 text-sm px-4 py-2 rounded-md transition duration-300 w-full focus:outline-none focus:ring focus:bg-blue-500">
                        Create an Account
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>



</html>
