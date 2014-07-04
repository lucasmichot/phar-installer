<?php namespace Pharin\Commands;

class SearchCommand extends BaseCommand
{
    /**
     * {@inheritdoc}
     */
    protected $name = 'search';

    /**
     * {@inheritdoc}
     */
    protected $description = 'Search PHARs.';

    /**
     * {@inheritdoc}
     */
    public function fire()
    {
        $this->table($this->getHeaders(), $this->getRows());
    }

    /**
     * Get table headers.
     *
     * @return array
     */
    public function getHeaders()
    {
        return array('Name', 'Website', 'Stable', 'Old', 'Beta', 'Alpha', 'Installed');
    }

    /**
     * Get table rows.
     *
     * @return array
     */
    public function getRows()
    {
        $all = $this->all;

        $rows = array();

        foreach($this->all as $item) {

            $rows[] =  array(
                $item['name'],
                $item['website'],
                $item['versions']['stable'],
                $item['versions']['old'],
                $item['versions']['beta'],
                $item['versions']['alpha'],
                null,
            );

        }

        return $rows;

        return array(
            array(
                $all['name'],
                $all['website'],
                $all['versions']['stable'],
                $all['versions']['old'],
                $all['versions']['beta'],
                $all['versions']['alpha'],
                null,
            ),
        );
    }

} 