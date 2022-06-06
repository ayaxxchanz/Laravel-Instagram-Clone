<template>
    <div>
        <button class="btn btn-primary btn btn-primary btn-sm pl-4 pr-4 ml-3" @click="followUser">Follow</button>
    </div>
</template>

<script>
import axios from 'axios'

export default {
    props: ['userId'],

    mounted() {
        console.log('Component mounted.')
    },

    methods: {
        followUser() {
            axios.post('/follow/' + this.userId)
                .then(response => {
                    alert(response.data);
                });
        }
    }
}
</script>
