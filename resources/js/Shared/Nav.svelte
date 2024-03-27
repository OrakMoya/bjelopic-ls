<script>
    import { inertia, Link, page } from "@inertiajs/svelte";
    import NavLink from "./NavLink.svelte";

</script>

<ul class="flex gap-x-4 items-baseline transition-all">
    <li>
        <NavLink href="/">Home</NavLink>
    </li>
    {#if $page.props.username}
        <li>
            <NavLink href="/settings">Settings</NavLink>
        </li>
        <li>
            <NavLink href="/profile">Profile</NavLink>
        </li>
        <li>
            <NavLink href="/logout">Logout</NavLink>
        </li>
    {:else}
        <li>
            <NavLink href="/login">Login</NavLink>
        </li>
        <li>
            <NavLink href="/register">Sign Up</NavLink>
        </li>
    {/if}
</ul>
