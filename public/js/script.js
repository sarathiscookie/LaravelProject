/*class="success" and class="danger"*/
var vm = new Vue({
    http: {
        root: '/root',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    },

    el: 'body',

    data: {
        religions: [],
        newReligion: {
            religion: ''
        }
    },

    methods: {
        fetchReligion: function(){
            this.$http.get('/backend/religion/data', function(data){
                this.$set('religions', data);
                Vue.nextTick(function () {
                    $('[data-toggle="tooltip"]').tooltip()
                })
            });
        },

        addNewReligion: function(){
            //religion input
            var religion = this.newReligion

            //clear form input
            this.newReligion = {religion: ''}

            this.$http.post('/backend/religion', religion)

            // show data with out refresh the whole page
            this.fetchReligion()
        },
        
        removeReligion: function(id){
            var confirmDelete = confirm(" Are you sure, you want to delete this religion? ")
            if(confirmDelete) this.$http.delete('/backend/religion/' + id)
            this.fetchReligion()
        }
    },

    ready: function(){
        this.fetchReligion();
    }
});