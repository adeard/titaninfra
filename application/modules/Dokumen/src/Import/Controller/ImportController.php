<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     DokumenModule
 */

namespace Dokumen\Import\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use PHPExcel,
	PHPExcel_IOFactory,
	PHPExcel_Cell,
	PHPExcel_Style_Border,
	PHPExcel_Style_Fill,
	PHPExcel_Style_Alignment,
	PHPExcel_Style_NumberFormat;
	
class ImportController extends AbstractActionController
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
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER, ACCESS_MODULE_6_IMPORT, VIEW))
			$this->getPrivilege()->forbidden();
		
		$view = new ViewModel(array('sForm' 	=> 'form',
									'sParent'	=> '0',
									'sKode'		=> '12',
									'sMenuAct' 	=> 'Data Register',
									'dashMenu'	=> array(array('url' => '/main', 'name' => 'Home', 'active' => ''),
														 array('url' => '', 'name' => 'Import SPPB PIB', 'active' => 'active')
														),
									'userinfo' 	=> $this->getUserInfo(),
									)
							 );
		
		$view->setTerminal(true);
		return $view;
		
    }

    public function uploadAction()
	{
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		error_reporting(E_ALL | E_STRICT);
		$upload_dir = UPLOAD_PATH.'/tmp/'.$this->getUserInfo()->IDUSER.'/';
		
		if(isset($_FILES["USERFILES"]))
		{
			$filename 	= $_FILES['USERFILES']['name'];
			$files_dir 	= $upload_dir.$filename;
			
			if(!is_dir($upload_dir)) {
                mkdir($upload_dir, 0755, true);
            }
			
			move_uploaded_file($_FILES["USERFILES"]["tmp_name"],$files_dir);
			
			try {
				$inputFileType = PHPExcel_IOFactory::identify($files_dir);
				$objReader = PHPExcel_IOFactory::createReader($inputFileType);
				$objPHPExcel = $objReader->load($files_dir);
			} catch (Exception $e) {
				die('Error loading file "' . pathinfo($files_dir, PATHINFO_BASENAME) 
				. '": ' . $e->getMessage());
			}
			
			$sheet = $objPHPExcel->getSheet(0);
			$highestRow = $sheet->getHighestRow();
			$highestColumn = $sheet->getHighestColumn();
			$highestColumnIndex = 46;
			
			$rows = array();
			$data = array();
			for ($row = 6; $row <= $highestRow; $row++) 
			{
				for ($col = 0; $col <= $highestColumnIndex; ++$col)
				{
					$rows[$col] = $sheet->getCellByColumnAndRow($col, $row)->getFormattedValue();
				}

				/** QUERY */
				$data['KD_DOK']			= $rows[2];	
				$data['KD_TPS']			= $rows[3];	
				$data['NM_ANGKUT']		= $rows[4];	
				$data['NO_VOY_FLIGHT']	= $rows[5];	
				$data['CALL_SIGN']		= $rows[6];
				if($rows[7] != ''):
					$year_7		= substr($rows[7],0,4);
					$month_7 	= substr($rows[7],4,2);
					$date_7		= substr($rows[7],6,2);
					$data['TGL_TIBA']	= $year_7.'-'.$month_7.'-'.$date_7;
				else:
					$data['TGL_TIBA']	= '9999-09-09';
				endif;
				$data['KD_GUDANG']		= $rows[8];
				
				$data['NO_CONT']			= $rows[9];	
				$data['UK_CONT']			= $rows[10];	
				$data['NO_SEGEL']			= $rows[11];	
				$data['JNS_CONT']			= $rows[12];	
				$data['NO_BL_AWB']			= $rows[13];
				if($rows[14] != ''):
					$year_14	= substr($rows[14],0,4);
					$month_14 	= substr($rows[14],4,2);
					$date_14	= substr($rows[14],6,2);
					$data['TGL_BL_AWB']	= $year_14.'-'.$month_14.'-'.$date_14;
				else:
					$data['TGL_BL_AWB']	= '9999-09-09';
				endif;
				$data['NO_MASTER_BL_AWB']	= $rows[15];
				if($rows[16] != ''):
					$year_16	= substr($rows[16],0,4);
					$month_16 	= substr($rows[16],4,2);
					$date_16	= substr($rows[16],6,2);
					$data['TGL_MASTER_BL_AWB']	= $year_16.'-'.$month_16.'-'.$date_16;
				else:
					$data['TGL_MASTER_BL_AWB']	= '9999-09-09';
				endif;
				$data['ID_CONSIGNEE']		= $rows[17];	
				$data['CONSIGNEE']			= $rows[18];	
				$data['BRUTO']				= $rows[19];	
				$data['NO_BC11']			= $rows[20];
				if($rows[21] != ''):
					$year_21	= substr($rows[21],0,4);
					$month_21 	= substr($rows[21],4,2);
					$date_21	= substr($rows[21],6,2);
					$data['TGL_BC11']	= $year_21.'-'.$month_21.'-'.$date_21;
				else:
					$data['TGL_BC11']	= '9999-09-09';
				endif;
				$data['NO_POS_BC11']		= $rows[22];	
				$data['CONT_ASAL']			= $rows[23];	
				$data['SERI_KEMAS']			= $rows[24];	
				$data['KD_KEMAS']			= $rows[25];	
				$data['JML_KEMAS']			= $rows[26];	
				$data['KD_TIMBUN']			= $rows[27];	
				$data['KD_DOK_INOUT']		= $rows[28];	
				$data['NO_DOK_INOUT']		= $rows[29];
				if($rows[30] != ''):
					$year_30	= substr($rows[30],0,4);
					$month_30 	= substr($rows[30],4,2);
					$date_30	= substr($rows[30],6,2);
					$data['TGL_DOK_INOUT']	= $year_30.'-'.$month_30.'-'.$date_30;
				else:
					$data['TGL_DOK_INOUT']	= '9999-09-09';
				endif;
				$data['WK_INOUT']			= $rows[31];	
				$data['KD_SAR_ANGKUT_INOUT']= $rows[32];	
				$data['NO_POL']				= $rows[33];	
				$data['FL_CONT_KOSONG']		= $rows[34];	
				$data['ISO_CODE']			= $rows[35];	
				$data['PEL_MUAT']			= $rows[36];	
				$data['PEL_TRANSIT']		= $rows[37];	
				$data['PEL_BONGKAR']		= $rows[38];	
				$data['GUDANG_TUJUAN']		= $rows[39];	
				$data['KD_KANTOR_PABEAN']	= $rows[40];	
				$data['NO_DAFTAR_PABEAN']	= $rows[41];
				if($rows[42] != ''):
					$year_42	= substr($rows[42],0,4);
					$month_42 	= substr($rows[42],4,2);
					$date_42	= substr($rows[42],6,2);
					$data['TGL_DAFTAR_PABEAN']	= $year_42.'-'.$month_42.'-'.$date_42;
				else:
					$data['TGL_DAFTAR_PABEAN']	= '9999-09-09';
				endif;
				$data['NO_SEGEL_BC']		= $rows[43];
				if($rows[44] != ''):
					$year_44	= substr($rows[44],0,4);
					$month_44 	= substr($rows[44],4,2);
					$date_44	= substr($rows[44],6,2);
					$data['TGL_SEGEL_BC']	= $year_44.'-'.$month_44.'-'.$date_44;
				else:
					$data['TGL_SEGEL_BC']	= '9999-09-09';
				endif;
				$data['NO_DOK_IJIN_TPS']	= $rows[45];
				if($rows[46] != ''):
					$year_46	= substr($rows[46],0,4);
					$month_46 	= substr($rows[46],4,2);
					$date_46	= substr($rows[46],6,2);
					$data['TGL_DOK_IJIN_TPS']	= $year_46.'-'.$month_46.'-'.$date_46;
				else:
					$data['TGL_DOK_IJIN_TPS']	= '9999-09-09';
				endif;

				if($rows[1] != ''):
					$data['REF_NUMBER']		= $rows[1];
				else:
					$data['REF_NUMBER']		= $this->getTable()->getLastReff($data);
				endif;
				
				$data['IDPERUSAHAAN']	= $this->getUserInfo()->IDPERUSAHAAN;
				$data['CRBY']			= $this->getUserInfo()->IDUSER;
				$data['MDBY']			= $this->getUserInfo()->IDUSER;
				
				if (!$this->getTable()->checkID($data)):
					$this->getTable()->save($data);
					$data['ID_COARRICODECO'] = $this->getService()->getSecId('COARRICODECO_SEQ', 'tps');
				else:
					$desc	= $this->getTable()->getData($data);
					$data['ID_COARRICODECO'] = $desc->ID_COARRICODECO;
					$this->getTable()->edit($data);
				endif;
				
				if (!$this->getTable()->checkDetID($data)):
					$this->getTable()->saveDet($data);
				else:
					$this->getTable()->editDet($data);
				endif;
				/** END QUERY */

			}
			
			//var_dump($data);
			unlink($files_dir);
			rmdir($upload_dir);
			echo "Data berhasil di upload";
		}else{
			echo "Silahkan upload file excel";
		}
		
		exit();
	}
	
	public function jsonAction() 
	{
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		$data['MDBY']		= $this->getUserInfo()->IDUSER;
		$data['HISTORY']	= strtotime(date("Y-m-d H:i"));

		$json		= $this->getTable()->fetchAll($data);
		$this->getTable()->resetHistory($data);
		
		echo $json;
		exit();
	}
	
    public function getTable()
    {
        if (!$this->sTable) {
            $sm = $this->getServiceLocator();
            $this->sTable = $sm->get('Dokumen\Import\Model\ImportTable');
        }
        return $this->sTable;
    }

}
