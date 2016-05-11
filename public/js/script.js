/*class="success" and class="danger"*/
Vue.component('tasks', {

    template: '#tasks-template',

    data: function(){
        return{
            list: []
        };
    },

    created: function(){
        this.fetchReligion();
    },

    methods: {
        fetchReligion: function(){
            this.$http.get('/backend/religion/data', function(tasks){
                this.$set('list', tasks);
                Vue.nextTick(function () {
                    $('[data-toggle="tooltip"]').tooltip()
                })
            });
        },

        addNewReligion: function(){
            //religion input
            var religion = this.newReligion;

            //clear form input
            this.newReligion = {religion: ''};

            this.$http.post('/backend/religion', religion);

            // show data with out refresh the whole page
            this.fetchReligion();
        }
    },

    computed:{
        // validation
    }

});

new Vue({
    http: {
        root: '/root',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    },

    el: 'body',

    data: {
       newReligion: {
           religion: '',
       }
    }
});