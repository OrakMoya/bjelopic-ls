<script>
    import { useForm } from "@inertiajs/svelte";
    import { Button } from "./Components/Button";
    import { Input } from "./Components/Input";
    import { Label } from "./Components/Label";
    import { Checkbox } from "./Components/Checkbox";
    import * as Card from "../Shared/Components/Card";
    import * as Alert from "../Shared/Components/Alert";
    import { CircleAlert } from "lucide-svelte";

    // your script goes here
    let form = useForm({
        username: null,
        email: null,
        password: null,
        password_confirmation: null,
        rememberme: null,
    });

    function handleSubmit() {
        $form.post("/register");
    }
</script>

<section>
    <Card.Root>
        <Card.Header>
            <Card.Title>Sign Up</Card.Title>
        </Card.Header>
        <Card.Content>
            <form
                on:submit|preventDefault={handleSubmit}
                class="flex flex-col gap-y-2"
            >
                <Label for="username">Name</Label>
                <Input
                    type="text"
                    bind:value={$form.username}
                    id="username"
                    placeholder="Petar Plinar"
                />
                {#if $form.errors.username}
                    <Alert.Root variant="destructive">
                        <CircleAlert class="h-4 w-4" />
                        <Alert.Title class="font-normal">{$form.errors.username}</Alert.Title>
                    </Alert.Root>
                {/if}


                <Label for="email">Email</Label>
                <Input
                    type="email"
                    bind:value={$form.email}
                    id="email"
                    placeholder="example@example.org"
                />
                {#if $form.errors.email}
                    <Alert.Root variant="destructive">
                        <CircleAlert class="h-4 w-4" />
                        <Alert.Title class="font-normal">{$form.errors.email}</Alert.Title>
                    </Alert.Root>
                {/if}

                <Label for="password" class="mt-2">Password</Label>
                <Input
                    id="password"
                    type="password"
                    bind:value={$form.password}
                    placeholder="hunter2"
                />
                <Label for="confirmpassword" class="mt-2">Confirm Password</Label>
                <Input
                    id="confirmpassword"
                    type="password"
                    bind:value={$form.password_confirmation}
                    placeholder="hunter2"
                />
                {#if $form.errors.password}
                    <Alert.Root variant="destructive">
                        <CircleAlert class="h-4 w-4" />
                        <Alert.Title class="font-normal">{$form.errors.password}</Alert.Title>
                    </Alert.Root>
                {/if}

                <div class="flex justify-end">
                    <Button
                        class="w-min mt-2"
                        variant="outline"
                        type="submit"
                        disabled={$form.processing}>Sign Up</Button
                    >
                </div>
            </form>
        </Card.Content>
    </Card.Root>
</section>
