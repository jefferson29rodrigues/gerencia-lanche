<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>

    <style>

        * {
            margin: 0;
        }

        .header {
            line-height: 120px;
            text-align: center;

            font-size: 28px;
            font-family: Arial;

            color: black;
            background: orange;
            
            width: 100%;
            height: 130px;
            
            margin-bottom: 30px;
        }

        .cards-produtos {
            width: 750px;
            margin: auto;

            display: grid;
            grid-template-columns: 1fr 1fr 1fr;

            gap: 30px;
            margin-bottom: 30px;
        }

        .card {
            display: grid;
            grid-template-columns: 1fr;

            border: 1px solid silver;
        }

        .card img {
            width: 250px;
            height: 200px;
        }

        .card .name-produto {
            margin: 20px;
            font-size: 30px;
        }

        .price-qt {
            display: grid;
            grid-template-columns: 1fr 1fr;
        } 
        
        .card .valor-produto {
            margin: 20px;
        } 
        .card .qt-produto {
            margin: 20px;
        }
    </style>

</head>
<body>
    <div class="geral">
        <div class="header">
            <h1>Opções de Lanches</h1>
        </div>
        <div class="cards-produtos">
            @for($i = 0; $i < count($images); $i++)
            <div class="card">
                <img src="/img/{{ $images[$i] }}.jpg" alt="">
                <h2 class="name-produto">{{ $names[$i] }}</h2>
                <div class="price-qt">
                    <p class="valor-produto">{{ $valores[$i] }} R$</p>
                    <p class="qt-produto">{{ $quantidades[$i] }} Unidades</p>
                </div>
            </div>
            @endfor
        </div>
    </div>
</body>
</html>