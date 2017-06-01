<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     ServiceModule
 */

namespace Service\Controller;

use Zend\Mvc\Controller\AbstractActionController,
	Zend\View\Model\ViewModel,
	Zend\Session\Container;

use Service\Model\CustomUploadHandler;
	
class UploadController extends AbstractActionController
{
	protected $authservice;
	protected $service;
	
	public function __construct()
    {
        $this->request	= $this->getRequest();
		
    }
	
	/**	Service Authentivication */
	public function getAuthService()
    {
        if (! $this->authservice) {
            $this->authservice = $this->getServiceLocator()
                                      ->get('AuthService');
        }
        
        return $this->authservice;
    }
	
	/** Get Service */
	public function getService()
    {
		if (! $this->service) {
        	$this->service = $this->getServiceLocator()
									->get('TableService');
		}
		
        return $this->service;
    }
	
	/**	Get info user logedin */
	public function getUserInfo()
	{
		return $this->getAuthService()->getStorage()->read();
	}
	
	public function indexAction()
    {
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		exit();
    }
	
	public function imagesAction()
    {
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		$thumbnail	= $this->request->getQuery('thumb');
		$filename	= $this->request->getQuery('name');
		$filesize	= $this->request->getQuery('size');
		
		if(isset($thumbnail) && $thumbnail != ''):
			$thumbnail	= $thumbnail;
		else:
			$thumbnail 	= '';
		endif;
		
		if(isset($filesize) && $filesize != ''):
			$size 	= explode("X", strtoupper($filesize));
			$width	= $size[0];
			$height	= $size[1];
		else:
			$width	= '300';
			$height	= '350';
		endif;
		
		if(isset($filename) && $filename != ''):
			$files = $filename;
		else:
			$files = 'files';
		endif;
		
		error_reporting(E_ALL | E_STRICT);
		$upload_dir = UPLOAD_PATH.'/uploads/temp/';
		$options 	= array('upload_dir' => $upload_dir,
							'param_name' => $files,
							'accept_file_types' => '/\.(gif|jpe?g|png)$/i',
							'image_versions' => array($thumbnail => array( 'max_width' 	=> $width,
																		   'max_height' => $height
																		   ))
							);
		
		$userfiles = $_FILES[$files]['name'];					
		$upload_handler = new CustomUploadHandler($options,$userfiles);
		
		exit();
    }
	
	public function filesAction()
    {
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		$filename	= $this->request->getQuery('name');
		
		if(isset($filename) && $filename != ''):
			$files = $filename;
		else:
			$files = 'files';
		endif;
		
		error_reporting(E_ALL | E_STRICT);
		$upload_dir = UPLOAD_PATH.'/uploads/temp/';
		$options 	= array('upload_dir' => $upload_dir,
							'param_name' => $files,
							'accept_file_types' => '/\.(pdf|xls?x|doc)$/i',
							);

		$userfiles = $_FILES[$files]['name'];
		$upload_handler = new CustomUploadHandler($options,$userfiles);
		
		exit();
    }
	
	public function attachmentAction()
    {
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		$filename	= $this->request->getQuery('name');
		$prefixname	= $this->request->getQuery('prefix');
		$IDPEGAWAI	= $this->request->getQuery('IDPEGAWAI');
		$NIP		= $this->request->getQuery('NIP');
		$TABLE		= $this->request->getQuery('TABLE');
		$IDTABLE	= $this->request->getQuery('IDTABLE');
		
		if(isset($filename) && $filename != ''):
			$files = $filename;
		else:
			$files = 'files';
		endif;
		
		if(isset($prefixname) && $prefixname != ''):
			$prefix = $prefixname.'_';
		else:
			$prefix = '';
		endif;
		
		if(isset($NIP) && $NIP != ''):
			$NIP = $NIP.'/';
		else:
			$NIP = '';
		endif;
		
		error_reporting(E_ALL | E_STRICT);
		$upload_dir = UPLOAD_PATH.'/uploads/temp/';
		$options 	= array('upload_dir' => $upload_dir,
							'param_name' => $files,
							'accept_file_types' => '/\.(pdf|xls?x|doc)$/i',
							);

		$userfiles = $_FILES[$files]['name'];
		$upload_handler = new CustomUploadHandler($options,$userfiles);
		
		$new_files	= $prefix.$userfiles;
		rename($upload_dir.$userfiles, $upload_dir.$new_files);

		$source_files	= $upload_dir.$new_files;
		$pinfo 			= pathinfo($source_files);
		$target_files	= UPLOAD_PATH.'/uploads/'.'userfiles/'.$this->getUserInfo()->IDPERUSAHAAN.'/files/'.$NIP.$pinfo['filename'].'.'.$pinfo['extension'];

		if(copy($source_files, $target_files)):
			unlink($source_files);
		endif;
		
		$data['IDPEGAWAI'] 	= $IDPEGAWAI;
		$data['USERFILES'] 	= $new_files;
		$data['TABLE']		= $TABLE;
		$data['IDTABLE']	= $IDTABLE;
		$this->getService()->saveattachment($data);
		exit();
    }
	
	public function moveimage($source_files, $target_files)
	{
		/**
		$source_files	= UPLOAD_PATH.'/uploads/files/photo.jpg';
		$target_files	= UPLOAD_PATH.'/uploads/files/testing/photo.jpg';
		*/
		
		switch(strtolower(substr($source_files, -3))) {
		case "jpg" :
			$fileType = "jpeg";
			$imageCreateFunction = "imagecreatefromjpeg";
			$imageOutputFunction = "imagejpeg";
			break;
		case "jpeg" :
			$fileType = "jpeg";
			$imageCreateFunction = "imagecreatefromjpeg";
			$imageOutputFunction = "imagejpeg";
			break;
		case "png" :
			$fileType = "png";
			$imageCreateFunction = "imagecreatefrompng";
			$imageOutputFunction = "imagepng";
			break;
		case "gif" :
			$fileType = "gif";
			$imageCreateFunction = "imagecreatefromgif";
			$imageOutputFunction = "imagegif";
			break;
		}
		
		$size = GetImageSize($source_files);
		$originalWidth = $size[0];
		$originalHeight = $size[1];
		
		$src = $imageCreateFunction($source_files);
		$dst = imagecreatetruecolor($originalWidth, $originalHeight);
		// Resample
		imagecopyresampled($dst, $src, 0, 0, 0, 0, $originalWidth, $originalHeight, $originalWidth, $originalHeight);
		
		// Save image
		$imageOutputFunction($dst, $target_files);
		
		ImageDestroy($src);
		ImageDestroy($dst);
		unlink($source_files);
		return true;
		exit();
	}
}

