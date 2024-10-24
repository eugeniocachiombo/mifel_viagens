<a href="{{ route('carrinho.confirmar') }}" class="cart-container cart-containerCarrinho">
    <i class="mdi mdi-cart text-dark" style="font-size: 25px"></i>
    @if (count($carrinho) > 0)
        <span class="badge badge-danger badgeCarrinho">{{ count($carrinho) }}</span>
    @endif
</a>


