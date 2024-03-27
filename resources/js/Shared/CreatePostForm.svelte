<script>
    import { useForm } from "@inertiajs/svelte";
    import { Input } from "./Components/Input";
    import { Button } from "./Components/Button";
    import DatePicker from "./Components/DatePicker/DatePicker.svelte";

    let form = useForm({
        title: null,
        subject: null,
        subtitle: null,
        publication_date: null,
    });

    function handleSubmit() {
        let temp = $form.publication_date;
        $form.publication_date = $form.publication_date.toString();
        $form.post("/createpost");
        $form.publication_date = temp;
    }

</script>

<section>
    <form on:submit|preventDefault={handleSubmit} class="flex flex-col gap-y-4">
        <Input bind:value={$form.title} type="text" placeholder="Title" />
        <Input bind:value={$form.subtitle} type="text" placeholder="Subtitle" />
        <Input bind:value={$form.subject} type="text" placeholder="Subject" />
        <DatePicker bind:value={$form.publication_date}  />
        <Button class="w-fit text-right" type="submit" >Submit</Button>
    </form>
</section>
