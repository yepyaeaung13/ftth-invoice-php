<?php include "partials/head.php" ?>

<main class="h-screen w-full flex flex-col">
    <?php include "partials/subnav.php" ?>

    <div class="bg-white p-5 flex justify-center">
        <h1 class="font-medium text-xl">Dashboard</h1>
    </div>

    <div class="p-5 flex flex-wrap justify-center gap-10 bg-slate-100">
        <div class="bg-white border border-slate-300 rounded-lg shadow-lg p-5 w-96 justify-center flex flex-col gap-5">
            <div class="">
                <h1 class="font-semibold text-xl">Users Analytics</h1>
            </div>
            <div class="flex justify-center">
                <svg width="200" height="200">
                    <circle cx="100" cy="100" r="80" stroke="blue" stroke-width="30" fill="none" class=""
                        stroke-dasharray="501.84271240234375" stroke-dashoffset="100"></circle>
                    <text fill="black" class="text-2xl font-bold" x="80" y="110">80%</text>
                </svg>
            </div>
            <div class="flex justify-between font-medium">
                <div class="flex items-center gap-2">
                    <button class="p-1.5 bg-slate-500 rounded-full"></button>
                    <p>Total - 100</p>
                </div>
                <div class="flex items-center gap-2">
                    <button class="p-1.5 bg-green-500 rounded-full"></button>
                    <p>Active - 80</p>
                </div>
                <div class="flex items-center gap-2">
                    <button class="p-1.5 bg-red-500 rounded-full"></button>
                    <p>Inactive - 20</p>
                </div>
            </div>
        </div>
        <div class="bg-white border border-slate-300 rounded-lg shadow-lg p-5 w-96 justify-center flex flex-col gap-5">
            <div class="">
                <h1 class="font-semibold text-xl">Invoices Analytics</h1>
            </div>
            <div class="flex justify-center">
                <svg width="200" height="200">
                    <circle cx="100" cy="100" r="80" stroke="blue" stroke-width="30" fill="none" class=""
                        stroke-dasharray="501.84271240234375" stroke-dashoffset="100"></circle>
                    <text fill="black" class="text-2xl font-bold" x="80" y="110">80%</text>
                </svg>
            </div>
            <div class="flex justify-between font-medium">
                <div class="flex items-center gap-2">
                    <button class="p-1.5 bg-slate-500 rounded-full"></button>
                    <p>Total - 60</p>
                </div>
                <div class="flex items-center gap-2">
                    <button class="p-1.5 bg-green-500 rounded-full"></button>
                    <p>Paid - 40</p>
                </div>
                <div class="flex items-center gap-2">
                    <button class="p-1.5 bg-red-500 rounded-full"></button>
                    <p>Unpaid - 20</p>
                </div>
            </div>
        </div>
        <div class="bg-white border border-slate-300 rounded-lg shadow-lg p-5 w-96 justify-center flex flex-col gap-5">
            <div class="">
                <h1 class="font-semibold text-xl">Subscription Analytics</h1>
            </div>
            <div class="flex justify-center">
                <svg width="200" height="200">
                    <circle cx="100" cy="100" r="80" stroke="blue" stroke-width="30" fill="none" class=""
                        stroke-dasharray="501.84271240234375" stroke-dashoffset="100"></circle>
                    <text fill="black" class="text-2xl font-bold" x="80" y="110">80%</text>
                </svg>
            </div>
            <div class="flex justify-between font-medium">
                <div class="flex items-center gap-2">
                    <button class="p-1.5 bg-blue-500 rounded-full"></button>
                    <p>Total - 80</p>
                </div>
                <div class="flex items-center gap-2">
                    <button class="p-1.5 bg-green-500 rounded-full"></button>
                    <p>Subs - 60</p>
                </div>
                <div class="flex items-center gap-2">
                    <button class="p-1.5 bg-slate-500 rounded-full"></button>
                    <p>Expired - 20</p>
                </div>
            </div>
        </div>
        <div class="w-full flex gap-5">
            <div class="w-1/2 bg-white border border-slate-300 rounded-lg shadow-lg p-5 justify-center flex flex-col gap-5">
                <div class="">
                    <h1 class="font-semibold text-xl">Mbps Analytics</h1>
                </div>
                <div class="flex justify-center">
                    <div class="w-48 h-48 rounded-full bg-blue-500" style="background: conic-gradient(
                from 0,
                    blue 0,
                    blue 30%,
                    teal 0,
                    teal 40%,
                    green 0,
                    green 50%,
                    yellow 0,
                    yellow 70%,
                    orange 0,
                    orange 90%,
                    red 0,
                    red 95%
                );">

                    </div>
                </div>
                <div class="grid grid-cols-4 gap-5 font-medium">
                    <div class="flex items-center gap-2">
                        <button class="p-1.5 bg-blue-500 rounded-full"></button>
                        <p>10 Mbps - 100</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <button class="p-1.5 bg-teal-500 rounded-full"></button>
                        <p>15 Mbps - 30</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <button class="p-1.5 bg-green-500 rounded-full"></button>
                        <p>20 Mbps - 10</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <button class="p-1.5 bg-yellow-500 rounded-full"></button>
                        <p>40 Mbps - 5</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <button class="p-1.5 bg-orange-500 rounded-full"></button>
                        <p>50 Mbps - 10</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <button class="p-1.5 bg-red-500 rounded-full"></button>
                        <p>75 Mbps - 10</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <button class="p-1.5 bg-gray-500 rounded-full"></button>
                        <p>100 Mbps - 10</p>
                    </div>
                </div>
            </div>
            <div class="w-1/2 bg-white border border-slate-300 rounded-lg shadow-lg p-5 justify-center flex flex-col gap-5">
                <div class="">
                    <h1 class="font-semibold text-xl">Mbps Analytics</h1>
                </div>
                <div class="flex justify-center">
                    <div class="w-48 h-48 rounded-full bg-blue-500" style="background: conic-gradient(
                from 0,
                    blue 0,
                    blue 50%,
                    yellow 0,
                    yellow 85%,
                    orange 0,
                    orange 95%,
                    gray 0,
                    gray 100%
                );">

                    </div>
                </div>
                <div class="grid grid-cols-4 gap-5 font-medium">
                    <div class="flex items-center gap-2">
                        <button class="p-1.5 bg-blue-500 rounded-full"></button>
                        <p>10 Mbps - 100</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <button class="p-1.5 bg-yellow-500 rounded-full"></button>
                        <p>15 Mbps - 30</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <button class="p-1.5 bg-orange-500 rounded-full"></button>
                        <p>20 Mbps - 10</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <button class="p-1.5 bg-orange-500 rounded-full"></button>
                        <p>40 Mbps - 5</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <button class="p-1.5 bg-orange-500 rounded-full"></button>
                        <p>50 Mbps - 10</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <button class="p-1.5 bg-orange-500 rounded-full"></button>
                        <p>75 Mbps - 10</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <button class="p-1.5 bg-orange-500 rounded-full"></button>
                        <p>100 Mbps - 10</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</main>

<?php include "partials/footer.php" ?>