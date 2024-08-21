<?php include "partials/head.php" ?>

<main class="h-screen w-full flex flex-col">
    <?php include "partials/subnav.php" ?>

    <div class="p-5 flex justify-center">
        <h1 class="font-medium text-xl">Dashboard</h1>
    </div>

    <div class="flex flex-col gap-5 p-5 bg-slate-50">
        <!-- users status  -->
        <div class="flex flex-wrap">
            <!-- total users  -->
            <div class="w-full max-w-full mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div class="flex flex-col gap-2">
                                    <p class="font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Total Users</p>
                                    <h5 class="text-xl font-bold text-[#7116f9]"><?= count($ipnet_users) ?></h5>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                                    <i class="h-full flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                        </svg>
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- active users  -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div class="flex flex-col gap-2">
                                    <p class="font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Active Users</p>
                                    <h5 class="text-xl font-bold text-[#00ce8f]"><?= count($ipnet_active_users) ?></h5>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-emerald-500 to-teal-400">
                                    <i class="h-full flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                                        </svg>
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- inactive users   -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div class="flex flex-col gap-2">
                                    <p class="font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Inactive Users</p>
                                    <h5 class="text-xl font-bold text-[#ef0000]"><?= count($ipnet_inactive_users) ?></h5>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-red-600 to-orange-600">
                                    <i class="h-full flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.412 15.655 9.75 21.75l3.745-4.012M9.257 13.5H3.75l2.659-2.849m2.048-2.194L14.25 2.25 12 10.5h8.25l-4.707 5.043M8.457 8.457 3 3m5.457 5.457 7.086 7.086m0 0L21 21" />
                                        </svg>
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- terminate users -->
            <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div class="flex flex-col gap-2">
                                    <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Terminate Users</p>
                                    <h5 class="text-xl font-bold text-[#5d6680]"><?= count($ipnet_terminate_users) ?></h5>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-slate-600 to-slate-400">
                                    <i class="h-full flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                        </svg>
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center gap-5">
            <!-- mabps chart -->
            <div class="2xl:w-6/12 md:w-5/12">
                <div class="border-black/12.5 dark:bg-slate-850 dark:shadow-dark-xl shadow-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <div class="border-b-black/12.5 rounded-t-2xl border-b-0 border-solid p-4 pb-0">
                        <div class="flex items-center">
                            <h6 class="font-semibold text-lg">Usage By Mbps</h6>
                        </div>
                    </div>
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-6/12 max-w-full px-3 text-center flex-0">
                                <div class="chart">
                                    <canvas id="chart-consumption" class="chart-canvas" height="197" width="300" style="display: block; box-sizing: border-box; height: 197px; width: 300px;"></canvas>
                                </div>
                                <h4 class="-mt-32 font-semibold dark:text-white">
                                    <span><?= $total_mbps ?></span>
                                    <span class="block text-sm leading-normal text-slate-500 dark:text-white/80">Mbps</span>
                                </h4>
                            </div>
                            <div class="w-6/12 max-w-full px-3 flex-0">
                                <div class="overflow-x-auto">
                                    <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                        <tbody class="align-top">
                                            <tr>
                                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent dark:border-white/40">
                                                    <div class="flex px-2 py-0">
                                                        <span class="w-8 py-2.2 px-2.8 text-xs rounded-1.8 bg-gradient-to-tl from-blue-500 to-violet-500 mr-4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white"> </span>
                                                        <div class="flex flex-col justify-center">
                                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">10 Mbps</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent dark:border-white/40 dark:text-white/60">
                                                    <span class="text-xs font-semibold leading-tight"><?= count($mbps_10_users) ?></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent dark:border-white/40">
                                                    <div class="flex px-2 py-0">
                                                        <span class="w-8 py-2.2 px-2.8 text-xs rounded-1.8 bg-gradient-to-tl from-slate-600 to-slate-300 mr-4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white"> </span>
                                                        <div class="flex flex-col justify-center">
                                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">15 Mbps</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent dark:border-white/40 dark:text-white/60">
                                                    <span class="text-xs font-semibold leading-tight"> <?= count($mbps_15_users) ?> </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent dark:border-white/40">
                                                    <div class="flex px-2 py-0">
                                                        <span class="w-8 py-2.2 px-2.8 text-xs rounded-1.8 bg-gradient-to-tl from-blue-700 to-cyan-500 mr-4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white"> </span>
                                                        <div class="flex flex-col justify-center">
                                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">20 Mbps</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent dark:border-white/40 dark:text-white/60">
                                                    <span class="text-xs font-semibold leading-tight"> <?= count($mbps_20_users) ?> </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent dark:border-white/40">
                                                    <div class="flex px-2 py-0">
                                                        <span class="w-8 py-2.2 px-2.8 text-xs rounded-1.8 bg-gradient-to-tl from-emerald-500 to-teal-400 mr-4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white"> </span>
                                                        <div class="flex flex-col justify-center">
                                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">40 Mbps</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent dark:border-white/40 dark:text-white/60">
                                                    <span class="text-xs font-semibold leading-tight"> <?= count($mbps_40_users) ?> </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent dark:border-white/40">
                                                    <div class="flex px-2 py-0">
                                                        <span class="w-8 py-2.2 px-2.8 text-xs rounded-1.8 bg-gradient-to-tl from-orange-500 to-yellow-500 mr-4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white"></span>
                                                        <div class="flex flex-col justify-center">
                                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">50 Mbps</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent dark:border-white/40 dark:text-white/60">
                                                    <span class="text-xs font-semibold leading-tight"> <?= count($mbps_50_users) ?> </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- invoices chart  -->
            <div class="w-4/12">
                <div class="p-4 border-black/12.5 dark:bg-slate-850 dark:shadow-dark-xl shadow-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <div>
                        <h6 class="dark:text-white p-2 text-lg font-semibold">Invoices Status</h6>
                        <div class="flex items-center justify-evenly">
                            <div class="pt-4 chart">
                                <canvas id="chart-bar-projects" class="chart-canvas" height="170" width="200" style="display: block; box-sizing: border-box; height: 170px; width: 200px;"></canvas>
                            </div>
                            <div class="flex flex-col gap-3">
                                <p>
                                    <span class="inline-block w-4 h-2 bg-[#5c00ff]"></span>
                                    Invoices - <?= count($total_invoices) ?>
                                </p>
                                <p>
                                    <span class="inline-block w-4 h-2 bg-[#aab1d9]"></span>
                                    Unpaid - <?= count($total_invoices) - count($total_payments) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-4/12">
                <div class="p-4 border-black/12.5 dark:bg-slate-850 dark:shadow-dark-xl shadow-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <h6 class="dark:text-white p-2 text-lg font-semibold">Subscriptions Status</h6>
                    <div class="flex items-center justify-evenly">
                        <div class="pt-4 chart">
                            <canvas id="pie-chart" class="chart-canvas" height="170" width="200" style="display: block; box-sizing: border-box; height: 170px; width: 200px;"></canvas>
                        </div>
                        <div class="flex flex-col gap-3">
                            <p>
                                <span class="inline-block w-4 h-2 bg-[#00d095]"></span>
                                Active - <?= count($total_sub_active_users) ?>
                            </p>
                            <p>
                                <span class="inline-block w-4 h-2 bg-[#555e77]"></span>
                                Expired - <?= count($total_sub_expired_users) ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-4 border-black/12.5 dark:bg-slate-850 dark:shadow-dark-xl shadow-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
            <h6 class="dark:text-white font-semibold">Monthly Incomes</h6>
            <div class="pt-4 chart">
                <canvas id="chart-line-projects" class="chart-canvas" height="170" width="414" style="display: block; box-sizing: border-box; height: 170px; width: 414px;"></canvas>
            </div>
        </div>
    </div>

</main>

<?php include "partials/footer.php" ?>