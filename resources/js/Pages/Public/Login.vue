<script setup>
import { useAuth } from "@/Composables/useAuth";
const { loginForm, login } = useAuth();

import { useFormHandler } from "@/Composables/useFormHandler";
const { flash } = useFormHandler();

import BaseInput from "@/Components/Base/BaseInput.vue";
import BaseButton from "@/Components/Base/BaseButton.vue";
import BaseAlert from "@/Components/Base/BaseAlert.vue";
</script>

<template>
    <body class="text-center">
        <main class="form-signin">
            <img
                class="mb-4"
                src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg"
                alt=""
                width="72"
                height="57"
            />

            <BaseAlert
                type="success"
                :message="flash.success"
            />

            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
            <form @submit.prevent="login">
                <BaseInput
                    id="email"
                    label="Email"
                    placeholder="Email"
                    v-model="loginForm.email"
                />
                <BaseAlert 
                    type="danger"
                    :message="loginForm.errors.email"
                />
                <BaseInput 
                    id="password"
                    label="Password"
                    placeholder="Password"
                    v-model="loginForm.password"
                    type="password"
                />
                <BaseAlert type="danger" :message="loginForm.errors.password" />
                <BaseButton type="submit">Login</BaseButton>
            </form>
        </main>
    </body>
</template>

<style scoped>
.form-signin {
    width: 100%;
    max-width: 350px;
    padding: 15px;
    margin: 50px auto;
}

.form-signin .checkbox {
    font-weight: 400;
}

.form-signin .form-floating:focus-within {
    z-index: 2;
}

.form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
</style>
