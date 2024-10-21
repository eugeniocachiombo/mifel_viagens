<a href="{{ route('carrinho.confirmar') }}" class="cart-container cart-containerCarrinho">
    <i class="mdi mdi-cart text-dark" style="font-size: 25px"></i>
    <span class="badge badge-danger badgeCarrinho">{{ count($carrinho) }}</span>
</a>

<script>
    setInterval(function() {
        Livewire.emit('carrinhoEmTempoReal');
    }, 5000);
</script>
