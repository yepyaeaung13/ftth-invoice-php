<?php include base_path("views/partials/head.php") ?>

<main class="h-screen w-full flex flex-col">
    <?php include base_path("views/partials/subnav.php") ?>

    <div>
        <!-- sub nav tab  -->
        <div class="w-full grid grid-cols-3 px-5 py-5">
            <div class="flex justify-start items-center gap-5">
                <a href="/users/new" class="bg-blue-500 rounded-md px-3 py-1 text-white">New</a>
                <div class="flex justify-start items-center gap-1 text-slate-700 text-lg font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    <h1>Users</h1>
                </div>
            </div>

            <div class="flex justify-center">
                <input type="search" class="w-96 border border-blue-500 rounded-md outline-none px-2 py-1" placeholder="search by IPNET-ID" autofocus>
            </div>

            <div class="flex gap-5 justify-end items-center">
                <div class="flex gap-3 text-white items-center">
                    <p class="text-black text-lg">1 / 1</p>
                    <div class="flex gap-2">
                        <a href="" class="text-blue-500 bg-slate-200 rounded-md px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                            </svg>
                        </a>
                        <a href="" class="text-blue-500 bg-slate-200 rounded-md px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex gap-2 text-white">
                    <a href="/users" class="bg-blue-500 rounded-md px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                    </a>
                    <a href="/users?layout=card" class="bg-blue-500 rounded-md px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- users list table  -->
        <div class="2xl:h-[90vh] lg:h-[80vh] w-full bg-slate-200 px-2">

            <?php if (isset($_GET['layout'])) : ?>
                <div class="flex flex-wrap gap-5 py-5">
                    <a href="/users/show?id=1" class="w-96 rounded-lg shadow-md border bg-white p-2 hover:-translate-y-2 duration-300 text-nowrap flex gap-2 items-center">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-24 stroke-slate-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                        </div>
                        <div class="grid grid-cols-2 gap-5">
                            <p>IPNET-7001</p>
                            <p class="text-green-700">active</p>
                            <p class="overflow-hidden">Ye Pyae Aung</p>
                            <p>09-898626060</p>
                            <p>10 Mbps</p>
                            <p>Yankin</p>
                        </div>
                    </a>
                    <a href="/users/show?id=1" class="w-96 rounded-lg shadow-md border bg-white p-2 hover:-translate-y-2 duration-300 text-nowrap flex gap-2 items-center">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-24 stroke-slate-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                        </div>
                        <div class="grid grid-cols-2 gap-5">
                            <p>IPNET-7002</p>
                            <p class="text-red-700">inactive</p>
                            <p class="overflow-hidden">Ye Pyae Aung</p>
                            <p>09-898626060</p>
                            <p>10 Mbps</p>
                            <p>Yankin</p>
                        </div>
                    </a>
                </div>
            <?php endif ?>

            <?php if (!isset($_GET['layout'])) : ?>
                <table class="w-full table-auto border-collapse">
                    <thead>
                        <tr class="py-2 px-2 bg-slate-300 font-medium">
                            <td class="border border-slate-400 px-1 py-1 text-center">IPNET-ID</td>
                            <td class="border border-slate-400 px-1 py-1 text-center">Status</td>
                            <td class="border border-slate-400 px-1 py-1 text-center">Plans</td>
                            <td class="border border-slate-400 px-1 py-1 text-center">Name</td>
                            <td class="border border-slate-400 px-1 py-1 text-center">Phone</td>
                            <td class="border border-slate-400 px-1 py-1 text-center">Township</td>
                            <td class="border border-slate-400 px-1 py-1 text-center">Address</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-white duration-300">
                            <td class="px-2 py-1 border border-slate-400">
                                <a href="/users/show" class="hover:text-blue-500 duration-100">
                                    IPNET-7001
                                </a>
                            </td>
                            <td class="px-2 py-1 border border-slate-400 text-green-700 font-medium">active</td>
                            <td class="px-2 py-1 border border-slate-400">10 Mbps</td>
                            <td class="px-2 py-1 border border-slate-400">Ye Pyae Aung</td>
                            <td class="px-2 py-1 border border-slate-400">09-898626060</td>
                            <td class="px-2 py-1 border border-slate-400">Yankin</td>
                            <td class="px-2 py-1 border border-slate-400">No-223/9, Moe Kaung road, Yankin</td>
                        </tr>
                        <tr class="hover:bg-white duration-300">
                            <td class="px-2 py-1 border border-slate-400">
                                <a href="/users/show" class="hover:text-blue-500 duration-100">
                                    IPNET-7002
                                </a>
                            </td>
                            <td class="px-2 py-1 border border-slate-400 text-red-700 font-medium">inactive</td>
                            <td class="px-2 py-1 border border-slate-400">10 Mbps</td>
                            <td class="px-2 py-1 border border-slate-400">Ye Pyae Aung</td>
                            <td class="px-2 py-1 border border-slate-400">09-898626060</td>
                            <td class="px-2 py-1 border border-slate-400">Yankin</td>
                            <td class="px-2 py-1 border border-slate-400">No-223/9, Moe Kaung road, Yankin</td>
                        </tr>
                        <tr class="hover:bg-white duration-300">
                            <td class="px-2 py-1 border border-slate-400">
                                <a href="/users/show" class="hover:text-blue-500 duration-100">
                                    IPNET-7002
                                </a>
                            </td>
                            <td class="px-2 py-1 border border-slate-400 text-slate-700 font-medium">Terminate</td>
                            <td class="px-2 py-1 border border-slate-400">10 Mbps</td>
                            <td class="px-2 py-1 border border-slate-400">Ye Pyae Aung</td>
                            <td class="px-2 py-1 border border-slate-400">09-898626060</td>
                            <td class="px-2 py-1 border border-slate-400">Yankin</td>
                            <td class="px-2 py-1 border border-slate-400">No-223/9, Moe Kaung road, Yankin</td>
                        </tr>
                    </tbody>
                </table>
            <?php endif ?>

        </div>
    </div>

</main>

<?php include base_path("views/partials/footer.php") ?>