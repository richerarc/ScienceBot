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
        <h2 id="documentation-heading">Documentation</h2>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3>Commandes principales</h3>

            <div class="row">
                <div class="col-md-12 doc-command">
                    <code>/ScienceBot &lt;Votre Requête&gt;</code>
                    <p>Envoie une requête à résoudre. Le temps de calcul peut prendre du temps selon le type de données demandé. Par exemple, le calcul d'une intégrale complexe sera plus longue à calculer que la simple obtention des 5 premiers termes de la suite de fibonnaci</p>
                </div>
                <div class="col-md-12 doc-command">
                    <code>/ScienceBot help</code>
                    <p>Affiche le menu d'aide avec des exemples de commandes réalisables</p>
                </div>
                <div class="col-md-12 doc-command">
                    <code>/ScienceBot stats</code>
                    <p>Affiche les statistiques d'utilisation que vous faites de ScienceBot et les met en relation de manière anonyme avec le reste de votre équipe.</p>
                </div>
            </div>



        </div>
    </div>


</div>

</body>
</html>
