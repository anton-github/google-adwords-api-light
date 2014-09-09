<?php
require_once 'Ad.php';
require_once 'AdGroupAd.php';
require_once 'AdGroupAdExperimentData.php';
require_once 'AdGroupAdLabel.php';
require_once 'AdUnionId.php';
require_once 'ApiError.php';
require_once 'ApplicationException.php';
require_once 'AuthenticationError.php';
require_once 'AuthorizationError.php';
require_once 'ClientTermsError.php';
require_once 'CustomParameter.php';
require_once 'CustomParameters.php';
require_once 'DatabaseError.php';
require_once 'DateError.php';
require_once 'DateRange.php';
require_once 'DeprecatedAd.php';
require_once 'Dimensions.php';
require_once 'DistinctError.php';
require_once 'EntityAccessDenied.php';
require_once 'EntityCountLimitExceeded.php';
require_once 'EntityNotFound.php';
require_once 'ExemptionRequest.php';
require_once 'ExperimentError.php';
require_once 'ForwardCompatibilityError.php';
require_once 'FunctionParsingError.php';
require_once 'IdError.php';
require_once 'ImageAd.php';
require_once 'ImageError.php';
require_once 'InternalApiError.php';
require_once 'Label.php';
require_once 'ListReturnValue.php';
require_once 'Media.php';
require_once 'MediaError.php';
require_once 'MobileAd.php';
require_once 'MobileImageAd.php';
require_once 'NewEntityCreationError.php';
require_once 'NotEmptyError.php';
require_once 'NullError.php';
require_once 'Operation.php';
require_once 'OperationAccessDenied.php';
require_once 'OrderBy.php';
require_once 'Page.php';
require_once 'Paging.php';
require_once 'PagingError.php';
require_once 'PolicyViolationError.php';
require_once 'PolicyViolationErrorPart.php';
require_once 'PolicyViolationKey.php';
require_once 'Predicate.php';
require_once 'ProductAd.php';
require_once 'QueryError.php';
require_once 'QuotaCheckError.php';
require_once 'RangeError.php';
require_once 'RateExceededError.php';
require_once 'ReadOnlyError.php';
require_once 'RejectedError.php';
require_once 'RequestError.php';
require_once 'RequiredError.php';
require_once 'RichMediaAd.php';
require_once 'Selector.php';
require_once 'SelectorError.php';
require_once 'SizeLimitError.php';
require_once 'SoapRequestHeader.php';
require_once 'SoapResponseHeader.php';
require_once 'StatsQueryError.php';
require_once 'StringLengthError.php';
require_once 'TempAdUnionId.php';
require_once 'TemplateAd.php';
require_once 'TemplateElement.php';
require_once 'TemplateElementField.php';
require_once 'TextAd.php';
require_once 'ThirdPartyRedirectAd.php';
require_once 'UrlError.php';
require_once 'Video.php';
require_once 'DynamicSearchAd.php';
require_once 'AdErrorReason.php';
require_once 'AdGroupAdApprovalStatus.php';
require_once 'AdGroupAdStatus.php';
require_once 'AdGroupAdErrorReason.php';
require_once 'AdxErrorReason.php';
require_once 'AuthenticationErrorReason.php';
require_once 'AuthorizationErrorReason.php';
require_once 'ClientTermsErrorReason.php';
require_once 'DatabaseErrorReason.php';
require_once 'DateErrorReason.php';
require_once 'DeprecatedAdType.php';
require_once 'DistinctErrorReason.php';
require_once 'EntityAccessDeniedReason.php';
require_once 'EntityCountLimitExceededReason.php';
require_once 'EntityNotFoundReason.php';
require_once 'ExperimentDataStatus.php';
require_once 'ExperimentDeltaStatus.php';
require_once 'ExperimentErrorReason.php';
require_once 'ForwardCompatibilityErrorReason.php';
require_once 'FunctionParsingErrorReason.php';
require_once 'IdErrorReason.php';
require_once 'ImageErrorReason.php';
require_once 'InternalApiErrorReason.php';
require_once 'LabelStatus.php';
require_once 'MarkupLanguageType.php';
require_once 'MediaMediaType.php';
require_once 'MediaMimeType.php';
require_once 'MediaSize.php';
require_once 'MediaErrorReason.php';
require_once 'NewEntityCreationErrorReason.php';
require_once 'NotEmptyErrorReason.php';
require_once 'NullErrorReason.php';
require_once 'OperationAccessDeniedReason.php';
require_once 'Operator.php';
require_once 'PagingErrorReason.php';
require_once 'PredicateOperator.php';
require_once 'QueryErrorReason.php';
require_once 'QuotaCheckErrorReason.php';
require_once 'RangeErrorReason.php';
require_once 'RateExceededErrorReason.php';
require_once 'ReadOnlyErrorReason.php';
require_once 'RejectedErrorReason.php';
require_once 'RequestErrorReason.php';
require_once 'RequiredErrorReason.php';
require_once 'RichMediaAdAdAttribute.php';
require_once 'RichMediaAdRichMediaAdType.php';
require_once 'SelectorErrorReason.php';
require_once 'SizeLimitErrorReason.php';
require_once 'SortOrder.php';
require_once 'StatsQueryErrorReason.php';
require_once 'StringLengthErrorReason.php';
require_once 'TemplateElementFieldType.php';
require_once 'ThirdPartyRedirectAdExpandingDirection.php';
require_once 'UrlErrorReason.php';
require_once 'VideoType.php';
require_once 'AdGroupAdServiceGet.php';
require_once 'AdGroupAdServiceGetResponse.php';
require_once 'AdGroupAdServiceMutate.php';
require_once 'AdGroupAdServiceMutateResponse.php';
require_once 'MutateLabel.php';
require_once 'MutateLabelResponse.php';
require_once 'Query.php';
require_once 'QueryResponse.php';
require_once 'AdError.php';
require_once 'AdGroupAdCountLimitExceeded.php';
require_once 'AdGroupAdError.php';
require_once 'AdGroupAdLabelOperation.php';
require_once 'AdGroupAdLabelReturnValue.php';
require_once 'AdGroupAdOperation.php';
require_once 'AdGroupAdPage.php';
require_once 'AdGroupAdReturnValue.php';
require_once 'AdxError.php';
require_once 'ApiException.php';
require_once 'Audio.php';
require_once 'TextLabel.php';
require_once 'Image.php';
