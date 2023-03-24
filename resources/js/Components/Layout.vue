<script>
    import AppHead from "./AppHead.vue";
    export default {
        components: {AppHead},
        props: {
            title: String
        }
    }
</script>
<template>
    <AppHead :title="title" />
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">WSM Open Badminton Club</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Leagues</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Games</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div
        class="container pv-1"
        style="overflow-y: auto; height: calc(100vh - 56px - 40px)"
    >
        <slot></slot>
    </div>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            Carefully crafted by Matt
        </div>
    </nav>

</template>
