import Vue from 'vue'

new Vue({
    el:'#app',
    data:{
        eventImages:1
    },
    methods:{
        add(){
            this.eventImages < 7 && this.eventImages++
        },
        remove(){
            this.eventImages !== 1 && this.eventImages--
        }
    }
})
