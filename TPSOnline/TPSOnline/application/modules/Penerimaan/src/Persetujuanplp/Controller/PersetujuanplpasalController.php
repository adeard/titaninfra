<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     PengirimanModule
 */

namespace Penerimaan\Persetujuanplp\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use SoapClientWsdl;
	
class PersetujuanplpasalController extends AbstractActionController
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
	
	public function mainAction()
    {
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }

		/**	ROLE ACCESS VIEW */
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER,  ACCESS_MODULE_3_PLP, VIEW))
			$this->getPrivilege()->forbidden();
		
		$view = new ViewModel(array('sForm' 	=> 'form',
									'sParent'	=> '0',
									'sKode'		=> '12',
									'sMenuAct' 	=> 'Permohonanplp',
									'dashMenu'	=> array(array('url' => '/main', 'name' => 'Home', 'active' => ''),
														 array('url' => '', 'name' => 'Respon PLP TPS Asal', 'active' => 'active')
														),
									'userinfo' 	=> $this->getUserInfo(),
									)
							 );
		
		$view->setTerminal(true);
		return $view;
		
    }
	
    public function listAction()
    {
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }

		/**	ROLE ACCESS VIEW */
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER,  ACCESS_MODULE_3_PLP, VIEW))
			$this->getPrivilege()->forbidden();
		
		$view = new ViewModel(array('sForm' 	=> 'form',
									'sParent'	=> '0',
									'sKode'		=> '12',
									'sMenuAct' 	=> 'Permohonanplp',
									'dashMenu'	=> array(array('url' => '/main', 'name' => 'Home', 'active' => ''),
														 array('url' => '/penerimaan/persetujuanplpasal', 'name' => 'Respon PLP TPS Asal', 'active' => ''),
														 array('url' => '', 'name' => 'Respon PLP TPS Asal Peti Kemas', 'active' => 'active')
														),
									'userinfo' 	=> $this->getUserInfo(),
									)
							 );
		
		$view->setTerminal(true);
		return $view;
		
    }
	
	
    public function detailAction()
    {
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		/**	ROLE ACCESS EDIT */
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER,  ACCESS_MODULE_3_PLP, EDIT))
			$this->getPrivilege()->forbidden();
		
        $id	= $this->params('id');
		$data['ID_RESPONPLP'] = $id;
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
														 array('url' => '/penerimaan/persetujuanplpasal', 'name' => 'Respon PLP TPS Asal', 'active' => ''),
														 array('url' => '/penerimaan/persetujuanplpasal/list', 'name' => 'Respon PLP TPS Asal Peti Kemas 

', 'active' => ''),
														 array('url' => '', 'name' => 'Detail', 'active' => 'active')
														),
									'userinfo' 	=> $this->getUserInfo(),
									'desc'		=> $desc,
									)
							 );
							 
		$view->setTerminal(true);
		return $view;
    }
	
	public function sendAction()
    {
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		/**	ROLE ACCESS DELETE */
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER,  ACCESS_MODULE_3_PLP, VIEW))
			$this->getPrivilege()->forbidden();
		
		$json["check_valid"] = 'invalid';
		if ($this->request->isPost())
		{
			$soapUrl = "https://tpsonline.beacukai.go.id/tps/service.asmx?op=uploadMohonPLP";
			$soapAction = "http://services.beacukai.go.id/uploadMohonPLP";
			
			$soapUser 		= $this->getUserInfo()->TPS_USERNAME;
        	$soapPassword 	= $this->getUserInfo()->TPS_PASSWORD;
			
			$dxml = "";
			
			$uid = $this->request->getPost('UID');
			for($ii=0; $ii< count($uid); $ii++)
			{
				$id = $uid[$ii];
				$data['ID_RESPONPLP'] = $id;
				
				$desc 		= $this->getTable()->getData($data);
				$descDetail = $this->getTable()->getDataDetail($data);
				
				$dxml .='<?xml version="1.0" encoding="utf-8"?>
						<DOCUMENT xmlns="loadplp.xsd">
						<LOADPLP>
						<HEADER>
							<KD_KANTOR>'.$desc['KD_KANTOR'].'</KD_KANTOR>
							<TIPE_DATA>'.$desc['TIPE_DATA'].'<TIPE_DATA>
							<KD_TPS_ASAL>'.$desc['KD_TPS_ASAL'].'</KD_TPS_ASAL >
							<REF_NUMBER>'.$desc['REF_NUMBER'].'</REF_NUMBER>
							<NO_SURAT>'.$desc['NO_SURAT'].'</NO_SURAT>
							<TGL_SURAT>'.$desc['TGL_SURAT'].'</TGL_SURAT>
							<GUDANG_ASAL>'.$desc['GUDANG_ASAL'].'</GUDANG_ASAL>
							<KD_TPS_TUJUAN>'.$desc['KD_TPS_TUJUAN'].'</KD_TPS_TUJUAN>
							<GUDANG_TUJUAN>'.$desc['GUDANG_TUJUAN'].'</GUDANG_TUJUAN>
							<KD_ALASAN_PLP>'.$desc['KD_ALASAN_PLP'].'</KD_ALASAN_PLP>
							<YOR_ASAL>'.$desc['YOR_ASAL'].'</YOR_ASAL>
							<YOR_TUJUAN>'.$desc['YOR_TUJUAN'].'</YOR_TUJUAN>
							<CALL_SIGN>'.$desc['CALL_SIGN'].'</CALL_SIGN>
							<NM_ANGKUT>'.$desc['NM_ANGKUT'].'</NM_ANGKUT>
							<NO_VOY_FLIGHT>'.$desc['NO_VOY_FLIGHT'].'</NO_VOY_FLIGHT>
							<TGL_TIBA>'.$desc['TGL_TIBA'].'</TGL_TIBA>
							<NO_BC11>'.$desc['NO_BC11'].'</NO_BC11>
							<TGL_BC11>'.$desc['TGL_BC11'].'</TGL_BC11>
							<NM_PEMOHON>'.$desc['NM_PEMOHON'].'</NM_PEMOHON>
						</HEADER>
						<DETIL>';

				$dxml .='<CONT>
							<NO_CONT></NO_CONT>
							<UK_CONT></UK_CONT>
						</CONT>';

				$dxml .='</DETIL>
						 </LOADPLP>
						 </DOCUMENT>';
				
				$data = '<?xml version="1.0" encoding="utf-8"?>
						<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
							<soap:Body>
								<uploadMohonPLP xmlns="http://services.beacukai.go.id">
									<fStream>'.$xml.'</fStream>
									<Username>'.$soapUser.'</Username>
									<Password>'.$soapPassword.'</Password>
								</uploadMohonPLP>
							</soap:Body>
						</soap:Envelope>';
				
				$obj = new SoapClientWsdl($soapUrl, $soapAction);
				$obj->xmlRequest = $data;
				
				$json["check_valid"] = 'valid';
				$json["message_info"] 	= 'Data berhasil di kirim';
				
			}
			
			exit();
		}
		
		exit();
    }
	
	public function jsonAction() 
	{
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		$data['IDPERUSAHAAN'] 	= $this->getUserInfo()->IDPERUSAHAAN;
			
		$json		= $this->getTable()->fetchAll($data);
		echo $json;
		exit();
	}
	
    public function getTable()
    {
        if (!$this->sTable) {
            $sm = $this->getServiceLocator();
            $this->sTable = $sm->get('Penerimaan\Persetujuanplp\Model\PersetujuanplpasalTable');
        }
        return $this->sTable;
    }

}
