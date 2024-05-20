<x-app-layout>
    <section class="@auth mt-0 @else mt-16 @endauth">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full">
                    <img alt=""
                        src="https://images.unsplash.com/photo-1527529482837-4698179dc6ce?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                        class="absolute inset-0 h-full w-full object-cover" />
                </div>

                <div class="lg:py-24">
                    <h2 class="text-3xl font-bold sm:text-4xl">Welcome to KP Academic</h2>

                    <p class="mt-4 text-gray-600">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic atque tenetur quis
                        eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
                        quidem quam repellat.
                    </p>

                    <a href="{{route('register')}}"
                        class="mt-8 inline-block rounded bg-indigo-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-yellow-400">
                        Ajukan KP
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="max-w-screen-xl px-4 pt-8 sm:px-6 sm:py-12 lg:pxt8 lg:py-16">
            <div class="max-t-xl">
                <h2 class="text-3xl font-bold sm:text-4xl">What makes us special</h2>

                <p class="mt-4 text-gray-700">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat dolores iure fugit totam
                    iste obcaecati. Consequatur ipsa quod ipsum sequi culpa delectus, cumque id tenetur
                    quibusdam, quos fuga minima.
                </p>
            </div>

            <div class="mt-8 grid grid-cols-1 gap-8 md:mt-16 md:grid-cols-2 md:gap-12 lg:grid-cols-3">
                <div class="flex items-start gap-4">
                    <span class="shrink-0 rounded-lg bg-gray-800 p-4">
                        <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                            </path>
                        </svg>
                    </span>

                    <div>
                        <h2 class="text-lg font-bold">Lorem, ipsum dolor.</h2>

                        <p class="mt-1 text-sm text-gray-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error cumque tempore est ab
                            possimus quisquam reiciendis tempora animi! Quaerat, saepe?
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <span class="shrink-0 rounded-lg bg-gray-800 p-4">
                        <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                            </path>
                        </svg>
                    </span>

                    <div>
                        <h2 class="text-lg font-bold">Lorem, ipsum dolor.</h2>

                        <p class="mt-1 text-sm text-gray-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error cumque tempore est ab
                            possimus quisquam reiciendis tempora animi! Quaerat, saepe?
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <span class="shrink-0 rounded-lg bg-gray-800 p-4">
                        <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                            </path>
                        </svg>
                    </span>

                    <div>
                        <h2 class="text-lg font-bold">Lorem, ipsum dolor.</h2>

                        <p class="mt-1 text-sm text-gray-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error cumque tempore est ab
                            possimus quisquam reiciendis tempora animi! Quaerat, saepe?
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <span class="shrink-0 rounded-lg bg-gray-800 p-4">
                        <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                            </path>
                        </svg>
                    </span>

                    <div>
                        <h2 class="text-lg font-bold">Lorem, ipsum dolor.</h2>

                        <p class="mt-1 text-sm text-gray-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error cumque tempore est ab
                            possimus quisquam reiciendis tempora animi! Quaerat, saepe?
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <span class="shrink-0 rounded-lg bg-gray-800 p-4">
                        <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                            </path>
                        </svg>
                    </span>

                    <div>
                        <h2 class="text-lg font-bold">Lorem, ipsum dolor.</h2>

                        <p class="mt-1 text-sm text-gray-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error cumque tempore est ab
                            possimus quisquam reiciendis tempora animi! Quaerat, saepe?
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <span class="shrink-0 rounded-lg bg-gray-800 p-4">
                        <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                            </path>
                        </svg>
                    </span>

                    <div>
                        <h2 class="text-lg font-bold">Lorem, ipsum dolor.</h2>

                        <p class="mt-1 text-sm text-gray-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error cumque tempore est ab
                            possimus quisquam reiciendis tempora animi! Quaerat, saepe?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
