<?php
/**
 * Nextcloud -News
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Paul Tirk <paultirk@paultirk.com>
 * @copyright 2019 Paul Tirk
 */

namespace OCA\News\Scraper;

interface IScraper
{

    /**
     * Scrape feed url
     *
     * @param string $url
     *
     * @return array
     *
     */
    public function scrapeContent(string $url): array;
}
