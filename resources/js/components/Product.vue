<template>
    <div class="productSection">
        <div class="row">

            <div class="col-4" v-for="item in listProducts" v-bind:key="item.id">
                <div class="item">
                    <div class="itemContent">
                        <div class="itemId">MT-0{{ item.id }}</div>
                        <div class="itemName">{{ item.name }}</div>
                        <hr class="itemHr">
                        <div class="itemTopping">Toppings:</div>
                        <div class="itemToppingContent">
                            <span v-for="topping in item.toppings">{{ topping }} | </span>
                        </div>
                    </div>
                    <div class="itemPrice">${{ item.price }}</div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Product",
        props: {
            listProducts: {
                type: Object,
            }
        }
    }
</script>

<style lang="scss" scoped>
    .productSection {
        margin-left: 5%;
        margin-right: 5%;
        margin-top: 50px;
    }

    .item {
        background-color: white;
        width: 100%;
        height: 400px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .itemContent {
        padding: 10%;
    }

    .itemId {
        color: #1d2c53;
        font-size: 20px;
    }

    .itemName {
        color: #1d2c53;
        font-size: 25px;
        font-weight: bold;
    }

    .itemTopping {
        color: #1d2c53;
        font-weight: bold;
        font-size: 20px;
    }

    .itemToppingContent {
        height: 120px;
        color: #1d2c53;
        font-size: 20px;
    }

    .itemHr {
        text-align: center;
        color: #1d2c53;
        border: 2px solid #1d2c53;
        border-radius: 2px;
    }

    .itemPrice {
        text-align: right;
        padding-right: 10%;
        color: #1d2c53;
        font-size: 30px;
        font-weight: bold;
    }
</style>
