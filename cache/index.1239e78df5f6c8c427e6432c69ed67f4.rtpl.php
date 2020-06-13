<?php if(!class_exists('Rain\Tpl')){exit;}?><h1>Helo <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>

<p>Teste de tamplate </p>
<p>Versão do php <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>


<p><?php echo htmlspecialchars( $week["3"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>