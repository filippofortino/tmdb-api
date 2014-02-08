<?php
/**
 * This file is part of the Tmdb PHP API created by Michael Roterman.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Tmdb
 * @author Michael Roterman <michael@wtfz.net>
 * @copyright (c) 2013, Michael Roterman
 * @version 0.0.1
 */
namespace Tmdb\Factory\Movie;

use Tmdb\Factory\AbstractFactory;
use Tmdb\Model\Collection\ResultCollection;
use Tmdb\Model\Movie\Review;

class ReviewFactory extends AbstractFactory
{
    /**
     * {@inheritdoc}
     */
    public function create(array $data = array())
    {
        $review = new Review();

        return $this->hydrate($review, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function createCollection(array $data = array())
    {
        $collection = new ResultCollection();

        $collection->setPage($data['page']);
        $collection->setTotalPages($data['total_pages']);
        $collection->setTotalResults($data['total_results']);

        if (array_key_exists('results', $data)) {
            $data = $data['results'];
        }

        foreach($data as $item) {
            $collection->add(null, $this->create($item));
        }

        return $collection;
    }
}