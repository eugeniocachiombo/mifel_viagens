<!DOCTYPE html>
<html>
<head>
    <title>Reserva Confirmada</title>
    <style>
        /* Adicione seus estilos aqui */
    </style>
</head>
<body>
    <h1>Reserva Confirmada</h1>
    <p>Código da Reserva: {{ $reserva->cod_reserva }}</p>
    <p>Status: {{ $reserva->status_reservas }}</p>
    <h3>Detalhes do Carrinho:</h3>
    <p>Pacote: {{ $carrinho->detalhes }}</p>
    <!-- Adicione mais detalhes conforme necessário -->
</body>
</html>
