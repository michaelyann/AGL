<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    :root {
    --primary-color: #FF0000;  /* Rouge */
    --secondary-color: #000000; /* Noir */
    --accent-color: #FF6347;    /* Tomate */
    --background-color: #1A1A1A; /* Fond noir-gris foncé */
    --text-color: #FFFFFF;      /* Blanc */
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Quicksand', 'Arial', sans-serif;
    line-height: 1.6;
    background: linear-gradient(135deg, var(--background-color) 40%, var(--primary-color) 60%);
    color: var(--text-color);
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
}

.cri {
    width: 100%;
    max-width: 400px;
    background: var(--secondary-color);
    border-radius: 20px;
    padding: 20px;
    margin-top: 20px;
    text-align: center;
}

.entete {
    color: var(--text-color);
    font-size: 40px;
    font-weight: 1000;
}

</style>
<header class="cri">
    <h1 class="entete">PLANNING</h1>
</header>
<body>
    
</body>
</html>