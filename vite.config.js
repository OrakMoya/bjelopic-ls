import laravel from 'laravel-vite-plugin';
import {svelte} from "@sveltejs/vite-plugin-svelte";
import path from "path";

export default{
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        svelte(),
    ],
    resolve:{
        alias:{
            $lib: path.resolve("./resources/js"),
        }
    }
};
