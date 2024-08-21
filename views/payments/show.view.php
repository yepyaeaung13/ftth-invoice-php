<?php include base_path("views/partials/head.php") ?>

<main class="h-screen w-full flex flex-col">
    <?php include base_path("views/partials/subnav.php") ?>

    <div class="relative h-full">
        <!-- sub nav tab  -->
        <div class="grid grid-cols-3 px-5 py-5">
            <div class="flex items-center gap-2">
                <div id="edit-btn-container" class="flex items-center gap-2">
                    <button id="edit-btn" class="bg-blue-500 rounded-md px-3 py-1 text-white">Edit</button>
                    <button id="delete-btn" class="bg-red-500 rounded-md px-3 py-1 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>
                    </button>

                    <!-- delete form  -->
                    <div id="createFormContainer" class="absolute top-0 left-0 z-50 w-full h-full bg-black bg-opacity-50 hidden justify-center items-center">
                        <div class="w-80 bg-white border rounded-md shadow-md">

                            <!-- create projects form  -->
                            <form action="/payments/delete" method="post" id="createForm" class="p-5 flex flex-col justify-center items-center gap-2">
                                <input type="hidden" name="id" value="<?= $payment['id'] ?>">
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
                <a href="/payments" class="text-blue-500">Payments</a>
                <span>/</span>
                <a href="" class="px-2 rounded-md bg-blue-500 text-white border hover:bg-white hover:text-blue-500 hover:border-blue-500 duration-150"><?= $payment['payment_no'] ?></a>
                <span>/</span>
                <a href="/invoices/show?id=<?= $payment['invoice_id'] ?>" class="text-blue-500"><?= $payment['invoice_no'] ?></a>
            </div>
            <div class="flex justify-end gap-2">
                <a href="viber://chat?number=<?= $payment['phone'] ?>" class="flex items-center gap-1 border border-blue-500 px-2 py-1 rounded-md">
                    <svg class="size-5" fill="#3f00b1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M444 49.9C431.3 38.2 379.9 .9 265.3 .4c0 0-135.1-8.1-200.9 52.3C27.8 89.3 14.9 143 13.5 209.5c-1.4 66.5-3.1 191.1 117 224.9h.1l-.1 51.6s-.8 20.9 13 25.1c16.6 5.2 26.4-10.7 42.3-27.8 8.7-9.4 20.7-23.2 29.8-33.7 82.2 6.9 145.3-8.9 152.5-11.2 16.6-5.4 110.5-17.4 125.7-142 15.8-128.6-7.6-209.8-49.8-246.5zM457.9 287c-12.9 104-89 110.6-103 115.1-6 1.9-61.5 15.7-131.2 11.2 0 0-52 62.7-68.2 79-5.3 5.3-11.1 4.8-11-5.7 0-6.9 .4-85.7 .4-85.7-.1 0-.1 0 0 0-101.8-28.2-95.8-134.3-94.7-189.8 1.1-55.5 11.6-101 42.6-131.6 55.7-50.5 170.4-43 170.4-43 96.9 .4 143.3 29.6 154.1 39.4 35.7 30.6 53.9 103.8 40.6 211.1zm-139-80.8c.4 8.6-12.5 9.2-12.9 .6-1.1-22-11.4-32.7-32.6-33.9-8.6-.5-7.8-13.4 .7-12.9 27.9 1.5 43.4 17.5 44.8 46.2zm20.3 11.3c1-42.4-25.5-75.6-75.8-79.3-8.5-.6-7.6-13.5 .9-12.9 58 4.2 88.9 44.1 87.8 92.5-.1 8.6-13.1 8.2-12.9-.3zm47 13.4c.1 8.6-12.9 8.7-12.9 .1-.6-81.5-54.9-125.9-120.8-126.4-8.5-.1-8.5-12.9 0-12.9 73.7 .5 133 51.4 133.7 139.2zM374.9 329v.2c-10.8 19-31 40-51.8 33.3l-.2-.3c-21.1-5.9-70.8-31.5-102.2-56.5-16.2-12.8-31-27.9-42.4-42.4-10.3-12.9-20.7-28.2-30.8-46.6-21.3-38.5-26-55.7-26-55.7-6.7-20.8 14.2-41 33.3-51.8h.2c9.2-4.8 18-3.2 23.9 3.9 0 0 12.4 14.8 17.7 22.1 5 6.8 11.7 17.7 15.2 23.8 6.1 10.9 2.3 22-3.7 26.6l-12 9.6c-6.1 4.9-5.3 14-5.3 14s17.8 67.3 84.3 84.3c0 0 9.1 .8 14-5.3l9.6-12c4.6-6 15.7-9.8 26.6-3.7 14.7 8.3 33.4 21.2 45.8 32.9 7 5.7 8.6 14.4 3.8 23.6z" />
                    </svg>
                    <p class="text-blue-800 font-medium">Viber</p>
                </a>
            </div>

        </div>

        <div class="overflow-y-scroll bg-slate-200 px-5 py-5">
            <div class="bg-white p-5">
                <form action="/payments/update" id="edit-form" class="bg-white p-5 grid grid-cols-2 gap-5 pointer-events-none" method="post">
                    <input type="hidden" name="payment_id" value="<?= $payment['id'] ?>">

                    <div class="flex gap-3 items-center">
                        <label for="" class="font-medium">Payment-No</label>
                        <input type="text" name="ipnet_id" value="<?= $payment['payment_no'] ?>" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500 pointer-events-none">
                    </div>
                    <div class="flex gap-3 items-center">
                        <label for="" class="font-medium">IPNET-ID</label>
                        <input type="text" name="ipnet_id" value="<?= $payment['ipnet_id'] ?>" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500 pointer-events-none">
                    </div>
                    <div class="flex gap-3 items-center">
                        <label for="" class="font-medium">Invoice No</label>
                        <input type="text" name="invoice_no" value="<?= $payment['invoice_no'] ?>" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500 pointer-events-none">
                    </div>
                    <div class="flex gap-3 items-center">
                        <label for="" class="font-medium">Payment Date</label>
                        <input type="date" name="payment_date" value="<?= $payment['date'] ?>" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500">
                    </div>
                    <div class="flex gap-3 items-center">
                        <label for="" class="font-medium">Payment Method</label>
                        <select name="payment_method" id="payment-method" class="w-24 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500">
                            <option value="Cash" <?= $payment['method'] == "Cash" ? "selected" : "" ?>>Cash</option>
                            <option value="KPay" <?= $payment['method'] == "KPay" ? "selected" : "" ?>>KPay</option>
                        </select>
                    </div>
                    <div class="flex gap-3 items-center">
                        <label for="" class="font-medium">Amount</label>
                        <input type="number" name="amount" value="<?= $payment['amount'] ?>" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500">
                    </div>
                    <input type="submit" id="edit-submit-btn" class="hidden">
                </form>
            </div>
        </div>
    </div>

</main>

<?php include base_path("views/partials/footer.php") ?>