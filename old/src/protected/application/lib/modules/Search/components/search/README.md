# Componente `<search>`
Componente que implementa a página de busca

## Propriedades
- *String **pageTitle*** - Título da página
- *String **entityType*** - Tipo da entidade
- *String **initialPseudoQuery*** - Objeto inicial da pseudoQuery. 

## Slots
- **default** - Para o uso das tabs ou conteúdo da página
- **create-button** - Slot para inclusão do botão de criar entidade 

### Importando componente
```PHP
<?php 
$this->import('search');
?>
```
### Exemplos de uso
```HTML
<!-- utilizaçao básica -->

<search page-title="Agentes" entity-type="agent" >    

    <template #create-button>
        <create-agent></create-agent>
    </template>

    <template #default="{pseudoQuery}">
        <tabs class="search__tabs">
            <tab icon="list" label="Lista" slug="list">
                <div class="search__tabs--list">
                    <search-list :pseudo-query="pseudoQuery" type="agent">
                        <template #filter>
                            <search-filter-agent :pseudo-query="pseudoQuery"></search-filter-agent>
                        </template>
                    </search-list>
                </div>
            </tab>
        </tabs>
    </template>
</search>
```