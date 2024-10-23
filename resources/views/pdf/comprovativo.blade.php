<style>
    body {
        margin: 0;
        padding: 0;
        position: relative;
        min-height: 100vh;
    }
    .content {
        padding-bottom: 100px; /* Espaço para o rodapé */
    }
    .footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        text-align: right;
    }
</style>

@include('inclusao.nome_empresa')<hr>

<div class="content" style="text-align: center; margin-bottom: 20px;">
    <h1>Reserva Confirmada</h1>
    <p style="font-size: 18px; font-weight: bold;">Cliente: {{ $usuario->name }}</p>
    <p style="font-size: 18px; font-weight: bold;">Código da Reserva: {{ $reserva->cod_reserva }}</p>
    <p style="font-size: 16px;">Status: {{ $reserva->status_reservas }}</p>
</div>

<h3 style="text-decoration: underline; margin-top: 40px;">Detalhes do Carrinho:</h3>

<div style="margin-top: 20px; border: 1px solid #ccc; padding: 15px; border-radius: 5px;">
    <p style="font-size: 16px;"><strong>Pacote:</strong> {{ $viagem->titulo_viagem }}</p>
    <p style="font-size: 16px;"><strong>Data da Reserva:</strong> {{ $data }}</p>
    <p style="font-size: 16px;"><strong>Valor Total:</strong> {{ number_format($reserva->total_reserva, 2, ',', '.') }} kz</p>
</div>

<h3 style="text-decoration: underline; margin-top: 40px;">Informações Adicionais:</h3>
<ul style="list-style-type: none; padding: 0;">
    <li><strong>Destino:</strong> {{ $destino->nome_destino }}</li>
    <li><strong>Tipo de Viagem:</strong> {{ $tipoViagem->nome_tipoViagem }}</li>
    <li><strong>Hospedagem:</strong> {{ $hospedagem->titulo_pacoteHospedagem }}</li>
    <li><strong>Refeições Incluídas:</strong> {{ $refeicao->titulo_pacoteRefeicao }}</li>
</ul>

<div class="footer">
    <hr>
    @include('inclusao.nome_empresa')
</div>
