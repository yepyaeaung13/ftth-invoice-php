<?php include base_path("views/partials/head.php") ?>

<main class="h-screen w-full flex flex-col">
    <?php include base_path("views/partials/subnav.php") ?>

    <div class="">
        <!-- sub nav tab  -->
        <div class="grid grid-cols-3 items-center px-5 py-5">
            <div class="flex items-center gap-2">
                <div id="edit-btn-group" class="flex items-center gap-2">
                    <button id="create-confirm-btn" class="bg-blue-500 rounded-md px-3 py-1 text-white">Confirm</button>
                    <a href="/users" id="create-cancel-btn" class="bg-slate-500 rounded-md px-3 py-1 text-white">Cancel</a>
                </div>
            </div>
            <div class="flex justify-center items-center gap-1 text-slate-700 text-lg font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                <h1>Create New User</h1>
            </div>
            <div></div>
        </div>

        <div class="h-full bg-slate-200 px-5 py-5">
            <div class="bg-white p-5">
                <form action="/users/create" id="user-create-form" class="flex flex-col gap-10" method="post">
                    <input type="text" name="ipnet_id" class="outline-none border-b border-b-slate-300 py-2 text-xl w-2/3 focus:border-b-slate-500"
                        placeholder="IPNET-7001...">
                    <div class="grid grid-cols-2 gap-5">
                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Status</label>
                            <select name="status" id="status" class="w-24 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500">
                                <option value="active">active</option>
                                <option value="inactive">inactive</option>
                            </select>
                        </div>
                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Mbps</label>
                            <select name="mbps" id="mbps" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500">
                                <option value="10">10 Mbps</option>
                                <option value="15">15 Mbps</option>
                                <option value="20">20 Mbps</option>
                            </select>
                        </div>
                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Address</label>
                            <input type="text" name="address" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500" placeholder="street...">
                        </div>
                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Name</label>
                            <input type="text" name="name" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500" placeholder="enter users name...">
                        </div>
                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Phone</label>
                            <input type="text" name="phone" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500" placeholder="Phone...">
                        </div>
                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Location</label>
                            <input type="text" name="location" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500" placeholder="16.1234,961234...">
                        </div>
                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Installed Date</label>
                            <input type="date" name="installed_date" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500">
                        </div>
                        <div class="col-span-2 flex gap-3 items-center">
                            <label for="" class="font-medium">Remark</label>
                            <input type="text" name="remark" class="w-full px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500" placeholder="remark or comments......">
                        </div>
                    </div>
                    <input type="submit" id="create-submit-btn" class="hidden">
                </form>
            </div>
        </div>
    </div>

</main>

<?php include base_path("views/partials/footer.php") ?>