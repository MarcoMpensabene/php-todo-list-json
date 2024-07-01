const { createApp } = Vue

createApp({
    data() {
        return {
            toDoList: [],
        }
    },
    methods: {
        getData() {
            axios.get('./script/script.php', {
                params: {

                }
            })
                .then((response) => {
                    console.log(response);
                    this.toDoList = response.data;
                })
                .catch(function (error) {
                    console.log(error);
                })
                .finally(function () {
                    // always executed
                });
        },
    },
    created() {
        this.getData();
    }

}).mount('#app')