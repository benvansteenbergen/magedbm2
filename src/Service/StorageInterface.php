<?php

namespace Meanbee\Magedbm2\Service;

interface StorageInterface
{
    /**
     * Get the name of the latest backup file in the given project.
     *
     * @param string $project
     *
     * @return string Backup file name.
     */
    public function getLatestFile($project);

    /**
     * Upload the given backup file to the given project.
     *
     * @param string $project
     * @param string $file
     *
     * @return string Uploaded file name.
     */
    public function upload($project, $file);

    /**
     * Download the given backup file from the given project.
     *
     * @param string $project
     * @param string $file
     *
     * @return string Path to the downloaded file
     */
    public function download($project, $file);

    /**
     * Delete old backup files for the given project, keeping only the latest few.
     *
     * @param string $project
     * @param int    $keep The number of latest backup files to retain.
     *
     * @return void
     */
    public function clean($project, $keep = 5);
}
