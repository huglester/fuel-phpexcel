<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package		Fuel
 * @version		1.0
 * @author		Fuel Development Team
 * @license		MIT License
 * @copyright	2010 - 2012 Fuel Development Team
 * @link		http://fuelphp.com
 */

Autoloader::add_classes(array(
	'PHPExcel'                  => __DIR__.'/classes/PHPExcel.php',
    'PHPExcel_IOFactory'        => __DIR__.'/classes/PHPExcel/IOFactory.php',
    'PHPExcel_IComparable'      => __DIR__.'/classes/PHPExcel/IComparable.php',
    'PHPExcel_Worksheet'        => __DIR__.'/classes/PHPExcel/Worksheet.php',
    'PHPExcel_Shared_String'    => __DIR__.'/classes/PHPExcel/Shared/String.php',
    'PHPExcel_CachedObjectStorageFactory'       => __DIR__.'/classes/PHPExcel/CachedObjectStorageFactory.php',
    'PHPExcel_CachedObjectStorage_Memory'       => __DIR__.'/classes/PHPExcel/CachedObjectStorage/Memory.php',
    'PHPExcel_CachedObjectStorage_CacheBase'    => __DIR__.'/classes/PHPExcel/CachedObjectStorage/CacheBase.php',
    'PHPExcel_CachedObjectStorage_ICache'       => __DIR__.'/classes/PHPExcel/CachedObjectStorage/ICache.php',
    'PHPExcel_Worksheet_PageSetup'              => __DIR__.'/classes/PHPExcel/Worksheet/PageSetup.php',
    'PHPExcel_Worksheet_PageMargins'            => __DIR__.'/classes/PHPExcel/Worksheet/PageMargins.php',
    'PHPExcel_Worksheet_HeaderFooter'           => __DIR__.'/classes/PHPExcel/Worksheet/HeaderFooter.php',
    'PHPExcel_Worksheet_SheetView'              => __DIR__.'/classes/PHPExcel/Worksheet/SheetView.php',
    'PHPExcel_Worksheet_Protection'             => __DIR__.'/classes/PHPExcel/Worksheet/Protection.php',
    'PHPExcel_Worksheet_RowDimension'           => __DIR__.'/classes/PHPExcel/Worksheet/RowDimension.php',
    'PHPExcel_Worksheet_ColumnDimension'        => __DIR__.'/classes/PHPExcel/Worksheet/ColumnDimension.php',
    'PHPExcel_DocumentProperties'               => __DIR__.'/classes/PHPExcel/DocumentProperties.php',
    'PHPExcel_DocumentSecurity'                 => __DIR__.'/classes/PHPExcel/DocumentSecurity.php',
    'PHPExcel_Style'                            => __DIR__.'/classes/PHPExcel/Style.php',
    'PHPExcel_Style_Font'                       => __DIR__.'/classes/PHPExcel/Style/Font.php',
    'PHPExcel_Style_Color'                      => __DIR__.'/classes/PHPExcel/Style/Color.php',
    'PHPExcel_Style_Fill'                       => __DIR__.'/classes/PHPExcel/Style/Fill.php',
    'PHPExcel_Style_Borders'                    => __DIR__.'/classes/PHPExcel/Style/Borders.php',
    'PHPExcel_Style_Border'                     => __DIR__.'/classes/PHPExcel/Style/Border.php',
    'PHPExcel_Style_Alignment'                  => __DIR__.'/classes/PHPExcel/Style/Alignment.php',
    'PHPExcel_Style_NumberFormat'               => __DIR__.'/classes/PHPExcel/Style/NumberFormat.php',
    'PHPExcel_Style_Protection'                 => __DIR__.'/classes/PHPExcel/Style/Protection.php',
    'PHPExcel_ReferenceHelper'                  => __DIR__.'/classes/PHPExcel/ReferenceHelper.php',
    'PHPExcel_WorksheetIterator'                => __DIR__.'/classes/PHPExcel/WorksheetIterator.php',
    'PHPExcel_Calculation'                      => __DIR__.'/classes/PHPExcel/Calculation.php',
));