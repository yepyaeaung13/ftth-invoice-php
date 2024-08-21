<?php include base_path("views/partials/head.php") ?>

<main class="h-screen w-full flex flex-col">
    <?php include base_path("views/partials/subnav.php") ?>

    <div class="relative h-full">
        <!-- upload form  -->
        <div id="createFormContainer" class="absolute top-0 left-0 z-50 w-full h-full bg-black bg-opacity-50 hidden justify-center items-center">
            <div class="w-96 bg-white border rounded-md shadow-md">

                <!-- upload form  -->
                <form action="/subscriptions/import" method="post" enctype="multipart/form-data" id="createForm" class="p-5 flex flex-col justify-center items-center gap-5">
                    <h1 class="text-center font-bold font-serif text-xl">
                        Upload excel file
                    </h1>
                    <input type="file" class="px-5" name="xlsx" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
                    <input type="submit" id="delete-submit-btn" class="hidden">
                </form>

                <div class="pb-3 flex gap-10 justify-center">
                    <button id="confirm-delete-btn" class="bg-blue-500 text-white rounded-md w-28 py-1">
                        Upload
                    </button>
                    <button id="cancel-delete-btn" class="bg-red-500 text-white rounded-md w-28 py-1">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
        <!-- sub nav tab  -->
        <div class="w-full grid grid-cols-3 px-5 py-5">
            <div class="flex justify-start items-center gap-5">
                <a href="/subscriptions/new" class="bg-blue-500 rounded-md px-3 py-1 text-white">New</a>
                <button id="delete-btn" class="flex gap-1 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                    </svg>
                    Import
                </button>

                <a href="/assets/sub-data-template.xlsx" download="sub-data-template.xlsx" class="flex gap-1 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                    </svg>
                    xlsx
                </a>
                <div class="flex justify-start items-center gap-1 text-slate-700 text-lg font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 0 0-3.7-3.7 48.678 48.678 0 0 0-7.324 0 4.006 4.006 0 0 0-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 0 0 3.7 3.7 48.656 48.656 0 0 0 7.324 0 4.006 4.006 0 0 0 3.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3-3 3" />
                    </svg>
                    <h1>Subscriptions</h1>
                </div>
            </div>

            <form action="" method="get" class="flex justify-center">
                <input type="search" name="search" value="<?= isset($_GET['search']) ? $_GET['search'] : "" ?>" class="w-96 border border-blue-500 rounded-md outline-none px-2 py-1" placeholder="search by IPNET-ID">
                <input type="submit" class="hidden">
            </form>

            <div class="flex gap-5 justify-end items-center">
                <div class="flex gap-3 text-white items-center">
                    <p class="text-black text-lg"><?= $page ?>/ <?= $total_page ?></p>
                    <div class="flex gap-2">
                        <a href="/subscriptions?page=<?= isset($_GET['page']) ? $_GET['page'] - 1 : 1  ?><?= isset($_GET['filter']) ? "&filter=" . $_GET['filter'] : "" ?><?= isset($_GET['sort']) ? "&sort=" . $_GET['sort'] : "" ?>" class="text-blue-500 bg-slate-200 rounded-md px-2 <?= $page <= 1 ? "opacity-50 pointer-events-none" : "" ?>">
                            <svg xmlns=" http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                            </svg>
                        </a>
                        <a href="/subscriptions?page=<?= isset($_GET['page']) ? $_GET['page'] + 1 : 2  ?><?= isset($_GET['filter']) ? "&filter=" . $_GET['filter'] : "" ?><?= isset($_GET['sort']) ? "&sort=" . $_GET['sort'] : "" ?>" class="text-blue-500 bg-slate-200 rounded-md px-2 <?= $page >= $total_page ? "opacity-50 pointer-events-none" : "" ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex gap-2 text-white">
                    <a href="/subscriptions" class="bg-blue-500 rounded-md px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                    </a>
                    <a href="/subscriptions?layout=card" class="bg-blue-500 rounded-md px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- users list table  -->
        <div class="2xl:h-[90vh] lg:h-[80vh] w-full bg-slate-200 px-2 overflow-y-scroll">
            <?php if (isset($_GET['layout'])) : ?>
                <div class="flex flex-wrap gap-5 py-5">
                    <?php foreach ($sub_users as $sub_user) : ?>
                        <div class="w-80 rounded-lg shadow-md border bg-white p-3 hover:border-blue-500 duration-300 text-nowrap flex gap-2 justify-between <?= $sub_user['status'] !== "active" ? "opacity-50" : "" ?>">
                            <div class="flex flex-col gap-2">
                                <a href="/users/show?id=<?= $sub_user['user_id'] ?>"
                                    class="hover:text-blue-500 duration-300"><?= $sub_user['ipnet_id'] ?></a>
                                <a href="/subscriptions/show?id=<?= $sub_user['id'] ?>"
                                    class="hover:text-blue-500 duration-300"><?= $sub_user['sub_no'] ?></a>
                                <p><?= $sub_user['plan'] ?></p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <p class="text-end"><?= $sub_user['end_date'] ?></p>
                                <p class="text-center rounded-md text-white px-2 <?= $sub_user['end_date'] >= date("Y-m-d") ? "bg-green-500" : "bg-slate-500" ?>"><?= $sub_user['end_date'] >= date("Y-m-d") ? "active" : "expired" ?></p>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            <?php if (!isset($_GET['layout'])) : ?>
                <table class="w-full table-auto border-collapse text-sm">
                    <thead>
                        <tr class="sticky top-0 left-0 shadow-lg py-2 px-2 bg-slate-300 font-medium">
                            <td class="border border-slate-400 px-1 py-1 text-center">
                                <a href="/subscriptions?page=<?= $page ?>&filter=ipnet_users.ipnet_id&sort=ASC" id="sort" class="inline-block mx-1 bg-slate-600 text-white <?= $page !== 1 ? "hidden" : "" ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                                    </svg>
                                </a>
                                IPNET-ID
                                <a href="/subscriptions?page=<?= $page ?>&filter=ipnet_users.ipnet_id&sort=DESC" id="sort" class="inline-block mx-1 bg-slate-600 text-white <?= $page !== 1 ? "hidden" : "" ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
                                    </svg>
                                </a>
                            </td>
                            <td class="border border-slate-400 px-1 py-1 text-center">
                                <a href="/subscriptions?page=<?= $page ?>&filter=subscriptions.sub_no&sort=ASC" id="sort" class="inline-block mx-1 bg-slate-600 text-white <?= $page !== 1 ? "hidden" : "" ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                                    </svg>
                                </a>
                                Sub No
                                <a href="/subscriptions?page=<?= $page ?>&filter=subscriptions.sub_no&sort=DESC" id="sort" class="inline-block mx-1 bg-slate-600 text-white <?= $page !== 1 ? "hidden" : "" ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
                                    </svg>
                                </a>
                            </td>
                            <td class="border border-slate-400 px-1 py-1 text-center">
                                <a href="/subscriptions?page=<?= $page ?>&filter=plans.name&sort=ASC" id="sort" class="inline-block mx-1 bg-slate-600 text-white <?= $page !== 1 ? "hidden" : "" ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                                    </svg>
                                </a>
                                Plans
                                <a href="/subscriptions?page=<?= $page ?>&filter=plans.name&sort=DESC" id="sort" class="inline-block mx-1 bg-slate-600 text-white <?= $page !== 1 ? "hidden" : "" ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
                                    </svg>
                                </a>
                            </td>
                            <td class="border border-slate-400 px-1 py-1 text-center">Price</td>
                            <td class="w-48 border border-slate-400 px-1 py-1 text-center">Start Date</td>
                            <td class="w-48 border border-slate-400 px-1 py-1 text-center">
                                <a href="/subscriptions?page=<?= $page ?>&filter=subscriptions.end_date&sort=ASC" id="sort" class="inline-block mx-1 bg-slate-600 text-white <?= $page !== 1 ? "hidden" : "" ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                                    </svg>
                                </a>
                                Expiration Date
                                <a href="/subscriptions?page=<?= $page ?>&filter=subscriptions.end_date&sort=DESC" id="sort" class="inline-block mx-1 bg-slate-600 text-white <?= $page !== 1 ? "hidden" : "" ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
                                    </svg>
                                </a>
                            </td>
                            <td class="border border-slate-400 px-1 py-1 text-center">Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($sub_users as $sub_user) : ?>
                            <tr class="hover:bg-white duration-300 <?= $sub_user['status'] !== "active" ? "opacity-50" : "" ?>">
                                <td class="font-medium px-2 py-1 border border-slate-400">
                                    <a href="/users/show?id=<?= $sub_user["user_id"] ?>" class="hover:text-blue-500">
                                        <?= $sub_user["ipnet_id"] ?>
                                    </a>
                                </td>
                                <td class="font-medium px-2 py-1 border border-slate-400">
                                    <a href="/subscriptions/show?id=<?= $sub_user["id"] ?>" class="hover:text-blue-500">
                                        <?= $sub_user["sub_no"] ?>
                                    </a>
                                </td>
                                <td class="px-2 py-1 border border-slate-400 text-center"><?= $sub_user["plan"] ?></td>
                                <td class="px-2 py-1 border border-slate-400 text-center"><?= $sub_user["price"] ?> ks</td>
                                <td class="px-2 py-1 border border-slate-400 text-center"><?= $sub_user["start_date"] ?></td>
                                <td class="px-2 py-1 border border-slate-400 text-center"><?= $sub_user["end_date"] ?></td>
                                <td class="px-2 py-1 border border-slate-400 font-semibold text-center <?= $sub_user['end_date'] >= date("Y-m-d") ? "text-green-500" : "text-slate-500" ?>"><?= $sub_user['end_date'] >= date("Y-m-d") ? "active" : "expired" ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            <?php endif ?>
        </div>
    </div>

</main>

<?php include base_path("views/partials/footer.php") ?>