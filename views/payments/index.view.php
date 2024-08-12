<?php include base_path("views/partials/head.php") ?>

<main class="h-screen w-full flex flex-col">
    <?php include base_path("views/partials/subnav.php") ?>

    <div>
        <!-- sub nav tab  -->
        <div class="w-full grid grid-cols-3 px-5 py-5">
            <div class="flex justify-start items-center gap-1 text-slate-700 text-lg font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <h1>Payments Transitions</h1>
            </div>

            <div class="flex justify-center">
                <input type="search" class="w-96 border border-blue-500 rounded-md outline-none px-2 py-1" placeholder="search by plans name" autofocus>
            </div>

            <div class="flex gap-5 justify-end items-center">
                <div class="flex gap-3 text-white items-center">
                    <p class="text-black text-lg">1 / 1</p>
                    <div class="flex gap-2">
                        <a href="/payments" class="text-blue-500 bg-slate-200 rounded-md px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                            </svg>
                        </a>
                        <a href="/payments" class="text-blue-500 bg-slate-200 rounded-md px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex gap-2 text-white">
                    <a href="/payments" class="bg-blue-500 rounded-md px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                    </a>
                    <a href="/payments?layout=card" class="bg-blue-500 rounded-md px-2">
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
                    <a href="/payments/show?id=1" class="w-72 rounded-lg shadow-md border bg-white grid grid-cols-2 gap-5 p-5 hover:-translate-y-2 duration-300">
                        <p>08-08-2024</p>
                        <p>IPNET-7001</p>
                        <p>25000 ks</p>
                        <p>Cash</p>
                    </a>
                </div>
            <?php endif ?>

            <?php if (!isset($_GET['layout'])) : ?>
                <table class="w-full table-auto border-collapse text-sm">
                    <thead>
                        <tr class="py-2 px-2 bg-slate-300 font-medium">
                            <td class="border border-slate-400 px-1 py-1 text-center">Date</td>
                            <td class="border border-slate-400 px-1 py-1 text-center">Payment No</td>
                            <td class="border border-slate-400 px-1 py-1 text-center">IPNET-ID</td>
                            <td class="border border-slate-400 px-1 py-1 text-center">Invoice No</td>
                            <td class="border border-slate-400 px-1 py-1 text-center">Amount</td>
                            <td class="border border-slate-400 px-1 py-1 text-center">Payment Method</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-white duration-300 cursor-pointer">
                            <td class="px-2 py-1 border border-slate-400">08-08-2024</td>
                            <td class="px-2 py-1 border border-slate-400 hover:text-blue-500">
                                <a href="/payments/show?id=1">P-000001</a>
                            </td>
                            <td class="px-2 py-1 border border-slate-400">IPNET-7001</td>
                            <td class="px-2 py-1 border border-slate-400">INV-000001</td>
                            <td class="px-2 py-1 border border-slate-400">25000 ks</td>
                            <td class="px-2 py-1 border border-slate-400 text-center">Cash</td>
                        </tr>
                    </tbody>
                </table>
            <?php endif ?>
        </div>
    </div>

</main>

<?php include base_path("views/partials/footer.php") ?>