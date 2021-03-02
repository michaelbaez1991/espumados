<template>
    <div>
        <h3 class="text-center">Editar Producto</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateProduct">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" v-model="product.nombre_producto">
                    </div>
                    <div class="form-group">
                        <label>Marca</label>
                        <input type="text" class="form-control" v-model="product.marca">
                    </div>
                     <div class="form-group">
                        <label>Cantidad</label>
                        <input type="text" class="form-control" v-model="product.cantidad">
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                product: {}
            }
        },
        created() {
            this.axios
                .get(`http://localhost:8000/api/products/${this.$route.params.id}`)
                .then((res) => {
                    this.product = res.data;
                });
        },
        methods: {
            updateProduct() {
                this.axios
                    .patch(`http://localhost:8000/api/products/${this.$route.params.id}`, this.product)
                    .then((res) => {
                        this.$router.push({ name: 'home' });
                    });
            }
        }
    }
</script>