<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*Single Image upload*/
if (!function_exists('upload_image')) {
    function upload_image($file_name, $form_name, $path)
    {

        $CI = &get_instance();
        $config['upload_path']          = $path;
        $config['allowed_types']        = '*';
        $config['file_name']            = $file_name;
        /* $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;*/

        $CI->load->library('upload');
        $CI->upload->initialize($config);
        if (!$CI->upload->do_upload($form_name)) {
            $error = array('error' => $CI->upload->display_errors());
            return $error;
        } else {
            $data = array('upload_data' => $CI->upload->data());

            return true;
        }
    }
}

/*var_dump with echo*/
if (!function_exists('dd')) {
    function dd($data)
    {
        echo "<pre>";
        var_dump($data);
        die;
    }
}
