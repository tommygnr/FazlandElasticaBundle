<?php

namespace Fazland\ElasticaBundle\Paginator;

interface PaginatorAdapterInterface
{
    /**
     * Returns the number of results.
     *
     * @return integer The number of results.
     */
    public function getTotalHits();

    /**
     * Returns an slice of the results.
     *
     * @param integer $offset The offset.
     * @param integer $length The length.
     *
     * @return PartialResultsInterface
     */
    public function getResults($offset, $length);

    /**
     * Returns Aggregations.
     *
     * @return mixed
     */
    public function getAggregations();
}
