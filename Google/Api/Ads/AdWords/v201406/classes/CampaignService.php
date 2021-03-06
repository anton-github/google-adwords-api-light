<?php

require_once 'CampaignService.require.php';

  /**
   * CampaignService
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CampaignService extends AdWordsSoapClient
  {
    const SERVICE_NAME = "CampaignService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201406/CampaignService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201406/CampaignService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "AdxError" => "AdxError",
      "AuthenticationError" => "AuthenticationError",
      "AuthorizationError" => "AuthorizationError",
      "BiddingError" => "BiddingError",
      "BiddingErrors" => "BiddingErrors",
      "BiddingTransitionError" => "BiddingTransitionError",
      "BudgetError" => "BudgetError",
      "CampaignError" => "CampaignError",
      "CampaignLabel" => "CampaignLabel",
      "CampaignLabelOperation" => "CampaignLabelOperation",
      "TextLabel" => "TextLabel",
      "ClientTermsError" => "ClientTermsError",
      "ConversionOptimizerBiddingScheme" => "ConversionOptimizerBiddingScheme",
      "ConversionOptimizerEligibility" => "ConversionOptimizerEligibility",
      "CustomParameter" => "CustomParameter",
      "CustomParameters" => "CustomParameters",
      "DateError" => "DateError",
      "DateRange" => "DateRange",
      "DateRangeError" => "DateRangeError",
      "DistinctError" => "DistinctError",
      "DoubleValue" => "DoubleValue",
      "DynamicSearchAdsSetting" => "DynamicSearchAdsSetting",
      "EnhancedCpcBiddingScheme" => "EnhancedCpcBiddingScheme",
      "EntityCountLimitExceeded" => "EntityCountLimitExceeded",
      "EntityNotFound" => "EntityNotFound",
      "ForwardCompatibilityError" => "ForwardCompatibilityError",
      "FrequencyCap" => "FrequencyCap",
      "GeoTargetTypeSetting" => "GeoTargetTypeSetting",
      "IdError" => "IdError",
      "InternalApiError" => "InternalApiError",
      "KeywordMatchSetting" => "KeywordMatchSetting",
      "LongValue" => "LongValue",
      "ManualCpcBiddingScheme" => "ManualCpcBiddingScheme",
      "ManualCpmBiddingScheme" => "ManualCpmBiddingScheme",
      "Money" => "Money",
      "NetworkSetting" => "NetworkSetting",
      "NewEntityCreationError" => "NewEntityCreationError",
      "NotEmptyError" => "NotEmptyError",
      "NullError" => "NullError",
      "NumberValue" => "NumberValue",
      "OperationAccessDenied" => "OperationAccessDenied",
      "OperatorError" => "OperatorError",
      "OrderBy" => "OrderBy",
      "Paging" => "Paging",
      "PercentCpaBid" => "PercentCpaBid",
      "PercentCpaBiddingScheme" => "PercentCpaBiddingScheme",
      "Predicate" => "Predicate",
      "QueryError" => "QueryError",
      "QuotaCheckError" => "QuotaCheckError",
      "QuotaError" => "QuotaError",
      "RangeError" => "RangeError",
      "RateExceededError" => "RateExceededError",
      "ReadOnlyError" => "ReadOnlyError",
      "RealTimeBiddingSetting" => "RealTimeBiddingSetting",
      "RejectedError" => "RejectedError",
      "RequestError" => "RequestError",
      "RequiredError" => "RequiredError",
      "SelectorError" => "SelectorError",
      "SettingError" => "SettingError",
      "ShoppingSetting" => "ShoppingSetting",
      "SizeLimitError" => "SizeLimitError",
      "SoapHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "StatsQueryError" => "StatsQueryError",
      "StringLengthError" => "StringLengthError",
      "String_StringMapEntry" => "String_StringMapEntry",
      "TargetError" => "TargetError",
      "TrackingSetting" => "TrackingSetting",
      "UrlError" => "UrlError",
      "ComparableValue" => "ComparableValue",
      "CpaBid" => "CpaBid",
      "CpcBid" => "CpcBid",
      "CpmBid" => "CpmBid",
      "DatabaseError" => "DatabaseError",
      "PageOnePromotedBiddingScheme" => "PageOnePromotedBiddingScheme",
      "Setting" => "Setting",
      "TargetCpaBiddingScheme" => "TargetCpaBiddingScheme",
      "TargetRoasBiddingScheme" => "TargetRoasBiddingScheme",
      "TargetSpendBiddingScheme" => "TargetSpendBiddingScheme",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApplicationException" => "ApplicationException",
      "Bids" => "Bids",
      "BudgetOptimizerBiddingScheme" => "BudgetOptimizerBiddingScheme",
      "CampaignLabelReturnValue" => "CampaignLabelReturnValue",
      "Label" => "Label",
      "Selector" => "Selector",
      "BiddingScheme" => "BiddingScheme",
      "BiddingStrategyConfiguration" => "BiddingStrategyConfiguration",
      "Budget" => "Budget",
      "Campaign" => "Campaign",
      "CampaignOperation" => "CampaignOperation",
      "CampaignPage" => "CampaignPage",
      "CampaignReturnValue" => "CampaignReturnValue",
      "ListReturnValue" => "ListReturnValue",
      "Operation" => "Operation",
      "Page" => "Page",
      "AdServingOptimizationStatus" => "AdServingOptimizationStatus",
      "AdvertisingChannelType" => "AdvertisingChannelType",
      "AdxError.Reason" => "AdxErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "AuthorizationError.Reason" => "AuthorizationErrorReason",
      "BidSource" => "BidSource",
      "BiddingError.Reason" => "BiddingErrorReason",
      "BiddingErrors.Reason" => "BiddingErrorsReason",
      "BiddingStrategySource" => "BiddingStrategySource",
      "BiddingStrategyType" => "BiddingStrategyType",
      "BiddingTransitionError.Reason" => "BiddingTransitionErrorReason",
      "Budget.BudgetDeliveryMethod" => "BudgetBudgetDeliveryMethod",
      "Budget.BudgetPeriod" => "BudgetBudgetPeriod",
      "Budget.BudgetStatus" => "BudgetBudgetStatus",
      "BudgetError.Reason" => "BudgetErrorReason",
      "CampaignError.Reason" => "CampaignErrorReason",
      "CampaignStatus" => "CampaignStatus",
      "ClientTermsError.Reason" => "ClientTermsErrorReason",
      "ConversionOptimizerBiddingScheme.BidType" => "ConversionOptimizerBiddingSchemeBidType",
      "ConversionOptimizerBiddingScheme.PricingMode" => "ConversionOptimizerBiddingSchemePricingMode",
      "ConversionOptimizerEligibility.RejectionReason" => "ConversionOptimizerEligibilityRejectionReason",
      "DatabaseError.Reason" => "DatabaseErrorReason",
      "DateError.Reason" => "DateErrorReason",
      "DateRangeError.Reason" => "DateRangeErrorReason",
      "DistinctError.Reason" => "DistinctErrorReason",
      "EntityCountLimitExceeded.Reason" => "EntityCountLimitExceededReason",
      "EntityNotFound.Reason" => "EntityNotFoundReason",
      "ForwardCompatibilityError.Reason" => "ForwardCompatibilityErrorReason",
      "GeoTargetTypeSetting.NegativeGeoTargetType" => "GeoTargetTypeSettingNegativeGeoTargetType",
      "GeoTargetTypeSetting.PositiveGeoTargetType" => "GeoTargetTypeSettingPositiveGeoTargetType",
      "IdError.Reason" => "IdErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "Label.Status" => "LabelStatus",
      "Level" => "Level",
      "NewEntityCreationError.Reason" => "NewEntityCreationErrorReason",
      "NotEmptyError.Reason" => "NotEmptyErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
      "Operator" => "Operator",
      "OperatorError.Reason" => "OperatorErrorReason",
      "PageOnePromotedBiddingScheme.StrategyGoal" => "PageOnePromotedBiddingSchemeStrategyGoal",
      "Predicate.Operator" => "PredicateOperator",
      "QueryError.Reason" => "QueryErrorReason",
      "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RangeError.Reason" => "RangeErrorReason",
      "RateExceededError.Reason" => "RateExceededErrorReason",
      "ReadOnlyError.Reason" => "ReadOnlyErrorReason",
      "RejectedError.Reason" => "RejectedErrorReason",
      "RequestError.Reason" => "RequestErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "SelectorError.Reason" => "SelectorErrorReason",
      "ServingStatus" => "ServingStatus",
      "SettingError.Reason" => "SettingErrorReason",
      "SizeLimitError.Reason" => "SizeLimitErrorReason",
      "SortOrder" => "SortOrder",
      "StatsQueryError.Reason" => "StatsQueryErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "TargetError.Reason" => "TargetErrorReason",
      "TimeUnit" => "TimeUnit",
      "UrlError.Reason" => "UrlErrorReason",
      "get" => "CampaignServiceGet",
      "getResponse" => "CampaignServiceGetResponse",
      "mutate" => "CampaignServiceMutate",
      "mutateResponse" => "CampaignServiceMutateResponse",
      "mutateLabel" => "MutateLabel",
      "mutateLabelResponse" => "MutateLabelResponse",
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
     * Returns the list of campaigns that meet the selector criteria.
     *
     * @param serviceSelector the selector specifying the {@link Campaign}s to return.
     * @return A            list of campaigns.
     * @throws ApiException if problems occurred while fetching campaign information.
     */
    public function get($serviceSelector)
    {
      $args = new CampaignServiceGet($serviceSelector);
      $result = $this->__soapCall("get", array($args));

      return $result->rval;
    }
    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
     *
     *
     *
     * Adds, updates, or deletes campaigns.
     * <p class="note"><b>Note:</b> {@link CampaignOperation} does not support the
     * <code>REMOVE</code> operator. To delete a campaign, set its
     * {@link Campaign#status status} to <code>DELETED</code>.</p>
     * @param operations A list of unique operations.
     * The same campaign cannot be specified in more than one operation.
     * @return The          list of updated campaigns, returned in the same order as the
     *                      <code>operations</code> array.
     * @throws ApiException if problems occurred while updating campaign information.
     */
    public function mutate($operations)
    {
      $args = new CampaignServiceMutate($operations);
      $result = $this->__soapCall("mutate", array($args));

      return $result->rval;
    }
    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : ADD, REMOVE.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
     *
     *
     *
     * Adds labels to the {@linkplain Campaign campaign} or removes
     * {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}s from the
     * {@linkplain Campaign campaign}.
     * <p>Add - Apply an existing label to an existing
     * {@linkplain Campaign campaign}. The {@code campaignId} must reference an existing
     * {@linkplain Campaign}. The {@code labelId} must reference an existing
     * {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}.</p>
     * <p>Remove - Removes the link between the specified
     * {@linkplain Campaign campaign} and
     * {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}.</p>
     * @param operations the operations to apply.
     * @return a            list of {@linkplain CampaignLabel}s where each entry in the list is the result of
     *                      applying the operation in the input list with the same index. For an
     *                      add operation, the returned CampaignLabel contains the CampaignId and the LabelId.
     *                      In the case of a remove operation, the returned CampaignLabel will only have CampaignId.
     * @throws ApiException when there are one or more errors with the request.
     */
    public function mutateLabel($operations)
    {
      $args = new MutateLabel($operations);
      $result = $this->__soapCall("mutateLabel", array($args));

      return $result->rval;
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns the list of campaigns that match the query.
     *
     * @param query The SQL-like AWQL query string.
     * @return A            list of campaigns.
     * @throws ApiException if problems occur while parsing the query or fetching campaign
     *                      information.
     */
    public function query($query)
    {
      $args = new Query($query);
      $result = $this->__soapCall("query", array($args));

      return $result->rval;
    }
  }
