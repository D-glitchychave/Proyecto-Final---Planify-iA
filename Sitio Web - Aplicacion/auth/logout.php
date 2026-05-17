<?php

session_start();

session_unset();
session_destroy();

echo "
<script>

alert('👋 Sesión cerrada correctamente! Bye!');

window.location.href='/login.php';

</script>
";
