# Thema

Een thematische clustering van publicaties in voor de zoeken logische manier, kan bijvoorbeeld ook worden gebruikt voor onderwerpen

![Class Diagram](https://github.com/CommonGateway/OpenIndex/blob/documentation-2024/docs/schema/thema.svg)

## Properties

| Property | Type | Description | Required |
|----------|------|-------------|----------|
| id | string | De unieke identifier van dit thema | No |
| titel | string | De titel (naam) van een thema | Yes |
| samenvatting | string | Een korte samenvatting van het thema voor op de overzichts pagina | Yes |
| beschrijving | string | Een uitgebreide beschrijving van het thema voor weergave op de thema pagina | No |
| afbeelding | string | Een afbeelding voor bij het thema, mag worden opgegeven als verwijzing `url` of `base64` encoded image | No |
| publicaties | integer | Het aantal publicaties dat bij dit thema hoort | No |
