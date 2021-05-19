<?php
session_start();

session_destroy();

echo "Atualize a tela para exibir o valor atualizado! \n\n";

print_r($_SESSION);

?>

<!-- <script>
setTimeout(() => {
    location.reload();
}, 1000);

clearTimeout(timer);
</script> -->