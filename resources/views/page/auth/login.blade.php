<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Single Sign On</title>
    <!-- Tambahkan link ke file CSS TailwindCSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <body class="bg-gray-200">


    <div class="container">
      <div class="flex justify-center items-center min-h-screen flex-col">
        <a class="text-black text-xl font-semibold mb-4 "
          >Single Sign On</a
        >
        <div class="bg-gray-100 p-8 rounded-lg shadow-md w-full max-w-md">
          <!-- Judul -->
          <h1
            class="text-lg font-semibold mb-4 text-center bg-gray-200 text-gray-900 py-2 rounded-lg"
          >
            Enter your UGM ID and Password
          </h1>

          <!-- Form -->
          <form action="\login" method="post">
            @csrf
            <div class="mb-4">
              <label for="ugm_id" class="block text-gray-700 font-medium"
                >UGM ID (without@*.ugm.ac.id)</label
              >
              <input
                type="text"
                id="ugm_id"
                name="ugm_id"
                class="border border-gray-300 rounded-lg px-4 py-2 w-full focus:outline-none focus:ring focus:border-blue-500"
              />
            </div>

            <div class="mb-4">
              <label for="password" class="block text-gray-700 font-medium"
                >Password</label
              >
              <input
                type="password"
                id="password"
                name="password"
                class="border border-gray-300 rounded-lg px-4 py-2 w-full focus:outline-none focus:ring focus:border-blue-500"
              />
            </div>

            <div class="mb-2 flex items-center">
              <input type="checkbox" id="warn_me" name="warn_me" class="mr-2" />
              <label for="warn_me" class="text-gray-700 text-sm"
                >Warn me before logging me into other sites</label
              >
            </div>

            <div class="mb-4 flex items-center">
              <input
                type="checkbox"
                id="remember_me"
                name="remember_me"
                class="mr-2"
              />
              <label for="remember_me" class="text-gray-700 text-sm"
                >Remember Me</label
              >
            </div>

            <div class="flex flex-row justify-between">
              <div class="flex">
                <button
                  type="submit"
                  class="flex text-sm bg-green-600 hover:bg-black text-white min-w-[4rem] px-2 py-1 focus:outline-none focus:ring focus:bg-blue-600"
                  style="margin-right: 12px"
                >
                  Login
                </button>

                <button
                  type="button"
                  class="flex bg-yellow-500 hover:bg-black text-white min-w-[4rem] px-2 py-1 focus:outline-none focus:ring focus:bg-gray-400 justify-self-start"
                >
                  Clear
                </button>
              </div>

              <!-- Kata "Forgot Pass word" sejajar dengan tombol -->
              <div class="self-start justify-self-end block">
                <a href="#" class="text-blue-500 text-xs hover:underline"
                  >Forgot Password</a
                >
              </div>
            </div>
          </form>

          <!-- Do not have an account -->
          <div class="mt-4 text-center">
            <p class="text-sm">Do not have an accounttt?</p>
          </div>

          <!-- Create an Account -->
          <div class="mt-4 text-center">
            <button
              type="button"
              class="text-black hover:underline bg-transparent border border-gray-600 hover:bg-gray-200 text-sm px-4 py-2 rounded-md transition duration-300 w-full focus:outline-none focus:ring focus:bg-blue-500"
            >
              Create an Account
            </button>
          </div>
        </div>
      </div>
    </div>
    
  </body>
</html>