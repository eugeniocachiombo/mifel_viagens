@livewire('inclusao.menu')
<script>
    setInterval(function() {
        Livewire.emit('inclusaoTempoReal');
    }, 5000);
</script>
