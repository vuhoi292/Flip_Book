<?php


namespace Book\Flip\Api\Data;

interface FlipInterface
{

    const FLIP_ID = 'flip_id';
    const UPLOAD = 'upload';
    const TITLE = 'title';
    const AUTHOR = 'author';
    const CATEGORY = 'category';


    /**
     * Get flip_id
     * @return string|null
     */
    
    public function getFlipId();

    /**
     * Set flip_id
     * @param string $flip_id
     * @return Book\Flip\Api\Data\FlipInterface
     */
    
    public function setFlipId($flipId);

    /**
     * Get title
     * @return string|null
     */
    
    public function getTitle();

    /**
     * Set title
     * @param string $title
     * @return Book\Flip\Api\Data\FlipInterface
     */
    
    public function setTitle($title);

    /**
     * Get category
     * @return string|null
     */
    
    public function getCategory();

    /**
     * Set category
     * @param string $category
     * @return Book\Flip\Api\Data\FlipInterface
     */
    
    public function setCategory($category);

    /**
     * Get author
     * @return string|null
     */
    
    public function getAuthor();

    /**
     * Set author
     * @param string $author
     * @return Book\Flip\Api\Data\FlipInterface
     */
    
    public function setAuthor($author);

    /**
     * Get upload
     * @return string|null
     */
    
    public function getUpload();

    /**
     * Set upload
     * @param string $upload
     * @return Book\Flip\Api\Data\FlipInterface
     */
    
    public function setUpload($upload);
}
