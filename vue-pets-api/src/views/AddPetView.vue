<template>
    <div class="grid-buttons">
        <div class="row-buttons" v-if="!formSubmitted">
            <h2>Add Pet</h2>
        </div>
        <div class="row-buttons1">

            <router-link to="/"> <button type="button" class="btn-index" @click="">Back to home</button> </router-link>
        </div>
    </div>

    <div class="form-container">
        <div style="color:red;" v-if="!infoMissing"> Some information is missing. Plese, try again</div>
        <form @submit.prevent="submitForm" v-if="!formSubmitted">
            <div class="form-row"><label for="name-input">Name:</label>
                <input id="name-input" v-model="formData.name" placeholder="Enter name">
            </div>
            <div class="form-row">
                <label for="category-select">Category:</label>
                <select id="category-select" v-model="formData.category">
                    <option value="1">Fish</option>
                    <option value="2">Bird</option>
                    <option value="3">Hamster</option>
                    <option value="4">Cat</option>
                    <option value="5">Pig</option>
                    <option value="6">Dog</option>
                </select>
            </div>
            <div class="form-row">
                <label for="status-select">Status:</label>
                <select id="status-select" v-model="formData.status">
                    <option value="available">Available</option>
                    <option value="pending">Pending</option>
                    <option value="sold">Sold</option>
                </select>
            </div>
            <div class="form-row">
                <label for="photo-input">Photo URL:</label>
                <input id="photo-input" v-model="formData.photo_urls" placeholder="Enter photo url">
            </div>
            <div class="form-row">
                <button type="submit" class="submit">Submit</button>
            </div>
        </form>
        <div v-if="formSubmitted">
            <h2> {{ formData.name }} Added</h2>
            <p> With {{ formData.status }} status</p>
        </div>
    </div>

</template>
<script>
export default {
    data() {
        return {
            formData: {
                name: "",
                category: "",
                status: "",
                photo_urls: ""
            },
            infoMissing: true,
            formSubmitted: false
        };
    },
    methods: {
        async submitForm() {
            let formData = new FormData();
            
            formData.append('name', this.formData.name);
            formData.append('category_id', this.formData.category);
            formData.append('status', this.formData.status);
            formData.append('photo_urls', this.formData.photo_urls);

            const url = 'http://localhost:8080/api/v1/pet';
            try {
                let response = await fetch(url, {
                    method: 'POST',
                    body: formData
                });
                let json = await response.json();
                console.log(json)
                this.formSubmitted = true
            } catch (error) {
                this.infoMissing = false;
                console.error('error',error);
            }
            
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
 
  
