<script setup>
    import { Link } from '@inertiajs/vue3';
    import Layout from '../Components/Layout.vue';
    defineProps({
        leagues: Array
    })
</script>

<template>
    <Layout title="Leagues">
        <h1>
            Leagues
            <Link class="btn btn-primary" href="/leagues/new">Add</Link>
        </h1>
        <div class="card" v-for="league in leagues">
            <div class="card-body">
                <h5 class="card-title">{{ league.title }} <span class="badge bg-primary">Active</span></h5>
                <p class="card-text"></p>
                <ul class="nav">
                    <li class="nav-item">
                        <Link class="nav-link" :href="`/leagues/${league.id}/fixtures`">Fixtures</Link>
                    </li>
                    <li class="nav-item">
                        <Link class="nav-link" href="`/leagues/${league.id}/leaderboard`">Leaderboard</Link>
                    </li>
                </ul>
            </div>
        </div>
    </Layout>
</template>