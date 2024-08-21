<?php include base_path("views/partials/head.php") ?>

<main class="h-screen w-full flex flex-col">
    <?php include base_path("views/partials/subnav.php") ?>

    <div class="relative h-full">
        <!-- upload form  -->
        <div id="createFormContainer" class="absolute top-0 left-0 z-50 w-full h-full bg-black bg-opacity-50 hidden justify-center items-center">
            <div class="w-96 bg-white border rounded-md shadow-md">

                <!-- upload form  -->
                <form action="/users/import" method="post" enctype="multipart/form-data" id="createForm" class="p-5 flex flex-col justify-center items-center gap-5">
                    <h1 class="text-center font-bold font-serif text-xl">
                        Upload excel file
                    </h1>
                    <input type="file" class="px-5" name="xlsx" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" required>
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
                <a href="/users/new" class="bg-blue-500 rounded-md px-3 py-1 text-white">New</a>
                <button id="delete-btn" class="flex gap-1 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                    </svg>
                    Import
                </button>

                <a href="/assets/users-data-template.xlsx" download="users-data-template.xlsx" class="flex gap-1 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                    </svg>
                    xlsx
                </a>
                <div class="flex justify-start items-center gap-1 text-slate-700 text-lg font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    <h1>Users</h1>
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
                        <a href="/users?page=<?= isset($_GET['page']) ? $_GET['page'] - 1 : 1  ?><?= isset($_GET['filter']) ? "&filter=" . $_GET['filter'] : "" ?><?= isset($_GET['sort']) ? "&sort=" . $_GET['sort'] : "" ?>" class="text-blue-500 bg-slate-200 rounded-md px-2 <?= $page <= 1 ? "opacity-50 pointer-events-none" : "" ?>">
                            <svg xmlns=" http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                            </svg>
                        </a>
                        <a href="/users?page=<?= isset($_GET['page']) ? $_GET['page'] + 1 : 2  ?><?= isset($_GET['filter']) ? "&filter=" . $_GET['filter'] : "" ?><?= isset($_GET['sort']) ? "&sort=" . $_GET['sort'] : "" ?>" class="text-blue-500 bg-slate-200 rounded-md px-2 <?= $page >= $total_page ? "opacity-50 pointer-events-none" : "" ?>">
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
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- users list table  -->
        <div class="2xl:h-[90vh] lg:h-[80vh] w-full bg-slate-200 px-2 overflow-y-scroll">

            <?php if (isset($_GET['layout'])) : ?>
                <div class="flex flex-wrap justify-center gap-5 py-5">
                    <?php foreach ($ipnet_users as $ipnet_user) : ?>
                        <a href="/users/show?id=<?= $ipnet_user['id'] ?>" class="w-80 rounded-lg shadow-md border bg-white p-4 hover:border-blue-500 duration-300 text-nowrap flex gap-2 items-center">
                            <div class="grid grid-cols-2 gap-5">
                                <p class="font-bold"><?= $ipnet_user['ipnet_id'] ?></p>
                                <?php if ($ipnet_user['status'] == "active") : ?>
                                    <p class="text-white text-center rounded-md bg-green-600"><?= $ipnet_user['status'] ?></p>
                                <?php endif ?>
                                <?php if ($ipnet_user['status'] == "inactive") : ?>
                                    <p class="text-white text-center rounded-md bg-red-700"><?= $ipnet_user['status'] ?></p>
                                <?php endif ?>
                                <?php if ($ipnet_user['status'] == "terminate") : ?>
                                    <p class="text-white text-center rounded-md bg-slate-700"><?= $ipnet_user['status'] ?></p>
                                <?php endif ?>
                                <p class="overflow-hidden"><?= $ipnet_user['name'] ?></p>
                                <p><?= $ipnet_user['phone'] ?></p>
                                <p><?= $ipnet_user['plan'] ?></p>
                                <p class="overflow-hidden"><?= $ipnet_user['township'] ?></p>
                            </div>
                        </a>
                    <?php endforeach ?>
                </div>
            <?php endif ?>

            <?php if (!isset($_GET['layout'])) : ?>
                <table class="w-full table-auto border-collapse">
                    <thead id="filter-container">
                        <tr class="sticky top-0 left-0 shadow-lg py-2 px-2 bg-slate-300 font-medium">
                            <td class="border border-slate-400 px-1 py-1 text-center">
                                <a href="/users?page=<?= $page ?>&filter=ipnet_users.ipnet_id&sort=ASC" id="sort" class="inline-block mx-1 bg-slate-600 text-white <?= $page !== 1 ? "hidden" : "" ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                                    </svg>
                                </a>
                                IPNET-ID
                                <a href="/users?page=<?= $page ?>&filter=ipnet_users.ipnet_id&sort=DESC" id="sort" class="inline-block mx-1 bg-slate-600 text-white <?= $page !== 1 ? "hidden" : "" ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
                                    </svg>
                                </a>
                            </td>
                            <td class="border border-slate-400 px-1 py-1 text-center">
                                <a href="/users?page=<?= $page ?>&filter=ipnet_users.status_id&sort=ASC" id="sort" class="inline-block mx-1 bg-slate-600 text-white <?= $page !== 1 ? "hidden" : "" ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                                    </svg>
                                </a>
                                Status
                                <a href="/users?page=<?= $page ?>&filter=ipnet_users.status_id&sort=DESC" id="sort" class="inline-block mx-1 bg-slate-600 text-white <?= $page !== 1 ? "hidden" : "" ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
                                    </svg>
                                </a>
                            </td>
                            <td class="border border-slate-400 px-1 py-1 text-center">
                                <a href="/users?page=<?= $page ?>&filter=plans.name&sort=ASC" id="sort" class="inline-block mx-1 bg-slate-600 text-white <?= $page !== 1 ? "hidden" : "" ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                                    </svg>
                                </a>
                                Plans
                                <a href="/users?page=<?= $page ?>&filter=plans.name&sort=DESC" id="sort" class="inline-block mx-1 bg-slate-600 text-white <?= $page !== 1 ? "hidden" : "" ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
                                    </svg>
                                </a>
                            </td>
                            <td class="border border-slate-400 px-1 py-1 text-center">Name</td>
                            <td class="border border-slate-400 px-1 py-1 text-center">Phone</td>
                            <td class="border border-slate-400 px-1 py-1 text-center">
                                <a href="/users?page=<?= $page ?>&filter=townships.name&sort=ASC" id="sort" class="inline-block mx-1 bg-slate-600 text-white <?= $page !== 1 ? "hidden" : "" ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                                    </svg>
                                </a>
                                Township
                                <a href="/users?page=<?= $page ?>&filter=townships.name&sort=DESC" id="sort" class="inline-block mx-1 bg-slate-600 text-white <?= $page !== 1 ? "hidden" : "" ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
                                    </svg>
                                </a>
                            </td>
                            <td class="border border-slate-400 px-1 py-1 text-center">Address</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($ipnet_users as $ipnet_user) : ?>
                            <tr class="hover:bg-white duration-300">
                                <td class="px-2 py-1 border border-slate-400">
                                    <a href="/users/show?id=<?= $ipnet_user['id'] ?>" class="font-medium hover:text-blue-500 duration-100">
                                        <?= $ipnet_user['ipnet_id'] ?>
                                    </a>
                                </td>
                                <!-- active or inactive , terminate conditions show  -->
                                <?php if ($ipnet_user['status'] == "active") : ?>
                                    <td class="px-2 py-1 border border-slate-400 text-green-700 font-medium"><?= $ipnet_user['status'] ?></td>
                                <?php endif ?>
                                <?php if ($ipnet_user['status'] == "inactive") : ?>
                                    <td class="px-2 py-1 border border-slate-400 text-red-700 font-medium"><?= $ipnet_user['status'] ?></td>
                                <?php endif ?>
                                <?php if ($ipnet_user['status'] == "terminate") : ?>
                                    <td class="px-2 py-1 border border-slate-400 text-slate-700 font-medium"><?= $ipnet_user['status'] ?></td>
                                <?php endif ?>

                                <td class="px-2 py-1 border border-slate-400 <?= $ipnet_user['plan_status'] == "inactive" ? "text-red-500" : "" ?>"><?= $ipnet_user['plan'] ?></td>
                                <td class="px-2 py-1 border border-slate-400"><?= $ipnet_user['name'] ?></td>
                                <td class="px-2 py-1 border border-slate-400"><?= $ipnet_user['phone'] ?></td>
                                <td class="px-2 py-1 border border-slate-400"><?= $ipnet_user['township'] ?></td>
                                <td class="px-2 py-1 border border-slate-400"><?= $ipnet_user['address'] ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            <?php endif ?>

        </div>
    </div>

</main>

<?php include base_path("views/partials/footer.php") ?>