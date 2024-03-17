<script>
    import { useForm } from "@inertiajs/svelte";

    // your script goes here
    let form = useForm({
        email: null,
        password: null,
    })

    function handleSubmit() {
        $form.post('/login');
    }
</script>

<main>
    <form on:submit|preventDefault={handleSubmit} class="block">
        <input type="email" bind:value={$form.email} class="border" />
        {#if $form.errors.email}
            <span class="form-error">{$form.errors.email}</span>
        {/if}

        <input type="password" bind:value={$form.password} class="border" />
        {#if $form.errors.password}
            <span class="form-error">{$form.errors.password}</span>
        {/if}

        <button type="submit" disabled={$form.processing}>Submit</button>
    </form>
</main>
