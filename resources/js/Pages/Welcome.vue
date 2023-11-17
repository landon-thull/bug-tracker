<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';

defineProps<{
    canLogin?: boolean;
    canRegister?: boolean;
    laravelVersion: string;
    phpVersion: string;
}>();
</script>

<template>
    <Head title="Welcome" />

    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center bg-gray-100 selection:bg-red-500 selection:text-white"
    >
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center align-middle flex-col bg-white p-8 rounded shadow">
                <h1 class="text-3xl text-center font-bold text-gray-800">Bug Tracker</h1>
                <div class=" h-0.5 rounded-full my-4 bg-gray-500 w-64"></div>
                <div v-if="canLogin" class="flex w-full justify-around justify-center">
                    <Link
                        v-if="$page.props.auth.user"
                        :href="route('dashboard')"
                        class="font-semibold text-gray-600 hover:text-gray-900"
                    >
                        Dashboard
                    </Link>
                    <template v-else>
                        <Link
                            :href="route('login')"
                            class="font-semibold text-gray-600 hover:text-gray-900"
                        >Log in</Link>

                        <Link
                            v-if="canRegister"
                            :href="route('register')"
                            class="ms-4 font-semibold text-gray-600 hover:text-gray-900"
                        >Register</Link
                        >
                    </template>
                </div>
            </div>
        </div>
    </div>
</template>
