# Index

An externally found index that can be used as a source in federative search queries

![Class Diagram](https://github.com/CommonGateway/OpenIndex/blob/make-bundle-installable/docs/schema/Index.svg)

## Properties

| Property | Type | Description | Required |
|----------|------|-------------|----------|
| id | string | The unique identifier of the index | No |
| title | string | The title (name) of the index | Yes |
| summary | string | A short summary of the index | Yes |
| description | string | An extensive description of the index for display on the index page | Yes |
| image | string | An image for the index, such as a logo. Can be provided as a reference `url` or `base64` encoded image | No |
| url | string | The URL to the index's API | No |
| status | integer | The most recent status of this index | No |
| organization | object | The organization that provides this index (acts as the default for publications in the index) | No |
