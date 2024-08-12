<?php include base_path("views/partials/head.php") ?>

<main class="h-screen w-full flex flex-col">
    <?php include base_path("views/partials/subnav.php") ?>

    <div class="">
        <!-- sub nav tab  -->
        <div class="flex justify-between items-center px-5 py-5">
            <div class="flex items-center gap-2">
                <div id="edit-btn-container" class="">
                    <a href="/users/new" class="bg-blue-500 rounded-md px-3 py-1 text-white">New</a>
                    <button id="edit-btn" class="bg-blue-500 rounded-md px-3 py-1 text-white">Edit</button>
                    <a href="/users/delete" class="bg-red-500 rounded-md px-3 py-1 text-white">Delete</a>
                </div>
                <div id="edit-btn-group" class="hidden items-center gap-2">
                    <button id="edit-confirm-btn" class="bg-blue-500 rounded-md px-3 py-1 text-white">Confirm</button>
                    <button id="edit-cancel-btn" class="bg-slate-500 rounded-md px-3 py-1 text-white">Cancel</button>
                </div>
            </div>
            <div class="py-1 px-2 border border-slate-400 rounded-lg text-xs flex gap-5">
                <div>
                    <p class="text-blue-800 font-medium">Subs</p>
                    <p class="text-center">1</p>
                </div>
                <div>
                    <p class="text-blue-800 font-medium">Plans</p>
                    <p>10 Mbps</p>
                </div>
                <div>
                    <p class="text-blue-800 font-medium">Invoiced</p>
                    <p>100000 ks</p>
                </div>
                <div>
                    <p class="text-blue-800 font-medium">Outstanding</p>
                    <p>25000 ks</p>
                </div>
            </div>
            <div class="flex gap-10 items-center">
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
            </div>
        </div>

        <div class="h-full bg-slate-200 px-5 py-5">
            <div class="bg-white p-5">
                <form action="/users/update" id="edit-form" class="flex flex-col gap-10 pointer-events-none" method="post">
                    <input type="hidden" value="1" name="id" class="outline-none border-b border-b-slate-300 py-2 text-xl w-2/3 focus:border-b-slate-500">
                    <input type="text" value="IPNET-7001" name="ipnet_id" class="outline-none border-b border-b-slate-300 py-2 text-xl w-2/3 focus:border-b-slate-500">
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
                            <input type="text" name="address" value="No-223/9, Moe Kaung Road, Yankin" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500" placeholder="street...">
                        </div>
                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Name</label>
                            <input type="text" value="Ye Pyae Aung" name="name" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500" placeholder="Name...">
                        </div>
                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Phone</label>
                            <input type="text" value="09-898626060" name="phone" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500" placeholder="Phone...">
                        </div>
                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Location</label>
                            <input type="text" value="16.9687,96.1234" name="location" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500" placeholder="location...">
                        </div>
                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Installed Date</label>
                            <input type="text" value="08/08/2024" name="installed_date" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500">
                        </div>
                        <div class="col-span-2 flex gap-3 items-center">
                            <label for="" class="font-medium">Remark</label>
                            <input type="text" value="Paid to october" name="remark" class="w-full px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500" placeholder="remark or comments......">
                        </div>
                    </div>
                    <input type="submit" id="edit-submit-btn" class="hidden">
                </form>
            </div>
        </div>
    </div>

</main>

<?php include base_path("views/partials/footer.php") ?>