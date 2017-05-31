<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     PengirimanModule
 */

namespace Pengiriman\Container\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Http\Client,
    Zend\Http\Client\Adapter\Curl;

use SoapClientWsdl;
	
class ContainerController extends AbstractActionController
{
    protected $sTable;
	protected $authservice;
	protected $privilege;
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
	
	/** Get check priviledge module */
	public function getPrivilege()
    {
		if (! $this->privilege) {
        	$this->privilege = $this->getServiceLocator()
									->get('Privilege');
		}
		
        return $this->privilege;
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
	
    public function listAction()
    {
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }

		/**	ROLE ACCESS VIEW */
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER,  ACCESS_MODULE_3_CONTAINER, VIEW))
			$this->getPrivilege()->forbidden();
		
		$view = new ViewModel(array('sForm' 	=> 'form',
									'sParent'	=> '0',
									'sKode'		=> '12',
									'sMenuAct' 	=> 'Container',
									'dashMenu'	=> array(array('url' => '/main', 'name' => 'Home', 'active' => ''),
														 array('url' => '', 'name' => 'Coarri-Codeco Container', 'active' => 'active')
														),
									'userinfo' 	=> $this->getUserInfo(),
									)
							 );
		
		$view->setTerminal(true);
		return $view;
		
    }
	
	public function addAction()
    {
        /**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		/**	ROLE ACCESS ADD */
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER, ACCESS_MODULE_3_CONTAINER, ADD))
			$this->getPrivilege()->forbidden();
		
		$view = new ViewModel(array('sForm' 	=> 'form',
									'dashMenu'	=> array(array('url' => '/main', 'name' => 'Home', 'active' => ''),
														 array('url' => '/pengiriman/container', 'name' => 'Coarri-Codeco Container', 'active' => ''),
														 array('url' => '', 'name' => 'Add', 'active' => 'active')
														),
									'userinfo' 	=> $this->getUserInfo(),
									'kode_dok' 	=> $this->getService()->fetchAllKodeDokumen(),
									)
							 );
							 
		$view->setTerminal(true);
		return $view;
    }
	
    public function editAction()
    {
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		/**	ROLE ACCESS EDIT */
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER,  ACCESS_MODULE_3_CONTAINER, EDIT))
			$this->getPrivilege()->forbidden();
		
        $id	= $this->params('id');
		$data['ID_COARRICODECO'] = $id;
        if (!$id) {
			return $this->getPrivilege()->invalidHandler();
			exit();
        }
		
		if (!$this->getTable()->checkID($data)) {
            return $this->getPrivilege()->invalidHandler();
			exit();
        }
		
		$desc = $this->getTable()->getData($data);

		$view = new ViewModel(array('sForm' 	=> 'form',
									'dashMenu'	=> array(array('url' => '/main', 'name' => 'Home', 'active' => ''),
														 array('url' => '/pengiriman/container', 'name' => 'Coarri-Codeco Container', 'active' => ''),
														 array('url' => '', 'name' => 'Edit', 'active' => 'active')
														),
									'userinfo' 	=> $this->getUserInfo(),
									'kode_dok' 	=> $this->getService()->fetchAllKodeDokumen(),
									'desc'		=> $desc,
									)
							 );
							 
		$view->setTerminal(true);
		return $view;
    }
	
	public function saveAction()
    {
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		$data = $this->request->getPost()->toArray();
		if($this->request->getPost('TGL_TIBA') != ''){
			$exp_tgl		= explode('/', $this->request->getPost('TGL_TIBA'));
			if(count($exp_tgl) < 2):
				$data['TGL_TIBA']	= $this->request->getPost('TGL_TIBA');
			else:
				$data['TGL_TIBA']	= $exp_tgl[2].'-'.$exp_tgl[1].'-'.$exp_tgl[0];
			endif;
			
		}else{
			$data['TGL_TIBA']	= '9999-09-09';
		}
		
		$data['IDPERUSAHAAN']	= $this->getUserInfo()->IDPERUSAHAAN;
		$data['ID_SERVICE_TYPE']= 1;
			
		$data['CRBY']			= $this->getUserInfo()->IDUSER;
		$data['MDBY']			= $this->getUserInfo()->IDUSER;
		
		if ($this->request->isPost()){
			$action	= $this->request->getPost('act');
			$json["check_valid"] = 'valid';
			
			if($action == 'add')
			{
				$data['REF_NUMBER']		= $this->getTable()->getLastReff($data);
				$this->getTable()->save($data);
				$json["id"] = $this->getService()->getSecId('COARRICODECO_SEQ', 'tps');
				$json["message_info"] 	= 'Data berhasil di simpan';
			}
			
			if($action == 'edit')
			{	
				$this->getTable()->edit($data);
				$json["message_info"] 	= 'Data berhasil di perbaharui';
			}
        
		}
		
		echo json_encode($json);
		exit();
    }
	
    public function deleteAction()
    {
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		/**	ROLE ACCESS DELETE */
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER,  ACCESS_MODULE_3_CONTAINER, DELETE))
			$this->getPrivilege()->forbidden();
		
		$remove = (int) $this->request->getQuery('remove');
		if ($this->request->isPost() AND $remove)
		{
			$uid = $this->request->getPost('UID');
			for($ii=0; $ii< count($uid); $ii++)
			{
				$id = $uid[$ii];
				$this->getTable()->delete($id);
			}
			
			exit();
		}
		
		$id = $this->params('id');
		if($id AND $remove){
			$this->getTable()->delete($id);
		}
		
		exit();
    }
	
	public function sendAction()
    {
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		/**	ROLE ACCESS DELETE */
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER,  ACCESS_MODULE_3_CONTAINER, VIEW))
			$this->getPrivilege()->forbidden();
		
		if ($this->request->isPost())
		{
			$uid = $this->request->getPost('UID');
			for($ii=0; $ii< count($uid); $ii++)
			{
				$id = $uid[$ii];
				/***/
			}
			
			exit();
		}
		
		exit();
    }
	
	public function searchAction()
    {
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		$data = $this->request->getPost()->toArray();
		
		$json["check_valid"] = 'valid';
		if ($this->request->isPost())
		{			
			$json["REF_NUMBER"] = $this->request->getPost('REF_NUMBER');
			
			if($this->request->getPost('TGL_TIBA') != ''){
				$exp_tgl = explode('/', $this->request->getPost('TGL_TIBA'));
				if(count($exp_tgl) < 2):
					$json["TGL_TIBA"] 	= $this->request->getPost('TGL_TIBA');
				else:
					$json['TGL_TIBA']	= $exp_tgl[2].'-'.$exp_tgl[1].'-'.$exp_tgl[0];
				endif;
			}else{
				$json['TGL_TIBA']	= "";
			}
			
		}else{
			$json["REF_NUMBER"] = "";
			$json["TGL_TIBA"] 	= "";
			$json["message_info"] = 'Pencarian gagal';
		}
		
		echo json_encode($json);
		exit();
    }
	
	public function jsonAction() 
	{
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		$data['IDPERUSAHAAN'] 	= $this->getUserInfo()->IDPERUSAHAAN;
		$data['REF_NUMBER'] 	= $this->request->getQuery('REF_NUMBER');
		$data['TGL_TIBA'] 		= $this->request->getQuery('TGL_TIBA');

		$json		= $this->getTable()->fetchAll($data);
		echo $json;
		exit();
	}
	
	public function testingAction()
	{
		$soapUrl = "https://tpsonline.beacukai.go.id/tps/service.asmx?op=CoCoCont_Tes";
		$soapAction = "http://services.beacukai.go.id/CoCoCont_Tes";
		
		$soapUser 		= "TES";
        $soapPassword 	= "1234";

		
		$xml  = '<?xml version="1.0" encoding="utf-8"?>
				<DOCUMENT xmlns="cococont.xsd">
					<COCOCONT>
						<HEADER>
							<KD_DOK></KD_DOK>
							<KD_TPS></KD_TPS>
							<NM_ANGKUT></NM_ANGKUT>
							<NO_VOY_FLIGHT></NO_VOY_FLIGHT>
							<CALL_SIGN></CALL_SIGN>
							<TGL_TIBA></TGL_TIBA>
							<KD_GUDANG></KD_GUDANG>
							<REF_NUMBER></REF_NUMBER>
						</HEADER>
						<DETIL>
							<CONT>
								<NO_CONT></NO_CONT>
								<UK_CONT></UK_CONT>
								<NO_SEGEL></NO_SEGEL>
								<JNS_CONT></JNS_CONT>
								<NO_BL_AWB></NO_BL_AWB>
								<TGL_BL_AWB></TGL_BL_AWB>
								<NO_MASTER_BL_AWB></NO_MASTER_BL_AWB>
								<TGL_MASTER_BL_AWB></TGL_MASTER_BL_AWB>
								<ID_CONSIGNEE></ID_CONSIGNEE>
								<CONSIGNEE></CONSIGNEE>
								<BRUTO></BRUTO>
								<NO_BC11></NO_BC11>
								<TGL_BC11></TGL_BC11>
								<NO_POS_BC11></NO_POS_BC11>
								<KD_TIMBUN></KD_TIMBUN>
								<KD_DOK_INOUT></KD_DOK_INOUT>
								<NO_DOK_INOUT></NO_DOK_INOUT>
								<TGL_DOK_INOUT></TGL_DOK_INOUT>
								<WK_INOUT></WK_INOUT>
								<KD_SAR_ANGKUT_INOUT></KD_SAR_ANGKUT_INOUT>
								<NO_POL></NO_POL>
								<FL_CONT_KOSONG></FL_CONT_KOSONG>
								<ISO_CODE></ISO_CODE>
								<PEL_MUAT></PEL_MUAT>
								<PEL_TRANSIT></PEL_TRANSIT>
								<PEL_BONGKAR></PEL_BONGKAR>
								<GUDANG_TUJUAN></GUDANG_TUJUAN>
								<KODE_KANTOR></KODE_KANTOR>
								<NO_DAFTAR_PABEAN></NO_DAFTAR_PABEAN>
								<TGL_DAFTAR_PABEAN ></TGL_DAFTAR_PABEAN>
								<NO_SEGEL_BC></NO_SEGEL_BC>
								<TGL_SEGEL_BC></TGL_SEGEL_BC>
								<NO_IJIN_TPS></NO_IJIN_TPS>
								<TGL_IJIN_TPS></TGL_IJIN_TPS>
							</CONT>
						</DETIL>
					</COCOCONT>
				</DOCUMENT>';

		/**
		$xml .='<?xml version="1.0" encoding="utf-8"?>
				<DOCUMENT xmlns="cococont.xsd">
				<COCOCONT>
				<HEADER>
					<KD_DOK></KD_DOK>
					<KD_TPS></KD_TPS>
					<NM_ANGKUT></NM_ANGKUT>
					<NO_VOY_FLIGHT></NO_VOY_FLIGHT>
					<CALL_SIGN></CALL_SIGN>
					<TGL_TIBA></TGL_TIBA>
					<KD_GUDANG></KD_GUDANG>
					<REF_NUMBER></REF_NUMBER>
				</HEADER>
				<DETIL>';
		
		$xml .='<CONT>
					<NO_CONT></NO_CONT>
					<UK_CONT></UK_CONT>
					<NO_SEGEL></NO_SEGEL>
					<JNS_CONT></JNS_CONT>
					<NO_BL_AWB></NO_BL_AWB>
					<TGL_BL_AWB></TGL_BL_AWB>
					<NO_MASTER_BL_AWB></NO_MASTER_BL_AWB>
					<TGL_MASTER_BL_AWB></TGL_MASTER_BL_AWB>
					<ID_CONSIGNEE></ID_CONSIGNEE>
					<CONSIGNEE></CONSIGNEE>
					<BRUTO></BRUTO>
					<NO_BC11></NO_BC11>
					<TGL_BC11></TGL_BC11>
					<NO_POS_BC11></NO_POS_BC11>
					<KD_TIMBUN></KD_TIMBUN>
					<KD_DOK_INOUT></KD_DOK_INOUT>
					<NO_DOK_INOUT></NO_DOK_INOUT>
					<TGL_DOK_INOUT></TGL_DOK_INOUT>
					<WK_INOUT></WK_INOUT>
					<KD_SAR_ANGKUT_INOUT></KD_SAR_ANGKUT_INOUT>
					<NO_POL></NO_POL>
					<FL_CONT_KOSONG></FL_CONT_KOSONG>
					<ISO_CODE></ISO_CODE>
					<PEL_MUAT></PEL_MUAT>
					<PEL_TRANSIT></PEL_TRANSIT>
					<PEL_BONGKAR></PEL_BONGKAR>
					<GUDANG_TUJUAN></GUDANG_TUJUAN>
					<KODE_KANTOR></KODE_KANTOR>
					<NO_DAFTAR_PABEAN></NO_DAFTAR_PABEAN>
					<TGL_DAFTAR_PABEAN ></TGL_DAFTAR_PABEAN>
					<NO_SEGEL_BC></NO_SEGEL_BC>
					<TGL_SEGEL_BC></TGL_SEGEL_BC>
					<NO_IJIN_TPS></NO_IJIN_TPS>
					<TGL_IJIN_TPS></TGL_IJIN_TPS>
				</CONT>';
		
		$xml .='</DETIL>
				</COCOCONT>
				</DOCUMENT>';
		
		*/
		

		$data = '<?xml version="1.0" encoding="utf-8"?>
					<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  						<soap:Body>
    						<CoCoCont_Tes xmlns="http://services.beacukai.go.id">
								<fStream>'.$xml.'</fStream>
								<Username>'.$soapUser.'</Username>
								<Password>'.$soapPassword.'</Password>
							</CoCoCont_Tes>
						</soap:Body>
					</soap:Envelope>';
		
		$obj = new SoapClientWsdl($soapUrl, $soapAction);
		$obj->xmlRequest = $data;
		var_dump($obj->send());

		exit();
	}
	
	public function tesAction()
	{
		
		try {
		  	$client = new \Zend\Soap\Client("https://tpsonline.beacukai.go.id/tps/service.asmx?WSDL");
		  	$result = $client->CoCoCont_Tes("fStream");
		  	print_r($result);
		} catch (SoapFault $s) {
		  	die('ERROR: [' . $s->faultcode . '] ' . $s->faultstring);
		} catch (Exception $e) {
		  	die('ERROR: ' . $e->getMessage());
		}
		
		exit();
	}
	
    public function getTable()
    {
        if (!$this->sTable) {
            $sm = $this->getServiceLocator();
            $this->sTable = $sm->get('Pengiriman\Container\Model\ContainerTable');
        }
        return $this->sTable;
    }

}
