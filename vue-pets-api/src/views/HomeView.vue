<script setup>
import TheWelcome from '../components/TheWelcome.vue'
</script>

<template>
  <main>
    <div class="grid-buttons">
      <div class="row-buttons">
        <h2>Pets in the store </h2>
        <p class="status">Total: {{ lenResponse }}</p>
      </div>
      <div class="row-buttons1">
        <router-link to="/add">
          <button type="button" class="btn-index" @click="">Add Pet</button>
        </router-link>
      </div>
    </div>
    <div class="grid-container">

      <div v-if="responseAvailable == true" v-for="item in listPets">
        <div class="card grid-item">
          <div class="card-container">
            <h4><b>{{ item.name }}</b></h4>

            <p class="status">{{ item.status }}</p>
            <p><router-link :to="'/info/'+ item.id" >Info
              </router-link></p>
          </div>
        </div>

      </div>

    </div>



  </main>
</template>

<script>
// import { getAllPets } from './services/PetService';
export default {
  data() {
    return {
      listPets: [],
      responseAvailable: false,
      lenResponse: 0
    }
  },
  methods: {
    async getAllPets() {
      const res = await fetch("http://localhost:8080/api/v1/pet");
      const finalRes = await res.json();

      this.listPets = finalRes;
      this.lenResponse = this.listPets.length;
      this.responseAvailable = true;

    }
  },
  mounted() {
    this.getAllPets()
  }
}
</script>