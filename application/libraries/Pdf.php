<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;

class Pdf
{
    public function ci()
    {
        get_instance();
    }
    public function generate($html, $filename = '', $stream = TRUE, $paper = 'A4', $orientation = 'potrait')
    {
        $dompdf = new DOMPDF();

        $dompdf->loadHtml($html);
        $dompdf->setPaper($paper, $orientation);
        $dompdf->render();
        if ($stream) {
            $dompdf->stream($filename . ".pdf", array("Attachment" => false));
        } else {
            return $dompdf->output();
        }
    }
}
