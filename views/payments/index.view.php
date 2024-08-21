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

            <form action="" method="get" class="flex justify-center">
                <input type="search" name="search" value="<?= isset($_GET['search']) ? $_GET['search'] : "" ?>" class="w-96 border border-blue-500 rounded-md outline-none px-2 py-1" placeholder="search by IPNET-ID">
                <input type="submit" class="hidden">
            </form>

            <div class="flex gap-5 justify-end items-center">
                <div class="flex gap-3 text-white items-center">
                    <p class="text-black text-lg"><?= $page ?>/ <?= $total_page ?></p>
                    <div class="flex gap-2">
                        <a href="/payments?page=<?= isset($_GET['page']) ? $_GET['page'] - 1 : 1  ?><?= isset($_GET['filter']) ? "&filter=" . $_GET['filter'] : "" ?><?= isset($_GET['sort']) ? "&sort=" . $_GET['sort'] : "" ?>" class="text-blue-500 bg-slate-200 rounded-md px-2 <?= $page <= 1 ? "opacity-50 pointer-events-none" : "" ?>">
                            <svg xmlns=" http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                            </svg>
                        </a>
                        <a href="/payments?page=<?= isset($_GET['page']) ? $_GET['page'] + 1 : 2  ?><?= isset($_GET['filter']) ? "&filter=" . $_GET['filter'] : "" ?><?= isset($_GET['sort']) ? "&sort=" . $_GET['sort'] : "" ?>" class="text-blue-500 bg-slate-200 rounded-md px-2 <?= $page >= $total_page ? "opacity-50 pointer-events-none" : "" ?>">
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
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- users list table  -->
        <div class="2xl:h-[90vh] lg:h-[80vh] overflow-y-scroll w-full bg-slate-200 px-2">

            <?php if (isset($_GET['layout'])) : ?>
                <div class="flex flex-wrap gap-3 py-5">
                    <?php foreach ($payments as $payment) : ?>
                        <div class="w-64 bg-white p-3 rounded-lg shadow-md grid grid-cols-2 gap-2 border hover:border-blue-500 duration-300">
                            <p><?= $payment['date'] ?></p>
                            <p class="text-right">
                                <a href="/users/show?id=<?= $payment['user_id'] ?>" class="hover:text-blue-500 duration-150"><?= $payment['ipnet_id'] ?></a>
                            </p>
                            <p>
                                <a href="/payments/show?id=<?= $payment['id'] ?>" class="hover:text-blue-500 duration-150"><?= $payment['payment_no'] ?></a>
                            </p>
                            <p class="text-right">
                                <a href="/invoices/show?id=<?= $payment['invoice_id'] ?>" class="hover:text-blue-500 duration-150"><?= $payment['invoice_no'] ?></a>
                            </p>
                            <p><?= $payment['amount'] ?> ks</p>
                            <p class="text-right"><?= $payment['method'] ?></p>
                        </div>
                    <?php endforeach ?>
                </div>
            <?php endif ?>

            <?php if (!isset($_GET['layout'])) : ?>
                <table class="w-full table-auto border-collapse text-sm">
                    <thead>
                        <tr class="sticky top-0 left-0 shadow-lg py-2 px-2 bg-slate-300 font-medium">
                            <td class="border border-slate-400 px-1 py-1 text-center">
                                <a href="/payments?page=<?= $page ?>&filter=payments.date&sort=ASC" id="sort" class="inline-block mx-1 bg-slate-600 text-white <?= $page !== 1 ? "hidden" : "" ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                                    </svg>
                                </a>
                                Date
                                <a href="/payments?page=<?= $page ?>&filter=payments.date&sort=DESC" id="sort" class="inline-block mx-1 bg-slate-600 text-white <?= $page !== 1 ? "hidden" : "" ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
                                    </svg>
                                </a>
                            </td>
                            <td class="border border-slate-400 px-1 py-1 text-center">
                                <a href="/payments?page=<?= $page ?>&filter=ipnet_users.ipnet_id&sort=ASC" id="sort" class="inline-block mx-1 bg-slate-600 text-white <?= $page !== 1 ? "hidden" : "" ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                                    </svg>
                                </a>
                                IPNET-ID
                                <a href="/payments?page=<?= $page ?>&filter=ipnet_users.ipnet_id&sort=DESC" id="sort" class="inline-block mx-1 bg-slate-600 text-white <?= $page !== 1 ? "hidden" : "" ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
                                    </svg>
                                </a>
                            </td>
                            <td class="border border-slate-400 px-1 py-1 text-center">
                                <a href="/payments?page=<?= $page ?>&filter=payments.payment_no&sort=ASC" id="sort" class="inline-block mx-1 bg-slate-600 text-white <?= $page !== 1 ? "hidden" : "" ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                                    </svg>
                                </a>
                                Payment No
                                <a href="/payments?page=<?= $page ?>&filter=payments.payment_no&sort=DESC" id="sort" class="inline-block mx-1 bg-slate-600 text-white <?= $page !== 1 ? "hidden" : "" ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
                                    </svg>
                                </a>
                            </td>
                            <td class="border border-slate-400 px-1 py-1 text-center">
                                <a href="/payments?page=<?= $page ?>&filter=invoices.invoice_no&sort=ASC" id="sort" class="inline-block mx-1 bg-slate-600 text-white <?= $page !== 1 ? "hidden" : "" ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                                    </svg>
                                </a>
                                Invoice No
                                <a href="/payments?page=<?= $page ?>&filter=invoices.invoice_no&sort=DESC" id="sort" class="inline-block mx-1 bg-slate-600 text-white <?= $page !== 1 ? "hidden" : "" ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
                                    </svg>
                                </a>
                            </td>
                            <td class="border border-slate-400 px-1 py-1 text-center">
                                <a href="/payments?page=<?= $page ?>&filter=payments.amount&sort=ASC" id="sort" class="inline-block mx-1 bg-slate-600 text-white <?= $page !== 1 ? "hidden" : "" ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                                    </svg>
                                </a>
                                Amount
                                <a href="/payments?page=<?= $page ?>&filter=payments.amount&sort=DESC" id="sort" class="inline-block mx-1 bg-slate-600 text-white <?= $page !== 1 ? "hidden" : "" ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
                                    </svg>
                                </a>
                            </td>
                            <td class="border border-slate-400 px-1 py-1 text-center">
                                <a href="/payments?page=<?= $page ?>&filter=payments.method&sort=ASC" id="sort" class="inline-block mx-1 bg-slate-600 text-white <?= $page !== 1 ? "hidden" : "" ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                                    </svg>
                                </a>
                                Payment Method
                                <a href="/payments?page=<?= $page ?>&filter=payments.method&sort=DESC" id="sort" class="inline-block mx-1 bg-slate-600 text-white <?= $page !== 1 ? "hidden" : "" ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($payments as $payment) : ?>
                            <tr class="hover:bg-white duration-300 cursor-pointer">
                                <td class="px-2 py-1 border border-slate-400">
                                    <?= $payment['date'] ?>
                                </td>
                                <td class="px-2 py-1 border border-slate-400">
                                    <a href="/users/show?id=<?= $payment['user_id'] ?>" class="hover:text-blue-500 duration-150">
                                        <?= $payment['ipnet_id'] ?>
                                    </a>
                                </td>
                                <td class="px-2 py-1 border border-slate-400 hover:text-blue-500">
                                    <a href="/payments/show?id=<?= $payment['id'] ?>" class="hover:text-blue-500 duration-150">
                                        <?= $payment['payment_no'] ?>
                                    </a>
                                </td>

                                <td class="px-2 py-1 border border-slate-400">
                                    <a href="/invoices/show?id=<?= $payment['invoice_id'] ?>" class="hover:text-blue-500 duration-150">
                                        <?= $payment['invoice_no'] ?>
                                    </a>
                                </td>
                                <td class="px-2 py-1 border border-slate-400 text-right">
                                    <?= $payment['amount'] ?> ks
                                </td>
                                <td class="px-2 py-1 border border-slate-400 text-center">
                                    <?= $payment['method'] ?>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            <?php endif ?>
        </div>
    </div>

</main>

<?php include base_path("views/partials/footer.php") ?>