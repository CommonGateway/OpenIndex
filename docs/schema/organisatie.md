# Organisatie

Een organisatie die een publicatie of index ter beschicking steld

![Class Diagram](https://github.com/CommonGateway/OpenIndex/blob/documentation-2024/docs/schema/organisatie.svg)

## Properties

| Property | Type | Description | Required |
|----------|------|-------------|----------|
| id | string | De unieke identifier deze organisatie | No |
| titel | string | De titel (naam) van een onderwerp | Yes |
| samenvatting | string | Een korte samenvatting van het onderwerp voor op de overzichts pagina | Yes |
| beschrijving | string | Een uitgebreide beschrijving van het onderwerp voor weergave op de onderwerp pagina | Yes |
| afbeelding | string | Een afbeelding voor bij het onderwerp, mag worden opgegeven als verwijzing `url` of `base64` encoded image | No |
| uuid | string | N/A | No |
| oin | string | N/A | No |
| tooi | string | N/A | No |
| rsin | string | N/A | No |
| naam | string | N/A | No |
