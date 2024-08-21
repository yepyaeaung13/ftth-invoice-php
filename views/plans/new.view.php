<?php include base_path("views/partials/head.php") ?>

<main class="h-screen w-full flex flex-col">
    <?php include base_path("views/partials/subnav.php") ?>

    <div class="">
        <!-- sub nav tab  -->
        <div class="grid grid-cols-3 items-center px-5 py-5">
            <div class="flex items-center gap-2">
                <div id="edit-btn-group" class="flex items-center gap-2">
                    <button id="create-confirm-btn" class="bg-blue-500 rounded-md px-3 py-1 text-white">Confirm</button>
                    <a href="/plans" id="create-cancel-btn" class="bg-slate-500 rounded-md px-3 py-1 text-white">Cancel</a>
                </div>
            </div>
            <div class="flex justify-center items-center gap-1 text-slate-700 text-lg font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                </svg>
                <h1>Create New Plan</h1>
            </div>
        </div>

        <div class="overflow-y-scroll bg-slate-200 px-5 py-5">
            <div class="bg-white p-5">
                <form action="/plans/create" class="bg-white p-5 grid grid-cols-2 gap-5" method="post">
                    <div class="flex gap-3 items-center">
                        <label for="" class="font-medium">Plan Name</label>
                        <input type="text" name="name" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500">
                    </div>
                    <div class="flex gap-3 items-center">
                        <label for="" class="font-medium">Price</label>
                        <input type="number" name="price" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500">
                    </div>
                    <input type="submit" id="create-submit-btn" class="hidden">
                </form>
            </div>
        </div>
    </div>

</main>

<?php include base_path("views/partials/footer.php") ?>