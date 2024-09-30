<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoas</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <style>
* {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}

body {
    font-family: "Nunito", sans-serif;
    background: linear-gradient(135deg, #e0f7fa, #b2ebf2);
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.caixa {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 400px;
    background-color: #ffffff;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    padding: 20px;
}

h1 {
    color: #00796b;
    margin-bottom: 20px;
}

input {
    width: 100%;
    margin: 10px 0;
    border: 1px solid #00796b;
    border-radius: 5px;
    padding: 10px;
    transition: border-color 0.3s;
}

input:focus {
    border-color: #004d40;
    outline: none;
}

button {
    width: 100%;
    background-color: #00796b;
    color: white;
    border: none;
    padding: 12px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #004d40;
}

    </style>
</head>
<body>
    <main>
        
            <h1>Cadastro de Pessoas</h1>
            <div class="caixa">
            @if (session('success'))
                <div>{{ session('success') }}</div>
            @endif

            <form action="/cadastro" method="POST">
                @csrf
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required>
                <br>

                <label for="estagio">Observação:</label>
                <input type="text" name="estagio" id="estagio" required>
                <br>

                <label for="idade">Idade:</label>
                <input type="text" name="idade" id="idade" required>
                <br>

                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" id="cpf" required>
                <br>

                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </main>
</body>
</html>
