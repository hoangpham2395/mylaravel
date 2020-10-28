<?php

namespace App\Http\Controllers\Base;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;

class BaseController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $_area = '';
    protected $_viewData = [];
    protected $_title = '';
    protected $_repository;
    // For SEO
    protected $_description = '';
    protected $_keywords = '';
    protected $_image = '';
    protected $_url = '';

    public function getArea()
    {
        return $this->_area;
    }

    public function getViewData()
    {
        return $this->_viewData;
    }

    public function setViewData($viewData = [])
    {
        $this->_viewData = array_merge($this->getViewData(), $viewData);
    }

    public function getTitle()
    {
        return $this->_title;
    }

    public function setTitle($title)
    {
        $this->_title = $title;
    }

    public function getDescription()
    {
        return $this->_description;
    }

    public function setDescription($description)
    {
        $this->_description = $description;
    }

    public function getKeywords()
    {
        return $this->_keywords;
    }

    public function setKeywords($keywords)
    {
        $this->_keywords = $keywords;
    }

    public function getImage()
    {
        return $this->_image;
    }

    public function setImage($image)
    {
        $this->_image = $image;
    }

    public function getUrl()
    {
        return $this->_url;
    }

    public function setUrl($url)
    {
        $this->_url = $url;
    }

    public function render($view = null, $data = [], $mergeData = [])
    {
        $view = $view ? $view : $this->getArea() . '.' . getCurrentControllerName() . '.' . getCurrentActionName();
        $data = array_merge($data, $this->getViewData());
        $data += [
            '_title' => $this->getTitle(),
            '_description' => $this->getDescription(),
            '_keywords' => $this->getKeywords(),
            '_image' => $this->getImage(),
            '_url' => $this->getUrl(),
        ];

        $this->setViewData($data);
        return view($view, $data, $mergeData);
    }

    public function getRepository()
    {
        return $this->_repository;
    }

    public function setRepository($repository)
    {
        $this->_repository = $repository;
    }
}
