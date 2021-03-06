<?php

/*
 * Copyright (c) 2010, Harald Lapp <harald@octris.org>.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without 
 * modification, are permitted provided that the following conditions 
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright 
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright 
 *     notice, this list of conditions and the following disclaimer in 
 *     the documentation and/or other materials provided with the 
 *     distribution.
 *
 *   * Neither the name of Harald Lapp nor the names of its 
 *     contributors may be used to endorse or promote products derived 
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS 
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT 
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS 
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE 
 * COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, 
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, 
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; 
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER 
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT 
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN 
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE 
 * POSSIBILITY OF SUCH DAMAGE.
 *
 */

namespace org\octris\newt\component {
    /****c* component/scale
     * NAME
     *      scale
     * FUNCTION
     *      This components purpose is to display a progress meter.
     * COPYRIGHT
     *      copyright (c) 2010 by Harald Lapp
     * AUTHOR
     *      Harald Lapp <harald@octris.org>
     ****
     */

    class scale {
        /****m* scale/__construct
         * SYNOPSIS
         */
        function __construct($x, $y, $width, $max)
        /*
         * FUNCTION
         *      constructor
         * INPUTS
         *      * $x (int) -- column to display the scale at
         *      * $y (int) -- row to display the scale in
         *      * $width (int) -- width of the scale itself
         *      * $max (int) -- max-value to scale can have
         ****
         */
        {
            $this->resource = newt_scale($x, $y, $width, $max);
        }
        
        /****m* scale/set
         * SYNOPSIS
         */
        function set($amount)
        /*
         * FUNCTION
         *      set amount of scale
         * INPUTS
         *      * $amount (int) -- amount to set for scale
         ****
         */
        {
            newt_scale_set($this->resource, $amount);
        }
    }
}
