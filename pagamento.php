<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entre no Grupo Exclusivo 🔥</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            position: relative;
        }
        /* Animação para troca de imagens de fundo */
        @keyframes backgroundSlide {
            10% { background-image: url('https://redtub.online/wp-content/uploads/2020/06/incesto-pai-e-filha-com-grande-gozada-na-buceta-da-novinha.jpg'); }
            15% { background-image: url('2.jpg'); }
            25% { background-image: url('3.jpg'); }
            30% { background-image: url('1.jpg'); }
            35% { background-image: url('5.jpg'); }
            45% { background-image: url('6.jpg'); }
            50% { background-image: url('8.jpg'); }
              55% { background-image: url('11.jpg'); }
        }
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            animation: backgroundSlide 15s infinite; /* Duração da troca */
            z-index: -1;
        }
        .container {
            text-align: center;
            background-color: rgba(43, 43, 43, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
            width: 300px;
            position: relative;
            z-index: 1;
        }
        h1 {
            color: #ff1744;
            font-size: 24px;
            margin-bottom: 10px;
        }
        p {
            color: #d4d4d4;
            margin: 10px 0;
        }
        .pix-container {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            background-color: #3a3a3a;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #fff;
            font-size: 16px;
        }
        #pixKey {
            color: #bb86fc;
            font-weight: bold;
            margin-bottom: 10px;
        }
        img {
            width: 100px;
            height: auto;
            border-radius: 50%;
            margin-bottom: 15px;
        }
        button {
            background-color: #ff1744;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            display: block;
            margin: 0 auto;
        }
        button:hover {
            background-color: #d50000;
        }
        .cta {
            color: #ff1744;
            font-size: 18px;
            margin-top: 15px;
        }
        .loading {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 24px;
            font-weight: bold;
            color: #ff1744;
            background-color: #000;
            padding: 15px;
            border-radius: 8px;
            border: 2px solid #ff1744;
            display: none;
        }
        .loading span {
            animation: blink 1s infinite steps(1, end);
        }
        .loading span:nth-child(2) {
            animation-delay: 0.2s;
        }
        .loading span:nth-child(3) {
            animation-delay: 0.4s;
        }
        @keyframes blink {
            0%, 100% { opacity: 0; }
            50% { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Grupo CP SEXO - MAE E FILHO, PAI E FILHA, ZOOFILIA 🔥</h1>
        <img src="1.jpg" alt="Imagem de Perfil">
        <p>Para entrar, faça um PIX de <strong>R$ 15,00</strong> para a chave abaixo:</p>
        <div class="pix-container">
            <span id="pixKey">00020126440014BR.GOV.BCB.PIX0122apachekali09@gmail.com520400005303986540515.005802BR5922Aelson de Jesus Novaes6009SAO PAULO62140510Vi3cjFjG226304137D</span></span>
            <button onclick="copyPix()">Copiar chave</button>
        </div>
        <p class="cta">Após o pagamento você entrará no grupo do WhatsApp.</p>
        <div id="loadingMessage" class="loading">VALOR R$15,00 Aguardando pagamento<span>.</span><span>.</span><span>.</span></div>
    </div>

    <script>
        function copyPix() {
            const pixKey = document.getElementById("pixKey").textContent;
            const loadingMessage = document.getElementById("loadingMessage");

            loadingMessage.style.display = "block";

            if (navigator.clipboard && navigator.clipboard.writeText) {
                navigator.clipboard.writeText(pixKey).then(() => {
                    alert("Chave PIX copiada com sucesso!");
                }).catch(err => {
                    loadingMessage.style.display = "none";
                    console.error("Erro ao copiar: ", err);
                    alert("Erro ao copiar a chave PIX.");
                });
            } else {
                const tempInput = document.createElement("input");
                tempInput.value = pixKey;
                document.body.appendChild(tempInput);
                tempInput.select();
                try {
                    document.execCommand("copy");
                    alert("Chave PIX copiada com sucesso!");
                } catch (err) {
                    loadingMessage.style.display = "none";
                    console.error("Erro ao copiar: ", err);
                    alert("Erro ao copiar a chave PIX.");
                }
                document.body.removeChild(tempInput);
            }
        }
    </script>
</body>
</html>
