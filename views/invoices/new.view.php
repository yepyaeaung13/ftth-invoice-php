<?php include base_path("views/partials/head.php") ?>

<main class="h-screen w-full flex flex-col">
    <?php include base_path("views/partials/subnav.php") ?>

    <div class="">
        <!-- sub nav tab  -->
        <div class="grid grid-cols-3 items-center px-5 py-5">
            <div class="flex items-center gap-2">
                <div id="edit-btn-group" class="flex items-center gap-2">
                    <button id="create-confirm-btn" class="bg-blue-500 rounded-md px-3 py-1 text-white">Confirm</button>
                    <a href="/subscriptions/show?id=<?= $sub_user['id'] ?>" id="create-cancel-btn" class="bg-slate-500 rounded-md px-3 py-1 text-white">Cancel</a>
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
            <div class="bg-white p-5 flex flex-col gap-10">
                <div id="" class="flex flex-col gap-10" method="post">
                    <input type="hidden" value="<?= $sub_user['id'] ?>">
                    <input type="text" name="ipnet_id" value="<?= $sub_user['ipnet_id'] ?>" class="w-2/3 px-1 text-2xl outline-none border-b border-b-slate-300 focus:border-b-slate-500 pointer-events-none">
                    <div class="grid grid-cols-2 gap-5">
                        <div class="flex gap-3 items-center font-medium">
                            <label for="" class="">Reference Subscription</label>
                            <a href="/subscriptions/show?id=<?= $sub_user['id'] ?>" class="px-1 outline-none hover:text-blue-500"><?= $sub_user['sub_no'] ?></a>
                        </div>
                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Name</label>
                            <input type="text" name="name" value="<?= $sub_user['name'] ?>" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500 pointer-events-none">
                        </div>
                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Address</label>
                            <input type="text" name="address" value="<?= $sub_user['address'] ?>" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500 pointer-events-none">
                        </div>
                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Phone</label>
                            <input type="text" name="phone" value="<?= $sub_user['phone'] ?>" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500 pointer-events-none">
                        </div>
                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Invoice Date</label>
                            <input type="date" name="invoice_date" value="<?= date("Y-m-d") ?>" id="invoice-date-input" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500" required>
                        </div>
                        <div class="flex gap-3 items-center pointer-events-none">
                            <label for="" class="font-medium">Invoice No</label>
                            <input type="text" value="<?= $next_inv_no ?>" name="invoice_no" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500">
                        </div>
                        <div class="col-span-2 flex gap-3 items-center">
                            <label for="" class="font-medium">Description</label>
                            <input type="text" name="remark" id="remark-input" class="w-full px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500">
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <div class="flex gap-3 items-center">
                        <button id="row-add-btn" class="text-blue-500 rounded-sm px-1 border border-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </button>
                        <button id="row-delete-btn" class="text-red-500 rounded-sm px-1 border border-red-500 opacity-35 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                            </svg>
                        </button>
                    </div>
                    <form action="/invoices/create" id="create-form" class="" method="post">
                        <!-- hidden group  -->
                        <input type="hidden" name="invoice_no" value="<?= $next_inv_no ?>">
                        <input type="hidden" name="user_id" value="<?= $sub_user['user_id'] ?>">
                        <input type="hidden" name="sub_id" value="<?= $sub_user['id'] ?>">
                        <input type="hidden" id="invoice-date-info" name="invoice_date" value="<?= date("Y-m-d") ?>">
                        <input type="hidden" id="remark-info" name="remark" value="">
                        <!-- end hidden group  -->
                        <div id="invoice-table" class="w-full text-sm">
                            <div class="grid grid-cols-12 bg-slate-200 font-medium">
                                <p class="border border-slate-400 px-1 py-1 text-center">No</p>
                                <p class="col-span-2 border border-slate-400 px-1 py-1 text-center">Plans</p>
                                <p class="col-span-3 border border-slate-400 px-1 py-1 text-center">Description</p>
                                <p class="border border-slate-400 px-1 py-1 text-center">QTY</p>
                                <p class="border border-slate-400 px-1 py-1 text-center">Unit</p>
                                <p class="col-span-2 border border-slate-400 px-1 py-1 text-center">Price</p>
                                <p class="col-span-2 border border-slate-400 px-1 py-1 text-center">Amount</p>
                            </div>

                            <div id="invoice-body">
                                <div class="invoice-row grid grid-cols-12">
                                    <p class="item-id px-2 py-1 border border-slate-400 text-center"></p>
                                    <p class="col-span-2 px-2 py-1 border border-slate-400">
                                        <input type="text" name="items[]" value="<?= $sub_user['plan'] ?>" class="outline-none">
                                    </p>
                                    <p class="col-span-3 px-2 py-1 border border-slate-400">
                                        <input type="text" name="descriptions[]" value="<?= $sub_user['start_date'] ?> to <?= $sub_user['end_date'] ?>" class="w-full outline-none">
                                    </p>
                                    <p class="col-span-1 px-2 py-1 border border-slate-400 text-center">
                                        <input type="text" value="1" id="qty" name="qty[]" class="w-full outline-none text-center">
                                    </p>
                                    <p class="col-span-1 px-2 py-1 border border-slate-400">
                                        <select id="" name="unit[]" class="w-full outline-none bg-white">
                                            <option value="Months">Months</option>
                                            <option value="Days">Days</option>
                                            <option value="Nos">Nos</option>
                                        </select>
                                    </p>
                                    <p class="col-span-2 px-2 py-1 border border-slate-400">
                                        <input type="text" value="<?= $sub_user['price'] ?>" name="price[]" id="price" class="outline-none w-full text-center">
                                    </p>
                                    <p class="col-span-2 px-2 py-1 border border-slate-400 pointer-events-none">
                                        <input type="text" value="<?= $sub_user['price'] ?>" name="amount[]" id="amount" class="amount outline-none w-full text-center pointer-events-none">
                                    </p>
                                </div>
                            </div>
                            <div id="invoice-footer">
                                <div class="grid grid-cols-12 font-medium">
                                    <p class="col-span-8"></p>
                                    <p class="col-span-2 border border-slate-400 px-1 py-1 text-center">Total</p>
                                    <p class="col-span-2 border border-slate-400 px-1 py-1 text-center"><input type="text" name="total_amount" id="invoice-total-amount" value="<?= $sub_user['price'] ?>" class="outline-none w-full pointer-events-none text-center"></p>
                                </div>
                                <div class="grid grid-cols-12 font-medium">
                                    <p class="col-span-8"></p>
                                    <p class="col-span-2 border border-slate-400 px-1 py-1 text-center">Discount</p>
                                    <p class="col-span-2 border border-slate-400 px-1 py-1 text-center"><input type="text" name="discount_amount" id="invoice-discount-amount" value="0" class="outline-none w-full text-center"></p>
                                </div>
                                <div class="grid grid-cols-12 font-medium">
                                    <p class="col-span-8"></p>
                                    <p class="col-span-2
                                     border border-slate-400 px-1 py-1 text-center">
                                        Paid
                                    </p>
                                    <p class="col-span-2 border border-slate-400 px-1 py-1 text-center"><input type="text" id="invoice-paid-amount" value="0" class="outline-none w-full pointer-events-none text-center"></p>
                                </div>
                                <div class="grid grid-cols-12 font-medium">
                                    <p class="col-span-8"></p>
                                    <p class="col-span-2 border border-slate-400 px-1 py-1 text-center">Net Amount</p>
                                    <p class="col-span-2 border border-slate-400 px-1 py-1 text-center"><input type="text" id="invoice-net-amount" value="<?= $sub_user['price'] ?>" class="outline-none pointer-events-none w-full text-center"></p>
                                </div>
                            </div>
                        </div>
                        <input type="submit" id="create-submit-btn" class="hidden">
                    </form>
                </div>
            </div>
        </div>
    </div>

