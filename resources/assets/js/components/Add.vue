<template>
    <div class="modal" :class="openmodal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Добавление телефона</p>
                <button class="delete" aria-label="close" @click='close'></button>
            </header>
            <section class="modal-card-body">

                <div class="field">
                    <label class="label">Имя</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Имя" v-model="list.name">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Телефон</label>
                    <div class="control">
                        <input class="input" type="number" placeholder="Телефон" v-model="list.phone">
                    </div>
                </div>

                <div class="field">
                    <label class="label">E-mail</label>
                    <div class="control">
                        <input class="input" type="email" placeholder="Email-адрес" v-model="list.email">
                    </div>
                </div>

            </section>
            <footer class="modal-card-foot">
                <button class="button is-success"@click='save'>Сохранить</button>
                <button class="button" @click='close'>Отмена</button>
            </footer>
        </div>
    </div>
</template>

<script>
    export default {
        name: "add",
        props: ['openmodal'],

        data() {
            return{
                list:{
                   name:'',
                   phone:'',
                   email:''
                }
            }
        },

        methods: {
            close() {
                this.$emit('closeRequest')
            },

            save() {

                axios.post('/shopcats', this.$data.list).then((response) => this.close())

                    .catch((error) => console.log(error))

            }
        }
    }
</script>

<style scoped>

</style>