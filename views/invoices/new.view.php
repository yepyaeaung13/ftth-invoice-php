<?php include base_path("views/partials/head.php") ?>

<main class="h-screen w-full flex flex-col">
    <?php include base_path("views/partials/subnav.php") ?>

    <div class="">
        <!-- sub nav tab  -->
        <div class="grid grid-cols-3 items-center px-5 py-5">
            <div class="flex items-center gap-2">
                <div id="edit-btn-group" class="flex items-center gap-2">
                    <button id="create-confirm-btn" class="bg-blue-500 rounded-md px-3 py-1 text-white">Confirm</button>
                    <a href="/subscriptions/show?id=1" id="create-cancel-btn" class="bg-slate-500 rounded-md px-3 py-1 text-white">Cancel</a>
                </div>
            </div>
            <div class="flex justify-center items-center gap-1 text-slate-700 text-lg font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                </svg>
                <h1>Create New Invoice</h1>
            </div>
        </div>

        <div class="overflow-y-scroll bg-slate-200 px-5 py-5">
            <div class="bg-white p-5">
                <form action="/invoices/edit" id="user-edit-form" class="flex flex-col gap-10" method="post">
                    <select name="ipnet_id" id="ipnet_id" class="outline-none border-b border-b-slate-300 py-2 text-xl w-2/3 focus:border-b-slate-500 bg-white">
                        <option value="1">IPNET-7001</option>
                        <option value="1">IPNET-7001</option>
                        <option value="1">IPNET-7001</option>
                        <option value="1">IPNET-7001</option>
                        <option value="1">IPNET-7001</option>
                        <option value="1">IPNET-7001</option>
                        <option value="1">IPNET-7001</option>
                        <option value="1">IPNET-7001</option>
                        <option value="1">IPNET-7001</option>
                        <option value="1">IPNET-7001</option>
                        <option value="1">IPNET-7001</option>
                        <option value="1">IPNET-7001</option>
                        <option value="1">IPNET-7001</option>
                        <option value="1">IPNET-7001</option>
                        <option value="1">IPNET-7001</option>
                        <option value="1">IPNET-7001</option>
                        <option value="1">IPNET-7001</option>
                        <option value="1">IPNET-7001</option>
                        <option value="1">IPNET-7001</option>
                        <option value="1">IPNET-7001</option>
                        <option value="1">IPNET-7001</option>
                        <option value="1">IPNET-7001</option>
                        <option value="1">IPNET-7001</option>
                        <option value="1">IPNET-7001</option>
                    </select>
                    <div class="grid grid-cols-2 gap-5">
                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Status</label>
                            <select name="status" id="status" class="w-24 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500 pointer-events-none">
                                <option value="active">active</option>
                                <option value="inactive">inactive</option>
                            </select>
                        </div>

                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Name</label>
                            <input type="text" name="name" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500" placeholder="Name...">
                        </div>
                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Address</label>
                            <input type="text" name="address" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500" placeholder="street...">
                        </div>
                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Phone</label>
                            <input type="text" name="phone" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500" placeholder="Phone...">
                        </div>
                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Invoice Date</label>
                            <input type="date" name="invoice_date" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500">
                        </div>
                        <div class="flex gap-3 items-center pointer-events-none">
                            <label for="" class="font-medium">Invoice No</label>
                            <input type="text" value="INV-000001" name="invoice_no" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500">
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
                                    <td class="border border-slate-400 px-1 py-1 text-center">Amount</td>
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
                                        <input type="text" name="description" class="w-full outline-none">
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
                                        <input type="text" value="25000 ks" name="amount" class="outline-none w-full text-center pointer-events-none">
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
                                    <td class="border border-slate-400 px-1 py-1 text-center">0 ks</td>
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