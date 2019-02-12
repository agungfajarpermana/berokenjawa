<template>
    <div>
        <div class="container">
        <nav>
            <div class="nav-wrapper indigo">
                <a href="#" class="brand-logo hide-on-med-and-down">
                    Beroken Jawa
                    <!-- <img src="https://giphy.com/gifs/2FayWIH1xrdlT2wx2/html5"> -->
                </a>
                <a href="#" class="sidenav-trigger" data-target="mobile-links">
                    <i class="material-icons">menu</i>
                </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="#" class="">Home</a></li>
                    <li><a href="#" class="">About</a></li>
                    <li><a href="#" class="">Service</a></li>
                    <li><a href="#" class="">Contact</a></li>
                    <li><a href="#" class="">Gallery</a></li>
                </ul>
            </div>
        </nav>
        
        <ul class="sidenav" id="mobile-links">
            <li><a href="#" class="grey-text text-darken-4">Home</a></li>
                    <li><a href="#" class="grey-text text-darken-4">About</a></li>
                    <li><a href="#" class="grey-text text-darken-4">Service</a></li>
                    <li><a href="#" class="grey-text text-darken-4">Contact</a></li>
        </ul>
        <!-- <footer-component /> -->
        </div>
    </div>
</template>

<script>
    // import FooterComponent from './FooterComponent.vue';
    export default {
        // components:{
        //     FooterComponent
        // }
    }
</script>

<style scoped>
a{
    font-size: 18px;
}
</style>
