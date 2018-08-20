<?php

class Comment {

    private $_id;
    private $_id_post;
    private $_author;
    private $_comment;
    private $_date_comment_fr;

    /**
     * Constructeur qui hydrate nos instances
     *
     */
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    /**
     * Hydratation des setters
     *
     * @param array $data
     */
    public function hydrate(array $data)
    {
        foreach($data as $key => $value)
        {
            $method = 'set'.ucfirst($key);

            if(method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }

    /**
     * Setter Id
     *
     * @param [type] $id
     */
    public function setId($id)
    {
        $id = (int) $id;

        if($id > 0)
        {
            $this->_id = $id;
        }
    }

    /**
     * Setter Id Post
     *
     * @param [type] $id_post
     */
    public function setId_Post($id_post)
    {
        $id_post = (int) $id_post;

        if($id_post > 0)
        {
            $this->_id_post = $id_post;
        }
    }

    /**
     * Setter Author
     *
     * @param [type] $author
     */
    public function setAuthor($author)
    {
        if(is_string($author))
        {
            $this->_author = $author;
        }
    }
    
    /**
     * Setter Comment
     *
     * @param [type] $comment
     */
    public function setComment($comment)
    {
        if(is_string($comment))
        {
            $this->_comment = $comment;
        }
    }

    /**
     * Setter Date Comment
     *
     * @param [type] $dateComment
     */
    public function setDate_Comment_Fr($dateComment)
    {
        $this->_date_comment_fr = $dateComment;
    }

    /**
     * Getter Id
     *
     * @return $this->_id;
     */
    public function id()
    {
        return $this->_id;
    }

    /**
     * Getter Id Post
     *
     * @return $this->_id_post;
     */
    public function idPost()
    {
        return $this->_id_post;
    }
    
    /**
     * Getter Author
     *
     * @return $this->_author;
     */
    public function author()
    {
        return $this->_author;
    }

    /**
     * Getter Comment
     *
     * @return $this->_comment;
     */
    public function comment()
    {
        return $this->_comment;
    }

    /**
     * Getter Date comment
     *
     * @return $this->_date_comment_fr;
     */
    public function dateComment()
    {
        return $this->_date_comment_fr;
    }
}