$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

/*class="success" and class="danger"*/
Vue.component('tasks', {

    template: '#tasks-template',

    data: function(){
        return{
            list: []
        };
    },

    created: function(){
        this.fetchTaskList();
    },

    methods: {
        fetchTaskList: function(){
            this.$http.get('/backend/religion/data', function(tasks){
                this.$set('list', tasks);
            });
        }
    }

});

new Vue({
   el: 'body'
});