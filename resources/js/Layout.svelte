<script>
    import { Link, page } from "@inertiajs/svelte";
    import Nav from "./Shared/Nav.svelte";
</script>

<svelte:head>
    <title>BjeloPIC</title>
</svelte:head>

<header class="bg-black text-white">
    <section
        class="px-6 py-4 max-w-screen-xl flex flex-col sm:flex-row justify-between items-center mx-auto"
    >
        <div class="flex items-center gap-x-5">
            <Link href="/" method="get">
                <div class="flex items-center gap-x-3">
                    <div>
                        <img src="logo.png" alt="bjelopic-logo" class="w-14" />
                    </div>
                    <span class="text-2xl">Bjelo<b>PIC</b></span>
                </div>
            </Link>
            {#if $page.props.username}
                <span>Welcome back, {$page.props.username}.</span>
            {/if}
        </div>
        <Nav />
    </section>
</header>

<section class="px-6 py-4 max-w-screen-xl mx-auto">
    <slot />
</section>
