<style>
    .card {
        transition: all .8s ease 0s !important;
        box-shadow: 0 1px 5px 3px rgba(0, 0, 0, 0.5);
    }

    .card:hover {
        box-shadow: 0 1px 5px 3px rgba(250, 50, 50, 0.7), 0 1px 5px 3px rgba(50, 150, 250, 0.7);
        transform: scale(1.05);
        /* To maintain hover scale effect */
    }
</style>
<section>
    <div class="py-20">
        <p class="text-4xl  flex justify-center items-center text-center text-red-500  font-bold">Project</p>
    </div>
    <div class="flex flex-wrap gap-36 justify-center items-center py-20">
        <div class=" card flex flex-wrap mt-6 text-gray-700 bg-black  rounded-xl w-96 hover:scale-105 shadow-lg transition-all">
            <div class="h-56 mx-4 mt-6 overflow-hidden text-white shadow-lg rounded-xl ">
                <img src="./image/reflector.png" class="w-full h-full opacity-80" alt="project-1" />
            </div>
            <div class="p-6">
                <h5 class="block mb-2 font-sans text-2xl antialiased font-bold leading-snug tracking-normal text-white uppercase text-center">
                    Reflector Photography
                </h5>
                <p class="block font-sans text-base antialiased  text-white leading-relaxed text-inherit">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid provident voluptas, ipsum adipisci vero odio debitis quibusdam quisquam reprehenderit ad!
                </p>
            </div>
            <div class="flex justify-center items-center w-full py-9">
                <button class="text-white border border-red-600 bg-red-500 hover:bg-red-700 p-2 rounded-md  text-lg">
                    <span class="mr-2"><i class="fa-brands fa-github"></i></span> GitHub</button>
            </div>
        </div>

        <div class=" card flex flex-wrap mt-6 text-gray-700 bg-black  rounded-xl hover:scale-105 shadow-lg transition-all w-96">
            <div class="h-56 mx-4 mt-6 overflow-hidden text-white shadow-lg rounded-xl ">
                <img src="./image/BDCS.png" class="w-full h-full opacity-80" alt="project-2" />
            </div>
            <div class="p-6">
                <h5 class="block mb-2 font-sans text-xl antialiased font-bold leading-snug tracking-normal text-white uppercase text-center">
                    BDCS (Blood Distribution And Collection System)
                </h5>
                <p class="block font-sans text-base antialiased text-white leading-relaxed text-inherit">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid provident voluptas, ipsum adipisci vero odio debitis quibusdam quisquam reprehenderit ad!
                </p>
            </div>
            <div class="flex justify-center items-center w-full py-5">

                <button class="text-white border border-red-600 bg-red-500 hover:bg-red-700 p-2 rounded-md  text-lg">
                    <span class="mr-2"><i class="fa-brands fa-github"></i></span> GitHub</button>
            </div>
        </div>
    </div>
</section>