<?php
/**
 * Nextcloud - News
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Paul Tirk <paultirk@paultirk.com>
 * @copyright 2019 Paul Tirk
 */

 namespace OCA\News\Scraper;

 use Graby\Graby;

class Scraper implements IScraper
{

    public function __construct(Graby $scraper)
    {
        $this->scraper = $scraper;
    }

    public function scrapeContent(string $url): array
    {
        return $this->scraper->fetchContent($url);
    }
}
