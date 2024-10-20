<?php
declare(strict_types=1);

namespace App\Wrapper;

use Aimeos\Map as AimeosMap;
use App\Wrapper\Traits\AccessCollectionTrait;
use App\Wrapper\Traits\AddCollectionTrait;
use App\Wrapper\Traits\AggregateCollectionTrait;
use App\Wrapper\Traits\CountableCollectionTrait;
use App\Wrapper\Traits\CreateCollectionTrait;
use App\Wrapper\Traits\DebugCollectionTrait;
use App\Wrapper\Traits\MiscCollectionTrait;
use App\Wrapper\Traits\OrderCollectionTrait;
use App\Wrapper\Traits\ShortenCollectionTrait;
use App\Wrapper\Traits\TestCollectionTrait;
use App\Wrapper\Traits\TransformCollectionTrait;

final class Collection
{
    use AccessCollectionTrait;
    use AddCollectionTrait;
    use AggregateCollectionTrait;
    use CountableCollectionTrait;
    use CreateCollectionTrait;
    use DebugCollectionTrait;
    use MiscCollectionTrait;
    use OrderCollectionTrait;
    use ShortenCollectionTrait;
    use TestCollectionTrait;
    use TransformCollectionTrait;

    private AimeosMap $collection;

    private function __construct(AimeosMap $collection)
    {
        $this->collection = $collection;
    }

    private function convertElementsToArray($elements): array
    {
        if ($elements instanceof self) {
            return $elements->all();
        }

        return (array) $elements;
    }
}
