<script>
    import {page} from '@inertiajs/svelte';
    import { AspectRatio } from "./Components/AspectRatio";
    export let title = "Default Title";
    export let subtitle = "Default Subtitle";
    export let subject = "Default Subject";
    export let id;
</script>

<section class="flex flex-col md:flex-row gap-x-8 gap-y-4 mb-5">
    <div class="w-full md:w-2/3 hover:opacity-80 transition-all ">
        <AspectRatio ratio={16 / 9} class="bg-black rounded-xl overflow-clip">
            <img src="generic_thumbnail.png" class="w-full" alt="thumbnail" />
        </AspectRatio>
    </div>
    <div class="text-center md:text-left">
        <h2 class="text-2xl md:text-2xl lg:text-3xl font-bold">{title}</h2>
        <h2 class="lg:text-lg  ">{subtitle}</h2>
        <h2 class="lg:text-lg  ">{subject}</h2>
    </div>
</section>
