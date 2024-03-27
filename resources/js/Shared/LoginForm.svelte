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
        email: null,
        password: null,
        rememberme: null,
    });

    function handleSubmit() {
        $form.post("/login");
    }
</script>

<section>
    <Card.Root>
        <Card.Header>
            <Card.Title>Login</Card.Title>
        </Card.Header>
        <Card.Content>
            <form
                on:submit|preventDefault={handleSubmit}
                class="flex flex-col gap-y-2"
            >
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
                {#if $form.errors.password}
                    <Alert.Root variant="destructive">
                        <CircleAlert class="h-4 w-4" />
                        <Alert.Title class="font-normal">{$form.errors.password}</Alert.Title>
                    </Alert.Root>
                {/if}
                <div class="flex items-center space-x-2">
                    <Checkbox
                        bind:checked={$form.rememberme}
                        id="rememberme"
                        variant="outline"
                    />
                    <Label
                        class="text-sm font-medium leading-none"
                        for="rememberme">Remember me</Label
                    >
                </div>

                <div class="flex justify-end">
                    <Button
                        class="w-min mt-2"
                        variant="outline"
                        type="submit"
                        disabled={$form.processing}>Login</Button
                    >
                </div>
            </form>
        </Card.Content>
    </Card.Root>
</section>
