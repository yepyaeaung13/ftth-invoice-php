<?php include base_path("views/partials/head.php") ?>

<main class="h-screen w-full flex flex-col">
    <?php include base_path("views/partials/subnav.php") ?>

    <div class="">
        <!-- sub nav tab  -->
        <div class="grid grid-cols-3 items-center px-5 py-5">
            <div class="flex items-center gap-2">
                <div id="edit-btn-group" class="flex items-center gap-2">
                    <button id="create-confirm-btn" class="bg-blue-500 rounded-md px-3 py-1 text-white">Confirm</button>
                    <a href="/subscriptions" id="create-cancel-btn" class="bg-slate-500 rounded-md px-3 py-1 text-white">Cancel</a>
                </div>
            </div>
            <div class="flex justify-center items-center gap-1 text-slate-700 text-lg font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 0 0-3.7-3.7 48.678 48.678 0 0 0-7.324 0 4.006 4.006 0 0 0-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 0 0 3.7 3.7 48.656 48.656 0 0 0 7.324 0 4.006 4.006 0 0 0 3.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3-3 3" />
                </svg>
                <h1>Create New Subscriptions</h1>
            </div>
        </div>

        <div class="overflow-y-scroll bg-slate-200 px-5 py-5">
            <div class="bg-white p-5">
                <form action="/subscriptions/update" id="user-edit-form" class="flex flex-col gap-10" method="post">
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
                            <label for="" class="font-medium">Plans</label>
                            <select name="status" id="status" class="w-24 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500">
                                <option value="10">10 Mbps</option>
                                <option value="15">15 Mbps</option>
                                <option value="20">20 Mbps</option>
                            </select>
                        </div>

                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Name</label>
                            <input type="text" value="Ye Pyae Aung" name="name" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500" placeholder="Name...">
                        </div>
                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Start Date</label>
                            <input type="date" value="08/08/2024" name="invoice_date" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500">
                        </div>
                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Address</label>
                            <input type="text" name="address" value="No-223/9, Moe Kaung Road, Yankin" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500" placeholder="street...">
                        </div>
                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">End Date</label>
                            <input type="date" value="08/08/2024" name="invoice_date" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500">
                        </div>
                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Phone</label>
                            <input type="text" value="09-898626060" name="phone" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500" placeholder="Phone...">
                        </div>


                        <div class="flex gap-3 items-center pointer-events-none">
                            <label for="" class="font-medium">Subscriptions No</label>
                            <input type="text" value="INV-000001" name="invoice_no" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500">
                        </div>
                        <div class="col-span-2 flex gap-3 items-center">
                            <label for="" class="font-medium">Remark</label>
                            <input type="text" value="Paid to october" name="remark" class="w-full px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500" placeholder="remark or comments......">
                        </div>
                    </div>
                    <input type="submit" id="create-submit-btn" class="hidden">
                </form>
            </div>
        </div>
    </div>

</main>

<?php include base_path("views/partials/footer.php") ?>