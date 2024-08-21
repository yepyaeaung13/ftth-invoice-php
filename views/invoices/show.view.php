<?php include base_path("views/partials/head.php") ?>

<main class="h-screen w-full flex flex-col">
    <?php include base_path("views/partials/subnav.php") ?>

    <div class="relative h-full">
        <!-- sub nav tab  -->
        <div class="grid grid-cols-3 px-5 py-5">
            <div class="flex items-center gap-2">
                <div id="edit-btn-container" class="flex items-center gap-2">
                    <button id="edit-btn" class="bg-blue-500 rounded-md px-3 py-1 text-white">Edit</button>
                    <?php if ($invoice['payment_id'] == null) : ?>
                        <a href="/payments/new?invoice_id=<?= $invoice['id'] ?>" class="bg-slate-500 rounded-md px-3 py-1 text-white">Register Payment</a>
                    <?php endif ?>
                    <button id="delete-btn" class="bg-red-500 rounded-md px-3 py-1 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>
                    </button>

                    <!-- delete form  -->
                    <div id="createFormContainer" class="absolute top-0 left-0 z-50 w-full h-full bg-black bg-opacity-50 hidden justify-center items-center">
                        <div class="w-80 bg-white border rounded-md shadow-md">

                            <!-- delete form  -->
                            <form action="/invoices/delete" method="post" id="createForm" class="p-5 flex flex-col justify-center items-center gap-2">
                                <input type="hidden" name="id" value="<?= $invoice['id'] ?>">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-16 text-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                                    </svg>
                                </span>
                                <h1 class="text-center font-bold font-serif text-2xl">
                                    Are You Sure?
                                </h1>
                                <p>You won't be able to revert this!</p>
                                <input type="submit" id="delete-submit-btn" class="hidden">
                            </form>

                            <div class="p-5 flex gap-10 justify-center">
                                <button id="confirm-delete-btn" class="bg-blue-500 text-white rounded-md w-28 py-1">
                                    Yes, delete it!
                                </button>
                                <button id="cancel-delete-btn" class="bg-red-500 text-white rounded-md w-28 py-1">
                                    Cancel!
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="edit-btn-group" class="hidden items-center gap-2">
                    <button id="edit-confirm-btn" class="bg-blue-500 rounded-md px-3 py-1 text-white">Confirm</button>
                    <a href="" id="edit-cancel-btn" class="bg-slate-500 rounded-md px-3 py-1 text-white">Cancel</a>
                </div>
            </div>
            <div class="flex justify-center items-center gap-3">
                <a href="/subscriptions/show?id=<?= $invoice['sub_id'] ?>" class="text-blue-500"><?= $invoice['sub_no'] ?></a>
                <span>/</span>
                <a href="/invoices" class="text-blue-500">Invoices</a>
                <span>/</span>
                <a href="" class="px-2 rounded-md bg-blue-500 text-white border hover:bg-white hover:text-blue-500 hover:border-blue-500 duration-150"><?= $invoice['invoice_no'] ?></a>
                <span>/</span>
                <a href="/payments/show?id=<?= $invoice['payment_id'] ?>" class="text-blue-500"><?= $invoice['payment_no'] ?></a>
            </div>
            <div class="flex justify-end gap-2">
                <span class="hidden" id="invoiceNo"><?= $invoice['ipnet_id'] ?>-<?= $invoice['invoice_no'] ?></span>
                <button id="download-image" class="flex items-center gap-1 border border-blue-500 px-2 py-1 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 pointer-events-none text-blue-800">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                    </svg>
                    <p class="text-blue-800 font-medium">Image</p>
                </button>
                <button id="download-pdf" class="flex items-center gap-1 border border-blue-500 px-2 py-1 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 pointer-events-none text-blue-800">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                    </svg>
                    <p class="text-blue-800 font-medium">PDF</p>
                </button>
                <a href="viber://chat?number=<?= $invoice['phone'] ?>" class="flex items-center gap-1 border border-blue-500 px-2 py-1 rounded-md">
                    <svg class="size-5" fill="#3f00b1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M444 49.9C431.3 38.2 379.9 .9 265.3 .4c0 0-135.1-8.1-200.9 52.3C27.8 89.3 14.9 143 13.5 209.5c-1.4 66.5-3.1 191.1 117 224.9h.1l-.1 51.6s-.8 20.9 13 25.1c16.6 5.2 26.4-10.7 42.3-27.8 8.7-9.4 20.7-23.2 29.8-33.7 82.2 6.9 145.3-8.9 152.5-11.2 16.6-5.4 110.5-17.4 125.7-142 15.8-128.6-7.6-209.8-49.8-246.5zM457.9 287c-12.9 104-89 110.6-103 115.1-6 1.9-61.5 15.7-131.2 11.2 0 0-52 62.7-68.2 79-5.3 5.3-11.1 4.8-11-5.7 0-6.9 .4-85.7 .4-85.7-.1 0-.1 0 0 0-101.8-28.2-95.8-134.3-94.7-189.8 1.1-55.5 11.6-101 42.6-131.6 55.7-50.5 170.4-43 170.4-43 96.9 .4 143.3 29.6 154.1 39.4 35.7 30.6 53.9 103.8 40.6 211.1zm-139-80.8c.4 8.6-12.5 9.2-12.9 .6-1.1-22-11.4-32.7-32.6-33.9-8.6-.5-7.8-13.4 .7-12.9 27.9 1.5 43.4 17.5 44.8 46.2zm20.3 11.3c1-42.4-25.5-75.6-75.8-79.3-8.5-.6-7.6-13.5 .9-12.9 58 4.2 88.9 44.1 87.8 92.5-.1 8.6-13.1 8.2-12.9-.3zm47 13.4c.1 8.6-12.9 8.7-12.9 .1-.6-81.5-54.9-125.9-120.8-126.4-8.5-.1-8.5-12.9 0-12.9 73.7 .5 133 51.4 133.7 139.2zM374.9 329v.2c-10.8 19-31 40-51.8 33.3l-.2-.3c-21.1-5.9-70.8-31.5-102.2-56.5-16.2-12.8-31-27.9-42.4-42.4-10.3-12.9-20.7-28.2-30.8-46.6-21.3-38.5-26-55.7-26-55.7-6.7-20.8 14.2-41 33.3-51.8h.2c9.2-4.8 18-3.2 23.9 3.9 0 0 12.4 14.8 17.7 22.1 5 6.8 11.7 17.7 15.2 23.8 6.1 10.9 2.3 22-3.7 26.6l-12 9.6c-6.1 4.9-5.3 14-5.3 14s17.8 67.3 84.3 84.3c0 0 9.1 .8 14-5.3l9.6-12c4.6-6 15.7-9.8 26.6-3.7 14.7 8.3 33.4 21.2 45.8 32.9 7 5.7 8.6 14.4 3.8 23.6z" />
                    </svg>
                    <p class="text-blue-800 font-medium">Viber</p>
                </a>
            </div>
        </div>

        <div class="overflow-y-scroll bg-slate-200 px-5 py-5">
            <div class="bg-white p-5 flex flex-col gap-10">
                <div id="edit-form-info" class="relative flex flex-col gap-10 pointer-events-none">
                    <!-- float paid status  -->
                    <?php if ($invoice['payment_id'] !== null) : ?>
                        <span class="px-5 py-1 rounded-sm font-medium text-lg absolute right-0 top-0 z-10 text-white bg-green-600">Paid</span>
                    <?php endif ?>
                    <?php if ($invoice['payment_id'] == null) : ?>
                        <span class="px-3 py-1 rounded-sm font-medium text-lg absolute right-0 top-0 z-10 text-white bg-red-500">Unpaid</span>
                    <?php endif ?>

                    <input type="text" name="ipnet_id" value="<?= $invoice['ipnet_id'] ?>" class="w-2/3 px-1 text-2xl outline-none border-b border-b-slate-300 focus:border-b-slate-500 pointer-events-none">
                    <div class="grid grid-cols-2 gap-5">
                        <div class="flex gap-3 items-center font-medium">
                            <label for="" class="">Reference Subscription</label>
                            <a href="/subscriptions/show?id=<?= $invoice['sub_id'] ?>" class="px-1 outline-none hover:text-blue-500"><?= $invoice['sub_no'] ?></a>
                        </div>
                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Name</label>
                            <input type="text" name="name" value="<?= $invoice['name'] ?>" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500 pointer-events-none">
                        </div>
                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Address</label>
                            <input type="text" name="address" value="<?= $invoice['address'] ?>" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500 pointer-events-none">
                        </div>
                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Phone</label>
                            <input type="text" name="phone" value="<?= $invoice['phone'] ?>" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500 pointer-events-none">
                        </div>
                        <div class="flex gap-3 items-center">
                            <label for="" class="font-medium">Invoice Date</label>
                            <input type="date" name="invoice_date" value="<?= $invoice['date'] ?>" id="invoice-date-input" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500" required>
                        </div>
                        <div class="flex gap-3 items-center pointer-events-none">
                            <label for="" class="font-medium">Invoice No</label>
                            <input type="text" value="<?= $invoice['invoice_no'] ?>" name="invoice_no" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500">
                        </div>
                        <div class="col-span-2 flex gap-3 items-center">
                            <label for="" class="font-medium">Description</label>
                            <input type="text" name="remark" value="<?= $invoice['remark'] ?>" id="remark-input" class="w-full px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500">
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <div class="flex gap-3 items-center">
                        <button id="row-add-btn" class="text-blue-500 rounded-sm px-1 border border-blue-500 opacity-35 pointer-events-none">
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
                    <form action="/invoices/update" id="edit-form" class="pointer-events-none" method="post">
                        <!-- hidden group  -->
                        <input type="hidden" name="invoice_id" value="<?= $invoice['id'] ?>">
                        <input type="hidden" id="invoice-date-info" name="invoice_date" value="<?= $invoice['date'] ?>">
                        <input type="hidden" id="remark-info" name="remark" value="<?= $invoice['remark'] ?>">
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
                                <?php foreach ($invoice_items as $item) : ?>
                                    <div class="invoice-row grid grid-cols-12">
                                        <input type="hidden" name="items_id[]" value="<?= $item['id'] ?>">
                                        <p class="item-id px-2 py-1 border border-slate-400 text-center"></p>
                                        <p class="col-span-2 px-2 py-1 border border-slate-400">
                                            <input type="text" name="items[]" value="<?= $item['name'] ?>" class="outline-none">
                                        </p>
                                        <p class="col-span-3 px-2 py-1 border border-slate-400">
                                            <input type="text" name="descriptions[]" value="<?= $item['descriptions'] ?>" class="w-full outline-none">
                                        </p>
                                        <p class="col-span-1 px-2 py-1 border border-slate-400 text-center">
                                            <input type="text" value="<?= $item['qty'] ?>" id="qty" name="qty[]" class="w-full outline-none text-center">
                                        </p>
                                        <p class="col-span-1 px-2 py-1 border border-slate-400">
                                            <select id="" name="unit[]" value="<?= $item['unit'] ?>" class="w-full outline-none bg-white">
                                                <option value="Months">Months</option>
                                                <option value="Days">Days</option>
                                                <option value="Nos">Nos</option>
                                            </select>
                                        </p>
                                        <p class="col-span-2 px-2 py-1 border border-slate-400">
                                            <input type="text" value="<?= $item['price'] ?>" name="price[]" id="price" class="outline-none w-full text-center">
                                        </p>
                                        <p class="col-span-2 px-2 py-1 border border-slate-400 pointer-events-none">
                                            <input type="text" value="<?= $item['amount'] ?>" name="amount[]" id="amount" class="amount outline-none w-full text-center pointer-events-none">
                                        </p>
                                    </div>
                                <?php endforeach ?>
                            </div>
                            <div id="invoice-footer">
                                <div class="grid grid-cols-12 font-medium">
                                    <p class="col-span-8"></p>
                                    <p class="col-span-2 border border-slate-400 px-1 py-1 text-center">Total</p>
                                    <p class="col-span-2 border border-slate-400 px-1 py-1 text-center"><input type="text" name="total_amount" id="invoice-total-amount" value="<?= $invoice['total_amount'] ?>" class="outline-none w-full pointer-events-none text-center"></p>
                                </div>
                                <div class="grid grid-cols-12 font-medium">
                                    <p class="col-span-8"></p>
                                    <p class="col-span-2 border border-slate-400 px-1 py-1 text-center">Discount</p>
                                    <p class="col-span-2 border border-slate-400 px-1 py-1 text-center"><input type="text" name="discount_amount" value="<?= $invoice['discount_amount'] ?>" id="invoice-discount-amount" class="outline-none w-full text-center"></p>
                                </div>
                                <div class="grid grid-cols-12 font-medium <?= $invoice['payment_id'] == null ? "hidden" : "" ?>">
                                    <p class="col-span-8"></p>
                                    <p class="col-span-2
                                     border border-slate-400 px-1 py-1 text-center">
                                        Paid on
                                        <span class="hover:text-blue-500">
                                            <?= $invoice['payment_date'] ?>
                                        </span>
                                    </p>
                                    <p class="col-span-2 border border-slate-400 px-1 py-1 text-center"><input type="text" id="invoice-paid-amount" value="<?= $invoice['payment_amount']  !== null ? $invoice['payment_amount'] : 0 ?>" class="outline-none w-full pointer-events-none text-center"></p>
                                </div>
                                <div class="grid grid-cols-12 font-medium">
                                    <p class="col-span-8"></p>
                                    <p class="col-span-2 border border-slate-400 px-1 py-1 text-center">Net Amount</p>
                                    <p class="col-span-2 border border-slate-400 px-1 py-1 text-center"><input type="text" id="invoice-net-amount" value="<?= $invoice['total_amount'] - ($invoice['discount_amount'] + $invoice['payment_amount']) ?>" class="outline-none pointer-events-none w-full text-center"></p>
                                </div>
                            </div>
                        </div>
                        <input type="submit" id="edit-submit-btn" class="hidden">
                    </form>
                </div>
            </div>
        </div>

        <!-- invoice template  -->
        <div class="h-1 overflow-y-scroll bg-slate-200 px-5 py-5">
            <div id="capture" class="relative -translate-x-[200%] -translate-y-[200%] w-[210mm] h-[295mm] mx-auto bg-white rounded-lg flex flex-col gap-10">
                <!-- invoice header  -->
                <div class="w-full bg-slate-700 text-white p-5">
                    <h1 class="font-serif font-medium text-xl pb-2 flex gap-1 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mt-[4px]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.288 15.038a5.25 5.25 0 0 1 7.424 0M5.106 11.856c3.807-3.808 9.98-3.808 13.788 0M1.924 8.674c5.565-5.565 14.587-5.565 20.152 0M12.53 18.22l-.53.53-.53-.53a.75.75 0 0 1 1.06 0Z" />
                        </svg>
                        IPNet FTTH
                    </h1>
                    <p class="">Reliable Fiber-to-the-Home Internet with High-Speed Wi-Fi Connectivity</p>
                </div>
                <!-- customer info  -->
                <div class="p-1 flex flex-col gap-10">
                    <h1 class="w-2/3 px-1 pb-1 text-2xl outline-none border-b border-b-slate-300"><?= $invoice['ipnet_id'] ?></h1>
                    <div class="flex justify-between px-2">
                        <div class="flex flex-col gap-4">
                            <div class="">
                                <span for="" class="font-medium">Name :</span>
                                <span class="px-1"><?= $invoice['name'] ?></span>
                            </div>
                            <div class="">
                                <span for="" class="font-medium">Phone :</span>
                                <span class="px-1"><?= $invoice['phone'] ?></span>
                            </div>
                            <div class="">
                                <span for="" class="font-medium">Address :</span>
                                <span class="px-1"><?= $invoice['address'] ?></span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <div class="flex gap-3 items-center pointer-events-none">
                                <span for="" class="font-medium">Invoice No :</span>
                                <span class="px-1"><?= $invoice['invoice_no'] ?></span>
                            </div>
                            <div class="flex gap-3 items-center">
                                <span for="" class="font-medium">Invoice Date :</span>
                                <span class="px-1"><?= $invoice['date'] ?></span>
                            </div>
                            <div class="flex gap-3 items-center font-medium">
                                <span for="" class="font-medium">Subscriptions No :</span>
                                <span class="px-1"><?= $invoice['sub_no'] ?></span>
                            </div>
                        </div>
                    </div>
                    <!-- invoice body  -->
                    <div class="flex flex-col gap-2">
                        <div id="invoiceTemplate" class="w-full text-sm">
                            <div class="grid grid-cols-12 bg-slate-700 text-white font-medium">
                                <p class="border border-slate-400 px-1 pb-4 text-center">No</p>
                                <p class="col-span-2 border border-slate-400 px-1 pb-4 text-center">Plans</p>
                                <p class="col-span-3 border border-slate-400 px-1 pb-4 text-center">Description</p>
                                <p class="border border-slate-400 px-1 pb-4 text-center">QTY</p>
                                <p class="border border-slate-400 px-1 pb-4 text-center">Unit</p>
                                <p class="col-span-2 border border-slate-400 px-1 pb-4 text-center">Price</p>
                                <p class="col-span-2 border border-slate-400 px-1 pb-4 text-center">Amount</p>
                            </div>

                            <!-- invoice items  -->
                            <div id="invoice-body">
                                <?php foreach ($invoice_items as $item) : ?>
                                    <div class="invoice-row grid grid-cols-12 bg-slate-100">
                                        <p class="item-id px-2 border border-slate-400 text-center"></p>
                                        <p class="col-span-2 px-2 pb-4 border border-slate-400 text-nowrap overflow-hidden">
                                            <?= $item['name'] ?>
                                        </p>
                                        <p class="col-span-3 px-1 border border-slate-400">
                                            <?= $item['descriptions'] ?>
                                        </p>
                                        <p class="col-span-1 px-2 border border-slate-400 text-center">
                                            <?= $item['qty'] ?>
                                        </p>
                                        <p class="col-span-1 px-1 border border-slate-400 text-center">
                                            <?= $item['unit'] ?>
                                        </p>
                                        <p class="col-span-2 px-3 border border-slate-400 text-right">
                                            <?= $item['price'] ?> ks
                                        </p>
                                        <p class="col-span-2 px-3 border border-slate-400 text-right">
                                            <?= $item['amount'] ?> ks
                                        </p>
                                    </div>
                                <?php endforeach ?>
                            </div>

                            <div id="invoice-footer">
                                <div class="grid grid-cols-12 font-medium">
                                    <p class="col-span-8"></p>
                                    <p class="col-span-2 border bg-slate-500 text-white border-slate-400 px-1 pt-1 pb-4 text-center">Total</p>
                                    <p class="col-span-2 border bg-slate-500 text-white border-slate-400 px-3 pt-1 pb-4 text-right"><?= $invoice['total_amount'] ?> ks</p>
                                </div>
                                <div class="grid grid-cols-12 font-medium">
                                    <p class="col-span-8"></p>
                                    <p class="col-span-2 border bg-slate-600 text-white border-slate-400 px-1 pt-1 pb-4 text-center">Discount</p>
                                    <p class="col-span-2 border bg-slate-600 text-white border-slate-400 px-3 pt-1 pb-4 text-right"><?= $invoice['discount_amount'] ?> ks</p>
                                </div>
                                <div class="grid grid-cols-12 font-medium <?= $invoice['payment_id'] == null ? "hidden" : "" ?>">
                                    <p class="col-span-8"></p>
                                    <p class="col-span-2
                                     border bg-slate-700 text-white border-slate-400 px-1 pb-2 text-center">
                                        <span>Paid on</span>
                                        <span class="hover:text-blue-500">
                                            <?= $invoice['payment_date'] ?>
                                        </span>
                                    </p>
                                    <p class="col-span-2 border bg-slate-700 text-white border-slate-400 px-3 pt-2 pb-2 text-right "><?= $invoice['payment_amount']  !== null ? $invoice['payment_amount'] : 0 ?> ks</p>
                                </div>
                                <div class="grid grid-cols-12 font-medium">
                                    <p class="col-span-8"></p>
                                    <p class="col-span-2 border bg-slate-800 text-white border-slate-400 px-1 pb-4 text-center">Net Amount</p>
                                    <p class="col-span-2 border bg-slate-800 text-white border-slate-400 px-3 pb-4 text-right"><?= $invoice['total_amount'] - ($invoice['discount_amount'] + $invoice['payment_amount']) ?> ks</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- payment-info  -->
                    <div class="absolute bottom-36 p-5 w-2/3">
                        <h1 class="font-serif font-bold border-b-2 border-slate-400 pb-2 mb-1">Payment Info</h1>
                        <p class="font-serif font-medium mb-1">KPay</p>
                        <div class="flex gap-5 font-serif">
                            <span class="font-medium mb-1">Account No : 09-409709911</span>
                            <span class="font-medium mb-1">Account Name : Ye Pyae Aung</s>
                        </div>
                    </div>

                    <div class="absolute bottom-20 w-full flex justify-center">
                        <p class="font-serif text-center">Thanks</p>
                    </div>
                    <!-- invoice footer  -->
                    <div class="absolute bottom-0 left-0 w-full border-t border-t-slate-700 p-5 flex flex-col items-center gap-2 justify-center bg-slate-800 text-white">
                        <h1 class="font-serif -mt-4">No-57, Oathaphayar st, Bo Sein Mhan Ward,Bahan, Yangon</h1>
                        <p class="text-center font-serif">09-409709911, 09-409709922, 09-409709933</p>
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