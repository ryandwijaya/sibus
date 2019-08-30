<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

require_once FCPATH."vendor/autoload.php";
class LaporanController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Konfirmasi');
        $this->load->model('Pemesanan');
        $this->load->model('Jadwal');
        $this->load->model('Tujuan');
        date_default_timezone_set('Asia/Jakarta');
        
        
        
	}
	public function index()
	{

        if (!$this->session->has_userdata('session_username')){
            redirect(site_url('login'));
        }

        if (isset($_POST['lihat'])) {

        $data['konfirmasi'] = $this->Konfirmasi->getKonfirmasiTgl($this->input->post('tgl_dari'),$this->input->post('tgl_sampai'));
        $data['judul'] = 'Laporan';
        $this->load->view('templates/header',$data);
        $this->load->view('backend/laporan/index',$data);
        $this->load->view('templates/footer');    
        }
        elseif (isset($_POST['export'])) {

        if ($this->input->post('tgl_dari1')=='' && $this->input->post('tgl_sampai1')=='') {
            echo 'Silahkan Set Tanggal Terlebih Dahulu';
        }else{
        $inputFileName = 'assets/doc/laporan.xlsx';
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);  /*----Spreadsheet object-----*/
        $excelWriter = new Xlsx($spreadsheet);  /*----- Excel (Xlss) Object*/
        $spreadsheet->setActiveSheetIndex(0);

        $styleArray = array(
            'borders' => array(
                'outline' => array(
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => array('rgb' => '000000'),
                ),
            ),
        );

        $result = $this->Konfirmasi->getKonfirmasiTgl($this->input->post('tgl_dari1'),$this->input->post('tgl_sampai1'));

        $activeSheet = $spreadsheet->getActiveSheet();
        $row = 5;
        $no = 1;
        for ($i = 0; $i < count($result); $i++) {
            
            $activeSheet->setCellValue('A' . $row, '' . $no)
                ->getStyle('A' . $row)->applyFromArray($styleArray);
            $activeSheet->setCellValue('B' . $row, '' . $result[$i]['tiket_kode'])
                ->getStyle('B' . $row)->applyFromArray($styleArray);
            $activeSheet->setCellValue('C' . $row, '' . $result[$i]['tiket_nama'])
                ->getStyle('C' . $row)->applyFromArray($styleArray);
            $activeSheet->setCellValue('D' . $row, '' . $result[$i]['tujuan_lokasi'])
                ->getStyle('D' . $row)->applyFromArray($styleArray);
            $activeSheet->setCellValue('E' . $row, '' . $result[$i]['konfirmasi_no_rek'])
                ->getStyle('E' . $row)->applyFromArray($styleArray);
            $activeSheet->setCellValue('F' . $row, '' . date_indo($result[$i]['konfirmasi_tgl_bayar']))
                ->getStyle('F' . $row)->applyFromArray($styleArray);
            $activeSheet->setCellValue('G' . $row, '' . $result[$i]['konfirmasi_rekening'])
                ->getStyle('G' . $row)->applyFromArray($styleArray);           
            $row++;
            $no++;
        }

        $filename = 'Data Laporan'.$this->input->post('tgl_dari1').' - '.$this->input->post('tgl_sampai1');
        // Redirect output to a client’s web browser (Xlsx)
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename="' . $filename . '.xlsx"');
        $excelWriter->save("php://output");
        }

        }
        else{
        $data['konfirmasi'] = $this->Konfirmasi->getKonfirmasi();
        $data['judul'] = 'Laporan';
        $this->load->view('templates/header',$data);
        $this->load->view('backend/laporan/index',$data);
        $this->load->view('templates/footer');
        }
        
		
	}
    public function peminat_harian(){
  
            $hari = $this->input->post('tgl');
            $bulan = $this->input->post('bulan');
            $tahun = $this->input->post('tahun');
            
        $data = array(
            'title' => 'Data Tujuan | Wedding Organizer',
            'judul' => 'Data Tujuan Yang Diminati',
            'icon_title' => 'fa-file',
            'tujuan' => $this->Tujuan->getTujuan()
        );
        $this->load->view('templates/header', $data);
        $this->load->view('backend/peminat/tujuan',$data);
        $this->load->view('templates/footer');

    }
    public function surat_jalan($bus,$jadwal){
        $tgl = date('Y/m/d');          
        $data = array(
            'title' => 'Data Laporan Surat Jalan | Wedding Organizer',
            'judul' => 'Data Laporan Surat Jalan',
            'icon_title' => 'fa-file',
            'jadwal' => $this->Jadwal->get_surat_jalan($bus,$jadwal)
        );
        $this->load->view('templates/header', $data);
        $this->load->view('backend/jadwal/surat',$data);
        $this->load->view('templates/footer');
    }
    public function tiket(){
        $tgl = $this->input->post('tgl_tiket');
        $data = array(
            'title' => 'Rekapitulasi Tiket | Wedding Organizer',
            'judul' => 'Rekapitulasi Tiket',
            'icon_title' => 'fa-file',
            'tiket' => $this->Pemesanan->get_tiket($tgl)
        );
        $this->load->view('templates/header', $data);
        $this->load->view('backend/tiket/index',$data);
        $this->load->view('templates/footer');
    }


}
?>