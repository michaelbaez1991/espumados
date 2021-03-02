<template>
    <div>
        <h3 class="text-center">Crear Producto</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addProduct">
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
                    <button type="submit" class="btn btn-primary">Create</button>
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
        methods: {
            addProduct() {
                this.axios
                    .post('http://localhost:8000/api/products', this.product)
                    .then(response => (
                        this.$router.push({ name: 'home' })
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>