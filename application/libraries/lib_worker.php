<?php

class lib_worker
{
	function plot($page,$data = array())
	{
		$CI =& get_instance();
		$CI->load->view('common/top',$data);
		$CI->load->view('common/header',$data);
		$CI->load->view($page,$data);
		$CI->load->view('common/footer',$data);
		$CI->load->view('common/bottom',$data);
		
	}


	function adminplot($page,$data = array())
	{
		$CI =& get_instance();
		$CI->load->view('admin/common/top',$data);
		$CI->load->view('admin/common/header',$data);
		$CI->load->view($page,$data);
		$CI->load->view('admin/common/footer',$data);
		$CI->load->view('admin/common/bottom',$data);
		
	}

	
	function send_mail($email,$title,$message)
	{
		$CI =& get_instance();
		$CI->load->library('email');

		$CI->email->from($CI->config->item('email'), $CI->config->item('nome_email'));
		$CI->email->to($email);
		//$CI->email->cc('another@another-example.com');
		//$CI->email->bcc('them@their-example.com');

		$CI->email->subject($title);
		$CI->email->message($message);

		$CI->email->send();
		//$CI->send_mail($email,$title,$message);
	}
	
	function decode_ref($ref)
	{
		$valores = explode('-',$ref);
		if($valores[0] == 'p')
		{
			$output['cidade'] = 'Porto';
			$output['dia'] = '1';
			$output['edificio'] = '1';
		}
		else
		{
			$output['cidade'] = 'Lisboa';
			$output['dia'] = $valores[5];
			$output['edificio'] = $valores[4];
		}
		
		if($valores[2] <= 3)
		{
			$output['hora'] = $valores[2] + 9;
		}
		else
		{
			$output['hora'] = $valores[2] + 11;
		}
		$minutos = $valores[3] * 15;
		if($minutos > 0)
		{
			$output['hora'] .= ':'.$minutos;
		}
		else
		{
			$output['hora'] .= ':00';
		}
		
		
		$output['sala'] = $valores[1];
		
		
		return $output;
	}
}