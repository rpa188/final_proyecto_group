<!DOCTYPE html>
<html>
<head>
    <title>ItsolutionStuff.com</title>
    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
    </style>
</head>
<body>
<img src="https://tiendaproductos.store/img/logo2.png" alt="" class="center">
<hr>
<h1>{{ $mailData['title'] }}</h1>
<p>Número de Pedido: <strong>{{ $mailData['orderObj']->id }}</strong></p>
<p>Fecha de Pedido: <strong>{{ $mailData['order_date'] }}</strong></p>
<p>{{ $mailData['body'] }}</p>

<a href="https://tiendaproductos.store/pedido/{{ $mailData['orderObj']->id }}" class="button">Ver status del pedido</a>

<p>Gracias</p>
</body>
</html>
