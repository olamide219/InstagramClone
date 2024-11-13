<template>
    <div>
        <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 ml-4" @click="followUser" v-text="buttonText"></button>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    props: ['userId', 'follows'],
    mounted() {
        console.log('component mounted');
    },

    data: function () {
        return {
            status: this.follows,
        }
    },

    methods: {
        followUser() {
            axios.post('/follow/' + this.userId)
            .then(response => {
                this.status = ! this.status
                console.log(response.data);
            })
            .catch(errors => {
                if (errors.response.status == 401) {
                    window.location = '/login';
                }
            });
        }
    },

    computed: {
        buttonText() {
            return (this.status) ? 'Unfollow' : 'follow';
        }
    }
}
</script>