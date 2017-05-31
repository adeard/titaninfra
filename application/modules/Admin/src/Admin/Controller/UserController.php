<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     AdminModule
 */

namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Zend\Crypt\BlockCipher,
	Zend\Crypt\Symmetric\Mcrypt,
	Zend\Crypt\Key\Derivation\Pbkdf2,
	Zend\Math\Rand;
	
use PHPExcel,
	PHPExcel_IOFactory,
	PHPExcel_Cell,
	PHPExcel_Style_Border,
	PHPExcel_Style_Fill,
	PHPExcel_Style_Alignment,
	PHPExcel_Style_NumberFormat;

use Service\Controller\UploadController;
	
class UserController extends AbstractActionController
{
    protected $sTable;
	protected $authservice;
	protected $privilege;
	protected $service;
	
	public function __construct()
    {
        $this->request	= $this->getRequest();
		
		/** encrypt */
		$this->cipher	= BlockCipher::factory('mcrypt', array('algo' => 'aes'));
		$this->cipher->setKey('encryption key');
	
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
				  
		/**
		$data = array();
		foreach (glob(LOGS_DIR."access/*.txt") as $file) 
		{
			$file_handle = fopen($file, "r");
			while (!feof($file_handle)) 
			{
				$line = fgets($file_handle);
				if($line)
				{
					$data[] = explode(" -- ", $line);
				}
			}
			fclose($file_handle);
		}
		
		var_dump($data);
		exit();
		*/

		/**	ROLE ACCESS VIEW */
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER, ACCESS_MODULE_1_USER, VIEW))
			$this->getPrivilege()->forbidden();
		
		$view = new ViewModel(array('sForm' 	=> 'table',
									'sParent'	=> '10',
									'sKode'		=> '10.01',
									'sMenuAct' 	=> 'User',
									'dashMenu'	=> array(array('url' => '/main', 'name' => 'Home', 'active' => ''),
														 array('url' => '', 'name' => 'User', 'active' => 'active')
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
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER, ACCESS_MODULE_1_USER, ADD))
			$this->getPrivilege()->forbidden();
		
		/** Call Group Table */
		$GroupTable = $this->getServiceLocator()->get('Admin\Model\GroupTable');
		
		$data['ISADMIN']		= $this->getUserInfo()->ISADMIN;
		$data['IDPERUSAHAAN']	= $this->getUserInfo()->IDPERUSAHAAN;
		
		if($data['ISADMIN'])
		{
			$IDPERUSAHAAN = '';
		}else{
			$IDPERUSAHAAN = $data['IDPERUSAHAAN'];
		}
	
		$view = new ViewModel(array('sForm' 	=> 'form',
									'dashMenu'	=> array(array('url' => '/main', 'name' => 'Home', 'active' => ''),
														 array('url' => '/admin/user', 'name' => 'User', 'active' => ''),
														 array('url' => '', 'name' => 'Add', 'active' => 'active')
														),
														
									'perusahaan'=> $this->getService()
														->fetchAllPerusahaan($IDPERUSAHAAN),
									'group'		=> $this->getService()->fetchAllGroup($data),
									'module'	=> $GroupTable->getModules($data),
									'tabs'		=> $GroupTable->getParentModules($data),
									'tabmodule'	=> $GroupTable->getTabsModules($group_id = NULL, $data),
									'ISADMIN'	=> $this->getUserInfo()->ISADMIN,
									'userinfo' 	=> $this->getUserInfo(),
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
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER, ACCESS_MODULE_1_USER, EDIT))
			$this->getPrivilege()->forbidden();
		
		/** Call Group Table */
		$GroupTable = $this->getServiceLocator()->get('Admin\Model\GroupTable');
		
		$id	= $this->params('id');
		$data['IDUSER']			= $id;
		$data['ISADMIN']		= $this->getUserInfo()->ISADMIN;
		$data['IDPERUSAHAAN']	= $this->getUserInfo()->IDPERUSAHAAN;
		
		if($data['ISADMIN'])
		{
			$IDPERUSAHAAN = '';
		}else{
			$IDPERUSAHAAN = $data['IDPERUSAHAAN'];
		}
		
		if (!$id) {
			return $this->getPrivilege()->invalidHandler();
			exit();
        }

		if (!$this->getTable()->checkID($data)) {
            return $this->getPrivilege()->invalidHandler();
			exit();
        }
		
		$desc = $this->getTable()->getData($data);
		if($desc->SECRETKEY != "")
		{
			$password = $this->cipher->decrypt($desc->SECRETKEY);
		}else{
			$password = "";
		}
		
		$view = new ViewModel(array('sForm' 	=> 'form',
									'dashMenu'	=> array(array('url' => '/main', 'name' => 'Home', 'active' => ''),
														 array('url' => '/admin/user', 'name' => 'User', 'active' => ''),
														 array('url' => '', 'name' => 'Edit', 'active' => 'active')
														),
									'userinfo' 	=> $this->getUserInfo(),
									'perusahaan'=> $this->getService()
														->fetchAllPerusahaan($IDPERUSAHAAN),
									'group'		=> $this->getService()->fetchAllGroup($data),
									'desc'		=> $desc,
									'password'	=> $password,
									'module'	=> $GroupTable->getModules($data),
									'tabs'		=> $GroupTable->getParentModules($data),
									'tabmodule'	=> $GroupTable->getTabsModules($group_id = NULL, $data),
									'ISADMIN'	=> $this->getUserInfo()->ISADMIN,
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
		
		$Identitas = $this->getServiceLocator()->get('Admin\Model\IdentitasTable');
		$data = $this->request->getPost()->toArray();
		$data['USERFILES']		= ($this->request->getPost('USERFILES') != '' ?
								   $this->request->getPost('USERFILES') : 
								   $this->request->getPost('USERFILESOLD'));
								   
		if($this->request->getPost('TGLLAHIR') != ''){
			$exp_tgl_lahir		= explode('/', $this->request->getPost('TGLLAHIR'));
			if(count($exp_tgl_lahir) < 2):
				$data['TGLLAHIR']	= $this->request->getPost('TGLLAHIR');
			else:
				$data['TGLLAHIR']	= $exp_tgl_lahir[2].'-'.$exp_tgl_lahir[1].'-'.$exp_tgl_lahir[0];
			endif;
			
		}else{
			$data['TGLLAHIR']	= '9999-09-09';
		}
		
		$data['IDPERUSAHAAN'] = 1;
		$data['ISADMIN'] 	= (int) $this->request->getPost('ISADMIN');
		$data['SECRETKEY']	= $this->cipher->encrypt($this->request->getPost('PASSWORD1'));
		$data['PASSWORD'] 	= $this->request->getPost('PASSWORD1');
		
		$data['CRBY']		= $this->getUserInfo()->IDUSER;
		$data['MDBY']		= $this->getUserInfo()->IDUSER;
		
		/** token_id */
		$salt 				= Rand::getBytes(32, true);
		$key  				= Pbkdf2::calc('sha256', $data['USERNAME'].'|'.$data['PASSWORD'], $salt, 10000, 10);
		$data['TOKENID']	= bin2hex($key);
		
		/** BEGIN UPLOAD IMAGE */
		if($this->request->getPost('USERFILES') != ''):
			$upload = new UploadController();
			
			$upload_dir = UPLOAD_PATH.'/uploads/';
			if (!is_dir($upload_dir.'/userfiles/'.$this->getUserInfo()->IDPERUSAHAAN.'/account')) {
				mkdir($upload_dir.'/userfiles/'.$this->getUserInfo()->IDPERUSAHAAN.'/account', 0755, true);
			}
			
			if($this->request->getPost('act') == 'edit'):	
				$dst_name	= $this->request->getPost('IDUSER');
			else:
				$dst_name	= $this->getTable()->getLastUserId();
			endif;
			
			$new_files	= $dst_name.'.'.pathinfo($upload_dir.'temp/'.$data['USERFILES'], PATHINFO_EXTENSION);
			rename($upload_dir.'temp/'.$data['USERFILES'], $upload_dir.'temp/'.$new_files);
			$source_files	= $upload_dir.'temp/'.$new_files;
			$pinfo 			= pathinfo($source_files);
			$target_files	= $upload_dir.'userfiles/'.$this->getUserInfo()->IDPERUSAHAAN.'/account/'.$pinfo['filename'].'.'.$pinfo['extension'];
			$upload->moveimage($source_files, $target_files);
			
			$data['USERFILES'] = $new_files;
			
		endif;
		/** END UPLOAD IMAGE */
		
		if ($this->request->isPost()){
			$action	= $this->request->getPost('act');
			$json["check_valid"] = 'valid';
			
			if($action == 'add'){

				if($this->getTable()->checkData($data) > 0){
					$json["check_valid"] 	= 'invalid';
					$json["message_info"] 	= 'User '.$data['USERNAME'].' sudah terpakai ';
				}else{
					$data['IDUSER'] = $this->getTable()->getLastUserId();
					
					$this->getTable()->connection->beginTransaction();
					try 
					{
						$this->getTable()->save($data);
						$Identitas->save($data);
						
						$this->getTable()->connection->commit();
					} catch (Exception $e) {
						$this->getTable()->connection->rollback();
					}
					
					$this->saveRole($data['IDUSER']);
					$json["message_info"] 	= 'Data berhasil di simpan';
				}
				
			}
			
			if($action == 'edit')
			{
				$RoleTable = $this->getServiceLocator()->get('Admin\Model\RoleTable');
				$RoleTable->delete($data['IDUSER']);
				
				$this->getTable()->connection->beginTransaction();
				try 
				{
					$this->getTable()->edit($data);
					$Identitas->edit($data);
					$this->getTable()->connection->commit();
				} catch (Exception $e) {
					$this->getTable()->connection->rollback();
				}	
				
				
				$this->saveRole($data['IDUSER']);
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
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER, ACCESS_MODULE_1_USER, DELETE))
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
	
	public function saveRole($user_id,$action='add')
	{
		$module_id				= $this->request->getPost('IDMODUL');
		$ordinal				= $this->request->getPost('ORDINAL');
		$group_id				= $this->request->getPost('IDGROUP');
		
		$RoleTable = $this->getServiceLocator()->get('Admin\Model\RoleTable');
		
		for($ii=0; $ii< count($module_id); $ii++)
		{
			$data['IDMODUL']		= $module_id[$ii];
			$data['ORDINAL']		= $ordinal[$ii];
			$data['IDGROUP']		= $group_id;
			$data['IDUSER']			= $user_id;
			$data['ROLEADD']		= (int) $this->request->getPost('ROLEADD_'.$module_id[$ii]);
			$data['ROLEVIEW']		= (int) $this->request->getPost('ROLEVIEW_'.$module_id[$ii]);
			$data['ROLEEDIT']		= (int) $this->request->getPost('ROLEEDIT_'.$module_id[$ii]);
			$data['ROLEDEL']		= (int) $this->request->getPost('ROLEDEL_'.$module_id[$ii]);
			$data['ROLERIP']		= (int) $this->request->getPost('ROLERIP_'.$module_id[$ii]);
			$data['CRBY']			= $this->getUserInfo()->IDUSER;
			$data['MDBY']			= $this->getUserInfo()->IDUSER;	
						  
			($action == 'add' ? $RoleTable->saveRole($data) : $RoleTable->updateRole($data));
		}
		
	}
	
	public function jsonAction() 
	{
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		$IDUSER 			= $this->getUserInfo()->IDUSER;
		$data['ISADMIN']	= $this->getUserInfo()->ISADMIN;
		
		if($data['ISADMIN'])
		{
			$IDPERUSAHAAN = '';
		}else{
			$IDPERUSAHAAN = $this->getUserInfo()->IDPERUSAHAAN;
		}
		
		$json		= $this->getTable()->fetchAll($IDUSER, $IDPERUSAHAAN, $this->getUserInfo()->ISADMIN);
		echo $json;
		exit();
	}
	
	public function jsontabsAction() 
	{
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		$data['IDUSER']  = $this->request->getPost('IDUSER');
		$data['ORDINAL'] = (int) $this->request->getPost('ORDINAL');
		$data['IDGROUP'] = (int) $this->request->getPost('IDGROUP');
		
		$RoleTable = $this->getServiceLocator()->get('Admin\Model\RoleTable');
		
		if($data['IDUSER'] != ''){
			$json		= $RoleTable->fetchAllRoleUser($data);
		}else{
			$json		= $RoleTable->fetchAllRoleGroup($data);
		}
		echo json_encode($json);
		exit();
	}
	
	
	public function checkAction()
	{
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		$data['USERNAME']	= $this->request->getQuery('USERNAME');
		$pattern 			= "/^[0-9a-zA-Z_.]{3,}$/";
		$valid				= 'true';
		
		if(!preg_match($pattern,$data['USERNAME'])){
			$valid	= 'false';
		}
		
		if($this->getTable()->checkData($data) > 0){
			$valid = 'false';
		}
		
		echo $valid;
		exit();
	}
	
	public function exportAction()
    {
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		/**	ROLE ACCESS */
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER, ACCESS_MODULE_1_USER, VIEW))
			$this->getPrivilege()->forbidden();
		
		if ($this->request->getQuery('excel'))
		{
			$objPHPExcel = new PHPExcel();
			$objPHPExcel->setActiveSheetIndex(0)
						->mergeCells('A2:I2')
						->mergeCells('A3:I3')
						->setCellValue('A5', 'No')
						->setCellValue('B5', 'User ID')
						->setCellValue('C5', 'Organisasi')
						->setCellValue('D5', 'Username')
						->setCellValue('E5', 'Group')
						->setCellValue('F5', 'Nama')
						->setCellValue('G5', 'Jns Kelamin')
						->setCellValue('H5', 'Email')
						->setCellValue('I5', 'Telp');
			
			$objPHPExcel->getActiveSheet()->getStyle("A5:I5")->getFont()->setBold(true)->getColor()->setRGB();
			$objPHPExcel->getActiveSheet()->getStyle("A2:I2")->getFont()->setBold(true)->getColor()->setRGB();
			
			/** ALIGNMENT */
			$objPHPExcel->getActiveSheet()
						->getStyle('A2:I3')
						->getAlignment()->applyFromArray(
							array(
								'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
								'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
								'rotation'   => 0,
								'wrap'		 => TRUE
							)
						);
			
			/** END ALIGNMENT */
			
			/** COLOR CELL */
			$objPHPExcel->getActiveSheet()
						->getStyle('A5:I5')
						->getFill()
						->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
						->getStartColor()
						->setARGB('DCDCDC');
			
			/** END COLOR CELL */
			
			/** AUTO WITH CELL */
			foreach(range('A','I') as $columnID)
			{
				$objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
			}
			/** END AUTO WITH CELL */

			$data = array(array("UserID" => "527617",
								"Organisasi" => "Dinas Kesehatan",
								"Username" => "Admin",
								"Group" => "Administrator",
								"Nama" => "Admin",
								"JnsKelamin" => "Laki-Laki",
								"Email" => "admin@zend.dev.id",
								"Telp" => "622167118299"),
								
						  array("UserID" => "527618",
								"Organisasi" => "Dinas Kehutanan",
								"Username" => "Rusdi",
								"Group" => "Administrator",
								"Nama" => "Rusdi Novanto",
								"JnsKelamin" => "Laki-Laki",
								"Email" => "rusdi@zend.dev.id",
								"Telp" => "62217615552"));
								
			$objPHPExcel->setActiveSheetIndex(0);
			$objPHPExcel->getActiveSheet()
						->setCellValue('A2', 'TABEL DAFTAR USER')	
						->setCellValue('A3', 'Sample Zend Framework');
			
			$objPHPExcel->setActiveSheetIndex(0);
			$ii = 6;							
			foreach($data as $val)
			{
				$objPHPExcel->getActiveSheet()
							->setCellValue('A'.$ii, $ii-5)
							->setCellValue('B'.$ii, $val['UserID'])
							->setCellValue('C'.$ii, $val['Organisasi'])
							->setCellValue('D'.$ii, $val['Username'])
							->setCellValue('E'.$ii, $val['Group'])
							->setCellValue('F'.$ii, $val['Nama'])
							->setCellValue('G'.$ii, $val['JnsKelamin'])
							->setCellValue('H'.$ii, $val['Email'])
							->setCellValue('I'.$ii, $val['Telp']);
				$ii++;
			}
			
			/** STYLE BORDER ALL */
			$styleArray = array(
			  'borders' => array(
				'allborders' => array(
				  'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			  )
			);
			
			$objPHPExcel->getActiveSheet()->getStyle('A5:I'.($ii-1))->applyFromArray($styleArray);
			unset($styleArray);
			/** END STYLE BORDER ALL */
			
			/** NUMBER FORMAT */
			$objPHPExcel->getActiveSheet()
						->getStyle('I6:I'.($ii-1))
						->getNumberFormat()->applyFromArray(
							array(
								'code' => PHPExcel_Style_NumberFormat::FORMAT_NUMBER
							)
						);
			/** END NUMBER FORMAT */
			
			$objPHPExcel->getActiveSheet()->setTitle('User');
			$objPHPExcel->setActiveSheetIndex(0);
	
			header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
			header('Content-Disposition: attachment;filename="user.xlsx"');
			header('Cache-Control: max-age=0');
			header('Cache-Control: max-age=1');
			
			header ('Expires: '.gmdate('D, d M Y H:i:s').' GMT');
			header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
			header ('Cache-Control: cache, must-revalidate');
			header ('Pragma: public');
			
			$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
			$objWriter->save('php://output');
			exit();
		}
		
		exit();
    }
	
	public function printAction()
    {
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		/**	ROLE ACCESS */
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER, ACCESS_MODULE_1_USER, VIEW))
			$this->getPrivilege()->forbidden();

			$sm  = $this->getServiceLocator();
			$pdf = $sm->get('QuTcPdf');
			$pdf = $pdf->MyPdf();
		  
			$pdf->SetCreator(PDF_CREATOR);
			$pdf->SetTitle('Zend Framework');
			$pdf->SetSubject('Sample Zend Framework');
			$pdf->SetKeywords('');
			
			$pdf->SetHeaderData('logo-big.png', 
								PDF_HEADER_LOGO_WIDTH, 
								'TABLE USER', 
								'Sample Zend Framework', 
								array(0,64,255), array(0,64,128));
			$pdf->setFooterData($tc=array(0,64,0), $lc=array(0,64,128));
			
			// set header and footer fonts
			$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
			$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
			
			// set default monospaced font
			$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
			
			//set margins
			$pdf->SetMargins(10, PDF_MARGIN_TOP, 10);
			$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
			$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
			
			//set auto page breaks
			$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
			
			//set image scale factor
			$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

			// set default font subsetting mode
			$pdf->setFontSubsetting(true);
			
			// Set font
			$pdf->SetFont('helvetica', '', 12);
			
			$pdf->AddPage();

			$html  = '<span stroke="0" fill="true">HTML Fill text</span><br />';
			$html .= '<span stroke="0.2" fill="false">HTML Stroke text</span><br />';
			$html .= '<span stroke="0.2" fill="true" strokecolor="#FF0000" color="#FFFF00">HTML Fill, then stroke text</span><br />';
			$html .= '<span stroke="0" fill="false">HTML Neither fill nor stroke text (invisible)</span><br />';
			
			$pdf->writeHTMLCell($w=0, $h=0, $x='', $y='', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='', $autopadding=true);		  
			
		  	$pdf->lastPage();
		  
			$pdf->Output('test.pdf','I');
			exit();
    }
	
	public function importAction()
    {
		error_reporting(E_ALL | E_STRICT);
		$Identitas = $this->getServiceLocator()->get('Admin\Model\IdentitasTable');
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
			$highestColumnIndex = 9;
			
			$sTable = '<div class="row" style="margin-top:30px;"><div class="scrolltable">';
			$sTable .= '<table cellpadding="0" 
							  cellspacing="0" 
							  border="0" 
							  class="table table-striped table-bordered">';
			
			$sTable .= '<thead>
						<tr>
							<th class="column">No</th>
							<th class="column">Username</th>
							<th class="column">Password</th>
							<th class="column">ID Group</th>
							<th class="column">Nama Depan</th>
							<th class="column">Nama Belakang</th>
							<th class="column">Jenis Kelamin</th>
							<th class="column">Email</th>
							<th class="column">Telp</th>
							<th class="column">HP</th>
							<th class="column">Status</th>
						</tr>
						</thead>';
			$sTable .= '<tbody>';
			
			$salt 				= Rand::getBytes(32, true);
			$rows = array();
			$data = array();
			for ($row = 6; $row <= $highestRow; $row++) 
			{
				for ($col = 0; $col <= $highestColumnIndex; ++$col)
				{
					$rows[$col] = $sheet->getCellByColumnAndRow($col, $row)->getValue();
				}

				/** QUERY */
				$data['IDUSER'] 	= $this->getTable()->getLastUserId();
				$data['USERNAME']	= $rows[1];
				$data['PASSWORD'] 	= $rows[2];
				$data['IDGROUP']	= $rows[3];
				$key  				= Pbkdf2::calc('sha256', $rows[2], $salt, 10000, 10);
				$data['SECRETKEY']	= $this->cipher->encrypt($rows[2]);
				$data['TOKENID']	= bin2hex($key);
				
				$data['NAMADEPAN']		= $rows[4];
				$data['NAMABELAKANG']	= $rows[5];
				$data['JNSKELAMIN']		= $rows[6];
				$data['TMPLAHIR']		= '';
				$data['TGLLAHIR']		= '9999-09-09';
				$data['EMAIL']			= $rows[7];
				$data['TELP']			= $rows[8];
				$data['HP']				= $rows[9];
				$data['CRBY']			= $this->getUserInfo()->IDUSER;
				$data['MDBY']			= $this->getUserInfo()->IDUSER;
				
				if($this->getTable()->checkData($data) > 0)
				{
					$sTable .= '<tr class="danger">';
					$sTable .= '<td class="column">'.$rows[0].'</td>';
					$sTable .= '<td class="column">'.$rows[1].'</td>';
					$sTable .= '<td class="column">'.$rows[2].'</td>';
					$sTable .= '<td class="column">'.$rows[3].'</td>';
					$sTable .= '<td class="column">'.$rows[4].'</td>';
					$sTable .= '<td class="column">'.$rows[5].'</td>';
					$sTable .= '<td class="column">'.$rows[6].'</td>';
					$sTable .= '<td class="column">'.$rows[7].'</td>';
					$sTable .= '<td class="column">'.$rows[8].'</td>';
					$sTable .= '<td class="column">'.$rows[9].'</td>';
					$sTable .= '<td class="column">Username sudah ada</td>';
					$sTable .= '</tr>';
				}else{
					$data['IDUSER'] = $this->getTable()->getLastUserId();
					
					$this->getTable()->connection->beginTransaction();
					try 
					{
						$this->getTable()->save($data);
						$Identitas->save($data);
						$this->getTable()->connection->commit();
					} catch (Exception $e) {
						$this->getTable()->connection->rollback();
					}
					
					$sTable .= '<tr>';
					$sTable .= '<td class="column">'.$rows[0].'</td>';
					$sTable .= '<td class="column">'.$rows[1].'</td>';
					$sTable .= '<td class="column">'.$rows[2].'</td>';
					$sTable .= '<td class="column">'.$rows[3].'</td>';
					$sTable .= '<td class="column">'.$rows[4].'</td>';
					$sTable .= '<td class="column">'.$rows[5].'</td>';
					$sTable .= '<td class="column">'.$rows[6].'</td>';
					$sTable .= '<td class="column">'.$rows[7].'</td>';
					$sTable .= '<td class="column">'.$rows[8].'</td>';
					$sTable .= '<td class="column">'.$rows[9].'</td>';
					$sTable .= '<td class="column">Succes</td>';
					$sTable .= '</tr>';
				}
				/** END QUERY */

			}
			$sTable .= '</tbody>';
			$sTable .= '</table>';
			$sTable .= '</div></div>';
			echo $sTable;
			unlink($files_dir);
			rmdir($upload_dir);
		}
		exit();
    }
	
    public function getTable()
    {
        if (!$this->sTable) {
            $sm = $this->getServiceLocator();
            $this->sTable = $sm->get('Admin\Model\UserTable');
        }
        return $this->sTable;
    }

}
