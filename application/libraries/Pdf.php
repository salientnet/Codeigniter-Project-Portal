<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH . 'third_party/tcpdf/tcpdf.php';

class Pdf extends TCPDF
{
	public $_fonts_list = array();
	protected $last_page_flag = false;
	function __construct()
	{
		parent::__construct();
		$lg = array();
		$lg['a_meta_charset'] = 'UTF-8';
		// set some language-dependent strings (optional)
		$this->setLanguageArray($lg);
		$this->_fonts_list = $this->fontlist;;
	}
	public function Close() {
		$this->last_page_flag = true;
		parent::Close();
	}
	public function Header() {
		$this->SetFont('helvetica', 'B', 20);
	}
	public function Footer() {
        // Position at 15 mm from bottom
		$this->SetY(-15);
        // Set font
		$this->SetFont('helvetica', 'I', 8);
        // Page number
	}
	public function get_fonts_list(){
		return $this->_fonts_list;
	}
}

/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */
