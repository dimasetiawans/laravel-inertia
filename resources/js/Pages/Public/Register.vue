<script setup>
import { Head } from "@inertiajs/vue3";
import { useAuth } from "@/Composables/useAuth";

import BaseInput from "@/Components/Base/BaseInput.vue";
import BaseButton from "@/Components/Base/BaseButton.vue";
import BaseAlert from "@/Components/Base/BaseAlert.vue";

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
            <BaseAlert 
                type="danger" 
                :message="registerForm.errors.name" 
            />

            <BaseInput
                id="email"
                label="Email"
                placeholder="email"
                type="email"
                v-model="registerForm.email"
            />
            <BaseAlert 
                type="danger" 
                :message="registerForm.errors.email" 
            />

            <BaseInput
                id="password"
                label="Password"
                placeholder="Password"
                type="password"
                v-model="registerForm.password"
            />
            <BaseAlert 
                type="danger" 
                :message="registerForm.errors.password"
            />
            
            <BaseInput
                id="password_confirmation"
                label="Password Confirmation"
                placeholder="Password"
                type="password"
                v-model="registerForm.password_confirmation"
            />
            <BaseAlert
                type="danger"
                :message="registerForm.errors.password_confirmations"
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
