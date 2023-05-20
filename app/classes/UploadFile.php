<?php

namespace App\Classes;

class UploadFile
{

    protected $filename;
    protected $max_filesize = 2097152;
    protected $extension;
    protected $path;

    /**
     * Gets the file name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->filename;
    }

    /**
     * Sets the name of the uploaded file
     *
     * @param $file
     * @param $name = ""
     */
    protected function setName($file, $name = "")
    {
        if ($name === "")
        {
            $name = pathinfo($file, PATHINFO_FILENAME);
        }

        $name = strtolower(str_replace(['_', ' '], '-', $name));
        $hash = md5(microtime());
        $ext = $this->fileExtension($file);
        $this->filename = "{$name}-{$hash}.{$ext}";
    }

    /**
     * Sets file extension
     *
     * @param $file
     * @return mixed
     */
    protected function fileExtension($file)
    {
        return $this->extension = pathinfo($file, PATHINFO_EXTENSION);
    }

    /**
     * Validates file size
     *
     * @param $file
     * @return bool
     */
    public static function fileSize($file)
    {
        $fileObj = new static;
        return $file > $fileObj->max_filesize ? true : false;
    }


    /**
     * Validates uploaded file - checks if it's an image or not
     *
     * @param $file
     * @return bool
     */
    public static function isImage($file)
    {
        $fileObj = new static;
        $ext = $fileObj->fileExtension($file);
        $validExt = array('jpg', 'jpeg', 'png', 'bmp', 'gif');

        if (!in_array(strtolower($ext), $validExt)) return false;

        return true;
    }

    /**
     * Gets the path of the file it was uploaded to
     *
     * @return mixed
     */
    public function path()
    {
        return $this->path;
    }

    /**
     * Moves the file the desired location
     *
     * @param $temp_path
     * @param $dir
     * @param $file
     * @param $new_filename
     * @return null|static
     */
    public static function move($temp_path, $dir, $file, $new_filename)
    {
        $fileObj = new static;
        $ds = DIRECTORY_SEPARATOR;

        $fileObj->setName($file, $new_filename);
        $file_name = $fileObj->getName();

        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }

        $fileObj->path = "{$dir}{$ds}{$file_name}";
        $absolute_path = BASE_PATH . "{$ds}public{$ds}$fileObj->path";

        if (move_uploaded_file($temp_path, $absolute_path)) {
            // Return object instance so methods can be chained
            return $fileObj;
        }

        return null;
    }
    
}
