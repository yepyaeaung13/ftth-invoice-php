<?php include "partials/head.php" ?>

<main class="h-screen w-full flex flex-col">
    <?php include "partials/subnav.php" ?>

    <div class="bg-white p-5 flex justify-center shadow-md">
        <h1 class="font-medium font-serif text-xl">Settings</h1>
    </div>

    <div class="bg-slate-300 h-full p-5">
        <div class="w-full flex flex-col items-center justify-center gap-5 bg-white">
            <form action="/settings/backup" method="post" class="w-96 flex justify-between items-center p-5">
                <label for="">SQL Database Backup</label>
                <input type="hidden" name="export-type" value="sql">
                <input type="submit" value="Backup" class="px-2 py-1 bg-blue-600 text-white rounded-md">
            </form>
            <div class="w-full px-5 flex flex-col justify-center items-center gap-3 pb-5">
                <h1 class="font-medium font-serif">Backup Files</h1>
                <div class="border border-collapse">
                    <div>
                        <div class="bg-slate-200 font-serif grid grid-cols-12">
                            <span class="col-span-1 text-center px-2 py-1 border border-slate-400">No</span>
                            <span class="col-span-2 text-center px-2 py-1 border border-slate-400">Date</span>
                            <span class="col-span-3 text-center px-2 py-1 border border-slate-400">File Name</span>
                            <span class="col-span-1 text-center px-2 py-1 border border-slate-400">File Size</span>
                            <span class="col-span-5 text-center px-2 py-1 border border-slate-400">Location</span>
                        </div>
                    </div>
                    <div>
                        <?php foreach ($backup_files as $file) : ?>
                            <div class="w-full text-nowrap grid grid-cols-12">
                                <span class="col-span-1 flex items-center justify-center px-2 py-1 border border-slate-400"><?= $file['id'] ?></span>
                                <span class="col-span-2 flex items-center px-2 py-1 border border-slate-400"><?= $file['created_at'] ?></span>
                                <span class="col-span-3 px-2 py-1 border border-slate-400 flex gap-2 items-center">
                                    <?= $file['name'] ?>
                                </span>
                                <span class="col-span-1 flex items-center px-2 py-1 border border-slate-400"><?= $file['file_size'] ?></span>
                                <span class="col-span-5 flex items-center text-nowrap px-2 py-1 border border-slate-400"><?= $file['location'] ?></span>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>

    </div>

</main>

<?php include "partials/footer.php" ?>