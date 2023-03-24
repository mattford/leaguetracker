<script setup>
import { Head } from '@inertiajs/vue3'

defineProps({ title: String })
</script>

<template>
    <Head :title="title ? `${title} - WSM Open Badminton League` : 'WSM Open Badminton League'">
        <slot />
    </Head>
</template>
