<?php 
use MapasCulturais\i;
?>
<div class="main-footer">


    <div class="main-footer__links">
        <ul>
            <li>
                <a>Acesse</a>
            </li>
            <li>
                <a href="<?= $app->createUrl('search', 'opportunities') ?>">Lista de editais e oportunidades</a>
            </li>
            <li>
                <a href="<?= $app->createUrl('search', 'events') ?>">Lista de eventos</a>
            </li>
            <li>
                <a href="<?= $app->createUrl('search', 'agents') ?>">Lista de agentes</a>
            </li>
            <li>
                <a href="<?= $app->createUrl('search', 'spaces') ?>">Lista de espaços</a>
            </li>
            <li>
                <a href="<?= $app->createUrl('search', 'projects') ?>">Lista de projetos</a>
            </li>
        </ul>
    </div>

    <div class="main-footer__links">
        <ul>
            <li>
                <a href="<?= $app->createUrl('panel', 'index') ?>">Painel</a>
            </li>
            <li>
                <a  href="<?= $app->createUrl('panel', 'opportunities') ?>">Editais e oportunidades</a>
            </li>
            <li>
                <a href="<?= $app->createUrl('panel', 'events') ?>">Meus eventos</a>
            </li>
            <li>
                <a href="<?= $app->createUrl('panel', 'agents') ?>">Meus agentes</a>
            </li>
            <li>
                <a href="<?= $app->createUrl('panel', 'spaces') ?>">Meus espaços</a>
            </li>
            <li>
                <a href="<?= $app->createUrl('auth', 'logout') ?>">Sair</a>
            </li>
        </ul>
    </div> 
    
    <div class="main-footer__links">
        <ul>
            <!-- <li>
                <a>Ajuda e Privacidade</a>
            </li>
            <li>
                <a>Como utilizar o mapa?</a>
            </li>
            <li>
                <a>Dúvidas frequentes (FAQ)</a>
            </li> -->
            <li>
                <a>Termos de uso</a>
            </li>
            <li>
                <a>Política de privacidade</a>
            </li>
            <li>
                <a>Autorização de uso de imagem</a>
            </li>
        </ul>
    </div>
    <div class="main-footer__logo">
        <?php $this->part('site-logo') ?>
        <div class="main-footer__logo--share">
            <a><mc-icon name="facebook"></mc-icon></a>
            <a><mc-icon name="twitter"></mc-icon></a>
            <a><mc-icon name="vimeo"></mc-icon></a>
            <a><mc-icon name="youtube"></mc-icon></a>
            
        </div>
    </div>
</div>