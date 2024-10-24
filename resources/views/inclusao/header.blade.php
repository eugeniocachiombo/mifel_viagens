@livewire('inclusao.header')
<script>
    setInterval(function() {
        Livewire.emit('headerTempoReal');
    }, 5000);
</script>