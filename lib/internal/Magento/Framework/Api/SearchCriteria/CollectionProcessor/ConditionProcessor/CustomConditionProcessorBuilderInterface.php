<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\Framework\Api\SearchCriteria\CollectionProcessor\ConditionProcessor;

use Magento\Framework\Exception\InputException;
use Magento\Framework\Api\SearchCriteria\CollectionProcessor\ConditionProcessor\CustomConditionInterface;

/**
 * Interface CustomConditionProcessorBuilderInterface
 * Interface to build collections of all custom condition processors
 *
 * @package Magento\Framework\Api\SearchCriteria\CollectionProcessor\ConditionProcessor
 */
interface CustomConditionProcessorBuilderInterface
{
    /**
     * Get custom processor by field name
     *
     * @param $fieldName
     * @return CustomConditionInterface
     * @throws InputException
     */
    public function getProcessorByField(string $fieldName): CustomConditionInterface;

    /**
     * Check if collection has custom processor for given field name
     *
     * @param $fieldName
     * @return bool
     */
    public function hasProcessorForField(string $fieldName): bool;
}
