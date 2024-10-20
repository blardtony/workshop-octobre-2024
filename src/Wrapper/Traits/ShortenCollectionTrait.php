<?php

declare(strict_types=1);

namespace App\Wrapper\Traits;

use Atournayre\Primitives\Collection;

trait ShortenCollectionTrait
{
    /**
     * Returns the elements after the given one.
     *
     * @param \Closure|int|string $value
     *
     * @api
     */
    public function after($value): self
    {
        $after = $this->collection
            ->after($value)
        ;

        return new self($after);
    }

    /**
     * Returns the elements before the given one.
     *
     * @param \Closure|int|string $value
     *
     * @api
     */
    public function before($value): self
    {
        $before = $this->collection
            ->before($value)
        ;

        return new self($before);
    }

    /**
     * Removes all elements.
     *
     * @api
     */
    public function clear(): self
    {
        $clear = $this->collection
            ->clear()
        ;

        return new self($clear);
    }

    /**
     * Returns the elements missing in the given list.
     *
     * @param iterable<int|string,mixed>|Collection $elements List of elements
     * @param callable|null                         $callback Function with (valueA, valueB) parameters and returns -1 (<), 0 (=) and 1 (>)
     *
     * @api
     */
    public function diff($elements, ?callable $callback = null): self
    {
        $elements = $this->convertElementsToArray($elements);

        $diff = $this->collection
            ->diff($elements, $callback)
        ;

        return new self($diff);
    }

    /**
     * Returns the elements missing in the given list and checks keys.
     *
     * @param iterable<int|string,mixed>|Collection $elements List of elements
     * @param callable|null                         $callback Function with (valueA, valueB) parameters and returns -1 (<), 0 (=) and 1 (>)
     *
     * @api
     */
    public function diffAssoc($elements, ?callable $callback = null): self
    {
        $elements = $this->convertElementsToArray($elements);

        $diffAssoc = $this->collection
            ->diffAssoc($elements, $callback)
        ;

        return new self($diffAssoc);
    }

    /**
     * Returns the elements missing in the given list by keys.
     *
     * @param iterable<int|string,mixed>|Collection $elements List of elements
     * @param callable|null                         $callback Function with (valueA, valueB) parameters and returns -1 (<), 0 (=) and 1 (>)
     *
     * @api
     */
    public function diffKeys($elements, ?callable $callback = null): self
    {
        $elements = $this->convertElementsToArray($elements);

        $diffKeys = $this->collection
            ->diffKeys($elements, $callback)
        ;

        return new self($diffKeys);
    }

    /**
     * Returns a new map without the passed element keys.
     *
     * @param iterable<string|int>|array<string|int>|string|int $keys List of keys to remove
     *
     * @api
     */
    public function except($keys): self
    {
        $except = $this->collection
            ->except($keys)
        ;

        return new self($except);
    }

    /**
     * Applies a filter to all elements.
     *
     * @api
     */
    public function filter(?callable $callback = null): self
    {
        $filtered = $this->collection->filter($callback);

        return new self($filtered);
    }

    /**
     * Applies a regular expression to all elements.
     *
     * @api
     */
    public function grep(string $pattern, int $flags = 0): self
    {
        $grep = $this->collection
            ->grep($pattern, $flags)
        ;

        return new self($grep);
    }

    /**
     * Returns the elements shared.
     *
     * @param iterable<int|string,mixed>|Collection $elements List of elements
     *
     * @api
     */
    public function intersect($elements, ?callable $callback = null): self
    {
        $elements = $this->convertElementsToArray($elements);

        $intersect = $this->collection
            ->intersect($elements, $callback)
        ;

        return new self($intersect);
    }

    /**
     * Returns the elements shared and checks keys.
     *
     * @param iterable<int|string,mixed>|Collection $elements List of elements
     *
     * @api
     */
    public function intersectAssoc($elements, ?callable $callback = null): self
    {
        $elements = $this->convertElementsToArray($elements);

        $intersectAssoc = $this->collection
            ->intersectAssoc($elements, $callback)
        ;

        return new self($intersectAssoc);
    }

    /**
     * Returns the elements shared by keys.
     *
     * @param iterable<int|string,mixed>|Collection $elements List of elements
     *
     * @api
     */
    public function intersectKeys($elements, ?callable $callback = null): self
    {
        $elements = $this->convertElementsToArray($elements);

        $intersectKeys = $this->collection
            ->intersectKeys($elements, $callback)
        ;

        return new self($intersectKeys);
    }

    /**
     * Returns every nth element from the map.
     *
     * @api
     */
    public function nth(int $step, int $offset = 0): self
    {
        $nth = $this->collection
            ->nth($step, $offset)
        ;

        return new self($nth);
    }

    /**
     * Returns only those elements specified by the keys.
     *
     * @param iterable<mixed>|array<mixed>|string|int $keys Keys of the elements that should be returned
     *
     * @api
     */
    public function only($keys): self
    {
        $only = $this->collection
            ->only($keys)
        ;

        return new self($only);
    }

    /**
     * Removes all matched elements.
     *
     * @param Closure|mixed $callback Function with (item) parameter which returns TRUE/FALSE or value to compare with
     *
     * @api
     */
    public function reject($callback = true): self
    {
        $reject = $this->collection
            ->reject($callback)
        ;

        return new self($reject);
    }

    /**
     * Removes an element by key.
     *
     * @param iterable<string|int>|array<string|int>|string|int $keys List of keys to remove
     *
     * @api
     */
    public function remove($keys): self
    {
        $remove = $this->collection
            ->remove($keys)
        ;

        return new self($remove);
    }

    /**
     * Skips the given number of items and return the rest.
     *
     * @param \Closure|int|array<array-key,mixed> $offset Number of items to skip or function($item, $key) returning true for skipped items
     *
     * @api
     */
    public function skip($offset): self
    {
        $skip = $this->collection
            ->skip($offset)
        ;

        return new self($skip);
    }

    /**
     * Returns a slice of the map.
     *
     * @param int      $offset Number of elements to start from
     * @param int|null $length Number of elements to return or NULL for no limit
     *
     * @api
     */
    public function slice(int $offset, ?int $length = null): self
    {
        $slice = $this->collection
            ->slice($offset, $length)
        ;

        return new self($slice);
    }

    /**
     * Returns a new map with the given number of items.
     *
     * @param int                                 $size   Number of items to return
     * @param \Closure|int|array<array-key,mixed> $offset Number of items to skip or function($item, $key) returning true for skipped items
     *
     * @api
     */
    public function take(int $size, $offset = 0): self
    {
        $take = $this->collection
            ->take($size, $offset)
        ;

        return new self($take);
    }

    /**
     * Filters the list of elements by a given condition.
     *
     * @param string $key   Key or path of the value in the array or object used for comparison
     * @param string $op    Operator used for comparison
     * @param mixed  $value Value used for comparison
     *
     * @api
     */
    public function where(string $key, string $op, $value): self
    {
        $where = $this->collection
            ->where($key, $op, $value)
        ;

        return new self($where);
    }
}
