<?php


namespace Book\Flip\Api\Data;

interface FlipSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{


    /**
     * Get flip list.
     * @return \Book\Flip\Api\Data\FlipInterface[]
     */
    
    public function getItems();

    /**
     * Set title list.
     * @param \Book\Flip\Api\Data\FlipInterface[] $items
     * @return $this
     */
    
    public function setItems(array $items);
}
