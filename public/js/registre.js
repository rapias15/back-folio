const { createApp } = Vue

const registre = createApp({
    delimiters: ['@{', '}'], //Personnalisation de l'interpollation de vuejs
    data() {
        return {
            error: false,
            validation: [
                username = '',
                email = '',
                password = '',
            ],
            api : api_registre,
        }
    },
    methods: {
        login(){
            $.post({
                url: this.api,
                data: {
                    username: this.validation.username,
                    email: this.validation.email,
                    password: this.validation.password,
                },
                success: response => {
                    console.log('Tafiditra soa aman-tsara ilay user oh!');
                },
            })
        },
    },
})

registre.mount('#registre-page')

