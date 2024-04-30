# Wet Open Overheid
Open Index wordt binnen OpenWoo.app ingezet om een federatieve zoek index te faciliteren voor de wet open overheid

## Publicatie object
De kern van de WOO oplossing vormt het oublicatie object van [Open Index](https://index.openregisters.app/), hier bovenop zijn er een aantal WOO specifieke metadatasets gedefineerd. Deze metadatasets lijnen uit met de TOOI categorien zo als die geerft zijn vanuit PLOOI en momenteel worden toegepast in de Woo Index van KOOP. Bij het synchronyseren van data uit de onderlinggende bronnen maakt de WOO service gebruik van mappings om de bronnen om te slaan naar publicatie objecten op Open Index

## Wanneer welke cateogrie?
De WOO service bepaald aan de hand van het label Woo_categorie (in het geval van sherpoint) of de woo_categorie eigenschap (in het geval van een zaaksysteem) naar welke metadata set een bron object word gemmapped

## TOOI specifieke waarden
Open Index staat het toe dat organisaties zelf invulling geven aan bepaalde properties (zo als categorien en thema's) door middel van strings (zie ook het publicaite object) bij het omzetten naar TOOI kunnen echter alleen waarden uit de TOOI selectie lijsten worden toegepast. Vanuit TOOI zijn alle specifieke waarden toegeveogd aan [https://identifier.overheid.nl](https://standaarden.overheid.nl/tooi/waardelijsten/) dat betekend dat alle hieronder opgenomen TOOI id's ook kunnen worden gelezen als UIT onder base-uri: https://identifier.overheid.nl/tooi/def/thes/kern/[id].

### Categorien & Metadata
De volledige lijst is (in lijn met [diwoo metadata lijsten](https://standaarden.overheid.nl/diwoo/metadata/doc/0.9.1/diwoo-metadata-lijsten_xsd_Simple_Type_diwoo_scw_woo_informatiecategorieen)).

| TOOI ID       |  | Naam                                                                                                                                   | Beschrijving                                                                                                                                        | Koop Defintie's                                                                                                                                                                             | Metadata     |
|---------------|-----------|----------------------------------------------------------------------------------------------------------------------------------------|----------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|--------------------------------------------------------------------------------------------------------------------------------------------------|
| c_99a836c7    | 2e          | adviezen                                                                                                                               | Adviezen over ontwerpen en andere onderwerpen van adviescolleges of -commissies, exclusief adviezen die betrekking hebben op individuele gevallen.                   | [Defintie](https://www.open-overheid.nl/onderwerpen/actieve-openbaarmaking/instrumenten-en-diensten/richtlijnen/2024/1/11/beslishulp-onderzoeksrapporten)                                   | [metadata.tooi_adviezen](/docs/schema/metadata.tooi_adviezen.md)|
| c_3a248e3a    | 2d          | agenda’s en besluitenlijsten bestuurscolleges        | Agenda’s en besluitenlijsten van vergaderingen van diverse bestuurlijke organen.                                                       | [Defintie](https://www.open-overheid.nl/onderwerpen/actieve-openbaarmaking/instrumenten-en-diensten/richtlijnen/2023/11/30/werkdefinitie-agendas-en-besluitenlijsten-bestuurscolleges)                 | [metadata.tooi_agendas_en_besluitenlijsten_bestuurscolleges](/Objecten/metadata.tooi_agendas_en_besluitenlijsten_bestuurscolleges.md)              |
| c_89ee6784    | 1e          | bereikbaarheidsgegevens                              | Bereikbaarheidsinformatie van bestuursorganen en hun organisatieonderdelen.                                                            | Nog niet vastgesteld                                                                                                                                                                        | [metadata.tooi_bereikbaarheidsgegevens](/Objecten/metadata.tooi_bereikbaarheidsgegevens.md)                                                        |
| c_46a81018    | 2k          | beschikkingen                                        | Beschikkingen, uitgezonderd specifieke categorieën.                                                                                    | Nog niet vastgesteld                                                                                                                                                                        | [metadata.tooi_beschikkingen](/Objecten/metadata.tooi_beschikkingen.md)                                                                            |
| c_8c840238    | 2a          | bij vertegenwoordigende organen ingekomen stukken    | Ingekomen stukken bij diverse overheidsorganen, uitgezonderd bepaalde vertrouwelijke informatie of individuele gevallen.               | Nog niet vastgesteld                                                                                                                                                                        | [metadata.tooi_bij_vertegenwoordigende_organen_ingekomen_stukken](/Objecten/metadata.tooi_bij_vertegenwoordigende_organen_ingekomen_stukken.md)    |
| c_8fc2335c    | 2f          | convenanten                                          | Convenanten.                                                                                                                           | [Defintie](https://www.open-overheid.nl/onderwerpen/actieve-openbaarmaking/instrumenten-en-diensten/richtlijnen/2024/2/16/hulpmiddel-convenanten   )                                                   | [metadata.tooi_convenanten](/Objecten/metadata.tooi_convenanten.md)                                                                                |
| c_c6cd1213    | 2g          | jaarplannen en jaarverslagen                         | Jaarplannen en jaarverslagen van bestuursorganen over hun taakuitvoering.                                                              | Nog niet vastgesteld                                                                                                                                                                        | [metadata.tooi_jaarplannen_en_jaarverslagen](/Objecten/metadata.wtooi_jaarplannen_en_jaarverslagen.md)                                             |
| c_a870c43d    | 2l          | klachtoordelen                                       | Schriftelijke oordelen in klachtprocedures.                                                                                            | [Defintie](https://www.open-overheid.nl/onderwerpen/actieve-openbaarmaking/instrumenten-en-diensten/richtlijnen/2024/2/16/werkdefinitie-klachtoordelen)                                                | [metadata.tooi_klachtoordelen](/Objecten/metadata.tooi_klachtoordelen.md)                                                                          |
| c_fdaee95e    | 2j          | onderzoeksrapporten                                  | Onderzoeksrapporten opgesteld op verzoek van bestuursorganen die geen taakuitvoering zijn, gericht op organisatie of beleidsevaluatie. | [Defintie](https://www.open-overheid.nl/onderwerpen/actieve-openbaarmaking/instrumenten-en-diensten/richtlijnen/2024/1/11/beslishulp-onderzoeksrapporten)                                              | [metadata.tooi_onderzoeksrapporten](/Objecten/metadata.tooi_onderzoeksrapporten.md)                                                                |
| c_759721e2    | 1c          | ontwerpen van wet- en regelgeving met adviesaanvraag | Ontwerpen van wetgeving waarover extern advies is gevraagd, inclusief de adviesaanvraag.                                               | Nog niet vastgesteld                                                                                                                                                                        | [metadata.tooi_ontwerpen_van_wet_en_regelgeving_met_adviesaanvraag](/Objecten/metadata.tooi_ontwerpen_van_wet_en_regelgeving_met_adviesaanvraag.md) |
| c_40a05794    | 1d          |  organisatie en werkwijze                             | Informatie over de organisatie en werkwijze van bestuursorganen.                                                                       | Nog niet vastgesteld                                                                                                                                                                        | [metadata.tooi_organisatie_en_werkwijze](/Objecten/metadata.tooi_organisatie_en_werkwijze.md)                                                      |
| c_aab6bfc7    | 1b          | overige besluiten van algemene strekking             | Overige besluiten van algemene strekking.                                                                                              | Nog niet vastgesteld                                                                                                                                                                        | [metadata.tooi_overige_besluiten_van_algemene_strekking](/Objecten/metadata.tooi_overige_besluiten_van_algemene_strekking.md)                      |
| c_cf268088    | 2h          | subsidieverplichtingen anders dan met beschikking    | Subsidieverplichtingen die niet via een beschikking lopen, specifiek bij Ministerie van Binnenlandse Zaken.                            | Nog niet vastgesteld                                                                                                                                                                        | [metadata.tooi_subsidieverplichtingen_anders_dan_met_beschikking](/Objecten/metadata.tooi_subsidieverplichtingen_anders_dan_met_beschikking.md)    |
| c_db4862c3    | 2c          | vergaderstukken decentrale overheden                 | Vergaderstukken en verslagen van diverse decentrale overheden en hun commissies.                                                       | [Defintie](https://www.open-overheid.nl/onderwerpen/actieve-openbaarmaking/instrumenten-en-diensten/publicaties/2023/07/20/werkdefinitie-woo-informatiecategorie-vergaderstukken-decentrale-overheden) | [metadata.tooi_vergaderstukken_decentrale_overheden](/Objecten/metadata.tooi_vergaderstukken_decentrale_overheden.md)                              |
| c_c76862ab    | 2b          | vergaderstukken Staten-Generaal                      | Vergaderstukken en verslagen van de Staten-Generaal, uitgezonderd vertrouwelijke informatie verstrekt aan de Staten-Generaal.          | Nog niet vastgesteld                                                                                                                                                                        | [metadata.tooi_vergaderstukken_staten_generaal](/Objecten/metadata.tooi_vergaderstukken_staten_generaal.md)                                        |
| c_139c6280    | 1a          | wetten en algemeen verbindende voorschriften         | Wetten en andere algemeen verbindende voorschriften.                                                                                   | Nog niet vastgesteld                                                                                                                                                                        | [metadata.tooi_wetten_en_algemeen_verbindende_voorschriften](/Objecten/metadata.tooi_wetten_en_algemeen_verbindende_voorschriften.md)              |
| c_3baef532    | 2i          | Woo-verzoeken en -besluiten                          | Inhoud van schriftelijke Woo-verzoeken en besluiten daarop, inclusief verstrekte informatie.                                           | [Defintie](https://www.open-overheid.nl/onderwerpen/actieve-openbaarmaking/instrumenten-en-diensten/publicaties/2023/07/20/werkdefinitie-woo-informatiecategorie-woo-verzoeken-en--besluiten)          | [metadata.tooi_woo_verzoeken_en_besluiten](Objecten/metadata.tooi_woo_verzoeken_en_besluiten.md)                                                   |

Voor het merendeel van de metadatasets geld dat deze (op dit moment) nog geen aanvullende eigenschappen (properties) hebben. De metadatasets die dat wel hebben zijn:

| Naam | Aanvullende eigenschappen |
|--|--|
| adviezen | `oprdachtgever`. `onderdeelTaak`,`onderwerp`, `feitelijkMateriaal` |
| Woo-verzoeken en -besluiten | `datumBesluit`, `datumOntvangst`, `termijnoverschrijding` |
| klachtoordelen | `gedraging`, `bevindingen`, `oordeel`, `conclusies`, `datumBesluit`, `termijnoverschrijding` |

### Thema's
Binnen Open Index staat het organisaties vrij om zelf theme's te defineren aan de hand van strings. Als deze thema's qua naam overeenkomen met de [TOP lijst](https://standaarden.overheid.nl/tooi/waardelijsten/work?work_uri=https%3A%2F%2Fidentifier.overheid.nl%2Ftooi%2Fset%2Fscw_toplijst) worden ze door de woo service voorzien van een TOOI code en TOOI uri (de code vooraf gegaan door `https://identifier.overheid.nl/tooi/def/thes/top/`).

De volledige lijst is (in lijn met [diwoo metadata lijsten](https://standaarden.overheid.nl/diwoo/metadata/doc/0.9.1/diwoo-metadata-lijsten_xsd_Simple_Type_diwoo_themalijst#themalijst)).

| TOOI ID       | Naam                                         |
|---------------|---------------------------------------------|
| c_0361ffb3    | cultuur en recreatie                        |
| c_2408fb5a    | cultureel erfgoed                           |
| c_6b728132    | media                                       |
| c_70e03904    | evenementen                                 |
| c_75809540    | horeca                                      |
| c_a6c5e5b8    | recreatie                                   |
| c_e277e756    | religie                                     |
| c_f72b706a    | cultuur                                     |
| c_124eaf3a    | wonen                                       |
| c_17a86a17    | woningmarkt                                 |
| c_a6a9eddd    | bouwen en verbouwen                         |
| c_391585db    | overheidsfinanciën                          |
| c_25e30d03    | belasting                                   |
| c_4348dad1    | begroting                                   |
| c_399f194b    | migratie en integratie                      |
| c_2e9944e7    | migratie                                    |
| c_a94e1fa4    | integratie                                  |
| c_3eb6243b    | organisatie en bedrijfsvoering              |
| c_068da9fb    | inkoop en beheer                            |
| c_ee06665e    | informatievoorziening en ICT                |
| c_f28344a5    | koninkrijksrelaties                         |
| c_f2c9a613    | overheidspersoneel                          |
| c_f37fd49d    | inrichting van de overheid                  |
| c_f6d7f591    | interne organisatie                         |
| c_849842ac    | verkeer                                     |
| c_2835e395    | luchtvaart                                  |
| c_319461d7    | openbaar vervoer                            |
| c_d3b599f8    | scheepvaart                                 |
| c_f411e390    | rail- en wegverkeer                         |
| c_9d1917e9    | werk                                        |
| c_1f37c612    | arbeidsverhoudingen                         |
| c_4e83eca7    | arbeidsomstandigheden                       |
| c_afa30a11    | natuur en milieu                            |
| c_28ddcea5    | lucht                                       |
| c_389a72e6    | water                                       |
| c_61d3e636    | stoffen                                     |
| c_79010191    | klimaatverandering                          |
| c_7ce8a10c    | bodem                                       |
| c_9f410ab6    | geluid                                      |
| c_d96f9cd3    | afval                                       |
| c_db2fbedb    | natuur- en landschapsbeheer                 |
| c_c232ae4a    | onderwijs en wetenschap                     |
| c_08d12aef    | onderzoek en wetenschap                     |
| c_1f781691    | speciaal onderwijs                          |
| c_4eb912c1    | onderwijsvoorzieningen                      |
| c_516ec027    | hoger onderwijs                             |
| c_7b01f260    | basisonderwijs                              |
| c_980b8db2    | voortgezet onderwijs                        |
| c_b46b92e7    | beroepsonderwijs                            |
| c_cfc7d5ab    | ruimte en infrastructuur                    |
| c_85a72eb3    | netwerken                                   |
| c_9af4b880    | ruimtelijke ordening                        |
| c_a71dc533    | waterbeheer                                 |
| c_d0463fb7    | zorg en gezondheid                          |
| c_0fe7c5e7    | jeugdzorg                                   |
| c_218c52ee    | ethiek                                      |
| c_341c5bef    | zorgverzekeringen                           |
| c_6b9627b5    | geneesmiddelen en medische hulpmiddelen     |
| c_7a0f87d5    | zorginstellingen                            |
| c_8b081a63    | gezondheidsrisico's                         |
| c_9a574af9    | ziekten en behandelingen                    |
| c_f02ce1b3    | ouderenzorg                                 |
| c_d363776f    | economie                                    |
| c_195b5b5e    | transport                                   |
| c_3afc269f    | ondernemen                                  |
| c_4d1c84a7    | dienstensector                              |
| c_83db27fc    | handel                                      |
| c_87d3d66c    | kenniseconomie                              |
| c_989e37d9    | landbouw, visserij, voedselkwaliteit        |
| c_dc437d00    | markttoezicht                               |
| c_f4f1867a    | energie                                     |
| c_d4890526    | sociale zekerheid                           |
| c_1781ce20    | ouderen                                     |
| c_76136c82    | gezin en kinderen                           |
| c_fc530104    | arbeidsongeschiktheid en werkloosheid       |
| c_d58b78ca    | openbare orde en veiligheid                 |
| c_4872b086    | terrorisme                                  |
| c_d772bf06    | veiligheid                                  |
| c_fcac43e4    | criminaliteit                               |
| c_f4679acc    | recht                                       |
| c_1fe409d0    | staatsrecht                                 |
| c_72138db9    | rechtspraak                                 |
| c_824ce7ff    | privaatrecht                                |
| c_98e03e32    | strafrecht                                  |
| c_beb01b1c    | bestuursrecht                               |
| c_d2b1338a    | rechten en vrijheden                        |
| c_e3d35361    | bezwaar en klachten                         |
| c_f47ad6ca    | internationaal                              |
| c_576c2bd7    | internationale betrekkingen                 |
| c_68609e19    | Europese zaken                              |
| c_8940ed07    | ontwikkelingssamenwerking                   |
| c_daaa67b3    | defensie                                    |

### Documentsoorten
Binnen PLOOI en daarme erfgenaam TOOI worden er verschillende document soorten onderschreven, vanuit Open Index kennen we geen soort document maar een label. Daarbij kan één document ook meerdere labels hebben en hebben we labbels niet hard gekopeld aan cattegorien (organisaties zijn immers vrij in de defintie). Dat betekend echter wel dat alleen bepaalde labels worden overgenomen richting de woo index wetende

[diwoo metadata lijsten](https://standaarden.overheid.nl/diwoo/metadata/doc/0.9.1/diwoo-metadata-lijsten_xsd_Simple_Type_diwoo_ccw_plooi_documentsoorten)

| TOOI ID       | Naam                                  | Beschrijving                                                                                                                                                                          |
|---------------|---------------------------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| c_0e425c23    | adviesvoorstel                        |                                                                                                                                                                                       |
| c_a40458df    | adviesaanvraag                        |                                                                                                                                                                                       |
| c_d506b718    | advies                                |                                                                                                                                                                                       |
| c_38ba44de    | evaluatierapport                      |                                                                                                                                                                                       |
| c_4efe1293    | inspectierapport                      |                                                                                                                                                                                       |
| c_6f49bf34    | onderzoeksrapport                     |                                                                                                                                                                                       |
| c_8b92eab4    | ambtsbericht                          | Een rapport van de minister van Buitenlandse Zaken aan de minister voor Vreemdelingenzaken en Integratie, met informatie over de situatie in een land van herkomst van asielzoekers.   |
| c_99d3e284    | verantwoordingsrapport                |                                                                                                                                                                                       |
| c_cccba364    | voortgangsrapport                     |                                                                                                                                                                                       |
| c_3d782f30    | jaarverslag                           |                                                                                                                                                                                       |
| c_9376c730    | beleidsnota                           |                                                                                                                                                                                       |
| c_a1dae55d    | termijnagenda                         | Overzicht van aanstaande en/of openstaande onderwerpen die binnen een bepaalde termijn moeten worden besproken of uitgevoerd.                                                          |
| c_a6f44748    | jaarplan                              |                                                                                                                                                                                       |
| c_dfa0ff1f    | begroting                             |                                                                                                                                                                                       |
| c_2977c34f    | beslisnota                            |                                                                                                                                                                                       |
| c_1cf18f83    | Wob-/Woo-verzoek                      |                                                                                                                                                                                       |
| c_4f50ca9c    | beslissing op Wob-/Woo-verzoek        |                                                                                                                                                                                       |
| c_45be34e9    | beschikking tot opleggen boete        |                                                                                                                                                                                       |
| c_566a4430    | beschikking tot opleggen last onder dwangsom |                                                                                                                                                                                      |
| c_a55b7649    | beschikking tot opleggen last onder bestuursdwang |                                                                                                                                                                                    |
| c_002fc258    | vergunning                            | Officiële toestemming van de overheid om een bepaalde activiteit uit te voeren, al dan niet onder bepaalde voorwaarden.                                                                |
| c_2ab17960    | erkenningsbeschikking                 | Beschikking waarbij wordt vastgesteld dat een persoon of instelling aan bepaalde eisen voldoet.                                                                                       |
| c_2c0438f4    | instemmingsbeschikking                |                                                                                                                                                                                       |
| c_30e8b503    | concessie                             | Een bij beschikking verleende vergunning van de overheid die anderen uitsluit.                                                                                                         |
| c_acb44d77    | benoemingsbeschikking                 |                                                                                                                                                                                       |
| c_aebfec50    | subsidiebeschikking                   |                                                                                                                                                                                       |
| c_c1956ef0    | aanwijzingsbeschikking                |                                                                                                                                                                                       |
| c_f7dc55d9    | ontheffingsbeschikking                | Beschikking waarbij in een individueel geval een uitzondering op een wettelijk verbod of gebod wordt gemaakt.                                                                         |
| c_2aedadff    | toespraak                             |                                                                                                                                                                                       |
| c_3eb5572a    | circulaire                            | Een brief die aan verschillende personen of instellingen wordt rondgestuurd. Kan zowel toelichtend als regelgevend van karakter zijn.                                                  |
| c_7652d853    | brief                                 |                                                                                                                                                                                       |
| c_7eba29ad    | persbericht                           |                                                                                                                                                                                       |
| c_97f44ea5    | brochure                              |                                                                                                                                                                                       |
| c_9ecc0007    | organisatiegegevens                   | Gegevens over hoe doelstellingen, werkwijze en interne structuur van een organisatie.                                                                                                 |
| c_c2f56984    | nieuwsbericht                         |                                                                                                                                                                                       |
| c_06a67c95    | bezwaarschrift                        |                                                                                                                                                                                       |
| c_5824891d    | subsidieaanvraag                      |                                                                                                                                                                                       |
| c_d943ca24    | ontheffingsaanvraag                   |                                                                                                                                                                                       |
| c_dad2a6ed    | vergunningaanvraag                    |                                                                                                                                                                                       |
| c_df2cb56e    | zienswijze                            | Reactie die een belanghebbende aan het bevoegd gezag kan sturen als reactie op een ontwerp-besluit.                                                                                   |
| c_ef935990    | klacht                                |                                                                                                                                                                                       |
| c_03c52ba0    | Kamervraag zonder antwoord            |                                                                                                                                                                                       |
| c_6d494ab6    | Kamervraag met antwoord               |                                                                                                                                                                                       |
| c_056a75e1    | Kamerstuk                             |                                                                                                                                                                                       |
| c_a17ef403    | Handelingen                           |                                                                                                                                                                                       |
| c_f1652921    | niet-dossierstuk                      |                                                                                                                                                                                       |
| c_0670bae1    | Staatscourant                         |                                                                                                                                                                                       |
| c_12cd7b9b    | Blad gemeenschappelijke regeling      |                                                                                                                                                                                       |
| c_61e3099a    | Staatsblad                            |                                                                                                                                                                                       |
| c_81cc2eb5    | Gemeenteblad                          |                                                                                                                                                                                       |
| c_852da199    | Afkondigingsblad                      |                                                                                                                                                                                       |
| c_b3179555    | Tractatenblad                         |                                                                                                                                                                                       |
| c_bdc265d5    | Provinciaal blad                      |                                                                                                                                                                                       |
| c_c97b118a    | Waterschapsblad                       |                                                                                                                                                                                       |
| c_42e406dd    | vergaderverslag                       |                                                                                                                                                                                       |
| c_d4a4792f    | besluitenlijst                        | Een document dat de op een vergadering genomen besluiten kort samenvat. Soms fysiek onderdeel van het vergaderverslag.                                                                 |
| c_de27ae7a    | ingekomen stuk                        | Een vergaderstuk afkomstig van een actor die niet tot het vergaderende gremium behoort, maar dat op diens verzoek, of op eigen initiatief van het vergaderende gremium op de agenda staat. |
| c_f90465b3    | agenda                                | Een vergaderstuk dat een opsomming bevat van de op een vergadering te besprechen zaken, vaak met vermelding van stukken, tijdsplanning en deelnemers.                                 |
| c_465163c9    | besluit                               | Een besluit is een schriftelijke beslissing van een bestuursorgaan, inhoudende een publiekrechtelijke rechtshandeling.                                                                |
| c_5b1055aa    | plan                                  |                                                                                                                                                                                       |
| c_d2a6707c    | ministeriële regeling                 |                                                                                                                                                                                       |
| c_fbaa7e4b    | beleidsregel                          | Een bij besluit vastgestelde algemene regel, niet zijnde een algemeen verbindend voorschrift, omtrent de afweging van belangen, de vaststelling van feiten of de uitleg van wettelijke voorschriften. |
| c_386e74cb    | convenant                             |                                                                                                                                                                                       |

### Documenttypen

## Mappings

## Aanvullende logica

- **WOO 1** Als er is gekozen voor een TOOI metadata set onder `schema` dan worden `categorie`,`data.tooiCategorieNaam` ,`data.tooiCategorieId`,`data.tooiCategorieUri` automatisch gevuld. Deze zijn niet meer overschrijfbaar.


