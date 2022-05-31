<template>
    <div class="form-box">
        <div class="line line-top"></div>
        <div class="line line-bottom"></div>
        <div class="line line-left"></div>
        <div class="line line-right"></div>

        <div class="mb-30 d-flex text-left flex-column align-items-start">
            <p class="sub-heading line-shap line-shap-before mb-15">
                <span class="line-bg-right">Send us a message and we will take the time to get to know you so we can help you find your amazing adventure.</span>
            </p>
            <h2 class="section-title title-cap">Get in Touch</h2>
        </div>
        <p class="mb-30">
            Please call one of our specialist or pop into one of our travel shops and meet with an advisor in person. Alternatively, email us any questions and we will reply as quickly as possible. We look forward to being a small part of your next big adventure.
        </p>

        <form id="contact-form" class="form" data-toggle="validator"
              @submit.prevent="submitReservation">
            <div v-if="successMessage !== ''" class="messages text-center"
                 style="background-color: #8df89b; color: #000;">
                {{ successMessage }}
            </div>
            <div v-if="errorMessage !== ''" class="messages text-center"
                 style="background-color: #f88d98; color: #000;">
                {{ errorMessage }}
                <p v-for="(error, index) in errors"
                   :key="index">
                    {{ error.toString() }}
                </p>
            </div>
            <div v-if="!loading" class="input__wrap controls">
                <div class="form-group">
                    <div class="entry-box">
                        <label>Your name *</label>
                        <input id="form_name" type="text" v-model="form.name"
                               placeholder="Type your name" required="required"
                               data-error="name is required.">
                    </div>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <div class="entry-box">
                        <label>Your E-Mail *</label>
                        <input id="form_email" type="email" v-model="form.email"
                               placeholder="Type your Email Address"
                               required="required"
                               data-error="Valid email is required.">
                    </div>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <div class="entry-box">
                        <label>From *</label>
                        <input id="form_from" type="text" v-model="form.from"
                               placeholder="Traveling from" required="required">
                    </div>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <div class="entry-box">
                        <label>To *</label>
                        <input id="form_to" type="text" v-model="form.to"
                               placeholder="Traveling to" required="required">
                    </div>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <div class="entry-box">
                        <label>Description</label>
                        <textarea id="form_message" class="form-control"
                                  v-model="form.description"
                                  placeholder="Tell us about you and the world"
                                  required="required"
                                  data-error="Please,leave us a message."></textarea>
                    </div>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="text-right">
                    <div class="image-zoom w-auto d-inline-block" data-dsn="parallax">
                        <button type="submit" class="dsn-button ">
                            <span class="dsn-border border-color-default"></span>
                            <span class="text-button">Send Message</span>
                        </button>
                    </div>
                </div>

            </div>
            <div v-else class="text-center">
                <i class="fa fa-spin fa-spinner fa-4x text-white text-center"></i>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                form: {
                    name: '',
                    email: '',
                    from: '',
                    to: '',
                    description: '',
                },
                loading: false,
                successMessage: '',
                errorMessage: '',
                errors: []
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
                            this.loading = false;
                        }else{
                            this.errors = response.data.errors;
                            this.errorMessage = response.data.message;
                            this.loading = false;
                        }
                        console.log(response.data.errors);
                    }).catch((error) => {
                    console.log(error);
                });
            }
        }
    }
</script>

<style scoped>

</style>
