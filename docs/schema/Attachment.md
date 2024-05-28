# Attachment

An attachment object

![Class Diagram](https://github.com/CommonGateway/OpenIndex/blob/publication-subscriber/docs/schema/Attachment.svg)

## Properties

| Property | Type | Description | Required |
|----------|------|-------------|----------|
| id | string | The unique identifier of this subject | No |
| title | string | The title (name) of a Attachment, if the title is left empty the file name wil be used instead | No |
| summary | string | A short summary of the subject for the overview page | No |
| description | string | An extensive description of the subject for display on the subject page | No |
| labels | array | Possible labels on the attachment that are used to assess what kind of file it is | No |
| url | string | The URL to the original document, this URL  should be accessible to Open Index. When there is an ‘POST` or `PUT` request to Open Index then Open Index wil try to get the original file from the URL and use it to fill the `documentText`,` type`, ` extension` and ` size` properties | Yes |
| documentText | string | The text from the original document, which is included in the search index to facilitate searching of documents. This value is automatically updated and thus cannot be set via the API | No |
| type | string | The MIME type of the attachment, determined at the time of reading and recorded for display in the UI. This value is automatically updated and thus cannot be set via the API | No |
| extension | string | The extension of the attachment, determined at the time of reading and recorded for display in the UI. This value is automatically updated and thus cannot be set via the API | No |
| size | integer | The size of the attachment in bytes, determined at the time of reading and recorded for display in the UI. This value is automatically updated and thus cannot be set via the API | No |
