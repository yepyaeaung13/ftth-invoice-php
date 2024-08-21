<?php include base_path("views/partials/head.php") ?>

<main class="h-screen w-full flex flex-col">
    <?php include base_path("views/partials/subnav.php") ?>

    <div class="">
        <!-- sub nav tab  -->
        <div class="grid grid-cols-3 px-5 py-5">
            <div class="flex items-center gap-2">
                <div id="edit-btn-container" class="">
                    <a href="/plans/new" class="bg-blue-500 rounded-md px-3 py-1 text-white">New</a>
                    <button id="edit-btn" class="bg-blue-500 rounded-md px-3 py-1 text-white">Edit</button>
                </div>
                <div id="edit-btn-group" class="hidden items-center gap-2">
                    <button id="edit-confirm-btn" class="bg-blue-500 rounded-md px-3 py-1 text-white">Confirm</button>
                    <a href="" id="edit-cancel-btn" class="bg-slate-500 rounded-md px-3 py-1 text-white">Cancel</a>
                </div>
            </div>
            <div class="flex justify-center items-center gap-3">
                <a href="/plans" class="text-blue-500">Plans</a>
                <span>/</span>
                <a href="" class="px-2 rounded-md bg-blue-500 text-white border hover:bg-white hover:text-blue-500 hover:border-blue-500 duration-150"><?= $plan['name'] ?></a>
            </div>
            <div class="flex justify-end items-center">
            </div>
        </div>

        <div class="overflow-y-scroll bg-slate-200 px-5 py-5">
            <div class="bg-white p-5">
                <form id="edit-form" action="/plans/update" class="bg-white p-5 grid grid-cols-2 gap-5 pointer-events-none" method="post">
                    <div class="flex gap-3 items-center">
                        <label for="" class="font-medium">Plan Id</label>
                        <input type="text" value="<?= $plan['id'] ?>" name="id" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500">
                    </div>
                    <div class="flex gap-3 items-center">
                        <label for="" class="font-medium">Plan Status</label>
                        <select type="text" name="status" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500">
                            <option value="active" <?= $plan['status'] == "active" ? "selected" : "" ?>>active</option>
                            <option value="inactive" <?= $plan['status'] == "inactive" ? "selected" : "" ?>>inactive</option>
                        </select>
                    </div>
                    <div class="flex gap-3 items-center">
                        <label for="" class="font-medium">Plan Name</label>
                        <input type="text" value="<?= $plan['name'] ?>" name="name" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500">
                    </div>
                    <div class="flex gap-3 items-center">
                        <label for="" class="font-medium">Price</label>
                        <input type="text" value="<?= $plan['price'] ?>" name="price" class="w-96 px-1 outline-none border-b border-b-slate-300 focus:border-b-slate-500">
                    </div>
                    <input type="submit" id="edit-submit-btn" class="hidden">
                </form>
            </div>
        </div>
    </div>

</main>

<?php include base_path("views/partials/footer.php") ?>