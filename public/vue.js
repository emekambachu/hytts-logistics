const { createApp } = Vue

createApp({
    data() {
        return {
            form: {
                name: '',
                email: '',
                from: '',
                to: '',
                description: '',
            },
            loading: true,
            successMessage: ''
        }
    },

    methods: {
        submitReservation(){
            this.loading = true;
            console.log(this.form);
            axios.post('/api/reservation/submit', this.form)
                .then((response) => {
                    if(response.data.success === true){
                        this.successMessage = response.data.message;
                    }else{
                        this.errors = response.data.errors,
                    }
                    console.log(response.data.errors);
                }).catch((error) => {
                console.log(error);
            });
        }
    }

}).mount('#reservation-form')
