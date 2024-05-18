<?php

/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */
namespace Google\Site_Kit_Dependencies\Google\Service\PagespeedInsights;

class I18n extends \Google\Site_Kit_Dependencies\Google\Model
{
    protected $rendererFormattedStringsType = \Google\Site_Kit_Dependencies\Google\Service\PagespeedInsights\RendererFormattedStrings::class;
    protected $rendererFormattedStringsDataType = '';
    /**
     * @param RendererFormattedStrings
     */
    public function setRendererFormattedStrings(\Google\Site_Kit_Dependencies\Google\Service\PagespeedInsights\RendererFormattedStrings $rendererFormattedStrings)
    {
        $this->rendererFormattedStrings = $rendererFormattedStrings;
    }
    /**
     * @return RendererFormattedStrings
     */
    public function getRendererFormattedStrings()
    {
        return $this->rendererFormattedStrings;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\Google\Site_Kit_Dependencies\Google\Service\PagespeedInsights\I18n::class, 'Google\\Site_Kit_Dependencies\\Google_Service_PagespeedInsights_I18n');
