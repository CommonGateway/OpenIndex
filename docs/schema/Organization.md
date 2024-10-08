# Organization

An organization that provides a publication or index

![Class Diagram](https://github.com/CommonGateway/OpenIndex/blob/main/docs/schema/Organization.svg)

## Properties

| Property | Type | Description | Required |
|----------|------|-------------|----------|
| id | string | The unique identifier for this organization | No |
| title | string | The title (name) of a subject | Yes |
| summary | string | A short summary of the subject for the overview page | Yes |
| description | string | An extensive description of the subject for display on the subject page | No |
| image | string | An image for the subject, can be provided as a reference `url` or `base64` encoded image | No |
| oin | string | N/A | No |
| tooi | string | N/A | No |
| rsin | string | The RSIN of the Non-natural person being the organization that created the case. This must be a valid RSIN consisting of 9 digits and comply with the 11-test as described in https://en.wikipedia.org/wiki/Burgerservicenummer#11-proef. | No |
| pki | string | Het PKI certificaat wat word gebruik om namens deze organisatie te publiceren | No |
