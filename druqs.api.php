<?php

/**
 * @file
 * Hooks for the omnibox module.
 */

/**
 * @addtogroup hooks
 * @{
 */

/**
 * Add search results to a given omnibox search string
 *
 * @param $args
 *   An associate array with the following keys:
 *     'input': the search string
 *     'results_current': the current amount of results
 *     'results_per_source': the maximum amount of results per source
 *     'results_max': the total amount of results
 */
function hook_druqs_search(array &$args) {
  // do stuff
}

/**
 * @} End of "addtogroup hooks".
 */
