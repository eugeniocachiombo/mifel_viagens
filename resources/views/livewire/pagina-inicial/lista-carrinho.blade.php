<div class="cart-container cart-containerCarrinho">
    <i class="mdi mdi-cart"></i>
    <span class="badge badge-danger badgeCarrinho">{{ count($carrinho) }}</span>
</div>

<script>
    setInterval(function() {
        Livewire.emit('carrinhoEmTempoReal');
    }, 3000);
</script>
