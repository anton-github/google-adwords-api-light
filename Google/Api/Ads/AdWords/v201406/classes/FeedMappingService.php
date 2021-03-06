<?php

require_once 'FeedMappingService.require.php';

  /**
   * FeedMappingService
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class FeedMappingService extends AdWordsSoapClient
  {
    const SERVICE_NAME = "FeedMappingService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201406/FeedMappingService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201406/FeedMappingService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "AttributeFieldMapping" => "AttributeFieldMapping",
      "AuthenticationError" => "AuthenticationError",
      "AuthorizationError" => "AuthorizationError",
      "ClientTermsError" => "ClientTermsError",
      "DateRange" => "DateRange",
      "DistinctError" => "DistinctError",
      "EntityNotFound" => "EntityNotFound",
      "FeedMapping" => "FeedMapping",
      "FeedMappingError" => "FeedMappingError",
      "FeedMappingOperation" => "FeedMappingOperation",
      "FeedMappingPage" => "FeedMappingPage",
      "FeedMappingReturnValue" => "FeedMappingReturnValue",
      "IdError" => "IdError",
      "InternalApiError" => "InternalApiError",
      "ListReturnValue" => "ListReturnValue",
      "NotEmptyError" => "NotEmptyError",
      "NullStatsPage" => "NullStatsPage",
      "Operation" => "Operation",
      "OperationAccessDenied" => "OperationAccessDenied",
      "OperatorError" => "OperatorError",
      "OrderBy" => "OrderBy",
      "Page" => "Page",
      "Paging" => "Paging",
      "Predicate" => "Predicate",
      "QueryError" => "QueryError",
      "QuotaCheckError" => "QuotaCheckError",
      "RangeError" => "RangeError",
      "RateExceededError" => "RateExceededError",
      "ReadOnlyError" => "ReadOnlyError",
      "RejectedError" => "RejectedError",
      "RequestError" => "RequestError",
      "RequiredError" => "RequiredError",
      "SelectorError" => "SelectorError",
      "SizeLimitError" => "SizeLimitError",
      "SoapHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "StringLengthError" => "StringLengthError",
      "DatabaseError" => "DatabaseError",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApplicationException" => "ApplicationException",
      "Selector" => "Selector",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "AuthorizationError.Reason" => "AuthorizationErrorReason",
      "ClientTermsError.Reason" => "ClientTermsErrorReason",
      "DatabaseError.Reason" => "DatabaseErrorReason",
      "DistinctError.Reason" => "DistinctErrorReason",
      "EntityNotFound.Reason" => "EntityNotFoundReason",
      "FeedMapping.Status" => "FeedMappingStatus",
      "FeedMappingError.Reason" => "FeedMappingErrorReason",
      "IdError.Reason" => "IdErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "NotEmptyError.Reason" => "NotEmptyErrorReason",
      "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
      "Operator" => "Operator",
      "OperatorError.Reason" => "OperatorErrorReason",
      "Predicate.Operator" => "PredicateOperator",
      "QueryError.Reason" => "QueryErrorReason",
      "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
      "RangeError.Reason" => "RangeErrorReason",
      "RateExceededError.Reason" => "RateExceededErrorReason",
      "ReadOnlyError.Reason" => "ReadOnlyErrorReason",
      "RejectedError.Reason" => "RejectedErrorReason",
      "RequestError.Reason" => "RequestErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "SelectorError.Reason" => "SelectorErrorReason",
      "SizeLimitError.Reason" => "SizeLimitErrorReason",
      "SortOrder" => "SortOrder",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "get" => "FeedMappingServiceGet",
      "getResponse" => "FeedMappingServiceGetResponse",
      "mutate" => "FeedMappingServiceMutate",
      "mutateResponse" => "FeedMappingServiceMutateResponse",
      "query" => "Query",
      "queryResponse" => "QueryResponse",
    );

    /**
     * Constructor using wsdl location and options array
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl, $options, $user)
    {
      $options["classmap"] = self::$classmap;
      parent::__construct($wsdl, $options, $user, self::SERVICE_NAME,
          self::WSDL_NAMESPACE);
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns a list of FeedMappings that meet the selector criteria.
     *
     * @param selector Determines which FeedMappings to return. If empty all
     * FeedMappings are returned.
     * @return The          list of FeedMappings.
     * @throws ApiException indicates a problem with the request.
     */
    public function get($selector)
    {
      $args = new FeedMappingServiceGet($selector);
      $result = $this->__soapCall("get", array($args));

      return $result->rval;
    }
    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
     *
     *
     *
     * Add and remove FeedMappings.
     *
     * @param operations The operations to apply.
     * @return The          resulting FeedMappings.
     * @throws ApiException indicates a problem with the request.
     */
    public function mutate($operations)
    {
      $args = new FeedMappingServiceMutate($operations);
      $result = $this->__soapCall("mutate", array($args));

      return $result->rval;
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns the list of FeedMappings that match the query.
     *
     * @param query The SQL-like AWQL query string
     * @returns The list of FeedMappings
     * @throws ApiException when the query is invalid or there are errors processing the request.
     */
    public function query($query)
    {
      $args = new Query($query);
      $result = $this->__soapCall("query", array($args));

      return $result->rval;
    }
  }
