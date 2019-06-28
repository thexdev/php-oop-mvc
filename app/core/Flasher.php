<?php

class Flasher {
	public static function set_flash($msg, $act, $type)
	{
		$_SESSION['flash'] = [
			'msg' => $msg,
			'act' => $act,
			'type' => $type
		];
	}

	public static function flash()
	{
		if (isset($_SESSION['flash'])) {
			echo '
				<div class="alert alert-'. $_SESSION['flash']['type'] .' alert-dismissible fade show">
					<strong>Data Mahasiswa '. $_SESSION['flash']['msg'] . ' ' . $_SESSION['flash']['act'] .'</strong>
					<button type="button" class="close" data-dismiss="alert">&times;</button>
				</div>
			';
			unset($_SESSION['flash']);
		}
	}
}