<template>
    <div class="login-page flex justify-center items-center">
        <div class="login-container">
            <div class="login-title flex justify-center items-center text-bold">
                Life Pal
            </div>
            <div class="login-subtitle flex justify-center items-center flex-wrap">
                <span class="text-center">Welcome to your life assistant application, </span>
                <span class="text-center text-bold font-italic font-big font-family-impact letter-spacing-3"> your Life Pal.</span>
            </div>
            <div class="login-form flex justify-center flex-column">

                <h3 class="text-center"> Log in and keep things under control </h3>
                <div class="form-input p-1 flex justify-center">
                    <input type="text" placeholder="Type your email" class="radius-1" v-model="loginParams.email">
                </div>

                <div class="form-input p-1 flex justify-center">
                    <input type="password" placeholder="Type your password" class="radius-1" v-model="loginParams.password">
                </div>


                <div class="form-input p-1 flex justify-center">
                    <input type="submit" value="Log in" @click="loginAttempt()" :disabled="isLoading">
                </div>

            </div>

            <div class="login-error flex justify-center items-center text-center  ">
                {{ badCredentialsMessage }}
            </div>
        </div>
        <Loader v-if="isLoading"></Loader>
    </div>


</template>

<script>
import Loader from "../Loader/Loader";
import {CustomError} from "../../CustomError"

export default {

    components: {
        Loader,
    },

    data() {
        return {
            loginParams : {
                email: "",
                password: ""
            },
            badCredentialsMessage:"",
            isLoading: false,
            error: {},
        }
    },

    mounted() {

    },

    methods: {
        loginAttempt()
        {
            this.isLoading = true;
            this.badCredentialsMessage = "";

            axios.post('/login', this.loginParams)
                .then((data) => {
                    this.isLoading = false;

                }).catch(error => {
                    this.isLoading = false;

                    this.badCredentialsMessage = new CustomError(error.response.status).getMessage();
                    // this.badCredentialsMessage = error.response.status === 401 ? "Your credentials does not match any record in our database. Try another credentials." : "";
                    //
                    // this.badCredentialsMessage = error.response.status === 500 ? "Server error." : error.response.status;
                })
        }
    }
}
</script>
