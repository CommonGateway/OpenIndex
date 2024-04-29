# Metadata Woo Verzoek

Het onderwerp object is bedoeld om publicaties te clusteren in logisch samenhangende eenheden. Dit is vergelijkbaar met bijvoorbeeld themas

![Class Diagram](https://github.com/CommonGateway/OpenIndex/blob/documentation-2024/docs/schema/metadata.woo_vergaderstukken_decentrale_overheden.svg)

## Properties

| Property | Type | Description | Required |
|----------|------|-------------|----------|
| id | string | De unieke identifier van dit onderwerp | No |
| titel | string | De titel (naam) van een onderwerp | No |
| samenvatting | string | Een korte samenvatting van het onderwerp voor op de overzichts pagina | No |
| beschrijving | string | Een uitgebreide beschrijving van het onderwerp voor weergave op de onderwerp pagina | No |
| afbeelding | string | Een afbeelding voor bij het onderwerp, mag worden opgegeven als verwijzing `url` of `base64` encoded image | No |
| publicaties | integer | Het aantal publicaties dat bij dit onderwerp hoort | No |
