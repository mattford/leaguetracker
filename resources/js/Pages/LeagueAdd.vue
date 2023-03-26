<script setup>
import BsIcon from '../Components/BsIcon.vue';
import Layout from '../Components/Layout.vue';
</script>

<script>
export default {
    data() {
        return {
            name: "",
            divisions: [],
            selectedTeam: {},
        };
    },
    methods: {
        addDivision() {
            this.divisions.push({
                name: "",
                teams: [],
            });
        },
        deleteDivision(division) {
            this.divisions = this.divisions.filter(d => d !== division);
            this.selectedTeam = {};
        },
        addTeam(division) {
            division.teams.push({
                name: "",
                players: [],
            });
        },
        deleteTeam(division, team) {
            division.teams = division.teams.filter(t => t !== team);
            this.selectedTeam = {};
        },
        selectTeam(divisionIdx, teamIdx) {
            this.selectedTeam[divisionIdx] = this.divisions[divisionIdx].teams[teamIdx];
        },
        addPlayer(team) {
            team.players.push({ name: "" });
        },
        deletePlayer(team, player) {
            team.players = team.players.filter(p => p !== player);
        }
    },
    components: { BsIcon }
}
</script>

<template>
    <Layout title="New League">
        <h1>Editing {{ name }}</h1>
        <div class="mb-3">
            <label for="leagueTitleInput" class="form-label">Name</label>
            <input type="text" class="form-control" id="leagueTitleInput" placeholder="Name of your League" v-model="name"
                aria-label="League name">
        </div>
        <h2>Divisions <button class="btn btn-primary float-end" @click="addDivision"><BsIcon icon-name="plus-circle" /> Add Division</button></h2>
        <div class="clearfix"></div>
        <div class="accordion mb-1" id="divisionList">
            <div class="accordion-item" v-for="(division, divisionIdx) in divisions">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        :data-bs-target="`#collapse${divisionIdx}`" aria-expanded="true"
                        :aria-controls="`collapse${divisionIdx}`">
                        <input @click.stop type="text" class="form-control me-3" id="divisionNameInput"
                            placeholder="Division name" v-model="division.name" aria-label="Division name">
                        <button class="btn btn-danger me-3" @click.stop.prevent="deleteDivision(division)">
                            <BsIcon icon-name="trash" />
                        </button>
                    </button>
                </h2>
                <div :id="`collapse${divisionIdx}`" class="accordion-collapse collapse show" data-bs-parent="#divisionList">
                    <div class="accordion-body">
                        <h4>Teams <button class="btn btn-primary float-end" @click="addTeam(division)"><BsIcon icon-name="plus-circle" /> Add Team</button></h4>
                        <div class="clearfix"></div>
                        <small class="text-body-secondary" v-if="division.teams.length === 0">No teams have been configured</small>
                        <div v-if="division.teams.length > 0" class="container-fluid mt-1">
                            <div class="row">
                                <div class="col">
                                    <div class="list-group">
                                        <a class="list-group-item list-group-item-action"
                                            :class="{ active: team === selectedTeam[divisionIdx] }"
                                            v-for="(team, teamIdx) in division.teams"
                                            @click="selectTeam(divisionIdx, teamIdx)">
                                            <div class="d-flex">
                                                <input type="text" class="form-control flex-grow-1 me-3"
                                                    :id="`teamNameInput${teamIdx}`" placeholder="Team name"
                                                    v-model="team.name" aria-label="Team name">

                                                <button class="btn btn-danger"
                                                    @click="deleteTeam(division, team)"><BsIcon icon-name="trash" /></button>

                                            </div>

                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <template v-if="selectedTeam[divisionIdx] !== undefined">
                                        <h5>Players <button @click="addPlayer(selectedTeam[divisionIdx])" class="float-end btn btn-primary"><BsIcon icon-name="person-plus-fill" /> Add Player</button></h5>
                                        <div class="clearfix"></div>
                                        <ul class="list-group mt-1">
                                            <li v-for="(player, playerIdx) in selectedTeam[divisionIdx].players" class="list-group-item d-flex">
                                                <input type="text" class="form-control flex-grow-1 me-3"
                                                    :id="`playerNameInput${teamIdx}-${playerIdx}`" placeholder="Player name"
                                                    v-model="player.name" aria-label="Player name">
                                                <button class="btn btn-danger"
                                                    @click="deletePlayer(selectedTeam[divisionIdx], player)"><BsIcon icon-name="trash" /></button>
                                            </li>
                                        </ul>

                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
            <button class="btn btn-primary">Save</button>
        </div>


    </Layout>
</template>