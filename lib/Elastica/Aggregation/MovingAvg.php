<?php
namespace Elastica\Aggregation;

/**
* Class MovingAvg.
*
* @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-pipeline-movavg-aggregation.html
*/
class MovingAvg extends AbstractSimpleAggregation
{
    public function __construct($name, $bucketsPath)
    {
        parent::__construct($name);
        $this->setBucketsPath($bucketsPath);
    }

    public function setBucketsPath($name){
        return $this->setParam('buckets_path', $name);
    }

    public function setWindow($size){
        return $this->setParam('window', $size);
    }
}
