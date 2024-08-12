<?php include base_path("views/partials/head.php") ?>

<main class="h-screen w-full flex flex-col">
    <?php include base_path("views/partials/subnav.php") ?>

    <div class="">
        <!-- sub nav tab  -->
        <div class="grid grid-cols-3 px-5 py-5">
            <div class="flex items-center gap-2">
                <div id="edit-btn-container" class="">
                    <a href="/plans/new" class="bg-blue-500 rounded-md px-3 py-1 text-white">New</a>
                    <button id="edit-btn" class="bg-blue-500 rounded-md px-3 py-1 text-white">Edit</button>
                    <a href="/plans/delete?id=1" class="bg-red-500 rounded-md px-3 py-1 text-white">Delete</a>
                </div>
                <div id="edit-btn-group" class="hidden items-center gap-2">
                    <button id="edit-confirm-btn" class="bg-blue-500 rounded-md px-3 py-1 text-white">Confirm</button>
                    <button id="edit-cancel-btn" class="bg-slate-500 rounded-md px-3 py-1 text-white">Cancel</button>
                </div>
            </div>
            <div class="flex justify-center">

            </div>
            <div class="flex justify-end items-center">
                <div class="flex gap-3 text-white items-center">
                    <p class="text-black text-lg">1 / 1</p>
                    <div class="flex gap-2">
                        <a href="/plans" class="text-blue-500 bg-slate-200 rounded-md px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                            </svg>
                        </a>
                        <a href="/plans" class="text-blue-500 bg-slate-200 rounded-md px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="overflow-y-scroll bg-slate-200 px-5 py-5">
            <div class="bg-white p-5">
                <form id="edit-form" action="/plans/update" class="bg-white p-5 grid grid-cols-2 gap-5 pointer-events-none" method="post">
                    <div class="flex gap-3 items-center">
                        <label for="" class="font-medium">Plan Name</label>
                        <input type="text" name="ipnet_id" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500">
                    </div>
                    <div class="flex gap-3 items-center">
                        <label for="" class="font-medium">Price</label>
                        <input type="number" name="amount" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500">
                    </div>
                    <div class="flex gap-3 items-center">
                        <label for="" class="font-medium">Users</label>
                        <input type="text" name="users" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500 pointer-events-none">
                    </div>
                    <input type="submit" id="edit-submit-btn" class="hidden">
                </form>
            </div>
        </div>
    </div>

</main>

<?php include base_path("views/partials/footer.php") ?>