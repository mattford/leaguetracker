<script setup>
    import { Link } from '@inertiajs/vue3';
    import Layout from "../Components/Layout.vue";
</script>

<template>
    <Layout title="Homepage">
        <h1>Welcome</h1>
        <Link href="/me">Profile</Link>
    </Layout>

</template>
