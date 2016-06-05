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
    <h2 id="pricing-guide" class="col-md-8 col-md-offset-2">Guide tarifaire</h2>
    <p id="pricing-heading" class="col-md-8 col-md-offset-2 text-center">
        Nos tarifs sont adaptés à tous. ScienceBot restera toujours gratuit et ce, pour toujours.
    </p>
</div>

<div class="row">



    <div id="article-splash" class="col-md-8 col-md-offset-2">
        <div class="col-md-4 pricing-free">
            <div class="pricing-header">
                Feu d'artifice
            </div>
            <div class="pricing-price">
                0$
            </div>
            <div class="pricing-description">
                Parfait pour les équipes qui veulent tester ScienceBot pour une durée illimitée
            </div>
            <div class="pricing-feature">
                60 requêtes/mois
            </div>
            <div class="pricing-choice">
                <a href="#" class="btn">Choisir</a>
            </div>
        </div>

        <div class="col-md-4 pricing-regular">
            <div class="pricing-header">
                Roquette ballistique
            </div>
            <div class="pricing-price">
                5$
            </div>
            <div class="pricing-description">
                par utilisateur, par mois<br>
            </div>
            <div class="pricing-feature">
                250 requêtes/mois
            </div>
            <div class="pricing-choice">
                <a href="#" class="btn">Choisir</a>
            </div>
        </div>

        <div class="col-md-4 pricing-ultimate">
            <div class="pricing-header">
                Fusée orbitale
            </div>
            <div class="pricing-price">
                3$
            </div>
            <div class="pricing-description">
                par utilisateur, par mois, minimum de 50 utilisateurs
            </div>
            <div class="pricing-feature">
                Nombre illimité de requêtes<br>
            </div>

            <div class="pricing-choice">
                <a href="#" class="btn">Choisir</a>
            </div>
        </div>

    </div>

</div>

</body>
</html>
