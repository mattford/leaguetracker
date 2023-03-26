<script setup>
defineProps({
    iconName: String
});
</script>

<template>
    <i :class="`bi bi-${iconName}`"></i>
</template>