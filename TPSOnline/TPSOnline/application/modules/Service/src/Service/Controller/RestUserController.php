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
	
class RestUserController extends AbstractRestfulController
{
	protected $sTable;
	protected $service;
	
	public function __construct()
    {
        $this->request	= $this->getRequest();
		
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
	
	protected function methodNotAllowed()
	{
		$this->response->setStatusCode(405);
		throw new \Exception('Method Not Allowed');
	}
	
    public function get($id)
    {
		$data['user_id'] = $id;
		$result	= $this->getTable()->getData($data);
		$status = "Success";
			
		$view = new JsonModel(array( "Data" 	=> $result,
									 "Info" 	=> array("Created" 		=> date("Y-m-d H:i:s"),
									 					 "IPAddr" 		=> $_SERVER['REMOTE_ADDR'],
														 "Total" 		=> count($result),
														 "Action"		=> "List",
														 "QueryTime"	=> round(microtime(true) - $_SERVER['REQUEST_TIME'], 3)." sec",
														 "Status"		=> $status)
									)
							 );
		return $view;
    }
    
    public function getList()
    {
	
        $response = $this->getResponseWithHeader()
                         ->setContent( __METHOD__.' get the list of data');
        return $response;
	
    }

    
    public function create($data)
    {
        $data['username'] 	= $this->request->getPost('username');
		$data['password'] 	= $this->request->getPost('password');
		$data['user_id']	= 1;
		
		if(!$this->getService()->isAuth($data))
		{
			$result	= $data;
			$status = "Login Faild";
		}else{
			$result	= $data;
			$status = "Success";
		}
		
		$view = new JsonModel(array( "Data" 	=> $result,
									 "Info" 	=> array("Created" 		=> date("Y-m-d H:i:s"),
									 					 "IPAddr" 		=> $_SERVER['REMOTE_ADDR'],
														 "Total" 		=> count($result),
														 "Action"		=> "Insert",
														 "QueryTime"	=> round(microtime(true) - $_SERVER['REQUEST_TIME'], 3)." sec",
														 "Status"		=> $status)
									)
							 );
		return $view;
    }
    
    public function update($id, $data)
    {
		$data['user_id']	= $id;
		
		if(!$this->getService()->isAuth($data))
		{
			$result	= $data;
			$status = "Login Faild";
		}else{
			$result	= $data;
			$status = "Success";
		}
		
		$view = new JsonModel(array( "Data" 	=> $result,
									 "Info" 	=> array("Created" 		=> date("Y-m-d H:i:s"),
									 					 "IPAddr" 		=> $_SERVER['REMOTE_ADDR'],
														 "Total" 		=> count($result),
														 "Action"		=> "Update",
														 "QueryTime"	=> round(microtime(true) - $_SERVER['REQUEST_TIME'], 3)." sec",
														 "Status"		=> $status)
									)
							 );
		return $view;
	
    }
	
    public function delete($param)
    {
		$data['user_id']	= $id;
		$data['username'] 	= $id['username'];
		$data['password'] 	= $id['password'];
		
		if(!$this->getService()->isAuth($data))
		{
			$result	= $data;
			$status = "Login Faild";
		}else{
			$result	= $data;
			$status = "Success";
		}

		$result	= $data;
		$status = "Success";
		
		$view = new JsonModel(array( "Data" 	=> $result,
									 "Info" 	=> array("Created" 		=> date("Y-m-d H:i:s"),
									 					 "IPAddr" 		=> $_SERVER['REMOTE_ADDR'],
														 "Total" 		=> count($result),
														 "Action"		=> "Delete",
														 "QueryTime"	=> round(microtime(true) - $_SERVER['REQUEST_TIME'], 3)." sec",
														 "Status"		=> $status)
									)
							 );
		return $view;
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
            $this->sTable = $sm->get('Service\Model\RestUserTable');
        }
        return $this->sTable;
    }
}
