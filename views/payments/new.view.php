<?php include base_path("views/partials/head.php") ?>

<main class="h-screen w-full flex flex-col">
    <?php include base_path("views/partials/subnav.php") ?>

    <div class="">
        <!-- sub nav tab  -->
        <div class="grid grid-cols-3 items-center px-5 py-5">
            <div class="flex items-center gap-2">
                <div id="edit-btn-group" class="flex items-center gap-2">
                    <button id="create-confirm-btn" class="bg-blue-500 rounded-md px-3 py-1 text-white">Confirm</button>
                    <a href="/invoices/show?id=<?= $invoice['id'] ?>" id="create-cancel-btn" class="bg-slate-500 rounded-md px-3 py-1 text-white">Cancel</a>
                </div>
            </div>
            <div class="flex justify-center items-center gap-1 text-slate-700 text-lg font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <h1>Create New Payment</h1>
            </div>
        </div>

        <div class="overflow-y-scroll bg-slate-200 px-5 py-5">
            <form action="/payments/create" class="bg-white p-5 grid grid-cols-2 gap-5" method="post">
                <input type="hidden" name="invoice_id" value="<?= $invoice['id'] ?>">
                <div class="flex gap-3 items-center">
                    <label for="" class="font-medium">IPNET-ID</label>
                    <input type="text" name="ipnet_id" value="<?= $invoice['ipnet_id'] ?>" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500 pointer-events-none">
                </div>
                <div class="flex gap-3 items-center">
                    <label for="" class="font-medium">Invoice No</label>
                    <input type="text" name="invoice_no" value="<?= $invoice['invoice_no'] ?>" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500 pointer-events-none">
                </div>
                <div class="flex gap-3 items-center">
                    <label for="" class="font-medium">Payment Date</label>
                    <input type="date" name="payment_date" value="<?= date("Y-m-d") ?>" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500">
                </div>
                <div class="flex gap-3 items-center">
                    <label for="" class="font-medium">Payment No</label>
                    <input type="text" name="payment_no" value="<?= $next_pv_no ?>" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500">
                </div>
                <div class="flex gap-3 items-center">
                    <label for="" class="font-medium">Payment Method</label>
                    <select name="payment_method" id="payment-method" class="w-24 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500">
                        <option value="cash">Cash</option>
                        <option value="kpay">KPay</option>
                    </select>
                </div>
                <div class="flex gap-3 items-center">
                    <label for="" class="font-medium">Amount</label>
                    <input type="number" name="amount" value="<?= $invoice['total_amount'] - $invoice['discount_amount'] ?>" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500 pointer-events-none">
                </div>
                <input type="submit" id="create-submit-btn" class="hidden">
            </form>
        </div>
    </div>

</main>

<?php include base_path("views/partials/footer.php") ?>