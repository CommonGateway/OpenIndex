# Publication

The publication object is the core of Open Index, acting as a metadata wrapper for objects and thereby forming the common link between different publications from, for example, WOO and OC.

![Class Diagram](https://github.com/CommonGateway/OpenIndex/blob/OpenIndexService/docs/schema/Publication.svg)

## Properties

| Property | Type | Description | Required |
|----------|------|-------------|----------|
| id | string | The unique identifier of this publication | No |
| title | string | The title (name) of a publication | Yes |
| summary | string | A short summary of the publication for the overview page | Yes |
| description | string | An extensive description of the publication for display on the publication page | No |
| image | string | An image for the publication, can be provided as a reference `url` or `base64` encoded image | No |
| category | string | The category within which the publication falls, these can be self-defined categories or predefined categories | Yes |
| portal | string | An optional reference to a different publication page, for example in the RIS | No |
| publicationDate | string | Date from when this publication should be discoverable, this can be a date in the future or past. Publications where this date is in the future or is blank will **NOT** be displayed in queries of the search API **UNLESS** the call is authenticated. | No |
| featured | boolean | `Featured` can be used to indicate that a publication should be discoverable on, for example, the homepage of a publication platform. From the API perspective, this property merely acts as a flag to find the items that are featured faster. The actual functionality of feature can thus vary per publication platform. | No |
| organization | object | The organization belonging to this publication object, in theory multiple organizations can share one Open Index installation but this is discouraged. | No |
| schema | string | Schemas add predictability and interpretability to the objects published under `data`. They describe the object contained in `data` and the conditions it must meet. For this, we use the [json-schema](https://json-schema.org/) which is itself part of [OAS 3](https://swagger.io/specification/). In the `schema` property, we expect a URL reference to a publicly accessible schema.json object. This could be on a website or GitHub, for instance. During `POST` and `PUT` actions on the publication object, the object in `data` is tested against this schema. Additionally, a consuming party can use the URL to retrieve the schema so they can interpret the object in `data`. | Yes |
| attachments | array | N/A | No |
| themes | array | The urls of the theme's associated with this publication | No |
| data | array | The actual object to be published (must not be larger than 15 MB) | No |
