const app = new Vue({
    el: '#root',
    data: {
        arrayAlbum: []
    },
    methods: {
        getDischiApi() {
            axios.get('http://localhost/php-ajax-dischi/server.php')
            .then((risposta) => {
                console.log(risposta)
                this.arrayAlbum = risposta.data;
                console.log(this.arrayAlbum)
            });
        }
    },
    created() {
        this.getDischiApi();
    }
});