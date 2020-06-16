<?php
/*******************************************************************************
 * Copyright 2009-2020 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 *
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  MWS Merchant Fulfillment Service
 * @version  2015-06-01
 * Library Version: 2020-02-06
 * Generated: Mon Mar 02 20:07:25 UTC 2020
 */

/**
 *  @see MWSMerchantFulfillmentService_Model
 */
require_once(dirname(__FILE__) . '/../Model.php');

 /**
  * MWSMerchantFulfillmentService_Model_GetEligibleShippingServicesResult
  *
  * Properties:
  * <ul>
  *
  * <li>ShippingServiceList: array</li>
  * <li>RejectedShippingServiceList: array</li>
  * <li>TemporarilyUnavailableCarrierList: array</li>
  * <li>TermsAndConditionsNotAcceptedCarrierList: array</li>
  *
  * </ul>
  */
 class MWSMerchantFulfillmentService_Model_GetEligibleShippingServicesResult extends MWSMerchantFulfillmentService_Model
 {
     public function __construct($data = null)
     {
         $this->_fields = [
    'ShippingServiceList' => ['FieldValue' => [], 'FieldType' => ['MWSMerchantFulfillmentService_Model_ShippingService'], 'ListMemberName' => 'ShippingService'],
    'RejectedShippingServiceList' => ['FieldValue' => [], 'FieldType' => ['MWSMerchantFulfillmentService_Model_RejectedShippingService'], 'ListMemberName' => 'RejectedShippingService'],
    'TemporarilyUnavailableCarrierList' => ['FieldValue' => [], 'FieldType' => ['MWSMerchantFulfillmentService_Model_TemporarilyUnavailableCarrier'], 'ListMemberName' => 'TemporarilyUnavailableCarrier'],
    'TermsAndConditionsNotAcceptedCarrierList' => ['FieldValue' => [], 'FieldType' => ['MWSMerchantFulfillmentService_Model_TermsAndConditionsNotAcceptedCarrier'], 'ListMemberName' => 'TermsAndConditionsNotAcceptedCarrier'],
    ];
         parent::__construct($data);
     }

     /**
      * Get the value of the ShippingServiceList property.
      *
      * @return List<ShippingService> shippingServiceList
      */
     public function getShippingServiceList()
     {
         if ($this->_fields['ShippingServiceList']['FieldValue'] == null) {
             $this->_fields['ShippingServiceList']['FieldValue'] = [];
         }

         return $this->_fields['ShippingServiceList']['FieldValue'];
     }

     /**
      * Set the value of the ShippingServiceList property.
      *
      * @param array shippingServiceList
      * @param mixed $value
      *
      * @return $this instance
      */
     public function setShippingServiceList($value)
     {
         if (!$this->_isNumericArray($value)) {
             $value = [$value];
         }
         $this->_fields['ShippingServiceList']['FieldValue'] = $value;

         return $this;
     }

     /**
      * Clear ShippingServiceList.
      */
     public function unsetShippingServiceList()
     {
         $this->_fields['ShippingServiceList']['FieldValue'] = [];
     }

     /**
      * Check to see if ShippingServiceList is set.
      *
      * @return true if ShippingServiceList is set
      */
     public function isSetShippingServiceList()
     {
         return !empty($this->_fields['ShippingServiceList']['FieldValue']);
     }

     /**
      * Add values for ShippingServiceList, return this.
      *
      * @param shippingServiceList
      *             New values to add
      *
      * @return $this instance
      */
     public function withShippingServiceList()
     {
         foreach (func_get_args() as $ShippingServiceList) {
             $this->_fields['ShippingServiceList']['FieldValue'][] = $ShippingServiceList;
         }

         return $this;
     }

     /**
      * Get the value of the RejectedShippingServiceList property.
      *
      * @return List<RejectedShippingService> rejectedShippingServiceList
      */
     public function getRejectedShippingServiceList()
     {
         if ($this->_fields['RejectedShippingServiceList']['FieldValue'] == null) {
             $this->_fields['RejectedShippingServiceList']['FieldValue'] = [];
         }

         return $this->_fields['RejectedShippingServiceList']['FieldValue'];
     }

     /**
      * Set the value of the RejectedShippingServiceList property.
      *
      * @param array rejectedShippingServiceList
      * @param mixed $value
      *
      * @return $this instance
      */
     public function setRejectedShippingServiceList($value)
     {
         if (!$this->_isNumericArray($value)) {
             $value = [$value];
         }
         $this->_fields['RejectedShippingServiceList']['FieldValue'] = $value;

         return $this;
     }

     /**
      * Clear RejectedShippingServiceList.
      */
     public function unsetRejectedShippingServiceList()
     {
         $this->_fields['RejectedShippingServiceList']['FieldValue'] = [];
     }

     /**
      * Check to see if RejectedShippingServiceList is set.
      *
      * @return true if RejectedShippingServiceList is set
      */
     public function isSetRejectedShippingServiceList()
     {
         return !empty($this->_fields['RejectedShippingServiceList']['FieldValue']);
     }

     /**
      * Add values for RejectedShippingServiceList, return this.
      *
      * @param rejectedShippingServiceList
      *             New values to add
      *
      * @return $this instance
      */
     public function withRejectedShippingServiceList()
     {
         foreach (func_get_args() as $RejectedShippingServiceList) {
             $this->_fields['RejectedShippingServiceList']['FieldValue'][] = $RejectedShippingServiceList;
         }

         return $this;
     }

     /**
      * Get the value of the TemporarilyUnavailableCarrierList property.
      *
      * @return List<TemporarilyUnavailableCarrier> temporarilyUnavailableCarrierList
      */
     public function getTemporarilyUnavailableCarrierList()
     {
         if ($this->_fields['TemporarilyUnavailableCarrierList']['FieldValue'] == null) {
             $this->_fields['TemporarilyUnavailableCarrierList']['FieldValue'] = [];
         }

         return $this->_fields['TemporarilyUnavailableCarrierList']['FieldValue'];
     }

     /**
      * Set the value of the TemporarilyUnavailableCarrierList property.
      *
      * @param array temporarilyUnavailableCarrierList
      * @param mixed $value
      *
      * @return $this instance
      */
     public function setTemporarilyUnavailableCarrierList($value)
     {
         if (!$this->_isNumericArray($value)) {
             $value = [$value];
         }
         $this->_fields['TemporarilyUnavailableCarrierList']['FieldValue'] = $value;

         return $this;
     }

     /**
      * Clear TemporarilyUnavailableCarrierList.
      */
     public function unsetTemporarilyUnavailableCarrierList()
     {
         $this->_fields['TemporarilyUnavailableCarrierList']['FieldValue'] = [];
     }

     /**
      * Check to see if TemporarilyUnavailableCarrierList is set.
      *
      * @return true if TemporarilyUnavailableCarrierList is set
      */
     public function isSetTemporarilyUnavailableCarrierList()
     {
         return !empty($this->_fields['TemporarilyUnavailableCarrierList']['FieldValue']);
     }

     /**
      * Add values for TemporarilyUnavailableCarrierList, return this.
      *
      * @param temporarilyUnavailableCarrierList
      *             New values to add
      *
      * @return $this instance
      */
     public function withTemporarilyUnavailableCarrierList()
     {
         foreach (func_get_args() as $TemporarilyUnavailableCarrierList) {
             $this->_fields['TemporarilyUnavailableCarrierList']['FieldValue'][] = $TemporarilyUnavailableCarrierList;
         }

         return $this;
     }

     /**
      * Get the value of the TermsAndConditionsNotAcceptedCarrierList property.
      *
      * @return List<TermsAndConditionsNotAcceptedCarrier> termsAndConditionsNotAcceptedCarrierList
      */
     public function getTermsAndConditionsNotAcceptedCarrierList()
     {
         if ($this->_fields['TermsAndConditionsNotAcceptedCarrierList']['FieldValue'] == null) {
             $this->_fields['TermsAndConditionsNotAcceptedCarrierList']['FieldValue'] = [];
         }

         return $this->_fields['TermsAndConditionsNotAcceptedCarrierList']['FieldValue'];
     }

     /**
      * Set the value of the TermsAndConditionsNotAcceptedCarrierList property.
      *
      * @param array termsAndConditionsNotAcceptedCarrierList
      * @param mixed $value
      *
      * @return $this instance
      */
     public function setTermsAndConditionsNotAcceptedCarrierList($value)
     {
         if (!$this->_isNumericArray($value)) {
             $value = [$value];
         }
         $this->_fields['TermsAndConditionsNotAcceptedCarrierList']['FieldValue'] = $value;

         return $this;
     }

     /**
      * Clear TermsAndConditionsNotAcceptedCarrierList.
      */
     public function unsetTermsAndConditionsNotAcceptedCarrierList()
     {
         $this->_fields['TermsAndConditionsNotAcceptedCarrierList']['FieldValue'] = [];
     }

     /**
      * Check to see if TermsAndConditionsNotAcceptedCarrierList is set.
      *
      * @return true if TermsAndConditionsNotAcceptedCarrierList is set
      */
     public function isSetTermsAndConditionsNotAcceptedCarrierList()
     {
         return !empty($this->_fields['TermsAndConditionsNotAcceptedCarrierList']['FieldValue']);
     }

     /**
      * Add values for TermsAndConditionsNotAcceptedCarrierList, return this.
      *
      * @param termsAndConditionsNotAcceptedCarrierList
      *             New values to add
      *
      * @return $this instance
      */
     public function withTermsAndConditionsNotAcceptedCarrierList()
     {
         foreach (func_get_args() as $TermsAndConditionsNotAcceptedCarrierList) {
             $this->_fields['TermsAndConditionsNotAcceptedCarrierList']['FieldValue'][] = $TermsAndConditionsNotAcceptedCarrierList;
         }

         return $this;
     }
 }
