@livewire('inclusao.menu')
<script>
    setInterval(function() {
        Livewire.emit('inclusaoTempoReal');
    }, 7000);
</script>
