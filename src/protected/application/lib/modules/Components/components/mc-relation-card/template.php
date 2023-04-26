<?php

/**
 * @var \MapasCulturais\Themes\BaseV2\Theme $this
 * @var \MapasCulturais\App $app
 * 
 */

$this->import('
    popover
    mapas-card
');

use MapasCulturais\i;
?>

<popover classes="relation-popover">
    <template #button="{open, close, toggle}">
        <slot :open="open" :close="close" :toggle="toggle"> </slot>
    </template>
    <template #default="{close}">
        <mapas-card class="relation-card" noTitle>
            <div class="relation-card__close" @click="close()">
                <mc-icon name="close"></mc-icon>
            </div>

            <div class="relation-card__header">
                <div class="image">
                    <img v-if="relation.agent.files.avatar" :src="relation.agent.files.avatar?.transformations?.avatarMedium?.url" class="image__img" />
                    <mc-icon v-if="!relation.agent.files.avatar" name="image"></mc-icon>
                </div>
                <a :href="relation.agent.singleUrl" class="name">
                    {{relation.agent.name}}
                </a>
            </div>

            <div class="relation-card__content">
                <div class="type">
                    <span> <?= i::__('Este agente atua de forma') ?> <span :class="['actualType', relation.agent['@entityType']+'__color']">{{relation.agent.type.name}}</span> </span>
                </div>
                <div class="tags">
                    <div class="tags__label">
                        <?= i::__("Áreas de atuação") ?> ({{relation.agent.terms.area.length}})
                    </div>
                    <div class="tags__tagsList">
                        {{relation.agent.terms.area.join(', ')}}
                    </div>
                </div>
            </div>

            <div v-if="relation.status == -5" class="relation-card__status">
                <mc-icon name="exclamation"></mc-icon>
                <?= i::__('A solicitação para `entidade` está pendente') ?>
            </div>
        </mapas-card>
    </template>
</popover>