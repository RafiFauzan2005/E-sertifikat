<?php 

function akses()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('Login');
    }
}