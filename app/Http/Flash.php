<?php

namespace App\Http;

class Flash {

	public function message($title, $message)
	{
		session()->flash('flash_message', [
				'title' => $title,
				'message' => $message,
				'level' => 'info'
			]);
	}

	public function success($title, $message)
	{
		session()->flash('flash_message', [
				'title' => $title,
				'message' => $message,
				'level' => 'success'
			]);
	}

	public function error($title, $message)
	{
		session()->flash('flash_message', [
				'title' => $title,
				'message' => $message,
				'level' => 'error'
			]);
	}

}


// lets define the flash messages we want

// $flash->message('Hello there');
// $flash->error('')
// $flash->aside()
// $flash->overlay()
// $flash->success()