<?php include base_path("views/partials/head.php") ?>

<main class="h-screen w-full flex flex-col">
    <?php include base_path("views/partials/subnav.php") ?>

    <div class="">
        <!-- sub nav tab  -->
        <div class="grid grid-cols-3 px-5 py-5">
            <div class="flex items-center gap-2">
                <div id="edit-btn-container" class="">
                    <button id="edit-btn" class="bg-blue-500 rounded-md px-3 py-1 text-white">Edit</button>
                    <a href="/payments/new?invoice_id=1" class="bg-slate-500 rounded-md px-3 py-1 text-white">Register Payment</a>
                    <a href="/invoices/delete?id=1" class="bg-red-500 rounded-md px-3 py-1 text-white">Delete</a>
                </div>
                <div id="edit-btn-group" class="hidden items-center gap-2">
                    <button id="edit-confirm-btn" class="bg-blue-500 rounded-md px-3 py-1 text-white">Confirm</button>
                    <button id="edit-cancel-btn" class="bg-slate-500 rounded-md px-3 py-1 text-white">Cancel</button>
                </div>
            </div>
            <div class="flex justify-center gap-2">
                <button class="flex items-center gap-1 border border-blue-500 px-2 py-1 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-blue-800">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
                    </svg>
                    <p class="text-blue-800 font-medium">Print</p>
                </button>
                <a href="viber://chat?number=09420913326" class="flex items-center gap-1 border border-blue-500 px-2 py-1 rounded-md">
                    <svg class="size-5" fill="#3f00b1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M444 49.9C431.3 38.2 379.9 .9 265.3 .4c0 0-135.1-8.1-200.9 52.3C27.8 89.3 14.9 143 13.5 209.5c-1.4 66.5-3.1 191.1 117 224.9h.1l-.1 51.6s-.8 20.9 13 25.1c16.6 5.2 26.4-10.7 42.3-27.8 8.7-9.4 20.7-23.2 29.8-33.7 82.2 6.9 145.3-8.9 152.5-11.2 16.6-5.4 110.5-17.4 125.7-142 15.8-128.6-7.6-209.8-49.8-246.5zM457.9 287c-12.9 104-89 110.6-103 115.1-6 1.9-61.5 15.7-131.2 11.2 0 0-52 62.7-68.2 79-5.3 5.3-11.1 4.8-11-5.7 0-6.9 .4-85.7 .4-85.7-.1 0-.1 0 0 0-101.8-28.2-95.8-134.3-94.7-189.8 1.1-55.5 11.6-101 42.6-131.6 55.7-50.5 170.4-43 170.4-43 96.9 .4 143.3 29.6 154.1 39.4 35.7 30.6 53.9 103.8 40.6 211.1zm-139-80.8c.4 8.6-12.5 9.2-12.9 .6-1.1-22-11.4-32.7-32.6-33.9-8.6-.5-7.8-13.4 .7-12.9 27.9 1.5 43.4 17.5 44.8 46.2zm20.3 11.3c1-42.4-25.5-75.6-75.8-79.3-8.5-.6-7.6-13.5 .9-12.9 58 4.2 88.9 44.1 87.8 92.5-.1 8.6-13.1 8.2-12.9-.3zm47 13.4c.1 8.6-12.9 8.7-12.9 .1-.6-81.5-54.9-125.9-120.8-126.4-8.5-.1-8.5-12.9 0-12.9 73.7 .5 133 51.4 133.7 139.2zM374.9 329v.2c-10.8 19-31 40-51.8 33.3l-.2-.3c-21.1-5.9-70.8-31.5-102.2-56.5-16.2-12.8-31-27.9-42.4-42.4-10.3-12.9-20.7-28.2-30.8-46.6-21.3-38.5-26-55.7-26-55.7-6.7-20.8 14.2-41 33.3-51.8h.2c9.2-4.8 18-3.2 23.9 3.9 0 0 12.4 14.8 17.7 22.1 5 6.8 11.7 17.7 15.2 23.8 6.1 10.9 2.3 22-3.7 26.6l-12 9.6c-6.1 4.9-5.3 14-5.3 14s17.8 67.3 84.3 84.3c0 0 9.1 .8 14-5.3l9.6-12c4.6-6 15.7-9.8 26.6-3.7 14.7 8.3 33.4 21.2 45.8 32.9 7 5.7 8.6 14.4 3.8 23.6z" />
                    </svg>
                    <p class="text-blue-800 font-medium">Viber</p>
                </a>
            </div>
            <div class="flex justify-end items-center">
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

        <div class="overflow-y-scroll bg-slate-200 px-5 py-5">
            <div class="bg-white p-5">
                <form action="/invoices/update" id="edit-form" class="flex flex-col gap-10 pointer-events-none" method="post">
                    <input type="hidden" value="1" name="id" class="outline-none border-b border-b-slate-300 py-2 text-xl w-2/3 focus:border-b-slate-500">
                    <input type="text" value="IPNET-7001" name="ipnet_id" class="outline-none border-b border-b-slate-300 py-2 text-xl w-2/3 focus:border-b-slate-500">
                    <div class="grid grid-cols-2 gap-5">
                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Invoice Date</label>
                            <input type="text" value="08/08/2024" name="invoice_date" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500">
                        </div>
                        <div class="flex gap-3 items-center pointer-events-none">
                            <label for="" class="font-medium">Invoice No</label>
                            <input type="text" value="INV-000001" name="invoice_no" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500 pointer-events-none">
                        </div>

                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Subscription No</label>
                            <input type="text" value="SUB-0001" name="name" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500 pointer-events-none">
                        </div>
                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Name</label>
                            <input type="text" value="Ye Pyae Aung" name="name" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500 pointer-events-none">
                        </div>
                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Address</label>
                            <input type="text" name="address" value="No-223/9, Moe Kaung Road, Yankin" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500 pointer-events-none">
                        </div>
                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Phone</label>
                            <input type="text" value="09-898626060" name="phone" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500 pointer-events-none">
                        </div>

                        <div class="col-span-2 flex gap-3 items-center">
                            <label for="" class="font-medium">Description</label>
                            <input type="text" name="remark" class="w-full px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500" placeholder="remark or comments......">
                        </div>
                    </div>
                    <div class="border border-slate-300">
                        <table class="w-full table-auto border-collapse text-sm">
                            <thead>
                                <tr class="py-2 px-2 bg-slate-200 font-medium">
                                    <td class="border border-slate-400 px-1 py-1 text-center">No</td>
                                    <td class="border border-slate-400 px-1 py-1 text-center">Plans</td>
                                    <td class="border border-slate-400 px-1 py-1 text-center">Description</td>
                                    <td class="border border-slate-400 px-1 py-1 text-center">QTY</td>
                                    <td class="border border-slate-400 px-1 py-1 text-center">Unit</td>
                                    <td class="border border-slate-400 px-1 py-1 text-center">Price</td>
                                    <td class="w-24 border border-slate-400 px-1 py-1 text-center">Amount</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-2 py-1 border border-slate-400 text-center w-12">1</td>
                                    <td class="px-2 py-1 border border-slate-400 w-40">
                                        <select name="mbps" id="" class="w-full outline-none bg-white">
                                            <option value="10">10 Mbps</option>
                                            <option value="15">15 Mbps</option>
                                            <option value="20">20 Mbps</option>
                                        </select>
                                    </td>
                                    <td class="px-2 py-1 border border-slate-400">
                                        <input type="text" name="description" value="1-8-2024 to 31-8-2024" class="w-full outline-none">
                                    </td>
                                    <td class="px-2 py-1 border border-slate-400 text-center w-12">
                                        <input type="text" value="1" name="qty" class="w-full outline-none text-center">
                                    </td>
                                    <td class="px-2 py-1 border border-slate-400 w-24">
                                        <select id="" name="unit" class="w-full outline-none bg-white">
                                            <option value="months">months</option>
                                            <option value="months">days</option>
                                        </select>
                                    </td>`
                                    <td class="px-2 py-1 border border-slate-400 text-center w-36">
                                        <input type="text" value="25000" name="price" class="outline-none w-full text-center">
                                    </td>
                                    <td class="px-2 py-1 border border-slate-400 text-center pointer-events-none">
                                        <input type="text" value="25000" name="amount" class="outline-none w-full text-center pointer-events-none">
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="py-2 px-2 font-medium">
                                    <td class=""></td>
                                    <td class=""></td>
                                    <td class=""></td>
                                    <td class=""></td>
                                    <td class=""></td>
                                    <td class="border border-slate-400 px-1 py-1 text-center">Total</td>
                                    <td class="border border-slate-400 px-1 py-1 text-center">25000 ks</td>
                                </tr>
                                <tr class="py-2 px-2 font-medium">
                                    <td class=""></td>
                                    <td class=""></td>
                                    <td class=""></td>
                                    <td class=""></td>
                                    <td class=""></td>
                                    <td class="border border-slate-400 px-1 py-1 text-center">Discount</td>
                                    <td class="border border-slate-400 px-1 py-1 text-center">
                                        <input type="text" class="outline-none text-center" value="0">
                                    </td>
                                </tr>
                                <tr class="py-2 px-2 font-medium">
                                    <td class=""></td>
                                    <td class=""></td>
                                    <td class=""></td>
                                    <td class=""></td>
                                    <td class=""></td>
                                    <td class="border border-slate-400 px-1 py-1 text-center">
                                        <p>Paid</p>
                                        <p>08/08/2024</p>
                                    </td>
                                    <td class="border border-slate-400 px-1 py-1 text-center">25000 ks</td>
                                </tr>
                                <tr class="py-2 px-2 font-medium">
                                    <td class=""></td>
                                    <td class=""></td>
                                    <td class=""></td>
                                    <td class=""></td>
                                    <td class=""></td>
                                    <td class="border border-slate-400 px-1 py-1 text-center">Net Amount</td>
                                    <td class="border border-slate-400 px-1 py-1 text-center">0 ks</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <input type="submit" id="edit-submit-btn" class="hidden">
                </form>
            </div>
        </div>
    </div>

</main>

<?php include base_path("views/partials/footer.php") ?>