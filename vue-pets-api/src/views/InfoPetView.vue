<template>
    <div class="grid-buttons">
        <div class="row-buttons">
            <h2>Info Pet</h2>
        </div>
        <div class="row-buttons1">


        </div>
    </div>

    <div class="form-container">

        <div class="form-row"><label for="name-input">Name:</label>
            {{ pet.name }}
        </div>
        <div class="form-row">
            <label for="category-select">Category:</label>
            
            {{ categoryName.name}}
        </div>
        <div class="form-row">
            <label for="status-select">Status:</label>
            {{ pet.status }}
        </div>
        <div class="form-row">
            <label for="photo-input">Photo URL:</label>
            {{pet.photoUrls}}
        </div>
        <div class="form-row">
            <router-link to="/"> <button type="button" class="submit" @click="">Back to home</button> </router-link>
        </div>

    </div>

</template>
<script>
export default {
    props: ['itemId'],
    data() {
        return {
            pet: [],
            categoryName: []
        }
    },
    async mounted() {
        this.fetchPet()
    },
    methods: {
        async fetchPet() {
            const res = await fetch("http://localhost:8080/api/v1/pet/" + this.itemId);
            const finalRes = await res.json();

            this.pet = finalRes.data;
            this.categoryName = finalRes.data.category;
            console.log(this.categoryName)

        }
    },
};
</script>
<style>
.form-container {
    display: flex;
    flex-direction: column;
}

.form-row {
    height: 40px;
}

label {
    padding-right: 50px;
}

input,
select {
    padding: 4px 8px;
    margin: 4px;
    width: 182px;
    border-radius: 25px;
    border: 2px solid black;
}

span {
    font-size: 18px;
    margin: 10px;
    font-weight: 500;
}

.submit {
    margin-top: 10px;
    width: 120px;
    height: 30px;
    border-radius: 25px;

    background-color: black;
    color: white;
    transition: background-color .5s;
}

.submit:hover {
    border: 2px solid black;
    background-color: white;
    color: black;
}
</style>
 
  
