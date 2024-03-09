# Federalisatie

In de kern is federalisatie een relatief simpel proces, een binnen komende vraag word asynchroon doorgezet naar verschillende bronnen. Vervolgens worden de resultaten van deze bronnen ge-aggregeert tot een resultaat en terug gegeven aan de bevragen.

Op deze manier ontstaat een federatief stelsel, ofwel een virtueel registers dat onder water bestaat uit meerdere registers. Dit vormt de kern onder de oplossingen OpenWoo.app en Open Catalogi. Maar is ook bijzonder bruikbaar voor berichten, zaken en andere registers.

Het belangrijkste probleem dat federalisatie oplost is het bevragen van meerdere bronnen zonder dat er een datalake hoeft te worden opgebowud.

## Flow




## Configuratie per vraag (Request)
Bij iedere vraag kan de vragende partij (requester) beinvloeden hoe hij wil dat het verzoek word afgehandeld. Hierbij ligt de focus met name op wanneer een federatieve bevraging word beschouwd als afgerond en welke bronnen worden uitgesloten.

| Parameter                           | Standaardwaarde | Beschrijving                                                                                                                                                                                                                                        |
|-------------------------------------|-----------------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| **_federalization_use_sources**     | *               | Bij standaard (*) worden ALLE voor het federalisatie endpoint beschikbare bronnen gebruikt. Als één of meer bronnen worden opgegeven (a.h.v uuid), worden alleen deze gebruikt. Voorbeeld: gebruik van specifieke UUIDs voor geselecteerde bronnen. |
| **_federalization_exclude_sources** | null            | Bronnen kunnen worden uitgesloten. Als dit wordt gebruikt, worden de opgegeven bronnen uitgesloten van de zoekopdracht. Voorbeeld: uitsluiten van specifieke UUIDs.                                                                                 |
| **_federalization_timeout**         | 3000            | De maximale tijd (in milliseconden) die wordt gewacht op antwoorden van onderliggende bronnen voordat deze als timeout worden beschouwd (status 504).                                                                                               |
| **_federalization_ignore_error**    | false           | Bepaalt of de zoekopdracht wordt afgebroken bij de eerste foutmelding van een bron (status code anders dan 2**). Als dit op true staat, wordt de zoekopdracht afgebroken bij de eerste foutmelding.                                                 |
| **_federalization_relay_rating**    | true            | Gebruik de rating van de onderlingende bron ipv zelf een rating fast te stellen                                                                                                                                                                     |

>*Opmerking:* `_federalization_use_sources` en `_federalization_exclude_sources` kunnen niet gelijktijdig worden gebruikt. Als beide query parameters worden meegegeven, volgt er een foutmelding.

## Vaste Configuratie
Als configuratie per vraag kan op endpoint niveau worden overschreven door vaste query parameters op te geven.

Daarnaast is per endpoint op te geven welke sources via dit endoint worden gefederaliseerd.

## Voorwaarden
Alleen endpoint die voldoen aan het Open Index patroon kunnen worden gefederaliserd via de federalisatie services

## Aggregeren van Resultaten

De zoek service gaat er vanuit dat ieder aangeroepen bron een resultaat terug levert in de vorm van een json result opbject waarbij de gevonden objecten zich als array onder de property results bevinden.

```json
{
     ”results”:[]
}
``` 

De verschillende rusult objecten uit de diverse bronnen worden vervolgens van een “_rating”(matte waarin trefwoorden in het object voorkomen) en  “_source” (uuid van de bron zo als bekend bij het federatieve zoekendpoint) property voorzien. En onder gebracht een nieuwe result list binnen de zoek service.

De resultaten van de bron (status, status name, responce time, objects_returned) worden vervolgen als object toegevoegd aan de source list.

Vervolgens word de result array geordend op `_rating`, pagination toegepast en een JSON result object naar de vragende partij gestuurd.

```json
{
  "_sources": [
    {
      "id": "123e4567-e89b-12d3-a456-426614174000",
      "name": "Bill's pet store",
      "status_code": 202,
      "status_name": "found",
      "response_time": 2022,
      "objects_returned": 2
    },
    {
      "id": "123e4567-e89b-12d3-a456-426614174001",
      "name": "Wim's pet store",
      "status_code": 202,
      "status_name": "found",
      "response_time": 2043,
      "objects_returned": 2
    }
  ],
  "results": [
    {
      "_rating": 90,
      "_source": "123e4567-e89b-12d3-a456-426614174001",
      "name":""
    },
    {
      "_rating": 85,
      "_source": "123e4567-e89b-12d3-a456-426614174000",
      "name":""
    },
    {
      "_rating": 65,
      "_source": "123e4567-e89b-12d3-a456-426614174001",
      "name":""
    },
    {
      "_rating": 75,
      "_source": "123e4567-e89b-12d3-a456-426614174000",
      "name":""
    }
  ]
}
``` 

## Simpel voorbeeld
Laten we eens uitgaan van een federatief endpoint dat 5 indexen doorleverd. Al 5 de indexen beschicken over 5 objecten dus er zijn in totaal 25 objecten.




