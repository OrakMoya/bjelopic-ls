<script>
    import { Button, buttonVariants } from "../Shared/Components/Button";
    import GalleryItem from "../Shared/GalleryItem.svelte";
    import { page } from "@inertiajs/svelte";
    import * as Dialog from "../Shared/Components/Dialog";
    import * as Carousel from "../Shared/Components/Carousel";
    import Autoplay from "embla-carousel-autoplay";
    import CreatePostForm from "../Shared/CreatePostForm.svelte";

    export let posts;

    let dialogOpened = false;

    function updateDialog(status) {
        status === "Post created!"
            ? (dialogOpened = false)
            : (dialogOpened = dialogOpened);
    }
    $: updateDialog($page.props.status);

    const plugin = Autoplay({ delay: 7000, stopOnInteraction: true });
</script>

<svelte:head>
    <title>Home</title>
</svelte:head>

<main>
    <section
        class="hidden sm:block relative opacity-55 md:-mb-8 md:-mt-2 lg:-mb-12 lg:-mt-4 transition-all duration-300"
    >
        <h1
            class="relative text-center text-7xl -mb-5 md:text-9xl lg:text-[192px] transition-all duration-300"
            style="-webkit-mask-image: -webkit-linear-gradient(
            top,
            rgba(0, 0, 0, 1),
            rgba(0, 0, 0, 1) 10%,
            rgba(0, 0, 0, 0) 75%,
            rgba(0, 0, 0, 0)
        );"
        >
            Bjelo<b class="text-bjelopic_red">PIC</b>
        </h1>
    </section>
    <div class="px-2 sm:px-10 relative transition-all overflow-x-hidden">
        {#if posts.length != 0}
            <section>
                <Carousel.Root
                    class="w-full"
                    opts={{ loop: true, duration: 25 }}
                    plugins={[plugin]}
                    on:mouseenter={plugin.stop}
                    on:mouseleave={plugin.play}
                >
                    <Carousel.Content>
                        {#each posts as post}
                            <Carousel.Item>
                                <GalleryItem
                                    title={post.title}
                                    subtitle={post.subtitle}
                                    subject={post.subject}
                                />
                            </Carousel.Item>
                        {/each}
                    </Carousel.Content>
                    <Carousel.Previous variant="ghost" class="invisible sm:visible" />
                    <Carousel.Next variant="ghost" class="invisible sm:visible" />
                </Carousel.Root>
            </section>
        {/if}
        {#if $page.props.username}
            <div class="mb-4">
                <Dialog.Root bind:open={dialogOpened}>
                    <Dialog.Trigger
                        on:click={() => (dialogOpened = true)}
                        class={buttonVariants({ variant: "outline" })}
                        >+</Dialog.Trigger
                    >
                    <Dialog.Content>
                        <Dialog.Header>
                            <Dialog.Title>Add Post</Dialog.Title>
                        </Dialog.Header>
                        <CreatePostForm />
                    </Dialog.Content>
                </Dialog.Root>
            </div>
        {/if}
    </div>
</main>
