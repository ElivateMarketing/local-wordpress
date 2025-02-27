<?php

namespace Test\Includes;

use PHPExcel_IOFactory;

class ExcelReader {
    public function readExcelFile($filePath) {
        $objPHPExcel = PHPExcel_IOFactory::load($filePath);
        $sheet = $objPHPExcel->getActiveSheet();
        $data = $sheet->toArray(null, true, true, true);
        return $data;
    }
}