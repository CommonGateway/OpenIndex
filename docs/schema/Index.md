# Index

Een extern gevonden index die als bron kan worden gebruikt bij het stellen van federatieve zoekvragen

![Class Diagram](https://github.com/CommonGateway/OpenIndex/blob/documentation-2024/docs/schema/Index.svg)

## Properties

| Property | Type | Description | Required |
|----------|------|-------------|----------|
| id | string | De unieke identifier van de index | No |
| titel | string | De titel (naam) van de index | Yes |
| samenvatting | string | Een korte samenvatting van de index | Yes |
| beschrijving | string | Een uitgebreide beschrijving van de index voor weergave op de index pagina | Yes |
| afbeelding | string | Een afbeelding voor bij de index, bijvoorbeeld een logo. Mag worden opgegeven als verwijzing `url` of `base64` encoded image | No |
| url | string | De url naar de API van de index | No |
| status | integer | De meest recente status van deze index | No |
| organisatie | object | De organisatie die deze index beschickbaar stelt (fungeerd als default voor publicaties in de index) | No |
