<?php include base_path("views/partials/head.php") ?>

<main class="h-screen w-full flex flex-col">
    <?php include base_path("views/partials/subnav.php") ?>

    <div>
        <!-- sub nav tab  -->
        <div class="w-full grid grid-cols-3 px-5 py-5">
            <div class="flex justify-start items-center gap-1 text-slate-700 text-lg font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                </svg>
                <h1>Invoices</h1>
            </div>

            <div class="flex justify-center">
                <input type="search" class="w-96 border border-blue-500 rounded-md outline-none px-2 py-1" placeholder="search by Invoice no" autofocus>
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
                    <a href="/invoices" class="bg-blue-500 rounded-md px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                    </a>
                    <a href="/invoices?layout=card" class="bg-blue-500 rounded-md px-2">
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
                    <a href="/invoices/show?id=1" class="w-80 rounded-lg shadow-md border bg-white p-3 hover:-translate-y-2 duration-300 text-nowrap flex gap-2 justify-between">
                        <div class="flex flex-col gap-2">
                            <p>IPNET-7001</p>
                            <p>25000 ks</p>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="text-end">08-08-2024</p>
                            <p class="text-center rounded-md bg-red-500 text-white px-2">No Paid</p>
                        </div>
                    </a>
                </div>
            <?php endif ?>
            <?php if (!isset($_GET['layout'])) : ?>
                <table class="w-full table-auto border-collapse text-sm">
                    <thead>
                        <tr class="py-2 px-2 bg-slate-300 font-medium">
                            <td class="border border-slate-400 px-1 py-1 text-center">Date</td>
                            <td class="border border-slate-400 px-1 py-1 text-center">Invoice No</td>
                            <td class="border border-slate-400 px-1 py-1 text-center">IPNET-ID</td>
                            <td class="border border-slate-400 px-1 py-1 text-center">Plans</td>
                            <td class="border border-slate-400 px-1 py-1 text-center">Amount</td>
                            <td class="border border-slate-400 px-1 py-1 text-center">Payment</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-white duration-300">
                            <td class="px-2 py-1 border border-slate-400">13-01-2024</td>
                            <td class="px-2 py-1 border border-slate-400">
                                <a href="/invoices/show?id=1" class="hover:text-blue-500">
                                    INV-000001
                                </a>
                            </td>
                            <td class="px-2 py-1 border border-slate-400">IPNET-7001</td>
                            <td class="px-2 py-1 border border-slate-400">10 Mbps</td>
                            <td class="px-2 py-1 border border-slate-400">25000 ks</td>
                            <td class="px-2 py-1 border border-slate-400 text-center text-red-500 font-medium">Not Paid</td>
                        </tr>
                    </tbody>
                </table>
            <?php endif ?>
        </div>
    </div>

</main>

<?php include base_path("views/partials/footer.php") ?>