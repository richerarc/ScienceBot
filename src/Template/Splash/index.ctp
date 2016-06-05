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

<div id="background"></div>
<div class="row splash">
    <div class="col-md-8 col-md-offset-2 text-center">
        <h1>Votre assistant scientifique</h1>
        <h3>Une application slack pour les <span id="typed-message">scientists</span>. Demandez n'importe quoi pour résoudre vos problèmes</h3>
        <a id="slack-logo" href="https://slack.com/oauth/authorize?scope=commands&client_id=34194949847.48200671700" class="btn btn-default"><?= $this->Html->image('slack-logo.png', ['alt' => 'Slack logo']); ?>Ajouter à Slack</a>
    </div>
</div>
<div class="row">
    <div class="window">
        <div class="header">
            <div class="button-circle">x</div>
            <div class="button-circle">x</div>
            <div class="button-circle">x</div>
        </div>
        <iframe width="500" height="297" src="https://www.youtube.com/embed/-W4YSw8MSGQ" frameborder="0" allowfullscreen></iframe>
    </div>
</div>
<div class="row">
    <div id="article-splash" class="col-md-8 col-md-offset-2">
        <h3>Vous pouvez demander n'importe quoi</h3>

        <div class="response-content hidden response-content-1">INSERT IMG HERE</div>
        <div class="demo-command">
            <span class="plus-part">+</span>
            <input class="command" value="/sciencebot 1000th prime number"/>
            <span class="try-part try-part-1">Essayer</span>
        </div>
        <div class="response-content hidden response-content-2">INSERT IMG HERE</div>
        <div class="demo-command">
            <span class="plus-part">+</span>
            <input class="command" value="/sciencebot frequency allocations 900MHz"/>
            <span class="try-part try-part-2">Essayer</span>
        </div>
        <div class="response-content hidden response-content-3">INSERT IMG HERE</div>
        <div class="demo-command">
            <span class="plus-part">+</span>
            <input class="command" value="/sciencebot solve (9^(x + 1)) – (28 (3^(x))) + 3 = 0 over the real numbers"/>
            <span class="try-part try-part-3">Essayer</span>
        </div>
        <div class="response-content hidden response-content-4">INSERT IMG HERE</div>
        <div class="demo-command">
            <span class="plus-part">+</span>
            <input class="command" value="/sciencebot integrate sin(cos x) from x=0 to 1">
            <span class="try-part try-part-4">Essayer</span>
        </div>
    </div>

</div>

</body>
</html>
