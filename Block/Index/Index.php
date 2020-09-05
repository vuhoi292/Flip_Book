<?php

namespace Book\Flip\Block\Index;

use Book\Flip\Model\FlipFactory;
use Magento\Framework\ObjectManagerInterface;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Store\Model\StoreManagerInterface;

class Index extends \Magento\Framework\View\Element\Template
{

	protected $_flipModel;
    private $_objectManager;
    protected $_storeManager;

	public function __construct(
        Context $context,
        FlipFactory $flipModel,
        DirectoryList $directoryList,
        ObjectManagerInterface $objectmanager,
        StoreManagerInterface $storeManager
        
    ) {
        $this->_flipModel = $flipModel;
        $this->_objectManager = $objectmanager;
        $this->directory_list = $directoryList;
        $this->_storeManager = $storeManager;
        parent::__construct($context);
    }


    public function getCollection()
    {
        $collection = $this->_flipModel->create();
        $items = $collection->getCollection();
        return $items;
    }

    public function getBook($id)
    {
        $collection = $this->_flipModel->create();
        $book = $collection->load($id);
        return $book;
    }

    public function getBookDir(){
    	return $this->directory_list->getPath('media').'/book';
    }

    public function getBookPath($folder){
    	return $this->getUrl('pub/media').'book'.$folder;
    }

    public function getUploadDir($book)
    {
    	$uploadDir = substr($book->getUpload(), 0, -4);
    	return $uploadDir;
    }

    public function getBackgroundImage($book, $file)
    {	
    	$image = "background-image:url('".$this->getBookPath($book->getUpload())."')";
        return $image;
    }
 
    public function getBookPages($book)
    {
        $files = $this->getBookDir().'/t/e';
        
        $files_in_directory = scandir($files);
        //var_dump($files);die("123"); 
        $items_count = count($files_in_directory);
        $fileArray = array();
        if ($items_count <= 2) { return false; }
        else 
        {
            $pages = array_slice(scandir($files),2);
            foreach ($pages as $file) { $fileArray[] = $file; }     
            sort($fileArray, SORT_NUMERIC);
        }
        //var_dump($fileArray);die("123");
        return $fileArray;

    }

    public function getThumbnail($book)
    {
        $media = $this ->_storeManager-> getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA );
        $thumbUrl = $media.'book'.$book->getThumbnail();
        $thumb = "<img class='top' src='".$thumbUrl."'>";
        return $thumb;

    }

    public function getConfig($value)
    {
		$config = $this->_objectManager->
		get('Magento\Framework\App\Config\ScopeConfigInterface')->getValue($value);
    	return $config;
    }


}
