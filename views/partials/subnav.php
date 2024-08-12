<nav class="bg-blue-500 text-white px-5 py-2 flex gap-10 items-center shadow-md">
    <a href="/">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
        </svg>
    </a>
    <ul class="flex gap-5">
        <li class="px-3 py-1 bg-opacity-90 rounded-md <?= uris("/dashboard") ? "bg-white text-black" : "" ?>"><a href="/dashboard">Dashboard</a></li>

        <li class="px-3 py-1 bg-opacity-90 rounded-md <?= uris("/users") ? "bg-white text-black" : "" ?>"><a href="/users">users</a></li>

        <li class="px-3 py-1 bg-opacity-90 rounded-md <?= uris("/subscriptions") ? "bg-white text-black" : "" ?>"><a href="/subscriptions">subscriptions</a></li>

        <li class="px-3 py-1 bg-opacity-90 rounded-md <?= uris("/invoices") ? "bg-white text-black" : "" ?>"><a href="/invoices">invoices</a></li>

        <li class="px-3 py-1 bg-opacity-90 rounded-md <?= uris("/payments") ? "bg-white text-black" : "" ?>"><a href="/payments">payments</a></li>

        <li class="px-3 py-1 bg-opacity-90 rounded-md <?= uris("/plans") ? "bg-white text-black" : "" ?>"><a href="/plans">plans</a></li>

        <li class="px-3 py-1 bg-opacity-90 rounded-md <?= uris("/setting") ? "bg-white text-black" : "" ?>"><a href="/setting">setting</a></li>
    </ul>
</nav>