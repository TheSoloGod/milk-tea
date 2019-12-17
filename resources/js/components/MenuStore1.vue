<template>
    <div class="menuBackground">
        <div>
            <SideBar/>
        </div>
        <div class="content">
            <div>
                <Header/>
            </div>
            <div>
                <FilterSection @listProducts="childrenListProducts"/>
                <Product :listProducts="listProductsFromChild"/>
            </div>
        </div>
    </div>
</template>

<script>
    import SideBar from './SideBar';
    import Header from "./Header";
    import FilterSection from "./FilterSection";
    import Product from "./Product";
    export default {
        name: "MenuStore1",
        components: {
            SideBar,
            Header,
            FilterSection,
            Product
        },
        data() {
            return {
                listProductsFromChild: {},
            }
        },
        methods: {
            childrenListProducts(listProducts) {
                this.listProductsFromChild = listProducts;
            }
        }
    }
</script>

<style lang="scss" scoped>
    .menuBackground {
        background-color: #f0f0f0;
        height: 100%;
    }

    .content {
        width: 80%;
        float: right;
        background-color: #f0f0f0;
    }
</style>
