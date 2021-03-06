<?php

namespace Snapchat\API\Request;

use Snapchat\Snapchat;

class DeleteStoryRequest extends AuthenticatedBaseRequest {

    /**
     * @param $snapchat Snapchat
     * @param $storyId string Story Id
     */
    public function __construct($snapchat, $storyId){

        parent::__construct($snapchat);
        $this->addParam("story_id", $storyId);

    }

    public function getMethod(){
        return self::POST;
    }

    public function getEndpoint(){
        return "/bq/delete_story";
    }

    public function getResponseObject(){
        return null;
    }

    public function parseResponse(){
        return false;
    }

}