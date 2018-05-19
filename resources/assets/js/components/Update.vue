<template>
    <div class="modal" :class="openmodal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">{{ list.name }} редактирование</p>
                <button class="delete" aria-label="close" @click='close'></button>
            </header>
            <section class="modal-card-body">

                <div class="field">
                    <label class="label">Имя</label>
                    <div class="control">
                        <input class="input" :class="{'is-danger':errors.name}" type="text"
                               placeholder="Имя" v-model="list.name">
                    </div>
                    <small v-if="errors.name" class="has-text-danger">{{ errors.name[0] }}</small>
                </div>

                <div class="field">
                    <label class="label">Телефон</label>
                    <div class="control">
                        <input class="input" :class="{'is-danger':errors.phone}" type="number"
                               placeholder="Телефон" v-model="list.phone">
                    </div>
                    <small v-if="errors.phone" class="has-text-danger">{{ errors.phone[0] }}</small>
                </div>

                <div class="field">
                    <label class="label">E-mail</label>
                    <div class="control">
                        <input class="input" :class="{'is-danger':errors.email}" type="email"
                               placeholder="Email-адрес" v-model="list.email">
                    </div>
                    <small v-if="errors.email" class="has-text-danger">{{ errors.email[0] }}</small>
                </div>

            </section>
            <footer class="modal-card-foot">
                <button class="button is-success"@click='update'>Сохранить</button>
                <button class="button" @click='close'>Отмена</button>
            </footer>
        </div>
    </div>
</template>

<script>
    export default {
        name: "update",
        props: ['openmodal'],

        data() {
            return{
                list:{},

                errors:[]
            }
        },

        methods: {
            close() {
                this.$emit('closeRequest')
            },

            update() {

                axios.patch(`/shopcats/${this.list.id}`, this.$data.list).then((response) => this.close())

                    .catch((error) => this.errors = error.response.data)

            }
        }
    }
</script>

<style scoped>

</style>