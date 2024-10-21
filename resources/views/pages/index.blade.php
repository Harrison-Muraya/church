<x-layout>
    <!-- hero -->
    <section id="hero" class="container mx-auto relative md:my-20">
        <div class="flex flex-col md:w-1/2 px-2">
          <div class="my-2">
            <h1
              x-data="{ show: false }"
              x-init="setTimeout(() => show = true, 500)"
              :class="show ? 'transition transform duration-700 ease-out fall-bounce' : '-translate-y-full opacity-0'"
              class="text-4xl md:text-6xl py-9 text-white capitalize"
            >
              Connecting People To the life changing presence of jesus christ
            </h1>
            <p class="text-white py-4">join us sunday at 9:30 and 11:30am</p>
          </div>
          <div class="flex flex-col items-left md:flex-row md:space-x-6">
            <a
              href=""
              class="bg-brightRed text-white my-3 px-6 py-1 hover:bg-brightRedLight"
              >join us online</a
            >
            <a
              href=""
              class="bg-brightRed text-white my-3 px-6 py-1 hover:bg-brightRedLight"
              >join us in person</a
            >
          </div>
          <p class="text-sm text-white my-2">*Registration no longer required</p>
          <div class="mt-20"></div>
        </div>
      </section>
  
      <section id="next_event">
        <div class="flex flex-col bg-white relative bg-gray-200">
          <div class="pt-4 my-6 items-center">
            <h1 class="text-4xl text-black text-center tracking-widest uppercase">
              next event
            </h1>
          </div>
          <div class="flex flex-col md:flex-row mx-auto my-6">
            <div class="flex-1 flex p-2 flex-col items-center justify-center">
              <h2 class="uppercase py-2 text-2xl tracking-widest">25/dec</h2>
              <div class="flex flex-col my-12 items-center justify-center">
                <p class="font-bold">Debate: God in the Modern World</p>
                <p>Wednesday, February 25 at 15:00</p>
              </div>
  
              <a href="" class="uppercase text-sm hover:text-brightRedLight">
                more info >></a
              >
            </div>
            <div
              class="border-t mx-20 md:border-t-0 md:border-l border-black my-4 md:my-0 md:mx-4"
            ></div>
            <div class="flex-1 flex flex-col items-center justify-center">
              <h2 class="uppercase py-2 text-2xl tracking-widest">29/otc</h2>
              <div class="flex flex-col my-12 items-center justify-center">
                <p class="font-bold">Easter Prayers</p>
                <p>Sunday, February 29 at 19:00</p>
              </div>
              <a href="" class="uppercase text-sm hover:text-brightRedLight">
                more info >></a
              >
            </div>
            <div
              class="border-t mx-20 md:border-t-0 md:border-l border-black my-4 md:my-0 md:mx-4"
            ></div>
            <div class="flex-1 mx-10 flex flex-col justify-center items-center">
              <p class="p-2">
                "So do not fear, for I am with you; do not be dismayed, for I am
                your God. I will strengthen you and help you; I will uphold you
                with my righteous right hand."
              </p>
              <p class="font-bold">Isaiah 41:10</p>
            </div>
          </div>
        </div>
      </section>
  
      <section class="relarive mt-0 bg-white" id="welcome ">
        <div class="container mx-auto item-center">
          <div class="item-center py-20 justify-between">
            <h2 class="text-4xl p-6 tracking-widest text-center uppercase">
              welcoming you home
            </h2>
            <div
              class="text-left md:mx-60 p-2 mt-10 justify-center md:w-50 md:text-center"
            >
              I'm a paragraph. Click here to add your own text and edit me. It’s
              easy. Just click “Edit Text” or double click me to add your own
              content and make changes to the font. I’m a great place for you to
              tell a story and let your users know a little more about you.
            </div>
          </div>
          <div
            class="flex flex-col md:flex-row justify-center items-center md:space-x-10"
          >
            <div class="flex-1 flex flex-col">
              <img
                src="https://static.wixstatic.com/media/3b1f25_6fa7e5a4b696428e83a1b2619086ee32.jpg/v1/fill/w_296,h_212,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/3b1f25_6fa7e5a4b696428e83a1b2619086ee32.jpg"
                alt=""
              />
              <h2 class="my-6 text-2xl tracking-widest text-center">
                ABOUT OUR CHURCH
              </h2>
              <div class="border-t mx-40 border-black my-4"></div>
              <p class="text-center p-2">
                I'm a paragraph. Click here to add your own text and edit me. It’s
                easy. Just click “Edit Text” or double click me to add your own
                content and make changes to the font.
              </p>
              <a
                href=""
                class="uppercase text-sm hover:text-brightRedLight text-center my-10"
              >
                read more >></a
              >
            </div>
  
            <div class="flex-1 flex flex-col">
              <img
                src="https://static.wixstatic.com/media/3b1f25_678daf7b0bfc46e0ba184ef4ca990dec.jpg/v1/fill/w_296,h_212,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/3b1f25_678daf7b0bfc46e0ba184ef4ca990dec.jpg"
                alt=""
              />
              <h2 class="my-6 text-2xl tracking-widest text-center">
                TEENAGE MINISTRIES
              </h2>
              <div class="border-t mx-40 border-black my-4"></div>
              <p class="text-center p-2">
                I'm a paragraph. Click here to add your own text and edit me. It’s
                easy. Just click “Edit Text” or double click me to add your own
                content and make changes to the font.
              </p>
              <a
                href=""
                class="uppercase text-sm hover:text-brightRedLight text-center my-10"
              >
                read more >></a
              >
            </div>
  
            <div class="flex-1 flex flex-col">
              <img
                src="https://static.wixstatic.com/media/8425ecadf47444dfb40f79663d4cb9c5.jpg/v1/fill/w_298,h_212,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/8425ecadf47444dfb40f79663d4cb9c5.jpg"
                alt=""
              />
              <h2 class="my-6 text-2xl tracking-widest text-center">SERVICES</h2>
              <div class="border-t mx-40 border-black my-4"></div>
              <p class="text-center p-2">
                I'm a paragraph. Click here to add your own text and edit me. It’s
                easy. Just click “Edit Text” or double click me to add your own
                content and make changes to the font.
              </p>
              <a
                href=""
                class="uppercase text-sm hover:text-brightRedLight text-center my-10"
              >
                read more >></a
              >
            </div>
          </div>
        </div>
      </section>
</x-layout>