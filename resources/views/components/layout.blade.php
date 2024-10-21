<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="resources/css/style.css" />

    @vite('resources/css/app.css')
    @vite('resources/css/style.css')
    @vite('resources/js/app.js')
    @vite('resources/js/church.js')
    

    <script src="//unpkg.com/alpinejs" defer></script>
    <title>chruch</title>

  </head>
 
  <body   body class="relative h-screen bg-cover" style="background-image: url('{{ asset('images/church.jpg') }}')">

    <!-- dark overlay -->
    <div class="absolute md:h-screen inset-0 bg-black opacity-30"></div>

    <nav class="relative container mx-auto p-6">
      <div class="flex items-center justify-between">
        <div class="w-20 h-20">
          <img
            src="data:image/png;base64,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"
            alt=""
          />
        </div>
        <!-- menu -->
        <div class="hidden md:flex space-x-6 text-white">
          <a href="" class="hover:text-brightRedLight">Home</a>
          <a href="" class="hover:text-brightRedLight">About</a>
          <a href="" class="hover:text-brightRedLight">Connect</a>
          <a href="" class="hover:text-brightRedLight">Grow</a>
          <a href="" class="hover:text-brightRedLight">Ministries</a>
          <a href="" class="hover:text-brightRedLight">Prayer</a>
          <a href="" class="hover:text-brightRedLight">Events</a>
          <a href="" class="hover:text-brightRedLight">Give</a>
          <a href="" class="hover:text-brightRedLight">Contacts</a>
        </div>
        <a
          href=""
          class="hidden md:block mx-3 px-6 text-white bg-brightRed hover:bg-brightRedLight rounded-full baseline"
          >This Sunday</a
        >

        <!-- Hamburger Icon -->
        <button
          id="menu-btn"
          class="block hamburger md:hidden focus:outline-none"
        >
          <span class="hamburger-top"></span>
          <span class="hamburger-middle"></span>
          <span class="hamburger-bottom"></span>
        </button>
      </div>
      <!-- Mobile Menu -->
      <div class="md:hidden">
        <div
          id="menu"
          class="flex-col items-center hidden self-end py-8 mt-10 space-y-6 font-bold bg-opacity-75 bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md"
        >
          <a href="">Home</a>
          <a href="">About</a>
          <a href="">Connect</a>
          <a href="">Grow</a>
          <a href="">Ministries</a>
          <a href="">Prayer</a>
          <a href="">Events</a>
          <a href="">Give</a>
          <a href="">Contacts</a>
        </div>
      </div>
    </nav>

    <main>
        {{$slot}}
    </main>

 <!-- Footer -->
 <footer class="bg-slate-800">
    <div
      class="py-6 md:pt-20 flex md:justify-between md:pb-10 md:px-14 lg:px-28 px-4"
    >
      <div
        class="flex md:px-6 md:flex-col justify-between w-full md:w-max md:justify-normal"
      >
        <div>
          <a href="/">
            <img
              class="w-20 h-20"
              src="data:image/png;base64,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"
              alt=""
            />
          </a>
        </div>
        <div class="w-max flex md:pt-3">
          <div
            class="h-8 w-8 bg-[#c4ccd4] grid place-items-center rounded-full mr-2"
          >
            <a aria-label="Twitter" href="https://twitter.com/hover">
              <svg
                class="w-4 h-4 text-gray-600"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512"
              >

                <path
                  d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"
                />
              </svg>
            </a>
          </div>
          <div
            class="h-8 w-8 bg-[#c4ccd4] grid place-items-center rounded-full mr-2"
          >
            <a aria-label="Facebook" href="">
              <i class="fa-brands fa-lg fa-facebook-f"></i>
            </a>
          </div>
          <div
            class="h-8 w-8 bg-[#c4ccd4] grid place-items-center rounded-full mr-2"
          >
            <a
              aria-label="LinkedIn"
              href=""
            >
              <i class="fa-brands fa-lg fa-linkedin-in"></i>
            </a>
          </div>
          <div
            class="h-8 w-8 bg-[#c4ccd4] grid place-items-center rounded-full mr-2"
          >
            <a
              aria-label="TikTok"
              href=""
            >
              <i class="fa-brands fa-lg fa-tiktok"></i>
            </a>
          </div>
          <div
            class="h-8 w-8 bg-[#c4ccd4] grid place-items-center rounded-full mr-2"
          >
            <a aria-label="Mastodon" href="">
              <i class="fa-brands fa-mastodon"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="hidden md:flex flex-col text-[#c4ccd4] px-6">
        <div class="pb-1 font-bold">Church</div>
        <a href="" class="hover:text-brightRedLight">Home</a>
        <a href="" class="hover:text-brightRedLight">About</a>
        <a href="" class="hover:text-brightRedLight">Connect</a>
        <a href="" class="hover:text-brightRedLight">Grow</a>
        <a href="" class="hover:text-brightRedLight">Ministries</a>
      </div>
      <div class="hidden md:flex flex-col text-[#c4ccd4] px-6">
        <div class="pb-1 font-bold">Programs</div>
        <a href="" class="hover:text-brightRedLight">Prayer</a>
        <a href="" class="hover:text-brightRedLight">Events</a>
        <a href="" class="hover:text-brightRedLight">Give</a>
        <a href="" class="hover:text-brightRedLight">Contacts</a>
      </div>
      <div class="hidden md:flex flex-col text-[#c4ccd4] px-6">
        <div class="font-bold">Resources</div>
        <a class="mt-2 hover:text-brightRedLight" href="/src/help.html"
          >Help Center</a
        >
        <a
          class="mt-2 hover:text-brightRedLight"
          href=""
          >Service Status</a
        >
        <a class="mt-2 hover:text-brightRedLight" href="/hover-connect"
          >Partner Program</a
        >
      </div>
      <div class="hidden md:flex flex-col text-[#c4ccd4] px-6">
        <div class="font-bold">Account</div>
        <a class="mt-2 hover:text-brightRedLight" href="/signin">Sign In</a>
        <a
          class="mt-2 hover:text-brightRedLight"
          href=""
          >Webmail</a
        >
      </div>
    </div>
    <div class="border-t border-t-[#c4ccd4] mx-4 md:mx-[75px] lg:mx-28"></div>
    <div
      class="text-[#c4ccd4] py-6 md:px-[75px] lg:px-28 grid place-items-center md:flex md:flex-row-reverse md:justify-between"
    >
      <div class="text-sm flex gap-4">
        <a href="/tos">Terms of Service</a>
        <a href="/privacy">Privacy Policy</a>
      </div>
      <div class="pt-2">Copyright © 2024 church</div>
    </div>
  </footer>

</body>
</html>
