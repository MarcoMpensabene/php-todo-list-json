const { createApp } = Vue

createApp({
    data() {
        return {
            toDoList: [],
            newTask: '',
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
    addItem() {
        if (this.toAddItem.trim() !== "") {
            axios.get("./src/utilities/post.php", {
                params: {
                    task: this.newTask,
                }
            })
                .then(function (response) {
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                })
        }
    },
    created() {
        this.getData();
    }
}).mount('#app')