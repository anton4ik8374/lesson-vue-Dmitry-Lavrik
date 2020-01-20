let sample = new Vue({
    el: '.sample',
    data: {
        name: '',
        viseble: true
    },
    methods:{
        toggleH2:function(){
            if(this.viseble) {
                this.viseble = false;
            }else{
                this.viseble = true;
            }
        }
    }
});