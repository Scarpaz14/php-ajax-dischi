const app = new Vue({
    el: '#app',
    data:{
        database:[],
    },

created(){
    axios.get('http://localhost/php-ajax-dischi/api.php')
    .then((response)=>{
        this.database = response.data
    })
    .catch((error) => {
        console.log(error);
    });

}



})