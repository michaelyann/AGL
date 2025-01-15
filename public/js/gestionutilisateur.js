// Récupérer les utilisateurs du localStorage ou initialiser un tableau vide  
let users = JSON.parse(localStorage.getItem('users')) || [];  

// Fonction pour ajouter un utilisateur  
function addUser() {  
    const userId = document.getElementById("user-id").value.trim();  
    const userName = document.getElementById("user-name").value.trim();  
    const userRole = document.getElementById("user-role").value.trim();  

    if (userId && userName && userRole) {  
        // Ajouter l'utilisateur au tableau  
        users.push({ id: userId, name: userName, role: userRole });  
        // Mettre à jour le localStorage  
        updateLocalStorage();  
        // Afficher les utilisateurs  
        displayUsers();  
        // Réinitialisation des champs de saisie  
        document.getElementById("user-id").value = '';  
        document.getElementById("user-name").value = '';  
        document.getElementById("user-role").value = '';  
    } else {  
        alert("Veuillez remplir tous les champs.");  
    }  
}  

// Fonction pour afficher les utilisateurs  
function displayUsers() {  
    const userList = document.getElementById("user-list");  
    userList.innerHTML = ''; // Effacer la liste existante  

    // Parcourir tous les utilisateurs et créer des éléments de liste  
    users.forEach((user, index) => {  
        const li = document.createElement("li");  
        li.textContent = `ID : ${user.id}, Nom : ${user.name}, Rôle : ${user.role}`;  

        const deleteButton = document.createElement("button");  
        deleteButton.textContent = "Supprimer";  
        deleteButton.className = "delete-button";  
        deleteButton.onclick = () => removeUser(index); // Appelle la fonction de suppression  
        
        li.appendChild(deleteButton); // Ajouter le bouton à l'élément de la liste  
        userList.appendChild(li); // Ajouter l'élément de liste à la liste d'utilisateurs  
    });  
}  

// Fonction pour retirer un utilisateur  
function removeUser(index) {  
    users.splice(index, 1); // Retirer l'utilisateur du tableau  
    updateLocalStorage(); // Mettre à jour le localStorage  
    displayUsers(); // Mettre à jour l'affichage  
}  

// Fonction pour mettre à jour le localStorage  
function updateLocalStorage() {  
    localStorage.setItem('users', JSON.stringify(users)); // Convertir les utilisateurs en chaîne et les stocker  
}  

// Afficher les utilisateurs au chargement de la page  
document.addEventListener("DOMContentLoaded", displayUsers);