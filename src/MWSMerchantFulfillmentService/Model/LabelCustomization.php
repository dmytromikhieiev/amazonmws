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
  * MWSMerchantFulfillmentService_Model_LabelCustomization
  *
  * Properties:
  * <ul>
  *
  * <li>CustomTextForLabel: string</li>
  * <li>StandardIdForLabel: string</li>
  *
  * </ul>
  */
 class MWSMerchantFulfillmentService_Model_LabelCustomization extends MWSMerchantFulfillmentService_Model
 {
     public function __construct($data = null)
     {
         $this->_fields = [
    'CustomTextForLabel' => ['FieldValue' => null, 'FieldType' => 'string'],
    'StandardIdForLabel' => ['FieldValue' => null, 'FieldType' => 'string'],
    ];
         parent::__construct($data);
     }

     /**
      * Get the value of the CustomTextForLabel property.
      *
      * @return string customTextForLabel
      */
     public function getCustomTextForLabel()
     {
         return $this->_fields['CustomTextForLabel']['FieldValue'];
     }

     /**
      * Set the value of the CustomTextForLabel property.
      *
      * @param string customTextForLabel
      * @param mixed $value
      *
      * @return $this instance
      */
     public function setCustomTextForLabel($value)
     {
         $this->_fields['CustomTextForLabel']['FieldValue'] = $value;

         return $this;
     }

     /**
      * Check to see if CustomTextForLabel is set.
      *
      * @return true if CustomTextForLabel is set
      */
     public function isSetCustomTextForLabel()
     {
         return !is_null($this->_fields['CustomTextForLabel']['FieldValue']);
     }

     /**
      * Set the value of CustomTextForLabel, return this.
      *
      * @param customTextForLabel
      *             The new value to set
      * @param mixed $value
      *
      * @return $this instance
      */
     public function withCustomTextForLabel($value)
     {
         $this->setCustomTextForLabel($value);

         return $this;
     }

     /**
      * Get the value of the StandardIdForLabel property.
      *
      * @return string standardIdForLabel
      */
     public function getStandardIdForLabel()
     {
         return $this->_fields['StandardIdForLabel']['FieldValue'];
     }

     /**
      * Set the value of the StandardIdForLabel property.
      *
      * @param string standardIdForLabel
      * @param mixed $value
      *
      * @return $this instance
      */
     public function setStandardIdForLabel($value)
     {
         $this->_fields['StandardIdForLabel']['FieldValue'] = $value;

         return $this;
     }

     /**
      * Check to see if StandardIdForLabel is set.
      *
      * @return true if StandardIdForLabel is set
      */
     public function isSetStandardIdForLabel()
     {
         return !is_null($this->_fields['StandardIdForLabel']['FieldValue']);
     }

     /**
      * Set the value of StandardIdForLabel, return this.
      *
      * @param standardIdForLabel
      *             The new value to set
      * @param mixed $value
      *
      * @return $this instance
      */
     public function withStandardIdForLabel($value)
     {
         $this->setStandardIdForLabel($value);

         return $this;
     }
 }