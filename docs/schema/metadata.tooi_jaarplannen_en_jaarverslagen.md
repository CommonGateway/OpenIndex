# Metadata TOOI jaarplannen en jaarverslagen

Jaarplannen en jaarverslagen van bestuursorganen over hun taakuitvoering.

![Class Diagram](https://github.com/CommonGateway/OpenIndex/blob/documentation-2024/docs/schema/metadata.tooi_jaarplannen_en_jaarverslagen.svg)

## Properties

| Property | Type | Description | Required |
|----------|------|-------------|----------|
| tooiCategorieNaam | string | De naam van de TOOI categorie conform [diwoo metadata lijsten](https://standaarden.overheid.nl/diwoo/metadata/doc/0.9.1/diwoo-metadata-lijsten_xsd_Simple_Type_diwoo_scw_woo_informatiecategorieen) | No |
| tooiCategorieId | string | De tooiCategorieId van de TOOI categorie conform [diwoo metadata lijsten](https://standaarden.overheid.nl/diwoo/metadata/doc/0.9.1/diwoo-metadata-lijsten_xsd_Simple_Type_diwoo_scw_woo_informatiecategorieen) | No |
| tooiCategorieUri | string | De id van de categorie voorafgegaan door `https://identifier.overheid.nl/tooi/def/thes/kern/[tooiCategorieId]` | No |
| tooiThemaNaam | string | De naam van de TOOI categorie conform [diwoo metadata lijsten](https://standaarden.overheid.nl/diwoo/metadata/doc/0.9.1/diwoo-metadata-lijsten_xsd_Simple_Type_diwoo_scw_woo_informatiecategorieen) | No |
| tooiThemaId | string | De id van de TOOI categorie conform [diwoo metadata lijsten](https://standaarden.overheid.nl/diwoo/metadata/doc/0.9.1/diwoo-metadata-lijsten_xsd_Simple_Type_diwoo_scw_woo_informatiecategorieen) | No |
| tooiThemaUri | string | De tooiThemaId van het thema voorafgegaan door `https://identifier.overheid.nl/tooi/def/thes/kern/[tooiThemaId]` | No |
