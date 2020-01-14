<template>
    <div>
        <h3 class="text-center">Make Lobby</h3>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form @submit.prevent="createGameroom">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" v-model="gameroom.name">
                    </div>

                    <div class="form-group">
                        <label>Which game</label>
                        <input type="text" name="game" class="form-control" v-model="gameroom.game">
                    </div>

                    <button type="submit" class="btn btn-primary">Make Lobby</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                gameroom: {}
            }
        },
        methods: {
            createGameroom() {
                this.axios
                    .post('api/gameroom/create', {
                        name: this.gameroom.name,
                        game: this.gameroom.game,
                    })

                    // hier vang je je succes af
                    .then(response => {
                        console.log(response),
                            this.$router.push({
                                name: 'home'
                            })
                    })
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }

</script>
