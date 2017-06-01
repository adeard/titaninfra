<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     ServiceModule
 */

namespace Service\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\Http\Response;
use Zend\View\Model\JsonModel;
	
class RestfullController extends AbstractRestfulController
{
	protected $sTable;
	protected $authservice;
	protected $privilege;
	
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
	
	/**	Get info user logedin */
	public function getUserInfo()
	{
		return $this->getAuthService()->getStorage()->read();
	}
	
	protected function methodNotAllowed()
	{
		$this->response->setStatusCode(405);
		throw new \Exception('Method Not Allowed');
	}
	
    public function get($id)
    {
		$result	= $this->getTable()->fetchAllGroup();
		return new JsonModel($result);
    }
    
    public function getList()
    {
	
        $response = $this->getResponseWithHeader()
                         ->setContent( __METHOD__.' get the list of data');
        return $response;
	
    }
    
    public function create($data)
    {
        $response = $this->getResponseWithHeader()
                         ->setContent( __METHOD__.' create new item of data :
                                                    <b>'.$data['secretkey'].'</b>');
        return $response;
    }
    
    public function update($id, $data)
    {
		/**
       	$response = $this->getResponseWithHeader()
                        ->setContent(__METHOD__.' update current data with id =  '.$id.
                                            ' with data of name is '.$data['name']) ;
       	return $response;
		*/
    }
    
    public function delete($id)
    {
		/**
        $response = $this->getResponseWithHeader()
                        ->setContent(__METHOD__.' delete current data with id =  '.$id) ;
        return $response;
		*/
    }
    
    public function getResponseWithHeader()
    {
        $response = $this->getResponse();
        $response->getHeaders()
                 ->addHeaderLine('Access-Control-Allow-Origin','*')
                 ->addHeaderLine('Access-Control-Allow-Methods','POST PUT DELETE GET');
        
        return $response;
    }
	
	public function getTable()
    {
        if (!$this->sTable) {
            $sm = $this->getServiceLocator();
            $this->sTable = $sm->get('Service\Model\RestfullTable');
        }
        return $this->sTable;
    }
}
