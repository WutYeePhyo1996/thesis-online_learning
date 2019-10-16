import Vue from 'vue'

new Vue({
    el:'#app',
    data:{
        Lecture:1
    },
    methods:{
        add(){
            this.Lectures < 7 && this.Lectures++
        },
        remove(){
            this.Lectures !== 1 && this.Lectures--
        }
    }
})
