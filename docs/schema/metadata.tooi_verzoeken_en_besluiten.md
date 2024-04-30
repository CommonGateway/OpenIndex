# Metadata TOOI Woo-verzoeken en -besluiten

Inhoud van schriftelijke Woo-verzoeken en besluiten daarop, inclusief verstrekte informatie.

![Class Diagram](https://github.com/CommonGateway/OpenIndex/blob/documentation-2024/docs/schema/metadata.tooi_verzoeken_en_besluiten.svg)

## Properties

| Property | Type | Description | Required |
|----------|------|-------------|----------|
| tooiCategorieNaam | string | De naam van de TOOI categorie conform [diwoo metadata lijsten](https://standaarden.overheid.nl/diwoo/metadata/doc/0.9.1/diwoo-metadata-lijsten_xsd_Simple_Type_diwoo_scw_woo_informatiecategorieen) | No |
| tooiCategorieId | string | De tooiCategorieId van de TOOI categorie conform [diwoo metadata lijsten](https://standaarden.overheid.nl/diwoo/metadata/doc/0.9.1/diwoo-metadata-lijsten_xsd_Simple_Type_diwoo_scw_woo_informatiecategorieen) | No |
| tooiCategorieUri | string | De id van de categorie voorafgegaan door `https://identifier.overheid.nl/tooi/def/thes/kern/[tooiCategorieId]` | No |
| tooiThemaNaam | string | De naam van de TOOI categorie conform [diwoo metadata lijsten](https://standaarden.overheid.nl/diwoo/metadata/doc/0.9.1/diwoo-metadata-lijsten_xsd_Simple_Type_diwoo_scw_woo_informatiecategorieen) | No |
| tooiThemaId | string | De id van de TOOI categorie conform [diwoo metadata lijsten](https://standaarden.overheid.nl/diwoo/metadata/doc/0.9.1/diwoo-metadata-lijsten_xsd_Simple_Type_diwoo_scw_woo_informatiecategorieen) | No |
| tooiThemaUri | string | De tooiThemaId van het thema voorafgegaan door `https://identifier.overheid.nl/tooi/def/thes/kern/[tooiThemaId]` | No |
| datumBesluit | string | Wanneer is er over het verzoek besloten | Yes |
| datumOntvangst | string | Wanneer is het verzoek binnen gekomen | Yes |
| termijnoverschrijding | string | Een (evenuteel) overschrijding van het beantwoordings termijn termijn | No |
| values | array | Binnen KOOP Woo Index kunnen waardes niet uitlijnen op TOOI wel worden meegegeven in key value pair's. Deze zijn vervolgens wel doorzoekbaar maar geen onderdeel van de open.overheid.nl user interface | No |
