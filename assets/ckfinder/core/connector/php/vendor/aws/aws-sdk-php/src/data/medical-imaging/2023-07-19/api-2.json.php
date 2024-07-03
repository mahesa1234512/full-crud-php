<?php
// This file was auto-generated from sdk-root/src/data/medical-imaging/2023-07-19/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2023-07-19', 'endpointPrefix' => 'medical-imaging', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceFullName' => 'AWS Health Imaging', 'serviceId' => 'Medical Imaging', 'signatureVersion' => 'v4', 'signingName' => 'medical-imaging', 'uid' => 'medical-imaging-2023-07-19', ], 'operations' => [ 'CopyImageSet' => [ 'name' => 'CopyImageSet', 'http' => [ 'method' => 'POST', 'requestUri' => '/datastore/{datastoreId}/imageSet/{sourceImageSetId}/copyImageSet', 'responseCode' => 200, ], 'input' => [ 'shape' => 'CopyImageSetRequest', ], 'output' => [ 'shape' => 'CopyImageSetResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ServiceQuotaExceededException', ], ], 'endpoint' => [ 'hostPrefix' => 'runtime-', ], ], 'CreateDatastore' => [ 'name' => 'CreateDatastore', 'http' => [ 'method' => 'POST', 'requestUri' => '/datastore', 'responseCode' => 200, ], 'input' => [ 'shape' => 'CreateDatastoreRequest', ], 'output' => [ 'shape' => 'CreateDatastoreResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ServiceQuotaExceededException', ], ], 'idempotent' => true, ], 'DeleteDatastore' => [ 'name' => 'DeleteDatastore', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/datastore/{datastoreId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteDatastoreRequest', ], 'output' => [ 'shape' => 'DeleteDatastoreResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], ], 'idempotent' => true, ], 'DeleteImageSet' => [ 'name' => 'DeleteImageSet', 'http' => [ 'method' => 'POST', 'requestUri' => '/datastore/{datastoreId}/imageSet/{imageSetId}/deleteImageSet', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteImageSetRequest', ], 'output' => [ 'shape' => 'DeleteImageSetResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], ], 'endpoint' => [ 'hostPrefix' => 'runtime-', ], 'idempotent' => true, ], 'GetDICOMImportJob' => [ 'name' => 'GetDICOMImportJob', 'http' => [ 'method' => 'GET', 'requestUri' => '/getDICOMImportJob/datastore/{datastoreId}/job/{jobId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetDICOMImportJobRequest', ], 'output' => [ 'shape' => 'GetDICOMImportJobResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'GetDatastore' => [ 'name' => 'GetDatastore', 'http' => [ 'method' => 'GET', 'requestUri' => '/datastore/{datastoreId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetDatastoreRequest', ], 'output' => [ 'shape' => 'GetDatastoreResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'GetImageFrame' => [ 'name' => 'GetImageFrame', 'http' => [ 'method' => 'POST', 'requestUri' => '/datastore/{datastoreId}/imageSet/{imageSetId}/getImageFrame', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetImageFrameRequest', ], 'output' => [ 'shape' => 'GetImageFrameResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], ], 'endpoint' => [ 'hostPrefix' => 'runtime-', ], ], 'GetImageSet' => [ 'name' => 'GetImageSet', 'http' => [ 'method' => 'POST', 'requestUri' => '/datastore/{datastoreId}/imageSet/{imageSetId}/getImageSet', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetImageSetRequest', ], 'output' => [ 'shape' => 'GetImageSetResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], ], 'endpoint' => [ 'hostPrefix' => 'runtime-', ], ], 'GetImageSetMetadata' => [ 'name' => 'GetImageSetMetadata', 'http' => [ 'method' => 'POST', 'requestUri' => '/datastore/{datastoreId}/imageSet/{imageSetId}/getImageSetMetadata', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetImageSetMetadataRequest', ], 'output' => [ 'shape' => 'GetImageSetMetadataResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], ], 'endpoint' => [ 'hostPrefix' => 'runtime-', ], ], 'ListDICOMImportJobs' => [ 'name' => 'ListDICOMImportJobs', 'http' => [ 'method' => 'GET', 'requestUri' => '/listDICOMImportJobs/datastore/{datastoreId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListDICOMImportJobsRequest', ], 'output' => [ 'shape' => 'ListDICOMImportJobsResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'ListDatastores' => [ 'name' => 'ListDatastores', 'http' => [ 'method' => 'GET', 'requestUri' => '/datastore', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListDatastoresRequest', ], 'output' => [ 'shape' => 'ListDatastoresResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListImageSetVersions' => [ 'name' => 'ListImageSetVersions', 'http' => [ 'method' => 'POST', 'requestUri' => '/datastore/{datastoreId}/imageSet/{imageSetId}/listImageSetVersions', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListImageSetVersionsRequest', ], 'output' => [ 'shape' => 'ListImageSetVersionsResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], ], 'endpoint' => [ 'hostPrefix' => 'runtime-', ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'SearchImageSets' => [ 'name' => 'SearchImageSets', 'http' => [ 'method' => 'POST', 'requestUri' => '/datastore/{datastoreId}/searchImageSets', 'responseCode' => 200, ], 'input' => [ 'shape' => 'SearchImageSetsRequest', ], 'output' => [ 'shape' => 'SearchImageSetsResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], ], 'endpoint' => [ 'hostPrefix' => 'runtime-', ], ], 'StartDICOMImportJob' => [ 'name' => 'StartDICOMImportJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/startDICOMImportJob/datastore/{datastoreId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'StartDICOMImportJobRequest', ], 'output' => [ 'shape' => 'StartDICOMImportJobResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ServiceQuotaExceededException', ], ], 'idempotent' => true, ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'output' => [ 'shape' => 'TagResourceResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], ], 'idempotent' => true, ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'output' => [ 'shape' => 'UntagResourceResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], ], 'idempotent' => true, ], 'UpdateImageSetMetadata' => [ 'name' => 'UpdateImageSetMetadata', 'http' => [ 'method' => 'POST', 'requestUri' => '/datastore/{datastoreId}/imageSet/{imageSetId}/updateImageSetMetadata', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateImageSetMetadataRequest', ], 'output' => [ 'shape' => 'UpdateImageSetMetadataResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ServiceQuotaExceededException', ], ], 'endpoint' => [ 'hostPrefix' => 'runtime-', ], ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'Arn' => [ 'type' => 'string', 'pattern' => 'arn:aws((-us-gov)|(-iso)|(-iso-b)|(-cn))?:medical-imaging:[a-z0-9-]+:[0-9]{12}:datastore/[0-9a-z]{32}(/imageset/[0-9a-z]{32})?', ], 'ClientToken' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '[A-Za-z0-9._-]+', ], 'ConflictException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], 'CopyDestinationImageSet' => [ 'type' => 'structure', 'required' => [ 'imageSetId', 'latestVersionId', ], 'members' => [ 'imageSetId' => [ 'shape' => 'ImageSetId', ], 'latestVersionId' => [ 'shape' => 'ImageSetExternalVersionId', ], ], ], 'CopyDestinationImageSetProperties' => [ 'type' => 'structure', 'required' => [ 'imageSetId', 'latestVersionId', ], 'members' => [ 'imageSetId' => [ 'shape' => 'ImageSetId', ], 'latestVersionId' => [ 'shape' => 'ImageSetExternalVersionId', ], 'imageSetState' => [ 'shape' => 'ImageSetState', ], 'imageSetWorkflowStatus' => [ 'shape' => 'ImageSetWorkflowStatus', ], 'createdAt' => [ 'shape' => 'Date', ], 'updatedAt' => [ 'shape' => 'Date', ], 'imageSetArn' => [ 'shape' => 'Arn', ], ], ], 'CopyImageSetInformation' => [ 'type' => 'structure', 'required' => [ 'sourceImageSet', ], 'members' => [ 'sourceImageSet' => [ 'shape' => 'CopySourceImageSetInformation', ], 'destinationImageSet' => [ 'shape' => 'CopyDestinationImageSet', ], ], ], 'CopyImageSetRequest' => [ 'type' => 'structure', 'required' => [ 'datastoreId', 'sourceImageSetId', 'copyImageSetInformation', ], 'members' => [ 'datastoreId' => [ 'shape' => 'DatastoreId', 'location' => 'uri', 'locationName' => 'datastoreId', ], 'sourceImageSetId' => [ 'shape' => 'ImageSetId', 'location' => 'uri', 'locationName' => 'sourceImageSetId', ], 'copyImageSetInformation' => [ 'shape' => 'CopyImageSetInformation', ], ], 'payload' => 'copyImageSetInformation', ], 'CopyImageSetResponse' => [ 'type' => 'structure', 'required' => [ 'datastoreId', 'sourceImageSetProperties', 'destinationImageSetProperties', ], 'members' => [ 'datastoreId' => [ 'shape' => 'DatastoreId', ], 'sourceImageSetProperties' => [ 'shape' => 'CopySourceImageSetProperties', ], 'destinationImageSetProperties' => [ 'shape' => 'CopyDestinationImageSetProperties', ], ], ], 'CopySourceImageSetInformation' => [ 'type' => 'structure', 'required' => [ 'latestVersionId', ], 'members' => [ 'latestVersionId' => [ 'shape' => 'ImageSetExternalVersionId', ], ], ], 'CopySourceImageSetProperties' => [ 'type' => 'structure', 'required' => [ 'imageSetId', 'latestVersionId', ], 'members' => [ 'imageSetId' => [ 'shape' => 'ImageSetId', ], 'latestVersionId' => [ 'shape' => 'ImageSetExternalVersionId', ], 'imageSetState' => [ 'shape' => 'ImageSetState', ], 'imageSetWorkflowStatus' => [ 'shape' => 'ImageSetWorkflowStatus', ], 'createdAt' => [ 'shape' => 'Date', ], 'updatedAt' => [ 'shape' => 'Date', ], 'imageSetArn' => [ 'shape' => 'Arn', ], ], ], 'CreateDatastoreRequest' => [ 'type' => 'structure', 'required' => [ 'clientToken', ], 'members' => [ 'datastoreName' => [ 'shape' => 'DatastoreName', ], 'clientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, ], 'tags' => [ 'shape' => 'TagMap', ], 'kmsKeyArn' => [ 'shape' => 'KmsKeyArn', ], ], ], 'CreateDatastoreResponse' => [ 'type' => 'structure', 'required' => [ 'datastoreId', 'datastoreStatus', ], 'members' => [ 'datastoreId' => [ 'shape' => 'DatastoreId', ], 'datastoreStatus' => [ 'shape' => 'DatastoreStatus', ], ], ], 'DICOMAccessionNumber' => [ 'type' => 'string', 'max' => 16, 'min' => 0, 'sensitive' => true, ], 'DICOMAttribute' => [ 'type' => 'blob', 'max' => 10000, 'min' => 1, 'sensitive' => true, ], 'DICOMImportJobProperties' => [ 'type' => 'structure', 'required' => [ 'jobId', 'jobName', 'jobStatus', 'datastoreId', 'dataAccessRoleArn', 'inputS3Uri', 'outputS3Uri', ], 'members' => [ 'jobId' => [ 'shape' => 'JobId', ], 'jobName' => [ 'shape' => 'JobName', ], 'jobStatus' => [ 'shape' => 'JobStatus', ], 'datastoreId' => [ 'shape' => 'DatastoreId', ], 'dataAccessRoleArn' => [ 'shape' => 'RoleArn', ], 'endedAt' => [ 'shape' => 'Date', ], 'submittedAt' => [ 'shape' => 'Date', ], 'inputS3Uri' => [ 'shape' => 'S3Uri', ], 'outputS3Uri' => [ 'shape' => 'S3Uri', ], 'message' => [ 'shape' => 'Message', ], ], ], 'DICOMImportJobSummaries' => [ 'type' => 'list', 'member' => [ 'shape' => 'DICOMImportJobSummary', ], ], 'DICOMImportJobSummary' => [ 'type' => 'structure', 'required' => [ 'jobId', 'jobName', 'jobStatus', 'datastoreId', ], 'members' => [ 'jobId' => [ 'shape' => 'JobId', ], 'jobName' => [ 'shape' => 'JobName', ], 'jobStatus' => [ 'shape' => 'JobStatus', ], 'datastoreId' => [ 'shape' => 'DatastoreId', ], 'dataAccessRoleArn' => [ 'shape' => 'RoleArn', ], 'endedAt' => [ 'shape' => 'Date', ], 'submittedAt' => [ 'shape' => 'Date', ], 'message' => [ 'shape' => 'Message', ], ], ], 'DICOMNumberOfStudyRelatedInstances' => [ 'type' => 'integer', 'max' => 10000, 'min' => 0, ], 'DICOMNumberOfStudyRelatedSeries' => [ 'type' => 'integer', 'max' => 10000, 'min' => 0, ], 'DICOMPatientBirthDate' => [ 'type' => 'string', 'max' => 18, 'min' => 0, 'sensitive' => true, ], 'DICOMPatientId' => [ 'type' => 'string', 'max' => 64, 'min' => 0, 'sensitive' => true, ], 'DICOMPatientName' => [ 'type' => 'string', 'max' => 256, 'min' => 0, 'sensitive' => true, ], 'DICOMPatientSex' => [ 'type' => 'string', 'max' => 16, 'min' => 0, 'sensitive' => true, ], 'DICOMSeriesBodyPart' => [ 'type' => 'string', 'max' => 64, 'min' => 0, 'sensitive' => true, ], 'DICOMSeriesInstanceUID' => [ 'type' => 'string', 'max' => 64, 'min' => 0, 'pattern' => '(?:[1-9][0-9]*|0)(\\.(?:[1-9][0-9]*|0))*', 'sensitive' => true, ], 'DICOMSeriesModality' => [ 'type' => 'string', 'max' => 16, 'min' => 0, 'sensitive' => true, ], 'DICOMSeriesNumber' => [ 'type' => 'integer', 'box' => true, 'max' => 2147483647, 'min' => -2147483648, 'sensitive' => true, ], 'DICOMStudyDate' => [ 'type' => 'string', 'max' => 18, 'min' => 0, 'sensitive' => true, ], 'DICOMStudyDateAndTime' => [ 'type' => 'structure', 'required' => [ 'DICOMStudyDate', ], 'members' => [ 'DICOMStudyDate' => [ 'shape' => 'DICOMStudyDate', ], 'DICOMStudyTime' => [ 'shape' => 'DICOMStudyTime', ], ], ], 'DICOMStudyDescription' => [ 'type' => 'string', 'max' => 64, 'min' => 0, 'sensitive' => true, ], 'DICOMStudyId' => [ 'type' => 'string', 'max' => 16, 'min' => 0, 'sensitive' => true, ], 'DICOMStudyInstanceUID' => [ 'type' => 'string', 'max' => 64, 'min' => 0, 'pattern' => '(?:[1-9][0-9]*|0)(\\.(?:[1-9][0-9]*|0))*', 'sensitive' => true, ], 'DICOMStudyTime' => [ 'type' => 'string', 'max' => 28, 'min' => 0, 'sensitive' => true, ], 'DICOMTags' => [ 'type' => 'structure', 'members' => [ 'DICOMPatientId' => [ 'shape' => 'DICOMPatientId', ], 'DICOMPatientName' => [ 'shape' => 'DICOMPatientName', ], 'DICOMPatientBirthDate' => [ 'shape' => 'DICOMPatientBirthDate', ], 'DICOMPatientSex' => [ 'shape' => 'DICOMPatientSex', ], 'DICOMStudyInstanceUID' => [ 'shape' => 'DICOMStudyInstanceUID', ], 'DICOMStudyId' => [ 'shape' => 'DICOMStudyId', ], 'DICOMStudyDescription' => [ 'shape' => 'DICOMStudyDescription', ], 'DICOMNumberOfStudyRelatedSeries' => [ 'shape' => 'DICOMNumberOfStudyRelatedSeries', ], 'DICOMNumberOfStudyRelatedInstances' => [ 'shape' => 'DICOMNumberOfStudyRelatedInstances', ], 'DICOMAccessionNumber' => [ 'shape' => 'DICOMAccessionNumber', ], 'DICOMSeriesInstanceUID' => [ 'shape' => 'DICOMSeriesInstanceUID', ], 'DICOMSeriesModality' => [ 'shape' => 'DICOMSeriesModality', ], 'DICOMSeriesBodyPart' => [ 'shape' => 'DICOMSeriesBodyPart', ], 'DICOMSeriesNumber' => [ 'shape' => 'DICOMSeriesNumber', ], 'DICOMStudyDate' => [ 'shape' => 'DICOMStudyDate', ], 'DICOMStudyTime' => [ 'shape' => 'DICOMStudyTime', ], ], ], 'DICOMUpdates' => [ 'type' => 'structure', 'members' => [ 'removableAttributes' => [ 'shape' => 'DICOMAttribute', ], 'updatableAttributes' => [ 'shape' => 'DICOMAttribute', ], ], ], 'DatastoreId' => [ 'type' => 'string', 'pattern' => '[0-9a-z]{32}', ], 'DatastoreName' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '[A-Za-z0-9._/#-]+', ], 'DatastoreProperties' => [ 'type' => 'structure', 'required' => [ 'datastoreId', 'datastoreName', 'datastoreStatus', ], 'members' => [ 'datastoreId' => [ 'shape' => 'DatastoreId', ], 'datastoreName' => [ 'shape' => 'DatastoreName', ], 'datastoreStatus' => [ 'shape' => 'DatastoreStatus', ], 'kmsKeyArn' => [ 'shape' => 'KmsKeyArn', ], 'datastoreArn' => [ 'shape' => 'Arn', ], 'createdAt' => [ 'shape' => 'Date', ], 'updatedAt' => [ 'shape' => 'Date', ], ], ], 'DatastoreStatus' => [ 'type' => 'string', 'enum' => [ 'CREATING', 'CREATE_FAILED', 'ACTIVE', 'DELETING', 'DELETED', ], ], 'DatastoreSummaries' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatastoreSummary', ], ], 'DatastoreSummary' => [ 'type' => 'structure', 'required' => [ 'datastoreId', 'datastoreName', 'datastoreStatus', ], 'members' => [ 'datastoreId' => [ 'shape' => 'DatastoreId', ], 'datastoreName' => [ 'shape' => 'DatastoreName', ], 'datastoreStatus' => [ 'shape' => 'DatastoreStatus', ], 'datastoreArn' => [ 'shape' => 'Arn', ], 'createdAt' => [ 'shape' => 'Date', ], 'updatedAt' => [ 'shape' => 'Date', ], ], ], 'Date' => [ 'type' => 'timestamp', ], 'DeleteDatastoreRequest' => [ 'type' => 'structure', 'required' => [ 'datastoreId', ], 'members' => [ 'datastoreId' => [ 'shape' => 'DatastoreId', 'location' => 'uri', 'locationName' => 'datastoreId', ], ], ], 'DeleteDatastoreResponse' => [ 'type' => 'structure', 'required' => [ 'datastoreId', 'datastoreStatus', ], 'members' => [ 'datastoreId' => [ 'shape' => 'DatastoreId', ], 'datastoreStatus' => [ 'shape' => 'DatastoreStatus', ], ], ], 'DeleteImageSetRequest' => [ 'type' => 'structure', 'required' => [ 'datastoreId', 'imageSetId', ], 'members' => [ 'datastoreId' => [ 'shape' => 'DatastoreId', 'location' => 'uri', 'locationName' => 'datastoreId', ], 'imageSetId' => [ 'shape' => 'ImageSetId', 'location' => 'uri', 'locationName' => 'imageSetId', ], ], ], 'DeleteImageSetResponse' => [ 'type' => 'structure', 'required' => [ 'datastoreId', 'imageSetId', 'imageSetState', 'imageSetWorkflowStatus', ], 'members' => [ 'datastoreId' => [ 'shape' => 'DatastoreId', ], 'imageSetId' => [ 'shape' => 'ImageSetId', ], 'imageSetState' => [ 'shape' => 'ImageSetState', ], 'imageSetWorkflowStatus' => [ 'shape' => 'ImageSetWorkflowStatus', ], ], ], 'GetDICOMImportJobRequest' => [ 'type' => 'structure', 'required' => [ 'datastoreId', 'jobId', ], 'members' => [ 'datastoreId' => [ 'shape' => 'DatastoreId', 'location' => 'uri', 'locationName' => 'datastoreId', ], 'jobId' => [ 'shape' => 'JobId', 'location' => 'uri', 'locationName' => 'jobId', ], ], ], 'GetDICOMImportJobResponse' => [ 'type' => 'structure', 'required' => [ 'jobProperties', ], 'members' => [ 'jobProperties' => [ 'shape' => 'DICOMImportJobProperties', ], ], ], 'GetDatastoreRequest' => [ 'type' => 'structure', 'required' => [ 'datastoreId', ], 'members' => [ 'datastoreId' => [ 'shape' => 'DatastoreId', 'location' => 'uri', 'locationName' => 'datastoreId', ], ], ], 'GetDatastoreResponse' => [ 'type' => 'structure', 'required' => [ 'datastoreProperties', ], 'members' => [ 'datastoreProperties' => [ 'shape' => 'DatastoreProperties', ], ], ], 'GetImageFrameRequest' => [ 'type' => 'structure', 'required' => [ 'datastoreId', 'imageSetId', 'imageFrameInformation', ], 'members' => [ 'datastoreId' => [ 'shape' => 'DatastoreId', 'location' => 'uri', 'locationName' => 'datastoreId', ], 'imageSetId' => [ 'shape' => 'ImageSetId', 'location' => 'uri', 'locationName' => 'imageSetId', ], 'imageFrameInformation' => [ 'shape' => 'ImageFrameInformation', ], ], 'payload' => 'imageFrameInformation', ], 'GetImageFrameResponse' => [ 'type' => 'structure', 'required' => [ 'imageFrameBlob', ], 'members' => [ 'imageFrameBlob' => [ 'shape' => 'PayloadBlob', ], 'contentType' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'Content-Type', ], ], 'payload' => 'imageFrameBlob', ], 'GetImageSetMetadataRequest' => [ 'type' => 'structure', 'required' => [ 'datastoreId', 'imageSetId', ], 'members' => [ 'datastoreId' => [ 'shape' => 'DatastoreId', 'location' => 'uri', 'locationName' => 'datastoreId', ], 'imageSetId' => [ 'shape' => 'ImageSetId', 'location' => 'uri', 'locationName' => 'imageSetId', ], 'versionId' => [ 'shape' => 'ImageSetExternalVersionId', 'location' => 'querystring', 'locationName' => 'version', ], ], ], 'GetImageSetMetadataResponse' => [ 'type' => 'structure', 'required' => [ 'imageSetMetadataBlob', ], 'members' => [ 'imageSetMetadataBlob' => [ 'shape' => 'ImageSetMetadataBlob', ], 'contentType' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'Content-Type', ], 'contentEncoding' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'Content-Encoding', ], ], 'payload' => 'imageSetMetadataBlob', ], 'GetImageSetRequest' => [ 'type' => 'structure', 'required' => [ 'datastoreId', 'imageSetId', ], 'members' => [ 'datastoreId' => [ 'shape' => 'DatastoreId', 'location' => 'uri', 'locationName' => 'datastoreId', ], 'imageSetId' => [ 'shape' => 'ImageSetId', 'location' => 'uri', 'locationName' => 'imageSetId', ], 'versionId' => [ 'shape' => 'ImageSetExternalVersionId', 'location' => 'querystring', 'locationName' => 'version', ], ], ], 'GetImageSetResponse' => [ 'type' => 'structure', 'required' => [ 'datastoreId', 'imageSetId', 'versionId', 'imageSetState', ], 'members' => [ 'datastoreId' => [ 'shape' => 'DatastoreId', ], 'imageSetId' => [ 'shape' => 'ImageSetId', ], 'versionId' => [ 'shape' => 'ImageSetExternalVersionId', ], 'imageSetState' => [ 'shape' => 'ImageSetState', ], 'imageSetWorkflowStatus' => [ 'shape' => 'ImageSetWorkflowStatus', ], 'createdAt' => [ 'shape' => 'Date', ], 'updatedAt' => [ 'shape' => 'Date', ], 'deletedAt' => [ 'shape' => 'Date', ], 'message' => [ 'shape' => 'Message', ], 'imageSetArn' => [ 'shape' => 'Arn', ], ], ], 'ImageFrameId' => [ 'type' => 'string', 'pattern' => '[0-9a-z]{32}', ], 'ImageFrameInformation' => [ 'type' => 'structure', 'required' => [ 'imageFrameId', ], 'members' => [ 'imageFrameId' => [ 'shape' => 'ImageFrameId', ], ], ], 'ImageSetExternalVersionId' => [ 'type' => 'string', 'pattern' => '\\d+', ], 'ImageSetId' => [ 'type' => 'string', 'pattern' => '[0-9a-z]{32}', ], 'ImageSetMetadataBlob' => [ 'type' => 'blob', 'streaming' => true, ], 'ImageSetProperties' => [ 'type' => 'structure', 'required' => [ 'imageSetId', 'versionId', 'imageSetState', ], 'members' => [ 'imageSetId' => [ 'shape' => 'ImageSetId', ], 'versionId' => [ 'shape' => 'ImageSetExternalVersionId', ], 'imageSetState' => [ 'shape' => 'ImageSetState', ], 'ImageSetWorkflowStatus' => [ 'shape' => 'ImageSetWorkflowStatus', ], 'createdAt' => [ 'shape' => 'Date', ], 'updatedAt' => [ 'shape' => 'Date', ], 'deletedAt' => [ 'shape' => 'Date', ], 'message' => [ 'shape' => 'Message', ], ], ], 'ImageSetPropertiesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageSetProperties', ], ], 'ImageSetState' => [ 'type' => 'string', 'enum' => [ 'ACTIVE', 'LOCKED', 'DELETED', ], ], 'ImageSetWorkflowStatus' => [ 'type' => 'string', 'enum' => [ 'CREATED', 'COPIED', 'COPYING', 'COPYING_WITH_READ_ONLY_ACCESS', 'COPY_FAILED', 'UPDATING', 'UPDATED', 'UPDATE_FAILED', 'DELETING', 'DELETED', ], ], 'ImageSetsMetadataSummaries' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageSetsMetadataSummary', ], ], 'ImageSetsMetadataSummary' => [ 'type' => 'structure', 'required' => [ 'imageSetId', ], 'members' => [ 'imageSetId' => [ 'shape' => 'ImageSetId', ], 'version' => [ 'shape' => 'Integer', ], 'createdAt' => [ 'shape' => 'Date', ], 'updatedAt' => [ 'shape' => 'Date', ], 'DICOMTags' => [ 'shape' => 'DICOMTags', ], ], ], 'Integer' => [ 'type' => 'integer', 'box' => true, ], 'InternalServerException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], 'JobId' => [ 'type' => 'string', 'max' => 32, 'min' => 1, 'pattern' => '[0-9a-z]+', ], 'JobName' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '[A-Za-z0-9._/#-]+', ], 'JobStatus' => [ 'type' => 'string', 'enum' => [ 'SUBMITTED', 'IN_PROGRESS', 'COMPLETED', 'FAILED', ], ], 'KmsKeyArn' => [ 'type' => 'string', 'max' => 512, 'min' => 1, 'pattern' => 'arn:aws[a-zA-Z-]{0,16}:kms:[a-z]{2}(-[a-z]{1,16}){1,3}-\\d{1}:\\d{12}:((key/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12})|(alias/[a-zA-Z0-9:/_-]{1,256}))', ], 'ListDICOMImportJobsRequest' => [ 'type' => 'structure', 'required' => [ 'datastoreId', ], 'members' => [ 'datastoreId' => [ 'shape' => 'DatastoreId', 'location' => 'uri', 'locationName' => 'datastoreId', ], 'jobStatus' => [ 'shape' => 'JobStatus', 'location' => 'querystring', 'locationName' => 'jobStatus', ], 'nextToken' => [ 'shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'maxResults' => [ 'shape' => 'ListDICOMImportJobsRequestMaxResultsInteger', 'location' => 'querystring', 'locationName' => 'maxResults', ], ], ], 'ListDICOMImportJobsRequestMaxResultsInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 50, 'min' => 1, ], 'ListDICOMImportJobsResponse' => [ 'type' => 'structure', 'required' => [ 'jobSummaries', ], 'members' => [ 'jobSummaries' => [ 'shape' => 'DICOMImportJobSummaries', ], 'nextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListDatastoresRequest' => [ 'type' => 'structure', 'members' => [ 'datastoreStatus' => [ 'shape' => 'DatastoreStatus', 'location' => 'querystring', 'locationName' => 'datastoreStatus', ], 'nextToken' => [ 'shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'maxResults' => [ 'shape' => 'ListDatastoresRequestMaxResultsInteger', 'location' => 'querystring', 'locationName' => 'maxResults', ], ], ], 'ListDatastoresRequestMaxResultsInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 50, 'min' => 1, ], 'ListDatastoresResponse' => [ 'type' => 'structure', 'members' => [ 'datastoreSummaries' => [ 'shape' => 'DatastoreSummaries', ], 'nextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListImageSetVersionsRequest' => [ 'type' => 'structure', 'required' => [ 'datastoreId', 'imageSetId', ], 'members' => [ 'datastoreId' => [ 'shape' => 'DatastoreId', 'location' => 'uri', 'locationName' => 'datastoreId', ], 'imageSetId' => [ 'shape' => 'ImageSetId', 'location' => 'uri', 'locationName' => 'imageSetId', ], 'nextToken' => [ 'shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'maxResults' => [ 'shape' => 'ListImageSetVersionsRequestMaxResultsInteger', 'location' => 'querystring', 'locationName' => 'maxResults', ], ], ], 'ListImageSetVersionsRequestMaxResultsInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 50, 'min' => 1, ], 'ListImageSetVersionsResponse' => [ 'type' => 'structure', 'required' => [ 'imageSetPropertiesList', ], 'members' => [ 'imageSetPropertiesList' => [ 'shape' => 'ImageSetPropertiesList', ], 'nextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', ], 'members' => [ 'resourceArn' => [ 'shape' => 'Arn', 'location' => 'uri', 'locationName' => 'resourceArn', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'required' => [ 'tags', ], 'members' => [ 'tags' => [ 'shape' => 'TagMap', ], ], ], 'Message' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => '[\\w -:]+', ], 'MetadataUpdates' => [ 'type' => 'structure', 'members' => [ 'DICOMUpdates' => [ 'shape' => 'DICOMUpdates', ], ], 'union' => true, ], 'NextToken' => [ 'type' => 'string', 'max' => 8192, 'min' => 1, 'pattern' => '\\p{ASCII}{0,8192}', ], 'Operator' => [ 'type' => 'string', 'enum' => [ 'EQUAL', 'BETWEEN', ], ], 'PayloadBlob' => [ 'type' => 'blob', 'streaming' => true, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'RoleArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 20, 'pattern' => 'arn:aws(-[^:]+)?:iam::[0-9]{12}:role/.+', ], 'S3Uri' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, 'pattern' => 's3://[a-z0-9][\\.\\-a-z0-9]{1,61}[a-z0-9](/.*)?', ], 'SearchByAttributeValue' => [ 'type' => 'structure', 'members' => [ 'DICOMPatientId' => [ 'shape' => 'DICOMPatientId', ], 'DICOMAccessionNumber' => [ 'shape' => 'DICOMAccessionNumber', ], 'DICOMStudyId' => [ 'shape' => 'DICOMStudyId', ], 'DICOMStudyInstanceUID' => [ 'shape' => 'DICOMStudyInstanceUID', ], 'DICOMSeriesInstanceUID' => [ 'shape' => 'DICOMSeriesInstanceUID', ], 'createdAt' => [ 'shape' => 'Date', ], 'updatedAt' => [ 'shape' => 'Date', ], 'DICOMStudyDateAndTime' => [ 'shape' => 'DICOMStudyDateAndTime', ], ], 'union' => true, ], 'SearchCriteria' => [ 'type' => 'structure', 'members' => [ 'filters' => [ 'shape' => 'SearchCriteriaFiltersList', ], 'sort' => [ 'shape' => 'Sort', ], ], 'sensitive' => true, ], 'SearchCriteriaFiltersList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SearchFilter', ], 'max' => 2, 'min' => 1, ], 'SearchFilter' => [ 'type' => 'structure', 'required' => [ 'values', 'operator', ], 'members' => [ 'values' => [ 'shape' => 'SearchFilterValuesList', ], 'operator' => [ 'shape' => 'Operator', ], ], ], 'SearchFilterValuesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SearchByAttributeValue', ], 'max' => 2, 'min' => 1, ], 'SearchImageSetsRequest' => [ 'type' => 'structure', 'required' => [ 'datastoreId', ], 'members' => [ 'datastoreId' => [ 'shape' => 'DatastoreId', 'location' => 'uri', 'locationName' => 'datastoreId', ], 'searchCriteria' => [ 'shape' => 'SearchCriteria', ], 'maxResults' => [ 'shape' => 'SearchImageSetsRequestMaxResultsInteger', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'nextToken' => [ 'shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], ], 'payload' => 'searchCriteria', ], 'SearchImageSetsRequestMaxResultsInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 50, 'min' => 1, ], 'SearchImageSetsResponse' => [ 'type' => 'structure', 'required' => [ 'imageSetsMetadataSummaries', ], 'members' => [ 'imageSetsMetadataSummaries' => [ 'shape' => 'ImageSetsMetadataSummaries', ], 'sort' => [ 'shape' => 'Sort', ], 'nextToken' => [ 'shape' => 'NextToken', ], ], ], 'ServiceQuotaExceededException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 402, 'senderFault' => true, ], 'exception' => true, ], 'Sort' => [ 'type' => 'structure', 'required' => [ 'sortOrder', 'sortField', ], 'members' => [ 'sortOrder' => [ 'shape' => 'SortOrder', ], 'sortField' => [ 'shape' => 'SortField', ], ], ], 'SortField' => [ 'type' => 'string', 'enum' => [ 'updatedAt', 'createdAt', 'DICOMStudyDateAndTime', ], ], 'SortOrder' => [ 'type' => 'string', 'enum' => [ 'ASC', 'DESC', ], ], 'StartDICOMImportJobRequest' => [ 'type' => 'structure', 'required' => [ 'dataAccessRoleArn', 'clientToken', 'datastoreId', 'inputS3Uri', 'outputS3Uri', ], 'members' => [ 'jobName' => [ 'shape' => 'JobName', ], 'dataAccessRoleArn' => [ 'shape' => 'RoleArn', ], 'clientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, ], 'datastoreId' => [ 'shape' => 'DatastoreId', 'location' => 'uri', 'locationName' => 'datastoreId', ], 'inputS3Uri' => [ 'shape' => 'S3Uri', ], 'outputS3Uri' => [ 'shape' => 'S3Uri', ], ], ], 'StartDICOMImportJobResponse' => [ 'type' => 'structure', 'required' => [ 'datastoreId', 'jobId', 'jobStatus', 'submittedAt', ], 'members' => [ 'datastoreId' => [ 'shape' => 'DatastoreId', ], 'jobId' => [ 'shape' => 'JobId', ], 'jobStatus' => [ 'shape' => 'JobStatus', ], 'submittedAt' => [ 'shape' => 'Date', ], ], ], 'String' => [ 'type' => 'string', ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '(?!aws:)[a-zA-Z+-=._:/]+', ], 'TagKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], 'max' => 200, 'min' => 0, ], 'TagMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'TagKey', ], 'value' => [ 'shape' => 'TagValue', ], ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tags', ], 'members' => [ 'resourceArn' => [ 'shape' => 'Arn', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'TagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 0, ], 'ThrottlingException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tagKeys', ], 'members' => [ 'resourceArn' => [ 'shape' => 'Arn', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tagKeys' => [ 'shape' => 'TagKeyList', 'location' => 'querystring', 'locationName' => 'tagKeys', ], ], ], 'UntagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'UpdateImageSetMetadataRequest' => [ 'type' => 'structure', 'required' => [ 'datastoreId', 'imageSetId', 'latestVersionId', 'updateImageSetMetadataUpdates', ], 'members' => [ 'datastoreId' => [ 'shape' => 'DatastoreId', 'location' => 'uri', 'locationName' => 'datastoreId', ], 'imageSetId' => [ 'shape' => 'ImageSetId', 'location' => 'uri', 'locationName' => 'imageSetId', ], 'latestVersionId' => [ 'shape' => 'ImageSetExternalVersionId', 'location' => 'querystring', 'locationName' => 'latestVersion', ], 'updateImageSetMetadataUpdates' => [ 'shape' => 'MetadataUpdates', ], ], 'payload' => 'updateImageSetMetadataUpdates', ], 'UpdateImageSetMetadataResponse' => [ 'type' => 'structure', 'required' => [ 'datastoreId', 'imageSetId', 'latestVersionId', 'imageSetState', ], 'members' => [ 'datastoreId' => [ 'shape' => 'DatastoreId', ], 'imageSetId' => [ 'shape' => 'ImageSetId', ], 'latestVersionId' => [ 'shape' => 'ImageSetExternalVersionId', ], 'imageSetState' => [ 'shape' => 'ImageSetState', ], 'imageSetWorkflowStatus' => [ 'shape' => 'ImageSetWorkflowStatus', ], 'createdAt' => [ 'shape' => 'Date', ], 'updatedAt' => [ 'shape' => 'Date', ], 'message' => [ 'shape' => 'Message', ], ], ], 'ValidationException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ],];
