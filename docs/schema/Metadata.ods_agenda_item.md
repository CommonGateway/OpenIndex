# Metadata Open Catalogi Publiccode

Adviezen over ontwerpen en andere onderwerpen van adviescolleges of -commissies, exclusief adviezen die betrekking hebben op individuele gevallen.

![Class Diagram](https://github.com/CommonGateway/OpenIndex/blob/OpenIndexService/docs/schema/Metadata.ods_agenda_item.svg)

## Properties

| Property | Type | Description | Required |
|----------|------|-------------|----------|
| tooiCategorieNaam | string | De naam van de TOOI categorie conform [diwoo metadata lijsten](https://standaarden.overheid.nl/diwoo/metadata/doc/0.9.1/diwoo-metadata-lijsten_xsd_Simple_Type_diwoo_scw_woo_informatiecategorieen) | No |
| tooiCategorieId | string | De tooiCategorieId van de TOOI categorie conform [diwoo metadata lijsten](https://standaarden.overheid.nl/diwoo/metadata/doc/0.9.1/diwoo-metadata-lijsten_xsd_Simple_Type_diwoo_scw_woo_informatiecategorieen) | No |
| tooiCategorieUri | string | De id van de categorie voorafgegaan door `https://identifier.overheid.nl/tooi/def/thes/kern/[tooiCategorieId]` | No |
| tooiThemaNaam | string | De naam van de TOOI categorie conform [diwoo metadata lijsten](https://standaarden.overheid.nl/diwoo/metadata/doc/0.9.1/diwoo-metadata-lijsten_xsd_Simple_Type_diwoo_scw_woo_informatiecategorieen) | No |
| tooiThemaId | string | De id van de TOOI categorie conform [diwoo metadata lijsten](https://standaarden.overheid.nl/diwoo/metadata/doc/0.9.1/diwoo-metadata-lijsten_xsd_Simple_Type_diwoo_scw_woo_informatiecategorieen) | No |
| tooiThemaUri | string | De tooiThemaId van het thema voorafgegaan door `https://identifier.overheid.nl/tooi/def/thes/kern/[tooiThemaId]` | No |
| oprdachtgever | string | Gaat het om onderzoek naar het functioneren van de eigen organisatie of om onderzoek ter voorbereiding of evaluatie van beleid of uitvoering ? | Yes |
| onderdeelTaak | string | Maakt het opstellen van dit onderzoeksrapport onderdeel uit van de uitvoering van de taak van deze organisatie? | Yes |
| onderwerp | string | Gaat het om onderzoek naar het functioneren van de eigen organisatie 0 of om onderzoek ter voorbereiding of evaluatie van beleid of uitvoering ? | Yes |
| feitelijkMateriaal | boolean | Bestaat de inhoud van het onderzoeksrapport voor het grootste deel O uit feitelijk materiaal? | Yes |
| values | array | Binnen KOOP Woo Index kunnen waardes niet uitlijnen op TOOI wel worden meegegeven in key value pair's. Deze zijn vervolgens wel doorzoekbaar maar geen onderdeel van de open.overheid.nl user interface | No |
