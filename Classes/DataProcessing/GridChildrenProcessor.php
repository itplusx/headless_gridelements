<?php

namespace ITplusX\HeadlessGridelements\DataProcessing;

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
        $processedRows = [];
        if (!empty($this->processedData['data']['tx_gridelements_backend_layout_resolved'])) {
            foreach ($this->processedData['data']['tx_gridelements_backend_layout_resolved']['config']['rows.'] as $rowNumber => $row) {
                $columns = [];
                foreach ($row['columns.'] as $column) {
                    $columns[] = [
                        'config' => $column,
                        'elements' => array_map(
                            'trim',
                            (
                                array_slice(
                                    explode('###BREAK###', $this->processedData['data']['tx_gridelements_view_columns'][$column['colPos']]),
                                    0,
                                    -1
                                )
                            )
                        )
                    ];
                }
                $processedRows[]['columns'] = $columns;
            }
        }
        return $processedRows;
    }
}
