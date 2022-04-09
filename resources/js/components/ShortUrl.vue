<template>
    <div class="cont">
        <h1>Acortador de Url</h1>
        <h2>Agregar una URL para crear un acortador</h2>

        <div id="url-short">
            <label for="url">Agregar url</label>
            <input name="url" v-model="url.redirect">

            <button type="button" @click="createShortUrl">
                Crear Short Url
            </button>

            <a target="_blank" :href="redirect">Visitar link</a>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            url: {
                redirect: ''
            },
            short: '', 
            redirect: '' 
        };
    },
    methods: {
        async createShortUrl(){ 
            let response = (await axios.post("/create-url", this.url)).data.data
            console.log(response)
            this.short =  response.short
            this.redirect = 'http://short.url/' + response.short
        } 
    }
}
</script>
<style>
    .cont{
        width: 960px;
    }
</style>