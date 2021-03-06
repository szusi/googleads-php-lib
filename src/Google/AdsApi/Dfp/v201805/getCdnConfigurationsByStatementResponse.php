<?php

namespace Google\AdsApi\Dfp\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getCdnConfigurationsByStatementResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201805\CdnConfigurationPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201805\CdnConfigurationPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201805\CdnConfigurationPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201805\CdnConfigurationPage $rval
     * @return \Google\AdsApi\Dfp\v201805\getCdnConfigurationsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
