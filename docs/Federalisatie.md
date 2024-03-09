# Federalisatie

In de kern is federalisatie een relatief simpel proces, een binnen komende vraag word asynchroon doorgezet naar verschillende bronnen. Vervolgens worden de resultaten van deze bronnen ge-aggregeert tot een resultaat en terug gegeven aan de bevragen.

Op deze manier ontstaat een federatief stelsel, ofwel een virtueel registers dat onder water bestaat uit meerdere registers. Dit vormt de kern onder de oplossingen OpenWoo.app en Open Catalogi. Maar is ook bijzonder bruikbaar voor berichten, zaken en andere registers.

Het belangrijkste probleem dat federalisatie oplost is het bevragen van meerdere bronnen zonder dat er een datalake hoeft te worden opgebowud.

## Flow




## Configuratie per vraag (Request)
Bij iedere vraag kan de vragende partij (requester) beinvloeden hoe hij wil dat het verzoek word afgehandeld. Hierbij ligt de focus met name op wanneer een federatieve bevraging word beschouwd als afgerond en welke bronnen worden uitgesloten.

**_federalization_ use_sources**
default *
Bij * worden ALLE voor het federalisatie enpoint beschikbare bronnen gebruikt
Als 1 of meer bronnen worden opgegeven (a.h.v uuid worden alleen deze gebruikt). E.g. _federalization_ use_sources[]=e60a4d0f-be8e-4f87-bd0d-d9e560cbd2fc&_federalization_ use_sources[]=b0d25db6-bef4-4158-a93c-99f5a5819f03

**_federalization_ exclude_sources**
Default null
Omgekeerd kunnen ook bronnen worden uitgesloten r e.g. _federalization_ exclude _sources[]=e60a4d0f-be8e-4f87-bd0d-d9e560cbd2fc&_federalization_ exclude _sources[]=b0d25db6-bef4-4158-a93c-99f5a5819f03
>*note*
>_federalization_ use_sources en _federalization_ exclude_sources kunnen niet gelijkeidig worden gebruikt. Als bijde query parameters worden meegegeven volgt er een foutmelding

**_federalization_ timeout INT**
default 3000
De vragende partij kan aangeven hoe lang er geacht moet worden op onderliggende sources, als een source te lang duurt over antwoorden word deze op status 504 timeout gezet. Op deze manier wordt voorkomen dat één of meerdere langsame bronnen er voor zorgen dat de totale doorlooptijd van de zoekvraag uit de klauwen loopt

**_federalization_ignore_error BOOl**
default false
Bepaald of de totale zoekvraag moet worden afgebroken op het moment dat er tijdens de zoekopdracht een bron een foutmelding geeft (status code anders dan 2**). Als deze op true staat word de zoekopdracht afgebroken bij de éérste foutmelding. Er wordt geen zoek resultaat terug gegeven maar een overzicht van de foutmelding binnen de bron die een foutstatus terug geeft.

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





