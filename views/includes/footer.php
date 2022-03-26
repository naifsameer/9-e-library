<!-- import components  -->
<?php include __DIR__ . '/../components/index.php' ?>

<script src="/js/alpine-helpers.js"></script>
<script src="/js/alpine.js" defer></script>

<script>
  document.addEventListener('alpine:init', () => {
    Alpine.data('dropdown', () => ({
      open: false,

      toggle() {
        this.open = !this.open
      }
    }))

    AlpineComponent(Alpine);
    AlpineTash(Alpine);
  })
</script>
</body>

</html>