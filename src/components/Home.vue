<template>
    <Header></Header>
    <div class="conte">
        <ProdutoCard/> 
        <ProdutoCard/>
        <ProdutoCard/> 
        <ProdutoCard/> 
        <ProdutoCard/> 
        <ProdutoCard/>
        <ProdutoCard/> 
        <ProdutoCard/> 
        <ProdutoCard/>
    </div>
    <Footer></Footer>
</template>
<script>
import Header from "./Header/Header.vue";
import Footer from "./Footer/Footer.vue";
import ProdutoCard from "./ProdutoCard.vue";
export default {
    name: "Home",
    components: {
        Header, Footer,ProdutoCard
    }
}
</script>