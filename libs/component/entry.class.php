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
    /****c* component/entry
     * NAME
     *      entry
     * FUNCTION
     *      entry component
     * COPYRIGHT
     *      copyright (c) 2010 by Harald Lapp
     * AUTHOR
     *      Harald Lapp <harald@octris.org>
     ****
     */

    class entry extends \org\octris\newt\component {
        /****m* entry/__construct
         * SYNOPSIS
         */
        public function __construct($x, $y, $width, $default = '', $flags = 0)
        /*
         * FUNCTION
         *      constructor
         * INPUTS
         *      * $x (int) -- column to display entry box at
         *      * $y (int) -- row to display entry box in
         *      * $width (int) -- width of entry box
         *      * $default (string) -- (optional) default value for entry box
         *      * $flags (int) -- (optional) flags
         ****
         */
        {
            $this->resource = newt_entry($x, $y, $width, $default, $flags);
            newt_component_add_callback($this->resource, array($this, 'onBlur'), null);
        }
        
        /****m* entry/setValue
         * SYNOPSIS
         */
        public function setValue($value, $cursor_at_end = false)
        /*
         * FUNCTION
         *      Set the value of the entry box.
         * INPUTS
         *      * $value (string) -- value to set
         *      * $cursor_at_end (bool) -- (optional) position cursor behind of the value (default: false)
         ****
         */
        {
            newt_entry_set($this->resource, $value, $cursor_at_end);
        }
        
        /****m* entry/getValue
         * SYNOPSIS
         */
        public function getValue()
        /*
         * FUNCTION
         *      Get value of the entry box.
         * OUTPUTS
         *      (string) -- value of the entry box
         ****
         */
        {
            return newt_entry_get_value($this->resource);
        }
        
        /****m* entry/setFilter
         * SYNOPSIS
         */
        public function setFilter($callback, $data)
        /*
         * FUNCTION
         *      Set filter callback for entry box.
         * INPUTS
         *      * $callback (callback) -- callback of filter
         *      * $data (array) -- (???)
         ****
         */
        {
            newt_entry_set_filter($this->resource, $callback, $data);
        }
    }
}
