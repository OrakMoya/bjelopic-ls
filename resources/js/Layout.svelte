<script>
    import { Link, page } from "@inertiajs/svelte";
    import Nav from "./Shared/Nav.svelte";

    const infoLinks = [
        { id: 1, page: "/about", name: "O nama" },
        { id: 3, page: "/history", name: "Povijest" },
        {
            id: 4,
            page: "https://blog.bjelopic.com/kontakt",
            name: "Kontakt",
        },
        { id: 5, page: "/gallery", name: "Galerija" },
    ];
    const socialsLinks = [
        {
            id: 1,
            page: "https://www.facebook.com/bjelopic",
            name: "Facebook",
        },
        {
            id: 2,
            page: "https://www.instagram.com/bjelopic/",
            name: "Instagram",
        },
        {
            id: 3,
            page: "https://github.com/OrakMoya/bjelopic",
            name: "GitHub",
        },
        {
            id: 4,
            page: "https://www.youtube.com/@bjelopic",
            name: "YouTube",
        },
    ];
    const navigationSections = [
        { id: 1, section: "Informacije", links: infoLinks },
        { id: 2, section: "Društvene mreže", links: socialsLinks },
    ];
</script>

<svelte:head>
    <title>BjeloPIC</title>
</svelte:head>

<main
    class="min-h-screen"
    style="
     background: rgb(21,12,70);
background: linear-gradient(354deg, rgba(21,12,70,1) 0%, rgba(1,0,18,1) 100%);
    "
>
    <header class="relative z-10 bg-black text-bjelopic_white">
        <section
            class="px-6 py-4 max-w-screen-xl flex flex-col sm:flex-row justify-between items-center mx-auto"
        >
            <div class="flex items-center gap-x-5">
                <Link href="/" method="get">
                    <div class="flex items-center gap-x-3">
                        <div>
                            <img
                                src="logo.png"
                                alt="bjelopic-logo"
                                class="w-14"
                            />
                        </div>
                        <span class="text-2xl"
                            >Bjelo<b class="text-bjelopic_red">PIC</b>
                        </span>
                    </div>
                </Link>
            </div>
            <Nav />
        </section>
    </header>

    <section
        class="px-6 py-4 max-w-screen-xl mx-auto text-bjelopic_white h-full min-h-max"
    >
        <slot />
    </section>

    <footer class="bg-black text-white py-5 px-2 mt-8 w-full">
        <div
            class="flex flex-wrap justify-center sm:justify-around max-w-screen-xl mx-auto my-4"
        >
            <div class="flex flex-col items-center sm:block">
                <a href="/">
                    <img class="w-8" src="logo.png" alt="" />
                </a>
                <span class="text-2xl font-bold">Bjelo<span class="text-bjelopic_red">PIC</span></span>
                <p>Bjelovarski filmski studio</p>
            </div>
            <div class="basis-full sm:hidden"></div>
            <div class="flex justify-between my-4">
                {#each navigationSections as linkSection}
                    <nav class="w-40 min-w-fit">
                        <p class="font-bold text-xl">{linkSection.section}</p>
                        {#each linkSection.links as link}
                            <a
                                class="block transition-all hover:font-bold"
                                href={link.page}>{link.name}</a
                            >
                        {/each}
                    </nav>
                {/each}
            </div>
            <span class="w-full text-center font-bold basis-full mt-4"
                >&copy; {new Date().getUTCFullYear()} BjeloPIC | Sva prava pridržana</span
            >
        </div>
    </footer>
</main>
