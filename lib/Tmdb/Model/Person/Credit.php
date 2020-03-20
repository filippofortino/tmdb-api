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
namespace Tmdb\Model\Person;

use Tmdb\Model\AbstractModel;
use Tmdb\Model\Image\PosterImage;

/**
 * Class MovieCredit
 * @package Tmdb\Model\Person
 */
class Credit extends AbstractModel
{
    /**
     * @var bool
     */
    private $adult;

    /**
     * @var string
     */
    private $character;

    /**
     * @var string
     */
    private $creditId;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $originalTitle;
    
    /**
     * @var int
     */
    private $popularity;

    /**
     * @var string
     */
    private $posterPath;

    /**
     * @var \DateTime
     */
    private $releaseDate;

    /**
     * @var string
     */
    private $title;

    /**
     * @var PosterImage
     */
    private $posterImage;

    /**
     * @var string
     */
    private $job;

    /**
     * @var string
     */
    private $department;

    /**
     * @var string
     */
    private $mediaType;

    /**
     * @var string
     */
    private $originalName;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $episodeCount;

    /**
     * @var mixed
     */
    private $firstAirDate;

    public static $properties = array(
        'adult',
        'character',
        'credit_id',
        'id',
        'original_title',
        'popularity',
        'poster_path',
        'release_date',
        'title',
        'job',
        'department',
        'original_name',
        'name',
        'media_type',
        'episode_count',
        'first_air_date'
    );

    /**
     * @param  boolean $adult
     * @return $this
     */
    public function setAdult($adult)
    {
        $this->adult = $adult;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getAdult()
    {
        return $this->adult;
    }

    /**
     * @param  string $character
     * @return $this
     */
    public function setCharacter($character)
    {
        $this->character = $character;

        return $this;
    }

    /**
     * @return string
     */
    public function getCharacter()
    {
        return $this->character;
    }

    /**
     * @param  string $creditId
     * @return $this
     */
    public function setCreditId($creditId)
    {
        $this->creditId = $creditId;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreditId()
    {
        return $this->creditId;
    }

    /**
     * @param  int   $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param  string $originalTitle
     * @return $this
     */
    public function setOriginalTitle($originalTitle)
    {
        $this->originalTitle = $originalTitle;

        return $this;
    }

    /**
     * @return string
     */
    public function getOriginalTitle()
    {
        return $this->originalTitle;
    }
    
    /**
     * @param  int $popularity
     * @return $this
     */
    public function setPopularity($popularity)
    {
        $this->popularity = $popularity;

        return $this;
    }

    /**
     * @return int
     */
    public function getPopularity()
    {
        return $this->popularity;
    }

    /**
     * @param  \Tmdb\Model\Image\PosterImage $posterImage
     * @return $this
     */
    public function setPosterImage($posterImage)
    {
        $this->posterImage = $posterImage;

        return $this;
    }

    /**
     * @return \Tmdb\Model\Image\PosterImage
     */
    public function getPosterImage()
    {
        return $this->posterImage;
    }

    /**
     * @param  string $posterPath
     * @return $this
     */
    public function setPosterPath($posterPath)
    {
        $this->posterPath = $posterPath;

        return $this;
    }

    /**
     * @return string
     */
    public function getPosterPath()
    {
        return $this->posterPath;
    }

    /**
     * @param  \DateTime $releaseDate
     * @return $this
     */
    public function setReleaseDate($releaseDate)
    {
        if (!$releaseDate instanceof \DateTime) {
            // When the release date is not available
            // TMDb might return the field 'release_date'
            // as an empty string or not returning it
            // at all. In both cases we set the
            // $releaseDate property as null.
            if($releaseDate)
                $releaseDate = new \DateTime($releaseDate);
            else
                $releaseDate = null;
        }

        $this->releaseDate = $releaseDate;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * @param  string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param  string $job
     * @return $this
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * @return string
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * @param  string $department
     * @return $this
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * @return string
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @return string
     */
    public function getOriginalName()
    {
        return $this->originalName;
    }

    /**
     * @param string $originalName
     * @return $this
     */
    public function setOriginalName($originalName)
    {
        $this->originalName = $originalName;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getMediaType()
    {
        return $this->mediaType;
    }

    /**
     * @param string $mediaType
     * @return $this
     */
    public function setMediaType($mediaType)
    {
        $this->mediaType = $mediaType;

        return $this;
    }

    /**
     * @return int
     */
    public function getEpisodeCount()
    {
        return $this->episodeCount;
    }

    /**
     * @param int $episodeCount
     * @return $this
     */
    public function setEpisodeCount($episodeCount)
    {
        $this->episodeCount = $episodeCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstAirDate()
    {
        return $this->firstAirDate;
    }

    /**
     * @param mixed $firstAirDate
     * @return $this
     */
    public function setFirstAirDate($firstAirDate)
    {
        $this->firstAirDate = $firstAirDate;

        return $this;
    }
}
