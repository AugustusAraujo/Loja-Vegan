<template>
    <div class="backheader">
        <header id="header">
            <RouterLink class="left-menu" to="/">
                <img width="40" src="/veganlogo.svg" alt="LOGO" />
            </RouterLink>
            <div class="right-menu">
                <Carrinho :height="30"/>
                <DefaultUser :height="30"/>
            </div>
        </header>
    </div>
</template>
<script src="./Header.js">
</script>
<style scoped>
@import url("./Header.css");
</style>