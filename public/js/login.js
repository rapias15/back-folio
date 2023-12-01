const { createApp } = Vue

const login = createApp({
    delimiters: ['@{', '}'],
    data() {
        return{
            api_login: api_login,
            information_login: [
                email = '',
                password = '',
            ],
        }
    },
    methods: {
        login: function() {
            $.post({
                data: {
                    email: this.information_login.email,
                    password: this.information_login.password,
                },
                url: this.api_login,
                success: response => {
                    console.log('Bienvenue dans le dashboard de porte folio de Pias : ', response);
                    window.location.href = '/welcome';
                },
                error: function(errors) {
                    console.log("Ity ny erreur : ",errors.responseJSON);
                }
            })
        }
    },
})

login.mount('#login-page')