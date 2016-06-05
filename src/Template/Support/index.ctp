<?php

$this->assign('title', "ScienceBot - Accueil");

$this->Html->script('splash', ['block' => true]);

?>

<header>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">
                    <?= $this->Html->image('logo.png', ['alt' => 'Science-bot', 'id' => "logo-image"]); ?>
                    <span id="logo-title">ScienceBot</span>
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/documentation">Documentation</a></li>
                    <li><a href="/pricing">Tarifs</a></li>
                    <li><a href="/support">Aide</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div id="background-other"></div>
<div class="row">
    <div id="article-splash" class="col-md-8 col-md-offset-2">
        <h2 id="suppport-guide">Aide</h2>
        <p class="text-center">
            Si vous avez des questions sur l'utilisation de ScienceBot, c'est ici que vous trouverez la réponse. Voici les questions les plus fréquemment posées:
        </p>
    </div>
    <div id="faq-area" class="col-md-8 col-md-offset-2">
    <a href="#">Pourquoi certaines requêtes ne retournent pas de résultat?</a><br><br>
    <a href="#">Les images, graphiques sont en anglais, peut-on modifier ce comportement?</a><br><br>
    <a href="#">Mes statistiques ne sont pas mises à jour en temps réel, que se passe t'il?</a><br><br>
    <a href="#">Modalités de mise à jour des plans</a><br><br><br>
    <a href="#">Voir toutes les autres questions...</a>
    </div>


</div>

</body>
</html>
