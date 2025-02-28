<?php

namespace Test\Includes;

use PhpOffice\PhpSpreadsheet\IOFactory;

class ExcelReader {
    /**
     * Reads an Excel file and returns the data as an array.
     *
     * @param string $filePath The path to the Excel file.
     * @return mixed The data from the Excel file.
     */
    public function readExcelFile($filePath): mixed {
        $spreadsheet = IOFactory::load($filePath);
        $sheet = $spreadsheet->getActiveSheet();
        $data = $sheet->toArray(null, true, true, true);
        return $data;
    }
}