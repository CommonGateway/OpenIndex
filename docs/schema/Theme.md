# Theme

A thematic clustering of publications in a manner logical for searching, can also be used for topics. Themes exist within a single index and are thus organization specific unless the index is shared by multiple organizations

![Class Diagram](https://github.com/CommonGateway/OpenIndex/blob/documentation-2024/docs/schema/Theme.svg)

## Properties

| Property | Type | Description | Required |
|----------|------|-------------|----------|
| id | string | The unique identifier of this theme | No |
| title | string | The title (name) of a theme. | Yes |
| summary | string | A short summary of the theme for the overview page | Yes |
| description | string | An extensive description of the theme for display on the theme page | No |
| image | string | An image for the theme, can be provided as a reference `url` or `base64` encoded image | No |
| publications | integer | The number of publications associated with this theme, this value is automatically updated and thus cannot be set via the API | No |
