<?php

declare(strict_types=1);

namespace App\Wrapper\Traits;

use Atournayre\Primitives\BoolEnum;
use Atournayre\Primitives\Int_;
use Atournayre\Primitives\Numeric;

trait AccessCollectionTrait
{
    /**
     * Returns the plain array.
     *
     * @return array<int|string, mixed>
     *
     * @api
     */
    public function all(): array
    {
        return $this->collection
            ->all()
        ;
    }

    /**
     * Returns the value at the given position.
     *
     * @return mixed|null
     *
     * @api
     */
    public function at(int $pos)
    {
        return $this->collection
            ->at($pos)
        ;
    }

    /**
     * Returns an element by key and casts it to boolean.
     *
     * @param int|string $key     Key or path to the requested item
     * @param mixed      $default Default value if key isn't found (will be casted to bool)
     *
     * @api
     */
    public function bool($key, $default = false): BoolEnum
    {
        $bool = $this->collection
            ->bool($key, $default)
        ;

        return BoolEnum::fromBool($bool);
    }

    /**
     * Calls the given method on all items.
     *
     * @api
     */
    // @phpstan-ignore-next-line Remove this line when the method is implemented
    public function call()
    {
        throw new \RuntimeException('Not implemented yet!');
    }

    /**
     * Returns the first/last matching element.
     *
     * @param \Closure $callback Function with (value, key) parameters and returns TRUE/FALSE
     * @param mixed    $default  Default value or exception if the map contains no elements
     * @param bool     $reverse  TRUE to test elements from back to front, FALSE for front to back (default)
     *
     * @return mixed First matching value, passed default value or an exception
     *
     * @throws \Throwable
     *
     * @api
     */
    public function find(\Closure $callback, $default = null, bool $reverse = false)
    {
        return $this->collection
            ->find($callback, $default, $reverse)
        ;
    }

    /**
     * Returns the first element.
     *
     * @param mixed|null $default
     *
     * @return mixed|null
     *
     * @throws \Throwable
     *
     * @api
     */
    public function first($default = null)
    {
        return $this->collection->first($default);
    }

    /**
     * Returns the first key.
     *
     * @return mixed First key of map or NULL if empty
     *
     * @api
     */
    public function firstKey()
    {
        return $this->collection
            ->firstKey()
        ;
    }

    /**
     * Returns an element by key.
     *
     * @param int|string $key
     * @param mixed|null $default
     *
     * @return mixed Value from map or default value
     *
     * @throws \Throwable
     *
     * @api
     */
    public function get($key, $default = null)
    {
        return $this->collection
            ->get($key, $default)
        ;
    }

    /**
     * Returns the numerical index of the given key.
     *
     * @param \Closure|string|int $value Key to search for or function with (key) parameters return TRUE if key is found
     *
     * @return int|null Position of the found value (zero based) or NULL if not found
     *
     * @api
     */
    public function index($value): ?int
    {
        return $this->collection
            ->index($value)
        ;
    }

    /**
     * Returns an element by key and casts it to integer.
     *
     * @param int|string $key     Key or path to the requested item
     * @param mixed      $default Default value if key isn't found (will be casted to integer)
     *
     * @api
     */
    public function int($key, $default = 0): Int_
    {
        $int = $this->collection
            ->int($key, $default)
        ;

        return Int_::of($int);
    }

    /**
     * Returns an element by key and casts it to float.
     *
     * @param int|string $key     Key or path to the requested item
     * @param mixed      $default Default value if key isn't found (will be casted to float)
     *
     * @api
     */
    public function float($key, $default = 0.0): Numeric
    {
        $float = $this->collection
            ->float($key, $default)
        ;

        return Numeric::fromFloat($float);
    }

    /**
     * Returns all keys.
     *
     * @api
     *
     * @return array-key[]
     */
    public function keys(): array
    {
        return $this->collection
            ->keys()
            ->toArray()
        ;
    }

    /**
     * Returns the last element.
     *
     * @param mixed|null $default
     *
     * @return mixed|null
     *
     * @throws \Throwable
     *
     * @api
     */
    public function last($default = null)
    {
        return $this->collection
            ->last($default)
        ;
    }

    /**
     * Returns the last key.
     *
     * @return mixed Last key of map or NULL if empty
     *
     * @api
     */
    public function lastKey()
    {
        return $this->collection
            ->lastKey()
        ;
    }

    /**
     * Returns and removes the last element.
     *
     * @return mixed Last element of the map or null if empty
     *
     * @api
     */
    public function pop()
    {
        return $this->collection
            ->pop()
        ;
    }

    /**
     * Returns the numerical index of the value.
     *
     * @param \Closure|mixed $value Value to search for or function with (item, key) parameters return TRUE if value is found
     *
     * @api
     */
    public function pos($value): ?int
    {
        return $this->collection
            ->pos($value)
        ;
    }

    /**
     * Returns and removes an element by key.
     *
     * @param int|string $key     Key to retrieve the value for
     * @param mixed      $default Default value if key isn't available
     *
     * @return mixed Value from map or default value
     *
     * @api
     */
    public function pull($key, $default = null)
    {
        return $this->collection
            ->pull($key, $default)
        ;
    }

    /**
     * Returns random elements preserving keys.
     *
     * @param int $max Maximum number of elements that should be returned
     *
     * @api
     */
    public function random(int $max = 1): self
    {
        $random = $this->collection
            ->random($max)
        ;

        return new self($random);
    }

    /**
     * Find the key of an element.
     *
     * @param mixed|null $value
     *
     * @return int|string|null Key associated to the value or null if not found
     *
     * @api
     */
    public function search($value, bool $strict = true)
    {
        return $this->collection
            ->search($value, $strict)
        ;
    }

    /**
     * Returns and removes the first element.
     *
     * @return mixed|null Value from map or null if not found
     *
     * @api
     */
    public function shift()
    {
        return $this->collection
            ->shift()
        ;
    }

    /**
     * Returns an element by key and casts it to string.
     *
     * @param int|string $key     Key or path to the requested item
     * @param mixed      $default Default value if key isn't found (will be casted to bool)
     *
     * @api
     */
    public function string($key, $default = ''): string
    {
        return $this->collection
            ->string($key, $default)
        ;
    }

    /**
     * Returns the plain array.
     *
     * @api
     *
     * @return array<int|string, mixed>
     */
    public function toArray(): array
    {
        return $this->collection->toArray();
    }

    /**
     * Returns all unique elements preserving keys.
     *
     * @api
     */
    public function unique(?string $key = null): self
    {
        $unique = $this->collection
            ->unique($key)
        ;

        return new self($unique);
    }

    /**
     * Returns all elements with new keys.
     *
     * @api
     */
    public function values(): self
    {
        $values = $this->collection->values();

        return new self($values);
    }
}
