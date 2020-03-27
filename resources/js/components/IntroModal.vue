<template>
    <b-modal :active.sync="isModalActive" :can-cancel="canCancel">
        <section class="hero">
            <div class="hero-body has-text-centered p-0 m-1">
                <div class="container">
                    <h1 class="title is-1 is-hidden-mobile">High Tech Jobs | Intro</h1>
                    <h1 class="title is-1-mobile is-hidden-desktop is-hidden-tablet">High Tech Jobs | Intro</h1>
                    <h4 class="subtitle is-4">What is this Application?</h4>

                    Description of the Application
                    <hr>
                    <h3 class="title is-3-mobile m-third">Join Us</h3>
                    <h3 class="subtitle is-3-mobile">It's Very Simple</h3>
                    <hr>
                    <h5 class="title is-5 has-text-centered">
                        <a href="/login">Login</a>
                        / <a href="/register">Register</a>
                   To get started.</h5>
                </div>
            </div>
        </section>
    </b-modal>
</template>

<script>
    export default {
        data(){
            return{
                isModalActive: true,
                canCancel: false
            }
        }
    }
</script>

<style scoped>
h1, h5, h3, h4{
    color:white;
}
    .container{
        color: white;
    }
    hr{
        height: 0px;
    }
</style>
