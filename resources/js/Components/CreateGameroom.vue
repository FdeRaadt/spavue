<template>
    <div>
        <h3 class="text-center">Make Lobby</h3>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form @submit.prevent="createGameroom">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="gameroom.name">
                    </div>

                    <div class="form-group">
                        <label>Which game</label>
                        <input type="text" class="form-control" v-model="gameroom.game">
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
                    .post('api/gameroom/create',{
                    name: name,
                    game: game,
                    })

                    .then(response => (
                        this.$router.push({
                            name: 'create'
                        })
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }

</script>
