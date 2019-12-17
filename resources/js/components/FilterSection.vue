<template>
    <div>
        <div class="filterSection">
            <div class="row">
                <div class="col-6">
                    <button class="btnFilter" @click="filter()">
                        Filter
                    </button>
                </div>
                <div class="col-6">
                    <div class="sort">
                        <span class="sortByText">
                            Sort By
                        </span>
                        <span class="sortBy">
                            <select v-model="selected" @change="getListProducts()" class="sortSelect">
                                <option class="sortOption" value="name-asc">Name (A-Z)</option>
                                <option class="sortOption" value="name-desc">Name (Z-A)</option>
                                <option class="sortOption" value="price-asc">Price (A-Z)</option>
                                <option class="sortOption" value="price-desc">Price (Z-A)</option>
                            </select>
                        </span>
                    </div>
                </div>
            </div>
            <div class="chooseTopping" v-show="isActive == true">
                <div class="row sectionChooseTopping">
                    <div class="col-12 toppingText">
                        Toppings:
                    </div>
                    <div class="col-4" v-for="topping in listToppings" v-bind:key="topping.id">
                        <label class="container">{{ topping.name }}
<!--                            <input type="checkbox" :value="topping.id" v-model="checkedTopping" @change="getFilterToppings()">-->
                            <input type="radio" :value="topping.id" v-model="checkedTopping" @change="getFilterToppings()">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "FilterSection",
        data() {
            return {
                selected: 'name-asc',
                listProducts: [],
                listToppings: [],
                checkedTopping: '',
                isActive: false,
                errors: '',
            }
        },

        created() {
            this.getListProducts();
            this.getListToppings();
        },

        methods: {
            getListProducts() {
                axios.post('/product/sort', {selected: this.selected})
                    .then(response => {
                        this.listProducts = response.data;
                        this.checkedTopping = false;
                        this.sendDataSortToParent();
                    })
                    .catch(error => {
                        this.errors = error.response.data.errors.name;
                    })
            },

            sendDataSortToParent() {
                this.$emit('listProducts', this.listProducts);
            },

            getListToppings() {
                axios.get('/topping')
                    .then(response => {
                        this.listToppings = response.data
                    })
                    .catch(error => {
                        this.errors = error.response.data.errors.name
                    })
            },

            getFilterToppings() {
                axios.post('/product/filter', {selected: this.selected, toppings: this.checkedTopping})
                    .then(response => {
                        this.listProducts = response.data;
                        this.sendDataSortToParent();
                    })
                    .catch(error => {
                        this.errors = error.response.data.errors.name;
                    })
            },

            filter() {
                this.isActive = !this.isActive;
                if (this.isActive == false) {
                    this.checkedTopping = false;
                    this.getListProducts();
                }
            }
        }
    }
</script>

<style lang="scss" scoped>
    .filterSection {
        margin-left: 5%;
        margin-right: 5%;
    }

    .sort {
        text-align: right;
    }

    .btnFilter {
        width: 30%;
        height: 50px;
        line-height: 50px;
        color: #f0f0f0;
        background-color: #1d2c53;
        text-align: center;
        border-radius: 5px;
        font-size: 25px;
    }

    .sortByText {
        height: 50px;
        line-height: 50px;
        color: #1d2c53;
        font-size: 25px;
        padding-right: 2%;
    }

    .sortSelect {
        width: 35%;
        height: 50px;
        line-height: 50px;
        color: #1d2c53;
        font-size: 25px;
        border-radius: 5px;
        border-color: #1d2c53;
        padding-left: 2%;
    }

    .sectionChooseTopping {
        margin-left: 0.1%;
        margin-right: 0.1%;
    }

    .chooseTopping {
        margin-top: 30px;
        width: 100%;
        height: 150px;
        background-color: white;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .toppingText {
        color: black;
        margin-top: 15px;
        margin-left: 2%;
        font-size: 25px;
        font-weight: bold;
    }

    /* Style checkbox */

    /* The container */
    .container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        margin-left: 10%;
        line-height: 25px;
        margin-top: 5px;
        pardding: 5px
    }

    /* Hide the browser's default checkbox */
    .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    /* Create a custom checkbox */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
    }

    /* On mouse-over, add a grey background color */
    .container:hover input ~ .checkmark {
        background-color: #ccc;
    }

    /* When the checkbox is checked, add a blue background */
    .container input:checked ~ .checkmark {
        background-color: #1d2c53;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    .container input:checked ~ .checkmark:after {
        display: block;
    }

    /* Style the checkmark/indicator */
    .container .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }
</style>
