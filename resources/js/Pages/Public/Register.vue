<script setup>
import { useForm, Head } from "@inertiajs/vue3";

import { useAuth } from "../../Composables/useAuth";
import BaseInput from "../../Components/Base/BaseInput.vue";
import BaseButton from "../../Components/Base/BaseButton.vue";

const { registerForm, register } = useAuth();
</script>

<template>
    <Head title="Register" />

    <main class="form-signin">
        <form @submit.prevent="register">
            <h1 class="h3 mb-3 fw-normal text-center">Create an Account</h1>
            <BaseInput
                id="name"
                label="Name"
                placeholder="Your Name"
                v-model="registerForm.name"
            />
            <BaseInput
                id="email"
                label="Email"
                placeholder="email"
                type="email"
                v-model="registerForm.email"
            />
            <BaseInput
                id="password"
                label="Password"
                placeholder="Password"
                type="password"
                v-model="registerForm.password"
            />
            <BaseInput
                id="password_confirmation"
                label="Password Confirmation"
                placeholder="Password"
                type="password"
                v-model="registerForm.password_confirmation"
            />

            <BaseButton type="submit">Register</BaseButton>
        </form>
        <p class="mt-5 mb-3 text-muted text-center">
            Already have an account?
            <a href="/login">Login</a>
        </p>
    </main>
</template>

<style scoped>
.form-signin {
    max-width: 330px;
    padding: 15px;
    margin: 50px auto;
}
</style>
