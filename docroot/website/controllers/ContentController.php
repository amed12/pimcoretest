<?php

use Website\Controller\Action;
use Pimcore\Model\Object\News;

class ContentController extends Action
{
    public function defaultAction()
    {
        $news = new News\Listing();
        $news->load();
        $this->view->news = $news;

    }

    public function saveAction()
    {
        $news = new News\Listing();
        $news->load();
        $this->view->news = $news;

    }

    public function tampilAction()
    {
        $news = News::getById($this->getParam('id'));

        $this->view->news = $news;

    }

    public function updateAction()
    {
        $this->disableViewAutoRender();
        $id = null;
        $objectSave = News::getById($this->getParam('id'));
        $objectSave->setTitle($this->getParam("title"));
        $objectSave->setContent($this->getParam("content"));
        $objectSave->setCategory($this->getParam("category"));
        $objectSave->setCreator($id);
        $objectSave->setPublished(true);
        try{
            $objectSave->save();
        }catch (\Exception $e){
            dump($e->getMessage());
        }

    }

    public function submitAction()
    {
        $this->disableViewAutoRender();
        $id = null;
        $filename = \Pimcore\File::getValidFilename($this->getParam('title'));
        $objectSave = new News();
        $objectSave->setParent(\Pimcore\Model\Object::getByPath("/news"));
        $objectSave->setKey($filename);
        $objectSave->setTitle($this->getParam("title"));
        $objectSave->setContent($this->getParam("content"));
        $objectSave->setCategory($this->getParam("category"));
        $objectSave->setCreator($id);
        $objectSave->setPublished(true);
        try{
            $objectSave->save();
        }catch (\Exception $e){
            dump($e->getMessage());
        }
    }

    public function deleteAction(){
        $this->disableViewAutoRender();
        $newsReport = News::getById($this->getParam('id'));
        try{
            $newsReport->delete();
        }catch (\Exception $e){
            dump($e->getMessage());
        }

    }


}
