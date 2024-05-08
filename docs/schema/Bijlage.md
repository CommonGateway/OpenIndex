# Bijlage

H

![Class Diagram](https://github.com/CommonGateway/OpenIndex/blob/main/docs/schema/Bijlage.svg)

## Properties

| Property | Type | Description | Required |
|----------|------|-------------|----------|
| id | string | De unieke identifier van dit onderwerp | No |
| titel | string | De titel (naam) van een onderwerp | Yes |
| samenvatting | string | Een korte samenvatting van het onderwerp voor op de overzichts pagina | Yes |
| beschrijving | string | Een uitgebreide beschrijving van het onderwerp voor weergave op de onderwerp pagina | No |
| labels | array | Eventueele labels op de bijlage doe worden gebruikt voor het beoordelen om wat voor een bestand het gaat | No |
| url | string | De url naar het oorspronklenlijke document | Yes |
| documentText | string | De tekst uit het oorspronkenlijke document, deze wordt opgenomen in de zoek index om het doorzoeken van documenten te faciliteren | No |
| type | string | Het mime-type van de bijlage, wordt bepaald bij inlezen en opgenomen voor weergave in de ui | No |
| extension | string | De extensie van de bijlage, wordt bepaald bij inlezen en opgenomen voor weergave in de ui | No |
| size | integer | De grote van de bijlage in bytes, wordt bepaald bij inlezen en opgenomen voor weergave in de ui | No |
