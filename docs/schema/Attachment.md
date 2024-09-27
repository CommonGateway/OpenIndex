# Attachment

An attachment object

![Class Diagram](https://github.com/CommonGateway/OpenIndex/blob/main/docs/schema/Attachment.svg)

## Properties

| Property | Type | Description | Required |
|----------|------|-------------|----------|
| id | string | The unique identifier of this subject | No |
| reference | string | The unique human readable identifier of the underlaying source object of the publication, e.g. a case number or letter reference | No |
| title | string | The title (name) of a Attachment, if the title is left empty the file name wil be used instead | No |
| summary | string | A short summary of the subject for the overview page | No |
| description | string | An extensive description of the subject for display on the subject page | No |
| labels | array | Possible labels on the attachment that are used to assess what kind of file it is | No |
| accessURL | string | The URL to the original document, this URL should be accessible to Open Index. When there is an ‘POST` or `PUT` request to Open Index then Open Index wil try to get the original file from the URL and use it to fill the documentText, type, extension and size` properties | No |
| downloadURL | string | The URL to download the document. | No |
| type | string | The MIME type of the attachment, determined at the time of reading and recorded for display in the UI. This value is automatically updated and thus cannot be set via the API | No |
| extension | string | The extension of the attachment, determined at the time of reading and recorded for display in the UI. This value is automatically updated and thus cannot be set via the API | No |
| size | integer | The size of the attachment in bytes, determined at the time of reading and recorded for display in the UI. This value is automatically updated and thus cannot be set via the API | No |
| anonymization | object | Whether the attachment is properly annonymized and the results there of | No |
| languageObject | object | The language and language level of the object | No |
| version_of | string | Is this attachment a version of another attachment, e.g. annonymized or pdf rendering of another document | No |
| hash | string | **Generated** 
A file hash is essential for ensuring the uniqueness and integrity of files. It serves several critical purposes:

Uniqueness: Each file, regardless of its type, generates a unique hash value. Even a small change in the file content will result in a completely different hash, allowing for easy differentiation between files.

Integrity Verification: By comparing the hash value of a file at different times, one can verify that the file has not been altered. This is crucial for maintaining data integrity, as any unauthorized or accidental changes can be detected immediately.

Security: Hashes play a vital role in security protocols. They ensure that the content has not been tampered with during transmission or storage, providing confidence in the file's authenticity.

Data Deduplication: In systems that store large amounts of data, file hashes help in identifying and eliminating duplicate files, thus saving storage space and improving efficiency.

Digital Signatures and Certificates: Hashes are integral to the functioning of digital signatures and certificates, which verify the identity of the sender and ensure that the file has not been altered.

Overall, file hashes are a fundamental tool in data management and cybersecurity, ensuring that files remain unique, intact, and secure. | No |
| published | string | N/A | No |
| modified | string | N/A | No |
| license | string | N/A | No |
