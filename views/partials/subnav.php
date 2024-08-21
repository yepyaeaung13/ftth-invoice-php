<nav class="bg-blue-500 text-white px-5 flex gap-10 items-center shadow-lg">
    <a href="/" class="px-5 py-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
        </svg>
    </a>
    <ul class="flex items-center font-serif">
        <li><a href="/dashboard" class="px-5 py-3 <?= uris("/dashboard") ? "bg-white text-black" : "" ?>">Dashboard</a></li>

        <li><a href="/users" class="px-5 py-3 <?= uris("/users") || uris("/users/show") || uris("/users/new") ? "bg-white text-black" : "" ?>">users</a></li>

        <li><a href="/subscriptions" class="px-5 py-3 <?= uris("/subscriptions") || uris("/subscriptions/show") || uris("/subscriptions/new") ? "bg-white text-black" : "" ?>">subscriptions</a></li>

        <li><a href="/invoices" class="px-5 py-3 <?= uris("/invoices") || uris("/invoices/show") || uris("/invoices/new") ? "bg-white text-black" : "" ?>">invoices</a></li>

        <li><a href="/payments" class="px-5 py-3 <?= uris("/payments") || uris("/payments/show") || uris("/payments/new") ? "bg-white text-black" : "" ?>">payments</a></li>

        <li><a href="/plans" class="px-5 py-3 <?= uris("/plans") || uris("/plans/show") || uris("/plans/new") ? "bg-white text-black" : "" ?>">plans</a></li>
    </ul>
</nav>