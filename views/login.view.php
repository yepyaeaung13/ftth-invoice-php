<?php include "partials/head.php" ?>


<main style="background-image: url(assets/photos/login.jpg);" class="bg-cover bg-center p-5 w-full h-screen flex flex-col gap-5 pt-28 items-center">
    <div>
        <h1 class="text-white text-2xl font-serif font-bold">FTTH Subscriptions & Invoice</h1>
    </div>
    <form action="" method="post" class="bg-slate-800 text-white bg-opacity-75 md:w-96 w-80 p-5 flex flex-col justify-center items-center gap-5 bg-third rounded-lg shadow-lg">
        <h1 class="text-center font-bold font-serif text-lg">Login with account</h1>
        <div class="w-full flex flex-col gap-3">
            <div class="flex flex-col gap-1">
                <label for="username">Username</label>
                <input type="text" email="username" id="username" name="username" placeholder="enter your username" class="border border-slate-500 rounded-md px-2 py-1 outline-none focus:border-blue-600 bg-slate-800 text-white bg-opacity-75" autofocus required>
            </div>
            <div class="flex flex-col gap-1">
                <label for="password">Password</label>
                <input type="password" email="password" id="password" name="password" placeholder="enter your password" class="border border-slate-500 rounded-md px-2 py-1 outline-none focus:border-blue-600 bg-slate-800 text-white bg-opacity-75" required>
            </div>
            <div class="flex items-center gap-1 px-2">
                <input type="checkbox" name="remember_me" id="show-password" class="cursor-pointer">
                <label for="show-password" class="cursor-pointer">Show Password</label>
            </div>
            <?php if (isset($_GET['username'])) : ?>
                <span class="text-red-500 bg-white rounded-md px-2 py-1">Username is incorrect.</span>
            <?php endif ?>
            <?php if (isset($_GET['password'])) : ?>
                <span class="text-red-500 bg-white rounded-md px-2 py-1">Password is incorrect.</span>
            <?php endif ?>
            <div class="flex justify-center">
                <input type="submit" value="Login" class="cursor-pointer bg-blue-600 w-1/2 py-1 rounded-md">
            </div>
        </div>
    </form>
    <!-- <form action="/accounts/create" method="post" class="bg-slate-800 text-white bg-opacity-75 md:w-96 w-80 p-5 flex flex-col justify-center items-center gap-5 bg-third rounded-lg">
        <h1 class="text-center font-bold font-serif text-lg">Create New account</h1>
        <div class="w-full flex flex-col gap-3">
            <div class="flex flex-col gap-1">
                <label for="name">Name</label>
                <input type="text" email="name" id="name" name="name" placeholder="enter your name" class="bg-slate-800 border border-slate-500 rounded-md px-2 py-1 outline-none focus:border-blue-600 bg-secondary text-black" required>
            </div>
            <div class="flex flex-col gap-1">
                <label for="username">Username</label>
                <input type="text" email="username" id="username" name="username" placeholder="enter your username" class="bg-slate-800 border border-slate-500 rounded-md px-2 py-1 outline-none focus:border-blue-600 bg-secondary text-black" required>
            </div>
            <div class="flex flex-col gap-1">
                <label for="password">Password</label>
                <input type="password" email="password" id="password" name="password" placeholder="enter your password" class="bg-slate-800 border border-slate-500 rounded-md px-2 py-1 outline-none focus:border-blue-600 bg-secondary text-black" required>
            </div>
            <div class="flex flex-col gap-1">
                <label for="confirm-password">Confirm password</label>
                <input type="password" email="confirm-password" id="confirm-password" name="confirm-password" placeholder="enter your confirm password" class="bg-slate-800 border border-slate-500 rounded-md px-2 py-1 outline-none focus:border-blue-600 bg-secondary text-black" required>
            </div>
            <div class="flex items-center gap-1 px-2">
                <input type="checkbox" name="remember_me" id="show-password" class="cursor-pointer">
                <label id="showPassword" for="show-password" class="cursor-pointer">Show Password</label>
            </div>
            <?php if (isset($_GET['accounts'])) : ?>
                <span class="text-red-500 bg-white rounded-md px-2 py-1">Username already exist.</span>
            <?php endif ?>
            <?php if (isset($_GET['password-match'])) : ?>
                <span class="text-red-500 bg-white rounded-md px-2 py-1">Password and Confirm password must be same.</span>
            <?php endif ?>
            <div class="flex justify-center">
                <input type="submit" value="Create" class="cursor-pointer bg-blue-600 w-1/2 py-1 rounded-md">
            </div>
        </div>
    </form> -->

    <div class="mt-auto font-medium flex justify-center text-white">
        <p>&copy; 2024 Ye Pyae Aung. All rights reserved.</p>
    </div>

    <div class="fixed top-44 right-60 text-white bg-slate-800 rounded-md p-5 flex flex-col gap-5">
        <h1 class="font-bold">Demo Account</h1>
        <div class="flex flex-col gap-1">
            <p>Username - <span class="font-bold">admin</span></p>
            <p>Password - <span class="font-bold">admin123</span></p>
        </div>
    </div>
</main>

<?php include "partials/footer.php" ?>