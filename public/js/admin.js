        // Code administrateur pour vérifier l'accès
        const correctCode = "MHA";  // Code à valider

        function verifierCode() {
            const enteredCode = document.getElementById('adminCode').value;
            const errorMessage = document.getElementById('errorMessage');
            const adminSection = document.getElementById('adminSection');
            const codePrompt = document.getElementById('codePrompt');

            if (enteredCode === correctCode) {
                // Masquer la saisie du code et afficher le contenu principal
                codePrompt.style.display = "none";
                adminSection.style.display = "block";
            } else {
                // Afficher un message d'erreur si le code est incorrect
                errorMessage.style.display = "block";
            }
        }