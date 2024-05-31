# Metadata TOOI organisatie en werkwijze

Informatie over de organisatie en werkwijze van bestuursorganen.

![Class Diagram](https://github.com/CommonGateway/OpenIndex/blob/required-categorie-naam/docs/schema/Metadata.tooi_organisatie_en_werkwijze.svg)

## Properties

| Property | Type | Description | Required |
|----------|------|-------------|----------|
| tooiCategorieNaam | string | De naam van de TOOI categorie conform [diwoo metadata lijsten](https://standaarden.overheid.nl/diwoo/metadata/doc/0.9.1/diwoo-metadata-lijsten_xsd_Simple_Type_diwoo_scw_woo_informatiecategorieen) | Yes |
| tooiCategorieId | string | De tooiCategorieId van de TOOI categorie conform [diwoo metadata lijsten](https://standaarden.overheid.nl/diwoo/metadata/doc/0.9.1/diwoo-metadata-lijsten_xsd_Simple_Type_diwoo_scw_woo_informatiecategorieen) | No |
| tooiCategorieUri | string | De id van de categorie voorafgegaan door `https://identifier.overheid.nl/tooi/def/thes/kern/[tooiCategorieId]` | No |
| tooiThemaNaam | string | De naam van de TOOI categorie conform [diwoo metadata lijsten](https://standaarden.overheid.nl/diwoo/metadata/doc/0.9.1/diwoo-metadata-lijsten_xsd_Simple_Type_diwoo_scw_woo_informatiecategorieen) | No |
| tooiThemaId | string | De id van de TOOI categorie conform [diwoo metadata lijsten](https://standaarden.overheid.nl/diwoo/metadata/doc/0.9.1/diwoo-metadata-lijsten_xsd_Simple_Type_diwoo_scw_woo_informatiecategorieen) | No |
| tooiThemaUri | string | De tooiThemaId van het thema voorafgegaan door `https://identifier.overheid.nl/tooi/def/thes/kern/[tooiThemaId]` | No |
| values | array | Binnen KOOP Woo Index kunnen waardes niet uitlijnen op TOOI wel worden meegegeven in key value pair's. Deze zijn vervolgens wel doorzoekbaar maar geen onderdeel van de open.overheid.nl user interface | No |
