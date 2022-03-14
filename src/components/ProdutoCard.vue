<template>
    <div class="produtoitem">
        <div class="produtocard">
            <img
                id="image"
                src="https://vulcabras.vteximg.com.br/arquivos/ids/174856-1000-1000/43455789_1-047_img1.png?v=637278479972330000"
            />
            <div class="name">TÊNIS LEGAL</div>
        </div>
        <div class="buybutton">R$ 15.99</div>
    </div>
</template>
<script>
export default {
    name: "ProdutoCard"
}
</script>
<style scoped>
.produtoitem {
    transition: 0.5s;
    width: 200px;
    height: 240px;
    display: block;
    background: #f1f1f1;
    border-radius: 10px;
    margin: 5px;
    box-sizing: border-box;
}
.produtocard {
    box-sizing: border-box;
    padding: 20px 20px 0px 20px;
    text-align: center;
}
.buybutton {
    width: 100%;
    height: 40px;
    top: calc(100% - 40px);
    
    background: #f4a261;
    border-radius: 0px 0px 10px 10px;
    cursor: pointer;
    transition: 0.5s;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 25px;
    font-weight: 400;
}
.buybutton:hover {
    background: #e76f51;
}
img {
    height: 150px;
    width: 150px;
}
.name {
    font-weight: bold;
    font-size: 20px;
    color: #505050;
    white-space: normal;
}
@media (min-width:400px) {
    .produtoitem{
        width: 120px;
        height: 150px;
    }
    .produtocard{
        padding: 0;
    }
    img{
        max-width: 100px;
        max-height: 100px;
    }
    .buybutton{
        height: 25px;
        font-size: 15px;
    }
    .name{
        font-size: 16px;
    }
}
</style>