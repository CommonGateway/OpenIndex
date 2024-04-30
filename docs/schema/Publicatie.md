# Publicatie

Het publicatie object vormt de kern van Open Index, het fungeert als een metadata wrapper voor objecten en vormt daarmee het gemeen schappenlijk verband tussen de verschillende publcaties uit bijvoorbeeld de WOO en OC.

![Class Diagram](https://github.com/CommonGateway/OpenIndex/blob/documentation-2024/docs/schema/Publicatie.svg)

## Properties

| Property | Type | Description | Required |
|----------|------|-------------|----------|
| id | string | De unieke identifier van deze publicatie | No |
| titel | string | De titel (naam) van een publicatie | Yes |
| samenvatting | string | Een korte samenvatting van de publicatie voor op de overzichts pagina | Yes |
| beschrijving | string | Een uitgebreide beschrijving van de publicatie voor weergave op de publicatie pagina | Yes |
| afbeelding | string | Een afbeelding voor bij de publicatie, mag worden opgegeven als verwijzing `url` of `base64` encoded image | No |
| categorie | string | De categorie waarbinnen de publicatie valt, dit kunnen zelf gedefineerde categorien zijn of vooraf gedefineerd categorien | Yes |
| portal | string | Een optionele verwijzing naar een afwijkende publicatie pagina, bijvoorbeeld in het RIS | No |
| publicatiedatum | string | Datum vanaf wanneer deze publicatie vindbaar moet zijn, dit mag een datum in de toekomst of verleden zijn. Publicaties waarbij deze datum in de toekomst ligt of leeg is worden NIET weergegeven | No |
| featured | boolean | Datum vanaf wanneer deze publicatie vindbaar moet zijn, dit mag een datum in de toekomst of verleden zijn. Publicaties waarbij deze datum in de toekomst ligt of leeg is worden NIET weergegeven | No |
| organisatie | object | De organisatie horende bij dit publicatie object, in theorie kunnen meerdere organisaties één Open Index installatie delen maar we ontraden dit. | No |
| schema | string | Een publiek toegankenlijke verwijzing naar het object type (in schema.json) van de gepubliceerde data. Deze word zowel gebruikt om de aangeleverde data te valideren als eventueele afnemers te voorzien van context over de gevonden data | No |
| bijlagen | array | N/A | No |
| onderwerp | object | N/A | No |
| data | object | Het daad werkenlijk te publiceren object (mag niet groter zijn dan 15 mb) | No |
