<template lang="html">
    <div class="product">
        <div class="box">
            <h2><strong>Lista de produtos</strong></h2>
            <small class="small">Escolha uma das opções abaixo:</small>
            <div class="list-products">
                <ul class="list-group list-group-flush" style="padding: 20px 0">
                    <template v-for="prod in products" :key="prod.id">
                        <li class="list-group-item">
                            <button
                                class="btn btn-light"
                                style="padding: 0"
                                @click="addItem(prod.id, prod.name)"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="27"
                                    height="27"
                                    fill="currentColor"
                                    class="bi bi-plus-square-fill"
                                    style="
                                        font-size: 2rem;
                                        color: rgb(147, 52, 233);
                                    "
                                    viewBox="0 0 18 18"
                                >
                                    <path
                                        d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"
                                    />
                                </svg>
                            </button>
                            {{ prod.name }}
                        </li>
                    </template>
                </ul>
            </div>
            <h3>Checkout</h3>
            <small>Resumo da compra:</small>
            <br />
            {{ texto }}
            <div id="prod">
                <div class="items">
                    {{ prod1 }}
                    <button
                        v-if="display1"
                        class="btn btn-danger"
                        @click="removeItem(id, count1)"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="17"
                            height="17"
                            fill="currentColor"
                            class="bi bi-trash"
                            viewBox="0 0 15 15"
                        >
                            <path
                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"
                            />
                            <path
                                fill-rule="evenodd"
                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"
                            />
                        </svg>
                    </button>
                </div>
                <div class="items">
                    {{ prod2 }}
                    <button
                        v-if="display2"
                        class="btn btn-danger"
                        @click="removeItem(id, count1)"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="17"
                            height="17"
                            fill="currentColor"
                            class="bi bi-trash"
                            viewBox="0 0 15 15"
                        >
                            <path
                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"
                            />
                            <path
                                fill-rule="evenodd"
                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"
                            />
                        </svg>
                    </button>
                </div>
                <div class="items">
                    {{ prod3 }}
                    <button
                        v-if="display3"
                        class="btn btn-danger"
                        @click="removeItem(id, count1)"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="17"
                            height="17"
                            fill="currentColor"
                            class="bi bi-trash"
                            viewBox="0 0 15 15"
                        >
                            <path
                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"
                            />
                            <path
                                fill-rule="evenodd"
                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"
                            />
                        </svg>
                    </button>
                </div>
            </div>
            <br />
            <button
                id="checkout"
                type="button"
                style="width: 90%"
                class="btn btn-primary"
                :disabled="disabled"
                @click="checkout()"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="currentColor"
                    class="bi bi-cart3"
                    viewBox="0 0 25 25"
                >
                    <path
                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"
                    />
                </svg>
                FECHAR PEDIDO
            </button>
            <br />
        </div>
    </div>
</template>

<script>
import { ref, onMounted } from "vue";
import axios from "axios";
export default {
    setup() {
        const products = ref([]);

        const getProducts = async () => {
            let res = await axios.get("http://localhost:8000/api/products");
            products.value = res.data;
        };

        onMounted(getProducts());

        return {
            products,
        };
    },
    el: "#prod",
    data() {
        return {
            page: "products",
            disabled: true,
            display1: false,
            display2: false,
            display3: false,
            cart: [],
            prod1: "",
            prod2: "",
            prod3: "",
        };
    },
    computed: {
        texto() {
            if (this.cart.length === 0) {
                return "Nenhum produto no carrinho";
            }
            this.disabled = false;
        },
    },
    methods: {
        addItem(id, name) {
            this.cart.push({
                id: id,
                name: name,
            });
            let count1 = 0;
            let count2 = 0;
            let count3 = 0;
            for (let i = 0; i < this.cart.length; i++) {
                if (this.cart[i].id === 1) {
                    count1 += 1;
                    this.prod1 = `${count1}x ${this.cart[i].name}`;
                    this.display1 = true;
                } else if (this.cart[i].id === 2) {
                    count2 += 1;
                    this.prod2 = `${count2}x ${this.cart[i].name}`;
                    this.display2 = true;
                } else if (this.cart[i].id === 3) {
                    count3 += 1;
                    this.prod3 = `${count3}x ${this.cart[i].name}`;
                    this.display3 = true;
                }
            }
        },
        removeItem(id, cont) {
            console.log(id);
            console.log(cont);
        },
        checkout() {
            const total = [];
            const el = this.$el.getElementsByClassName("items");
            for (const value of el) {
                total.push(value.innerText);
            }
            const order = async () => {
                let res = await axios.post(
                    "http://localhost:8000/api/orders",
                    total
                );
                if (res.data.code === 201) {
                    alert(res.data.message);
                    window.location = "http://127.0.0.1:8000/";
                }
            };

            onMounted(order());
        },
    },
};
</script>

<style scoped lang="css">
.btn-light {
    --bs-btn-hover-color: var(--bs-white);
    --bs-btn-hover-bg: #fff;
    --bs-btn-hover-border-color: #fff;
}

.btn {
    font-weight: 700;
}

.items {
    width: 100%;
    padding-top: 7px;
}
</style>
