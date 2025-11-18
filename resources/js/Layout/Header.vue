<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <nav class="navbar navbar-dark bg-dark px-3">
        <a class="navbar-brand" href="#">My App</a>

        <ul class="navbar-nav flex-row">
            <li class="nav-item mx-2">
                <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item mx-2">
                <Link class="nav-link" href="/logout">Logout</Link>
            </li>
        </ul>
    </nav>
</template>
