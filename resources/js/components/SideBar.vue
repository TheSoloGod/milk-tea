<template>
    <div class="sideBar">
        <div class="sideBarHeader">
            <div>
                Milk Tea Store
            </div>
        </div>
        <div class="storeSelected">
            Store 1
        </div>
        <div class="sideBarStore">
            Store 2
        </div>
        <div class="sideBarStore">
            Store 3
        </div>
        <div class="sideBarStore">
            Store 4
        </div>
    </div>
</template>

<script>
    export default {
        name: "SideBar"
    }
</script>

<style lang="scss" scoped>
    .sideBar {
        width: 20%;
        position: absolute;
        top: 0;
        bottom: 0;
        background-color: #1d2c53;
    }

    .sideBarHeader {
        text-align: center;
        color: #f7f9f9;
        font-size: 35px;
        font-weight: bold;
        margin-top: 30px;
        margin-bottom: 50px;
    }

    .storeSelected {
        color: #ced3df;
        background-color: #304476;
        text-align: center;
        height: 70px;
        line-height: 70px;
        font-weight: bold;
        font-size: 25px;
    }

    .sideBarStore {
        color: #5b6784;
        background-color: #1d2c53;
        text-align: center;
        height: 70px;
        line-height: 70px;
        font-weight: bold;
        font-size: 25px;
    }
</style>


