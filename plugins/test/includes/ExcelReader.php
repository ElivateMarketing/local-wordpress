<?php

namespace Test\Includes;

use PhpOffice\PhpSpreadsheet\IOFactory;

class ExcelReader {
    public function readExcelFile($filePath): mixed {
        $spreadsheet = IOFactory::load($filePath);
        $sheet = $spreadsheet->getActiveSheet();
        $data = $sheet->toArray(null, true, true, true);
        return $data;
    }
}