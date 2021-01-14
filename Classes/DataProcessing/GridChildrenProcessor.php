<?php

namespace ITplusX\HeadlessGridelements\DataProcessing;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;

/**
 * Fetch records from the database, using the default .select syntax from TypoScript.
 */
class GridChildrenProcessor extends \GridElementsTeam\Gridelements\DataProcessing\GridChildrenProcessor
{
    /**
     * @return array
     */
    protected function sortRecordsIntoMatrix()
    {
        $processedColumns = [];
        foreach ($this->processedRecordVariables as $key => $processedRecord) {
            if (!isset($processedColumns[$processedRecord['data']['tx_gridelements_columns']])) {
                $processedColumns[$processedRecord['data']['tx_gridelements_columns']] = [];
            }
            $processedColumns[$processedRecord['data']['tx_gridelements_columns']][] = $processedRecord;
        }

        $processedRows = [];
        if (!empty($this->processedData['data']['tx_gridelements_backend_layout_resolved'])) {
            foreach ($this->processedData['data']['tx_gridelements_backend_layout_resolved']['config']['rows.'] as $rowNumber => $row) {
                $columns = [];
                foreach ($row['columns.'] as $column) {
                    $columns[] = [
                        'config' => $column,
                        'elements' => is_array($processedColumns[$column['colPos']]) === true ? $this->processRecords($processedColumns[$column['colPos']]) : []
                    ];
                }

                $processedRows[]['columns'] = $columns;
            }
        }

        return $processedRows;
    }

    /**
     * Process the records to be rendered as JSON
     *
     * @param array $records The array of records to process
     * @return array The processed records as JSON
     */
    private function processRecords(array $records): array {
        $processedRecords = [];

        foreach ($records as $record) {
            $processedRecords[] = $this->renderRecord($record['data']);
        }

        return $processedRecords;
    }

    /**
     * Render a record as JSON by given data array
     *
     * @param array $data The record data
     * @return string The JSON string of the rendered record
     */
    private function renderRecord(array $data): string {
        $recordContentObjectRenderer = GeneralUtility::makeInstance(ContentObjectRenderer::class);
        $recordContentObjectRenderer->start($data, 'tt_content');

        $conf = [
            'tables' => 'tt_content',
            'source' => $data['uid'],
            'dontCheckPid' => 1
        ];

        return $recordContentObjectRenderer->cObjGetSingle('RECORDS', $conf);
    }
}