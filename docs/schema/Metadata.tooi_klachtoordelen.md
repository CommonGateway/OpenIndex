# Metadata TOOI klachtoordelen

Schriftelijke oordelen in klachtprocedures.

![Class Diagram](https://github.com/CommonGateway/OpenIndex/blob/update-schemas/docs/schema/Metadata.tooi_klachtoordelen.svg)

## Properties

| Property | Type | Description | Required |
|----------|------|-------------|----------|
| tooiCategorieNaam | string | De naam van de TOOI categorie conform [diwoo metadata lijsten](https://standaarden.overheid.nl/diwoo/metadata/doc/0.9.1/diwoo-metadata-lijsten_xsd_Simple_Type_diwoo_scw_woo_informatiecategorieen) | No |
| tooiCategorieId | string | De tooiCategorieId van de TOOI categorie conform [diwoo metadata lijsten](https://standaarden.overheid.nl/diwoo/metadata/doc/0.9.1/diwoo-metadata-lijsten_xsd_Simple_Type_diwoo_scw_woo_informatiecategorieen) | No |
| tooiCategorieUri | string | De id van de categorie voorafgegaan door `https://identifier.overheid.nl/tooi/def/thes/kern/[tooiCategorieId]` | No |
| tooiThemaNaam | string | De naam van de TOOI categorie conform [diwoo metadata lijsten](https://standaarden.overheid.nl/diwoo/metadata/doc/0.9.1/diwoo-metadata-lijsten_xsd_Simple_Type_diwoo_scw_woo_informatiecategorieen) | No |
| tooiThemaId | string | De id van de TOOI categorie conform [diwoo metadata lijsten](https://standaarden.overheid.nl/diwoo/metadata/doc/0.9.1/diwoo-metadata-lijsten_xsd_Simple_Type_diwoo_scw_woo_informatiecategorieen) | No |
| tooiThemaUri | string | De tooiThemaId van het thema voorafgegaan door `https://identifier.overheid.nl/tooi/def/thes/kern/[tooiThemaId]` | No |
| datumBesluit | string | Wanneer is er over de klacht besloten | Yes |
| datumOntvangst | string | Wanneer is de klacht binnen gekomen | Yes |
| termijnoverschrijding | string | Een (evenuteel) overschrijding van het beantwoordings termijn termijn | No |
| organisatieonderdeel | string |  | No |
| functiebenaming | string |  | No |
| gedraging | string |  | No |
| bevindingen | string |  | No |
| oordeel | string |  | No |
| conclusies | string |  | No |
| values | array | Binnen KOOP Woo Index kunnen waardes niet uitlijnen op TOOI wel worden meegegeven in key value pair's. Deze zijn vervolgens wel doorzoekbaar maar geen onderdeel van de open.overheid.nl user interface | No |
