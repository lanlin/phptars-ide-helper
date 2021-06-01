<?php

/**
 * ----------------------------------------------------------------------------------
 * Tars Map
 * ----------------------------------------------------------------------------------
 *
 * @author lanlin
 * @change 2021/06/01
 */
class TARS_Map
{
    // ------------------------------------------------------------------------------

    /**
     * TARS_Map constructor.
     *
     * @param mixed $first
     * @param mixed $second
     * @param bool  $isComplex
     */
    public function __construct(mixed $first, mixed $second, bool $isComplex = false)
    {
        // ...
    }

    // ------------------------------------------------------------------------------

    /**
     * @param array $param
     *
     * @return self
     */
    public function pushBack(array $param): self
    {
        return $this;
    }

    // ------------------------------------------------------------------------------

    /**
     * @param array $param
     *
     * @return self
     */
    public function push_back(array $param): self
    {
        return $this;
    }

    // ------------------------------------------------------------------------------
}
