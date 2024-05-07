# Toevoegen

Publicaties kunnen aan een Open Index installatie worden toegevoegd door het aanmaken van een publicatie object, dit kan direct via de API of door gebruik te maken van een onderliggende service die de informatie in synchroniseert vanuit bronnen (zo als de open woo service of open catalogi service).

Een publicatie object fungeert als een envelop voor het daadwerkelijk te publiceren object.  Het object dat je wilt publiceren zal dus gedefinieerd moeten zijn, dat doen we in de vorm van een schema json bestand dat online benaderbaar moet staan, bijvoorbeeld Metadata.tooi_wetten_en_algemeen_verbindende_voorschriften.schema.json

Daarnaast moet het publicatie object minimaal beschikken over een naam en samenvatting. Eventueele bijlagen kunnen worden aangemaakt aan de hand van hun url.

Laten we er eens vanuit gaan dat we een advies willen publiceren, met twee bijlage.

```json
{
  "attachments": [
    { "url":"asdasd"},
    { "url":"asdasd"}
  ]
}

```

Reponce


```json
{
  "attachments": [
    { "url":"asdasd"},
    { "url":"asdasd"}
  ]
}

```