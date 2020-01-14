<template>
    <div>
        <h3 class="text-center"> All Gamelobbies</h3>

        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th>GameroomID</th>
                    <th>Name</th>
                    <th>Game</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="gameroom in gamerooms" :key="gameroom.id">
                    <td>{{ gameroom.id }}</td>
                    <td>{{ gameroom.name}} </td>
                    <td>{{ gameroom.game }} </td>
                    <td>{{ gameroom.created_at }}</td>
                    <td>{{ gameroom.updated_at }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            gamerooms: []
        }
    },
    created() {
        this.axios
            .get('/api/gamerooms')
            .then(response => {
                this.gamerooms = response.data
            });
    }
}
</script>
