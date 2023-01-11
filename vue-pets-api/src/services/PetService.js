// export async function getAllPets() {

//     const response = await fetch('http://localhost:8080/api/v1/pet');
//     // console.log(response.data);
//     return await response.json();
// }

// export function getAllPets() {

//     fetch('http://localhost:8080/api/v1/pet', {
//         "method": "GET",
//         "headers": {
//             "Content-Type": "application/json",
//             "Accept": "application/json"
//         }
//     }).then(response=> {
//         console.log('Dentro de fetch')
//         console.log(response.data)
//     });
//     // console.log(response.json());
    
// }

export function getAllPets() {
    fetch("http://localhost:8080/api/v1/pet")
    .then(res =>res.json())
    .then(data => console.log(data))
}