</main>

<!-- invoice row table template -->
<template id="invoice-row-template">
    <div class="invoice-row grid grid-cols-12">
        <p class="item-id px-2 py-1 border border-slate-400 text-center"></p>
        <p class="col-span-2 px-2 py-1 border border-slate-400">
            <input type="text" name="items[]" class="outline-none">
        </p>
        <p class="col-span-3 px-2 py-1 border border-slate-400">
            <input type="text" name="descriptions[]" class="w-full outline-none">
        </p>
        <p class="px-2 py-1 border border-slate-400 text-center">
            <input type="text" value="1" id="qty" name="qty[]" class="w-full outline-none text-center">
        </p>
        <p class="px-2 py-1 border border-slate-400">
            <select id="" name="unit[]" class="w-full outline-none bg-white">
                <option value="Months">Months</option>
                <option value="Days">Days</option>
                <option value="Nos">Nos</option>
            </select>
        </p>
        <p class="col-span-2 px-2 py-1 border border-slate-400 text-center">
            <input type="text" value="0" name="price[]" id="price" class="outline-none w-full text-center">
        </p>
        <p class="col-span-2 px-2 py-1 border border-slate-400 text-center pointer-events-none">
            <input type="text" value="0" name="amount[]" id="amount" class="amount outline-none w-full text-center pointer-events-none">
        </p>
    </div>
</template>

<?php include base_path("views/partials/footer.php") ?>