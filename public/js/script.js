$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

/*class="success" and class="danger"*/
Vue.component('data-list',{
    template: '#list-template',
    data: function(){
        return {
            list: []
        };
    }
});

var vw = new Vue({
    el:'body',
    ready: function(){
        alert(1);
    }
});