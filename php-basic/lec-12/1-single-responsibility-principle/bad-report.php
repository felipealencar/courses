<?php
class Report {
    public function getTitle(){
        return 'Report Title';
    }

    public function getDate(){
        return '2018-01-22';
    }

    public function getContents(){
        return [
            'title' => $this->getTitle(),
            'date' => $this->getDate(),
        ];
    }

    public function formatJson(){
        return json_encode($this->getContents());
    }

    public function format(Report $report)
    {
        return json_encode($report->getContents());
    }
}
?>
